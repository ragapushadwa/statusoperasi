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
    <title>Live BKO</title>

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
            
            <th>Suhu Tangki</th>
        <th></th>
        <th></th>
        <th>≤43℃</th>
        <th class= "suhutangki"></th>
</tr>
<tr>
<th>6</th>
            
            <th>Suhu Bahan Bakar Maksimum</th>
        <th></th>
        <th></th>
        <th>≤700℃</th>
        <th class= "suhubahanbakar"></th>
</tr>
<tr>
<th>7</th>
            
            <th>Laju Alir Primer</th>
        <th></th>
        <th></th>
        <th>≥138 lpm</th>
        <th class= "lajualir"></th>
</tr>
<tr>
<th>8</th>
            
            <th>Laju Alir Sekunder Tube</th>
        <th></th>
        <th></th>
        <th>≥820 lpm</th>
        <th class= "lajualir2tube"></th>
</tr>
<tr>
<th>9</th>
            
            <th>Laju Alir Sekunder Plat</th>
        <th></th>
        <th></th>
        <th>≥520 lpm</th>
        <th class= "lajualir2plat"></th>
</tr>
<tr>
<th>10</th>
            
<th>Laju Paparan Ruang Kontrol</th>
        <th></th>
        <th></th>
        <th>≤2,5mR/jam</th>
        <th class= "GAM1"></th>
</tr>
<tr>
<th>11</th>
            
<th>Laju Paparan Dek Reaktor</th>
        <th></th>
        <th></th>
        <th>≤10mR/jam</th>
        <th class= "GAM2"></th>
</tr>
<tr>
<th>12</th>
            
<th>Laju Paparan Permukaan Air Tangki</th>
        <th></th>
        <th></th>
        <th>≤100mR/jam</th>
        <th class= "GAM3"></th>
</tr>
<tr>
<th>13</th>
            
<th>Laju Paparan Demineralizer</th>
        <th></th>
        <th></th>
        <th>≤25mR/jam</th>
        <th class= "GAM4"></th>
</tr>
<tr>
<th>14</th>
            
            <th>Laju Paparan Thermal Column</th>
        <th></th>
        <th></th>
        <th>≤10mR/jam</th>
        <th class= "GAM5"></th>
</tr>
<tr>
<th>15</th>
            
            <th>Laju Paparan Perangkat Subkritik</th>
        <th></th>
        <th></th>
        <th>≤2,5mR/jam</th>
        <th class= "GAM6"></th>
</tr>
<tr>
<th>16</th>
            
            <th>Laju Paparan Bulk Shielding</th>
        <th></th>
        <th></th>
        <th>≤2,5mR/jam</th>
        <th class= "GAM7"></th>
</tr>
</tbody>
<tfoot>
<tr>
<th>ID</th>
            
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

// document.querySelector(".daya").innerHtml=array


</script>
<script type ='text/javascript'>


</script>
<script>
var GAM1 = [];
var GAM2 = [];
var GAM3 = [];
var GAM4 = [];
var GAM5 = [];
var GAM6 = [];
var GAM7 = [];
var daya = [];
var suhutangki = [];
var suhubahanbakar = [];
var lajualir = [];
var lajualir2tube = [];
var lajualir2plat = [];



