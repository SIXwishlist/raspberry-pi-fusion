<?php 

########## functions common ##########

// convert bytes format
function format_Bytes($size,$level=0,$precision=2,$base=1024) 
{
    if ($size === 0 || $size === null) {
            return "0B";
        }
	else
		$unit = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB','YB');
		$times = floor(log($size,$base));
		return sprintf("%.".$precision."f",$size/pow($base,($times+$level)))." ".$unit[$times+$level];
}

// function by raspcontrol - modified by Andy_P
function txt_to_html_table($txtFile)
{
	$txtFile = preg_split('/[\r\n]+/', $txtFile);

	// remove double (or more) spaces for all items
	foreach ($txtFile as &$item) {
		$item = preg_replace('/[[:blank:]]+/', ' ', $item);
		$item = trim($item);
	}

	// remove empty lines
	$txtFile = array_filter($txtFile);

	// the first line contains titles
	$columnCount = preg_match_all('/\s+/', $txtFile[0]);
	$txtFile[0] = '<tr><th>' . preg_replace('/\s+/', '</th><th>', $txtFile[0], $columnCount) . '</th></tr>';
	$tableHead = $txtFile[0];
	unset($txtFile[0]);

	// others lines contains table lines
	foreach ($txtFile as &$item) {
		$item = '<tr><td>' . preg_replace('/\s+/', '</td><td>', $item, $columnCount) . '</td></tr>';
	}

	// return the build table
	return '<table class=\'table table-striped\'>'
				. '<thead>' . $tableHead . '</thead>'
				. '<tbody>' . implode($txtFile) . '</tbody>'
			. '</table>';
}

########## functions settings.ini.php ##########
// write functions found here: http://php.net/manual/de/function.parse-ini-file.php#94414
// write functions found here: http://stackoverflow.com/questions/5709917/problem-with-parse-ini-file
// security hint found here: http://php.net/manual/de/function.parse-ini-file.php#99474

function read_Settings()
{
	$configArray = array();
	#$configFile = $_SERVER['DOCUMENT_ROOT']."/fusion/config/settings.ini.php";  // do not work if php file starts in background (like reboot.php)
	$configFile = '/var/www/html/fusion/config/settings.ini.php';
    $configArray = parse_ini_file($configFile);  // read without groups
	
	return $configArray;
}

#function write_Settings($configArray, $configFile)
function write_Settings($configArray)
{
    #$configFile = "../config/settings.ini.php";
	#$configFile = $_SERVER['DOCUMENT_ROOT']."/fusion/config/settings.ini.php";
	$configFile = '/var/www/html/fusion/config/settings.ini.php';
	$result = array(';<?php', ';die();');  // security php tag
	ksort($configArray);  // sort array to keys
    foreach($configArray as $key => $val)
    {
        if(is_array($val))
        {
            $result[] = "[$key]";
            foreach($val as $skey => $sval) $result[] = "$skey = ".(is_numeric($sval) ? $sval : '"'.$sval.'"');
        }
        else $result[] = "$key = ".(is_numeric($val) ? $val : '"'.$val.'"');
    }
	$result[] = ';?>';  // security php tag
    if ($fp = fopen($configFile, 'w'))
	{
		$startTime = microtime();
		do
		{
			$canWrite = flock($fp, LOCK_EX);
			// If lock not obtained sleep for 0 - 100 milliseconds, to avoid collision and CPU load
			if (!$canWrite)
				usleep(round(rand(0, 100)*1000));
		} while ((!$canWrite) && ((microtime()-$startTime) < 1000));
		// file was locked so now we can store information
		if ($canWrite)
		{
			fwrite($fp, implode(PHP_EOL, $result));
			flock($fp, LOCK_UN);
		}
		fclose($fp);
	}
}

#######



function sys_Services() {

    $result = array();

	exec ('service --status-all', $matches);

    for ($i = 0; $i < count($matches); $i++) {
        $matches[$i] = preg_replace('!\s+!', ' ', $matches[$i]);
        preg_match_all('/\S+/', $matches[$i], $details);
        list($bracket1, $status, $bracket2, $service) = $details[0];

        $result[$i]['service'] = $service;
		$result[$i]['status'] = $status;
		
			if ($result[$i]['status'] == '+')	{
				$result[$i]['label'] = 'Running';
				$result[$i]['badge'] = 'badge bg-green';
				}
			elseif ($result[$i]['status'] == '-')	{     
				$result[$i]['label'] = 'Stopped';
				$result[$i]['badge'] = 'badge bg-red';
				}
			elseif ($result[$i]['status'] == '?')	{     
				$result[$i]['label'] = 'Unknown';
				$result[$i]['badge'] = 'badge bg-yellow';
			}
    }

    return $result;
}




function sys_Users_Connected() {

    $result = array();

    $output = shell_exec ('who --ips');
    $outputDNS = shell_exec ('who --lookup');

    foreach (explode("\n", $outputDNS) as $line) {
		$line = preg_replace("/ +/", " ", $line);

            if (strlen($line) > 0) {
                $line = explode(" ", $line);
                $temp[] = $line[5];
            }
    }

		$i = 0;
    foreach (explode("\n", $output) as $line) {
        $line = preg_replace("/ +/", " ", $line);

            if (strlen($line) > 0) {
                $line = explode(" ", $line);

                $result[] = array(
                    'user' => $line[0],
					'port' => $line[1],
                    'ip' => $line[5],
                    'dns' => $temp[$i],
                    'date' => $line[2] . ' ' . $line[3],
                    'time' => $line[4]
                );
            }
		$i++;
    }

    return $result;
}

