<?php
include_once '../lib/functions.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pi Fusion | GPIO Headers CM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../plugins/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
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
		
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Documentation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li class="active">
              <a href="#"><i class="fa fa-book"></i> GPIO
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="../pages/docu_gpio_func.php"><i class="fa fa-book"></i> Functions Overview</a></li>
				<li><a href="../pages/docu_gpio_headers.php"><i class="fa fa-book"></i> Headers RPi & Zero</a></li>		
				<li class="active"><a href="../pages/docu_gpio_headers_cm.php"><i class="fa fa-book"></i> Headers CM & I/O Board</a></li>				
              </ul>
            </li>
			<li><a href="../pages/docu_board_revs.php"><i class="fa fa-book"></i> Board Revisions</a></li>
          </ul>
        </li>
		
		<li class="treeview">
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
			<li><a href="../pages/pif_settings.php"><i class="fa fa-gear"></i> Settings</a></li>
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
      <h1>GPIO Headers <small>Overview</small></h1>
    </section>
	
    <!-- Main content -->
    <section class="content">
	
	<div class="row">
	
	<div class="col-md-4">
	
          <div class="box box-solid box-default">
            <div class="box-header">
              <h3 class="box-title">Compute Module <small>SODIMM 200-pin</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
	
<table border="1" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td><strong>CM1</strong></td>
<td><strong>CM3-Lite</strong></td>
<td><strong>CM3</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td><strong>CM3</strong></td>
<td><strong>CM3-Lite</strong></td>
<td><strong>CM1</strong></td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">1</td>
<td style="text-align: center; background-color: #a9a9a9;">2</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">EMMC_DISABLE_N</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO0</td>
<td style="text-align: center;">0</td>
<td style="text-align: center; background-color: #a9a9a9;">3</td>
<td style="text-align: center; background-color: #a9a9a9;">4</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">NC</td>
<td style="text-align: center;">SDX_VDD</td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO1</td>
<td style="text-align: center;">1</td>
<td style="text-align: center; background-color: #a9a9a9;">5</td>
<td style="text-align: center; background-color: #a9a9a9;">6</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">NC</td>
<td style="text-align: center;">SDX_VDD</td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">7</td>
<td style="text-align: center; background-color: #a9a9a9;">8</td>
<td style="text-align: center;">-</td>
<td colspan="2" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO2</td>
<td style="text-align: center;">2</td>
<td style="text-align: center; background-color: #a9a9a9;">9</td>
<td style="text-align: center; background-color: #a9a9a9;">10</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">NC</td>
<td style="text-align: center;">SDX_CLK</td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO3</td>
<td style="text-align: center;">3</td>
<td style="text-align: center; background-color: #a9a9a9;">11</td>
<td style="text-align: center; background-color: #a9a9a9;">12</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">NC</td>
<td style="text-align: center;">SDX_CMD</td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">13</td>
<td style="text-align: center; background-color: #a9a9a9;">14</td>
<td style="text-align: center;">-</td>
<td colspan="2" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO4</td>
<td style="text-align: center;">4</td>
<td style="text-align: center; background-color: #a9a9a9;">15</td>
<td style="text-align: center; background-color: #a9a9a9;">16</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">NC</td>
<td style="text-align: center;">SDX_D0</td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO5</td>
<td style="text-align: center;">5</td>
<td style="text-align: center; background-color: #a9a9a9;">17</td>
<td style="text-align: center; background-color: #a9a9a9;">18</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">NC</td>
<td style="text-align: center;">SDX_D1</td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">19</td>
<td style="text-align: center; background-color: #a9a9a9;">20</td>
<td style="text-align: center;">-</td>
<td colspan="2" style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO6</td>
<td style="text-align: center;">6</td>
<td style="text-align: center; background-color: #a9a9a9;">21</td>
<td style="text-align: center; background-color: #a9a9a9;">22</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">NC</td>
<td style="text-align: center;">SDX_D2</td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO7</td>
<td style="text-align: center;">7</td>
<td style="text-align: center; background-color: #a9a9a9;">23</td>
<td style="text-align: center; background-color: #a9a9a9;">24</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">NC</td>
<td style="text-align: center;">SDX_D3</td>
<td style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">25</td>
<td style="text-align: center; background-color: #a9a9a9;">26</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO8</td>
<td style="text-align: center;">8</td>
<td style="text-align: center; background-color: #a9a9a9;">27</td>
<td style="text-align: center; background-color: #a9a9a9;">28</td>
<td style="text-align: center;">28</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO28</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO9</td>
<td style="text-align: center;">9</td>
<td style="text-align: center; background-color: #a9a9a9;">29</td>
<td style="text-align: center; background-color: #a9a9a9;">30</td>
<td style="text-align: center;">29</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO29</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">31</td>
<td style="text-align: center; background-color: #a9a9a9;">32</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO10</td>
<td style="text-align: center;">10</td>
<td style="text-align: center; background-color: #a9a9a9;">33</td>
<td style="text-align: center; background-color: #a9a9a9;">34</td>
<td style="text-align: center;">30</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO30</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO11</td>
<td style="text-align: center;">11</td>
<td style="text-align: center; background-color: #a9a9a9;">35</td>
<td style="text-align: center; background-color: #a9a9a9;">36</td>
<td style="text-align: center;">31</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO31</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">26</td>
<td style="text-align: center; background-color: #a9a9a9;">37</td>
<td style="text-align: center; background-color: #a9a9a9;">38</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">GPIO0-27_VDD</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">39</td>
<td style="text-align: center; background-color: #a9a9a9;">40</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">GPIO0-27_VDD</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">GPIO28-45_VDD</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">41</td>
<td style="text-align: center; background-color: #a9a9a9;">42</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">GPIO28-45_VDD</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">43</td>
<td style="text-align: center; background-color: #a9a9a9;">44</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO12</td>
<td style="text-align: center;">12</td>
<td style="text-align: center; background-color: #a9a9a9;">45</td>
<td style="text-align: center; background-color: #a9a9a9;">46</td>
<td style="text-align: center;">32</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO32</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO13</td>
<td style="text-align: center;">13</td>
<td style="text-align: center; background-color: #a9a9a9;">47</td>
<td style="text-align: center; background-color: #a9a9a9;">48</td>
<td style="text-align: center;">33</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO33</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">49</td>
<td style="text-align: center; background-color: #a9a9a9;">50</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO14</td>
<td style="text-align: center;">14</td>
<td style="text-align: center; background-color: #a9a9a9;">51</td>
<td style="text-align: center; background-color: #a9a9a9;">52</td>
<td style="text-align: center;">34</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO34</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO15</td>
<td style="text-align: center;">15</td>
<td style="text-align: center; background-color: #a9a9a9;">53</td>
<td style="text-align: center; background-color: #a9a9a9;">54</td>
<td style="text-align: center;">35</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO35</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">55</td>
<td style="text-align: center; background-color: #a9a9a9;">56</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO16</td>
<td style="text-align: center;">16</td>
<td style="text-align: center; background-color: #a9a9a9;">57</td>
<td style="text-align: center; background-color: #a9a9a9;">58</td>
<td style="text-align: center;">36</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO36</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO17</td>
<td style="text-align: center;">17</td>
<td style="text-align: center; background-color: #a9a9a9;">59</td>
<td style="text-align: center; background-color: #a9a9a9;">60</td>
<td style="text-align: center;">37</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO37</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">61</td>
<td style="text-align: center; background-color: #a9a9a9;">62</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO18</td>
<td style="text-align: center;">18</td>
<td style="text-align: center; background-color: #a9a9a9;">63</td>
<td style="text-align: center; background-color: #a9a9a9;">64</td>
<td style="text-align: center;">38</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO38</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO19</td>
<td style="text-align: center;">19</td>
<td style="text-align: center; background-color: #a9a9a9;">65</td>
<td style="text-align: center; background-color: #a9a9a9;">66</td>
<td style="text-align: center;">39</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO39</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">67</td>
<td style="text-align: center; background-color: #a9a9a9;">68</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO20</td>
<td style="text-align: center;">20</td>
<td style="text-align: center; background-color: #a9a9a9;">69</td>
<td style="text-align: center; background-color: #a9a9a9;">70</td>
<td style="text-align: center;">40</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO40</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO21</td>
<td style="text-align: center;">21</td>
<td style="text-align: center; background-color: #a9a9a9;">71</td>
<td style="text-align: center; background-color: #a9a9a9;">72</td>
<td style="text-align: center;">41</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO41</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">73</td>
<td style="text-align: center; background-color: #a9a9a9;">74</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO22</td>
<td style="text-align: center;">22</td>
<td style="text-align: center; background-color: #a9a9a9;">75</td>
<td style="text-align: center; background-color: #a9a9a9;">76</td>
<td style="text-align: center;">42</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO42</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO23</td>
<td style="text-align: center;">23</td>
<td style="text-align: center; background-color: #a9a9a9;">77</td>
<td style="text-align: center; background-color: #a9a9a9;">78</td>
<td style="text-align: center;">43</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO43</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">79</td>
<td style="text-align: center; background-color: #a9a9a9;">80</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO24</td>
<td style="text-align: center;">24</td>
<td style="text-align: center; background-color: #a9a9a9;">81</td>
<td style="text-align: center; background-color: #a9a9a9;">82</td>
<td style="text-align: center;">44</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO44</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO25</td>
<td style="text-align: center;">25</td>
<td style="text-align: center; background-color: #a9a9a9;">83</td>
<td style="text-align: center; background-color: #a9a9a9;">84</td>
<td style="text-align: center;">45</td>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO45</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">85</td>
<td style="text-align: center; background-color: #a9a9a9;">86</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO26</td>
<td style="text-align: center;">26</td>
<td style="text-align: center; background-color: #a9a9a9;">87</td>
<td style="text-align: center; background-color: #a9a9a9;">88</td>
<td style="text-align: center;">(46)</td>
<td colspan="2" style="text-align: center;">HDMI_HPD_N_1V8</td>
<td style="text-align: center;">GPIO46_1V8</td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;">GPIO27</td>
<td style="text-align: center;">27</td>
<td style="text-align: center; background-color: #a9a9a9;">89</td>
<td style="text-align: center; background-color: #a9a9a9;">90</td>
<td style="text-align: center;">(47)</td>
<td colspan="2" style="text-align: center;">HDMI_EN_N_1V8</td>
<td style="text-align: center;">GPIO47_1V8</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">91</td>
<td style="text-align: center; background-color: #a9a9a9;">92</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">DSI0-DN1</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">93</td>
<td style="text-align: center; background-color: #a9a9a9;">94</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_DP0</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">DSI0_DP1</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">95</td>
<td style="text-align: center; background-color: #a9a9a9;">96</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_DN0</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">97</td>
<td style="text-align: center; background-color: #a9a9a9;">98</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">DSI0_DN0</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">99</td>
<td style="text-align: center; background-color: #a9a9a9;">100</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_CP</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">DSI0_DP0</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">101</td>
<td style="text-align: center; background-color: #a9a9a9;">102</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_CN</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">103</td>
<td style="text-align: center; background-color: #a9a9a9;">104</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">DSI0_CN</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">105</td>
<td style="text-align: center; background-color: #a9a9a9;">106</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_DP3</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">DSI0_CP</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">107</td>
<td style="text-align: center; background-color: #a9a9a9;">108</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_DN3</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">109</td>
<td style="text-align: center; background-color: #a9a9a9;">110</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_CLK_N</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">111</td>
<td style="text-align: center; background-color: #a9a9a9;">112</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_DP2</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_CLK_P</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">113</td>
<td style="text-align: center; background-color: #a9a9a9;">114</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_DN2</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">115</td>
<td style="text-align: center; background-color: #a9a9a9;">116</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_D0_N</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">117</td>
<td style="text-align: center; background-color: #a9a9a9;">118</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_DP1</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_D0_P</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">119</td>
<td style="text-align: center; background-color: #a9a9a9;">120</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">DSI1_DN1</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">121</td>
<td style="text-align: center; background-color: #a9a9a9;">122</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_D1_N</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">123</td>
<td style="text-align: center; background-color: #a9a9a9;">124</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_D1_P</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">125</td>
<td style="text-align: center; background-color: #a9a9a9;">126</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">127</td>
<td style="text-align: center; background-color: #a9a9a9;">128</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_D2_N</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">129</td>
<td style="text-align: center; background-color: #a9a9a9;">130</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_D2_P</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">131</td>
<td style="text-align: center; background-color: #a9a9a9;">132</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">133</td>
<td style="text-align: center; background-color: #a9a9a9;">134</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_DP3</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">135</td>
<td style="text-align: center; background-color: #a9a9a9;">136</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">CAM0_DP0</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_DN3</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">137</td>
<td style="text-align: center; background-color: #a9a9a9;">138</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">CAM0_DN0</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">139</td>
<td style="text-align: center; background-color: #a9a9a9;">140</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_DP2</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">141</td>
<td style="text-align: center; background-color: #a9a9a9;">142</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">CAM0_CP</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_DN2</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">143</td>
<td style="text-align: center; background-color: #a9a9a9;">144</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">CAM0_CN</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">145</td>
<td style="text-align: center; background-color: #a9a9a9;">146</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_CP</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">147</td>
<td style="text-align: center; background-color: #a9a9a9;">148</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">CAM0_DP1</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_CN</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">149</td>
<td style="text-align: center; background-color: #a9a9a9;">150</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">CAM0_DN1</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">151</td>
<td style="text-align: center; background-color: #a9a9a9;">152</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_DP1</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">153</td>
<td style="text-align: center; background-color: #a9a9a9;">154</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_DN1</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">155</td>
<td style="text-align: center; background-color: #a9a9a9;">156</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">157</td>
<td style="text-align: center; background-color: #a9a9a9;">158</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_DP0</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">159</td>
<td style="text-align: center; background-color: #a9a9a9;">160</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_DN0</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">161</td>
<td style="text-align: center; background-color: #a9a9a9;">162</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">NC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">163</td>
<td style="text-align: center; background-color: #a9a9a9;">164</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">USB_DP</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">165</td>
<td style="text-align: center; background-color: #a9a9a9;">166</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">TVDAC</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">USB_DM</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">167</td>
<td style="text-align: center; background-color: #a9a9a9;">168</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">USB_OTIGID</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">169</td>
<td style="text-align: center; background-color: #a9a9a9;">170</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_CEC</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">171</td>
<td style="text-align: center; background-color: #a9a9a9;">172</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">VC_TRST_N</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_SDA</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">173</td>
<td style="text-align: center; background-color: #a9a9a9;">174</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">VC_TDI</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">HDMI_SCL</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">175</td>
<td style="text-align: center; background-color: #a9a9a9;">176</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">VC_TMS</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">RUN</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">177</td>
<td style="text-align: center; background-color: #a9a9a9;">178</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">VC_TDO</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">VDD_CORE (DNC)</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">179</td>
<td style="text-align: center; background-color: #a9a9a9;">180</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">VC_TCK</td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">181</td>
<td style="text-align: center; background-color: #a9a9a9;">182</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">183</td>
<td style="text-align: center; background-color: #a9a9a9;">184</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">185</td>
<td style="text-align: center; background-color: #a9a9a9;">186</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">187</td>
<td style="text-align: center; background-color: #a9a9a9;">188</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">VDAC</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">189</td>
<td style="text-align: center; background-color: #a9a9a9;">190</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">VDAC</td>
</tr>
<tr>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">191</td>
<td style="text-align: center; background-color: #a9a9a9;">192</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">193</td>
<td style="text-align: center; background-color: #a9a9a9;">194</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">195</td>
<td style="text-align: center; background-color: #a9a9a9;">196</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; text-align: center; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">VBAT</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">197</td>
<td style="text-align: center; background-color: #a9a9a9;">198</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">VBAT</td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">VBAT</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">199</td>
<td style="text-align: center; background-color: #a9a9a9;">200</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="text-align: center;">VBAT</td>
</tr>
</tbody>
</table>


			</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  
		  
		  </div>
        <!-- /.col -->
		
		
		<div class="col-md-4">
	
          <div class="box box-solid box-default">
            <div class="box-header">
              <h3 class="box-title">Compute Module I/O Board J5 <small>60-pin</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
