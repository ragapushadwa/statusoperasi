    <?php
    include('includes/dbconnection.php');
	

    $result = mysqli_query($con,"select *from statusoperasi ");
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
    
    echo '"Daya":' . $row['Daya'] . ',';
    echo '"Flux":' . $row['Lajur Alir'] . ',';

	echo '"Suhu":' . $row['Suhu']  ;
    echo "},";
    $No++;
    }
	echo "{}]";
     
    // Close the connection
    mysqli_close($con);
    ?>
