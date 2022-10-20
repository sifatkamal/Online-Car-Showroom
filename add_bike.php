<?php

require_once('DBconnect.php');

if(isset($_POST['ID']) && isset($_POST['bike_name']) && isset($_POST['price']) && isset($_POST['description'])){

	$u = $_POST['ID'];

	$p = $_POST['bike_name'];

	$c = $_POST['price'];

	$d = $_POST['description'];



	$sql = "INSERT INTO bike VALUES('$u', '$p', '$c', '$d')";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){

		//echo "Inserted Successfully";
	
		header("Location: admin_edit_2.php");
	}
	else{

		echo "insertion Failed";

		//header("Location: admin_signin.php");
	}
	
}


?>