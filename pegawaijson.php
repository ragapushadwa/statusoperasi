<?php
    include('includes/dbconnection.php');
    $ret=mysqli_query($con,"select *from tblpegawai order by id ");
    // Process every record
  $cnt=1;
	echo "[";
	
   while ($row=mysqli_fetch_array($ret)) {

	
 
   
    echo "{";
    echo '"NO":' . $cnt . ',';
    echo '"Full Name":"' . $row['FullName'] . '",';
    echo '"Kategori":"' . $row['Jenis'] . '",';
	
	echo '"Check In":"' . $row['EnterDate'] . '",';
	echo '"Check Out":"' . $row['outtime'] . '"';
	
    echo "},";
    $cnt=$cnt+1;
    }
	echo "{}]";
     
    // Close the connection
    mysqli_close($con);
    ?>
