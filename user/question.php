<?php
require_once 'dbconfig.php';
if(isset($_GET['quesno'])){
$quesno = $_GET['quesno'];

}
$q10="SELECT * FROM questions";
$SQL10=$test->query($q10);
$maxquesno=$SQL10->num_rows;
$q5="SELECT * FROM questions WHERE module_id=$quesno";
$SQL5=$test->query($q5);

if($maxquesno>$quesno){
if($SQL5 ->num_rows>0){
while($row5=$SQL5->fetch_array()){
?>
<form method="post">
	<div class="question-box">
		<div class="row">
			<div class="col-xs-12 qb-header">
				<div class="left-box">
					<div class="que-label ql-small">
						<div class="q-badge">
							<?php echo $quesno; ?><span class="tb-icon tb-bookmark"></span></div>
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
						<?php //echo $maxquesno;?>
				</div>
			</div>
		</div>
	</div>
	<div class="answer-box">
	<button style="display:none;" value="<?php echo $quesno;?>" id="quesme"></button>
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
			<li class="list-option" style="display:none; ">
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
	
<?php } } } else {
	echo "Submit your test now!";
}?>
	
	

