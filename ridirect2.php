<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no">
	<title>GSWA</title>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->
	<link rel="stylesheet" href="css/default.css" media="screen" title="no title" charset="utf-8">
	<link rel="icon" href="images/logo.png" type="image/gif">

</head>

<body id="body">
	<div class="holder-fluid gswa-header">
		<div class="holder navbar navbar-right " id="navbar">
			<div class="navbar-brand">
				<span>GSWA</span>
			</div>
			<div class="triangle"></div>
			<div class="navbar-icon">
				<a href="#" class="icon-android-menu">menu</a>
			</div>
			<ul class="navbar-menu">
			<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="events.php">Events</a>
					</li>
					<li>
						<a href="advisor.php">Advisor</a>
					</li>
					<li>
						<a href="senior-council.php">Senior Council</a>
					</li>
					<li>
						<a href="executive-committee.php">Executive committee</a>
					</li>
					<li>
						<a href="#"> Members
							<span class="icon-ios-arrow-down"></span>
						</a>
						<ul class="fade-in">
							<li>
								<a href="members.php">Enlist Members</a>
							</li>
							<li>
								<a href="#">Want to be Member</a>
							</li>
							<li>
								<a href="sample-page.php">Sample Page</a>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="gallery.php">Gallery</a>
					</li>
					<li class="">
						<a href="contact.php">Contact</a>
					</li>
			</ul>
		</div>
	</div>
	
	

    <div class="body">
			<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<h1 class="text-white bg-dark text-center" style="background: #f1f1f1;text-align: center;padding: 30px 0;box-shadow: inset 0px 0px 20px -2px #c4d0d9;">Welcome!! <?php echo $_SESSION['username'] ?> to  GSWA</h1>
			<br>
            <br>
            <br>
            <br>
            <div class="holder-fluid" style="background: #f1f1f1;text-align: center;padding: 30px 0;box-shadow: inset 0px 0px 20px -2px #c4d0d9;">
            <div class="holder">
                <div class="breadcumb">
                    <a href="index.php">Home</a>
                    <a href="members.php">See all Members</a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
	</div>






	<div class="holder-fluid gswa-footer">
		<div class="holder">
			<p>&copy; Copyright 2020 - Gangachara Student Welfare Association (GSWA)</p>
			<br>
			<h5>Follow Us On</h5>
			<div class="list-inline">
				<ul class="list-inline">
					<li> <a href="https://www.facebook.com/gswabd1" target="_blank">facebook</a> </li>
					<li>twitter</li>
					<li>google+</li>
				</ul>
			</div>
		</div>
	</div>
	<script src="js/default.js" charset="utf-8"></script>

</body>

</html>