########## functions system ##########

function sys_Runtime()
{
	$output = shell_exec('TZ=UTC date -d@$(cut -d\  -f1 /proc/uptime) +\'%j %T\' | awk \'{print $1-1"d",$2}\'');
		
	return $output;
}

function sys_Rundate()
{
	$output = shell_exec('date -d @$(( $(date +%s) - $(cut -f1 -d. /proc/uptime) ))');
	
	return $output;
}

function sys_Packages_Count()  // count
{
	$output = shell_exec('dpkg --get-selections | grep -v deinstall | wc -l');
	
	return $output;
}

function sys_Packages()
{
    $result = array();
	
    exec('dpkg -l | grep -v "| " | grep -v "=" | grep -v "Trig" | grep -v ")" | grep -v "+++-"', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		$matches[$i] = preg_replace('!\s+!', ' ', $matches[$i]);
		preg_match_all('/\S+/', $matches[$i], $details);
		list($install, $name, $version, $architecture, $description) = $details[0];
        
		$result[$i]['install'] = $install;
		$result[$i]['name'] = $name;
		$result[$i]['version'] = $version;
		$result[$i]['architecture'] = $architecture;
		$result[$i]['description'] = $description;
    }
    
	return $result;
}

function sys_Processes_Running()  // count
{
	$output = shell_exec('ps -auxeaf | wc -l');
	
	return $output;
}

function sys_Processes()
{
    $result = array();
	
    exec('ps aux', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		$matches[$i] = preg_replace('!\s+!', ' ', $matches[$i]);
		preg_match_all('/\S+/', $matches[$i], $details);
		list($user, $pid, $cpu, $mem, $vsz, $rss, $tty, $stat, $start, $time, $command) = $details[0];
        
		$result[$i]['user'] = $user;
		$result[$i]['pid'] = $pid;
		$result[$i]['cpu'] = $cpu;
		$result[$i]['mem'] = $mem;
		$result[$i]['vsz'] = $vsz;
		$result[$i]['rss'] = $rss;
		$result[$i]['tty'] = $tty;
		$result[$i]['stat'] = $stat;
		$result[$i]['start'] = $start;
		$result[$i]['time'] = $time;
		$result[$i]['command'] = $command;
    }
    
	return $result;
}

function sys_Modules()
{
    $result = array();
	
    exec('lsmod', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		$matches[$i] = preg_replace('!\s+!', ' ', $matches[$i]);
		preg_match_all('/\S+/', $matches[$i], $details);
		list($module, $size, $used, $by) = $details[0];
        
		$result[$i]['module'] = $module;
		$result[$i]['size'] = $size;
		$result[$i]['used'] = $used;
		$result[$i]['by'] = $by;
    }
    
	return $result;
}


function sys_Users()
{
    $result = array();
	
    exec('cat /etc/passwd', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		list($user, $pwd, $uid, $gid, $uidi, $home, $command) = preg_split('/:/', $matches[$i]);
        
		$result[$i]['user'] = $user;
		$result[$i]['pwd'] = $pwd;
		$result[$i]['uid'] = $uid;
		$result[$i]['gid'] = $gid;
		$result[$i]['uidi'] = $uidi;
		$result[$i]['home'] = $home;
		$result[$i]['command'] = $command;
    }
    
	return $result;
}

function sys_Groups()
{
    $result = array();
	
    exec('cat /etc/group', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		list($group, $pwd, $gid, $ulist) = preg_split('/:/', $matches[$i]);
        
		$result[$i]['group'] = $group;
		$result[$i]['pwd'] = $pwd;
		$result[$i]['gid'] = $gid;
		$result[$i]['ulist'] = $ulist;
    }
    
	return $result;
}

function sys_Name()
{
	$output = shell_exec('cat /etc/*-release | grep PRETTY_NAME=');
	$result = str_replace('PRETTY_NAME="', "", "$output");
	$result = str_replace('"', "", "$result");
    
	return $result;
}

function sys_Kernel()
{
	$output = shell_exec('uname -mrs');
    
	return $output;
}

function sys_Firmware()
{
	$output = shell_exec('uname -v');
    
	return $output;
}

function sys_Date()
{
	$output = shell_exec('date');
    
	return $output;
}

function sys_Timezone()
{
	$output = shell_exec('cat /etc/timezone');
    
	return $output;
}

function sys_Timezone_Num()
{
	$output = shell_exec("date +'%:z %Z'");
    
	return $output;
}

function sys_Hostname()  // Nodename
{
	$output = shell_exec("hostname -f");
    
	return $output;
}

function sys_Last()
{
    $result = array();

    exec ('last -ax', $matches);
    
    for ($i=0; $i < count($matches) - 2; $i++) {  // cut last two useless lines
        
		$result[$i]['user'] = substr($matches[$i], 0, 8);
		$result[$i]['port'] = substr($matches[$i], 9, 11);
		$result[$i]['start'] = substr($matches[$i], 22, 16);
		$result[$i]['duration'] = substr($matches[$i], 41, 18);
		$result[$i]['hostname'] = substr($matches[$i], 60);
    }

	return $result;
}

