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
		
						
						<div class="row">
						
								
						
					
						
						<canvas id="FluxChart"></canvas>

							
								<div class = "Row" style= "display:table">
			
						<div id="gaugeArea" style= "display:table-cell"></div>
						<div id="gaugeArea1" style= "display:table-cell"></div>
						<div id="gaugeArea2"style= "display:table-cell"></div>
						<div id="gaugeArea3"style= "display:table-cell"></div>
						<div id="gaugeArea4"style= "display:table-cell"></div>
						<div id="gaugeArea5"style= "display:table-cell"></div>
		</div>				
								</div>		
<div>
		<canvas id="myChart"></canvas>
	</div>
	<p>
		<button id="randomizeData">Randomize Data</button>
		<button id="addDataset">Add Dataset</button>
		<button id="removeDataset">Remove Dataset</button>
		<button id="addData">Add Data</button>
	</p>
	<div>
		<span class="label">duration:</span>
		<span id="durationValue" class="value">20000</span>
		<span><input type="range" min="1000" max="60000" step="100" value="20000" id="duration" class="control"></span>
	</div>
	<div>
		<span class="label">ttl:</span>
		<span id="ttlValue" class="value">60000</span>
		<span><input type="range" min="1000" max="60000" step="100" value="60000" id="ttl" class="control"></span>
	</div>
	<div>
		<span class="label">refresh:</span>
		<span id="refreshValue" class="value">1000</span>
		<span><input type="range" min="50" max="3000" step="50" value="1000" id="refresh" class="control"></span>
	</div>
	<div>
		<span class="label">delay:</span>
		<span id="delayValue" class="value">2000</span>
		<span><input type="range" min="0" max="5000" step="100" value="2000" id="delay" class="control"></span>
	</div>
	<div>
		<span class="label">frameRate:</span>
		<span id="frameRateValue" class="value">30</span>
		<span><input type="range" min="1" max="60" step="1" value="30" id="frameRate" class="control"></span>
	</div>
	<div>
		<span class="label">pause:</span>
		<span id="pauseValue" class="value">false</span>
		<span><input type="checkbox" id="pause" class="control"></span>
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
	<script>
	   $(document).ready(function() {
      ambiljson();
    });
    var baru=new Array();
	var dataFlux=[[],[]];
	var dataDaya=[[],[]];
	var dataSuhu=[[],[]];
	var charts;
    function grafik(data){
        baru=JSON.parse(data);
        var angka="";
        for (i=0;i<(baru.length-1);i++){
			dataFlux[0].push  (baru[i]['Time']);
dataFlux[1].push  (baru[i]['Flux']);
dataDaya[0].push  (baru[i]['Time']);
dataDaya[1].push  (baru[i]['Daya']);
dataSuhu[0].push  (baru[i]['Time']);
dataSuhu[1].push  (baru[i]['Suhu']);
         
		}
        
    
 	  
	  setTimeout(function() {ambiljson()}, 1000);
	  
    }
    function ambiljson(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        grafik(this.responseText);
        }
      };
      xhttp.open("GET", "statusoperasijsonlimit.php", true);
      xhttp.send();
    }
    </script>
	<script>
	let gauge = document.querySelector('#gaugeArea')
	let gauge1 = document.querySelector('#gaugeArea1')
	let gauge2 = document.querySelector('#gaugeArea2')
	let gauge3 = document.querySelector('#gaugeArea3')
	let gauge4 = document.querySelector('#gaugeArea4')
	let gauge5 = document.querySelector('#gaugeArea5')
	

