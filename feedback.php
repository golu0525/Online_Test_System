<?php

require_once 'dbconfig.php';

if (isset($_POST['btnsubmit'])) {
  $txtemail=$test -> real_escape_string($_POST['txtemail']);
  $optradio1=$test -> real_escape_string(implode(",",$_POST['radio']));
  $optradio2=$test -> real_escape_string(implode(",",$_POST['radio1']));
  $optradio3=$test -> real_escape_string(implode(",",$_POST['radio2']));
  $optradio4=$test -> real_escape_string(implode(",",$_POST['radio3']));
  $txtcomment=$test -> real_escape_string($_POST['txtcomment']);


  $q="INSERT INTO feedback VALUES(NULL, NULL, NULL, NULL, '$optradio1', '$optradio2', '$optradio3', '$optradio4', '$txtcomment', '$txtemail')";
  $SQL=$test ->query($q);

  if ($test -> query($q)) {
    $msg = "Thank You!!!";
    header('Location:index.php');
  }
  else{
    $msg = "Feedback not added";
  }
}


 ?>



	<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!-->
	<html class="no-js">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Feedback</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon-->
		<link rel="shortcut icon" href="images/favicon.png">
		<link href='//fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Josefin+Slab:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/colors/color1.css">


		<!-- Stylesheets -->
		<link rel="stylesheet" href="assets/css/normalize.css">
		<link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/libs/materialize/css/materialize.min.css" media="screen,projection" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" media="screen,projection" />


		<link rel="stylesheet" href="assets/css/animate.min.css" media="screen,projection" />
		<link rel="stylesheet" href="assets/libs/sweetalert/sweet-alert.css" media="screen,projection" />

		<link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
		<link rel="stylesheet" href="assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
		<link rel="stylesheet" href="assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />

		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/responsive.css">

		<!-- Choose your default colors -->
		<link rel="stylesheet" href="assets/css/colors/color1.css">

		<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
  <![endif]-->

		<style>
			/* start editing from here */

			a {
				text-decoration: none;
			}

			.txt-rt {
				text-align: right;
			}
			/* text align right */

			.txt-lt {
				text-align: left;
			}
			/* text align left */

			.txt-center {
				text-align: center;
			}
			/* text align center */

			.float-rt {
				float: right;
			}
			/* float right */

			.float-lt {
				float: left;
			}
			/* float left */

			.clear {
				clear: both;
			}
			/* clear float */

			.pos-relative {
				position: relative;
			}
			/* Position Relative */

			.pos-absolute {
				position: absolute;
			}
			/* Position Absolute */

			.vertical-base {
				vertical-align: baseline;
			}
			/* vertical align baseline */

			.vertical-top {
				vertical-align: top;
			}
			/* vertical align top */

			nav.vertical ul li {
				display: block;
			}
			/* vertical menu */

			nav.horizontal ul li {
				display: inline-block;
			}
			/* horizontal menu */

			img {
				max-width: 100%;
			}
			/*end reset*/

			body {
				padding: 0;
				margin: 0;
				background: #00bcd4;
				font-family: 'Open Sans', sans-serif !important;
			}

			h1,
			h2,
			h3,
			h4,
			h5,
			h6 {
				margin: 0;
			}

			p {
				margin: 0;
			}

			ul {
				margin: 0;
				padding: 0;
			}

			label {
				margin: 0;
			}
			/*-- main --*/

			.content {
				padding: 100px;
			}

			.content h1 {
				color: #fff;
				font-size: 40px;
				text-align: center;
				letter-spacing: 1px;
				font-family: 'Amaranth', sans-serif;
			}

			.main {
				width: 70%;
				margin: 45px auto;
				background: #fff;
				padding: 30px 40px;
			}

			p.footer {
				color: #fff;
				font-size: 14px;
				text-align: center;
			}

			p.footer a {
				color: #000;
				transition: 0.5s all;
				-webkit-transition: 0.5s all;
				-moz-transition: 0.5s all;
				-o-transition: 0.5s all;
				-ms-transition: 0.5s all;
			}

			p.footer a:hover {
				color: #fff;
				transition: 0.5s all;
				-webkit-transition: 0.5s all;
				-moz-transition: 0.5s all;
				-o-transition: 0.5s all;
				-ms-transition: 0.5s all;
			}

			.main form input[type="email"],
			.main form input[type="password"] {
				width: 100%;
				padding: 10px;
				font-size: 14px;
				border: 1px solid #e6e6e6;
				outline: none;
				color: #D8D5D5;
				margin-bottom: 30px;
			}

			.main h5 {
				color: #00bcd4;
				margin-bottom: 8px;
				font-size: 19px;
				font-family: 'Josefin Slab', serif;
				font-weight: 600;
			}

			.main h5 span {
				font-size: 15px;
				color: #ccc;
			}

			.main form input[type="email"]:hover,
			.main textarea:hover {
				border: 1px solid #4cc2c4;
				color: #000;
				transition: 0.5s all;
				-webkit-transition: 0.5s all;
				-moz-transition: 0.5s all;
				-o-transition: 0.5s all;
				-ms-transition: 0.5s all;
			}

			.main form input[type="submit"] {
				background: #00bcd4;
				color: #FFFFFF;
				text-align: center;
				padding: 14px 0;
				border: none;
				border-bottom: 4px solid #00bcd4;
				font-size: 16px;
				outline: none;
				width: 100%;
				cursor: pointer;
				margin-bottom: 0px;
				text-transform: capitalize;
			}

			.main form input[type="submit"]:hover {
				background: #000;
				border-bottom: 4px solid #403E3E;
				transition: 0.5s all;
				-webkit-transition: 0.5s all;
				-moz-transition: 0.5s all;
				-o-transition: 0.5s all;
				-ms-transition: 0.5s all;
			}

			.main textarea {
				width: 100%;
				padding: 10px;
				font-size: 14px;
				border: 1px solid #e6e6e6;
				outline: none;
				color: #D8D5D5;
				margin-bottom: 20px;
				outline: none;
				resize: none;
				height: 100px;
				font-family: 'Lato', sans-serif !important;
			}

			.radio-btns label {
				font-size: 14px;
				vertical-align: text-top;
				margin: 0;
			}
			/*start-checkbox*/

			.checkbox {
				padding-left: 25px;
				color: #B6B6B6;
				cursor: pointer;
				position: relative;
				font-size: 12px;
			}

			.checkbox:last-child {
				margin-bottom: 0;
			}

			.checkbox input {
				position: absolute;
				left: -9999px;
			}

			.checkbox i {
				position: absolute;
				bottom: 7px;
				left: 0px;
				display: block;
				width: 19px;
				height: 20px;
				outline: none;
				border: 3px solid #DF1E1C;
				background: #fff;
				border-radius: 3px;
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				-o-border-radius: 3px;
			}

			.checkbox input+i:after {
				position: absolute;
				opacity: 0;
				transition: opacity 0.1s;
				-o-transition: opacity 0.1s;
				-ms-transition: opacity 0.1s;
				-moz-transition: opacity 0.1s;
				-webkit-transition: opacity 0.1s;
			}

			.checkbox input+i:after {
				content: '';
				background: url("./images/tick-mark1.png") no-repeat center;
				top: -6px;
				left: 0px;
				width: 18px;
				height: 18px;
				text-align: center;
			}

			.form-elements li:nth-child(2) {
				margin-left: 18px;
				width: 37%;
			}

			.checkbox input:checked+i:after {
				opacity: 1;
			}

			.checkbox input:checked+i {
				border: 3px solid #DF1E1C;
				background: #fff;
			}

			.radio,
			.radio1,
			.radio2,
			.radio3 {
				position: relative;
				display: inline-block;
				margin-left: 15px;
			}

			.radio:first-child,
			.radio1:first-child,
			.radio2:first-child,
			.radio3:first-child {
				margin-left: 0;
				margin: 0;
			}

			.radio,
			.radio1,
			.radio2,
			.radio3 {
				padding-left: 20px;
				line-height: 25px;
				color: #404040;
				cursor: pointer;
			}

			.radio input[type="radio"],
			.radio1 input[type="radio"],
			.radio2 input[type="radio"],
			.radio3 input[type="radio"] {
				position: absolute;
				left: -9999px;
			}

			.radio-btns label {
				font-size: 14px;
				color: #A5A5A5;
				padding: 0px 0 0 2px;
			}

			.radio i,
			.radio1 i,
			.radio2 i,
			.radio3 i {
				position: absolute;
				top: 5px;
				left: 0;
				display: block;
				width: 20px;
				height: 20px;
				outline: none;
				border: 3px solid #00bcd4;
				background: #fff;
				cursor: pointer;
				border-radius: 100%;
			}

			.radio input+i:after,
			.radio1 input+i:after,
			.radio2 input+i:after,
			.radio3 input+i:after {
				position: absolute;
				opacity: 0;
				transition: opacity 0.1s;
				-o-transition: opacity 0.1s;
				-ms-transition: opacity 0.1s;
				-moz-transition: opacity 0.1s;
				-webkit-transition: opacity 0.1s;
			}

			.radio input+i:after,
			.radio1 input+i:after,
			.radio2 input+i:after,
			.radio3 input+i:after {
				content: '';
				top: 6px;
				left: 7px;
				width: 5px;
				height: 5px;
				border-radius: 50%;
				-webkit-border-radius: 50%;
				-moz-border-radius: 50%;
				-o-border-radius: 50%;
			}

			.radio input:checked+i:after,
			.radio1 input:checked+i:after,
			.radio2 input:checked+i:after,
			.radio3 input:checked+i:after {
				opacity: 1;
			}

			.check_box {
				float: left;
				width: 23%;
			}

			.check_box_one {
				float: left;
				width: 31%;
			}
			/*** normal state ***/

			.radio i,
			.radio1 i,
			.radio2 i,
			.radio3 i {
				transition: border-color 0.3s;
				-o-transition: border-color 0.3s;
				-ms-transition: border-color 0.3s;
				-moz-transition: border-color 0.3s;
				-webkit-transition: border-color 0.3s;
			}
			/*** checked state ***/

			.radio input+i:after,
			.radio1 input+i:after,
			.radio2 input+i:after,
			.radio3 input+i:after {
				content: '';
				background: url("./images/tick-mark1.png") no-repeat 3px 3px;
				top: 0px;
				left: 0px;
				width: 100%;
				height: 100%;
				text-align: center;
				border-radius: 100%;
			}

			.radio input:checked+i,
			.radio1 input:checked+i,
			.radio2 input:checked+i,
			.radio3 input:checked+i {
				border: 3px solid #00bcd4;
				background: #fff;
			}

			.swit {
				margin-bottom: 30px;
			}

			span.starRating {
				margin: 5px 0 30px;
			}

			.starRating:not(old) {
				display: inline-block;
				width: 7.5em;
				height: 1.5em;
				overflow: hidden;
				vertical-align: bottom;
			}

			.starRating:not(old)>input {
				margin-right: -100%;
				opacity: 0;
			}

			.starRating:not(old)>label {
				display: block;
				float: right;
				position: relative;
				background: url('../images/star-off.png');
				background-size: contain;
			}

			.starRating:not(old)>label:before {
				content: '';
				display: block;
				width: 1.5em;
				height: 1.5em;
				background: url('../images/star-on.png');
				background-size: contain;
				opacity: 0;
				transition: opacity 0.2s linear;
			}

			.starRating:not(old)>label:hover:before,
			.starRating:not(old)>label:hover~label:before,
			.starRating:not(:hover)> :checked~label:before {
				opacity: 1;
			}

		</style>
	</head>

	<body onclick="document.getElementById('dropdown1').style.display='none'">



		<!-- Main Container -->
		<main id="app" class="main-section">
			<!-- header navigation start -->
			<header id="navigation" class="root-sec white nav">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="nav-inner">
								<nav class="primary-nav">
									<div class="clearfix nav-wrapper">
										<a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="images/logo1.png" alt="">
										</a>
										<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
										<ul class="right static-menu">
											<li>
												<a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1" onclick="document.getElementById('dropdown1').style.display='block'">
													<!--<i class="mdi-navigation-more-vert right"></i>-->
												</a>
											</li>
										</ul>



										<ul class="inline-menu side-nav" id="mobile-demo">

											<!-- Mini Profile // only visible in Tab and Mobile -->
											<li class="mobile-profile">
												<div class="profile-inner">
													<div class="pp-container">
														<img src="images/person.png" alt="">
													</div>
													<h3>Username</h3>
													<h5>College Name</h5>
												</div>
											</li>
											<!-- mini profile end-->


											<li><a href="index.php" style="text-decoration: none;"><i class="fa fa-user fa-fw"></i>Home</a>
											</li>
											<li><a href="testimonial.php" style="text-decoration: none;"><i class="fa fa-briefcase fa-fw"></i>Testimonial</a>
											</li>
											<li><a href="blog.php" style="text-decoration: none;" data-section="#"><i class="fa fa-comments fa-fw"></i>Blog</a>
											</li>
											<li><a href="feedback.php" style="text-decoration: none;" data-section="#feed"><i class="fa fa-pencil fa-fw"></i>Feedback</a>
											</li>
											<li><a href="aboutus.php" style="text-decoration: none;" data-section="#"><i class="fa fa-user fa-fw"></i>About Us</a>
											</li>

										</ul>
										<ul id="dropdown1" class="inline-menu submenu-ul dropdown-content" style="width: 25px; display: none; position: fixed; height: 50px; top: 16px; left: 1072px; opacity: 1; overflow-y: auto;">
											<li><a href="#">Take a Tour</a>
											</li>
											<li><a href="#">Take a Test</a>
											</li>
										</ul>

									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- .container end -->
			</header>
		</main>
		<!-- #header  navigation end -->
		<div class="content">

			<div class="main">
				<form method="post" action="">

					<h5>Email</h5>
					<input type="email" placeholder="yourmail@mail.com" name="txtemail" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'yourmail@mail.com';}" required>

					<h5>Overall Experience</h5>
					<div class="radio-btns">
						<div class="swit">
							<div class="check_box_one">
								<div class="radio"> <label><input type="radio" name="radio[]" value="Very Good" checked><i></i>Very Good</label> </div>
							</div>
							<div class="check_box">
								<div class="radio"><label><input type="radio" name="radio[]" value="Good"><i></i>Good</label> </div>
							</div>
							<div class="check_box">
								<div class="radio"><label><input type="radio" name="radio[]" value="Fair"><i></i>Fair</label> </div>
							</div>
							<div class="check_box">
								<div class="radio"><label><input type="radio" name="radio[]" value="Poor"><i></i>Poor</label> </div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<h5>Timely Response</h5>
					<div class="radio-btns">
						<div class="swit">
							<div class="check_box_one">
								<div class="radio1"> <label><input type="radio" name="radio1[]" value="Very Good" checked><i></i>Very Good</label> </div>
							</div>
							<div class="check_box">
								<div class="radio1"> <label><input type="radio" name="radio1[]" value="Good"><i></i>Good</label> </div>
							</div>
							<div class="check_box">
								<div class="radio1"> <label><input type="radio" name="radio1[]" value="Fair"><i></i>Fair</label> </div>
							</div>
							<div class="check_box">
								<div class="radio1"> <label><input type="radio" name="radio1[]" value="Poor"><i></i>Poor</label> </div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<h5>Our Support</h5>
					<div class="radio-btns">
						<div class="swit">
							<div class="check_box_one">
								<div class="radio2"> <label><input type="radio" name="radio2[]" value="Very Good" checked><i></i>Very Good</label> </div>
							</div>
							<div class="check_box">
								<div class="radio2"> <label><input type="radio" name="radio2[]" value="Good"><i></i>Good</label> </div>
							</div>
							<div class="check_box">
								<div class="radio2"> <label><input type="radio" name="radio2[]" value="Fair"><i></i>Fair</label> </div>
							</div>
							<div class="check_box">
								<div class="radio2"> <label><input type="radio" name="radio2[]" value="Poor"><i></i>Poor</label> </div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<h5>Overall Satisfaction</h5>
					<div class="radio-btns">
						<div class="swit">
							<div class="check_box_one">
								<div class="radio3"> <label><input type="radio" name="radio3[]" value="Very Good" checked><i></i>Very Good</label> </div>
							</div>
							<div class="check_box">
								<div class="radio3"> <label><input type="radio" name="radio3[]" value="Good"><i></i>Good</label> </div>
							</div>
							<div class="check_box">
								<div class="radio3"> <label><input type="radio" name="radio3[]" value="Fair"><i></i>Fair</label> </div>
							</div>
							<div class="check_box">
								<div class="radio3"> <label><input type="radio" name="radio3[]" value="Poor"><i></i>Poor</label> </div>
							</div>
							<div class="clear"></div>
						</div>
					</div>


					<h5>Is there anything you would like to tell us?</h5>
					<textarea name="txtcomment" required>Type here</textarea>
					<input type="submit" name="btnsubmit" value="Send Feedback" />
				</form>
			</div>

		</div>


		<!-- JavaScripts -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.1.3.js"></script>
		<script src="assets/js/detectmobilebrowser.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/waypoints.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/jquery.nicescroll.min.js"></script>
		<script src="assets/js/gmaps.js"></script>
		<script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/libs/materialize/js/materialize.min.js"></script>
		<script src="assets/libs/jwplayer/jwplayer.js"></script>
		<script src="assets/libs/sweetalert/sweet-alert.min.js"></script>
		<script src="assets/js/common.js"></script>
		<script src="assets/js/main.js"></script>

	</body>

	</html>
