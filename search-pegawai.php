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
    <title>Search Visitors</title>

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
                                 <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4>
  <hr />   

  <table id="tabelpengunjung" class="display" style="width:100%">
                                         <thead>
                                        <tr>
                                            
                  <th>S.NO</th>            
                  <th>Full Name</th>
                   <th>Check In</th>
                   <th>Check Out</th>                 
                
                                        </tr>
                                        </thead>
                                        <tbody>
                                      <?php
$ret=mysqli_query($con,"select *from tblpegawai where FullName like '$sdata%'||Jenis like '$sdata%'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;

while ($row=mysqli_fetch_array($ret)) {

?>

              
                <tr>
                  <td><?php echo $cnt;?></td>            
                  <td><?php  echo $row['FullName'];?></td>
                  <td><?php  echo $row['EnterDate'];?></td>
                <td><?php  echo $row['outtime'];?></td>
                 
                </tr>
                 <?php
                 
                $cnt=$cnt+1;
} } else { ?>

<?php } }?>
</tbody>
<tfoot>

  <tr>
  <th>S.NO</th>            
                  <th>Full Name</th>
                   <th>Check In</th>
                   <th>Check Out</th> 
                
   

  </tr>
  </tfoot>
                                    </table>
                                </div>
                            </div>
                          
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php include_once('includes/footer.php');?>
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
    <script src="vendor/select2/select2.min.js">
    </script>
	<script src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>
<script src=" https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js "></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.20/sorting/numeric-comma.js "></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="vendor/treeview/bootstrap-treeview.min.js"> </script>

</body>
<script>
$(document).ready(function() {
    $('#tabelpengunjung').DataTable( {
		"lengthMenu": [[-1,50,25,10], ["All",50,25,10]],  
	
        dom: 'Bfrit',
		
        buttons: ['pageLength','excel', 'csv','copy','pdf' ]
		
		
		

    } );
	
} );
</script>
<script>
$(".has-submenu ul").hide();
$(".has-submenu > a").click(function() {
  $(this).next("ul").toggle();
});
</script>

</html>
<?php }  ?>