<?php

require_once('DBconnect.php');

if(isset($_POST['ID']) && isset($_POST['crd']) && isset($_POST['location'])){

	$u = $_POST['ID'];

	$p = $_POST['crd'];

	$c = $_POST['location'];

	$sql = "INSERT INTO booking VALUES('$u', '$p', '$c')";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){

		echo "You've orderd Successfully. Thank you for choosing us";
	
	}
	else{

		echo "insertion Failed";

		header("Location: book_now.php");
	}
	
}


?>