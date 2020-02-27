<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if ($_SESSION['level']=="Visitor") {
  header('location:logout.php');
  } else{



  ?>

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
    <title>GAM Report</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/treeview/bootstrap-treeview.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
 <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
	<link href= " https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet">
    <link href ="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" type="text/css" rel="stylesheet">
	

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
      <?php include_once('includes/sidebar.php');?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
      
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    
<h4 class="m-t-0 header-title">BKO Live Report</h4>

                                    <?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];

?>
<?php
$ret=mysqli_query($con,"select *from data where date(Time) between '$fdate' and '$tdate'");
$cnt=1;
echo '<script>',

	'var lists=[';
while ($row=mysqli_fetch_array($ret)) {
echo "{";
    echo '"No":' . $row['ID'] . ',';
    echo '"Time":"' . $row['Time'] . '",';
    echo '"GAM1":' . $row['GAM1'] . ',';
	echo '"GAM2":' . $row['GAM2'] . ',';
	echo '"GAM3":' . $row['GAM3'] . ',';
	echo '"GAM4":' . $row['GAM4'] . ',';
	echo '"GAM5":' . $row['GAM5'] . ',';
	
	echo '"GAM6":' . $row['GAM6']  ;
    echo "},";
$cnt=$cnt+1;}
echo "{}];",
'</script>';


?>
<h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<hr />
  
                                      <table id="gamtabel" class="display" style="width:100%">
                                         <thead>
                                        <tr>
                                            <tr>
                  <th>ID</th>
            
                  <th>Parameter Operasi</th>
              <th>Batas Keselamatan</th>
			  <th>Setting Sistem Keselamatan</th>
			  <th>Kondisi Batas Operasi</th>
			  <th>Nilai Aktual</th>
			 
              
			  
                   
                </tr>
                                        </tr>
                                        </thead>
										<tbody>
                                       <?php
