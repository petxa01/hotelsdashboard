<?php
session_start();
 ?>



<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
	        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
		    Tip 2: you can also add an image using data-image tag

			-->

			<div class="logo">
				<a href="home.php" class="simple-text">
					Random Hotel Name
				</a>
			</div>


	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==1){ ?>class="active"<?php } ?>>
	                    <a href="home.php">
	                        <i class="material-icons">home</i>
	                        <p>Home</p>
	                    </a>
	                </li>
	                <?php if (isset($_SESSION["loged"])) {
                	?>
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==2){ ?>class="active"<?php } ?>>
	                    <a href="addRooms.php">
	                        <i class="material-icons">add_box</i>
	                        <p>Add Room</p>
	                    </a>
	                </li>
	                <?php } ?>
	                <?php if (isset($_SESSION["loged"])) {
                	?>
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==5){ ?>class="active"<?php } ?>>
	                    <a href="addUser.php">
	                        <i class="material-icons">person_add</i>
	                        <p>Add User</p>
	                    </a>
	                </li>
	                <?php if (isset($_SESSION["loged"])) {
                	?>
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==7){ ?>class="active"<?php } ?>>
	                    <a href="addClient.php">
	                        <i class="material-icons">person_add</i>
	                        <p>Add Client</p>
	                    </a>
	                </li>
	                <?php } ?>
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==9){ ?>class="active"<?php } ?>>
	                    <a href="addReservation.php">
	                        <i class="material-icons">add_box</i>
	                        <p>Add Reservation</p>
	                    </a>
	                </li>
	                <?php } ?>
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==3){ ?>class="active"<?php } ?> >
	                    <a href="rooms.php">
	                        <i class="material-icons">assignment</i>
	                        <p>Room List</p>
	                    </a>
	                </li>
	                <?php if (isset($_SESSION["loged"])) {
                	?>
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==6){ ?>class="active"<?php } ?>>
	                    <a href="users.php">
	                        <i class="material-icons">assignment_ind</i>
	                        <p>User List</p>
	                    </a>
	                </li>
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==8){ ?>class="active"<?php } ?>>
	                    <a href="client.php">
	                      	<i class="material-icons">assignment_ind</i>
	                        <p>Client List</p>
	                    </a>
	                </li>
	                <?php } ?>
	                <?php if (isset($_SESSION["loged"])) {
                	?>
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==10){ ?>class="active"<?php } ?>>
	                    <a href="reservations.php">
	                        <i class="material-icons">assignment</i>
	                        <p>Reservation List</p>
	                    </a>
	                </li>
	                <?php } ?>
	                <li <?php if (isset($_SESSION["Sidebar-Mark"]) && $_SESSION["Sidebar-Mark"]==4){ ?>class="active"<?php } ?>>
	                    <a href="contact.php">
	                       	<i class="material-icons">contact_mail</i>
	                        <p>Contact</p>
	                    </a>
	                </li>
	                
	            </ul>
	    	</div>
		</div>