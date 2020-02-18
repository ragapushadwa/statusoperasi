<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if ($_SESSION['level']==Visitor) {
  header('location:logout.php');
  } else{

  
}
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
    <title>Reports</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	
	<style type="text/css">
	.visitor {
		display:none
	}
		.statusoperasi {
		display:none
	}
		.GAM {
		display:none
	}
	
	.dropdown{
		height:auto !important;
		font-size: 40px
		
	}
	</style>

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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
							            <div class="form-group">

                                        <select name="level" class="form-control dropdown" required>
                                            <option value="">Pilih Report</option>
                                            <option value="1">Visitor</option>
                                            <option value="2">Status Operasi</option>
                                            <option value="3">GAM</option>
                                        </select>
										</div>
                                <div class="card visitor">
                                    <div id ="visitor" class="card-header">
                                        <strong>Visitor</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" enctype="multipart/form-data" class="form-horizontal" name="bwdatesreport" action="bwdates-reports-details.php">
                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

   
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">From Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="fromdate" name="fromdate" value="" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">To Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="todate" name="todate" value="" class="form-control" required="">
                                                    
                                                </div>
                                                <div class="form-group">

<select name="waktu" class="form-control dropvisitor" >
    <option value="">Pilih Report</option>
    <option value="1">Hari Ini</option>
    <option value="2">Sepekan Terakhir</option>
    <option value="3">Sebulan Terakhir</option>
    <option value="4">3 Bulan Terakhir</option>
    <option value="5">6 Bulan Terakhir</option>
    <option value="6">1 Tahun Terakhir</option>
    
    
</select>
</div>
                                            </div>
                                            
                                                                                        
                                            
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Submit
                                        </button></p>
                                        
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
								                                <div id="statusoperasi" class="card statusoperasi">                        <div class="card-header">
                                        <strong>Status Operasi</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" enctype="multipart/form-data" class="form-horizontal" name="bwdatesreport" action="bwdates-reports-statusoperasi-details.php">
                                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

   
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">From Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="fromdate" name="fromdate" value="" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">To Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="todate" name="todate" value="" class="form-control" required="">
                                                    
                                                </div>
                                                <div class="form-group">

<select name="waktu" class="form-control dropstatusoperasi" >
    <option value="">Pilih Report</option>
    <option value="1">Hari Ini</option>
    <option value="2">Sepekan Terakhir</option>
    <option value="3">Sebulan Terakhir</option>
    <option value="4">3 Bulan Terakhir</option>
    <option value="5">6 Bulan Terakhir</option>
    <option value="6">1 Tahun Terakhir</option>
    
    
</select>
</div>
                                            </div>
                                            
                                                                                        
                                            
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Submit
                                        </button></p>
                                        
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
								                                <div id="GAM" class="card GAM">
                                    <div class="card-header">
                                        <strong>GAM</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="post" enctype="multipart/form-data" class="form-horizontal" name="bwdatesreport" action="bwdates-reports-gam-details.php">
                                            <p style="font-size:16px; color:red" text-align=center> <?php if($msg){
    echo $msg;
  }  ?> </p>

   
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">From Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="fromdate" name="fromdate" value="" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">To Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="todate" name="todate" value="" class="form-control" required="">
                                                    
                                                </div>
                                                <div class="form-group">

<select name="waktu" class="form-control dropgam" >
    <option value="">Pilih Report</option>
    <option value="1">Hari Ini</option>
    <option value="2">Sepekan Terakhir</option>
    <option value="3">Sebulan Terakhir</option>
    <option value="4">3 Bulan Terakhir</option>
    <option value="5">6 Bulan Terakhir</option>
    <option value="6">1 Tahun Terakhir</option>
    
    
</select>
</div>
                                            </div>
												<input type="text" name="datefilter" value=""/>

                                            
                                                                                        
                                            
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Submit
                                        </button></p>
                                        
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                       
 				
                        
      
