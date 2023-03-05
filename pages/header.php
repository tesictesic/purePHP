	<?php
		session_start();
		
	
	?>
<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">12345678099</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
							Goggles </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<?php
							if(isset($_SESSION["korisnik"])){
								$korisnik=$_SESSION["korisnik"];
								echo "<li class='button-log d-none'>
								<a class='btn-open' href='#'>
									<p>Log In</p>
								</a>
								<?php
							</li>
							<li class='button-signup d-none'>
						 <a href='#' class='btn-sign-up'>
							<p>Sign Up</p>
						 </a>
						</li>
							";
							if($korisnik['name']=="Administrator"){
								echo"<p> Welcome admin  <span class=' text-danger korisnik'>".$korisnik['First_Name']."</span></p>";
							}
							else{
								echo"<p> Welcome <span class=' text-primary korisnik'>".$korisnik['First_Name']."</span></p>";
							}
							}
							else{
								echo "<li class='button-log'>
								<a class='btn-open' href='#'>
									<p>Log In</p>
								</a>
							</li>
							<li class='button-signup'>
						 <a href='#' class='btn-sign-up'>
							<p>Sign Up</p>
						 </a>
						</li>
							";
							}
						?>
						
						<li class="galssescart galssescart2 cart cart box_1 mt-3">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="/moj sajt/pages/login.php" method="post" onSubmit="return ProveraPodatakaLogin()">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" name="email_login" aria-describedby="emailHelp" placeholder="">
										<small id="emailHelp" class="form-text text-muted d-none">Your email is not good. Example("djordje.tesa@gmail.com")</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="exampleInputPassword1" name="password_login" placeholder="">
										<small id="emailHelp" class="form-text text-muted d-none">Your password have to contain at least one lowercase letter, one uppercase letter and one number, and the length of the password is at least 8 characters.</small>
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">Check me out</label>
									</div>
									<button type="submit" class="btn btn-primary submit mb-4">Log In</button>

								</form>
							</div>
							<p>If you dont have account, please <a href="#" class="primary sign_up_pop_up">Sign Up</a></p>
							<!---->
						</div>
					</div>
					<!---->
					<div class="overlay-sign-up text-left">
						<button type="button" class="overlay-close2">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Sign Up</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form>
									<div class="form-group">
										<label class="mb-2">First Name</label>
										<input type="text" class="form-control" id="first_name" aria-describedby="first_name" placeholder="">
										<small id="first_name" class="form-text text-muted d-none">Your first name is not good. Example("Djordje")</small>
									</div>
									
									<div class="form-group">
										<label class="mb-2">Last Name</label>
										<input type="text" class="form-control" id="last_name" aria-describedby="last_name" placeholder="">
										<small id="last_name" class="form-text text-muted d-none">Your last name is not good. Example("Tesic")</small>
									</div>
									
									
									<div class="form-group">
										<label class="mb-2">Email</label>
										<input type="email" class="form-control" id="email2" aria-describedby="exampleInputEmail2" placeholder="">
										<small id="email2" class="form-text text-muted d-none">Your email is not good. Example(djordjetesic@gmail.com).</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" class="form-control" id="password2" placeholder="">
										<small id="password2" class="form-text text-muted"> Your password have to contain at least one lowercase letter, one uppercase letter and one number, and the length of the password is at least 8 characters.</small>
									
									</div>
									<div class="form-group">
										<label class="mb-2">Re-Password</label>
										<input type="password" class="form-control" id="re-password" placeholder="">
										<small id="re-password" class="form-text text-muted d-none">Your re_password is not good..</small>
									
									</div>
									<div class="form-check mb-2">
										<input type="checkbox" class="form-check-input" id="exampleCheck2">
										<label class="form-check-label" for="exampleCheck2">Check me out</label>
									</div>
									<button type="button" class="btn btn-primary submit mb-4" id="sign-in">Sign Up</button>

								</form>
							</div>
							
							<!---->
						</div>
					</div>
					
				</div>
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					
					<?php
					include("navigation.php");		
					?>
					

				</div>
			</nav>
			
		</header>
	