function sys_User_in_Groups()
{
    $result = array();

    exec ('for user in $(awk -F: \'{print $1}\' /etc/passwd); do echo "\t$(groups $user)"; done', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		list($user, $groups) = explode(":", $matches[$i]);
        
		$result[$i]['user'] = trim($user);
		$result[$i]['groups'] = trim($groups);
    }

	return $result;
}

########## functions board ##########

function board_Details()
{
    $result = array();
	
	$result['board_name'] = shell_exec('cat /sys/firmware/devicetree/base/model;echo');
	
	$output = shell_exec('cat /proc/cpuinfo | grep Revision');
	$result['revision'] = trim(str_replace("Revision	: ", "", "$output"));
	
	$cvs_file = file('../documentation/boards/revisions.csv');
	$cvs_file_count = count(file('../documentation/boards/revisions.csv'));
	$csv_array = [];
	foreach($cvs_file as $line)	{  // read rows csv file
		$csv_array[] = str_getcsv ($line, ';');  // delimiter semicolon
	}
	for ($i=0; $i < $cvs_file_count; $i++) {
		if ($csv_array[$i][0] === $result['revision'])	{
					$result['generation'] = $csv_array[$i][1];
					$result['model'] = $csv_array[$i][2];
					$result['pcb_rev'] = $csv_array[$i][3];
					$result['released'] = $csv_array[$i][4];
					$result['soc'] = $csv_array[$i][5];
					$result['soc_man'] = $csv_array[$i][6];
					$result['cpu'] = $csv_array[$i][7];
					$result['cpu_speed'] = $csv_array[$i][8];
					$result['gpu'] = $csv_array[$i][9];
					$result['ram'] = $csv_array[$i][10];
					$result['storage'] = $csv_array[$i][11];
					$result['eth0'] = $csv_array[$i][12];
					$result['wlan0'] = $csv_array[$i][13];
					$result['hci0'] = $csv_array[$i][14];
					$result['audio_in'] = $csv_array[$i][15];
					$result['audio_out'] = $csv_array[$i][16];
					$result['video_in'] = $csv_array[$i][17];
					$result['video_out'] = $csv_array[$i][18];
					$result['csi'] = $csv_array[$i][19];
					$result['dsi'] = $csv_array[$i][20];
					$result['usb'] = $csv_array[$i][21];
					$result['headers'] = $csv_array[$i][22];
					$result['image'] = $csv_array[$i][23];
		}
    }
	
	return $result;
}

########## functions soc (CPU + GPU) ##########

##### CPU

function soc_CPU_Temperature()
{
	$result = array();
	
	$output = shell_exec('cat /sys/class/thermal/thermal_zone0/temp');
	# $output = shell_exec("sudo /opt/vc/bin/vcgencmd measure_temp | sed -e \"s/temp=//\" -e \"s/'C//g\"");
	$value = number_format(round((trim($output)/1000), 2), 2, '.', '');
	
	$temp_max = 85;
	
	$result['degrees_c'] = $value .' &deg;C'; # Celsius
	$result['degrees_f'] = ($value * 1.8) + 32 .' &deg;F'; # Fahrenheit
    $result['percentage'] = round(($result['degrees_c'] / $temp_max * 100),2);

		if ($result['percentage'] >= '80')	{
			$result['label'] = 'Danger!'; # 68 °C = 80% -> max 85°C
			$result['badge'] = 'badge bg-red';
			}
		elseif ($result['percentage'] >= '60')	{     
			$result['label'] = 'Warning!'; # 51 °C = 60% -> max 85°C
			$result['badge'] = 'badge bg-yellow';
			}
		else {
			$result['label'] = 'OK';
			$result['badge'] = 'badge bg-green';
		} 
	
	return $result;
}

function soc_CPU_Clock_Freq()
{
	$result = array();
	
	$cpu_clock_cur = round(file_get_contents("/sys/devices/system/cpu/cpu0/cpufreq/scaling_cur_freq") / 1000);
    $cpu_clock_min = round(file_get_contents("/sys/devices/system/cpu/cpu0/cpufreq/scaling_min_freq") / 1000);
    $cpu_clock_max = round(file_get_contents("/sys/devices/system/cpu/cpu0/cpufreq/scaling_max_freq") / 1000);
    $cpu_clock_gov = file_get_contents("/sys/devices/system/cpu/cpu0/cpufreq/scaling_governor");
		
	$result['current'] = $cpu_clock_cur;
	$result['min'] = $cpu_clock_min;
	$result['max'] = $cpu_clock_max;
	$result['gov'] = $cpu_clock_gov;
	$result['percentage'] = round(($result['current'] / $result['max'] * 100),2);

		if ($result['percentage'] >= '99')	{
			$result['label'] = 'Full!';
			$result['badge'] = 'badge bg-red';
			}
		elseif ($result['percentage'] >= '75')	{     
			$result['label'] = 'Surpassing'; // ?
			$result['badge'] = 'badge bg-yellow';
			}
		else {
			$result['label'] = 'OK';
			$result['badge'] = 'badge bg-green';
		} 
	
	return $result;
}

