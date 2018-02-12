<?php
	include("../assets/php/connect.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$number=$_POST['room-number'];
		$type=$_POST['room-type'];
		$floor=$_POST['room-floor'];

		# Array bidirekzionala da. Horretarako "$_FILES" metodoa erabiltzen da. 
	 
		$serbitzarikoHelbidea = '../assets/img/rooms'; 										# Karpeta sortu "Argazkiak", honen barruan beste bat "DB". 
		$helbideTemporala = 	$_FILES['img']['tmp_name']; 							   	# Argazkiaren helbidea:
		$argazkiIzena = 		$_FILES['img']['name']; 									# Argazki izena:
		$bukaeraHelbidea = 		$serbitzarikoHelbidea.'/'.$argazkiIzena; 					# Bukaerako helbidearen helbidea gorde. 
		
		move_uploaded_file($helbideTemporala,$bukaeraHelbidea);								# Argazkiaren kopia bat egin "Argazkiak/DB" karpetan. 	
		#insert into the database
		echo "$bukaeraHelbidea";
		echo "<br>";
		
		$sql="insert into rooms (Room_Number,Room_Type,Room_Floor,img) values ($number, '$type', $floor,'$bukaeraHelbidea') ";
		//mysqli_query($link, "insert into Rooms (Room_Number,Room_Type,Room_Floor,img) values ($number, '$type', $floor,'$bukaeraHelbidea') ");

		if (mysqli_query($link, $sql)) {
    		echo "New record created successfully";
    		header("Location: addRooms.php?database=1");
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($link);
    		header("Location: addRooms.php?database=0");
		}
		# show the result
		mysqli_close($link);

		//header("Location: addRooms.php")

		?>