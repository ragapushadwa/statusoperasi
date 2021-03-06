<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if ($_SESSION['level']=="Visitor") {
	
  header('location:logout.php');
  
  } else{ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
	<link rel="icon" href="images/icon/logo-batan-png-8.png">

    <!-- Title Page-->
    <title>Realtime Chart</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	<link href="vendor/treeview/bootstrap-treeview.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	<script src="https://unpkg.com/gauge-chart@latest/dist/bundle.js"></script>
	<style>
		.label {
			display: inline-block;
			text-align: right;
			width: 90px;
		}
		.value {
			display: inline-block;
			text-align: left;
			width: 60px;
		}
		.control {
			width: 200px;
		}
	</style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        

        <!-- MENU SIDEBAR-->
         <?php include_once('includes/sidebar.php');?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
		
						
							
<div>
		<canvas id="myChart"></canvas>
	</div>
	<p>
		<button id="randomizeData" style="visibility:hidden" >Randomize Data</button>
		<button id="addDataset" style="visibility:hidden">Add Dataset</button>
		<button id="removeDataset" style="visibility:hidden">Remove Dataset</button>
		<button id="addData" style="visibility:hidden">Add Data</button>
	</p>
	<div>
		<span class="label">frameRate:</span>
		<span id="frameRateValue" class="value">30</span>
		<span><input type="range" min="1" max="60" step="1" value="30" id="frameRate" class="control"></span>
	</div>
	<div>
		<span class="label">delay:</span>
		<span id="delayValue" class="value">2000</span>
		<span><input type="range" min="0" max="5000" step="100" value="2000" id="delay" class="control"></span>
	</div>		
	<div>
		<span class="label">pause:</span>
		<span id="pauseValue" class="value">false</span>
		<span><input type="checkbox" id="pause" class="control"></span>
	</div>	
	<div style="visibility:hidden">
		<span class="label">duration:</span>
		<span id="durationValue" class="value">20000</span>
		<span><input type="range" min="1000" max="60000" step="100" value="20000" id="duration" class="control"></span>
	</div>
	<div style="visibility:hidden">
		<span class="label">ttl:</span>
		<span id="ttlValue" class="value">60000</span>
		<span><input type="range" min="1000" max="60000" step="100" value="60000" id="ttl" class="control"></span>
	</div>
	<div style="visibility:hidden">
		<span class="label">refresh:</span>
		<span id="refreshValue" class="value">2000</span>
		<span><input type="range" min="50" max="3000" step="50" value="2000" id="refresh" class="control"></span>
	</div>
						
				   
<?php include_once('includes/footer.php');?>
     
                    </div>
                </div>
            </div>
             
        </div>

    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="vendor/select2/select2.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-streaming@1.8.0"></script>
	<script src="vendor/treeview/bootstrap-treeview.min.js"> </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
	<script>
$(".has-submenu ul").hide();
$(".has-submenu > a").click(function() {
  $(this).next("ul").toggle();
});
</script>
	
	

<script type='text/javascript'>
var coba=new Array();
	   let waktu = "";
	let dataLajuAlir=0;
	let dataDaya=0;
	let dataSuhu=0;
    $(document).ready(function() {
      autotable();
    });
   
    function maketable(data){
        coba=JSON.parse(data);
        var nilai="";
        
	
	  for (i=0;i<(coba.length-1);i++){
	waktu=coba[i]['Time'];
			dataDaya=coba[i]['Daya'];
			dataLajuAlir=coba[i]['Laju Alir'];
			dataSuhu=coba[i]['Suhu Tangki'];

}
 
	  setTimeout(function() {autotable()},5000);
	
          }
    function autotable(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        maketable(this.responseText);
        }
      };
      xhttp.open("GET", "statusbkojsonlimit.php", true);
      xhttp.send();
    }
   

    </script>
	<script>
	var chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(201, 203, 207)'
};

function randomScalingFactor() {
	return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
}
function onRefresh(chart) {
	let meme = chart.config.data.datasets;
		meme[0].data.push({
			x: waktu,
			y: dataDaya
		});
		meme[1].data.push({
			x: waktu,
			y: dataLajuAlir
		});
		meme[2].data.push({
			x: waktu,
			y: dataSuhu
		});
		
		chart.update({
                                    preservation: true
                                });
		
	//chart.config.data.datasets.forEach(function(dataset) {
		//dataset.data.push({
		//	x: Date.now(),
			//y: randomScalingFactor()
		//});
	//});
}
		var isIE = navigator.userAgent.indexOf('MSIE') !== -1 || navigator.userAgent.indexOf('Trident') !== -1;

