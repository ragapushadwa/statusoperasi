<?php
    include('includes/dbconnection.php');
	

    $result = mysqli_query($con,'SELECT * FROM statusoperasi ORDER BY id DESC LIMIT 1');
    // Process every record
	


    $oddrow = true;
    $No=1;
	echo "[";
	
    while($row = mysqli_fetch_array($result))
	
    {
    if ($oddrow)
    {
    $css_class=' class="table_cells_odd"';
    }
    else
    {
    $css_class=' class="table_cells_even"';
    }
    $oddrow = !$oddrow;     
    echo "{";
    echo '"No":' . $row['id'] . ',';
    echo '"Time":"' . $row['reading_time'] . '",';
    echo '"Status":"' . $row['status'] . '",';
    echo '"Daya":' . $row['Daya'] . ',';
    echo '"Laju Alir":' . $row['LajuAlir'] . ',';
    echo '"Laju Alir Sekunder Tube":' . $row['LajuAlir2Tube'] . ',';
    echo '"Laju Alir Sekunder Plat":' . $row['LajuAlir2Plat'] . ',';
    echo '"Suhu Bahan Bakar":' . $row['Suhubahanbakar'] . ',';
  
	echo '"Suhu Tangki":' . $row['Suhu']  ;
    echo "},";
    $No++;
    }
	echo "{}]";
     
    // Close the connection
    mysqli_close($con);
    ?>
