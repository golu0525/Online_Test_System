<?php
session_start();
require_once 'dbconfig.php';
$qu1 = "SELECT * FROM funfact where fun_id=1";
$qu2 = "SELECT * FROM funfact where fun_id=2";
$qu3 = "SELECT * FROM funfact where fun_id=3";
$qu4 = "SELECT * FROM modules WHERE status=1";
$qu5 = "SELECT * FROM skills";
$check1 = $test -> query($qu1);
$check2 = $test -> query($qu2);
$check3 = $test -> query($qu3);
$checkmod = $test ->query($qu4);
$checkskills = $test ->query($qu5);
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
  <title>TestSprint</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" >


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
.modal{
	 background-color: transparent;
	 width: 100%;
	 margin-top: 100px;
}
.modal-dialog {
    width: 300px;
}
.modal-footer {
    height: 70px;
    margin: 0;
}
.modal-footer .btn {
    font-weight: bold;
}
.modal-footer .progress {
    display: none;
    height: 32px;
    margin: 0;
}
.input-group-addon {
    color: #fff;
    background: black;
}

input[type="checkbox"]:not(:checked), [type="checkbox"]:checked{
	 left: 20px;
}
span.psw{
     float: right;
     padding-top: 16px;
}

#div-login-msg,
#div-lost-msg,
#div-register-msg {
    border: 1px solid #dadfe1;
    height: 30px;
    line-height: 28px;
    transition: all ease-in-out 500ms;
}

#div-login-msg.success,
#div-lost-msg.success,
#div-register-msg.success {
    border: 1px solid #68c3a3;
    background-color: #c8f7c5;
}

#div-login-msg.error,
#div-lost-msg.error,
#div-register-msg.error {
    border: 1px solid #eb575b;
    background-color: #ffcad1;
}
#icon-login-msg,
#icon-lost-msg,
#icon-register-msg {
    width: 30px;
    float: left;
    line-height: 28px;
    text-align: center;
    background-color: black;
    margin-right: 5px;
    transition: all ease-in-out 500ms;
}
#text-login-msg{
	color:black;
	font-size: 12px;
}
	 .btn-primary{
		 background-color: black;
	 }
.glyphicon {
    top: 0px;
}
</style>
<script>




	function loginMsg(){
	var qkey = document.getElementById("uPassword").value;
		var qname = document.getElementById("uLogin").value;

		if(qname.trim()=="" || qname.length== 0 || qkey.trim()=="" || qkey.trim()== 0){
		document.getElementById("text-login-msg").innerHTML = "Type your username and password.";
		return;


		}


	var xhttp = new XMLHttpRequest();
	//alert(xhttp);
	xhttp.onreadystatechange =function(){
	if(xhttp.readyState ==4 && xhttp.status ==200){
	document.getElementById("text-login-msg").innerHTML = xhttp.responseText;
	}
	};

	xhttp.open('GET','response.php?qname='+qname+'&qkey='+qkey,true);
	xhttp.send();
	}

	</script>



</head>

<body onclick="document.getElementById('dropdown1').style.display='none'">
             <!-- loginpopup modal -->
<?php
extract($_POST);
	if(isset($btnSubmit))
{
	$rs="SELECT * FROM user_data where user_name='$user_name' and upassword='$password' and status=1 ";

	 $SQL=$test->query($rs);
		if($SQL->num_rows<1)
	{
		$found="N";

	}
	else
	{
		$_SESSION['user_name']=$user_name;

                    echo $_SESSION['user_name'];


	}
}

	?>
<form method="post">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
	<div class="modal-dialog" >
		<div class="modal-content" id="loginMsg">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" >×</button>
				<h5 class="modal-title" id="myModalLabel" style="color:black; font-size:20px;" >TestSprint</h5>
			</div> <!-- /.modal-header -->

			<div id="div-login-msg">
                  <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>



					<span id="text-login-msg" style="font-size:13px";>Type your username and password.</span>


            </div>

			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<div class="input-group">
							<input type="text" class="form-control" id="uLogin" placeholder="Login" name="user_name" onkeyup="loginMsg()" required>
							<label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
						</div>
					</div> <!-- /.form-group -->

					<div class="form-group">
						<div class="input-group">
							<input type="password" class="form-control" id="uPassword" placeholder="Password" name="password" onkeyup="loginMsg()" required>
							<label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
						</div> <!-- /.input-group -->
					</div> <!-- /.form-group -->
