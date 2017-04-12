<?php
include_once '../lib/functions.php';
$configArray = read_Settings();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pi Fusion | Status</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Refresh -->
  <meta HTTP-EQUIV=Refresh CONTENT='<?php echo $configArray ['page_reload_statusinfo']; ?>'>
  
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
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard Overview</a></li>
            <li class="active"><a href="../pages/rpi_status.php"><i class="fa fa-bar-chart"></i> Status Information</a></li>
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
				<li><a href="../pages/rpi_memory.php"><i class="fa fa-exchange"></i> USB Devices</a></li>					    
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
			<li><a href="pages/docu_board_revs.php"><i class="fa fa-book"></i> Board Revisions</a></li>
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
      <h1>Status Information <small>Measurements takes some seconds. Page auto reload every <?php echo $configArray ['page_reload_statusinfo']; ?> seconds.</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
	
	<div class="row">
	
		<div class="col-md-4">
		   <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">CPU status</h3>
            </div>
           <!-- /.box-header -->
            <div class="box-body no-padding">
              
			  <table class="table table-condensed">
                <tr>
                  <th>Feature</th>
			      <th>Status</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <tr>
                  <td>CPU clock rate:</td>
				  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo soc_CPU_Clock_Freq() ['percentage']; ?>%"><?php echo soc_CPU_Clock_Freq() ['percentage']; ?>%</div>
                    </div>
					<?php echo 'current: ' . soc_CPU_Clock_Freq() ['current'] . ' MHz | scale: ' . soc_CPU_Clock_Freq() ['min'] . ' MHz - ' .  soc_CPU_Clock_Freq() ['max'] . ' MHz | '. soc_CPU_Clock_Freq() ['gov']; ?>
                  </td>
                  <td><span class="<?php echo soc_CPU_Clock_Freq() ['badge']; ?>"><?php echo soc_CPU_Clock_Freq() ['label']; ?></span></td>
                </tr>
                <tr>
                  <td>CPU load:</td>
                  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width:<?php echo cpu_Load() ['percentage']; ?>%"><?php echo cpu_Load() ['percentage']; ?>%</div>
                    </div>
					<?php echo 'load: ' . cpu_Load() ['cpuload'] . '%'; ?>
                  </td>
                  <td><span class="<?php echo cpu_Load() ['badge']; ?>"><?php echo cpu_Load() ['label']; ?></span></td>
                </tr>
				      <tr>
				  <td>CPU load average:</td>
                  <td>
                    <div class="progress progresss">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo cpu_Load_Average() ['load1']; ?>%"><?php echo cpu_Load_Average() ['percentage']; ?>%</div>
                    </div>
					<?php echo 'loads: ' . cpu_Load_Average() ['load1'] . '% [1 min] | ' . cpu_Load_Average() ['load5'] . '% [5 min] | ' . cpu_Load_Average() ['load15'] . '% [15 min]'; ?>
                  </td>
                  <td><span class="<?php echo cpu_Load_Average() ['badge']; ?>"><?php echo cpu_Load_Average() ['label']; ?></span></td>
                </tr>
                <tr>
                  <td>Core temperature:</td>
                  <td>
				  <div class="progress progresss">
					<div class="progress-bar progress-bar-primary" style="width: <?php echo soc_CPU_Temperature() ['percentage']; ?>%"><?php echo soc_CPU_Temperature() ['percentage']; ?>%</div>
					</div>
					<?php echo 'Celsius: ' . soc_CPU_Temperature() ['degrees_c'] . ' (of 85) | Fahrenheit: ' . soc_CPU_Temperature() ['degrees_f'] . ' (of 185)'; ?>
                  </td>
                  <td><span class="<?php echo soc_CPU_Temperature() ['badge']; ?>"><?php echo soc_CPU_Temperature() ['label']; ?></span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		
		<div class="col-md-4">
		   <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Memory status</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th>Feature</th>
			      <th>Status</th>
                  <th style="width: 40px">Label</th>
                </tr>
                <tr>
                  <td>Memory usage:</td>
				  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo ram_Memory_Usage() ['percentage']; ?>%"><?php echo ram_Memory_Usage() ['percentage']; ?>%</div>
                    </div>
					<?php echo 'used: ' . ram_Memory_Usage() ['used'] . ' | free: ' . ram_Memory_Usage() ['free'] . ' | total: ' .  ram_Memory_Usage() ['total']; ?>
					<br>
					<?php echo 'shared: ' . ram_Memory_Usage() ['shared'] . ' | buffers: ' . ram_Memory_Usage() ['buffers'] . ' | cached: ' .  ram_Memory_Usage() ['cached']; ?>
                  </td>
                  <td><span class="<?php echo ram_Memory_Usage() ['badge']; ?>"><?php echo ram_Memory_Usage() ['label']; ?></span></td>
                </tr>
				<tr>
				  <td>Memory split:</td>
                  <td>
                    <div class="progress progresss">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo ram_Split_Usage() ['percentage']; ?>%"><?php echo ram_Split_Usage() ['percentage']; ?>%</div>
                    </div>
					<?php echo 'CPU: ' . ram_Split_Usage() ['arm'] . ' | GPU: ' . ram_Split_Usage() ['gpu'] . ' | total: ' . ram_Split_Usage() ['total']; ?>
                  </td>
                  <td><span class="<?php echo ram_Split_Usage() ['badge']; ?>"><?php echo ram_Split_Usage() ['label']; ?></span></td>
                </tr>
				<tr>
                  <td>Swap usage:</td>
                  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo ram_Swap_Usage() ['percentage']; ?>%"><?php echo ram_Swap_Usage() ['percentage']; ?>%</div>
                    </div>
					<?php echo 'used: ' . ram_Swap_Usage() ['used'] . ' | free: ' . ram_Swap_Usage() ['free'] . ' | total: ' .  ram_Swap_Usage() ['total']; ?>
                  </td>
                  <td><span class="<?php echo ram_Swap_Usage() ['badge']; ?>"><?php echo ram_Swap_Usage() ['label']; ?></span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		
		<div class="col-md-4">
		   <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Storage status</h3>
            </div>
           <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">	
				<tr>
                  <th>Drive (mounted)</th>
			      <th>Status</th>
                  <th style="width: 40px">Label</th>
                </tr>	
				<tr>
				  <?php 
				    $drives = storage_Usage();
					$max = sizeof($drives);
					for ($i=0; $i<$max-1; $i++) {
					?>	
					<td><?php echo $drives[$i]['name']; ?></td>
					<td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo $drives[$i]['percentage']; ?>%"><?php echo $drives[$i]['percentage']; ?>%</div>
                    </div>
					<?php echo 'used: ' . $drives[$i]['used'] . ' | free: ' . $drives[$i]['free'] . ' | total: ' .  $drives[$i]['total'] . ' | format: ' . $drives[$i]['format'] ; ?>
                  </td>
				  <td><span class="<?php echo $drives[$i]['badge']; ?>"><?php echo $drives[$i]['label']; ?></span></td>
                </tr>
				<?php 
					}
				?>     			
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
	
		<div class="col-md-4">
			<div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">LAN traffic</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th>Feature</th>
			      <th>Status</th>
                </tr>
                <tr>
                  <td>RX traffic:</td>
				  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo net_eth0_Traffic() ['eth0_percentage_rx']; ?>%"><?php echo net_eth0_Traffic() ['eth0_percentage_rx']; ?>%</div>
                    </div>
					<?php echo 'received: ' . net_eth0_Traffic() ['eth0_rx_bytes'] . ' | packets: ' . net_eth0_Traffic() ['eth0_rx_packets'] . ' | total RX+TX: ' .  net_eth0_Traffic() ['eth0_total']; ?>
                  </td>
                </tr>
                  <td>TX traffic:</td>
                  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo net_eth0_Traffic() ['eth0_percentage_tx']; ?>%"><?php echo net_eth0_Traffic() ['eth0_percentage_tx']; ?>%</div>
                    </div>
					<?php echo 'sent: ' . net_eth0_Traffic() ['eth0_tx_bytes'] . ' | packets: ' . net_eth0_Traffic() ['eth0_tx_packets'] . ' | total RX+TX: ' .  net_eth0_Traffic() ['eth0_total']; ?>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		
		<div class="col-md-4">
			<div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">WLAN traffic</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th>Feature</th>
			      <th>Status</th>
                </tr>
                <tr>
                  <td>RX traffic:</td>
				  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo net_wlan0_Traffic() ['wlan0_percentage_rx']; ?>%"><?php echo net_wlan0_Traffic() ['wlan0_percentage_rx']; ?>%</div>
                    </div>
					<?php echo 'received: ' . net_wlan0_Traffic() ['wlan0_rx_bytes'] . ' | packets: ' . net_wlan0_Traffic() ['wlan0_rx_packets'] . ' | total RX+TX: ' .  net_wlan0_Traffic() ['wlan0_total']; ?>
                  </td>
                </tr>
                  <td>TX traffic:</td>
                  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo net_wlan0_Traffic() ['wlan0_percentage_tx']; ?>%"><?php echo net_wlan0_Traffic() ['wlan0_percentage_tx']; ?>%</div>
                    </div>
					<?php echo 'sent: ' . net_wlan0_Traffic() ['wlan0_tx_bytes'] . ' | packets: ' . net_wlan0_Traffic() ['wlan0_tx_packets'] . ' | total RX+TX: ' .  net_wlan0_Traffic() ['wlan0_total']; ?>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		
		<div class="col-md-4">
			<div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Bluetooth traffic</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  <th>Feature</th>
			      <th>Status</th>
                </tr>
                <tr>
                  <td>RX traffic:</td>
				  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo net_wlan0_Traffic() ['wlan0_percentage_rx']; ?>%"><?php echo net_wlan0_Traffic() ['wlan0_percentage_rx']; ?>%</div>
                    </div>
					<?php echo 'received: ' . net_wlan0_Traffic() ['wlan0_rx_bytes'] . ' | packets: ' . net_wlan0_Traffic() ['wlan0_rx_packets'] . ' | total RX+TX: ' .  net_wlan0_Traffic() ['wlan0_total']; ?>
                  </td>
                </tr>
                  <td>TX traffic:</td>
                  <td>
                    <div class="progress progress">
                      <div class="progress-bar progress-bar-primary" style="width: <?php echo net_wlan0_Traffic() ['wlan0_percentage_tx']; ?>%"><?php echo net_wlan0_Traffic() ['wlan0_percentage_tx']; ?>%</div>
                    </div>
					<?php echo 'sent: ' . net_wlan0_Traffic() ['wlan0_tx_bytes'] . ' | packets: ' . net_wlan0_Traffic() ['wlan0_tx_packets'] . ' | total RX+TX: ' .  net_wlan0_Traffic() ['wlan0_total']; ?>
                  </td>
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