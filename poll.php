<!DOCTYPE html>
<html lang="en">
<head>
<title>Poll</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
    
</head>
<body>
<?php 
     include("pages/header.php");
?>
<div class="col-lg-12">
    <div class="container">
        <div class="row">
        <div id="poll" class="d-flex mt-5 justify-content-between">
    <div class="poll-question form-group">
        <?php
            require "pages/function.php";
            generatePoll(1,1,"radio");
        ?>
     <p class="alert alert-danger mt-5  d-none" id="upozorenje1">You have to choose one of the offered answers from the radio list</p>
    </div>
    <div class="poll-question form-group">
        <?php 
         generatePoll(2,3,"checkbox");
            
        ?>
        <p class="alert alert-danger mt-5 d-none" id="upozorenje2">You have to choose one of the offered answers from the checkbox list</p>
    </div>
</div>
<div id="sent-poll-answers" class="d-flex justify-content-center mt-5 mb-5">
    <input type="submit" value="Send" id="poll-asnwers-send"/>
    </div>

        </div>
    </div>
</div>
<div id="sent-poll-notification" class="d-flex justify-content-center mb-5">
<p class="form-message alert alert-success mt-3 d-none" id="messagePoll">You have successfully sent your responses</p>
</div>

    <?php 
        include("pages/footer.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>