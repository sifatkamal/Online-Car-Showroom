<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<style>

body{

	background-image: url("assets/images/abstract-white-shapes-background_79603-1362.webp");

}

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
</head>
<body>

<h1>Welcome to the Admin Panel</h1>

<a href="admin_dashboard.php"><img src="assets/images/download.png" alt="back" width="50"></i></a>
		
		<form action="delete_cars.php" method="post">
			<h2>Delete Car Models:</h2>

			<input type="text" name="deletee"> <br/>
			
			<br/>

			<input type="submit" class="button" value="Delete">

		</form>
	</section>

	<!-- Adding Cars -->



		<form action="add_cars.php" method="post">
			<h2>Add Car Models:</h2>

			<h5>ID</h5>

			<input type="number" name="ID"> <br/>

			<h5>Car Name</h5>

			<input type="text" name="car_name"> <br/>

			<h5>Price</h5>

			<input type="text" name="price"> <br/>

			<h5>Info</h5>

			<input type="text" name="description"> <br/>

<!--			<h5>Image</h5>

			<input type="file" name="image"> <br/>

			-->
			<br/>

			<input type="submit" name = "upload" class="button" value="Add">

		</form>
	</section>




<!-- Fetch -->

<h2>Car Data</h2>


												<table id="customers">
												  <tr>

												    <th width="250">ID</th>

												    <th width="250">Model</th>
												    <th width="250">Price</th>
												    <th width="250">description</th>
												    <!--<th width="200">image</th>-->

												  </tr>




												</table>







      <!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
      <?php 
      require_once("DBconnect.php");
      $sql = "SELECT * FROM cars";
      $result = mysqli_query($conn, $sql);




      if(mysqli_num_rows($result) > 0){
        //here we will print every row that is returned by our query $sql
        while($row = mysqli_fetch_array($result)){
        //here we have to write some HTML code, so we will close php tag
      ?>




												<table id="customers">
												  <tr>
												    <td width="250"><?php echo $row[0]; ?></td>
												    <td width="250"><?php echo $row[1]; ?></td>
												    <td width="250"><?php echo $row[2]; ?></td>
											    <td width="250"><?php echo $row[3]; ?></td> 


												  </tr>
												</table>




											</tr>
										

										</table>





      <?php 
        }         
      }
      ?>
      
      
    </div>

















































	
  </body> 
</html>

</body>
</html>


