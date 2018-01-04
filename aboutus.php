<?php
require_once 'dbconfig.php';
$qu = "SELECT * FROM team";

$check = $test -> query($qu);


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
		<title>About Us</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon-->
		<link rel="shortcut icon" href="images/favicon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
			<!-- #header  navigation end -->


			<section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="title" align="center">ABOUT</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">

						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">&nbsp;</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<img src="http://thegateacademy.com/wp-content/uploads/2014/09/test-series.png">
						</div>
						<div class="row">
							<div class="col-sm-6">
								<p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- nav down starts-->
				<div class="section-call-to-area">
					<div class="container">
						<div class="row">
							<a href="#team" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#team">
								<i class="mdi-navigation-expand-more"></i>
							</a>
						</div>
					</div>

				</div>
				<!-- nav down end -->

			</section>


			<!-- Team Section end -->
			<section id="team" class="scroll-section root-sec brand-bga padd-tb-120 team-wrap">
				<div class="container">
					<div class="row">
						<div class="clearfix team-inner">

							<div class="col-sm-12 col-md-10 card-box-wrap">
								<div class="row">
									<div class="clearfix section-head team-text">
										<div class="col-sm-12">
											<h2 class="title">our team</h2>
											<p class="regular-text" style="color:#00bcd4;">Our Team combines a unique combination of creativity, experience, knowledge but most of all a shared 'can do' attitude to help clients get the very best support, advice and project management to achieve business goals.</p>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="overflow-hidden">
											<div class="row">
												<div id="teamSlider" class="clearfix card-element-wrapper">
													<?php
                       if ($check -> num_rows > 0) {
                         while($row = $check->fetch_array()){
                        ?>
														<div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
															<div class="card">
																<div class="card-image waves-effect waves-block waves-light">
																	<div class="card-img-wrap">
																		<img class="activator" src="<?php echo $row['image'];?>" alt="">
																	</div>
																</div>
																<div class="card-content">
																	<span class="card-title activator brand-text"><?php echo $row['name'];?></span>
																	<p>
																		<?php echo $row['designation'];?>
																	</p>
																</div>

															</div>
														</div>
														<!-- single team member -->
														<?php } } ?>
												</div>
												<!-- #teamSlider end -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-wrapp tmu-ctrl">
								<a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
								<a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
							</div>
						</div>
					</div>

				</div>
				<!-- .container -->
			</section>
			<!-- #team Section end -->

			<section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<p>Testsprint</p>
							<p>#705, The Arden Building,</p>
							<p>Sector 10,</p>
							<p>Pratap Nagar, Jaipur - 302022</p>
							<p>support@testsprint.com</p>
							<p>+91-8080-433-233</p>
							<p>Office hours: 10 AM to 8 PM </p>
							<p>(Sunday Closed)</p>

						</div>
						<div class="col-sm-4">

						</div>
						<div class="col-sm-4">
							<p class="title">Follow Us</p>
							<div class="clearfix footer-inner">
								<ul class="left social-icons">
									<li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
									</li>
									<li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
									</li>
									<li>
										<a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus">
											<i class="fa fa-envelope" aria-hidden="true"></i></a>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<!-- nav to next starts-->
				<div class="section-call-to-area">
					<div class="container">
						<div class="row">
							<a href="#experience" style="background-color:#00bcd4;" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#experience">
								<i class="mdi-navigation-expand-less"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- nav ends-->
			</section>


			<!-- Footer Section end -->
			<footer id="footer" class="root-sec white root-sec footer-wrap">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="clearfix footer-inner">
								<ul class="left social-icons">
									<li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
									</li>
									<li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
									</li>
									<li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
									</li>
									<li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
									</li>
								</ul>
								<!-- ./social icons end -->
								<div class="right copyright">
									<p>TestSprint &copy; All Rights Reserved</p>
								</div>
							</div>
							<div class="policy">

								<a href="privacy-policy.html" style="margin-left:10px;">
									<p>Privacy</a>

								<a href="./terms-of-service.html" style="margin-left:10px;">Terms</a>

								<a href="./user-policy.html" style="margin-left:10px;">User Policy</a>

							</div>
						</div>
					</div>
				</div>
				<!-- ./container end-->
			</footer>
			<!-- #footer end -->


		</main>
		<!-- Main Container end-->


		<!-- JavaScripts -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="assets/js/jquery.easing.1.3.js"></script>
		<script src="assets/js/detectmobilebrowser.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/waypoints.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/jquery.nicescroll.min.js"></script>
		<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="assets/js/gmaps.js"></script>
		<script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/libs/materialize/js/materialize.min.js"></script>
		<script src="assets/libs/jwplayer/jwplayer.js"></script>
		<script src="assets/libs/sweetalert/sweet-alert.min.js"></script>
		<script src="assets/js/common.js"></script>
		<script src="assets/js/main.js"></script>
	</body>

	</html>
