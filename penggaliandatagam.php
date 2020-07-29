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
	<link rel="icon" href="images/icon/logo-batan-png-8.png">

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
                                    
<h4 class="m-t-0 header-title">Reports</h4>

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
	echo '"GAM6":' . $row['GAM6'] . ',';
	echo '"GAM7":' . $row['GAM7']  ;
    echo "},";
$cnt=$cnt+1;}
echo "{}];",
'</script>';


?>

  
                                      <table id="gamtabel" class="display" style="width:100%">
                                         <thead>
                                        <tr>
                                            <tr>
                  <th>ID</th>
                  <th>Waktu</th>
                  <th>GAM1</th>
              <th>GAM2</th>
			  <th>GAM3</th>
			  <th>GAM4</th>
			  <th>GAM5</th>
			  <th>GAM6</th>
              <th>GAM7</th>
              <th>Detail</th>
			  
              
			  
                   
                </tr>
                                        </tr>
                                        </thead>
										<tbody>
                                       <?php
$ret=mysqli_query($con,'SELECT * FROM data WHERE (GAM1 >2.5 || GAM2>10 || GAM3>100 || GAM4>25 || GAM5>10 || GAM6>2.5 || GAM7>2.5) order by id desc');
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['Time'];?></td>
                  <td><?php if($row['GAM1']>2.5){
                      echo '<p style="color:red">' . $row['GAM1'] . '</p>';
                  }else{ echo $row['GAM1'];}
                  ?></td>
				   <td><?php if($row['GAM2']>10){
                      echo '<p style="color:red">' . $row['GAM2'] . '</p>';
                  }else{ echo $row['GAM2'];}
                  ?></td>
				  <td><?php if($row['GAM3']>100){
                      echo '<p style="color:red">' . $row['GAM3'] . '</p>';
                  }else{ echo $row['GAM3'];}
                  ?></td>
				   <td><?php if($row['GAM4']>25){
                      echo '<p style="color:red">' . $row['GAM4'] . '</p>';
                  }else{ echo $row['GAM4'];}
                  ?></td>
				   <td><?php if($row['GAM5']>10){
                      echo '<p style="color:red">' . $row['GAM5'] . '</p>';
                  }else{ echo $row['GAM5'];}
                  ?></td>
				   <td><?php if($row['GAM6']>2.5){
                      echo '<p style="color:red">' . $row['GAM6'] . '</p>';
                  }else{ echo $row['GAM6'];}
                  ?></td>
                   <td><?php if($row['GAM7']>2.5){
                      echo '<p style="color:red">' . $row['GAM7'] . '</p>';
                  }else{ echo $row['GAM7'];}
                  ?></td>
                  <td><button onclick="nambah(<?php  echo "'".$row['Time'] . "'";?>)"><i class="fa fa-edit fa-1x"></i></button></td>
				  
             
                
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Waktu</th>
<th>GAM1</th>
<th>GAM2</th>
<th>GAM3</th>
<th>GAM4</th>
<th>GAM5</th>
<th>GAM6</th>
<th>GAM7</th>
<th>Detail</th>

</tr>
</tfoot>
                                    </table>
                         
                                </div>
                            </div>
                          
                        </div>
                        <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    
<h4 class="m-t-0 header-title">Pegawai</h4>

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
	echo '"GAM6":' . $row['GAM6'] . ',';
	echo '"GAM7":' . $row['GAM7']  ;
    echo "},";
$cnt=$cnt+1;}
echo "{}];",
'</script>';


?>
<h5 class="detailgam" align="center" style="color:blue"></h5>
<hr />
  
                                      <table id="pengunjunggam" class="display" style="width:100%">
                                         <thead>
                                        <tr>
                                            <tr>
                  <th>ID</th>
                  
                  <th>Nama</th>
              <th>Kategori</th>
              <th>Alamat</th>
			  <th>Check In</th>
			  <th>Check Out</th>
              <th>Detail</th>
		
			  
              
			  
                   
                </tr>
                                        </tr>
                                        </thead>
										<tbody class="pengunjunggam">
   
              
               
                <?php 
$cnt=$cnt+1;
}?>
</tbody>
<tfoot>
<tr>
<th>ID</th>
                  
                  <th>Nama</th>
              <th>Kategori</th>
              <th>Alamat</th>
			  <th>Check In</th>
			  <th>Check Out</th>
              <th>Detail</th>

