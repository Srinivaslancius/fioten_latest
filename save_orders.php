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
	$order_total = $_POST["product_price"] * $_POST["product_quantity"];
	$order_date = date("Y-m-d h:i:s");
	$string1 = str_shuffle('abcdefghijklmnopqrstuvwxyz');
	$random1 = substr($string1,0,3);
	$string2 = str_shuffle('1234567890');
	$random2 = substr($string2,0,3);
	$contstr = "FIOTEN";
	$order_id = $contstr.$random1.$random2;

	//Sending mail
	//$dataem = $getSiteSettingsData['email'];
	$to = "haritha@lanciussolutions.com";
	//$to = "$dataem";
	$subject = "User Place Order Information";

	$message = "<html><head><title>Place Order</title></head>
	<body>
	<p>Order Information!</p>
	<h4>Product Name: </h4><p>".$_POST['product_name']."</p>
	<h4>Product Quantity: </h4><p>".$_POST['product_quantity']."</p>
	<h4>Product Price: </h4><p>".$_POST['product_price']."</p>
	<h4>Order Total: </h4><p>"$order_total"</p>
	<h4>Date: </h4><p>"$order_date"</p>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <info@fioten.com>' . "\r\n";
	// $headers .= 'Cc: myboss@example.com' . "\r\n";

	mail($to,$subject,$message,$headers);

	//Saving Orders
	$productsCount = count($_POST["product_id"]);
	$sql = "INSERT INTO orders (`first_name`, `mobile`,`email`, `address1`,`product_id`,`product_name`,`product_price`,`product_total_price`, `order_total`,`order_date`,`product_quantity`,`payment_status`,`order_status`,`order_id`) VALUES ('$name','$mobile','$email','$address','" . $_POST["product_id"]. "','" . $_POST["product_name"]. "','" . $_POST["product_price"]. "','" . $_POST["product_total_price"]."','$order_total','$order_date','" . $_POST["product_quantity"]. "','1','1','$order_id')";
	$res = $conn->query($sql);

    header("Location: thankyou.php?odi=".$order_id."");

}

?>