function soc_CPU_Info()
{
	$result = array();
	
	// lscpu
	exec('lscpu', $matches);
	
	$result['architecture'] = trim(str_replace("Architecture: ", "", $matches[0]));
	$result['byteorder'] = trim(str_replace("Byte Order: ", "", $matches[1]));
	$result['cpus'] = trim(str_replace("CPU(s): ", "", $matches[2]));
	$result['cpuonline'] = trim(str_replace("On-line CPU(s) list: ", "", $matches[3]));
	$result['threadscore'] = trim(str_replace("Thread(s) per core: ", "", $matches[4]));
	$result['coressocket'] = trim(str_replace("Core(s) per socket: ", "", $matches[5]));
	$result['sockets'] = trim(str_replace("Socket(s): ", "", $matches[6]));
	$result['model'] = trim(str_replace("Model name: ", "", $matches[7]));
	
	// cat /proc/cpuinfo
	//	!! tab used before :
	
	$output = shell_exec('cat /proc/cpuinfo | grep BogoMIPS | tail -n1');
	$result['bogomips'] = trim(str_replace("BogoMIPS	: ", "", "$output"));
	
	$output = shell_exec('cat /proc/cpuinfo | grep Features | tail -n1');
	$result['features'] = trim(str_replace("Features	: ", "", "$output"));
	
	$output = shell_exec('cat /proc/cpuinfo | grep Hardware');
	$result['hardware'] = trim(str_replace("Hardware	: ", "", "$output"));

	$output = shell_exec('cat /proc/cpuinfo | grep Revision');
	$result['revision'] = trim(str_replace("Revision	: ", "", "$output"));

	$output = shell_exec('cat /proc/cpuinfo | grep Serial');
	$result['serial'] = trim(str_replace("Serial		: ", "", "$output"));
	
	// Alternatives
	# $result['cpus'] = shell_exec('nproc');
	# $result['cpus'] = shell_exec('cat /proc/cpuinfo | grep -c processor');
	# $result['model'] = shell_exec('cat /proc/cpuinfo | grep \'model name\' | tail -n1');
	# $result['serial'] = shell_exec('cat /proc/cpuinfo | grep Serial | cut -d ' ' -f 2');
	
	return $result;
}

/*
//CPU Usage
	exec("cat /proc/loadavg |cut -d \" \" -f 1-3", $cpuload);
	$cpuload = implode(" ",$cpuload);
	
	
public function getCpuLoad($cpuCount){
		$iCPUData = shell_exec('grep \'cpu \' /proc/stat | awk \'{usage=($2+$4)*100/($2+$4+$5)} END {print usage}\'');
		$aCPULoad = array(round($iCPUData, 2));
		
		for($i = 0; $i < $cpuCount; $i++){
			$iNewCPULoad = shell_exec('grep \'cpu'. $i .' \' /proc/stat | awk \'{usage=($2+$4)*100/($2+$4+$5)} END {print usage}\'');
			array_push($aCPULoad, round($iNewCPULoad , 2)); 
		}
		
		return $aCPULoad;
	}

	
	<?php
$loads=sys_getloadavg();
$core_nums=trim(shell_exec("grep -P '^physical id' /proc/cpuinfo|wc -l"));
$load=$loads[0]/$core_nums;
echo $load;
?>
	
	
	
$stat1 = file('/proc/stat'); 
sleep(1); 
$stat2 = file('/proc/stat'); 
$info1 = explode(" ", preg_replace("!cpu +!", "", $stat1[0])); 
$info2 = explode(" ", preg_replace("!cpu +!", "", $stat2[0])); 
$dif = array(); 
$dif['user'] = $info2[0] - $info1[0]; 
$dif['nice'] = $info2[1] - $info1[1]; 
$dif['sys'] = $info2[2] - $info1[2]; 
$dif['idle'] = $info2[3] - $info1[3]; 
$total = array_sum($dif); 
$cpu = array(); 
foreach($dif as $x=>$y) $cpu[$x] = round($y / $total * 100, 1);
	
	now stats are in $cpu['user'], $cpu['nice'], $cpu['sys'], $cpu['idle']
	
	
	!!!! https://gist.github.com/rlemon/1780212
	
	
	*/



function cpu_Load_Average()
{
	$result = array();
	
	// Load Average 1m 5m 15m -> is not CPU Load like the view with the top command!
	// 1 cpu 1.00 = 100%
	// 4 cpus 4.00 = 100%
	// 8 cpus 8.00 = 100%
	
	$cpu_count = shell_exec('cat /proc/cpuinfo | grep -c ^processor');  // count cpu
	
	$output = shell_exec('cat /proc/loadavg');
	
	$load1 = substr($output, 0, 3);
	$result['load1'] = $load1 * 100 / $cpu_count;

	$load5 = substr($output, 5, 8);
	$result['load5'] = $load5 * 100 / $cpu_count;
	
	$load15 = substr($output, 10, 13);
	$result['load15'] = $load15 * 100 / $cpu_count;
		
    $result['percentage'] = $result['load1'];

		if ($result['percentage'] >= '80')	{
			$result['label'] = 'Danger!';
			$result['badge'] = 'badge bg-red';
			}
		elseif ($result['percentage'] >= '60')	{     
			$result['label'] = 'Warning!';
			$result['badge'] = 'badge bg-yellow';
			}
		else {
			$result['label'] = 'OK';
			$result['badge'] = 'badge bg-green';
		} 
	
	return $result;	
}

