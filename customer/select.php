<?php
	include('../database/database.php'); //Including PHP/MYSQL Connection File.
	$sql1 = "select * from price_table";
    $result4 = mysqli_query($conn, $sql1);
	
	$emparray1[] = array();
    while($row =mysqli_fetch_assoc($result4))
    {
        $emparray1[] = $row;
    }
	
	//write to json file
    $fp = fopen('price-table.json', 'w');
    fwrite($fp, json_encode($emparray1));
    fclose($fp);
	

	//close the db connection
    mysqli_close($conn);
?>