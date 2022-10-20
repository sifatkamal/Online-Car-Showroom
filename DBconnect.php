<?php

$servername ="localhost";
$username="root";
$password="";
$dbname="ocs";

//creating connection 

$conn= new mysqli ( $servername, $username, $password );

//check connection

if ($conn->connect_error){
	die ("Cnnection Failed: ". $conn->connect_error);
	}
else {
	mysqli_select_db($conn, $dbname);

	//echo "Connection successful";
	}
	

?>