<?php
	include("../assets/php/connect.php");
		$link=conectDataBase(); #We are calling the function

		#get the data from the form
		$nan=$_POST['nan'];
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$jobType=$_POST['job-type'];
		$email=$_POST['email'];
		$userName=$_POST['user-name'];
		
		$password=sha1($_POST['password']);

		# Array bidirekzionala da. Horretarako "$_FILES" metodoa erabiltzen da. 
	 
		#$serbitzarikoHelbidea = '../assets/img/faces'; 										# Karpeta sortu "Argazkiak", honen barruan beste bat "DB". 
		#$helbideTemporala = 	$_FILES['img']['tmp_name']; 							   	# Argazkiaren helbidea:
		#$argazkiIzena = 		$_FILES['img']['name']; 									# Argazki izena:
		#$bukaeraHelbidea = 		$serbitzarikoHelbidea.'/'.$argazkiIzena; 					# Bukaerako helbidearen helbidea gorde. 
		
		#move_uploaded_file($helbideTemporala,$bukaeraHelbidea);								# Argazkiaren kopia bat egin "Argazkiak/DB" karpetan. 	
		#insert into the database
		$sql="insert into users (name,surname,user_name,user_pw,JobType,DNI,email) values ('$name', '$surname', '$userName','$password','$jobType','$nan','$email') ";
	//try{
//			mysqli_query($link, "insert into users (name,surname,user_name,user_pw,JobType,DNI,email) values ('$name', '$surname', '$userName','$password','$jobType','$nan','$email') ");
	//	} catch (Exception $e){
	//	
		
	//	}
		if (mysqli_query($link, $sql)) {
    		echo "New record created successfully";
    		header("Location: addUser.php?database=1");
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($link);
    		header("Location: addUser.php?database=0");
		}

		# show the result
		mysqli_close($link);

		

		?>