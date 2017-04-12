<?php
include_once '../lib/functions.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pi Fusion | Settings</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../plugins/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.css">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../pages/includes/favicon.ico" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php
include_once '../pages/includes/header.php';
# include_once '../pages/includes/sidebar.php';
?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
	
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard Overview</a></li>
            <li><a href="../pages/rpi_status.php"><i class="fa fa-bar-chart"></i> Status Information</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-info-circle"></i> <span>System Information</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-microchip"></i> Board & SoC
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="../pages/rpi_soc.php"><i class="fa fa-microchip"></i> Board & SoC</a></li>
				<li><a href="../pages/rpi_cpu.php"><i class="fa fa-microchip"></i> CPU</a></li>
				<li><a href="../pages/rpi_memory.php"><i class="fa fa-microchip"></i> Memory</a></li>
				<li><a href="../pages/rpi_network.php"><i class="fa fa-sitemap"></i> Network</a></li>
				<li><a href="../pages/rpi_storage.php"><i class="fa fa-hdd-o"></i> Storage</a></li>				
              </ul>
            </li>
			
			<li>
              <a href="#"><i class="fa fa-exchange"></i> Interfaces
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="../pages/devices_av.php"><i class="fa fa-exchange"></i> Audio / Video</a></li>
				<li><a href="../pages/rpi_gpio_status.php"><i class="fa fa-exchange"></i> GPIO Status</a></li>
				<li><a href="../pages/devices_usb.php"><i class="fa fa-exchange"></i> USB Devices</a></li>					    
              </ul>
            </li>
			
			<li>
              <a href="#"><i class="fa fa-server"></i> Operating System
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="../pages/system_os.php"><i class="fa fa-server"></i> General Information</a></li>
				<li><a href="../pages/system_modules.php"><i class="fa fa-server"></i> Kernel Modules</a></li>
				<li><a href="../pages/system_processes.php"><i class="fa fa-server"></i> Running Processes</a></li>
				<li><a href="../pages/system_services.php"><i class="fa fa-server"></i> Running Services</a></li>
				<li><a href="../pages/system_packages.php"><i class="fa fa-server"></i> Software Packages</a></li>
				<li><a href="../pages/system_users.php"><i class="fa fa-server"></i> Users & Groups</a></li>			
              </ul>
            </li>
          </ul>
        </li>

		<li class="treeview">
          <a href="#">
            <i class="fa fa-area-chart"></i> <span>Statistics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../pages/stats_overview.php"><i class="fa fa-area-chart"></i> General Overview</a></li>
			<li><a href="../pages/stats_cpu.php"><i class="fa fa-area-chart"></i> CPU</a></li>
            <li><a href="#"><i class="fa fa-area-chart"></i> Memory</a></li>
			<li><a href="#"><i class="fa fa-area-chart"></i> Network</a></li>
			<li><a href="#"><i class="fa fa-area-chart"></i> Storage</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-keyboard-o"></i> <span>Control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-microchip"></i> GPIO Functions
			  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="#"><i class="fa fa-exchange"></i> GPIO</a></li>
				<li><a href="#"><i class="fa fa-exchange"></i> I2C</a></li>
				<li><a href="#"><i class="fa fa-exchange"></i> PWM</a></li>
				<li><a href="#"><i class="fa fa-exchange"></i> SPI</a></li>
				<li><a href="#"><i class="fa fa-exchange"></i> UART</a></li>				
              </ul>
            </li>
			<li><a href="#"><i class="fa fa-camera"></i> Camera (CSI)</a></li>
			<li><a href="#"><i class="fa fa-desktop"></i> Display (DSI)</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-plus-circle"></i> <span>Add-ons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
				<ul class="treeview-menu">
				<li><a href="#"><i class="fa fa-bitcoin"></i> Cryptocoins Miner</a></li>
				<li><a href="#"><i class="fa  fa-microchip"></i> Sensors</a></li>
				</ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Tools</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="../pages/tools_phpinfo.php"><i class="fa  fa-info"></i> PHP Info</a></li>
			<li><a href="../pages/tools_pla.php"><i class="fa fa-database"></i> PHP Lite Admin</a></li>
			<li><a href="#"><i class="fa fa-arrow-circle-up"></i> System Upgrades</a></li>
			<li><a href="../pages/tools_terminal.php"><i class="fa fa-terminal"></i> Terminal</a></li>
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Documentation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li>
              <a href="#"><i class="fa fa-book"></i> GPIO
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="../pages/docu_gpio_func.php"><i class="fa fa-book"></i> Functions Overview</a></li>
				<li><a href="../pages/docu_gpio_headers.php"><i class="fa fa-book"></i> Headers RPi & Zero</a></li>		
				<li><a href="../pages/docu_gpio_headers_cm.php"><i class="fa fa-book"></i> Headers CM & I/O Board</a></li>				
              </ul>
            </li>
			<li><a href="../pages/docu_board_revs.php"><i class="fa fa-book"></i> Board Revisions</a></li>
          </ul>
        </li>
		
		<li class="active treeview">
          <a href="#">
            <i class="fa fa-certificate"></i> <span>Pi Fusion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../pages/pif_credits.php"><i class="fa fa-thumbs-up"></i> Credits</a></li>
			<li><a href="#"><i class="fa fa-money"></i> Donations</a></li>
			<li><a target="_blank" href="https://electrodrome.net/forum/rpi-projekt-pi-fusion"><i class="fa fa-question"></i> Forum / Help</a></li>
			<li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
			<li class="active"><a href="../pages/pif_settings.php"><i class="fa fa-gear"></i> Settings</a></li>
			<li><a target="_blank" href="https://github.com/ElectroDrome/raspberry-pi-fusion"><i class="fa fa-github"></i> Sourcecode (Github)</a></li>
          </ul>
        </li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Settings <small>Configure Pi Fusion</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
	
	<?php  // process form - save
	if(isset($_POST['submit'])) {
		
		// Pi Fusion
		$configArray ['page_reload_dashboard'] = $_POST['page_reload_dashboard'];
		$configArray ['page_reload_statusinfo'] = $_POST['page_reload_statusinfo'];
		$configArray ['ssh_cmd_ip'] = "127.0.0.1";
		$configArray ['ssh_cmd_user'] = "pi";
		$configArray ['ssh_cmd_password'] = $_POST['ssh_cmd_password'];
		
		// Watchdog
		$configArray ['watchdog_cpu_freq_warning'] = 75;  // moderate
		$configArray ['watchdog_cpu_freq_danger'] = 100;  // full load
		$configArray ['watchdog_cpu_load_warning'] = $_POST['watchdog_cpu_load_warning'];
		$configArray ['watchdog_cpu_load_danger'] = $_POST['watchdog_cpu_load_danger'];
		$configArray ['watchdog_cpu_load_avg_warning'] = $_POST['watchdog_cpu_load_avg_warning'];
		$configArray ['watchdog_cpu_load_avg_danger'] = $_POST['watchdog_cpu_load_avg_danger'];
		$configArray ['watchdog_cpu_temp_warning'] = $_POST['watchdog_cpu_temp_warning'];
		$configArray ['watchdog_cpu_temp_danger'] = $_POST['watchdog_cpu_temp_danger'];
		$configArray ['watchdog_cpu_temp_emergency'] = $_POST['watchdog_cpu_temp_emergency'];
		$configArray ['watchdog_cpu_temp_warning_email'] = 0;
		$configArray ['watchdog_cpu_temp_danger_email'] = 0;
		$configArray ['watchdog_cpu_temp_emergency_shutdown'] = $_POST['watchdog_cpu_temp_emergency_shutdown'] ? 1 : 0;
		$configArray ['watchdog_ram_usage_warning'] = $_POST['watchdog_ram_usage_warning'];
		$configArray ['watchdog_ram_usage_danger'] = $_POST['watchdog_ram_usage_danger'];
		$configArray ['watchdog_storage_usage_warning'] = $_POST['watchdog_storage_usage_warning'];
		$configArray ['watchdog_storage_usage_danger'] = $_POST['watchdog_storage_usage_danger'];
		$configArray ['watchdog_storage_usage_emergency'] = $_POST['watchdog_storage_usage_emergency'];
		$configArray ['watchdog_storage_usage_warning_email'] = 0;
		$configArray ['watchdog_storage_usage_danger_email'] = 0;
		$configArray ['watchdog_storage_usage_emergency_shutdown'] = $_POST['watchdog_storage_usage_emergency_shutdown'] ? 1 : 0;
		
		// Statistics
		$configArray ['stats_cpu_freq'] = $_POST['stats_cpu_freq'] ? 1 : 0;
		$configArray ['stats_cpu_load'] = $_POST['stats_cpu_load'] ? 1 : 0;
		$configArray ['stats_cpu_load_average'] = $_POST['stats_cpu_load_average'] ? 1 : 0;
		$configArray ['stats_cpu_temp'] = $_POST['stats_cpu_temp'] ? 1 : 0;
		$configArray ['stats_processes'] = $_POST['stats_processes'] ? 1 : 0;
		$configArray ['stats_ram_usage'] = $_POST['stats_ram_usage'] ? 1 : 0;
		$configArray ['stats_storage_usage'] = $_POST['stats_storage_usage'] ? 1 : 0;
		$configArray ['stats_eth0'] = $_POST['stats_eth0'] ? 1 : 0;
		$configArray ['stats_wlan0'] = $_POST['stats_wlan0'] ? 1 : 0;
		$configArray ['stats_hci0'] = $_POST['stats_hci0'] ? 1 : 0;
		
		write_Settings($configArray);
		
		?>
		<div id="div-save" class="callout callout-success">
        <h4>Settings were succesfully saved!</h4>
		<p>File updated: settings.ini.php</p>
        </div>
		<?php
	}
	?>
	
	<?php  // // process form - read
	$configArray = read_Settings();
	?>

	<form method="post" action="../pages/pif_settings.php">
	
	<div class="row">
	
		
		<div class="col-md-6">
		   <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Pi Fusion</h3>
            </div>
           <!-- /.box-header -->
            <div class="box-body no-padding">
              
			  <table class="table table-bordered">
                <tr>
			      <th>Feature</th>
                  <th>Value</th>
                </tr>
                <tr>
                  <td>Dashboard auto reload every:</td>
                  <td><input type="number" name="page_reload_dashboard" min="30" max="86400" value="<?php echo $configArray ['page_reload_dashboard'] ?>"> seconds</td>
                </tr>
				<tr>
                  <td>Statusinfo auto reload every:</td>
                  <td><input type="number" name="page_reload_statusinfo" min="30" max="86400" value="<?php echo $configArray ['page_reload_statusinfo'] ?>"> seconds</td>
                </tr>
				<tr>
                  <td>SSH CMD IP: <small>(localhost)</small></td>
                  <td><input type="text" name="ssh_cmd_ip" value="<?php echo $configArray ['ssh_cmd_ip'] ?>" disabled></td>
                </tr>
				<tr>
                  <td>SSH CMD user:</td>
                  <td><input type="text" name="ssh_cmd_user" value="<?php echo $configArray ['ssh_cmd_user'] ?>" disabled></td>
                </tr>
				<tr>
                  <td>SSH CMD password:</td>
                  <td><input type="password" name="ssh_cmd_password" value="<?php echo $configArray ['ssh_cmd_password'] ?>"></td>
                </tr>
              </table>
			  
			  <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-danger">Save</button>
              </div>
			  
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  
		  </div>
        <!-- /.col -->
	
	<div class="col-md-6">
		   <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Pi Fusion update</h3>
            </div>
           <!-- /.box-header -->
            <div class="box-body no-padding">
              
			  <table class="table table-bordered">
                <tr>
			      <th>Feature</th>
                  <th>Value</th>
				  <th>Value</th>
                </tr>
				<tr>
                  <td>Version:</td>
                  <?php
				  #$your_version = file_get_contents('../VERSION');
				  $your_version = "0.4.9";  // for testing only
				  $current_version = file_get_contents('https://raw.githubusercontent.com/ElectroDrome/raspberry-pi-fusion/master/VERSION');
				  ?>
				  <td>Your version: <?php echo $your_version; ?></td>
				  <td>Current version: <?php echo $current_version; ?></td>
                </tr>
				<tr>
                  <td>Update:</td>
                  <?php
				  if (version_compare($current_version, $your_version, "<=")) {
					  echo '<td>Your version of Pi Fusion is up to date.</td>';
				  }
				  if (version_compare($current_version, $your_version, ">")) {
					  echo '<td>There is a new version of Pi Fusion available.</td>';
					  echo '<td><button type="button" class="btn btn-block btn-danger btn-xs">Install update</button></td>';
				  }
				  ?>
                </tr>
              </table>
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		
		</div>
    <!-- /.row -->
	
	<div class="row">
	
		<div class="col-md-6">
		   <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Statistics</h3>
            </div>
           <!-- /.box-header -->
            <div class="box-body no-padding">
              
			  <table class="table table-bordered">
                <tr>
			      <th>Feature</th>
                  <th>Download</th>
				  <th>Reset</th>
                </tr>
                <tr>
				<td>
				<input type="hidden" name="stats_cpu_freq" value="0">
				  <?php
					if ($configArray ['stats_cpu_freq'] == "0") {
						echo '<label><input type="checkbox" name="stats_cpu_freq" value="1"> CPU frequency</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_cpu_freq" value="1" checked> CPU frequency</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
				
				<tr>
				<td>
				<input type="hidden" name="stats_cpu_load" value="0">
				  <?php
					if ($configArray ['stats_cpu_load'] == "0") {
						echo '<label><input type="checkbox" name="stats_cpu_load" value="1"> CPU load</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_cpu_load" value="1" checked> CPU load</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
				
				<tr>
				<td>
				<input type="hidden" name="stats_cpu_load_average" value="0">
				  <?php
					if ($configArray ['stats_cpu_load_average'] == "0") {
						echo '<label><input type="checkbox" name="stats_cpu_load_average" value="1"> CPU load average</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_cpu_load_average" value="1" checked> CPU load average</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
				
				<tr>
				<td>
				<input type="hidden" name="stats_cpu_temp" value="0">
				  <?php
					if ($configArray ['stats_cpu_temp'] == "0") {
						echo '<label><input type="checkbox" name="stats_cpu_temp" value="1"> CPU temperature</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_cpu_temp" value="1" checked> CPU temperature</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
				
				<tr>
				<td>
				<input type="hidden" name="stats_ram_usage" value="0">
				  <?php
					if ($configArray ['stats_ram_usage'] == "0") {
						echo '<label><input type="checkbox" name="stats_ram_usage" value="1"> RAM usage</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_ram_usage" value="1" checked> RAM usage</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
				
				<tr>
				<td>
				<input type="hidden" name="stats_storage_usage" value="0">
				  <?php
					if ($configArray ['stats_storage_usage'] == "0") {
						echo '<label><input type="checkbox" name="stats_storage_usage" value="1"> Storage usage</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_storage_usage" value="1" checked> Storage usage</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
				
				<tr>
				<td>
				<input type="hidden" name="stats_processes" value="0">
				  <?php
					if ($configArray ['stats_processes'] == "0") {
						echo '<label><input type="checkbox" name="stats_processes" value="1"> System processes</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_processes" value="1" checked> System processes</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
				
				<tr>
				<td>
				<input type="hidden" name="stats_eth0" value="0">
				  <?php
					if ($configArray ['stats_eth0'] == "0") {
						echo '<label><input type="checkbox" name="stats_eth0" value="1"> Traffic eth0</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_eth0" value="1" checked> Traffic eth0</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
				
				<tr>
				<td>
				<input type="hidden" name="stats_wlan0" value="0">
				  <?php
					if ($configArray ['stats_wlan0'] == "0") {
						echo '<label><input type="checkbox" name="stats_wlan0" value="1"> Traffic wlan0</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_wlan0" value="1" checked> Traffic wlan0</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
				<tr>
				<td>
				<input type="hidden" name="stats_hci0" value="0">
				  <?php
					if ($configArray ['stats_hci0'] == "0") {
						echo '<label><input type="checkbox" name="stats_hci0" value="1"> Traffic hci0</label>';
					}
					else {
						echo '<label><input type="checkbox" name="stats_hci0" value="1" checked> Traffic hci0</label>';
					}
				  ?>
				</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs">CSV</button></td>
				  <td><button type="button" class="btn btn-block btn-primary btn-xs">Reset</button></td>
                </tr>
              </table>
			  
			  <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-danger">Save</button>
              </div>
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		
		<div class="col-md-6">
		   <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Watchdog</h3>
            </div>
           <!-- /.box-header -->
            <div class="box-body no-padding">
              
			  <table class="table table-bordered">
                <tr>
			      <th>Feature</th>
                  <th>Warning value</th>
				  <th>Danger value</th>
				  <th>Emergency value</th>
                </tr>
                <tr>
                  <td>CPU frequency:</td>
                  <td><input type="number" name="watchdog_cpu_freq_warning" min="1" max="100" value="<?php echo $configArray ['watchdog_cpu_freq_warning'] ?>" disabled> %</td>
				  <td><input type="number" name="watchdog_cpu_freq_danger" min="1" max="100" value="<?php echo $configArray ['watchdog_cpu_freq_danger'] ?>" disabled> %</td>
				  <td>Warning = Moderate<br>Danger = Full load</td>
                </tr>
				<tr>
                  <td>CPU load:</td>
                  <td><input type="number" name="watchdog_cpu_load_warning" min="1" max="100" value="<?php echo $configArray ['watchdog_cpu_load_warning'] ?>"> %</td>
				  <td><input type="number" name="watchdog_cpu_load_danger" min="1" max="100" value="<?php echo $configArray ['watchdog_cpu_load_danger'] ?>"> %</td>
				  <td>-</td>
                </tr>
				<tr>
                  <td>CPU load average:</td>
                  <td><input type="number" name="watchdog_cpu_load_avg_warning" min="1" max="100" value="<?php echo $configArray ['watchdog_cpu_load_avg_warning'] ?>"> %</td>
				  <td><input type="number" name="watchdog_cpu_load_avg_danger" min="1" max="100" value="<?php echo $configArray ['watchdog_cpu_load_avg_danger'] ?>"> %</td>
				  <td>-</td>
                </tr>
				<tr>
                  <td>CPU temperature:<br><small>(max. 85 °C / 185 °F)</small></td>
                  <td><input type="number" name="watchdog_cpu_temp_warning" min="1" max="85" value="<?php echo $configArray ['watchdog_cpu_temp_warning'] ?>"> °C<br><label><input type="checkbox"  disabled> Send email</label></td>
				  <td><input type="number" name="watchdog_cpu_temp_danger" min="1" max="85" value="<?php echo $configArray ['watchdog_cpu_temp_danger'] ?>"> °C<br><label><input type="checkbox" disabled> Send email</label></td></td>
				  <td><input type="number" name="watchdog_cpu_temp_emergency" min="1" max="85" value="<?php echo $configArray ['watchdog_cpu_temp_emergency'] ?>"> °C<br>
				  <input type="hidden" name="watchdog_cpu_temp_emergency_shutdown" value="0">
				  <?php
					if ($configArray ['watchdog_cpu_temp_emergency_shutdown'] == "0") {
						echo '<label><input type="checkbox" name="watchdog_cpu_temp_emergency_shutdown" value="1"> Shutdown</label>';
					}
					else {
						echo '<label><input type="checkbox" name="watchdog_cpu_temp_emergency_shutdown" value="1" checked> Shutdown</label>';
					}
				  ?>
				  </td>	  
                </tr>
				<tr>
                  <td>RAM usage:</td>
                  <td><input type="number" name="watchdog_ram_usage_warning" min="1" max="100" value="<?php echo $configArray ['watchdog_ram_usage_warning'] ?>"> %</td>
				  <td><input type="number" name="watchdog_ram_usage_danger" min="1" max="100" value="<?php echo $configArray ['watchdog_ram_usage_danger'] ?>"> %</td>
				  <td>-</td>
                </tr>
				<tr>
                  <td>Storage usage:<br><small>(root)</small></td>
                  <td><input type="number" name="watchdog_storage_usage_warning" min="1" max="100" value="<?php echo $configArray ['watchdog_storage_usage_warning'] ?>"> %<br><label><input type="checkbox" disabled> Send email</label></td></td>
				  <td><input type="number" name="watchdog_storage_usage_danger" min="1" max="100" value="<?php echo $configArray ['watchdog_storage_usage_danger'] ?>"> %<br><label><input type="checkbox" disabled> Send email</label></td></td>
				  <td><input type="number" name="watchdog_storage_usage_emergency" min="1" max="100" value="<?php echo $configArray ['watchdog_storage_usage_emergency'] ?>"> %<br>
				  <input type="hidden" name="watchdog_storage_usage_emergency_shutdown" value="0">
				  <?php
					if ($configArray ['watchdog_storage_usage_emergency_shutdown'] == "0") {
						echo '<label><input type="checkbox" name="watchdog_storage_usage_emergency_shutdown" value="1"> Shutdown</label>';
					}
					else {
						echo '<label><input type="checkbox" name="watchdog_storage_usage_emergency_shutdown" value="1" checked> Shutdown</label>';
					}
				  ?>
				  </td>
                </tr>
              </table>
			  
			  <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-danger">Save</button>
              </div>
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		</div>
    <!-- /.row -->
		
	</form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php
include_once '../pages/includes/footer.php';
?>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
$(document).ready(function(){
  	$('#div-save').delay(1000).fadeIn(250).delay(8000).fadeOut(250);
});
</script>
</body>
</html>