function cpu_Load()
{
	// $output = shell_exec('top -bn2 -d 3 | grep ^%Cpu | tail -n1'); // more accurate - 2 seconds
	$output = shell_exec('top -bn1 | grep ^%Cpu | tail -n1'); // false values? - 1 second
		
	preg_match('#([\d\.,]+) id#i', $output, $match); // check idle
	
	$result['cpuload'] = round(100 - trim($match[1]),2); // 100 - idle = cpuload
	$result['percentage'] = $result['cpuload'];
	
		if ($result['percentage'] >= '80')	{
			$result['label'] = 'Danger!';
			$result['badge'] = 'badge bg-red';
			}
		elseif ($result['percentage'] >= '60')	{     
			$result['label'] = 'Warning!';
			$result['badge'] = 'badge bg-yellow';
			}
		else {
			$result['label'] = 'OK';
			$result['badge'] = 'badge bg-green';
		} 
	
	return $result;
}

##### SOC

function soc_Freq()
{
	$result = array();
	
	$factor = 1000000;
	
	exec('for src in arm core dpi emmc h264 hdmi isp pixel pwm uart v3d vec; do echo -e "$src:\t$(vcgencmd measure_clock $src)" ; done', $matches);
	
	for ($i=0; $i < count($matches); $i++) {
		list($hardware, $freq) = preg_split('/=/', $matches[$i]);

		$result[$i]['freq'] = number_format(($freq)/$factor,2);		
    }
	
	return $result;
}

function soc_Volt()
{
	$result = array();
	
	exec('for id in core sdram_c sdram_i sdram_p ; do echo -e "$id:\t$(vcgencmd measure_volts $id)" ; done', $matches);
	
	for ($i=0; $i < count($matches); $i++) {
		list($hardware, $volt) = preg_split('/=/', $matches[$i]);

		$result[$i]['volt'] = $volt;		
    }
	
	return $result;
}

function soc_Codec()
{
	$result = array();
	
	exec('for codec in H264 MJPG MPG2 MPG4 WMV9 WVC1 ; do echo -e "$codec:\t$(vcgencmd codec_enabled $codec)" ; done', $matches);
	
	for ($i=0; $i < count($matches); $i++) {
		list($hardware, $codec) = preg_split('/=/', $matches[$i]);

		$result[$i]['codec'] = $codec;		
    }
	
	return $result;
}

function soc_Config()
{
	$result = array();
	
	exec('vcgencmd get_config int', $matches);
	
	for ($i=0; $i < count($matches); $i++) {
		list($feature, $value) = preg_split('/=/', $matches[$i]);

		$result[$i]['feature'] = $feature;
		$result[$i]['value'] = $value;
    }
	
	return $result;
}

function soc_GPIO_Func()
{
    $result = array();

    exec ('raspi-gpio funcs | grep -v DEFAULT', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		list($gpio, $pull, $alt0, $alt1, $alt2, $alt3, $alt4, $alt5) = explode(", ", $matches[$i]);
        
		$result[$i]['gpio'] = trim($gpio);
		$result[$i]['pull'] = trim($pull);
		$result[$i]['alt0'] = trim($alt0);
		$result[$i]['alt1'] = trim($alt1);
		$result[$i]['alt2'] = trim($alt2);
		$result[$i]['alt3'] = trim($alt3);
		$result[$i]['alt4'] = trim($alt4);
		$result[$i]['alt5'] = trim($alt5);
    }

	return $result;
}

function soc_GPIO_Status()  // quick and dirty - only information view
{
    $result = array();

    exec ('raspi-gpio get | grep -v BANK', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		list($gpio, $level, $fsel, $alt, $func) = explode("=", $matches[$i]);
        
		$result[$i]['gpio'] = str_replace(": level", "", trim($gpio));
		$result[$i]['level'] = str_replace(" fsel", "", trim($level));
		$result[$i]['fsel'] = str_replace(" alt", "", trim($fsel));
		$result[$i]['alt'] = str_replace("func", "", trim($alt));
		$result[$i]['func'] = trim($func);
    }

	return $result;
}



/*  check licenses

decode_MPG2=0000000000

decode_WVC1=0000000000

The 0000000000 portion of the license is your unique 10-digit alphanumeric license code.

function getGPIORevision()
{
	return trim(exec('python -c "import RPi.GPIO as GPIO; print GPIO.RPI_REVISION;"'));
}
1 = rev1
2 = rev2
3 = rev2+
*/

function soc_WarrantyBit()
{
	$result = array();
	
	#$output = shell_exec("cat /proc/cpuinfo | grep 'Revision' | awk '{print $3}' | sed 's/^1000//'");  // Another method to obtain just the revision ID (also removes any overvoltage mark)
	$output = shell_exec('vcgencmd otp_dump | grep 32:');
	$result['warrantybit'] = str_replace("32:", "", "$output");
	
		if ($result['warrantybit'] = '00000000')	{
			$result['overclockedflag'] = 'Raspberry Pi is/was not overclocked.';
		}
		else {
			$result['overclockedflag'] = 'Raspberry Pi is/was overclocked.';
		}
	
	return $result;
}

function soc_Firmware()
{
	$result = array();
	
	exec('vcgencmd version', $matches);
	
	$result['date'] = $matches[0];
	$result['version'] = $matches[2];
	
	return $result;
}

########## functions devices ##########

##### audio

