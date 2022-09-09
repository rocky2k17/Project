<?php
	include_once 'mysql/mysql.php';

?>

<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no">
	<title>GSWA</title>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->
	<link rel="stylesheet" href="css/default.css" media="screen" title="no title" charset="utf-8">

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
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="events.html">Events</a>
				</li>
				<li>
					<a href="advisor.html">Advisor</a>
				</li>
				<li>
					<a href="senior-council.html">Senior Council</a>
				</li>
				<li>
					<a href="executive-committee.html">Executive committee</a>
				</li>
				<li>
					<a href="#"> Members
						<span class="icon-ios-arrow-down"></span>
					</a>
					<ul class="fade-in">
						<li>
							<a href="members.html">Enlist Members</a>
						</li>
						<li>
							<a href="#">Want to be Member</a>
						</li>
						<li>
							<a href="sample-page.html">Sample Page</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="gallery.html">Gallery</a>
				</li>
				<li class="">
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="holder-fluid" style="background: #f1f1f1;text-align: center;padding: 30px 0;box-shadow: inset 0px 0px 20px -2px #c4d0d9;">
		<div class="holder">
			<h3>Members</h3>
			<div class="breadcumb">
				<a href="index.html">Home</a>
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
					while($row = mysqli_fetch_assoc())
					{
						<div class="grid-3 gswa-member">
							<div class="gswa-member-inner">
								<img src="<?php echo $result['image']?>" alt="avater">
								<h5><?php echo $result['id']?>.<?php echo $result['username']?></h5>
								<h6><?php echo $result['profession']?></h6>
								<p><?php echo $result['university']?></p>
							</div>

						</div>
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
					<li>facebook</li>
					<li>twitter</li>
					<li>google+</li>
				</ul>
			</div>
		</div>
	</div>
	<script src="js/default.js" charset="utf-8"></script>

</body>

</html>