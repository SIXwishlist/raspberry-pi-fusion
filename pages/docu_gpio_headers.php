<?php
include_once '../lib/functions.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pi Fusion | GPIO Headers</title>
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
				<li class="active"><a href="../pages/docu_gpio_headers.php"><i class="fa fa-book"></i> Headers RPi & Zero</a></li>		
				<li><a href="../pages/docu_gpio_headers_cm.php"><i class="fa fa-book"></i> Headers CM & I/O Board</a></li>				
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
              <h3 class="box-title">GPIO information <small>Hints</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			Voltage:
			  <ul>
                <li>GPIO voltage levels are 3.3 V and are not 5 V tolerant.</li>
				<li>There is no over-voltage protection on the board.</li>
			  </ul>
			  Current:
			  <ul>
                <li>Current limit per pin max. 16 mA, recommended 3 mA - 8 mA.</li>
                <li>Current limit absolute (sum) max. 50 mA.</li>
			  </ul>
			  Status:
			  <ul>
                <li>GPIO as output: High = 3.3 V | Low = 0 V</li>
				<li>GPIO as input: High = >1.3 V | Low = <0.8 V</li>
				<li>GPIO as input: If no defined voltage is applied, the inputs tend to oscillate in any direction. That is, they assume the state High or Low alternately. This happens, for example, if the GPIO input is unconnected. This should be avoided. Pull-up and pull-down resistors can be used to determine the basic state of a GPIO input.</li>
			  </ul>
			  Power:
			  <ul>
                <li>Dangerous: If you power the Raspberry Pi directly via the GPIO, there is no regulation or fuse protection on the GPIO to protect from over-voltage or current spikes. If an incorrect voltage is applied, or a current spike occurs on the GPIO you can permanently damage your Raspberry Pi. If you do this then only with secure regulated power supplies.</li>
			  </ul>

			</div>
            <!-- /.box-body -->
          </div>
		<!-- /.box -->
	

	
	<!-- /.box -->
          <div class="box box-solid box-default">
            <div class="box-header">
              <h3 class="box-title">Legend <small>Headers</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
	
<table border="1" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td><strong>Key</strong></td>
<td style="text-align: center;"><strong>Description</strong></td>
</tr>
<tr>
<td style="background-color: #cc0000;"><span style="color: #ffffff;">POWER</span></td>
<td style="text-align: left;">DC Voltage (+)</td>
</tr>
<tr>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
<td style="text-align: left;">Ground (-)</td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPIO</span></td>
<td style="text-align: left;">General Purpose Input / Output</td>
</tr>
<tr>
<td style="background-color: #666633; text-align: center;"><span style="color: #ffffff;">DNC</span></td>
<td style="text-align: left;">Do Not Connect</td>
</tr>
<tr>
<td style="text-align: center;">NC</td>
<td style="text-align: left;">Not Connected</td>
</tr>
<tr>
<td style="background-color: #006633; text-align: center;"><span style="color: #ffffff;">UART</span></td>
<td style="text-align: left;">Universal Asynchronous Receiver / Transmitter</td>
</tr>
<tr>
<td style="background-color: #0033ff; text-align: center;"><span style="color: #ffffff;">I2C</span></td>
<td style="text-align: left;">Inter-Integrated Circuit</td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI</span></td>
<td style="text-align: left;">Serial Peripheral Interface</td>
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
	
		<!-- /.box -->
          <div class="box box-solid box-default">
            <div class="box-header">
              <h3 class="box-title">P1 plus header rev2 <small>40-pin (also Pi Zero J8 header)</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
