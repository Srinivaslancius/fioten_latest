<?php
include_once('manage_webmaster/admin_includes/config.php');
include_once('manage_webmaster/admin_includes/common_functions.php');
if(isset($_POST['user_name'])) {
	$user_name1=$_POST['user_name'];
	$checkdata=" SELECT user_name FROM users WHERE user_name='$user_name1' ";
	$query=$conn->query($checkdata);
	if($query->num_rows>0) {
	    echo "User Name Already Exist";
	} else {
	}
exit();
}