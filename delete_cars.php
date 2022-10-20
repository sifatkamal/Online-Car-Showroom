<?php

require_once('DBconnect.php');

if(isset($_POST['deletee'])) {

	$u = $_POST['deletee'];
	
	$sql = "DELETE FROM cars WHERE ID =$u";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
	
		echo "Deleted Successfully";

		header("Location: admin_edit.php");

	}

	else{
		echo "Failed to delete";

		header("Location: admin_edit.php");
	}
	
}


?>