    <?php
    include('includes/dbconnection.php');
    $result = mysqli_query($con,'SELECT * FROM data ORDER BY id DESC LIMIT 1');
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
    echo '"No":' . $No . ',';
    echo '"Time":"' . $row['Time'] . '",';
    echo '"GAM1":' . ($row['GAM1']*26.64) . ',';
	echo '"GAM2":' . ($row['GAM2']*6.66) . ',';
	echo '"GAM3":' . ($row['GAM3']*0.66) . ',';
	echo '"GAM4":' . ($row['GAM4']*2.664). ',';
    echo '"GAM5":' . ($row['GAM5']*6.66) . ',';
    echo '"GAM6":' . ($row['GAM6']*26.64). ',';
	echo '"GAM7":' . ($row['GAM7']*26.64) ;
    echo "},";
    $No++;
    }
	echo "{}]";
     
    // Close the connection
    mysqli_close($con);
    ?>
