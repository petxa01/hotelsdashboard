<?php
	include("connect.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$dni=$_GET['DNI'];
		#insert into the database
		mysqli_query($link, "delete from client where dni='$dni' ");

		#show the result
		mysqli_close($link);

		header("Location: ../../Dashboard/client.php");



?>