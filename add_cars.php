<?php

require_once('DBconnect.php');

if(isset($_POST['ID']) && isset($_POST['car_name']) && isset($_POST['price']) && isset($_POST['description'])){

	$u = $_POST['ID'];

	$p = $_POST['car_name'];

	$c = $_POST['price'];

	$d = $_POST['description'];

	$sql = "INSERT INTO cars VALUES('$u', '$p', '$c', '$d')";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){

		echo "Inserted Successfully";
	
		header("Location: admin_edit.php");
	}
	else{

		echo "insertion Failed";

		header("Location: admin_edit.php");
	}
	
}


?>