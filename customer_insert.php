<?php

require_once('DBconnect.php');

if(isset($_POST['ID']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['psw_r'])){

	$u = $_POST['ID'];

	$p = $_POST['username'];

	$c = $_POST['email'];

	$d = $_POST['psw'];

	$e = $_POST['psw_r'];

	$sql = "INSERT INTO customer VALUES('$u', '$p','$c', '$d', '$e')";
	

	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){

		echo "Registered Successfully";
	
		//header("Location: edit_customer.php");
	}
	else{

		echo "insertion Failed";

		//header("Location: admin_signin.php");
	}
	
}


?>