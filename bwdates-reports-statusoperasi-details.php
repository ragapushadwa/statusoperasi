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
    <title>Status Operasi Report</title>

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
                                    
<h4 class="m-t-0 header-title">Between Dates Reports</h4>

                                    <?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];

?>
<?php
$ret=mysqli_query($con,"select *from statusoperasi where date(reading_time) between '$fdate' and '$tdate'");
$cnt=1;
echo '<script>',

	'var lists=[';
while ($row=mysqli_fetch_array($ret)) {
echo "{";
    echo '"No":' . $row['id'] . ',';
    echo '"Time":"' . $row['reading_time'] . '",';
    echo '"Laju Alir":' . $row['Suhu'] . ',';
	echo '"Daya":' . $row['Daya'] . ',';

	echo '"Suhu":' . $row['Laju Alir']  ;
    echo "},";
$cnt=$cnt+1;}
echo "{}];",
'</script>';


?>


<h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<hr />
  
                                    <table id="statusoperasi" class="display" style="width:100%">
                                         <thead>
                                        <tr>
                                            
                  <th>ID</th>
            
                  
              
              <th>Daya</th>
              <th>Suhu</th>
              <th>Laju Alir</th>
			  <th>Waktu</th>
			  
                   
                
                                        </tr>
                                        </thead>
										 <tbody>
                                       
<?php
$ret=mysqli_query($con,"select *from statusoperasi where date(reading_time) between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
             
                <tr>
                  <td><?php echo $cnt;?></td>
            

                  
                <td><?php  echo $row['Daya'];?></td>
				<td><?php  echo $row['Suhu'];?></td>
                <td><?php  echo $row['Laju Alir'];?></td>
				<td><?php  echo $row['reading_time'];?></td>
                
                </tr>
				
                <?php 
				
$cnt=$cnt+1;
}
?>
</tbody>
<tfoot>
<tr>
<th>ID</th>

<th>Daya</th>
<th>Suhu</th>
<th>Laju Alir</th>
<th>Waktu</th>
</tr>
</tfoot>


 
 
                                    </table>
									
						
					
								</div>
											<div class ="col-lg7 col-xl-8">
						<div class = "card-body">
						<div class = "chart-area">
						
						<canvas id="myChart" width="670" height="500" style="display: block; width: 564px; height: 320px;"></canvas>


								</canvas>
								</div>
								
								</div>
								</div>
																			<div class ="col-lg7 col-xl-8">
						<div class = "card-body">
						<div class = "chart-area">
						
						<canvas id="myChart2" width="670" height="500" style="display: block; width: 564px; height: 320px;"></canvas>


								</canvas>
								</div>
								
								</div>
								</div>
								</div>
																		<div class ="col-lg7 col-xl-8">
						<div class = "card-body">
						<div class = "chart-area">
						
						<canvas id="myChart3" width="670" height="500" style="display: block; width: 564px; height: 320px;"></canvas>


								</canvas>
								</div>
								
								</div>
								</div>
									


</div>
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


	
   
	
    <!-- Main JS-->
    <script src="js/main.js"></script>
	<script type ='text/javascript' >
    <script>
$(".has-submenu ul").hide();
$(".has-submenu > a").click(function() {
  $(this).next("ul").toggle();
});
</script>
var lineChartData = [{label: "Series 1",values: []}];
var lineChartData1 = [{label: "Series 2",values: []}];
var lineChartData2 = [{label: "Series 3",values: []}];

for (i=0;i<(lists.length-1);i++){
	
lineChartData[0]['values'].push  ('{time: '+lists[0]['Time']+', y: '+lists[0]['Laju Alir']+'}');
lineChartData1[0]['values'].push  ('{time: '+lists[0]['Time']+', y: '+lists[0]['Suhu']+'}');
lineChartData2[0]['values'].push  ('{time: '+lists[0]['Time']+', y: '+lists[0]['Daya']+'}');
}


console.log (lineChartData);
</script>
	<script type ='text/javascript'>
var lists2 = [[],[]];
var lists3 = [[],[]];
var lists4 = [[],[]];
for (i=0;i<(lists.length-1);i++){
	console.log(lists);
	
lists2[0].push  (lists[i]['Time']);
lists2[1].push  (lists[i]['Laju Alir']);
lists3[0].push  (lists[i]['Time']);
lists3[1].push  (lists[i]['Daya']);
lists4[0].push  (lists[i]['Time']);
lists4[1].push  (lists[i]['Suhu']);


}

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx,{
    
    type: 'line',

    
    data: {
		
        labels: lists2[0],
        datasets: [{
            label: 'Flux',
            backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgb(255, 99, 132)',
            data: lists2[1],
        }]
    },

    // Configuration options go here
     options: {
        title: {
            display: true,
            text: 'Flux Chart'
        }
    }
});
var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx,{
    
    type: 'line',

    
    data: {
        labels: lists3[0],
        datasets: [{
            label: 'Daya',
            backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgb(255, 99, 132)',
            data: lists3[1]
        }]
    },

    // Configuration options go here
    options: {}
});
var ctx = document.getElementById('myChart3').getContext('2d');
var chart = new Chart(ctx,{
    
    type: 'line',

    
    data: {
        labels: lists4[0],
        datasets: [{
            label: 'Suhu',
            backgroundColor: 'rgba(0,0,0,0)',
            borderColor: 'rgb(255, 99, 132)',
            data: lists4[1]
        }]
    },

    // Configuration options go here
    options: {}
});

</script>


</body>
<script>
$(document).ready(function() {
    $('#statusoperasi').DataTable( {
		"lengthMenu": [[-1,50,25,10], ["All",50,25,10]],  
	
        dom: 'Bfrit',
		
        buttons: ['pageLength','excel', 'csv','copy','pdf' ]
		
		
		

    } );
	
} );
</script>

</html>
<?php }  ?>
