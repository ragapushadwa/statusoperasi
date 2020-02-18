    <?php
    include('includes/dbconnection.php');
    $ret=mysqli_query($con,"select *from tblvisitor");
    // Process every record
  $cnt=1;
	echo "[";
	
   while ($row=mysqli_fetch_array($ret)) {

	
 
   
    echo "{";
    echo '"S.NO":' . $cnt . ',';
    echo '"Full Name":"' . $row['FullName'] . '",';
    echo '"Contact Number":' . $row['MobileNumber'] . ',';
	echo '"Email":"' . $row['Email'] . '",';
	echo '"Keperluan":"' . $row['Keperluan'] . '",';
	echo '"Check In":"' . $row['EnterDate'] . '",';
	echo '"Check Out":"' . $row['outtime'] . '"';
	
    echo "},";
    $cnt=$cnt+1;
    }
	echo "{}]";
     
    // Close the connection
    mysqli_close($con);
    ?>
