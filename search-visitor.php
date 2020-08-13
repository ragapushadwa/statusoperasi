<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if ($_SESSION['level']=="AFK") {
	
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
                  <th>Kategori</th>
                  <th>GAM1</th>
                  <th>GAM2</th>
                  <th>GAM3</th>
                  <th>GAM4</th>
                  <th>GAM5</th>
                  <th>GAM6</th>
                  <th>GAM7</th>
                  <th>GAM Time</th>
                   <th>Check In</th>
                   <th>Check Out</th>      
                   <th>Action</th>           
                
                                        </tr>
                                        </thead>
                                        <tbody>
                                      <?php
                                      
$ret=mysqli_query($con,"	SELECT
a.ID,
a.FullName,
a.Jenis,
a.EnterDate,
a.outtime,
b.GAM1,
b.GAM2,
b.GAM3,
b.GAM4,
b.GAM5,
b.GAM6,
b.GAM7,
b.Time 

FROM
tblvisitor a
INNER JOIN data b
ON b.Time BETWEEN a.EnterDate AND a.outtime OR b.Time > a.EnterDate AND a.outtime is NULL
where a.FullName like '$sdata'||a.EnterDate like '$sdata' ORDER BY a.ID DESC ");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;

while ($row=mysqli_fetch_array($ret)) {

?>

              
                <tr>
                  <td><?php echo $cnt;?></td>            
                  <td><?php  echo $row['FullName'];?></td>
                  <td><?php  echo $row['Jenis'];?></td>
                  <td><?php if($row['GAM1']>2.5){
                      echo '<p style="color:red">' . $row['GAM1'] . '</p>';
                  }else{ echo $row['GAM1'];}
                  ?> mR/jam</td>
				   <td><?php if($row['GAM2']>10){
                      echo '<p style="color:red">' . $row['GAM2'] . '</p>';
                  }else{ echo $row['GAM2'];}
                  ?> mR/jam</td>
				  <td><?php if($row['GAM3']>100){
                      echo '<p style="color:red">' . $row['GAM3'] . '</p>';
                  }else{ echo $row['GAM3'];}
                  ?> mR/jam</td>
				   <td><?php if($row['GAM4']>25){
                      echo '<p style="color:red">' . $row['GAM4'] . '</p>';
                  }else{ echo $row['GAM4'];}
                  ?> mR/jam</td>
				   <td><?php if($row['GAM5']>10){
                      echo '<p style="color:red">' . $row['GAM5'] . '</p>';
                  }else{ echo $row['GAM5'];}
                  ?> mR/jam</td>
				   <td><?php if($row['GAM6']>2.5){
                      echo '<p style="color:red">' . $row['GAM6'] . '</p>';
                  }else{ echo $row['GAM6'];}
                  ?> mR/jam</td>
                   <td><?php if($row['GAM7']>2.5){
                      echo '<p style="color:red">' . $row['GAM7'] . '</p>';
                  }else{ echo $row['GAM7'];}?> mR/jam</td>
                  <td><?php  echo $row['Time'];?></td>
                  <td><?php  echo $row['EnterDate'];?></td>
                <td><?php  echo $row['outtime'];?></td>
                <td><a href="visitor-detail.php?editid=<?php echo $row['ID'];?>"><i class="fa fa-edit fa-1x"></i></a></a></td>
                 
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
                  <th>Kategori</th>
                  <th>GAM1</th>
                  <th>GAM2</th>
                  <th>GAM3</th>
                  <th>GAM4</th>
                  <th>GAM5</th>
                  <th>GAM6</th>
                  <th>GAM7</th>
                  <th>GAM Time</th>
                   <th>Check In</th>
                   <th>Check Out</th>      
                   <th>Action</th> 
                
   

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
		"lengthMenu": [[10,25,50,-1], [10,25,50,'All']],  
	
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
