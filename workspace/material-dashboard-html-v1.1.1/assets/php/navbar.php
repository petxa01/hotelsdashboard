<?php
session_start();
 ?>
<?php
if (isset($_GET["login"]) && $_GET["login"]==0) {
   echo "<script type='text/javascript'>alert(\"Your ID or password is wrong.\");</script>";
 }
 ?>
 <?php
 if(isset($_GET["send"]) && $_GET["send"]=true){
 	echo "<script type='text/javascript'>alert(\"Your message was succesfully sent.\");</script>";
 }elseif(isset ($_GET["send"]) && $_GET["send"]=false) {
	echo "<script type='text/javascript'>alert(\"Your message was not sent. Please try again later\");</script>";
 }
 ?>
 <?php

if (isset($_SESSION["loged"])) {
	?>
	
<nav class="navbar navbar-transparent navbar-absolute">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href=><?= $_SESSION["nabvar-LeftID"] ?></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
			<!--	<li>
					<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
						<i class="material-icons">dashboard</i>
						<p class="hidden-lg hidden-md">Dashboard</p>
					</a>
				</li>-->
				<li>
					<form action="../assets/php/logout.php" name="logout-button">
						
						<button class="btn btn-danger">Logout<i class="material-icons md-48">exit_to_app</i></button>
					</form>
					
					
					</a>
				</li>
				
			</ul>

		</div>
	</div>
</nav>
<?php
} else {
	// code...
?>
<nav class="navbar navbar-transparent navbar-absolute">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><?= $_SESSION["nabvar-LeftID"] ?></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
			<!--	<li>
					<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
						<i class="material-icons">dashboard</i>
						<p class="hidden-lg hidden-md">Dashboard</p>
					</a>
				</li>-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="material-icons">person</i>
						<p class="hidden-lg hidden-md">Login</p>
					</a>
					<ul class="dropdown-menu">
						<form  action="../assets/php/login.php" name="loginform" method="POST">

							<li>user ID:<input class="login" type="text" name="userid" required ></li>
							<li>Password: <input class="login" type="password" name="password" required ></li>
		                  	<li><input type="submit" class="btn btn-primary pull-right" name="login"  value="Login"></li>
		                </form>
					</ul>
				</li>
				
			</ul>

		</div>
	</div>
</nav>
 <?php
}
?>