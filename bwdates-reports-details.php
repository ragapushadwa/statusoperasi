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
    <title>Visitor Report</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
		<link href= " https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet">
    <link href ="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" type="text/css" rel="stylesheet">
	

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
$ret=mysqli_query($con,"select *from tblvisitor where date(EnterDate) between '$fdate' and '$tdate'");

$cnt=1;
$occurences=array_count_values($row['EnterDate']);

echo '<script>',


	'var lists=[';
while ($row=mysqli_fetch_array($ret)) {
echo "{";
    echo '"No":' . $row['ID'] . ',';
    echo '"Time":"' . date("M-Y",strtotime ($row['EnterDate'])) . '",';
    echo '"Labels":"' . $row['Jenis'] . '",';
   

	echo '"FullName":"' . $row["FullName"].'"'  ;
    echo "},";
$cnt=$cnt+1;}
echo "{}];",



'</script>';



?>


<h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<hr />
  
                                 
                                    <table id="tabelpengunjung" class="display" style="width:100%">
                                         <thead>
                                        <tr>
                                          
                  <th>S.NO</th>
            
                  <th>Full Name</th>
              
              <th>Kategori</th>
              <th>Mobile Number</th>
              <th>Check-In</th>
              <th>Check-Out</th>
                   <th>Action</th>
           </tr>
                                        </thead>
										 <tbody>
                                       <?php
$ret=mysqli_query($con,"select *from tblvisitor where date(EnterDate) between '$fdate' and '$tdate'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['FullName'];?></td>
                  <td><?php  echo $row['Jenis'];?></td>
                  <td><?php  echo $row['MobileNumber'];?></td>
                <td><?php  echo $row['Email'];?></td>
                  <td><a href="visitor-detail.php?editid=<?php echo $row['ID'];?>" title="View Full Details"><i class="fa fa-edit fa-1x"></i></a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
</tbody>
<tfoot>
<tr>
                         
<th>S.NO</th>
            
            <th>Full Name</th>
        
        <th>Kategori</th>
        <th>Mobile Number</th>
        <th>Check-In</th>
        <th>Check-Out</th>
             <th>Action</th>
</tr>
</tfoot>
                                    </table>
                                </div>
                            </div>
                          
                        </div>
																				<div class ="col-lg7 col-xl-8">
						<div class = "card-body">
						<div class = "chart-area">
						
						<canvas id="myChart" width="670" height="500" style="display: block; width: 564px; height: 320px;"></canvas>


								</canvas>
								</div>
								
								</div>
								</div>
						
						<script type ='text/javascript' >
var lineChartData = [{label: "Series 1",values: []}];


for (i=0;i<(lists.length-1);i++){
	
if (lists[i]['Time']){}

}


console.log (lineChartData);
</script>
                        
                        
          
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
	<script type ='text/javascript'>
	let count = lists.reduce((newObj, obj) => {
  if(newObj[obj.Time]) {
    newObj[obj.Time] = newObj[obj.Time]+1;
  } else {
    newObj[obj.Time] = 1;
  }
  
  return newObj;
  
}, {});

result = lists.reduce((r, { Time, Labels }) => {
        if (!Time) return r;
        r[Time] = r[Time] || {};
        r[Time][Labels] = (r[Time][Labels] || 0) + 1;
        return r;
    }, {});

Object.values(result).forEach((a)=>{
  if (typeof a['Pelajar'] === 'undefined'){
a['Pelajar']=0;
  }
 else if (typeof a['Umum'] === 'undefined'){
a['Umum']=0;
  }
 else if (typeof a['Mahasiswa'] === 'undefined'){
a['Mahasiswa']=0;
  }
});
</script>
<script>
var lists2 = [[],[]];
for(i=0;i<(Object.values(result).length);i++){
  
	lists2[0].push (Object.values(result)[i]);
	lists2[1].push (Object.values(result)[i]);
  

};
let lists3=[[],[],[]];
Object.values(result).forEach((a,b)=>{
Object.keys(a).forEach((x,i)=>{
  if(x=="Mahasiswa"){
  lists3[0].push(Object.values(a)[i]);
}
else if(x=="Pelajar"){
  lists3[1].push(Object.values(a)[i]);
}
else if(x=="Umum"){
  lists3[2].push(Object.values(a)[i]);
}
});

});





var ctx = document.getElementById('myChart').getContext('2d');
var mixedChart = new Chart(ctx, {
    type: 'bar',
    data: {
        datasets: [{
			 backgroundColor: 'rgba(52, 152, 219,1.0)',
            borderColor: 'rgb(26, 188, 156)',
            label: 'Mahasiswa',
            data: lists3[0],
			
        }, 
		{
			 backgroundColor: 'rgba(155, 89, 182,1.0)',
            borderColor: 'rgb(241, 196, 15)',
            label: 'Pelajar',
            data: lists3[1],
			

            // Changes this dataset to become a line
            type: 'bar'
		},
				
		
		
		{
			 backgroundColor: 'rgba(241, 196, 15,1.0)',
            borderColor: 'rgb(255, 99, 132)',
            label: 'Umum',
            data: lists3[2],
			

            // Changes this dataset to become a line
            type: 'bar'
        }],
        labels: Object.keys(result),
    },
    options:{
      scales : {
        yAxes: [{
          ticks: {
            beginAtZero : true
          }
        }]
      }
    }
});
</script>
<script>
$(document).ready(function() {
    $('#tabelpengunjung').DataTable( {
		"lengthMenu": [[-1,50,25,10], ["All",50,25,10]],  
	
        dom: 'Bfrit',
		
        buttons: ['pageLength','excel', 'csv','copy','pdf' ]
		
		
		

    } );
	
} );
</script>



</body>

</html>
<?php }  ?>
