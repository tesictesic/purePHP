<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Single :: w3layouts</title>
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
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<?php
		 include("pages/header.php")
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
						<li>Single Page</li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
		<!--/shop-->
		<?php
			include("pages/connection.php");
			if($konekcija){

				$product_id=$_GET['product_id'];
				$upit="SELECT * FROM products p INNER JOIN brands b ON p.brand_id=b.id INNER JOIN gender g ON p.gender_id=g.id WHERE p.id='$product_id'";
				$rezultat=$konekcija->query($upit)->fetch();
				if($rezultat){
					echo "<section class='banner-bottom-wthreelayouts py-lg-5 py-3'>
					<div class='container'>
						<div class='inner-sec-shop pt-lg-4 pt-3'>
							<div class='row'>
									<div class='col-lg-4 single-right-left'>
											<div class='grid images_3_of_2'>
												<div class='flexslider1'>
							
													<ul class='slides'>
														<li data-thumb=".$rezultat['src'].">
															<div class='thumb-image'> <img src=".$rezultat['src']." data-imagezoom='true' class='img-fluid' alt=''> </div>
														</li>
										
													</ul>
													<div class='clearfix'></div>
												</div>
											</div>
										</div>
										<div class='col-lg-8 single-right-left simpleCart_shelfItem'>
											<h3>".$rezultat['product_name']."</h3>
											<p><span class='item_price'>$".$rezultat['price']."</span></p>
											
											<div class='occasional'>
												<ul class='sunglasses-information'>
												<li>Brand:".$rezultat[9]."</li>
												<li>Gender:".$rezultat[11]."</li>
												</ul>
												<div class='clearfix'> </div>
											</div>
											<div class='occasion-cart'>
													<div class='googles single-item singlepage'>
															<form action='#' method='post'>
																<button type='submit' class='googles-cart pgoogles-cart'>
																	Add to Cart
																</button>
																
															</form>
				
														</div>
											</div>
											<ul class='footer-social text-left mt-lg-4 mt-3'>
													<li>Share On : </li>
													<li class='mx-2'>
														<a href='https://sr-rs.facebook.com/' target='_blank'>
															<span class='fab fa-facebook-f'></span>
														</a>
													</li>
													<li class='mx-2'>
														<a href='https://twitter.com/?lang=sr' target='_blank'>
															<span class='fab fa-twitter'></span>
														</a>
													</li>
													<li class='mx-2'>
														<a href='https://www.linkedin.com/' target='_blank'>
															<span class='fab fa-linkedin-in'></span>
														</a>
													</li>
												</ul>
					
										</div>
										<div class='clearfix'> </div>
										<!--/tabs-->
										<div class='responsive_tabs'>
											<div id='horizontalTab'>
												<ul class='resp-tabs-list'>
													
													<li>Information about product</li>
												</ul>
												<div class='resp-tabs-container'>
													<!--/tab_one-->
													<div class='tab1'>
							
														<div class='single_page'>
															<h6>".$rezultat['product_name']."</h6>
															<p>".$rezultat['product_description']."</p>
															
														</div>
													</div>
													<!--//tab_one-->
													
												</div>
											</div>
										</div>
										<!--//tabs-->
							
							</div>
						</div>
					</div>
						
				</section>";
				}

			}
		
		?>
		
		
		<?php
			include("pages/footer.php");
		?>

		<!--jQuery-->
		<script src="js/main.js"></script>
		<!-- js file -->
</body>

</html>