$ret=mysqli_query($con,"select *from data where date(Time) between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  
                  <td><?php  echo $row['GAM1'];?></td>
				  <td><?php  echo $row['GAM2'];?></td>
				  <td><?php  echo $row['GAM3'];?></td>
				  <td><?php  echo $row['GAM4'];?></td>
				  <td><?php  echo $row['GAM5'];?></td>
				  <td><?php  echo $row['GAM6'];?></td>
				  <td><?php  echo $row['Time'];?></td>
             
                
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
<tr>
<th>1</th>
            
            <th>Periode Minimum</th>
        <th>< 5 Detik</th>
        <th>≤7 Detik</th>
        <th>>10 Detik</th>
        <th class= "periode"></th>
</tr>
<tr>
<th>2</th>
            
            <th>Daya</th>
        <th>≥115Kw</th>
        <th>≥110kW</th>
        <th>≤105kW </th>
        <th class= "daya"></th>
</tr>
<tr>
<th>3</th>
            
            <th>Tegangan Tinggi Detektor FC</th>
        <th></th>
        <th></th>
        <th>≥300 V</th>
        <th class= "fc"></th>
</tr>
<tr>
<th>4</th>
            
            <th>Tegangan Tinggi Detektor CIC </th>
        <th></th>
        <th></th>
        <th>+300 s/d 530 V</th>
        <th class= "cic"></th>
</tr>
<tr>
<th>5</th>
            
            <th>Suhu Bahan Bakar Maksimum</th>
        <th></th>
        <th></th>
        <th>≤700℃</th>
        <th class= "suhubahanbakar"></th>
</tr>
<tr>
<th>6</th>
            
            <th>Laju Alir Primer</th>
        <th></th>
        <th></th>
        <th>≥138 lpm</th>
        <th class= "periode"></th>
</tr>
<tr>
<th>7</th>
            
            <th>Laju Alir Sekunder Tube</th>
        <th></th>
        <th></th>
        <th>≥820 lpm</th>
        <th class= "periode"></th>
</tr>
<tr>
<th>8</th>
            
            <th>Laju Alir Sekunder Plat</th>
        <th></th>
        <th></th>
        <th>≥520 lpm</th>
        <th class= "periode"></th>
</tr>
<tr>
<th>9</th>
            
<th>Laju Paparan Thermal Column</th>
        <th></th>
        <th></th>
        <th>≤2,5mR</th>
        <th class= "GAM5"></th>
</tr>
<tr>
<th>10</th>
            
<th>Laju Paparan Dek Reaktor</th>
        <th></th>
        <th></th>
        <th>≤10mR</th>
        <th class= "GAM5"></th>
</tr>
<tr>
<th>11</th>
            
<th>Laju Paparan Permukaan Air Tangki</th>
        <th></th>
        <th></th>
        <th>≤100mR</th>
        <th class= "GAM3"></th>
</tr>
<tr>
<th>12</th>
            
<th>Laju Paparan Demineralizer</th>
        <th></th>
        <th></th>
        <th>≤25mR/jam</th>
        <th class= "GAM4"></th>
</tr>
<tr>
<th>13</th>
            
            <th>Laju Paparan Thermal Column</th>
        <th></th>
        <th></th>
        <th>≤10mR/jam</th>
        <th class= "GAM5"></th>
</tr>
<tr>
<th>14</th>
            
            <th>Laju Paparan Perangkat Subkritik</th>
        <th></th>
        <th></th>
        <th>≤2,5mR/jam</th>
        <th class= "GAM6"></th>
</tr>
<tr>
<th>15</th>
            
            <th>Laju Paparan Ruang Kontrol</th>
        <th></th>
        <th></th>
        <th>≤2,5mR/jam</th>
        <th class= "GAM7"></th>
</tr>
</tbody>
<tfoot>
<tr>
<th>16</th>
            
            <th>Parameter Operasi</th>
        <th>Batas Keselamatan</th>
        <th>Setting Sistem Keselamatan</th>
        <th>Kondisi Batas Operasi</th>
        <th>Nilai Aktual</th>
</tr>
</tfoot>
                                    </table>
                                </div>
                            </div>
                          
                        </div>
						
						<div class ="col-lg7 col-xl-8">
						<div class = "card-body">
						<div class = "chart-area">
						
						<canvas id="GamChart" width="670" height="500" style="display: block; width: 564px; height: 320px;"></canvas>


								</canvas>
								</div>
								
								</div>
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
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="vendor/chartjs/chart.js@2.8.0.js"></script>
    <script src="vendor/select2/select2.min.js"> </script>
    <script src="vendor/treeview/bootstrap-treeview.min.js"> </script>

	<script src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>
<script src=" https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js "></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.20/sorting/numeric-comma.js "></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


	
   
	
    <!-- Main JS-->
    <script src="js/main.js"></script>
	<script type ='text/javascript' ></script>
    <script>
$(".has-submenu ul").hide();
$(".has-submenu > a").click(function() {
  $(this).next("ul").toggle();
});
</script>
<script>
var lineChartData = [{label: "Series 1",values: []}];
var lineChartData1 = [{label: "Series 2",values: []}];
var lineChartData2 = [{label: "Series 3",values: []}];
var lineChartData3 = [{label: "Series 4",values: []}];
var lineChartData4 = [{label: "Series 5",values: []}];
var lineChartData5 = [{label: "Series 6",values: []}];

for (i=0;i<(lists.length-1);i++){
	
lineChartData[0]['values'].push  ('{time: '+lists[0]['Time']+', y: '+lists[0]['GAM1']+'}');
lineChartData1[0]['values'].push  ('{time: '+lists[0]['Time']+', y: '+lists[0]['GAM2']+'}');
lineChartData2[0]['values'].push  ('{time: '+lists[0]['Time']+', y: '+lists[0]['GAM3']+'}');
lineChartData3[0]['values'].push  ('{time: '+lists[0]['Time']+', y: '+lists[0]['GAM4']+'}');
lineChartData4[0]['values'].push  ('{time: '+lists[0]['Time']+', y: '+lists[0]['GAM5']+'}');
lineChartData5[0]['values'].push  ('{time: '+lists[0]['Time']+', y: '+lists[0]['GAM6']+'}');

}
// document.querySelector(".daya").innerHtml=array

console.log (lineChartData);
</script>
<script type ='text/javascript'>
var GAM1 = [[],[]];
var GAM2 = [[],[]];
var GAM3 = [[],[]];
var GAM4 = [[],[]];
var GAM5 = [[],[]];
var GAM6 = [[],[]];

for (i=0;i<(lists.length-1);i++){
	console.log(lists);
	
GAM1[0].push  (lists[i]['Time']);
GAM1[1].push  (lists[i]['GAM1']);
GAM2[0].push  (lists[i]['Time']);
GAM2[1].push  (lists[i]['GAM2']);
GAM3[0].push  (lists[i]['Time']);
GAM3[1].push  (lists[i]['GAM3']);
GAM4[0].push  (lists[i]['Time']);
GAM4[1].push  (lists[i]['GAM4']);
GAM5[0].push  (lists[i]['Time']);
GAM5[1].push  (lists[i]['GAM5']);
GAM6[0].push  (lists[i]['Time']);
GAM6[1].push  (lists[i]['GAM6']);



}

var ctx = document.getElementById('GamChart').getContext('2d');
var mixedChart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
			 backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgb(26, 188, 156)',
            label: 'GAM1',
            data: GAM1[1]
			
        }, 
		{
			 backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgb(241, 196, 15)',
            label: 'GAM2',
            data: GAM2[1],
			

            // Changes this dataset to become a line
            type: 'line'
		},
				{
			 backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgb(231, 76, 60)',
            label: 'GAM3',
            data: GAM3[1],
			

            // Changes this dataset to become a line
            type: 'line'
		},
				{
			 backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgb(142, 68, 173)',

            label: 'GAM4',
            data: GAM4[1],
			
            // Changes this dataset to become a line
            type: 'line'
		},
				{
				 backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgb(52, 152, 219)',

            label: 'GAM5',
            data: GAM5[1],
		
            // Changes this dataset to become a line
            type: 'line'
		},
	
		
		{
			 backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgb(255, 99, 132)',
            label: 'GAM6',
            data: GAM6[1],
			

            // Changes this dataset to become a line
            type: 'line'
        }],
        labels: GAM1[0]
    },
    options:{}
});


</script>
</script>
<script>
$(document).ready(function() {
    $('#gamtabel').DataTable( {
		"lengthMenu": [[0,10,25,50,-1], [0,10,25,50,"All"]],  
	
        dom: 'Bfrit',
		
        buttons: ['pageLength','excel', 'csv','copy','pdf' ]
		
		
		

    } );
	
} );
</script>

</body>

</html>
<?php }  ?>