<table border="1" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td><strong>Func (ALT0)</strong></td>
<td style="text-align: center;"><strong>Pull</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>Pull</strong></td>
<td><strong>Func (ALT0)</strong></td>
</tr>
<tr>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">1</td>
<td style="background-color: #a9a9a9; text-align: center;">2</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+5V</span></td>
</tr>
<tr>
<td style="background-color: #0033ff; text-align: center;"><span style="color: #ffffff;">I2C_SDA1</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">2</td>
<td style="background-color: #a9a9a9; text-align: center;">3</td>
<td style="background-color: #a9a9a9; text-align: center;">4</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff; background-color: #cc0000;">+5V</span></td>
</tr>
<tr>
<td style="background-color: #0033ff; text-align: center;"><span style="color: #ffffff;">I2C_SCL1</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">3</td>
<td style="background-color: #a9a9a9; text-align: center;">5</td>
<td style="background-color: #a9a9a9; text-align: center;">6</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPCLK0</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">4</td>
<td style="background-color: #a9a9a9; text-align: center;">7</td>
<td style="background-color: #a9a9a9; text-align: center;">8</td>
<td style="text-align: center;">14</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #006633; text-align: center;"><span style="color: #ffffff;">UART0_TXD0</span></td>
</tr>
<tr>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">9</td>
<td style="background-color: #a9a9a9; text-align: center;">10</td>
<td style="text-align: center;">15</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #006633; text-align: center;"><span style="color: #ffffff;">UART0_RXD0</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN0</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">17</td>
<td style="background-color: #a9a9a9; text-align: center;">11</td>
<td style="background-color: #a9a9a9; text-align: center;">12</td>
<td style="text-align: center;">18</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN1</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN2</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">27</td>
<td style="background-color: #a9a9a9; text-align: center;">13</td>
<td style="background-color: #a9a9a9; text-align: center;">14</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN3</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">22</td>
<td style="background-color: #a9a9a9; text-align: center;">15</td>
<td style="background-color: #a9a9a9; text-align: center;">16</td>
<td style="text-align: center;">23</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN4</span></td>
</tr>
<tr>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">17</td>
<td style="background-color: #a9a9a9; text-align: center;">18</td>
<td style="text-align: center;">24</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN5</span></td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_MOSI</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">10</td>
<td style="background-color: #a9a9a9; text-align: center;">19</td>
<td style="background-color: #a9a9a9; text-align: center;">20</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_MISO</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">9</td>
<td style="background-color: #a9a9a9; text-align: center;">21</td>
<td style="background-color: #a9a9a9; text-align: center;">22</td>
<td style="text-align: center;">25</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN6</span></td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_SCLK</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">11</td>
<td style="background-color: #a9a9a9; text-align: center;">23</td>
<td style="background-color: #a9a9a9; text-align: center;">24</td>
<td style="text-align: center;">8</td>
<td style="text-align: center;">High</td>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_CE0_N</span></td>
</tr>
<tr>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">25</td>
<td style="background-color: #a9a9a9; text-align: center;">26</td>
<td style="text-align: center;">7</td>
<td style="text-align: center;">High</td>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_CE1_N</span></td>
</tr>
<tr>
<td style="background-color: #666633; text-align: center;"><span style="color: #ffffff;">I2C_SDA0 EEPROM</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">0</td>
<td style="background-color: #a9a9a9; text-align: center;">27</td>
<td style="background-color: #a9a9a9; text-align: center;">28</td>
<td style="text-align: center;">1</td>
<td style="text-align: center;">High</td>
<td style="background-color: #666633; text-align: center;"><span style="color: #ffffff;">I2C_SCL0 EEPROM</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPCLK1</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">5</td>
<td style="background-color: #a9a9a9; text-align: center;">29</td>
<td style="background-color: #a9a9a9; text-align: center;">30</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPCLK2</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">6</td>
<td style="background-color: #a9a9a9; text-align: center;">31</td>
<td style="background-color: #a9a9a9; text-align: center;">32</td>
<td style="text-align: center;">12</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">PWM0</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">PWM1</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">13</td>
<td style="background-color: #a9a9a9; text-align: center;">33</td>
<td style="background-color: #a9a9a9; text-align: center;">34</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">PCM_FS</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">19</td>
<td style="background-color: #a9a9a9; text-align: center;">35</td>
<td style="background-color: #a9a9a9; text-align: center;">36</td>
<td style="text-align: center;">16</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">FL0</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">SD0_DAT2</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">26</td>
<td style="background-color: #a9a9a9; text-align: center;">37</td>
<td style="background-color: #a9a9a9; text-align: center;">38</td>
<td style="text-align: center;">20</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">PCM_DIN</span></td>
</tr>
<tr>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff; background-color: #000000;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">39</td>
<td style="background-color: #a9a9a9; text-align: center;">40</td>
<td style="text-align: center;">21</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">PCM_DOUT</span></td>
</tr>
</tbody>
</table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		  
		  
		  <!-- /.box -->
          <div class="box box-solid box-default">
            <div class="box-header">
              <h3 class="box-title">P5 header rev2 <small>8-pin</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
			
