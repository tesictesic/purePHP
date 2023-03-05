<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Contact :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
			<?php
			include("pages/header.php");
			?>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.php">Home</a>
							<i>|</i>
						</li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Contact</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">We love to discuss your idea</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Address</h6>
								<p> California, USA

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Phone</h6>
								<p>+1 234 567 8901</p>

							</div>

						</div>
					</div>
				</div>
				<div class="contact_grid_right">
					<form action="pages/obrada.php" method="POST" id="forma">
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" type="text" id="fullname" name="Name" placeholder="" required="">
									<p class="text-danger d-none ">You must enter the correct full name, for example: Djordje Tesic</p>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" id="emailcontact" name="Email" placeholder="" required="">
									<p class="text-danger d-none ">You must enter the correct email, for example:djordje.tesa@gmail.com</p>
								</div>
								<div class="form-group">
									<label class="my-2">Subject</label>
									<input class="form-control" type="text" id="subject" name="Subject" placeholder="" required="">
									<p class="text-danger d-none ">Subject must have more than 3 letters</p>
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Message</label>
									<textarea id="textarea" id="textarea" name="textarea" placeholder="" required=""></textarea>
									<p class="text-danger d-none ">You have to fill in this field</p>
								</div>
								<input class="form-control" id="contactsubmit" type="submit" value="Submit">
								<?php
								
								if(isset($_GET["error"])){
									echo "<p class='alert alert-danger mt-3'>".$_GET["error"]." </p>";
								}
								?>
								<?php
								if(isset($_GET["message"])){
									echo "<p class='form-message alert alert-success mt-3'>".$_GET['message']."</p>";
								}
								?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<div class="contact-map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div>

	<!--footer -->
	<?php
	include("pages/footer.php");
	?>
	<!-- //footer -->
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>

</html>