<table border="1" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td colspan="3"><strong>Func</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td colspan="3" style="line-height: 1.42857;"><strong>Func</strong></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO0</span></td>
<td style="text-align: center;">0</td>
<td style="text-align: center; background-color: #a9a9a9;">1</td>
<td style="text-align: center; background-color: #a9a9a9;">2</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO1</span></td>
<td style="text-align: center;">1</td>
<td style="text-align: center; background-color: #a9a9a9;">3</td>
<td style="text-align: center; background-color: #a9a9a9;">4</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+5V</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO2</span></td>
<td style="text-align: center;">2</td>
<td style="text-align: center; background-color: #a9a9a9;">5</td>
<td style="text-align: center; background-color: #a9a9a9;">6</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO3</span></td>
<td style="text-align: center;">3</td>
<td style="text-align: center; background-color: #a9a9a9;">7</td>
<td style="text-align: center; background-color: #a9a9a9;">8</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO4</span></td>
<td style="text-align: center;">4</td>
<td style="text-align: center; background-color: #a9a9a9;">9</td>
<td style="text-align: center; background-color: #a9a9a9;">10</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO5</span></td>
<td style="text-align: center;">5</td>
<td style="text-align: center; background-color: #a9a9a9;">11</td>
<td style="text-align: center; background-color: #a9a9a9;">12</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO6</span></td>
<td style="text-align: center;">6</td>
<td style="text-align: center; background-color: #a9a9a9;">13</td>
<td style="text-align: center; background-color: #a9a9a9;">14</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO7</span></td>
<td style="text-align: center;">7</td>
<td style="text-align: center; background-color: #a9a9a9;">15</td>
<td style="text-align: center; background-color: #a9a9a9;">16</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">VG0</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO8</span></td>
<td style="text-align: center;">8</td>
<td style="text-align: center; background-color: #a9a9a9;">17</td>
<td style="text-align: center; background-color: #a9a9a9;">18</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO9</span></td>
<td style="text-align: center;">9</td>
<td style="text-align: center; background-color: #a9a9a9;">19</td>
<td style="text-align: center; background-color: #a9a9a9;">20</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO10</span></td>
<td style="text-align: center;">10</td>
<td style="text-align: center; background-color: #a9a9a9;">21</td>
<td style="text-align: center; background-color: #a9a9a9;">22</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO11</span></td>
<td style="text-align: center;">11</td>
<td style="text-align: center; background-color: #a9a9a9;">23</td>
<td style="text-align: center; background-color: #a9a9a9;">24</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO12</span></td>
<td style="text-align: center;">12</td>
<td style="text-align: center; background-color: #a9a9a9;">25</td>
<td style="text-align: center; background-color: #a9a9a9;">26</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO13</span></td>
<td style="text-align: center;">13</td>
<td style="text-align: center; background-color: #a9a9a9;">27</td>
<td style="text-align: center; background-color: #a9a9a9;">28</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">VG0</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO14</span></td>
<td style="text-align: center;">14</td>
<td style="text-align: center; background-color: #a9a9a9;">29</td>
<td style="text-align: center; background-color: #a9a9a9;">30</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO15</span></td>
<td style="text-align: center;">15</td>
<td style="text-align: center; background-color: #a9a9a9;">31</td>
<td style="text-align: center; background-color: #a9a9a9;">32</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO16</span></td>
<td style="text-align: center;">16</td>
<td style="text-align: center; background-color: #a9a9a9;">33</td>
<td style="text-align: center; background-color: #a9a9a9;">34</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO17</span></td>
<td style="text-align: center;">17</td>
<td style="text-align: center; background-color: #a9a9a9;">35</td>
<td style="text-align: center; background-color: #a9a9a9;">36</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO18</span></td>
<td style="text-align: center;">18</td>
<td style="text-align: center; background-color: #a9a9a9;">37</td>
<td style="text-align: center; background-color: #a9a9a9;">38</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO19</span></td>
<td style="text-align: center;">19</td>
<td style="text-align: center; background-color: #a9a9a9;">39</td>
<td style="text-align: center; background-color: #a9a9a9;">40</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">VG0</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO20</span></td>
<td style="text-align: center;">20</td>
<td style="text-align: center; background-color: #a9a9a9;">41</td>
<td style="text-align: center; background-color: #a9a9a9;">42</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO21</span></td>
<td style="text-align: center;">21</td>
<td style="text-align: center; background-color: #a9a9a9;">43</td>
<td style="text-align: center; background-color: #a9a9a9;">44</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO22</span></td>
<td style="text-align: center;">22</td>
<td style="text-align: center; background-color: #a9a9a9;">45</td>
<td style="text-align: center; background-color: #a9a9a9;">46</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO23</span></td>
<td style="text-align: center;">23</td>
<td style="text-align: center; background-color: #a9a9a9;">47</td>
<td style="text-align: center; background-color: #a9a9a9;">48</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO24</span></td>
<td style="text-align: center;">24</td>
<td style="text-align: center; background-color: #a9a9a9;">49</td>
<td style="text-align: center; background-color: #a9a9a9;">50</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO25</span></td>
<td style="text-align: center;">25</td>
<td style="text-align: center; background-color: #a9a9a9;">51</td>
<td style="text-align: center; background-color: #a9a9a9;">52</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">VG0</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO26</span></td>
<td style="text-align: center;">26</td>
<td style="text-align: center; background-color: #a9a9a9;">53</td>
<td style="text-align: center; background-color: #a9a9a9;">54</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO27</span></td>
<td style="text-align: center;">27</td>
<td style="text-align: center; background-color: #a9a9a9;">55</td>
<td style="text-align: center; background-color: #a9a9a9;">56</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff; background-color: #cc0000;">+5V</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">RUN</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">57</td>
<td style="text-align: center; background-color: #a9a9a9;">58</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="2" style="text-align: center;">
<p>rev 1.2<br />GPIO47_CTL_1V8</p>
</td>
<td style="text-align: center;">rev 3.0<br />NC</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">59</td>
<td style="text-align: center; background-color: #a9a9a9;">60</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
</tbody>
</table>
		
		</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  
		  
		  </div>
        <!-- /.col -->
		
		
		<div class="col-md-4">
	
          <div class="box box-solid box-default">
            <div class="box-header">
              <h3 class="box-title">Compute Module I/O Board J6 <small>60-pin</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