<?php include_once('includes/footer.php');?>
              </div>
                </div>
            </div>
        </div>
   </div>
    </div>


<script>
	const selectElement = document.querySelector('.dropdown');
    const waktutanggal = document.querySelector('.dropvisitor');
    const waktustatus = document.querySelector('.dropstatusoperasi');
    const waktugam = document.querySelector('.dropgam')
    var today = new Date();
    
    var oneweek = new Date();
    var sebulan = new Date();
    var tigabulan = new Date();
    var enambulan = new Date();
    var satutahun = new Date();

    var dd = String(today.getDate());
    var mm = String(today.getMonth()+1); 
    var yyyy = today.getFullYear();
    
   

oneweek.setDate(oneweek.getDate() - 7);
sebulan.setDate(sebulan.getDate()-30);
tigabulan.setDate(tigabulan.getDate()-90);
enambulan.setDate(enambulan.getDate()-180);
satutahun.setDate(satutahun.getDate()-365);

let newHari= [yyyy,mm,dd];
let newArray= [oneweek.getFullYear(),oneweek.getMonth()+1,oneweek.getDate()];
let newsebulan= [sebulan.getFullYear(),sebulan.getMonth()+1,sebulan.getDate()];
let newtigabulan= [tigabulan.getFullYear(),tigabulan.getMonth()+1,tigabulan.getDate()];
let newenambulan= [enambulan.getFullYear(),enambulan.getMonth()+1,enambulan.getDate()];
let newsatutahun = [satutahun.getFullYear(),satutahun.getMonth()+1,satutahun.getDate()];


