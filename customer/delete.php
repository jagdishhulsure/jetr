<?php
	include('../database/database.php'); //Including PHP/MYSQL Connection File.
	$customer_id = $_POST['customer_id'];
	
	$result1 = mysqli_query($conn,"DELETE FROM customer where customer_id='$customer_id'");
	
	$sql = "select * from customer";
    $result3 = mysqli_query($conn, $sql);
	
	$emparray[] = array();
    while($row =mysqli_fetch_assoc($result3))
    {
        $emparray[] = $row;
    }
	
	//write to json file
    $fp = fopen('customer.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
	//close the db connection
    mysqli_close($conn);
	
	
	echo '<div class="note note-info">
    <h4 class="block">Sucess Message</h4>
    <p>Data Deleted Sucessfully..</p>
    </div>';
  ?>