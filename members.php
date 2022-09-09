
<?php
	include_once 'mysql/mysql.php';

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
	<div class="holder-fluid" style="background: #f1f1f1;text-align: center;padding: 30px 0;box-shadow: inset 0px 0px 20px -2px #c4d0d9;">
		<div class="holder">
			<h3>Members</h3>
			<div class="breadcumb">
				<a href="index.php">Home</a>
				<a href="#">Members</a>
			</div>
		</div>
	</div>
	<div class="holder-fluid gswa-members">
			<div class="holder">
					<div class="grid-12 gswa-page-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur maiores impedit in animi illo? Nobis iusto perspiciatis accusantium, ipsum consequuntur aperiam est sit, voluptatibus accusamus corporis perferendis quae, temporibus magnam.</div>
			</div>
		<div class="holder">
			
			<?php

					$sql = "select * from gswa_info;";
					$result = mysqli_query($con,$sql);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0){
						while($row = mysqli_fetch_assoc($result))
						{
			?>
						<div class="grid-3 gswa-member">
							<div class="gswa-member-inner">
								<img src="<?php echo $row['image']?>" alt="avater">
								<h5><?php echo $row['username']?></h5>
								<h6><?php echo $row['profession']?></h6>
								<p><?php echo $row['university']?></p>
							</div>

						</div>
			<?php
						}
					}
			?>
				
				
			
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
	<script src="js/default.js" charset="utf-8"></script>

</body>

</html>