var color = Chart.helpers.color;
var config = {
	type: 'line',
	data: {
		datasets: [{
			label: 'Daya (Watt)',
			backgroundColor: color(chartColors.red).alpha(0.5).rgbString(),
			borderColor: chartColors.red,
			fill: false,
			cubicInterpolationMode: 'monotone',
			
			data: []
		}, {
			label: 'Laju Alir Primer (lpm)',
			backgroundColor: color(chartColors.orange).alpha(0.5).rgbString(),
			borderColor: chartColors.orange,
			fill: false,
			cubicInterpolationMode: 'monotone',
			data: []
		},
		{	label: 'Suhu Tangki ℃',
			backgroundColor: color(chartColors.blue).alpha(0.5).rgbString(),
			borderColor: chartColors.blue,
			fill: false,
			cubicInterpolationMode: 'monotone',
			data: []
		}]
	},
	options: {
		title: {
			display: true,
			text: 'Status Operasi'
		},
		scales: {
			xAxes: [{
				type: 'realtime',
				realtime: {
					duration: 20000,
					refresh: 5000,
					delay: 2000,
					onRefresh: onRefresh
					
				}
				
			}],
			yAxes: [{
				scaleLabel: {
					display: true,
					labelString: 'value'
				}
			}]
		},
		tooltips: {
			mode: 'nearest',
			intersect: false
		},
		hover: {
			mode: 'nearest',
			intersect: false
		}
		
	}
};

window.onload = function() {
	var ctx = document.getElementById('myChart').getContext('2d');
	window.myChart = new Chart(ctx, config);
};

document.getElementById('randomizeData').addEventListener('click', function() {
	config.data.datasets.forEach(function(dataset) {
		dataset.data.forEach(function(dataObj) {
			dataObj.y = randomScalingFactor();
		});
	});

	window.myChart.update();
});

var colorNames = Object.keys(chartColors);
document.getElementById('addDataset').addEventListener('click', function() {
	var colorName = colorNames[config.data.datasets.length % colorNames.length];
	var newColor = chartColors[colorName];
	var newDataset = {
		label: 'Dataset ' + (config.data.datasets.length + 1),
		backgroundColor: color(newColor).alpha(0.5).rgbString(),
		borderColor: newColor,
		fill: false,
		lineTension: 0,
		data: []
	};

	config.data.datasets.push(newDataset);
	window.myChart.update();
});

document.getElementById('removeDataset').addEventListener('click', function() {
	config.data.datasets.pop();
	window.myChart.update();
});

document.getElementById('addData').addEventListener('click', function() {
	onRefresh(window.myChart);
	window.myChart.update();
});

document.getElementById('duration').addEventListener(isIE ? 'change' : 'input', function() {
	config.options.scales.xAxes[0].realtime.duration = +this.value;
	window.myChart.update({duration: 0});
	document.getElementById('durationValue').innerHTML = this.value;
});

document.getElementById('ttl').addEventListener(isIE ? 'change' : 'input', function() {
	config.options.scales.xAxes[0].realtime.ttl = +this.value;
	window.myChart.update({duration: 0});
	document.getElementById('ttlValue').innerHTML = this.value;
});

document.getElementById('refresh').addEventListener(isIE ? 'change' : 'input', function() {
	config.options.scales.xAxes[0].realtime.refresh = +this.value;
	window.myChart.update({duration: 0});
	document.getElementById('refreshValue').innerHTML = this.value;
});

document.getElementById('delay').addEventListener(isIE ? 'change' : 'input', function() {
	config.options.scales.xAxes[0].realtime.delay = +this.value;
	window.myChart.update({duration: 0});
	document.getElementById('delayValue').innerHTML = this.value;
});

document.getElementById('frameRate').addEventListener(isIE ? 'change' : 'input', function() {
	config.options.plugins.streaming.frameRate = +this.value;
	window.myChart.update({duration: 0});
	document.getElementById('frameRateValue').innerHTML = this.value;
});

document.getElementById('pause').addEventListener('change', function() {
	config.options.scales.xAxes[0].realtime.pause = this.checked;
	window.myChart.update({duration: 0});
	document.getElementById('pauseValue').innerHTML = this.checked;
});
								
                   
				   
				   
				 
</script>

</body>

</html>
<!-- end document-->
<?php } ?>