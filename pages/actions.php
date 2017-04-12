<?php
$connection = ssh2_connect('127.0.0.1', 22);
ssh2_auth_password($connection, 'pi', 'raspberry');

#$stream = ssh2_exec($connection, 'sudo shutdown -r now');

#$stream = ssh2_exec($connection, 'sudo -s | >/var/log/wtmp | exit');
sleep(10);

$stream = ssh2_exec($connection, 'sudo shutdown -r now');
?>