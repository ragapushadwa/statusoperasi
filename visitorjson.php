    <?php
    include('includes/dbconnection.php');
    $ret=mysqli_query($con,"select *from tblvisitor order by id ");
    // Process every record
  $cnt=1;
	echo "[";
	
   while ($row=mysqli_fetch_array($ret)) {

	
 
   
    echo "{";
    echo '"NO":' . $cnt . ',';
    echo '"ID":"' . $row['ID'] . '",';
    echo '"Full Name":"' . $row['FullName'] . '",';
    echo '"Alamat":"' . $row['Address'] . '",';
    echo '"Kategori":"' . $row['Jenis'] . '",';
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