<table border="1" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td><strong>Func (ALT0)</strong></td>
<td style="text-align: center;"><strong>Pull</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>BMC</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>Pull</strong></td>
<td><strong>Func (ALT0)</strong></td>
</tr>
<tr>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">2</td>
<td style="background-color: #a9a9a9; text-align: center;">1</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+5V</span></td>
</tr>
<tr>
<td style="background-color: #0033ff; text-align: center;"><span style="color: #ffffff;">I2C_SCL0</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">29</td>
<td style="background-color: #a9a9a9; text-align: center;">4</td>
<td style="background-color: #a9a9a9; text-align: center;">3</td>
<td style="text-align: center;">28</td>
<td style="text-align: center;">-</td>
<td style="background-color: #0033ff; text-align: center;"><span style="color: #ffffff;">I2C_SDA0</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">FL0</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">31</td>
<td style="background-color: #a9a9a9; text-align: center;">6</td>
<td style="background-color: #a9a9a9; text-align: center;">5</td>
<td style="text-align: center;">30</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">TE0</span></td>
</tr>
<tr>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">8</td>
<td style="background-color: #a9a9a9; text-align: center;">7</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
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
	
	<!-- /.box -->
          <div class="box box-solid box-default">
            <div class="box-header">
              <h3 class="box-title">P1 header rev1 <small>26-pin</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
<table border="1" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td><strong>Func (ALT0)</strong></td>
<td style="text-align: center;"><strong>Pull</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>BMC</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>Pull</strong></td>
<td><strong>Func (ALT0)</strong></td>
</tr>
<tr>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">1</td>
<td style="background-color: #a9a9a9; text-align: center;">2</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+5V</span></td>
</tr>
<tr>
<td style="background-color: #0033ff; text-align: center;"><span style="color: #ffffff;">I2C_SDA0</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">0</td>
<td style="background-color: #a9a9a9; text-align: center;">3</td>
<td style="background-color: #a9a9a9; text-align: center;">4</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+5V</span></td>
</tr>
<tr>
<td style="background-color: #0033ff; text-align: center;"><span style="color: #ffffff;">I2C_SCL0</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">1</td>
<td style="background-color: #a9a9a9; text-align: center;">5</td>
<td style="background-color: #a9a9a9; text-align: center;">6</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPCLK0</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">4</td>
<td style="background-color: #a9a9a9; text-align: center;">7</td>
<td style="background-color: #a9a9a9; text-align: center;">8</td>
<td style="text-align: center;">14</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #006633; text-align: center;"><span style="color: #ffffff;">UART0_TXD0</span></td>
</tr>
<tr>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">9</td>
<td style="background-color: #a9a9a9; text-align: center;">10</td>
<td style="text-align: center;">15</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #006633; text-align: center;"><span style="color: #ffffff;">UART0_RXD0</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">FL1</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">17</td>
<td style="background-color: #a9a9a9; text-align: center;">11</td>
<td style="background-color: #a9a9a9; text-align: center;">12</td>
<td style="text-align: center;">18</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">PCM_CLK</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">PCM_DOUT</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">21</td>
<td style="background-color: #a9a9a9; text-align: center;">13</td>
<td style="background-color: #a9a9a9; text-align: center;">14</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">SD0_CLK</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">22</td>
<td style="background-color: #a9a9a9; text-align: center;">15</td>
<td style="background-color: #a9a9a9; text-align: center;">16</td>
<td style="text-align: center;">23</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">SD0_CMD</span></td>
</tr>
<tr>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">17</td>
<td style="background-color: #a9a9a9; text-align: center;">18</td>
<td style="text-align: center;">24</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">SD0_DATA</span></td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_MOSI</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">10</td>
<td style="background-color: #a9a9a9; text-align: center;">19</td>
<td style="background-color: #a9a9a9; text-align: center;">20</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_MISO</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">9</td>
<td style="background-color: #a9a9a9; text-align: center;">21</td>
<td style="background-color: #a9a9a9; text-align: center;">22</td>
<td style="text-align: center;">25</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">SD0_DAT1</span></td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_SCLK</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">11</td>
<td style="background-color: #a9a9a9; text-align: center;">23</td>
<td style="background-color: #a9a9a9; text-align: center;">24</td>
<td style="text-align: center;">8</td>
<td style="text-align: center;">High</td>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_CE0_N</span></td>
</tr>
<tr>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">25</td>
<td style="background-color: #a9a9a9; text-align: center;">26</td>
<td style="text-align: center;">7</td>
<td style="text-align: center;">High</td>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_CE1_N</span></td>
</tr>
</tbody>
</table>
		</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


		  <!-- /.box -->
          <div class="box box-solid box-default">
            <div class="box-header">
              <h3 class="box-title">P1 header rev2 <small>26-pin</small></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			
