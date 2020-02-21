<?php
include ('includes/dbconnection.php');
$sql_insert = "INSERT INTO data (GAM1, GAM2, GAM3, GAM4, GAM5, GAM6) VALUES
('".$_GET["GAM1"]."','".$_GET["GAM2"]."','".$_GET["GAM3"]."','".$_GET["GAM4"]."','".$_GET["GAM5"]."','".$_GET["GAM6"]."')";
if(mysqli_query($con,$sql_insert))
{echo "Done";
mysqli_close($con);
}
else
{
echo "error is ".mysqli_error($con );
}
?>