function dev_Audio_Cards()
{
    $result = array();

    exec ('aplay -l | grep card', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		list($card, $device, $device_info) = explode(": ", $matches[$i]);
        
		$result[$i]['card'] = $card;
		$result[$i]['device'] = $device;
		$result[$i]['device_info'] = $device_info;
    }
    
	return $result;
}

function dev_Audio_Version()
{
	$output = shell_exec('cat /proc/asound/version');
    
	return $output;
}

########## functions memory ##########

function ram_Memory_Usage()
{
	$result = array();

	exec('free -bo', $out);
	preg_match_all('/\s+([0-9]+)/', $out[1], $matches);
	list($total, $used, $free, $shared, $buffers, $cached) = $matches[1];

	$ramDetails = shell_exec('ps -e -o pmem,pid,user,args --sort=-pmem | sed "/^ 0.0 /d"');

	$result['percentage'] = round((($used - $buffers - $cached) / $total * 100),2);

		if ($result['percentage'] >= '80')	{
			$result['label'] = 'Danger!';
			$result['badge'] = 'badge bg-red';
			}
			elseif ($result['percentage'] >= '60')	{     
			$result['label'] = 'Warning!';
			$result['badge'] = 'badge bg-yellow';
			}
			else {
			$result['label'] = 'OK';
			$result['badge'] = 'badge bg-green';
		}

	$result['free'] = format_Bytes($free + $buffers + $cached);
	$result['used'] = format_Bytes($used - $buffers - $cached);
	$result['total'] = format_Bytes($total);
		
	$result['shared'] = format_Bytes($shared);
	$result['buffers'] = format_Bytes($buffers);
	$result['cached'] = format_Bytes($cached);		
		
	$result['detail'] = txt_to_html_table($ramDetails);

	return $result;
}

function ram_Swap_Usage()
{
	$result = array();

	exec('free -bo', $out);
	preg_match_all('/\s+([0-9]+)/', $out[2], $matches);
	list($total, $used, $free) = $matches[1];

	$result['percentage'] = round(($used / $total * 100),2);

		if ($result['percentage'] >= '80')	{
			$result['label'] = 'Danger!';
			$result['badge'] = 'badge bg-red';
			}
			elseif ($result['percentage'] >= '60')	{     
			$result['label'] = 'Warning!';
			$result['badge'] = 'badge bg-yellow';
			}
			else {
			$result['label'] = 'OK';
			$result['badge'] = 'badge bg-green';
		} 

	$result['free'] = format_Bytes($free);
	$result['used'] = format_Bytes($used);
	$result['total'] = format_Bytes($total);

	return $result;
	
}

function ram_Split_Usage()
{
	$result = array();
	
	exec('vcgencmd get_mem arm && vcgencmd get_mem gpu', $matches);
	$arm = str_replace("arm=", "", $matches[0]);
	$gpu = str_replace("gpu=", "", $matches[1]);
				
	$total = ($arm) + ($gpu);
		
	$result['percentage'] = round(($arm / $total * 100),2);

	$result['label'] = 'CPU';
	$result['badge'] = 'badge bg-green';

	$result['arm'] = format_Bytes($arm * 1048576);
	$result['gpu'] = format_Bytes($gpu * 1048576);
	$result['total'] = format_Bytes($total * 1048576);

	return $result;	
}

function ram_Mem_Info()
{
    $result = array();

    exec ('cat /proc/meminfo', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
		list($type, $size) = explode(":", $matches[$i]);
        
		$result[$i]['type'] = trim($type);
		$result[$i]['size'] = trim($size);
    }
    
	return $result;
}

function ram_Details()
{
    $result = array();

    exec ('ps -e -o pmem,pid,user,args --sort=-pmem | sed "/^ 0.0 /d" | grep -v MEM', $matches);
    
    for ($i=0; $i < count($matches); $i++) {
        
		$result[$i]['percentage'] = substr($matches[$i], 0, 4);
		$result[$i]['pid'] = substr($matches[$i], 6, 5);
		$result[$i]['user'] = substr($matches[$i], 11, 8);
		$result[$i]['command'] = substr($matches[$i], 20);
    }
	
	return $result;
}

########## functions storage ##########

function storage_Usage()
{
    $result = array();
	
    exec('df -T | grep -vE "tmpfs|rootfs|Filesystem"', $drivesarray);
    
    for ($i=0; $i < count($drivesarray); $i++) {
		$drivesarray[$i] = preg_replace('!\s+!', ' ', $drivesarray[$i]);
		preg_match_all('/\S+/', $drivesarray[$i], $drivedetails);
		list($fs, $type, $size, $used, $available, $percentage, $mounted) = $drivedetails[0];
        
		$result[$i]['name'] = $mounted;
		$result[$i]['total'] = format_Bytes ($size * 1024);
		$result[$i]['free'] = format_Bytes ($available * 1024);
		$result[$i]['used'] = format_Bytes(($size - $available) * 1024);
		$result[$i]['format'] = $type;
      
		$result[$i]['percentage'] = round(($result[$i]['used'] / $result[$i]['total'] * 100),2);

			if ($result[$i]['percentage'] >= '90')	{
				$result[$i]['label'] = 'Danger!';
				$result[$i]['badge'] = 'badge bg-red';
				}
				elseif ($result[$i]['percentage'] >= '75')	{     
				$result[$i]['label'] = 'Warning!';
				$result[$i]['badge'] = 'badge bg-yellow';
				}
				else {
				$result[$i]['label'] = 'OK';
				$result[$i]['badge'] = 'badge bg-green';
			}
    }
	
	$storageDetails = shell_exec('df -lTh');
	
	$result['detail'] = txt_to_html_table($storageDetails);
    
	return $result;
}

