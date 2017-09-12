<?php
require_once 'dbconfig.php';
session_start();
if (!isset($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 1800) {
    // session started more than 30 minutes ago
    //session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
    //$_SESSION['CREATED'] = time();  // update creation time
	session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();
	header('Location:../index.php');
}


if(isset($_GET['module_id']))
{

$module_id=$_GET['module_id'];
}
if(!isset($_SESSION['user_name']))
{
	header("Location:../index.php");
}
$q="SELECT * FROM modules WHERE module_id='$module_id'";
  $SQL=$test ->query($q);
  if($SQL -> num_rows > 0) {
  while($row = $SQL->fetch_array()){
  $modulehours=$row['test_time_hrs'];
  $modulemins=$row['test_time_mins'];
	  if(!isset($_SESSION['duration'])){
	 $_SESSION['duration']=$modulemins;
	  }
	 
  }}





 $q2="SELECT * FROM questions";
 $SQL2=$test->query($q2);
	
$q3="SELECT * FROM questions";
 $SQL3=$test->query($q3);


$qrs="SELECT * FROM modules WHERE module_id='$module_id'";
  $SQLMOD=$test ->query($qrs);

$qr="SELECT * FROM modules WHERE module_id='$module_id'";
  $SQLmod=$test ->query($qr);


?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>TestSprint</title>

		<link rel="stylesheet" href="./css/normalize.css">
		<link rel="stylesheet" href="./css/style.css">
		<!-- <link rel="stylesheet" href="./css/styleplay.css"> -->

		<link rel="stylesheet" href="./css/calc.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="./js/timer.js"></script>
		
		
		<script>
		//refresh locked
	/*	<script type="text/javascript">
    window.onbeforeunload = function() {
        return "Dude, are you sure you want to leave? Think of the kittens!";
    }
		
		//back and forth
history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
				
});*/

				
				
</script>
		<script>
			
			
			//
			
			
			
			document.addEventListener("contextmenu", function(e){  e.preventDefault(); }, false);document.addEventListener("cut", function(e){  e.preventDefault(); }, false);document.addEventListener("copy", function(e){  e.preventDefault(); }, false);document.addEventListener("paste", function(e){  e.preventDefault(); }, false);
		</script>
		
	<script>
		setInterval(function(){
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.open("GET","timerset.php",false);
		xmlhttp.send(null);
		document.getElementById("timer").innerHTML=xmlhttp.responseText;
		}1,1000	);
		</script>
		
		<script>
			
			//Calculator
			function myFunction() {
				var x = document.getElementById('showCalculator');
				if (x.style.display === 'none') {
					x.style.display = 'block';
				} else {
					x.style.display = 'none';
				}
			}

			//Submit Test Panel
			function myFunction2() {
				document.getElementById('submit-test').style.display = "block";
			}

			function myFunction3() {
				document.getElementById('submit-test').style.display = "none";
			}

			function myFunction4() {
				document.getElementById('submit-test').style.display = "none";
				document.getElementById('summaryModal').style.display = "block";
				var total=0;
				for (var i=0;i<arr.length;i++) {total = total + arr[i];}
				document.getElementById("maxmarks").innerHTML=total;
			}


			//Instructions

			function myFunction5() {
				document.getElementById('readInstructions').style.display = "none";

			}

			function myFunction6() {
				document.getElementById('readInstructions').style.display = "block";
			}

			function myFunction7() {
				var x = document.getElementById('instructionsMore');
				if (x.style.display === 'none') {
					x.style.display = 'block';
					document.getElementById('moreInstructions').innerHTML = "-";
				} else {
					x.style.display = 'none';
					document.getElementById('moreInstructions').innerHTML = "+";
				}


			}

			//calculator
			function myFunction8() {
				document.getElementById('showCalculator').style.display = "block";
			}

/*



			//timer countdown
			// Set the date we're counting down to
			var monthnum = new Date().getMonth();
			var month = new Array();
			month[0] = "January";
			month[1] = "February";
			month[2] = "March";
			month[3] = "April";
			month[4] = "May";
			month[5] = "June";
			month[6] = "July";
			month[7] = "August";
			month[8] = "September";
			month[9] = "October";
			month[10] = "November";
			month[11] = "December";
			var moduleMonth = month[monthnum];
			var moduleDate = new Date().getDate();

			var moduleYear = new Date().getFullYear();
			var countDownDate = new Date(moduleMonth + "," + moduleDate + "," + moduleYear + "," + "0<\?php echo $modulehours;?>:<\?php echo $modulemins;?>:00").getTime();

			// Update the count down every 1 second
			var x = setInterval(function() {

				// Get todays date and time
				var now = new Date().getTime();

				// Find the distance between now an the count down date
				var distance = countDownDate - now;

				// Time calculations for days, hours, minutes and seconds
				var days = Math.floor(distance / (1000 * 60 * 60 * 24));
				var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((distance % (1000 * 60)) / 1000);

				// Output the result in an element with id="demo"
				document.getElementById("timer").innerHTML = hours + ":" +
					minutes + ":" + seconds;



				// If the count down is over, write some text 
				if (distance < 0) {
					clearInterval(x);
					document.getElementById("timer").innerHTML = "EXPIRED";
				}
			}, 1000);

			*/
		</script>
		<script>
//Question AJAX
	<?php
			$q4="SELECT * FROM questions";
 $SQL4=$test->query($q4);
if($SQL4 ->num_rows>0){
while($row4=$SQL4->fetch_array()){
?>


	function get<?php echo $row4['module_id'];?>Question(){
	var ques = document.getElementById("Q<?php echo $row4['module_id'];?>").value;
		
	
	
	var xhttp = new XMLHttpRequest();
	//alert(xhttp);
	xhttp.onreadystatechange =function(){
	if(xhttp.readyState ==4 && xhttp.status ==200){
	document.getElementById("questionajax").innerHTML = xhttp.responseText;
	}
	};
	
	xhttp.open('GET','question.php?quesno='+ques,true);
	xhttp.send();
	}
	<?php } } ?>
		</script>
		<script>
		function saveji(){
		if (typeof arr !== 'undefined' && arr.length > 0) {
    // the array is defined and has at least one element
}
		else {
    
    arr = []; // no var here
}
		
		var quesid = document.getElementById("quesme").value;
		var checkme = document.getElementById('btnRadio5').value;
		
			
		if(document.getElementById('btnRadio1').checked ==true){
		var answer = document.getElementById('btnRadio1').value;}
		else if(document.getElementById('btnRadio2').checked ==true){
		var answer = document.getElementById('btnRadio2').value;}
		else if(document.getElementById('btnRadio3').checked ==true){
		var answer = document.getElementById('btnRadio3').value;}
		else if(document.getElementById('btnRadio4').checked ==true){
		var answer = document.getElementById('btnRadio4').value;}
		
		if(answer == checkme){
		
			arr.push(3);
			
			document.getElementById("result").innerHTML= arr;
			
		}
			else{
				
			arr.push(-1);
				//document.getElementById("questionajax").style.backgroundColor= 'Red' ;
				
			document.getElementById("result").innerHTML= arr;
		
			}
		
		
		
		<?php
		$q4="SELECT * FROM questions";
 		$SQL4=$test->query($q4);
		if($SQL4 ->num_rows>0){
		while($row4=$SQL4->fetch_array()){
		?>
		if(quesid==<?php echo $row4['module_id'];?>){
		get<?php $no=$row4['module_id']+1; echo $no;?>Question();
		}
			<?php } } ?>
			
	
		}
	</script>
		<style>
			.modal {
				background-color: rgba(0, 0, 0, 0.5);
				width: 100%;
				margin-top: 0px;
			}
			
			input {
				height: 15px;
				width: 15px;
			}
			
			input:checked {
				height: 20px;
				width: 20px;
			}

		</style>
	</head>

<body>
	
<?php
	
if(!isset($_SESSION['trueans']))
{
$_SESSION['trueans']=0;
}
	
if(isset($_POST['cal_res'])){
	$userans=$_POST['ans'];
	$crt_ans=$_POST['crt_ans'];
	if($userans == $crt_ans){
		$_SESSION['trueans']=$_SESSION['trueans']+3;
		echo "<script>document.getElementById('result').innerHTML=\$_SESSION['trueans'];</script>";
	}
	else{
		$_SESSION['trueans']=$_SESSION['trueans']-1;
		echo "<script>document.getElementById('result').innerHTML=\$_SESSION['trueans'];</script>";
	}
}
	
?>
	
	
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:none;">
			<div class="modal-dialog">
				<div class="modal-content">
				</div>
			</div>
		</div>
	<div>
			<div class="test-top-bar">
				<div class="left-box">
					<div class="time-control-details">
						<!-- <div class="test-timer-play-pause">
						<button type="button" class="btn play-pause">
						                     <i class="tb-icon tb-play"></i>
						                    <i class="tb-icon tb-pause"></i>
						                    <i class="tb-icon tb-check"></i> 
						                </button>
						                <a href="#" title="Play video" class="play"></a>
					</div> -->
					<?php
     					if($SQLMOD -> num_rows > 0) {
						while($rowMOD = $SQLMOD->fetch_array()){
                     ?>
                     

						 <div class="time-name">
					
							<div class="time" id="timer" style="display:inline;"><span class="minute" style="display:inline;"><?php echo $_SESSION['duration'];?></span>:<span class="second" style="display:inline;">00</span>
							</div>
							<span class="name"><?php echo $rowMOD['module_name'];?></span>
							<span class="timeout_message_show" style="display:none;">We are Sorry, your time is up !</span>
						</div> 
						<?php } }?>
					</div>
					<div class="calci-btn">


						<button class="btn" onclick="myFunction8()"><span>Calculator</span> <!-- <i class="tb-icon tb-calculator visible-xs"></i> --></button>


					</div>
				</div>
			
				<div class="right-box">
					<button class="btn rb-btn test-btn-style" type="button" onclick="myFunction2()">SUBMIT TEST</button>
				</div>
				
			</div>

			<div class="test-content-container">
				<div class="test-section-bar">


					<div class="langi-select">
						<a data-href="#" class="dropdown">
							<span class="lang-select-btn dropdown-toggle test-btn-style">View in: &nbsp;</span><span style="text-decoration:none; color: black;">English</span>
							<ul class="dropdown-menu question-states-menu">
								<li><span class="icon"></span>English</li>
								<li><span class="icon"></span>Hindi</li>

							</ul>
						</a>
					</div>








				</div>

				<div class="inner-container js-que-ans-view">

					<div class="content-view test-question-view">
						<!--test question view-->
						<div class="row">

							<div class="content-height-fixer question-answer-box on-test-page slim-scrollbar" id="questionajax">

									<!-- Question AJAX -->
									<?php 
									$q5="SELECT * FROM questions WHERE module_id=1";
$SQL5=$test->query($q5);

if($SQL5 ->num_rows>0){
while($row5=$SQL5->fetch_array()){
?>
<form method="post">	<div class="question-box">
		<div class="row">
			<div class="col-xs-12 qb-header">
				<div class="left-box">
					<div class="que-label ql-small">
						<div class="q-badge">
							1<span class="tb-icon tb-bookmark"></span></div>
					</div>
					<!-- <div class="que-time">
												<span class="time">00:00:09</span>
											
											</div> -->
					<div class="que-marking-scheme">
						<span class="pos">+<?php echo $row5['pos_marks'];?></span>
						<span class="neg">-<?php echo $row5['neg_marks'];?></span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 qb-body">
				<div class="complete-que-content">
					<p>
						<?php echo $row5['question'];?> </p>
				</div>
			</div>
		</div>
	</div>
	<div class="answer-box">
		<button style="display:none;" value="1" id="quesme"></button>
		<ul class="list-choices">
			<!-- ngRepeat: option in getOptions() -->
			<li class="list-option ">
				<div class="que-label ql-small">
					<input type="radio" id="btnRadio1" value="1" name="ans"/>
				</div>
				<div class="list-content">
					<p>
						<?php echo $row5['option_one'];?>
					</p>
				</div>
			</li>
			<!-- end ngRepeat: option in getOptions() -->
			<li class="list-option ">
				<div class="que-label ql-small">
					<input type="radio" id="btnRadio2" value="2" name="ans" />
				</div>
				<div class="list-content">
					<p>
						<?php echo $row5['option_two'];?>
					</p>
				</div>
			</li>
			<!-- end ngRepeat: option in getOptions() -->
			<li class="list-option ">
				<div class="que-label ql-small">
					<input type="radio" id="btnRadio3" value="3" name="ans" />
				</div>
				<div class="list-content">
					<p>
						<?php echo $row5['option_three'];?>
					</p>
				</div>
			</li>
			<!-- end ngRepeat: option in getOptions() -->
			<li class="list-option ">
				<div class="que-label ql-small">
					<input type="radio" id="btnRadio4" value="4" name="ans" />
				</div>
				<div class="list-content">
					<p>
						<?php echo $row5['option_four'];?>
					</p>
				</div>
			</li>
			<li class="list-option" style="display:none;">
				<div class="que-label ql-small">
					<input type="radio" id="btnRadio5" value="<?php echo $row5['crt_ans'];?>" name="crt_ans" />
				</div>
				<div class="list-content">
					<p>
						<?php echo $row5['crt_ans'];?>
					</p>
				</div>
			</li>
			<!-- end ngRepeat: option in getOptions() -->
		</ul>
	</div>
								</form>
									<!-- Calculator starts -->
			<?php } } ?>			
						
								
									









							</div>
						</div>
				 	</div>
				
					<div class="test-action-controls">
						<div id="result" style="display:none;"></div> 
						<button type="button" class="btn text-uppercase" onclick="document.getElementById('btnRadio1').checked = false;document.getElementById('btnRadio2').checked = false;document.getElementById('btnRadio3').checked = false;document.getElementById('btnRadio4').checked = false" style="font-size: 16px;color:#00bcd4;">
                        Clear Selection
                </button>
                <button type="button" class="btn btn-test-primary text-uppercase pull-right" name="cal_res" onclick="saveji()" style="margin-right:10px;">
                        Save &amp; Next
                        </button>
						
                        
					</div>
				
				</div>
			</div>





			
				<div class="test-sidebar" >

					<ul class="list-unstyled nav-sections list-view-deactive">

						<li>
							<button type="button" name="gridView" class="btn" style="display:none;">Grid View</button>
						</li>
						<!-- <li>
					<button type="button" name="listView" class="btn">List View</button>
				</li> -->



					</ul>
					<div class="section-question-list slim-scrollbar" >
						<ul class="accordion">

							<li class="course-accordion each-section ">
								<div class="accordion-head header active">
									<div class="section-details">
									<?php
     if($SQLmod -> num_rows > 0) {
     while($rowmod = $SQLmod->fetch_array()){
                         ?>
										<span class="tb-icon" style="font-size:30px">		
									<?php echo $rowmod['module_name'];?>
								</span>

<?php } }?>
										
										<div>&nbsp;</div>
										<div class="comp-status">
											<span style="width: 100%;"></span>
										</div>
									</div>
								</div>
								<div class="accordion-content body" style="display: none;">
									<div class="row">
										<div class="col-xs-12">

											<ul class="question-list">
												<!-- ngRepeat: question in section.questions track by $index -->





												<?php
											if($SQL3 ->num_rows>0){
											while($row3=$SQL3->fetch_array()){
											?>


													<li class="que-label ql-large js-que-current" onClick="get<?php echo $row3['module_id'];?>Question()" id="Q<?php echo $row3['module_id'];?>" value="<?php echo $row3['module_id'];?>">
														<div class="q-badge">
															<?php echo $row3['module_id']; ?><span class="tb-icon tb-bookmark"></span>
														</div>
														<div class="que-title">
															<p>
																<?php echo $row3['question'];?>
															</p>
														</div>
													</li>

													<!-- end ngRepeat: question in section.questions track by $index -->

													<?php	}} ?>
														<!-- end ngRepeat: question in section.questions track by $index -->

											</ul>
										
										</div>

									</div>
								</div>
							</li>
							<!-- end ngRepeat: section in test.sections track by $index -->
						</ul>
					</div>
					<div class="quesList-inst">
					

						<a data-href="#" onclick="myFunction6()">Instructions</a>
					</div>
				</div>

		

			<div class="scope">
				<div class="modal" id="readInstructions" tabindex="-1" role="dialog" aria-labelledby="readInstructionsLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-md">
						<div class="modal-content read-instructions-modal">
							<div class="modal-header text-center">
								<h4 class="modal-title">Instructions for (Course Name)</h4>
								<div class="pull-top">
									<button class="btn cross" id="instructionsClose" onclick="myFunction5()">X</button>
								</div>
							</div>
							<div class="modal-body" style="max-height: calc(100vh - 224px); overflow-y: auto">
								<div class="row">
									<div class="col-xs-12">
										<div class="info-text">
											<span class="ng-binding">Duration:30 mins</span>
											<span class="pull-right ">Marks:100 </span>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="instructions">
											<h6>Read the following instructions carefully:</h6>
											<ol start="1">
												<!-- ngRepeat: ins in instructionsJSON.instructionsArr -->
												<li ng-repeat="ins in instructionsJSON.instructionsArr" class="ng-scope"><span ng-bind-html="parseHtml(ins.value)" class="ng-binding"><p dir="ltr"><span style="font-family:arial">This test comprises multiple-choice questions (MCQs).</span></p>
													</span>
												</li>
												<!-- end ngRepeat: ins in instructionsJSON.instructionsArr -->
												<li ng-repeat="ins in instructionsJSON.instructionsArr" class="ng-scope"><span ng-bind-html="parseHtml(ins.value)" class="ng-binding"><p dir="ltr"><span style="font-family:arial">Each question will have only 1 of the available options as the correct answer.</span></p>
													</span>
												</li>
												<!-- end ngRepeat: ins in instructionsJSON.instructionsArr -->
												<li ng-repeat="ins in instructionsJSON.instructionsArr" class="ng-scope"><span ng-bind-html="parseHtml(ins.value)" class="ng-binding"><p dir="ltr">1&nbsp;<span style="font-family:arial">mark(s) will be awarded for each correct answer and 0.25</span>&nbsp;<span style="font-family:arial">mark(s) will be deducted for every wrong answer.</span></p>
													</span>
												</li>
												<!-- end ngRepeat: ins in instructionsJSON.instructionsArr -->
												<li ng-repeat="ins in instructionsJSON.instructionsArr" class="ng-scope"><span ng-bind-html="parseHtml(ins.value)" class="ng-binding"><p dir="ltr"><span style="font-family:arial">N</span>o&nbsp;<span style="font-family:arial">marks will be deducted for un-attempted questions.</span></p>
													</span>
												</li>
												<!-- end ngRepeat: ins in instructionsJSON.instructionsArr -->
												<li ng-repeat="ins in instructionsJSON.instructionsArr" class="ng-scope"><span ng-bind-html="parseHtml(ins.value)" class="ng-binding"><p dir="ltr"><span style="font-family:arial">You are advised not to close the browser window before submitting the test.</span></p>
													</span>
												</li>
												<!-- end ngRepeat: ins in instructionsJSON.instructionsArr -->
												<li ng-repeat="ins in instructionsJSON.instructionsArr" class="ng-scope"><span ng-bind-html="parseHtml(ins.value)" class="ng-binding"><p dir="ltr"><span style="font-family:arial">In case the test does not load completely or becomes un-responsive, click on browser's refresh button to reload.</span></p>
													</span>
												</li>
												<!-- end ngRepeat: ins in instructionsJSON.instructionsArr -->
												<li ng-repeat="ins in instructionsJSON.instructionsArr" class="ng-scope"><span ng-bind-html="parseHtml(ins.value)" class="ng-binding"><span style="font-family:arial">You can write this test only once, so for best results do not try to guess answers.</span></span>
												</li>
												<!-- end ngRepeat: ins in instructionsJSON.instructionsArr -->
											</ol>
										</div>
										<div class="row more-about-interface">
											Know more about the interface
											<div class="pull-right">
												<span class="plus" id="moreInstructions" onclick="myFunction7()">+</span>
												<!-- <span class="minus">-</span> -->
											</div>
										</div>
										<!-- ngIf: instructionsJSON.isGateExam -->

										<div class="other-instructions  " id="instructionsMore" style="display: none;">
											<div class="row">
												<div class="col-xs-12">
													<h5> General Instructions: </h5>
													<ol start="1">
														<li>
															<p> The clock will be set at the server. The countdown timer at the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the examination will end by itself. You need not terminate the examination or submit your paper. </p>
														</li>
														<li>
															<p> The Question Palette displayed on the right side of screen will show the status of each question using one of the following symbols: </p>
															<ul class="que-legends">
																<li>
																	<div class="que-label ql-large js-que-skipped">
																		<div class="q-badge"></div>
																	</div> You have not answered the question</li>
																<li>
																	<div class="que-label ql-large js-que-unseen">
																		<div class="q-badge"></div>
																	</div> You have not visited the question yet</li>
																<li>
																	<div class="que-label ql-large js-que-attempted">
																		<div class="q-badge"></div>
																	</div> You have answered the question</li>
																<li>
																	<div class="que-label ql-large js-que-skipped js-que-bookmarked">
																		<div class="q-badge"><span class="tb-icon tb-bookmark"></span></div>
																	</div> You have NOT answered the question, but have marked the question for review</li>
																<li>
																	<div class="que-label ql-large js-que-attempted js-que-bookmarked">
																		<div class="q-badge"><span class="tb-icon tb-bookmark"></span></div>
																	</div> You have answered the question, but marked it for review</li>
															</ul>
														</li>
													</ol>
													<p> The <b>Mark For Review </b> status for a question simply indicates that you would like to look at that question again. If a question is answered, but marked for review, then the answer will be considered for evaluation unless the status is modified by the candidate. </p>

													<b> Navigating to a Question : </b>
													<ol start="3">
														<li>
															<p> To answer a question, do the following: </p>
															<ol>
																<li> Click on the question number in the Question Palette at the right of your screen to go to that numbered question directly. Note that using this option does NOT save your answer to the current question. </li>
																<li> Click on <b> Save &amp; Next </b> to save your answer for the current question and then go to the next question. </li>
																<li> Click on <b> Mark for Review &amp; Next </b> to save your answer for the current question and also mark it for review, and then go to the next question. </li>
															</ol>
														</li>
													</ol>
													<p> Note that your answer for the current question will not be saved, if you navigate to another question directly by clicking on a question number <span> without saving </span> the answer to the previous question.</p>
													<p> You can view all the questions by clicking on the <b> Question Paper </b> button. <span style="color:#ff0000">This feature is provided, so that if you want you can just see the entire question paper at a glance. </span> </p>
													<h5> Answering a Question : </h5>
													<ol start="4">
														<li>
															<p> Procedure for answering a multiple choice (MCQ) type question: </p>
															<ol>
																<li> Choose one answer from the options given below the questions. You may click on the entire option box to select your answer </li>
																<li> To deselect your chosen answer, click on the bubble of the chosen option again or click on the <b> Clear Response </b> button </li>
																<li> To change your chosen answer, click on the bubble of another option. </li>
																<li> To save your answer, you MUST click on the <b> Save &amp; Next </b> </li>
															</ol>
														</li>

														<li>
															<p> Procedure for answering a numerical answer type question : </p>
															<ol>
																<li> To enter a number as your answer, use the virtual numerical keypad. </li>
																<li> A fraction (e.g. -0.3 or -.3) can be entered as an answer with or without "0" before the decimal point. <span style="color: red">As many as four decimal points, e.g. 12.5435 or 0.003 or -932.6711 or 12.82 can be entered. </span> </li>
																<li> To clear your answer, click on the <b> Clear Response </b> button </li>
																<li> To save your answer, you MUST click on the <b> Save &amp; Next </b> </li>
															</ol>
														</li>

														<li>
															<p> To mark a question for review, click on the <b> Mark for Review &amp; Next </b> button. If an answer is selected (for MCQ) entered (for numerival answer type) for a question that is <b> Marked for Review </b> , that answer will be considered in the evaluation unless the status is modified by the candidate.
															</p>
														</li>

														<li>
															<p> To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question. </p>
														</li>

														<li>
															<p> Note that ONLY Questions for which answers are <b> saved </b> or <b> marked for review after answering </b> will be considered for evaluation. </p>
														</li>

														<li>
															<p> Sections in this question paper are displayed on the top bar of the screen. Questions in a Section can be viewed by clicking on the name of that Section. The Section you are currently viewing will be highlighted. </p>
														</li>

														<li>
															<p> After clicking the <b> Save &amp; Next </b> button for the last question in a Section, you will automatically be taken to the first question of the next Section in sequence. </p>
														</li>

														<li>
															<p> You can move the mouse cursor over the name of a Section to view the answering status for that Section. </p>
														</li>
													</ol>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>



				<div class="scope">
				<div class="modal" id="showCalculator" tabindex="-1" role="dialog" aria-labelledby="readInstructionsLabel" aria-hidden="true" style="display: none;">
						<div id="calculator" style="display:block;">
										<!-- Screen and clear key -->
										<div class="top">
											<span class="clear">C</span>
											<div class="screen"></div>
										</div>

										<div class="keys">
											<!-- operators and other keys -->
											<span>7</span>
											<span>8</span>
											<span>9</span>
											<span class="operator">+</span>
											<span>4</span>
											<span>5</span>
											<span>6</span>
											<span class="operator">-</span>
											<span>1</span>
											<span>2</span>
											<span>3</span>
											<span class="operator">÷</span>
											<span>0</span>
											<span>.</span>
											<span class="eval">=</span>
											<span class="operator">x</span>
											<button type="button" class="btn btn-success btn-lg btn-block text-uppercase" onclick="myFunction()">Close</button>
										</div>
									</div>
									<script src="./js/calc.js"></script>
					</div></div>


			<div class="bootbox modal fade bootbox-confirm in" tabindex="-1" style="display:none" id="submit-test">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body"><button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;">×</button>
							<div class="bootbox-body">Are you sure you want to submit the test?</div>
						</div>
						<div class="modal-footer"><button data-bb-handler="cancel" type="button" class="btn btn-gray-1" onclick="myFunction3()">No</button><button data-bb-handler="confirm" type="button" class="btn btn-test-primary" onclick="myFunction4()">Yes</button></div>
					</div>
				</div>
			</div>
		

						<form method="post">



			<div id="summaryModal" class="modal in" tabindex="-1" role="dialog" aria-labelledby="summaryModalLabel" aria-hidden="true" style="display:none;">
				<div class="modal-dialog test-summary-modal">
					<div class="modal-content submit-test">
						<div class="modal-body clearfix">
							<div class="row">
								<div class="col-xs-12 intro-text">
									<h2 class="title">My Test Summary</h2>
									<span>Answers are saved Successfully</span>
								</div>
								<div class="col-xs-12 summary-container">
									<div class="summary-table">
										<div class="row">
											<div class="col-xs-12 summary-each-section head">
												<div class="content col-xs-4">Section</div>
												<!-- <div class="content col-xs-2">Attempted</div>
												<div class="content col-xs-2">Skipped</div>
												<div class="content col-xs-2">Bookmarked</div>
												<div class="content col-xs-2">Unseen</div> -->
												<div class="content col-xs-4">Total Questions</div>
												<div class="content col-xs-4">Total Marks</div> -->
												
											</div>
											<!-- ngRepeat: section in test.sections track by $index -->
											<div class="col-xs-12 summary-each-section body">
												<div class="content col-xs-4">&nbsp;</div>
												<!-- <div class="content col-xs-2">0</div>
												<div class="content col-xs-2">1</div>
												<div class="content col-xs-2">0</div>
												<div class="content col-xs-2">14</div> -->
												<div class="content col-xs-4">&nbsp;</div>
												<div class="content col-xs-4">&nbsp;</div>
																							
											</div>
											<!-- end ngRepeat: section in test.sections track by $index -->
											<div class="col-xs-12 summary-each-section footer">
												<div class="content col-xs-4">Total</div>
												<!-- <div class="content col-xs-2">0</div>
												<div class="content col-xs-2">1</div>
												<div class="content col-xs-2">0</div>
												<div class="content col-xs-2">15</div> -->
												<div class="content col-xs-4"><?php $q11="SELECT * FROM questions";
$SQL11=$test->query($q11);
$max=$SQL11->num_rows; echo $max-1;?></div>
										<div class="content col-xs-4" name="maxmark" id="maxmarks">0</div> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer pad-0">
							<!--   <button class="btn btn-block btn-lg btn-test-primary text-uppercase" data-dismiss="modal" type="button" >Resume Test</button> -->
							<a class="btn btn-block btn-lg btn-test-primary text-uppercase mar-t0" href="../index.php" name="continue">Continue</a>
						</div>
									</div>
					
					<!-- <div class="modal-content-bottom mar-v32">
            <div class="modal-footer">
                <div class="text-center">
                    <a href="#" class="btn btn-sm btn-link-white">Go back to My Tests</a>
                </div>
            </div>
        </div> -->
				</div>
			</div>
</form>
			
		</div>


<?php	
	if(isset($_POST['continue'])){
		$marks=$_POST['maxmark'];
		$userans='INSERT INTO useranswer VALUES ("'.session_id().'","'.$_SESSION['user_name'].'",$marks)';
		$CONT=$test->query($userans);
		header('Location:../index.php');
	}
?>


	</body>

	</html>
