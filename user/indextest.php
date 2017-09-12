<?php
require_once 'dbconfig.php';
session_start();


if(isset($_GET['module_id']))
{

$module_id=$_GET['module_id'];
}
if(!isset($_SESSION['user_name']))
{
	header("Location:../index.php");
}

$qu = "SELECT * FROM modules WHERE module_id='$module_id'";
$SQL = $test ->query($qu);
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/style.css">
	<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>
</head>

<body>
<?php
     if($SQL -> num_rows > 0) {
     while($row = $SQL->fetch_array()){
                         ?>

		<div class="modal in" id="readInstructions" tabindex="-1" role="dialog" aria-labelledby="readInstructionsLabel" aria-hidden="true" style="display:block; background-color: rgba(0,0,0,0.5);">
			<div class="modal-dialog modal-md">
				<div class="modal-content read-instructions-modal">
				
	
					<div class="modal-header text-center">
						<h4 class="modal-title">Instructions for <?php echo $row['module_name'];?></h4>
					</div>
					<div class="modal-body" style="max-height: calc(100vh - 224px); overflow-y: auto">
						<div class="row">
							<div class="col-xs-12">
								<div class="info-text">
									<span class="time">Duration: 0<?php echo $row['test_time_hrs'];?>:<?php echo $row['test_time_mins'];?> </span>
									<span class="pull-right">Marks: <?php echo $row['maxmarks'];?></span>
								</div>
							</div>
							
							<div class="col-xs-12">
								<div class="instructions">
									<h6>Read the following instructions carefully:</h6>
									<ol start="1">

										<li class="scope"><span><p dir="ltr"><span style="font-family:arial">This test comprises multiple-choice questions (MCQs).</span></p>
											</span>
										</li>

										<li class="scope"><span><p dir="ltr"><span style="font-family:arial">Each question will have only 1 of the available options as the correct answer.</span></p>
											</span>
										</li>

										<li class="scope"><span><p dir="ltr">1&nbsp;<span style="font-family:arial">mark(s) will be awarded for each correct answer and 0.25</span>&nbsp;<span style="font-family:arial">mark(s) will be deducted for every wrong answer.</span></p>
											</span>
										</li>

										<li class="scope"><span><p dir="ltr"><span style="font-family:arial">N</span>o&nbsp;<span style="font-family:arial">marks will be deducted for un-attempted questions.</span></p>
											</span>
										</li>

										<li class="scope"><span>
										<p dir="ltr"><span style="font-family:arial">You are advised not to close the browser window before submitting the test.</span></p>
											</span>
										</li>


										<li class="scope"><span>
										<p dir="ltr"><span style="font-family:arial">In case the test does not load completely or becomes un-responsive, click on browser's refresh button to reload.</span></p>
											</span>
										</li>

										<li class="scope"><span>
										<p dir="ltr"><span style="font-family:arial">You can write this test only once, so for best results do not try to guess answers.</span></p>
											</span>
										</li>

									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="modal-footer" style="padding: 0px; margin-left: 35%; margin-right: 35%; border-top: 0px solid #e5e5e5;">
				<a href="./usertest.php?module_id=<?php echo $module_id;?>">
			<button type="button" class="btn btn-success btn-lg btn-block text-uppercase" style="width:100%; border:0;">Start Test</button>
					</a>
		</div>
			

	<div class="modal-content-bottom mar-v8">
		<div class="modal-footer">

			<div class="text-center" >
				<a href="../index.php" class="btn btn-sm btn-link" style="font-size: 14px; color: white;">Go back to Home</a>
			</div>
		</div>
	
	</div>

		</div>

	


<?php } }?>

</body>


</html>
