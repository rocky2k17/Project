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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
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
								<a href="login.php">Want to be Member</a>
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
	<br>

	<div class="container">
			<br>
		<h1 class="text-white bg-dark text-center">Registration Form of a Member</h1>
			<div class="col-lg-8 m-auto d-block">
				<form action="validation.php" method = "post" enctype="multipart/form-data">
					<div class="form-group">
						<br>
						
						<label for="user">Name :</label>
						<input type="text" name="username" id="user" class="form-control" onClick="this.value=''" required>

						<label for="userprofession">Profession :</label>
						<input type="text" name="profession" id="userprofession" class="form-control" onClick="this.value=''"  required>

						<label for="useruniversity">University :</label>
						<input type="text" name="university" id="useruniversity" class="form-control" onClick="this.value=''" required>

						<label for="useremail">Email :</label>
						<input type="email" name="email" id="useremail" class="form-control" onClick="this.value=''"  required>

						<label for="user">Picture :</label>
						<input type="file" name="files" id="file" class="form-control" onClick="this.value=''" required>

						</div>

						<input type="submit" name="submit" value="Submit" class="btn btn-success">
					
				</form>
			</div>
			
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

 	</div>
	 <script src="js/default.js" charset="utf-8"></script>
 </body>
 </html>