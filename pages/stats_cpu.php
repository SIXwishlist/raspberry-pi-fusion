<?php
include_once '../lib/functions.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pi Fusion | Charts CPU</title>
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

		<li class="active treeview">
          <a href="#">
            <i class="fa fa-area-chart"></i> <span>Statistics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../pages/stats_overview.php"><i class="fa fa-area-chart"></i> General Overview</a></li>
			<li class="active"><a href="../pages/stats_cpu.php"><i class="fa fa-area-chart"></i> CPU</a></li>
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
      <h1>CPU Statistic Information <small>Charts</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
	
	<div class="row">
	
		<div class="col-md-12">
		   <!-- LINE CHART -->
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">CPU load average %</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart1" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		</div>
    <!-- /.row -->
		
		<div class="row">
		
		<div class="col-md-12">
		   <!-- LINE CHART -->
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">CPU load %</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart2" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		
		</div>
    <!-- /.row -->
	
	<div class="row">
		
		<div class="col-md-12">
		   <!-- LINE CHART -->
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">CPU temperature</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart3" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
        <!-- /.col -->
		
		</div>
    <!-- /.row -->
		
		<div class="row">
	
		<div class="col-md-12">
		   <!-- LINE CHART -->
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">CPU frequency MHz</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart4" style="height:250px"></canvas>
              </div>
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
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
  $(function () {

   var lineChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0,
      //Boolean - Whether to show a dot for each point
      pointDot: true,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: false,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true	  
    };

    // 1 cpu load average
	
	var lineChartData1 = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Load Average 1 min",
          fillColor: "#01A9DB",
          strokeColor: "#01A9DB",
          pointColor: "#01A9DB",
          pointStrokeColor: "#01A9DB",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#01A9DB",
          data: [100, 33, 70, 31, 16, 95, 10]
        },
		{
          label: "Load Average 5 min",
          fillColor: "#0000FF",
          strokeColor: "#0000FF",
          pointColor: "#0000FF",
          pointStrokeColor: "#0000FF",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#0000FF",
          data: [90, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "Load Average 15 min",
          fillColor: "#5F04B4",
          strokeColor: "#5F04B4",
          pointColor: "#5F04B4",
          pointStrokeColor: "#5F04B4",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#5F04B4",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };
	
    var lineChartCanvas1 = $("#lineChart1").get(0).getContext("2d");
    var lineChart1 = new Chart(lineChartCanvas1);
	lineChart1.Line(lineChartData1, lineChartOptions);
	
	// 2 cpu load
	
	var lineChartData2 = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "CPU Load %",
          fillColor: "#FF8000",
          strokeColor: "#FF8000",
          pointColor: "#FF8000",
          pointStrokeColor: "#FF8000",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#FF8000",
          data: [100, 33, 70, 31, 16, 95, 10]
        }
      ]
    };

	var lineChartCanvas2 = $("#lineChart2").get(0).getContext("2d");
    var lineChart2 = new Chart(lineChartCanvas2);
	lineChart2.Line(lineChartData2, lineChartOptions);
	
	// 3 cpu temperature
	
	var lineChartData3 = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "CPU temperature",
          fillColor: "#B40404",
          strokeColor: "#B40404",
          pointColor: "#B40404",
          pointStrokeColor: "#B40404",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#B40404",
          data: [40, 33.25, 36.5, 31, 42.5, 65, 35.25]
        }
      ]
    };

	var lineChartCanvas3 = $("#lineChart3").get(0).getContext("2d");
    var lineChart3 = new Chart(lineChartCanvas3);
	lineChart3.Line(lineChartData3, lineChartOptions);
	
	// 4 CPU frequency
	
	var lineChartData4 = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Frequency MHz",
          fillColor: "#3ADF00",
          strokeColor: "#3ADF00",
          pointColor: "#3ADF00",
          pointStrokeColor: "#3ADF00",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#3ADF00",
          data: [900, 800, 900, 900, 600, 900, 600]
        }
      ]
    };
	
    var lineChartCanvas4 = $("#lineChart4").get(0).getContext("2d");
    var lineChart4 = new Chart(lineChartCanvas4);
	lineChart4.Line(lineChartData4, lineChartOptions);
	
	// 5 Storage usage
	
	var lineChartData5 = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "root MB",
          fillColor: "#01A9DB",
          strokeColor: "#01A9DB",
          pointColor: "#01A9DB",
          pointStrokeColor: "#01A9DB",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#01A9DB",
          data: [80, 74, 20, 23, 31, 29, 41]
        },
		{
          label: "boot MB",
          fillColor: "#086A87",
          strokeColor: "#086A87",
          pointColor: "#086A87",
          pointStrokeColor: "#086A87",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#086A87",
          data: [20, 21, 20, 19, 21, 19, 18]
        }
      ]
    };
	
    var lineChartCanvas5 = $("#lineChart5").get(0).getContext("2d");
    var lineChart5 = new Chart(lineChartCanvas5);
	lineChart5.Line(lineChartData5, lineChartOptions);
	
	// 6 system processes
	
	var lineChartData6 = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "Processes",
          fillColor: "#8A2908",
          strokeColor: "#8A2908",
          pointColor: "#8A2908",
          pointStrokeColor: "#8A2908",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#8A2908",
          data: [136, 133, 121, 131, 142, 115, 125]
        }
      ]
    };

	var lineChartCanvas6 = $("#lineChart6").get(0).getContext("2d");
    var lineChart6 = new Chart(lineChartCanvas6);
	lineChart6.Line(lineChartData6, lineChartOptions);
	
	// 7 Storage usage
	
	var lineChartData7 = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "received MB",
          fillColor: "#0000FF",
          strokeColor: "#0000FF",
          pointColor: "#0000FF",
          pointStrokeColor: "#0000FF",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#0000FF",
          data: [25800, 22745, 20220, 11531, 9316, 8295, 7410]
        },
		{
          label: "sent MB",
          fillColor: "#B40404",
          strokeColor: "#B40404",
          pointColor: "#B40404",
          pointStrokeColor: "#B40404",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#B40404",
          data: [11120, 9821, 10920, 19000, 21000, 13419, 13438]
        }
      ]
    };
	
	var lineChartCanvas7 = $("#lineChart7").get(0).getContext("2d");
    var lineChart7 = new Chart(lineChartCanvas7);
	lineChart7.Line(lineChartData7, lineChartOptions);
	
	// 8 Storage usage
	
	var lineChartData8 = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "received MB",
          fillColor: "#0000FF",
          strokeColor: "#0000FF",
          pointColor: "#0000FF",
          pointStrokeColor: "#0000FF",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#0000FF",
          data: [25800, 22745, 20220, 11531, 9316, 8295, 7410]
        },
		{
          label: "sent MB",
          fillColor: "#B40404",
          strokeColor: "#B40404",
          pointColor: "#B40404",
          pointStrokeColor: "#B40404",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#B40404",
          data: [11120, 9821, 10920, 19000, 21000, 13419, 13438]
        }
      ]
    };
	
	var lineChartCanvas8 = $("#lineChart8").get(0).getContext("2d");
    var lineChart8 = new Chart(lineChartCanvas8);
	lineChart8.Line(lineChartData8, lineChartOptions);
	
	// 9 Storage usage
	
	var lineChartData9 = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "received MB",
          fillColor: "#0000FF",
          strokeColor: "#0000FF",
          pointColor: "#0000FF",
          pointStrokeColor: "#0000FF",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#0000FF",
          data: [25800, 22745, 20220, 11531, 9316, 8295, 7410]
        },
		{
          label: "sent MB",
          fillColor: "#B40404",
          strokeColor: "#B40404",
          pointColor: "#B40404",
          pointStrokeColor: "#B40404",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "#B40404",
          data: [11120, 9821, 10920, 19000, 21000, 13419, 13438]
        }
      ]
    };
	
	var lineChartCanvas9 = $("#lineChart9").get(0).getContext("2d");
    var lineChart9 = new Chart(lineChartCanvas9);
	lineChart9.Line(lineChartData9, lineChartOptions);

  });
</script>
</body>
</html>