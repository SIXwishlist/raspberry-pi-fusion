<?php
include_once 'lib/functions.php';
$configArray = read_Settings();
#error_reporting(E_ALL);
#ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pi Fusion | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Refresh -->
  <meta HTTP-EQUIV=Refresh CONTENT='<?php echo $configArray ['page_reload_dashboard']; ?>'>
  
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="plugins/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="pages/includes/favicon.ico" />
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PiF</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pi Fusion</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	  <div class="navbar-custom-menu">
	    <ul class="nav navbar-nav navbar-right">
        <li><a title="Refresh page" href="javascript:location.reload(true);"><i class="fa fa-refresh"></i></a></li>
		<li><a href="pages/tools_terminal.php">Terminal</a></li>
		<li><a href="#">GPIO</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Reboot</a></li>
			<li><a href="#">Shutdown</a></li>
            <li class="divider"></li>
            <li><a href="#">Clean Memory</a></li>
            <li><a href="#">Clean Storage</a></li>
			<li class="divider"></li>
            <li><a href="#">System Upgrade</a></li>
			<li><a href="#">System Dist-Upgrade</a></li>
			<li><a href="#">Firmware Upgrade</a></li>
          </ul>
		<li><a title="Settings" href="pages/pif_settings.php"><i class="fa fa-gear"></i></a></li>
		<li><a title="LOGOUT" href="#"><i class="fa fa-power-off"></i></a></li>
		<li>&nbsp; &nbsp; &nbsp;</li>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  
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
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard Overview</a></li>
            <li><a href="pages/rpi_status.php"><i class="fa fa-bar-chart"></i> Status Information</a></li>
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
				<li><a href="pages/rpi_soc.php"><i class="fa fa-microchip"></i> Board & SoC</a></li>
				<li><a href="pages/rpi_cpu.php"><i class="fa fa-microchip"></i> CPU</a></li>
				<li><a href="pages/rpi_memory.php"><i class="fa fa-microchip"></i> Memory</a></li>
				<li><a href="pages/rpi_network.php"><i class="fa fa-sitemap"></i> Network</a></li>
				<li><a href="pages/rpi_storage.php"><i class="fa fa-hdd-o"></i> Storage</a></li>				
              </ul>
            </li>
			
			<li>
              <a href="#"><i class="fa fa-exchange"></i> Interfaces
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="pages/devices_av.php"><i class="fa fa-exchange"></i> Audio / Video</a></li>
				<li><a href="pages/rpi_gpio_status.php"><i class="fa fa-exchange"></i> GPIO Status</a></li>
				<li><a href="pages/rpi_memory.php"><i class="fa fa-exchange"></i> USB Devices</a></li>					    
              </ul>
            </li>
			
			<li>
              <a href="#"><i class="fa fa-server"></i> Operating System
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="pages/system_os.php"><i class="fa fa-server"></i> General Information</a></li>
				<li><a href="pages/system_modules.php"><i class="fa fa-server"></i> Kernel Modules</a></li>
				<li><a href="pages/system_processes.php"><i class="fa fa-server"></i> Running Processes</a></li>
				<li><a href="pages/system_services.php"><i class="fa fa-server"></i> Running Services</a></li>
				<li><a href="pages/system_packages.php"><i class="fa fa-server"></i> Software Packages</a></li>
				<li><a href="pages/system_users.php"><i class="fa fa-server"></i> Users & Groups</a></li>			
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
            <li><a href="pages/stats_overview.php"><i class="fa fa-area-chart"></i> General Overview</a></li>
			<li><a href="pages/stats_cpu.php"><i class="fa fa-area-chart"></i> CPU</a></li>
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
			<li><a href="pages/tools_phpinfo.php"><i class="fa  fa-info"></i> PHP Info</a></li>
			<li><a href="pages/tools_pla.php"><i class="fa fa-database"></i> PHP Lite Admin</a></li>
			<li><a href="pages/tools_terminal.php"><i class="fa fa-terminal"></i> Terminal</a></li>
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
				<li><a href="pages/docs_gpio_func.php"><i class="fa fa-book"></i> Functions Overview</a></li>
				<li><a href="pages/docs_gpio_headers.php"><i class="fa fa-book"></i> Headers RPi & Zero</a></li>		
				<li><a href="pages/docs_gpio_headers_cm.php"><i class="fa fa-book"></i> Headers CM & I/O Board</a></li>				
              </ul>
            </li>
			<li><a href="pages/docs_board_revs.php"><i class="fa fa-book"></i> Board Revisions</a></li>
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
            <li><a href="pages/pif_credits.php"><i class="fa fa-thumbs-up"></i> Credits</a></li>
			<li><a href="#"><i class="fa fa-money"></i> Donations</a></li>
			<li><a target="_blank" href="https://electrodrome.net/forum/rpi-projekt-pi-fusion"><i class="fa fa-question"></i> Forum / Help</a></li>
			<li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
			<li><a href="pages/pif_settings.php"><i class="fa fa-gear"></i> Settings</a></li>
			<li><a target="_blank" href="https://github.com/ElectroDrome/raspberry-pi-fusion"><i class="fa fa-github"></i> Sourcecode (Github)</a></li>
          </ul>
        </li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Overview. Page auto reload every <?php echo $configArray ['page_reload_dashboard']; ?> seconds.</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
		
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo sys_Runtime(); ?></h3>
              <p>Start: <?php echo sys_Rundate(); ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-clock"></i>
            </div>
            <a href="pages/rpi_soc.php" class="small-box-footer">More System Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo cpu_Load_Average() ['load1'] . '|' . cpu_Load_Average() ['load5'] . '|' . cpu_Load_Average() ['load15']; ?></h3>
              <p>Load Average %: 1m | 5m | 15m</p>
            </div>
            <div class="icon">
              <i class="ion ion-speedometer"></i>
            </div>
            <a href="pages/rpi_cpu.php" class="small-box-footer">More CPU Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo soc_CPU_Clock_Freq() ['current']; ?> MHz</h3>
              <p>CPU Clock Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-speedometer"></i>
            </div>
            <a href="pages/rpi_cpu.php" class="small-box-footer">More CPU Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo soc_CPU_Temperature() ['degrees_c']; ?></h3>
              <p>SoC Temperature</p>
            </div>
            <div class="icon">
              <i class="ion ion-thermometer"></i>
            </div>
            <a href="pages/rpi_soc.php" class="small-box-footer">More SoC Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
		
      </div>
      <!-- /.row -->
	  
	  
	  <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo ram_Memory_Usage() ['percentage']; ?><sup style="font-size: 20px">%</sup></h3>
              <p>RAM Usage</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="pages/rpi_memory.php" class="small-box-footer">More Memory Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-light-blue">
            <div class="inner">
              <h3><?php echo storage_Usage() [0]['percentage']; ?><sup style="font-size: 20px">%</sup></h3>
              <p>Storage Usage (root)</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="pages/rpi_storage.php" class="small-box-footer">More Storage Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3><?php echo net_wlan0_Traffic() ['wlan0_total']; ?></h3>
              <p>WiFi (wlan0): Traffic total</p>
            </div>
            <div class="icon">
              <i class="ion ion-wifi"></i>
            </div>
            <a href="pages/rpi_network.php" class="small-box-footer">More Network Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3><?php echo net_eth0_Traffic() ['eth0_total']; ?></h3>

              <p>LAN (eth0): Traffic total</p>
            </div>
            <div class="icon">
              <i class="ion ion-connection-bars"></i>
            </div>
            <a href="pages/rpi_network.php" class="small-box-footer">More Network Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
		
      </div>
      <!-- /.row -->

	  <div class="row">
	  
	  <div class="col-md-6">
 	      <div class="box box-solid box-default">
            <div class="box-header">
              <h3 class="box-title">Connected users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="connected_users" class="table table-bordered">
                <thead>
                <tr>
                  <th>User</th>
				  <th>Port</th>
                  <th>Date</th>
				  <th>Time</th>
				  <th>IP</th>
				  <th>DNS</th>
                </tr>
                </thead>
                <tbody>
				
				<tr>
				<?php 
				    $usersonline = sys_Users_Connected();
					$max = sizeof($usersonline);
					if ($max > 0) {  // users connected
					
						for ($i=0; $i<$max; $i++) {
				?>	
						<td><?php echo $usersonline[$i]['user']; ?></td>
						<td><?php echo $usersonline[$i]['port']; ?></td>
						<td><?php echo $usersonline[$i]['date']; ?></td>
						<td><?php echo $usersonline[$i]['time']; ?></td>
						<td><?php echo $usersonline[$i]['ip']; ?></td>
						<td><?php echo $usersonline[$i]['dns']; ?></td>
                </tr>
				<?php 
						}
					}
					else {  // no user connected
				?>
						<td><?php echo "None"; ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				<?php
					}
				?> 
				
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
  
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version </b> <?php echo (file_get_contents('VERSION')); ?>
    </div>
    <strong>Pi Fusion</strong> &copy; by <a target="_blank" href="https://electrodrome.net">Andreas Potthoff</a> and <a href="pages/pif_credits.php">contributors</a> - 2016-2017. Pi Fusion is licensed under GPL v2.0. Raspberry Pi is a trademark of the <a target="_blank" href="https://www.raspberrypi.org/">Raspberry Pi Foundation</a>.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Datatables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#connected_users').DataTable({
	  "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>