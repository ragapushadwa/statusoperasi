<?php
    include('includes/dbconnection.php');
    $result = mysqli_query($con,'SELECT * FROM data WHERE (GAM1 >2.5 || GAM2>10 || GAM3>100 || GAM4>25 || GAM5>10 || GAM6>2.5 || GAM2>2.5)');
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
    echo '"GAM1":' . ($row['GAM1']) . ',';
	echo '"GAM2":' . ($row['GAM2']) . ',';
	echo '"GAM3":' . ($row['GAM3']) . ',';
	echo '"GAM4":' . ($row['GAM4']). ',';
    echo '"GAM5":' . ($row['GAM5']) . ',';
    echo '"GAM6":' . ($row['GAM6']). ',';
	echo '"GAM7":' . ($row['GAM7']) ;
    echo "},";
    $No++;
    }
	echo "{}]";
    
        // Close the connection
    mysqli_close($con);
    ?>
