<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Shop :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<?php
		include("pages/header.php");
		?>
	
    </div>
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.php">Home</a>
							<i>|</i>
						</li>
						<li>Shop</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">New Arrivals for you </h3>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<div class="search-hotel">
								<h3 class="agileits-sear-head">Search Here..</h3>
								<form>
										<input class="form-control" type="search" name="search" id="search" placeholder="Search here..." required="">
										
										<div class="clearfix"> </div>
									</form>
							</div>
							<!-- price range -->
							<!-- //price range -->
							<!--preference -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Brands</h3>
								<ul>
								<?php
								include("pages/connection.php");
								if($konekcija){
									//echo("Postoji konekcija sa bazom");
									$upit1="select * from brands order by id asc";
									$rezultat=$konekcija->query($upit1);
									 echo("<ul id=brands>");
									foreach($rezultat as $element){
									echo("<li>");
									echo "<input type=checkbox class=checked value=".$element['id'].">
										<span class=span>".$element['name']."</span>	
									";
									echo("</li>");
									
									}
									echo("</ul>");
								}
								
								else{
									echo("Ne postoji konekcija sa bazom");
								}
								
								
								?>

							</div> 
							<!-- // preference -->
							<!-- discounts -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Gender</h3>
								<ul>
								<?php
								 include("pages/connection.php");
								 if($konekcija){
									$upit2="select * from gender order by id asc";
									$rezultat2=$konekcija->query($upit2);
									echo "<ul id=gender>";
									foreach($rezultat2 as $item){
									echo "<li>
									<input type=checkbox class=checked value=".$item['id'].">
									<span class=span>".$item['name']."</span>
								</li>
								";	
									}
								 }
								 else{
									echo("Ne postoji konekcija");
								 }
								
								
								?>
								
							</div>
							<!-- //discounts -->
							<!-- reviews -->
							<!-- //reviews -->
							<!-- deals -->
							
							<!-- //deals -->
						<!-- //product left -->
						<!--/product right-->
					
						<!--//product right-->
					</div>
					<div class="left-ads-display col-lg-9 d-flex">
							<?php 

							include("pages/logic.php");
							
							?>
						</div>
					<!--/slide-->
				</div>
		</section>
		<!--footer -->
		<?php

	
	include("pages/footer.php");
	
	
	?>
		<!-- //footer -->
		<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
		<script src="js/main.js"></script>
		
</body>

</html>