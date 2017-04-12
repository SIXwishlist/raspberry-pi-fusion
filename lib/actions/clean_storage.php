<?php
include_once "/var/www/html/fusion/lib/functions.php";
$configArray = read_Settings();
$connection = ssh2_connect($configArray ['ssh_cmd_ip'], 22);
ssh2_auth_password($connection, $configArray ['ssh_cmd_user'], $configArray ['ssh_cmd_password']);

// Delete backup
$stream = ssh2_exec($connection, 'sudo rm -rf /boot.bak');

// Delete backup
$stream = ssh2_exec($connection, 'sudo rm -rf /lib/modules.bak');

// Get current kernel
$kernel_current = trim(shell_exec ('uname -r'));

// Get all kernels
exec ('find /lib/modules -mindepth 1 -maxdepth 1 -type d', $matches);

// Delete all old kernels
for ($i=0; $i < count($matches); $i++) {
	if ($matches[$i] !== '/lib/modules/' . $kernel_current)  {
		$stream = ssh2_exec($connection, "sudo rm -rf '$matches[$i]'");
	}
}

// Delete all files

// var/log
#sudo find /var/log -type f -delete

// var/log/apt
#sudo find /var/log/apt -type f -delete

// var/log/nginx
#sudo find /var/log/nginx -type f -delete

// Delete all .gz and rotated file

// var/log
$stream = ssh2_exec($connection, 'sudo find /var/log -type f -regex ".*\.gz$" -delete');
$stream = ssh2_exec($connection, 'sudo find /var/log -type f -regex ".*\.[0-9]$" -delete');

// var/log/apt
$stream = ssh2_exec($connection, 'sudo find /var/log/apt -type f -regex ".*\.gz$" -delete');
$stream = ssh2_exec($connection, 'sudo find /var/log/apt -type f -regex ".*\.[0-9]$" -delete');

// var/log/nginx
$stream = ssh2_exec($connection, 'sudo find /var/log/nginx -type f -regex ".*\.gz$" -delete');
$stream = ssh2_exec($connection, 'sudo find /var/log/nginx -type f -regex ".*\.[0-9]$" -delete');

?>