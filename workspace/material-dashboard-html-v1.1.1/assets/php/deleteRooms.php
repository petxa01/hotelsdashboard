<?php
	include("connect.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$number=$_GET['roomNumber'];
		$floor=$_GET['roomFloor'];
		#insert into the database
		mysqli_query($link, "delete from rooms where Room_Number=$number and Room_Floor=$floor ");

		#show the result
		mysqli_close($link);

		header("Location: ../../Dashboard/rooms.php");



?>