<!--
					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember me
						</label>
					</div> /.checkbox -->

				</form>

			</div> <!-- /.modal-body -->

			<div class="modal-footer">
				<button class="form-control btn btn-primary" name="btnSubmit" >Login</button>

				<!-- <div class="progress">
					<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
						<span class="sr-only">progress</span>
					</div>
				</div> -->
			</div> <!-- /.modal-footer -->

		</div><!-- /.modal-content -->
		<span class="psw"> <a href="./fgtpass.php" style="color:white;">Forgot password?</a></span>
		<span class="psw"> <a href="./registration.php" style="color:white; margin-right:100px;">Register?</a></span>
	</div><!-- /.modal-dialog -->


</div><!-- /.modal -->
                  <!-- end modal login-->
	</form>
  <!-- Preloader -->
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>
    </div><!--preloader end-->

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
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="images/logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="right static-menu">
                  <li>
                      <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1" onclick="document.getElementById('dropdown1').style.display='block'">
                       <!-- <i class="mdi-navigation-more-vert right"></i>-->
                      </a>
                    </li>
                  </ul>



                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="images/person.png" alt="">
                            <?php
								$user_name=$_SESSION['user_name'];
								$rs1="SELECT * FROM user_data where user_name='$user_name'";
								$SQLcheck=$test->query($rs1);

                     if (isset($_SESSION['user_name'])){ if($SQLcheck->num_rows>0){ while($row = $SQLcheck->fetch_array()){?>
                        </div>
                        <h3><?php echo $row['full_name'];?></h3>
                        <h5><?php echo $row['institute'];?></h5>
                      </div>
                      <?php } } } ?>
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
                     <?php
                     if (isset($_SESSION['user_name'])){
                    echo "<li><a href=\"./signout.php\" style=\"text-decoration: none;\"><i class=\"fa fa-paper-plane fa-fw\"></i>Logout</a></li>";

                    }
                    else{
                    echo "<li><a href=\"#\" style=\"text-decoration: none;\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-paper-plane fa-fw\"></i>Login</a></li>";
                    }



						?>
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

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-inner">
                  <div class="center-align home-content">
					  <h1 class="home-title"><span>
Online Exam Simplified!

<div>GET STARTED NOW!</div>


