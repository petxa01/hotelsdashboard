<!doctype html>
<?php
session_start();
$_SESSION["nabvar-LeftID"]='Add Reservation';
$_SESSION["Sidebar-Mark"]=9;

if (isset($_GET["database"]) && $_GET["database"]==0) {
   echo "<script type='text/javascript'>alert(\"Sorry that Room is ocupied please use another one\");</script>";
 }
else if (isset($_GET["database"]) && $_GET["database"]==1) {
   echo "<script type='text/javascript'>alert(\"Reservation added succesfully!\");</script>";
 }
 ?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta https-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
	
	
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

	    

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Add a new reservation</h4>
									
	                            </div>
	                            <div class="card-content">
	                                <form name="user-form" method="POST" action="insertReservation.php" enctype="multipart/form-data">
	                                    <div class="row">
	                                       <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Room number</label>
													<select class="form-control" id="room-number" name="room-number" required>
													    <option selected disabled></option>
													    <?php
    													    include("../assets/php/connect.php");
    												        $link=conectDataBase(); #We are calling the function
    												        $result=mysqli_query($link, "select * from rooms;");
    	                							        while ($erregistroa=mysqli_fetch_array($result)) {
    								                            # code...
    								                            printf( "<option>%d</option>",$erregistroa["Room_Number"]);
    	                							        }
													    ?>
													</select>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Room Floor</label>
													<select id="room-floor" name="room-floor" class="form-control" required >
													     <option selected disabled></option>
													    <?php
    													    
    												        $link=conectDataBase(); #We are calling the function
    												        $result=mysqli_query($link, "select * from rooms;");
    	                							        while ($erregistroa=mysqli_fetch_array($result)) {
    								                            # code...
    								                            printf( "<option>%d</option>",$erregistroa["Room_Floor"]);
    	                							        }
													    ?>
													</select>
												</div>
	                                        </div>
	                                       <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Client DNI</label>
													<select id="dni" name="dni" class="form-control" required >
													     <option selected disabled></option>
													    <?php
    													    
    												        $link=conectDataBase(); #We are calling the function
    												        $result=mysqli_query($link, "select * from client;");
    	                							        while ($erregistroa=mysqli_fetch_array($result)) {
    								                            # code...
    								                            printf( "<option>%s</option>",$erregistroa["dni"]);
    	                							        }
													    ?>
													</select>
												</div>
	                                        </div>
	                                    </div>
<!--
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Job Type</label>
													<select class="form-control" id="job-type" name="job-type" required>
														<option selected disabled></option>
														<option>CEO</option>
														<option>Director</option>
														<option>IT Manager</option>
														<option>Database manager</option>
													</select>
												</div>
	                                        </div>
	                                        -->
	                                        <!--
	                                        <div class="col-md-6">
	                                        	
	                                  			<div class="form-group label-static">
													<label class="control-label">Birth date</label>
													<!-- markup
														<input type="text" class="form-control date-picker" value="10/05/2016"/ data-datepicker-color="purple">

												</div>
	                                        </div>
	                                        -->
	                                    </div>
									<!--	<div class="row">
											<div class="col-md-6">
	                                  			<div class="form-group label-floating">
													<label class="control-label">Email Address</label>
													<input type="email" class="form-control" id="email" name="email" required>
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">User Name</label>
													<input class="form-control" id="user-name" name="user-name" type="text" required>
												</div>
	                                        </div>
	                                    </div>
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Password</label>
													<input class="form-control" id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required>
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Validate Password</label>
													<input class="form-control" id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');"required>
												</div>
	                                        </div>
	                                    </div>

	                                <!--   <div class="row">
	                                       	<div class="col-md-4">
												<div class="form-group">
													<button class="btn btn-primary btn-sm"><input type="file" id="img" name="img"/>Add an image</button>
												</div>
	                                        </div>
	                                    </div>
	                                    -->
	                             <!--   <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Country</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Postal Code</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>About Me</label>
													<div class="form-group label-floating">
									    				<label class="control-label"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
								    					<textarea class="form-control" rows="5"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
									-->
									<input type="button" class="btn btn-info pull-right" data-toggle="collapse" data-target="#captcha" value="Im not a robot"></input>

										<div id="captcha" class="collapse">
											<input type="submit" class="btn btn-primary pull-right" id="addRoom" value="Add the client"></input>
										</div>
	                                    
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
					<!--<div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="../assets/img/faces/marc.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">CEO / Co-Founder</h6>
    								<h4 class="card-title">Alec Thompson</h4>
    								<p class="card-content">
    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
    								</p>
    								<a href="#pablo" class="btn btn-primary btn-round">Follow</a>
    							</div>
    						</div>
		    			</div>-->
	                </div>
	            </div>
	        </div>

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
	<script type="text/javascript" src="httpss://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>
	<script type="text/javascript">
		$('.date-picker').each(function(){
    $(this).datepicker({
        templates:{
            leftArrow: '<i class="now-ui-icons arrows-1_minimal-left"></i>',
            rightArrow: '<i class="now-ui-icons arrows-1_minimal-right"></i>'
        }
    }).on('show', function() {
            $('.datepicker').addClass('open');

            datepicker_color = $(this).data('datepicker-color');
            if( datepicker_color.length != 0){
                $('.datepicker').addClass('datepicker-'+ datepicker_color +'');
            }
        }).on('hide', function() {
            $('.datepicker').removeClass('open');
        });
});
	</script>

</html>
<?php
}
?>