########## functions network ##########

##### common

function net_Details()
{
	$result = array();
	
	// connections
	$result['net_connections'] = shell_exec ('netstat -nta --inet | wc -l');
	
	// external IP
	$result['net_external_ip'] = file_get_contents ('http://whatismyip.akamai.com');
		if (filter_var($result['net_external_ip'], FILTER_VALIDATE_IP)  === false)	{
			$result['net_external_ip'] = file_get_contents ('https://api.ipify.org');
		}
		if (filter_var($result['net_external_ip'], FILTER_VALIDATE_IP)  === false)	{
			$result['net_external_ip'] = file_get_contents ('http://ipecho.net/plain');
		}
		if (filter_var($result['net_external_ip'], FILTER_VALIDATE_IP)  === false)	{
			$result['net_external_ip'] = 'Unavailable';
		}
	
	return $result;
}


##### hci0

function net_hci0_Details()
{
	$result = array();
	
	// Name
	$output = shell_exec ("hciconfig hci0 -a | grep 'Name' | awk {'print $2'}");
	$result['hci0_name'] = str_replace("'", "", $output);
	
	// Network type
	$result['hci0_type'] = shell_exec("hciconfig hci0 -a | grep 'Type' | awk {'print $3'}");
	
	// Bus
	$result['hci0_bus'] = shell_exec("hciconfig hci0 -a | grep 'Bus' | awk {'print $5'}");
	
	// Link policy
	$output = shell_exec("hciconfig hci0 -a | grep 'Link policy'");
	$result['hci0_link_policy'] = str_replace("Link policy: ", "", $output);
	
	// Link mode
	$output = shell_exec("hciconfig hci0 -a | grep 'Link mode'");
	$result['hci0_link_mode'] = str_replace("Link mode: ", "", $output);
	
	// MAC address
	$result['hci0_mac_addr'] = strtolower(shell_exec("hciconfig hci0 -a | grep 'BD Address' | awk {'print $3'}"));
	
	// Link quality - needs mac address
	$output = "hcitool lq B8:27:EB:AE:E6:2A";
	$result['hci0_link_quality'] = shell_exec($output);
	
	// TX power - needs mac address
	$output = "hcitool tpl " . $result['hci0_mac_addr'];
	$result['hci0_tx_power'] = shell_exec($output);
	
	return $result;
}

function net_hci0_Traffic()
{
	$result = array();
	
	// RX
	$output = shell_exec("hciconfig hci0 -a | grep 'RX bytes' | awk {'print $2'}");
	$rx_bytes = trim(str_replace("bytes:", "", $output));
	$result['hci0_rx_bytes'] = format_Bytes($rx_bytes);
	
	$output = shell_exec("hciconfig hci0 -a | grep 'events' | awk {'print $5'}");
	$result['hci0_rx_events'] = str_replace("events:", "", $output);
	
	// TX
	$output = shell_exec("hciconfig hci0 -a | grep 'TX bytes' | awk {'print $2'}");
	$tx_bytes = trim(str_replace("bytes:", "", $output));
	$result['hci0_tx_bytes'] = format_Bytes($tx_bytes);
	
	$output = shell_exec("hciconfig hci0 -a | grep 'commands' | awk {'print $5'}");
	$result['hci0_tx_commands'] = str_replace("commands:", "", $output);
	
	//total RX+TX
	$total_bytes = $rx_bytes + $tx_bytes;
	$result['hci0_total'] = format_Bytes($total_bytes);
	
	// percentage
	$result['hci0_percentage_rx'] = round(($rx_bytes / $total_bytes * 100),2);
	$result['hci0_percentage_tx'] = round(($tx_bytes / $total_bytes * 100),2);
	
	return $result;
}

##### eth0

function net_eth0_Details()
{
	$result = array();
	
	// active?
	$result['eth0_active'] = shell_exec ('cat /sys/class/net/eth0/carrier');
		if($result['eth0_active']!=str_replace("1","",$result['eth0_active']))	{
			$result['eth0_active_flag'] = 'eth0 is connected to a network.';
		}
		else {
			$result['eth0_active_flag'] = 'eth0 is not connected to a network.';
		}
	
	// Bit rate	
	$result['eth0_bitrate'] = shell_exec ('cat /sys/class/net/eth0/speed');
	
	// Network type
	$output = shell_exec("ifconfig eth0 | grep 'encap:' | awk {'print $3'}");
	$result['eth0_type'] = str_replace("encap:", "", $output);
	
	// IP addr, Broadcast, Subnetmask
	exec ('ifconfig eth0 | grep -oE "\b([0-9]{1,3}\.){3}[0-9]{1,3}\b"', $matches);
	$result['eth0_ip_addr'] = $matches[0];
	$result['eth0_ip_bcast'] = $matches[1];
	$result['eth0_ip_mask'] = $matches[2];
	
	// MAC address
	$result['eth0_mac_addr'] = shell_exec('cat /sys/class/net/eth0/address');
	
	// IPv6
	exec('ip addr show dev eth0 | sed -e"s/^.*inet6 \([^ ]*\)\/.*$/\1/;t;d"', $matches);
	$result['eth0_ipv6_global'] = $matches[3];
	$result['eth0_ipv6_link'] = $matches[4];	
	
	return $result;
}

