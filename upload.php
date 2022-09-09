<!DOCTYPE html>
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
 	<link rel="stylesheet" type="text/css" href="loggin.css">
 </head>
 <body>
 	<div class="body">
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


		<div class="container">
			<br>
			<h1 class="text-white bg-dark text-center">Registered Name with Profile</h1>
			<br>
				
			<?php


						$con = mysqli_connect('localhost','root');
						mysqli_select_db($con,'gswa');

						if(isset($_POST['submit'])){

							$username = $_POST['username'];
							$profession = $_POST['profession'];
							$university = $_POST['university'];
							$email = $_POST['email'];
							$files = $_FILES['files'];

							// print_r($username);
							// echo "<br>";
							// print_r($profession);
							// echo "<br>";
							// print_r($university);
							// echo "<br>";
							// print_r($email);
							// echo "<br>";
							// print_r($files);


							$filename = $files['name'];
							$fileerror = $files['name'];
							$filetmp =  $files['tmp_name'];

							$fileext = explode('.',$filename);
							$filecheck = strtolower(end($fileext));


							$fileextstored = array('png','jpg','jpeg');
							if(in_array($filecheck, $fileextstored)){

								$destinationfile = 'upload/'.$filename;
								move_uploaded_file($filetmp, $destinationfile);

								$q = "INSERT INTO `gswa_info`(`username`, `profession`, `university`, `email`, `image`) VALUES ('$username','$profession','$university','$email','$destinationfile')";
								$query = mysqli_query($con,$q);

								$displayquery = "SELECT * FROM gswa_info ";

								$querydisplay = mysqli_query($con,$displayquery);

								//$row = mysqli_num_rows($querydisplay);

								while ($result = mysqli_fetch_array($querydisplay)){
									
										?>

									<div class="grid-3 gswa-member">
										<div class="gswa-member-inner">
											<img src="<?php echo $result['image']?>" alt="avater">
											<h5><?php echo $result['id']?>.<?php echo $result['username']?></h5>
											<h6><?php echo $result['profession']?></h6>
											<p><?php echo $result['university']?></p>
										</div>

									</div>

									<?php
									}

							}
							


						}

					?>

					


			
		

			
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

 	</div>
 </body>
 </html>