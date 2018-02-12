<!doctype html>
<?php
session_start();
$_SESSION["nabvar-LeftID"]='Contact';
$_SESSION["Sidebar-Mark"]=4;
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
	                                <h4 class="title">Contact Us</h4>
									
	                            </div>
	                            <div class="card-content">
	                                <form name="room-form" method="POST" action="../assets/php/mail.php">
	                                    <div class="row">
	                                       <!-- <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Company (disabled)</label>
													<input type="text" class="form-control" disabled>
												</div>
	                                        </div>-->
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Name</label>
													<input type="text" id="name" name="name" pattern="[a-zA-Z]*" class="form-control" required oninvalid="setCustomValidity('This box is required and does not have to contain numbers')" onchange="try{setCustomValidity('')}catch(e){}" />
												</div>
	                                        </div>
	                                       <!-- <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email address</label>
													<input type="email" class="form-control" >
												</div>
	                                        </div>-->
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input required type="email" class="form-control" id="email" name="email" required oninvalid="setCustomValidity('The email is required')" onchange="try{setCustomValidity('')}catch(e){}" >
												</div>
	                                        </div>
	                                  <!--      <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Last Name</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>-->
	                                    </div>

	                                    <div class="row">
	                                    	<!--
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Room Floor</label>
													<input required type="number"  class="form-control" id="room-floor" name="room-floor">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">City</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
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
	                                    -->
	                                        <div class="col-md-8">
	                                            <div class="form-group">
													<div class="form-group label-floating">
									    				<label class="control-label"> Tell us!</label>
								    					<textarea required class="form-control" rows="5" id="message" name="message" oninvalid="setCustomValidity('You forgot your message!!')" onchange="try{setCustomValidity('')}catch(e){}"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <input type="button" class="btn btn-info pull-right" data-toggle="collapse" data-target="#captcha" value="Im not a robot"></input>

										<div id="captcha" class="collapse">
											<input type="submit" class="btn btn-primary pull-right" id="contact" value="Send"></input>
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

	

</html>
