<?php
	include("connect.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$number=$_GET['room_number'];
		$floor=$_GET['room_floor'];
		echo "$floor";
		#insert into the database
		mysqli_query($link, "delete from ocupation where room_number=$number and room_floor=$floor; ");

		#show the result
		mysqli_close($link);

		header("Location: ../../Dashboard/reservations.php");



?>