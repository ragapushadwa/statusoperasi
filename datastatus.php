<?php
include ('includes/dbconnection.php');
$sql_insert = "INSERT INTO statusoperasi (Daya, StatusOperasi, LajuAlir, Suhu, Suhubahanbakar, LajuAlir2Tube, LajuAlir2Plat) VALUES
('".$_GET["Daya"]."','".$_GET["StatusOperasi"]."','".$_GET["LajuAlir"]."','".$_GET["Suhu"]."','".$_GET["Suhubahanbakar"]."','".$_GET["LajuAlir2Tube"]."','".$_GET["LajuAlir2Plat"]."')";
if(mysqli_query($con,$sql_insert))
{echo "Done";
mysqli_close($con);
}
else
{
echo "error is ".mysqli_error($con );
}
?>