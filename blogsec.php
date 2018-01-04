<?php
require_once 'dbconfig.php';
if(isset($_GET['blog_id'])){
	$blog_id = $_GET['blog_id'];

$qu = "SELECT * FROM blog WHERE blog_id='$blog_id'";

$check = $test -> query($qu);

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
 <title>Blog Sec</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" >

  <!-- Stylesheets-->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/libs/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/css/bootstrap.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/blog.css">

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
                    </li><!-- mini profile end-->


                    <li><a href="index.php" style="text-decoration: none;"><i class="fa fa-user fa-fw"></i>Home</a>
                    </li>
                    <li><a href="testimonial.php" style="text-decoration: none;" ><i class="fa fa-briefcase fa-fw"></i>Testimonial</a>
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
    <!-- #header  navigation end -->
		<!-- Banner start -->
			<?php
                  if ($check -> num_rows > 0) {
                   while($row = $check->fetch_array()){
                  ?>
		<section id="banner" class="root-sec brand-bg padd-tb-55 single-banner blogpage-banner-wrap">
			<div class="container">
				<div class="row">
					<div class="clearfix blog-banner-text blog-single-banner">
						<div class="col-md-12">
							<h2 class="title"><?php echo $row['blog_title'];?></h2>
							<ul class="clearfix blog-post-meta">
								<li>By <a href="#">Admin</a>
								</li>
								<li><?php echo $row['date'];?></li>
								<li>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ./Banner end -->

		<!-- Blog Post Container-->

		<section id="all-posts" class="root-sec grey lighten-5 blogpage-posts-wrap">
			<div class="container">
				<div class="row">
					<div class="clearfix all-blog-post blog-inner with-sidebar">

						<!-- post container start-->

						<div class="col-sm-8">
							<article class="single-post-page">
								<div class="thumb-wrap">
									<img src="<?php echo $row['blog_largeimage'];?>" alt="">
								</div>
								<div class="single-post-content">
									<p><?php echo $row['blog_para1'];?></p>

									<h2>Description</h2>

									<p><?php echo $row['blog_desc'];?></p>




									<blockquote><?php echo $row['blog_quote'];?></blockquote>


									<pre><?php echo $row['blog_pre'];?></pre>

								</div>
								<div class="clearfix post-footer">
									<a href="#" class="left post-like js-favorite" title="Love this"><i class="mdi-action-favorite"></i> <span class="numb">109</span></a>
									<ul class="clearfix right share-post">
										<li><a href="#"><i class="fa fa-facebook"></i> <span>SHARE</span></a>
										</li>
										<li><a href="#"><i class="fa fa-twitter"></i> <span>TWEET</span></a>
										</li>
										<li><a href="#"><i class="fa fa-google-plus"></i> <span>PLUS</span></a>
										</li>
									</ul>
								</div>

								<div class="comment-reply-section">

									<div class="comment-list-wrapper">
										<ul class="comment-list">
											<li>
										<ul class="comment-list">
											<li>
											</li>
										</ul>
										</li>
										</ul>
										</div>
										</div>



							</article>
						</div>
						<?php } } ?>
						<!-- ./post container end-->

						<!-- Sidebar start-->

						<div class="col-sm-4">
							<div class="primary-sidebar">
								<aside class="single-widget">
									<h2 class="widget-title">RECENT POSTS</h2>
									<ul>
										<?php
										$qu2 = "SELECT * FROM blog";
										$check2 = $test -> query($qu2);
                  						if ($check2 -> num_rows > 0) {
                   						while($row = $check2->fetch_array()){
                  						?>
										<li>
											<a href="./blogsec.php?blog_id=<?php echo $row['blog_id'];?>"><?php echo $row['blog_title'];?></a>
											<span><?php echo $row['date'];?></span>
										</li>
										<?php } }?>

									</ul>
								</aside>


							</div>
						</div>
						<!-- ./sidebar end-->
					</div>
				</div>
			</div>
			<!-- ./container end-->
		</section>
		<!-- ./Blog Post Container end-->

		<!-- Footer Start -->
		<footer id="footer" class="root-sec white root-sec footer-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="clearfix footer-inner">
							<ul class="media-float-none social-icons">
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
							<div class="media-float-none copyright">
								<p>TestSprint &copy; All Rights Reserved</p>
							</div>
						</div>
						<div class="policy">
                <a href="./privacy-policy.html" style="margin-left:10px;"><p>Privacy</a>
                <a href="./terms-of-service.html" style="margin-left:10px;">Terms</a>
                <a href="./user-policy.html" style="margin-left:10px;">User Policy</a>
            </div>

					</div>
				</div>
			</div>
	  </footer>
		<!-- Footer End -->
	</main>
	<!--#app end -->


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	<script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/libs/materialize/js/materialize.min.js"></script>
	<script src="assets/libs/jwplayer/jwplayer.js"></script>
	<script src="assets/js/common.js"></script>
</body>

</html>
