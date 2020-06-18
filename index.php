<?php
session_start();
error_reporting(0);
include ('includes/dbconnection.php');

function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

if (isset($_POST['login']))
{
    $adminuser = $_POST['username'];
    $password = md5($_POST['password']);
    $query = mysqli_query($con, "select * from tbladmin where UserName='$adminuser' && Password='$password' ");
    $ret = mysqli_fetch_array($query);
 console_log($ret['level']);
        console_log($adminuser);
        console_log($password);
        console_log($ret);
    if ($ret > 0)
    {

        console_log($ret['level']);
        console_log($adminuser); 
        console_log($password);
        console_log($ret);

        if ($ret['level'] == 'User')
        {

            $_SESSION['level'] = "User";
            $_SESSION['cvmsaid']=$ret['ID'];
            header('location:dashboard.php');
        }
        else if ($ret['level'] == 'Admin')
        {

            $_SESSION['level'] = "Admin";
            $_SESSION['cvmsaid']=$ret['ID'];
            header('location:dashboard-admin.php');
            
        }
        else if ($ret['level'] == 'Visitor')
        {

            $_SESSION['level'] = "Visitor";
            $_SESSION['cvmsaid']=$ret['ID'];
            header('location:dashboard-visitor.php');
        }
    }

    else
    {
        $msg = "Invalid Details.";
    }
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
	<link rel="icon" href="images/icon/logo-batan-png-8.png">

    <!-- Title Page-->
    <title>Login</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#" style="font-size:24px;">
                              Reactor Information System Login
                            </a>
                        </div>
                         <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
     <div class="illustration" align="center"><img src="images/icon/logo-batan-png-8.png" style="width: 93px;height: 92px;" /><img src="images/icon/Logo-sekolah-tinggi-teknologi-nuklir-STTN-BATAN.png" style="width: 93px;height: 92px;" /></div>
                        <div class="login-form">
                            <form action="" method="post" name="login">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="User Name" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
							
                                <div class="login-checkbox">
                                    <label>
                                        <a href="forgot-password.php">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">sign in</button>
                                <div class="social-login-content">
                                    
                                </div>
                            </form>
                            
                        </div>
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
    <script src="vendor/treeview/bootstrap-treeview.min.js"> </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script>
$(".has-submenu ul").hide();
$(".has-submenu > a").click(function() {
  $(this).next("ul").toggle();
});
</script>

</body>

</html>
<!-- end document-->