function autotable(){

fetch("statusbkojsonlimit.php")
.then((res) =>res.json())
.then((tabel)=>{
	for (i=0;i<(tabel.length-1);i++){
	
	daya=tabel[i]['Daya'];
	suhutangki=tabel[i]['Suhu Tangki'];
	suhubahanbakar=tabel[i]['Suhu Bahan Bakar'];
	lajualir=tabel[i]['Laju Alir'];
	lajualir2tube=tabel[i]['Laju Alir Sekunder Tube'];
	lajualir2plat=tabel[i]['Laju Alir Sekunder Plat'];
	
    if (parseInt(daya)>109)
{
    document.querySelector(".daya").style.color = 'red';
}
else {
    document.querySelector(".daya").style.color = '#666';
};

if (parseInt(suhutangki)>43)
{
    document.querySelector(".suhutangki").style.color = 'red';
}
else {
    document.querySelector(".suhutangki").style.color = '#666';
}

if (parseInt(suhubahanbakar)>700)
{
    document.querySelector(".suhubahanbakar").style.color = 'red';
}
else {
    document.querySelector(".suhubahanbakar").style.color = '#666';
}
if (parseInt(lajualir)<138)
{
    document.querySelector(".lajualir").style.color = 'red';
}
else {
    document.querySelector(".lajualir").style.color = '#666';
}
if (parseInt(lajualir2tube)<820)
{
    document.querySelector(".lajualir2tube").style.color = 'red';
}
else {
    document.querySelector(".lajualir2tube").style.color = '#666';
}
if (parseInt(lajualir2plat)<520)
{
    document.querySelector(".lajualir2plat").style.color = 'red';
}
else {
    document.querySelector(".lajualir2plat").style.color = '#666';
}    

document.querySelector(".daya").innerHTML=daya+" "+"kW";
document.querySelector(".suhutangki").innerHTML=suhutangki+" "+"℃";
document.querySelector(".suhubahanbakar").innerHTML=suhubahanbakar+" "+"℃";
document.querySelector(".lajualir").innerHTML=lajualir+" "+"lpm";
document.querySelector(".lajualir2tube").innerHTML=lajualir2tube+" "+"lpm";
document.querySelector(".lajualir2plat").innerHTML=lajualir2plat +" "+"lpm";



}
});
fetch("jsonlimit.php")
.then((ser)=>ser.json())
.then((data)=>{
	for (i=0;i<(data.length-1);i++){
	
	
	waktu=data[i]['Time'];
	GAM1=data[i]['GAM1'];
	GAM2=data[i]['GAM2'];
	GAM3=data[i]['GAM3'];
	GAM4=data[i]['GAM4'];
	GAM5=data[i]['GAM5'];
	GAM6=data[i]['GAM6'];
	GAM7=data[i]['GAM7'];

    if (parseInt(GAM1)>2.5)
{
    document.querySelector(".GAM1").style.color = 'red';
}
else {
    document.querySelector(".GAM1").style.color = '#666';
};

if (parseInt(GAM2)>10)
{
    document.querySelector(".GAM2").style.color = 'red';
}
else {
    document.querySelector(".GAM2").style.color = '#666';
}

if (parseInt(GAM3)>100)
{
    document.querySelector(".GAM3").style.color = 'red';
}
else {
    document.querySelector(".GAM3").style.color = '#666';
}
if (parseInt(GAM4)>25)
{
    document.querySelector(".GAM4").style.color = 'red';
}
else {
    document.querySelector(".GAM4").style.color = '#666';
}
if (parseInt(GAM5)>10)
{
    document.querySelector(".GAM5").style.color = 'red';
}
else {
    document.querySelector(".GAM5").style.color = '#666';
}
if (parseInt(GAM6)>2.5)
{
    document.querySelector(".GAM6").style.color = 'red';
}
else {
    document.querySelector(".GAM6").style.color = '#666';
} 
if (parseInt(GAM7)>2.5)
{
    document.querySelector(".GAM7").style.color = 'red';
}
else {
    document.querySelector(".GAM7").style.color = '#666';
}    


    document.querySelector(".GAM1").innerHTML=GAM1+" "+"mR/jam";
document.querySelector(".GAM2").innerHTML=GAM2+" "+"mR/jam";
document.querySelector(".GAM3").innerHTML=GAM3+" "+"mR/jam";
document.querySelector(".GAM4").innerHTML=GAM4+" "+"mR/jam";
document.querySelector(".GAM5").innerHTML=GAM5+" "+"mR/jam";
document.querySelector(".GAM6").innerHTML=GAM6+" "+"mR/jam";
document.querySelector(".GAM7").innerHTML=GAM7+" "+"mR/jam";

}
});

setTimeout(function() {autotable()},1000);

}


</script>

<script>
$(document).ready(function() {
    
autotable();

    $('#gamtabel').DataTable( {
		"lengthMenu": [[25,50,-1], [25,50,"All"]],  
	
        dom: '',
		
        buttons: ['excel', 'csv','copy','pdf' ]
		
		
		

    } );
	
} );
</script>

</body>

</html>
<?php }  ?>
