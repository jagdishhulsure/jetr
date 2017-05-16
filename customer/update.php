<?php
	include('../database/database.php'); //Including PHP/MYSQL Connection File.
	
	$customer_id = $_POST['customer_id'];
	
	$customer_first_name = $_POST['customer_first_name'];
	$customer_first_name = mysqli_real_escape_string($conn,$customer_first_name);
	$customer_first_name = trim($customer_first_name);
	
	$customer_last_name = $_POST['customer_last_name'];
	$customer_last_name = mysqli_real_escape_string($conn,$customer_last_name);
	$customer_last_name = trim($customer_last_name);
	
	$customer_email = $_POST['customer_email'];
	$customer_email = mysqli_real_escape_string($conn,$customer_email);
	$customer_email = trim($customer_email);

	$customer_password = $_POST['customer_password'];
	$customer_password = mysqli_real_escape_string($conn,$customer_password);
	$customer_password = trim($customer_password);
	
	$customer_gender = $_POST['customer_gender'];
	$customer_gender = mysqli_real_escape_string($conn,$customer_gender);
	$customer_gender = trim($customer_gender);
	
	$customer_number = $_POST['customer_number'];
	$customer_number = mysqli_real_escape_string($conn,$customer_number);
	$customer_number = trim($customer_number);
	
	$customer_address1 = $_POST['customer_address1'];
	$customer_address1 = mysqli_real_escape_string($conn,$customer_address1);
	$customer_address1 = trim($customer_address1);
	
	$customer_address2 = $_POST['customer_address2'];
	$customer_address2 = mysqli_real_escape_string($conn,$customer_address2);
	$customer_address2 = trim($customer_address2);
	
	$state_id = $_POST['state_id'];
	$state_id = mysqli_real_escape_string($conn,$state_id);
	$state_id = trim($state_id);
	
	$city_id = $_POST['city_id'];
	$city_id = mysqli_real_escape_string($conn,$city_id);
	$city_id = trim($city_id);
	
	$location_id = $_POST['location_id'];
	$location_id = mysqli_real_escape_string($conn,$location_id);
	$location_id = trim($location_id);
	
	$customer_landmark = $_POST['customer_landmark'];
	$customer_landmark = mysqli_real_escape_string($conn,$customer_landmark);
	$customer_landmark = trim($customer_landmark);
	
	$customer_pincode = $_POST['customer_pincode'];
	$customer_pincode = mysqli_real_escape_string($conn,$customer_pincode);
	$customer_pincode = trim($customer_pincode);
	
	$customer_company = $_POST['customer_company'];
	$customer_company = mysqli_real_escape_string($conn,$customer_company);
	$customer_company = trim($customer_company);
	
	$disable_flag = $_POST['disable_flag'];
	$disable_flag = mysqli_real_escape_string($conn,$disable_flag);
	$disable_flag = trim($disable_flag);
	
	$sql = "update customer set customer_first_name='$customer_first_name', customer_last_name='$customer_last_name', customer_email='$customer_email', customer_password='$customer_password', customer_gender='$customer_gender', customer_number='$customer_number', customer_address1='$customer_address1', customer_address2='$customer_address2', state_id='$state_id', city_id='$city_id', location_id='$location_id', customer_landmark='$customer_landmark', customer_pincode='$customer_pincode', customer_company='$customer_company', disable_flag='$disable_flag' where customer_id='$customer_id'";
	$result = mysqli_query($conn,$sql);
	
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

	echo "Sucess";
?>