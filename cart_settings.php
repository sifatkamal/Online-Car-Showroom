<?php

require_once('DBconnect.php');

if(isset($_POST['ID'])) {

	$u = $_POST['ID'];

	$sql = "SELECT * from cars where ID like '$u'";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_array($result);

	$Model = $row[1];

	$Price = $row[2];

	$sql = "insert into cart (ID, Model,Price) values ('" .$u."','".$Model."','".$Price."')";

	$result = mysqli_query($conn, $sql);

	header("Location: cart.php");

}

?>