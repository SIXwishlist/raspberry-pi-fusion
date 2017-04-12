<?php
include_once "/var/www/html/fusion/lib/functions.php";
$configArray = read_Settings();
$connection = ssh2_connect($configArray ['ssh_cmd_ip'], 22);
ssh2_auth_password($connection, $configArray ['ssh_cmd_user'], $configArray ['ssh_cmd_password']);
$stream = ssh2_exec($connection, 'sync ; echo 3 | sudo tee /proc/sys/vm/drop_caches');
?>