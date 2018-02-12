<?php
	include("../assets/php/connect.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$roomNumber=$_POST['room-number'];
		$roomFloor=$_POST['room-floor'];
		$dni=$_POST['dni'];

		# Array bidirekzionala da. Horretarako "$_FILES" metodoa erabiltzen da. 
	 
		#$serbitzarikoHelbidea = '../assets/img/rooms'; 										# Karpeta sortu "Argazkiak", honen barruan beste bat "DB". 
		#$helbideTemporala = 	$_FILES['img']['tmp_name']; 							   	# Argazkiaren helbidea:
		#$argazkiIzena = 		$_FILES['img']['name']; 									# Argazki izena:
		#$bukaeraHelbidea = 		$serbitzarikoHelbidea.'/'.$argazkiIzena; 					# Bukaerako helbidearen helbidea gorde. 
		
		#move_uploaded_file($helbideTemporala,$bukaeraHelbidea);								# Argazkiaren kopia bat egin "Argazkiak/DB" karpetan. 	
		#insert into the database
		#echo "$bukaeraHelbidea";
		#echo "<br>";
		
		$sql="insert into ocupation values ($roomNumber, $roomFloor, '$dni') ";
		//mysqli_query($link, "insert into Rooms (Room_Number,Room_Type,Room_Floor,img) values ($number, '$type', $floor,'$bukaeraHelbidea') ");
        echo $roomNumber;
		if (mysqli_query($link, $sql)) {
    		echo "New record created successfully";
    		header("Location: addReservation.php?database=1");
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($link);
    		header("Location: addReservation.php?database=0");
		}
		# show the result
		mysqli_close($link);

		//header("Location: addRooms.php")

		?>