<table border="1" style="margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td>
<p><strong>Func (ALT0)</strong></p>
</td>
<td style="text-align: center;"><strong>Pull</strong></td>
<td style="text-align: center;"><strong>BCM</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>PIN</strong></td>
<td style="text-align: center;"><strong>BMC</strong><br /><strong>GPIO</strong></td>
<td style="text-align: center;"><strong>Pull</strong></td>
<td><strong>Func (ALT0)</strong></td>
</tr>
<tr>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">1</td>
<td style="background-color: #a9a9a9; text-align: center;">2</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+5V</span></td>
</tr>
<tr>
<td style="background-color: #0033ff; text-align: center;"><span style="color: #ffffff;">I2C_SDA1</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">2</td>
<td style="background-color: #a9a9a9; text-align: center;">3</td>
<td style="background-color: #a9a9a9; text-align: center;">4</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+5V</span></td>
</tr>
<tr>
<td style="background-color: #0033ff; text-align: center;"><span style="color: #ffffff;">I2C_SCL1</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">3</td>
<td style="background-color: #a9a9a9; text-align: center;">5</td>
<td style="background-color: #a9a9a9; text-align: center;">6</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GPCLK0</span></td>
<td style="text-align: center;">High</td>
<td style="text-align: center;">4</td>
<td style="background-color: #a9a9a9; text-align: center;">7</td>
<td style="background-color: #a9a9a9; text-align: center;">8</td>
<td style="text-align: center;">14</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #006633; text-align: center;"><span style="color: #ffffff;">UART0_TXD0</span></td>
</tr>
<tr>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">9</td>
<td style="background-color: #a9a9a9; text-align: center;">10</td>
<td style="text-align: center;">15</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #006633; text-align: center;"><span style="color: #ffffff;">UART0_RXD0</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN0</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">17</td>
<td style="background-color: #a9a9a9; text-align: center;">11</td>
<td style="background-color: #a9a9a9; text-align: center;">12</td>
<td style="text-align: center;">18</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN1</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN2</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">27</td>
<td style="background-color: #a9a9a9; text-align: center;">13</td>
<td style="background-color: #a9a9a9; text-align: center;">14</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
<tr>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN3</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">22</td>
<td style="background-color: #a9a9a9; text-align: center;">15</td>
<td style="background-color: #a9a9a9; text-align: center;">16</td>
<td style="text-align: center;">23</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN4</span></td>
</tr>
<tr>
<td style="background-color: #cc0000; text-align: center;"><span style="color: #ffffff;">+3V3</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">17</td>
<td style="background-color: #a9a9a9; text-align: center;">18</td>
<td style="text-align: center;">24</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN5</span></td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_MOSI</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">10</td>
<td style="background-color: #a9a9a9; text-align: center;">19</td>
<td style="background-color: #a9a9a9; text-align: center;">20</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_MISO</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">9</td>
<td style="background-color: #a9a9a9; text-align: center;">21</td>
<td style="background-color: #a9a9a9; text-align: center;">22</td>
<td style="text-align: center;">25</td>
<td style="text-align: center;">Low</td>
<td style="background-color: #ff6633; text-align: center;"><span style="color: #ffffff;">GEN6</span></td>
</tr>
<tr>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_SCLK</span></td>
<td style="text-align: center;">Low</td>
<td style="text-align: center;">11</td>
<td style="background-color: #a9a9a9; text-align: center;">23</td>
<td style="background-color: #a9a9a9; text-align: center;">24</td>
<td style="text-align: center;">8</td>
<td style="text-align: center;">High</td>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_CE0_N</span></td>
</tr>
<tr>
<td style="background-color: #000000; text-align: center;"><span style="color: #ffffff;">GND</span></td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="background-color: #a9a9a9; text-align: center;">25</td>
<td style="background-color: #a9a9a9; text-align: center;">26</td>
<td style="text-align: center;">7</td>
<td style="text-align: center;">High</td>
<td style="background-color: #993366; text-align: center;"><span style="color: #ffffff;">SPI0_CE1_N</span></td>
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