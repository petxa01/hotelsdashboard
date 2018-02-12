<!doctype html>
<?php
session_start();
$_SESSION["nabvar-LeftID"]='Home';
$_SESSION["Sidebar-Mark"]=1;
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
	
	
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

	<!-- My js -->
	<script src="../assets/js/validate.js"></script>
	
	<link href="../assets/css/mycss.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

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
						<div class="col-lg-3 col-md-6 col-sm-6">
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="fa fa-twitter"></i>
								</div>
								<div class="card-content">
									<p class="category">Twitter</p>
									<h3 class="title">
										<a class="twitter-follow-button" href="https://twitter.com/petxa01">Follow</a>
									</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Just Updated
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">info_outline</i>
								</div>
								<div class="card-content">
									<p class="category">Git Hub</p>
									<h3 class="title"><!-- Place this tag where you want the button to render. -->
									<a class="github-button" href="https://github.com/petxa01" data-show-count="true" aria-label="Follow @petxa01 on GitHub">Follow @petxa01</a></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> Tracked from Github
									</div>
								</div>
							</div>
						</div>

						
					</div>
					<div class="row">
						<?php
					//		include '../assets/php/carousel.php';
						?>
					</div>
				

					<div class="row">
						<div class="col-md-7">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/A7IqDUdEA3I" frameborder="0"></iframe>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div  id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  </ol>
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active ">
						      <img class="img-responsive center-block" src="../assets/img/rooms/room1.jpg" alt="room1">
						    </div>
						    <div class="item">
						      <img class="img-responsive center-block" src="../assets/img/rooms/room2.jpg" alt="room2">
						    </div>
						    <div class="item">
						      <img class="img-responsive center-block" src="../assets/img/rooms/room3.jpg" alt="room2">
						    </div>
						    <div class="item">
						      <img class="img-responsive center-block" src="../assets/img/rooms/room4.jpg" alt="room2">
						    </div>
						  </div>
						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
							</div>
						</div>
					</div>
<!--
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="purple">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Tasks:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#profile" data-toggle="tab">
														<i class="material-icons">bug_report</i>
														Bugs
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#messages" data-toggle="tab">
														<i class="material-icons">code</i>
														Website
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#settings" data-toggle="tab">
														<i class="material-icons">cloud</i>
														Server
													<div class="ripple-container"></div></a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="profile">
											<table class="table">
												<tbody>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes" checked>
																</label>
															</div>
														</td>
														<td>Sign contract for "What are conference organizers afraid of?"</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
														</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes" checked>
																</label>
															</div>
														</td>
														<td>Create 4 Invisible User Experiences you Never Knew About</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="messages">
											<table class="table">
												<tbody>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes" checked>
																</label>
															</div>
														</td>
														<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
														</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Sign contract for "What are conference organizers afraid of?"</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="settings">
											<table class="table">
												<tbody>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes" checked>
																</label>
															</div>
														</td>
														<td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
														</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="optionsCheckboxes">
																</label>
															</div>
														</td>
														<td>Sign contract for "What are conference organizers afraid of?"</td>
														<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">edit</i>
															</button>
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
																<i class="material-icons">close</i>
															</button>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Employees Stats</h4>
	                                <p class="category">New employees on 15th September, 2016</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
	                                        <th>ID</th>
	                                    	<th>Name</th>
	                                    	<th>Salary</th>
	                                    	<th>Country</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>Dakota Rice</td>
	                                        	<td>$36,738</td>
	                                        	<td>Niger</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>2</td>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>$23,789</td>
	                                        	<td>Curaçao</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>3</td>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>$56,142</td>
	                                        	<td>Netherlands</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>4</td>
	                                        	<td>Philip Chaney</td>
	                                        	<td>$38,735</td>
	                                        	<td>Korea, South</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>
					-->
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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	
<!--
	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>
	<!-- Twitter Script -->
	<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

<!-- Place this tag in your head or just before your close body tag. GitHub Script -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

</html>
