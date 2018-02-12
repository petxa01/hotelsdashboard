<?php
	include("connect.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$ID=$_GET['Id'];
		#insert into the database
		mysqli_query($link, "delete from users where Id='$ID' ");

		#show the result
		mysqli_close($link);

		header("Location: ../../Dashboard/users.php");



?>