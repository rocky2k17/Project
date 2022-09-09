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
				<span><a style = "color:white" href="index.php">GSWA</a></span>
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
	<div class="holder">
		<div id="slider2" class="slider">
			<div class="slider-content">
				<div class="slide">
					<!-- <div class="img-description">
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing eli</p>
					</div> -->
					<img src="images/img1.jpg">
				</div>
				<div class="slide">
					<img src="images/img2.jpg">
				</div>
				<div class="slide">
					<img src="images/img3.jpg">
				</div>
				<div class="slide">
					<img src="images/img4.jpg">
				</div>
				<div class="prevnext">
					<button type="button" name="button" class="prev"><i class="icon-ios-arrow-back"></i></button>
					<button type="button" name="button" class="next"><i class="icon-ios-arrow-forward"></i></button>
				</div>
				
			</div>
			<div class="bulets">
				<span class="bulet" id="1"></span>
				<span class="bulet" id="2"></span>
				<span class="bulet" id="3"></span>
				<span class="bulet" id="4"></span>
			</div>

			
		</div>


	</div>

	<div class="holder-fluid gswa-whoweare">
		<div class="holder">
			<div class="grid-6">
				<h1>WHO WE ARE?</h1>
			</div>
			<div class="grid-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum error, ullam quae voluptatibus ea quibusdam sunt
					placeat porro deleniti aspernatur? Autem eum dolorum adipisci hic in perspiciatis sunt id pariatur.</p>
			</div>
		</div>
	</div>
	<div class="holder-fluid gswa-whatwedo">
		<div class="holder">
			<div class="grid-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum error, ullam quae voluptatibus ea quibusdam sunt
					placeat porro deleniti aspernatur? Autem eum dolorum adipisci hic in perspiciatis sunt id pariatur.</p>
			</div>
			<div class="grid-6">
				<h1>WHAT WE DO?</h1>
			</div>
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
	<script type="text/javascript">
		app.on('click', document.getElementById('sw1'), function () {
			if (app.hasClass(document.getElementById('sw1'), 'switch-on')) {
				console.log(true);
			}
			else console.log(false);
		});
		var b1 = document.getElementById('alb1');
		var b2 = document.getElementById('alb2');
		var b3 = document.getElementById('alb3');
		var b4 = document.getElementById('alb4');
		app.on('click', b1, function () {
			app.showAlert('alert1', 10);
		});
		app.on('click', b2, function () {
			app.showAlert('alert2');
		});
		app.on('click', b3, function () {
			app.showAlert('alert3', 5);
		});
		app.on('click', b4, function () {
			app.showAlert('alert4');
		});
		var modalBtn = document.getElementById('opnemodal');
		app.on('click', modalBtn, function () {

			var modal = document.getElementById('modal1');
			// console.log(modal);
			if (app.hasClass(modal, 'hide')) app.toggleClass(modal, 'hide', 'show');
			else app.addClass(modal, 'show');
		});
		var allSw = document.getElementsByClassName('switch');
		app.on('click', allSw[0], function () {
			alert('yes');
		});

	</script>
</body>

</html>