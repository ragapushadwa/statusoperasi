<?php
include ('includes/dbconnection.php');
$sql_insert = "INSERT INTO statusoperasi (Daya, LajuAlir, Suhu) VALUES
('".$_GET["Daya"]."','".$_GET["LajuAlir"]."','".$_GET["Suhu"]."')";
if(mysqli_query($con,$sql_insert))
{echo "Done";
mysqli_close($con);
}
else
{
echo "error is ".mysqli_error($con );
}
?>