var lastweek = "";
newArray.forEach((a,i)=>{
    if (i>0){
    if (a<10){
        lastweek=lastweek+"-0"+String(a);
    }
    else{
        lastweek=lastweek+"-"+String(a);
    }}else{
        if(a<10){
            lastweek=lastweek+"0"+String(a);
        }else{
            lastweek=lastweek+String(a);
        }
    }  
});
var hari = "";
newHari.forEach((a,i)=>{
    if (i>0){
    if (a<10){
        hari=hari+"-0"+String(a);
    }
    else{
       hari=hari+"-"+String(a);
    }}else{
        if(a<10){
            hari=hari+"0"+String(a);
        }else{
            hari=hari+String(a);
        }
    }    
});
var sebulan= "";
newsebulan.forEach((a,i)=>{
    if (i>0){
    if (a<10){
        sebulan=sebulan+"-0"+String(a);
    }
    else{
        sebulan=sebulan+"-"+String(a);
    }}else{
        if(a<10){
            sebulan=sebulan+"0"+String(a);
        }else{
            sebulan=sebulan+String(a);
        }
    }   
});
var tigabulan= "";
newtigabulan.forEach((a,i)=>{
    if (i>0){
    if (a<10){
        tigabulan=tigabulan+"-0"+String(a);
    }
    else{
        tigabulan=tigabulan+"-"+String(a);
    }}else{
        if(a<10){
            tigabulan=tigabulan+"0"+String(a);
        }else{
            tigabulan=tigabulan+String(a);
        }
    }    
});
var enambulan = "";
newenambulan.forEach((a,i)=>{
    if (i>0){
     if (a<10){
            enambulan=enambulan+"-0"+String(a);
        }
        else {
            enambulan=enambulan+"-"+String(a);
        }}
        else{
            if(a<10){
                enambulan=enambulan+"0"+String(a);
            }else {
                enambulan=enambulan+String(a);
                        }
        }   
});
var satutahun = "";
newsatutahun.forEach((a,i)=>{
    if(i>0){
        if(a<10){
            satutahun=satutahun+"-0"+String(a);
        }
        else {
            satutahun=satutahun+"-"+String(a);
        }}
        else{
            if(a<10){
                satutahun=satutahun+"0"+String(a);
            }else {
                satutahun=satutahun+String(a);
                        }
            }
});
console.log(sebulan);
   console.log(lastweek);
    today = dd + '-' + mm + '-' + yyyy;
  
    



    

    waktutanggal.addEventListener('change', (event) => {
        if (event.target.value == 1 ) {
            $.redirect('bwdates-reports-details.php', {'fromdate': hari ,'todate': hari});
  }
  else if (event.target.value == 2){
    $.redirect('bwdates-reports-details.php', {'fromdate': lastweek ,'todate': hari });  
  }
  else if (event.target.value == 3){
    $.redirect('bwdates-reports-details.php', {'fromdate': sebulan ,'todate': hari });  
  }
  else if (event.target.value == 4){
    $.redirect('bwdates-reports-details.php', {'fromdate': tigabulan ,'todate': hari });  
  }
  else if (event.target.value == 5){
    $.redirect('bwdates-reports-details.php', {'fromdate': enambulan ,'todate': hari });  
  }
   else if(event.target.value==6)
    $.redirect('bwdates-reports-details.php', {'fromdate': satutahun ,'todate': hari });  
   
  
    }
    );
    waktustatus.addEventListener('change', (event) => {
        if (event.target.value == 1 ) {
            $.redirect('bwdates-reports-statusoperasi-details.php', {'fromdate': hari ,'todate': hari});
  }
  else if (event.target.value == 2){
    $.redirect('bwdates-reports-statusoperasi-details.php', {'fromdate': lastweek ,'todate': hari });  
  }
  else if (event.target.value == 3){
    $.redirect('bwdates-reports-statusoperasi-details.php', {'fromdate': sebulan ,'todate': hari });  
  }
  else if (event.target.value == 4){
    $.redirect('bwdates-reports-statusoperasi-details.php', {'fromdate': tigabulan ,'todate': hari });  
  }
  else if (event.target.value == 5){
    $.redirect('bwdates-reports-statusoperasi-details.php', {'fromdate': enambulan ,'todate': hari });  
  }
   else if(event.target.value==6)
    $.redirect('bwdates-reports-statusoperasi-details.php', {'fromdate': satutahun ,'todate': hari });  
   
  
    }
    );
    waktugam.addEventListener('change', (event) => {
        if (event.target.value == 1 ) {
            $.redirect('bwdates-reports-gam-details.php', {'fromdate': hari ,'todate': hari});
  }
  else if (event.target.value == 2){
    $.redirect('bwdates-reports-gam-details.php', {'fromdate': lastweek ,'todate': hari });  
  }
  else if (event.target.value == 3){
    $.redirect('bwdates-reports-gam-details.php', {'fromdate': sebulan ,'todate': hari });  
  }
  else if (event.target.value == 4){
    $.redirect('bwdates-reports-gam-details.php', {'fromdate': tigabulan ,'todate': hari });  
  }
  else if (event.target.value == 5){
    $.redirect('bwdates-reports-gam-details.php', {'fromdate': enambulan ,'todate': hari });  
  }
   else if(event.target.value==6)
    $.redirect('bwdates-reports-gam-details.php', {'fromdate': satutahun ,'todate': hari });  
   
  
    }
    );
selectElement.addEventListener('change', (event) => {
  const visitor = $('.visitor');
  const statusoperasi = $('.statusoperasi');
  const GAM = $('.GAM');
  if (event.target.value == 1 ) {
	  visitor.show(1000);
	  statusoperasi.hide();
	  GAM.hide(); 	  
  }
  else if (event.target.value == 2){
	  visitor.hide();
	  statusoperasi.show(1000);
	  GAM.hide();
  }
  else if (event.target.value==3){
	  visitor.hide();
	  statusoperasi.hide();
	  GAM.show(1000);
  }
});

	</script>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/redirect.js"></script>
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
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" type="text/javascript"></script>

</body>

</html>
<!-- end document-->
