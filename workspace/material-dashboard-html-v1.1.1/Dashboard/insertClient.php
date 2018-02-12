<?php
	include("../assets/php/connect.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$nan=$_POST['nan'];
		$name=$_POST['name'];
		$surname=$_POST['surname'];

		
		$sql="insert into client values ('$nan', '$name', '$surname') ";
		
		if (mysqli_query($link, $sql)) {
    		echo "New record created successfully";
    		header("Location: addClient.php?database=1");
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($link);
    		header("Location: addClient.php?database=0");
		}
	
		mysqli_close($link);

		
		?>