</tr>
</tfoot>
                                    </table>
                         
                                </div>
                            </div>
                          
                        </div>
                        <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    
<h4 class="m-t-0 header-title">Visitor</h4>

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
	echo '"GAM6":' . $row['GAM6'] . ',';
	echo '"GAM7":' . $row['GAM7']  ;
    echo "},";
$cnt=$cnt+1;}
echo "{}];",
'</script>';


?>
<h5 class="detailpengunjung" align="center" style="color:blue"></h5>
<hr />
  
                                      <table id="visitorgam" class="display" style="width:100%">
                                         <thead>
                                        <tr>
                                            <tr>
                  <th>ID</th>
                  
                  <th>Nama</th>
              <th>Kategori</th>
              <th>Alamat</th>
			  <th>Check In</th>
			  <th>Check Out</th>
              <th>Detail</th>
		
			  
              
			  
                   
                </tr>
                                        </tr>
                                        </thead>
										<tbody class="visitorgam">
   
              
               
 
</tbody>
<tfoot>
<tr>
<th>ID</th>
                  
                  <th>Nama</th>
              <th>Kategori</th>
              <th>Alamat</th>
			  <th>Check In</th>
			  <th>Check Out</th>
			  <th>Detail</th>

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


function nambah(knowntime){
    fetch("pegawaijson.php")
.then((res) =>res.json())
.then((tabel)=>{
    let res = tabel.filter(visitor => {
        if(visitor['NO']){
            if(visitor['Check Out']==""){
                return visitor['Check In'] < knowntime;
            }else{
                return visitor['Check In'] < knowntime && visitor['Check Out'] > knowntime;
            }
    }});
    let isi = ''
    res.forEach(item=>{
        if(item['NO']){
            isi=isi+'<tr><td>'+item['NO']+'</td><td>'+item['Full Name']+'</td><td>'+item['Kategori']+'</td><td>'+item['Alamat']+'</td><td>'+item['Check In']+'</td><td>'+item['Check Out']+'</td><td><a href="visitor-pegawai-detail.php?editid='+item['ID']+'"><i class="fa fa-edit fa-1x"></i></a></td></tr>';   
        }  
    });
    document.querySelector('.pengunjunggam').innerHTML=isi;
    document.querySelector('.detailgam').innerHTML=knowntime;
    document.querySelector('#pengunjunggam').scrollIntoView();
});
fetch("visitorjson.php")
.then((res) =>res.json())
.then((tabel)=>{
    console.log(tabel);
    let res = tabel.filter(visitor => {
        if(visitor['NO']){
            if(visitor['Check Out']==""){
                return visitor['Check In'] < knowntime;
            }else{
                return visitor['Check In'] < knowntime && visitor['Check Out'] > knowntime;
            }
    }});
    let isi = ''
    res.forEach(item=>{
        if(item['NO']){
            isi=isi+'<tr><td>'+item['NO']+'</td><td>'+item['Full Name']+'</td><td>'+item['Kategori']+'</td><td>'+item['Alamat']+    '</td><td>'+item['Check In']+'</td><td>'+item['Check Out']+'</td><td><a href="visitor-detail.php?editid='+item['ID']+'"><i class="fa fa-edit fa-1x"></i></a></td></tr>';   
        }  
    });
    document.querySelector('.visitorgam').innerHTML=isi;
    document.querySelector('.detailpengunjung').innerHTML=knowntime;
   
});
}
</script>
</script>
<script>
$(document).ready(function() {
    $('#gamtabel').DataTable( {
		"lengthMenu": [[5,25,50,-1], [10,25,50,"All"]],  
	
        dom: 'Bfrit',
		
        buttons: ['pageLength','excel', 'csv','copy','pdf' ]
		
		
		

    } );

	
} );
</script>
<script>
$(document).ready(function() {
    $('#pengunjunggam').DataTable( {
		"lengthMenu": [[0,10,25,50,-1], [0,10,25,50,"All"]],  
	
        dom: 'Brit',
		
        buttons: []
		
		
		

    } );

	
} );
</script>
<script>
$(document).ready(function() {
    $('#visitorgam').DataTable( {
		"lengthMenu": [[0,10,25,50,-1], [0,10,25,50,"All"]],  
	
        dom: 'Brit',
		
        buttons: [ ]
		
		
		

    } );

	
} );
</script>

</body>

</html>
<?php   ?>
