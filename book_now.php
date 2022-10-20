<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wixxie Cars</title>
</head>


<style>
.button {
  background-color: #F33F3F;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

h1{

	text-align: center;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #F33F3F;
  color: white;
}




</style>

<body>


			<form action="book_now_settings.php" method="post">
			<h2>Book now</h2>

			<h5>ID</h5>

			<input type="number" name="ID"> <br/>

			<h5>Credit Card</h5>

			<input type="text" name="crd"> <br/>

			<h5>Location</h5>

			<input type="text" name="location"> <br/>

			<input type="submit" name = "upload" class="button" value="Book">




</body>
</html>