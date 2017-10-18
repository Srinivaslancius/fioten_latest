<?php 
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
	// echo "<pre>"; print_r($_POST); die;	
	$name = $_POST["name"];
	$mobile = $_POST["mobile"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$email = $_POST["email"];	
	$order_total = $_POST["order_total"];
	$order_date = date("Y-m-d h:i:s");
	$string1 = str_shuffle('abcdefghijklmnopqrstuvwxyz');
	$random1 = substr($string1,0,3);
	$string2 = str_shuffle('1234567890');
	$random2 = substr($string2,0,3);
	$contstr = "FIOTEN";
	$order_id = $contstr.$random1.$random2;

	$productsCount = count($_POST["product_id"]);
		$sql = "INSERT INTO orders (`first_name`, `mobile`,`email`, `address1`,`product_id`,`product_name`,`product_price`,`product_total_price`, `order_total`,`order_date`,`product_quantity`,`payment_status`,`order_status`,`order_id`) VALUES ('$name','$mobile','$email','$address','" . $_POST["product_id"]. "','" . $_POST["product_name"]. "','" . $_POST["product_price"]. "','" . $_POST["product_total_price"]."','$order_total','$order_date','" . $_POST["product_quantity"]. "','1','1','$order_id')";
	    $res = $conn->query($sql);

    header("Location: thankyou.php?odi=".$order_id."");

}

?>