// Properties of the gauge
  let gaugeOptions = {
	    hasNeedle: true,
	    needleColor: 'black',
      arcColors: ['rgb(61, 204, 91)', 'rgb(239, 214, 19)', 'rgb(255, 84, 84)'],
      arcDelimiters: [10, 60],
      arcPadding: 6,
      arcPaddingColor: 'none',
      arcLabels: ['35', '210', '315'],
      arcLabelFontSize: false,
      //arcOverEffect: false,
      // label options
      rangeLabel: ['0', '350'],
      centralLabel: 'GAM1',
      rangeLabelFontSize: false,
      labelsFont: 'Consolas',
	  needleUpdateSpeed: 0,
    }
  let gaugeOptions1 = {
	    hasNeedle: true,
	    needleColor: 'black',
      arcColors: ['rgb(61, 204, 91)', 'rgb(239, 214, 19)', 'rgb(255, 84, 84)'],
      arcDelimiters: [10, 60],
      arcPadding: 6,
      arcPaddingColor: 'none',
      arcLabels: ['35', '210', '315'],
      arcLabelFontSize: false,
      //arcOverEffect: false,
      // label options
      rangeLabel: ['0', '350'],
      centralLabel: 'GAM2',
      rangeLabelFontSize: false,
      labelsFont: 'Consolas',
	  needleUpdateSpeed: 0,
    }
	  let gaugeOptions2 = {
	    hasNeedle: true,
	    needleColor: 'black',
      arcColors: ['rgb(61, 204, 91)', 'rgb(239, 214, 19)', 'rgb(255, 84, 84)'],
      arcDelimiters: [10, 60],
      arcPadding: 6,
      arcPaddingColor: 'none',
      arcLabels: ['35', '210', '315'],
      arcLabelFontSize: false,
      //arcOverEffect: false,
      // label options
      rangeLabel: ['0', '350'],
      centralLabel: 'GAM3',
      rangeLabelFontSize: false,
      labelsFont: 'Consolas',
	  needleUpdateSpeed: 0,
    }
	  let gaugeOptions3 = {
	    hasNeedle: true,
	    needleColor: 'black',
      arcColors: ['rgb(61, 204, 91)', 'rgb(239, 214, 19)', 'rgb(255, 84, 84)'],
      arcDelimiters: [10, 60],
      arcPadding: 6,
      arcPaddingColor: 'none',
      arcLabels: ['35', '210', '315'],
      arcLabelFontSize: false,
      //arcOverEffect: false,
      // label options
      rangeLabel: ['0', '350'],
      centralLabel: 'GAM4',
      rangeLabelFontSize: false,
      labelsFont: 'Consolas',
	  needleUpdateSpeed: 0,
    }
	  let gaugeOptions4 = {
	    hasNeedle: true,
	    needleColor: 'black',
      arcColors: ['rgb(61, 204, 91)', 'rgb(239, 214, 19)', 'rgb(255, 84, 84)'],
      arcDelimiters: [10, 60],
      arcPadding: 6,
      arcPaddingColor: 'none',
      arcLabels: ['35', '210', '315'],
      arcLabelFontSize: false,
      //arcOverEffect: false,
      // label options
      rangeLabel: ['0', '350'],
      centralLabel: 'GAM5',
      rangeLabelFontSize: false,
      labelsFont: 'Consolas',
	  needleUpdateSpeed: 0,
    }
	  let gaugeOptions5 = {
	    hasNeedle: true,
	    needleColor: 'black',
      arcColors: ['rgb(61, 204, 91)', 'rgb(239, 214, 19)', 'rgb(255, 84, 84)'],
      arcDelimiters: [10, 60],
      arcPadding: 6,
      arcPaddingColor: 'none',
      arcLabels: ['35', '210', '315'],
      arcLabelFontSize: false,
      //arcOverEffect: false,
      // label options
      rangeLabel: ['0', '350'],
      centralLabel: 'GAM6',
      rangeLabelFontSize: false,
      labelsFont: 'Consolas',
	  needleUpdateSpeed: 0,
    }
