<?php

require_once('DBconnect.php');

if(isset($_POST['deletee'])) {

	$u = $_POST['deletee'];
	
	$sql = "DELETE FROM bike WHERE ID =$u";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
	
		//echo "Removed Successfully";

		header("Location: admin_edit_2.php");

	}

	else{
		echo "Failed";

		//header("Location: admin_edit_2.php");
	}
	
}


?>