<table border="1" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td colspan="3"><strong>Func</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td colspan="3" style="line-height: 1.42857;"><strong>Func</strong></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO28</span></td>
<td style="text-align: center;">28</td>
<td style="text-align: center; background-color: #a9a9a9;">1</td>
<td style="text-align: center; background-color: #a9a9a9;">2</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO29</span></td>
<td style="text-align: center;">29</td>
<td style="text-align: center; background-color: #a9a9a9;">3</td>
<td style="text-align: center; background-color: #a9a9a9;">4</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+5V</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO30</span></td>
<td style="text-align: center;">30</td>
<td style="text-align: center; background-color: #a9a9a9;">5</td>
<td style="text-align: center; background-color: #a9a9a9;">6</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO31</span></td>
<td style="text-align: center;">31</td>
<td style="text-align: center; background-color: #a9a9a9;">7</td>
<td style="text-align: center; background-color: #a9a9a9;">8</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO32</span></td>
<td style="text-align: center;">32</td>
<td style="text-align: center; background-color: #a9a9a9;">9</td>
<td style="text-align: center; background-color: #a9a9a9;">10</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO33</span></td>
<td style="text-align: center;">33</td>
<td style="text-align: center; background-color: #a9a9a9;">11</td>
<td style="text-align: center; background-color: #a9a9a9;">12</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO34</span></td>
<td style="text-align: center;">34</td>
<td style="text-align: center; background-color: #a9a9a9;">13</td>
<td style="text-align: center; background-color: #a9a9a9;">14</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO35</span></td>
<td style="text-align: center;">35</td>
<td style="text-align: center; background-color: #a9a9a9;">15</td>
<td style="text-align: center; background-color: #a9a9a9;">16</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">VG0</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO36</span></td>
<td style="text-align: center;">36</td>
<td style="text-align: center; background-color: #a9a9a9;">17</td>
<td style="text-align: center; background-color: #a9a9a9;">18</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO37</span></td>
<td style="text-align: center;">37</td>
<td style="text-align: center; background-color: #a9a9a9;">19</td>
<td style="text-align: center; background-color: #a9a9a9;">20</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO38</span></td>
<td style="text-align: center;">38</td>
<td style="text-align: center; background-color: #a9a9a9;">21</td>
<td style="text-align: center; background-color: #a9a9a9;">22</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO39</span></td>
<td style="text-align: center;">39</td>
<td style="text-align: center; background-color: #a9a9a9;">23</td>
<td style="text-align: center; background-color: #a9a9a9;">24</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO40</span></td>
<td style="text-align: center;">40</td>
<td style="text-align: center; background-color: #a9a9a9;">25</td>
<td style="text-align: center; background-color: #a9a9a9;">26</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO41</span></td>
<td style="text-align: center;">41</td>
<td style="text-align: center; background-color: #a9a9a9;">27</td>
<td style="text-align: center; background-color: #a9a9a9;">28</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">VG0</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO42</span></td>
<td style="text-align: center;">42</td>
<td style="text-align: center; background-color: #a9a9a9;">29</td>
<td style="text-align: center; background-color: #a9a9a9;">30</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO43</span></td>
<td style="text-align: center;">43</td>
<td style="text-align: center; background-color: #a9a9a9;">31</td>
<td style="text-align: center; background-color: #a9a9a9;">32</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO44</span></td>
<td style="text-align: center;">44</td>
<td style="text-align: center; background-color: #a9a9a9;">33</td>
<td style="text-align: center; background-color: #a9a9a9;">34</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO45</span></td>
<td style="text-align: center;">45</td>
<td style="text-align: center; background-color: #a9a9a9;">35</td>
<td style="text-align: center; background-color: #a9a9a9;">36</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CD1_SDA</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">37</td>
<td style="text-align: center; background-color: #a9a9a9;">38</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CD1_SCL</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">39</td>
<td style="text-align: center; background-color: #a9a9a9;">40</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">VG0</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_IO1</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">41</td>
<td style="text-align: center; background-color: #a9a9a9;">42</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM1_IO0</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">43</td>
<td style="text-align: center; background-color: #a9a9a9;">44</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CD0_SDA</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">45</td>
<td style="text-align: center; background-color: #a9a9a9;">46</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CD0_SCL</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">47</td>
<td style="text-align: center; background-color: #a9a9a9;">48</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+1V8</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM0_IO1</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">49</td>
<td style="text-align: center; background-color: #a9a9a9;">50</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">CAM0_IO0</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">51</td>
<td style="text-align: center; background-color: #a9a9a9;">52</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">VG0</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">VDD_CORE (DNC)</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">53</td>
<td style="text-align: center; background-color: #a9a9a9;">54</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">USB_OTGID</td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">55</td>
<td style="text-align: center; background-color: #a9a9a9;">56</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff; background-color: #cc0000;">+5V</span></td>
</tr>
<tr>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center; background-color: #a9a9a9;">57</td>
<td style="text-align: center; background-color: #a9a9a9;">58</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;">TVDAC</td>
<td style="text-align: center;"></td>
<td style="text-align: center; background-color: #a9a9a9;">59</td>
<td style="text-align: center; background-color: #a9a9a9;">60</td>
<td style="text-align: center;">-</td>
<td colspan="3" style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
</tbody>
</table>

		</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  
		  
		  </div>
        <!-- /.col -->
		
		</div>
    <!-- /.row -->

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
</body>
</html>