// Drawing and updating the chart
GaugeChart.gaugeChart(gauge, 300, gaugeOptions).updateNeedle(70)
</script>
<script type='text/javascript'>
    $(document).ready(function() {
      autotable();
    });
    var coba=new Array();
    function maketable(data){
        coba=JSON.parse(data);
        var nilai="";
        for (i=0;i<(coba.length-1);i++){
          nilai=nilai+'<tr><th>'+(coba[i]["No"])+'</th><th>'+coba[i]["Time"]+'</th><th>'+coba[i]["GAM1"]+'</th>'+'</th><th>'+coba[i]["GAM2"]+'</th>'+'</th><th>'+coba[i]["GAM3"]+'</th>'+'</th><th>'+coba[i]["GAM4"]+'</th>'+'</th><th>'+coba[i]["GAM5"]+'</th>'+'</th><th>'+coba[i]["GAM6"]+'</th></tr>';
        document.getElementById('gaugeArea').innerHTML = '';
		document.getElementById('gaugeArea1').innerHTML = '';
		document.getElementById('gaugeArea2').innerHTML = '';
		document.getElementById('gaugeArea3').innerHTML = '';
		document.getElementById('gaugeArea4').innerHTML = '';
		document.getElementById('gaugeArea5').innerHTML = '';
		
	  GaugeChart.gaugeChart(gauge, 300, gaugeOptions).updateNeedle(coba[0]["GAM1"]);
	  GaugeChart.gaugeChart(gauge1, 300, gaugeOptions1).updateNeedle(coba[0]["GAM2"]);
	  GaugeChart.gaugeChart(gauge2, 300, gaugeOptions2).updateNeedle(coba[0]["GAM3"]);
	  GaugeChart.gaugeChart(gauge3, 300, gaugeOptions3).updateNeedle(coba[0]["GAM4"]);
	  GaugeChart.gaugeChart(gauge4, 300, gaugeOptions4).updateNeedle(coba[0]["GAM5"]);
	  GaugeChart.gaugeChart(gauge5, 300, gaugeOptions5).updateNeedle(coba[0]["GAM6"]);
		}
        $('.isitabel').html('<tr><th class="table_titles">No</th><th class="table_titles">Time</th><th class="table_titles">GAM1</th><th class="table_titles">GAM2</th><th class="table_titles">GAM3</th><th class="table_titles">GAM4</th><th class="table_titles">GAM5</th><th class="table_titles">GAM6</th></tr>'+nilai);
      
	  
	  setTimeout(function() {autotable()}, 1000);
	  
    }
    function autotable(){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        maketable(this.responseText);
        }
      };
      xhttp.open("GET", "json.php", true);
      xhttp.send();
    }
    </script>
	
									<script>								


var ctx = document.getElementById('FluxChart').getContext('2d');

var chart = new Chart(ctx, {

  type: 'line',

  data: {

    datasets: [{

      data: dataFlux[1]

    }, {

      data: dataDaya[1]

    }]

  },

  options: {

    scales: {

      xAxes: [{

        type: 'realtime'

      }]

    }

  }

});

								
                   </script>
				   
				   <script>
				   var isIE = navigator.userAgent.indexOf('MSIE') !== -1 || navigator.userAgent.indexOf('Trident') !== -1;

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
	chart.config.data.datasets.forEach(function(dataset) {
		dataset.data.push({
			x: Date.now(),
			y: randomScalingFactor()
		});
	});
}

var color = Chart.helpers.color;
var config = {
	type: 'line',
	data: {
		datasets: [{
			label: 'Dataset 1 (linear interpolation)',
			backgroundColor: color(chartColors.red).alpha(0.5).rgbString(),
			borderColor: chartColors.red,
			fill: false,
			lineTension: 0,
			borderDash: [8, 4],
			data: []
		}, {
			label: 'Dataset 2 (cubic interpolation)',
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
			text: 'Interactions sample'
		},
		scales: {
			xAxes: [{
				type: 'realtime',
				realtime: {
					duration: 20000,
					ttl: 60000,
					refresh: 1000,
					delay: 2000,
					pause: false,
					onRefresh: onRefresh
				}
			}],
			yAxes: [{
				type: 'linear',
				display: true,
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
		},
		plugins: {
			streaming: {
				frameRate: 30
			}
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