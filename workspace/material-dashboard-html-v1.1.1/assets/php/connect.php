<?php
	function conectDataBase(){
		if(!($link = mysqli_connect("127.0.0.1","root","")))
		{
			echo "There is no conection to the DB.";
			exit();
		}
		if(!mysqli_select_db($link, "hotel"))
		{
			echo "There is an error selecting the DB.";
			exit();
		}
		return $link;



	}


 ?>