</span></h1>
                    <!--<h2 class="home-subtitle">UX/UI Designer from Dhaka, Bangladesh</h2>-->
                <!--<div  class="section-call-to-area" style="position:fixed; margin-top:50px; margin-right:0px;">
          <div class="container">
            <div class="row">
              <a href="#experience" class="call-to-about section-call-to-btn" data-section="#experience">
                <button style=" background-color: #4CAF50; border: none; color: white; padding: 20px 44px; text-align: center;  text-decoration: none;
    display: inline-block;  font-size: 20px;  margin:0px;  cursor: pointer; ">Proceed</button>

                <i class="mdi-content-send left"></i>
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
					   </div>
          <-- .container end ->
        </div>-->
                   <!--  <a href="#skills" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me <i class="mdi-content-send left"></i>
                    </a> -->

                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
          <div class="container">
            <div class="row">
              <a href="#resume" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#resume">
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
          </div>
          <!-- .container end -->
        </div>
      </div>
    </section>
    <!-- #home Section end -->


    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
      <section id="skill" class="root-sec white skill-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="clearfix skill-inner">
              <div class="col-sm-12 col-md-3">
                <div class="skill-left">
                  <h2 class="title">Skills</h2>
                  <p class="regular-text">Man behind the gun, any sophisticated weapons. Human remains that taking the role. We are experienced in utilizing all resources.</p>
                </div>
              </div>

              <!-- skills container -->
              <div class="col-sm-12 col-md-6 col-md-offset-1">
                <div class="skill-right">
                  <div id="skillSlider" class="clearfix skill-graph">

                    <!-- single skill -->
                    <?php
                        if ($checkskills -> num_rows > 0) {
                          while($row = $checkskills->fetch_array()){
                         ?>

                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="<?php echo $row['skill_count'];?>%">
                            <div class="skill-visiable">
                              <span class="skill-title"><?php echo $row['skill_title'];?></span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count"><?php echo $row['skill_count'];?>%</span>
                        </div>
                      </div>
                    </div>
                    <?php }}?>

                  </div>
                </div>
              </div>
              <!-- /skills container -->
            </div>
          </div>
          <div class="btn-wrapp skl-ctrl">
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
          </div>
        </div>
      </div>
        <!-- .container end -->
      </section>


      <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
        <div class="container">
          <div class="row">
            <div class="experience-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head experience-text">
                    <div class="col-sm-12">
                      <h2 class="title">Modules</h2>
                      <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="experienceSlider" class="clearfix card-element-wrapper">

                           <?php
                        if ($checkmod -> num_rows > 0) {
                          while($row = $checkmod->fetch_array()){
                         ?>

                           <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card img-circle"><!--style="opacity: 0.6;"-->
                              <div class="card-image waves-effect waves-block waves-light">
                                <!--<h2 class="left-align card-title-top">January 2014 - Present</h2>-->
                                <div class="valign-wrapper card-img-wrap">
                               <?php

							  	if(isset($_SESSION['user_name'])){
								echo '<a href="./user/indextest.php?module_id='.$row['module_id'];
									 echo '">';
								}
							  else{
								  echo '<a href="#" data-toggle="modal" data-target="#myModal">';
							  }
									?>
									 <img class="activator" src="<?php echo $row['image'];?>" alt="<?php echo $row['module_name'];?>">
                               <?php
							  	if(isset($_SESSION['user_name'])){
									echo "</a>";
								}
							  else{
								  echo "</a>";
							  }
									?>
							  </div>
                              </div>
                             </div>
                          </div>
                          <?php }}?>



                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp exp-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Funfacts Section end -->
    <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix">
                      <i class="mdi-editor-insert-emoticon"></i>
                     <?php
                        if ($check1 -> num_rows > 0) {
                          $fact1 = $check1 -> fetch_array();
                         ?>
                      <span class="num countNumb" ><?php echo $fact1['fun_value'];?></span>
                    </div>
                    <div class="context"><?php echo $fact1['div_name'];?></div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?><!-- ./single fun fact box -->
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-editor-format-list-numbered"></i>
                      <?php
                        if ($check2 -> num_rows > 0) {
                          $fact2 = $check2 -> fetch_array();
                         ?>
                      <span class="num countNumb"><?php echo $fact2['fun_value'];?></span>
                    </div>
                    <div class="context"><?php echo $fact2['div_name'];?></div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?><!-- ./single fun fact box -->
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-notification-event-note"></i>
                      <?php
                        if ($check3 -> num_rows > 0) {
                          $fact3 = $check3 -> fetch_array();
                         ?>
                      <span class="num countNumb"><?php echo $fact3['fun_value'];?></span>
                    </div>
                    <div class="context"><?php echo $fact3['div_name'];?></div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?><!-- ./single fun fact box -->
          </div>
        </div>

      </div>  <!-- .container end -->
    </div>
    <div class="section-call-to-area" >
       <!-- nav back button starts -->
        <div class="container" >
          <div class="row" >
            <a href="#home" style="background-color:#00bcd4;" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less" ></i>
            </a>
          </div>
        </div>
        <!-- nav back button ends -->
      </div>
    </section>
    <!-- #funfacts Section end -->


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
              <!--  <li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                </li>-->
              </ul> <!-- ./social icons end -->

              <div class="right copyright">
                <p style="text-align:center;">TestSprint &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="policy">
                <a href="./privacy-policy.html" style="margin-left:10px;"><p>Privacy</a>
                <a href="./terms-of-service.html" style="margin-left:10px;">Terms</a>
                <a href="./user-policy.html" style="margin-left:10px;">User Policy</a>
            </div>




          </div>

        </div>

      </div> <!-- ./container end-->

    </footer>
    <!-- #footer end -->
	  </section>
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
  <script src="assets/js/bootstrap.min.js"></script>

  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->

	</body>
</html>
