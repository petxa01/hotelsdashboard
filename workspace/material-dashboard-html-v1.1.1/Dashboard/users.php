<!doctype html>
<?php
session_start();
$_SESSION["nabvar-LeftID"]='User List';
$_SESSION["Sidebar-Mark"]=6;
 ?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta https-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Random Hotel Name</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

		<link href="../assets/css/ligthbox.css" rel="stylesheet" />
	<script src="../assets/js/ligthbox.js"></script>
	<script src="../assets/js/ligthbox-plus-jquery.js"></script>

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

   	<!-- my JS files -->
	<script src="../assets/js/validate.js"></script>
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
if (!isset($_SESSION["loged"])) {
	header("Location: home.php");
}else{
?>
	<div class="wrapper">
	    <?php 
	    include '../assets/php/sidebar.php';
	    ?>

	    <div class="main-panel">
	    	<?php
	    	include '../assets/php/navbar.php';
	    	?>

		<?php
	#	if (isset($_SESSION["loged"]))
	#	{
		?>
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card card-plain">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Users</h4>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead>
	                                    	<th>NAN</th>
	                                    	<th>Name</th>
	                                    	<th>Surname</th>
	                                    	<th>Job Type</th>
	                                    	<th>Email</th>
	                                    	<th>Remove</th>
	                                    </thead>
	                                    <tbody>
	                                        <?php
	                                    		include("../assets/php/connect.php");
												$link=conectDataBase(); #We are calling the function
												$result=mysqli_query($link, "select * from users;");
								            
								            
                								$imgnum=0;
	                							while ($erregistroa=mysqli_fetch_array($result)) {
								                    # code...
								                
								                    printf( "
								                    <tr>
								                    	<td>%s</td>
								                    	<td>%s</td>
								                    	<td>%s</td>
								                    	<td>%s</td>
								                    	<td>%s</td>
								                    	<td><a href=\"../assets/php/deleteUsers.php?Id=%d\"><i class=\"material-icons\">delete</i></a></td>
								                    	</tr>", $erregistroa["DNI"], $erregistroa["name"], $erregistroa["surname"],$erregistroa["JobType"],$erregistroa["email"],$erregistroa["id"]);
												}
												mysqli_free_result($result);
												mysqli_close($link);
                							
                							?>
	                                    </tbody>
	       
                							
                							
                							
	                                </table>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
<?php 
#}else {
	// code...
?>	
	
<?php	        
#}
?>
	        <?php 
	    include '../assets/php/footer.php';
	    ?>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	

</html>
<?php
}
?>