function net_eth0_Traffic()
{
	$result = array();
	
	// RX
	$rx_bytes = trim(shell_exec ('cat /sys/class/net/eth0/statistics/rx_bytes'));
	$result['eth0_rx_bytes'] = format_Bytes($rx_bytes);
	
	$result['eth0_rx_packets'] = trim(shell_exec ('cat /sys/class/net/eth0/statistics/rx_packets'));
	
	// TX
	$tx_bytes = trim(shell_exec ('cat /sys/class/net/eth0/statistics/tx_bytes'));
	$result['eth0_tx_bytes'] = format_Bytes($tx_bytes);
	
	$result['eth0_tx_packets'] = trim(shell_exec ('cat /sys/class/net/eth0/statistics/tx_packets'));
	
	//total RX+TX
	$total_bytes = $rx_bytes + $tx_bytes;
	$result['eth0_total'] = format_Bytes($total_bytes);
	
	// percentage
	$result['eth0_percentage_rx'] = round(($rx_bytes / $total_bytes * 100),2);
	$result['eth0_percentage_tx'] = round(($tx_bytes / $total_bytes * 100),2);
	
	return $result;
}

##### wlan0

function net_wlan0_Details()
{
	$result = array();
	
	// active?
	$result['wlan0_active'] = shell_exec ('cat /sys/class/net/wlan0/carrier');
		if($result['wlan0_active']!=str_replace("1","",$result['wlan0_active']))	{
			$result['wlan0_active_flag'] = 'wlan0 is connected to a network.';
		}
		else {
			$result['wlan0_active_flag'] = 'wlan0 is not connected to a network.';
		}
	
	//Bit rate
	$result['wlan0_bitrate'] = shell_exec ("iw dev wlan0 link | grep 'bitrate' | awk '{print $3}'");
	
	// SSID
	$result['wlan0_ssid'] = shell_exec ("iw dev wlan0 link | grep 'SSID' | awk '{print $2}'");
	
	// Signal level
	$result['wlan0_signal_level'] = shell_exec ("iw dev wlan0 link | grep 'signal' | awk '{print $2}'");
	
	// Access point
	$result['wlan0_ap'] = shell_exec ("iwconfig wlan0 | grep 'Access Point' | awk '{ print $6 }'");

	// Frequency
	$output = shell_exec("iwconfig wlan0 | grep 'Frequency' | awk '{print $2}'");
	$result['wlan0_freq'] = str_replace("Frequency:", "", $output);
	
	// Link quality
	$output = shell_exec("iwconfig wlan0 | grep 'Link Quality' | awk '{ print $2 }'");
	$result['wlan0_link_quality'] = str_replace("Quality=", "", $output);
	
	// TX power
	$output = shell_exec("iwconfig wlan0 | grep 'Tx-Power' | awk '{ print $4 }'");
	$result['wlan0_tx_power'] = str_replace("Tx-Power=", "", $output);
	
	// Network type
	$output = shell_exec("ifconfig wlan0 | grep 'encap:' | awk {'print $3'}");
	$result['wlan0_type'] = str_replace("encap:", "", $output);
	
	// IP addr, Broadcast, Subnetmask
	exec ('ifconfig wlan0 | grep -oE "\b([0-9]{1,3}\.){3}[0-9]{1,3}\b"', $matches);
	$result['wlan0_ip_addr'] = $matches[0];
	$result['wlan0_ip_bcast'] = $matches[1];
	$result['wlan0_ip_mask'] = $matches[2];
	
	// MAC address
	$result['wlan0_mac_addr'] = shell_exec('cat /sys/class/net/wlan0/address');
	
	// IPv6
	exec('ip addr show dev wlan0 | sed -e"s/^.*inet6 \([^ ]*\)\/.*$/\1/;t;d"', $matches);
	$result['wlan0_ipv6_global'] = $matches[3];
	$result['wlan0_ipv6_link'] = $matches[4];	
	
	return $result;
}

function net_wlan0_Traffic()
{
	$result = array();
	
	// RX
	$rx_bytes = trim(shell_exec ('cat /sys/class/net/wlan0/statistics/rx_bytes'));
	$result['wlan0_rx_bytes'] = format_Bytes($rx_bytes);
	
	$result['wlan0_rx_packets'] = shell_exec ('cat /sys/class/net/wlan0/statistics/rx_packets');
	
	// TX
	$tx_bytes = trim(shell_exec ('cat /sys/class/net/wlan0/statistics/tx_bytes'));
	$result['wlan0_tx_bytes'] = format_Bytes($tx_bytes);
	
	$result['wlan0_tx_packets'] = shell_exec ('cat /sys/class/net/wlan0/statistics/tx_packets');
	
	//total RX+TX
	$total_bytes = $rx_bytes + $tx_bytes;
	$result['wlan0_total'] = format_Bytes($total_bytes);
	
	// percentage
	$result['wlan0_percentage_rx'] = round(($rx_bytes / $total_bytes * 100),2);
	$result['wlan0_percentage_tx'] = round(($tx_bytes / $total_bytes * 100),2);
	
	return $result;
}

?>