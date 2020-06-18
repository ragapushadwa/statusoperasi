<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if ($_SESSION['level']=="User") {
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
    <title>Dashboard</title>

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
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        

        <!-- MENU SIDEBAR-->
         <?php include_once('includes/sidebar-visitor.php');?>
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
                    <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Status</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="status"  value="" readonly class="status" >
                                                    
                                                </div>

                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Daya</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="daya"   value="" readonly class="daya">
                                                    
                                                </div>
                                            
 <?php
//todays visitors
 $query=mysqli_query($con,"select ID from tblvisitor where date(EnterDate)=CURDATE();");
$count_today_visitors=mysqli_num_rows($query);
 ?>                       


                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $count_today_visitors;?></h2>
                                                <span>Today's  Visitors</span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
 <?php
//Yesterdays visitors
 $query1=mysqli_query($con,"select ID from tblvisitor where date(EnterDate)=CURDATE()-1;");
$count_yesterday_visitors=mysqli_num_rows($query1);
 ?>                       


                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                     <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $count_yesterday_visitors?></h2>
                                                <span>Yesterday   Visitors</span>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>

 <?php
//Last Sevendays visitors
 $query2=mysqli_query($con,"select ID from tblvisitor where date(EnterDate)>=(DATE(NOW()) - INTERVAL 7 DAY);");
$count_lastsevendays_visitors=mysqli_num_rows($query2);
 ?>                       


                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $count_lastsevendays_visitors?></h2>
                                                <span>Last 7 Days Visitors</span>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
    <?php
//Total Visitors visitors
 $query3=mysqli_query($con,"select ID from tblvisitor");
$count_total_visitors=mysqli_num_rows($query3);
 ?>                       




                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $count_total_visitors?></h2>
                                                <span>Total Visitors  Till Date</span>
                                            </div>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class= "gambar">
						<img src="images/icon/tampakatas.jpeg" style="width:auto ;height:450px;"/><img src="images/icon/nomor.png" style="width:auto ;height:300px;"/>
                        
                        </div>
                        <div class = "row m-t-25"> 
						<div class="col-sm-6 col-lg-3" id="gaugeArea" style= "display:table-cell"></div>
						<div class= 'isitabel'></div>
						
						
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
    <script src="vendor/treeview/bootstrap-treeview.min.js"> </script>
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
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    </script>
    

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script>
$(".has-submenu ul").hide();
$(".has-submenu > a").click(function() {
  $(this).next("ul").toggle();
});
</script>

	<script>
	let gauge = document.querySelector('#gaugeArea')

// Properties of the gauge
  let gaugeOptions = {
	    hasNeedle: true,
	    needleColor: 'black',
      arcColors: ['rgb(61, 204, 91)', 'rgb(239, 214, 19)', 'rgb(255, 84, 84)'],
      arcDelimiters: [33.3, 66.6],
      arcPadding: 6,
      arcPaddingColor: 'none',
      arcLabels: ['1.25', '2.5'],
      arcLabelFontSize: false,
      //arcOverEffect: false,
      // label options
      rangeLabel: ['0', '3.78'],
      centralLabel: 'GAM1',
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
	  GaugeChart.gaugeChart(gauge, 300, gaugeOptions).updateNeedle(coba[0]["GAM1"]);
	  //GaugeChart.gaugeChart(gauge1, 300, gaugeOptions).updateNeedle(coba[0]["GAM2"]);
	  //GaugeChart.gaugeChart(gauge2, 300, gaugeOptions).updateNeedle(coba[0]["GAM3"]);
	  //GaugeChart.gaugeChart(gauge3, 300, gaugeOptions).updateNeedle(coba[0]["GAM4"]);
	  //GaugeChart.gaugeChart(gauge4, 300, gaugeOptions).updateNeedle(coba[0]["GAM5"]);
	  //GaugeChart.gaugeChart(gauge5, 300, gaugeOptions).updateNeedle(coba[0]["GAM6"]);
		}
       // $('.isitabel').html('<tr><th class="table_titles">No</th><th class="table_titles">Time</th><th class="table_titles">GAM1</th><th class="table_titles">GAM2</th><th class="table_titles">GAM3</th><th class="table_titles">GAM4</th><th class="table_titles">GAM5</th><th class="table_titles">GAM6</th></tr>'+nilai);
      
	  
	  setTimeout(function() {autotable()}, 1000);
	  setTimeout(function() {tabelotomatis()}, 1000);
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

var daya = [];
var status="";

function tabelotomatis(){

fetch("statusbkojsonlimit.php")
.then((res) =>res.json())
.then((tabel)=>{
	for (i=0;i<(tabel.length-1);i++){
	
	daya=tabel[i]['Daya'];
    status=tabel[i]['Status']

    if (parseInt(daya)>109)
{
    document.querySelector("#daya").style.color = 'red';
}
else {
    document.querySelector("#daya").style.color = '#666';
};


document.querySelector("#daya").value=daya+" "+"kW";
document.querySelector("#status").value=status;




}
});


setTimeout(function() {tabelotomatis()},1000);

}


</script>		   

</body>

</html>
<!-- end document-->
<?php } ?>