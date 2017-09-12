<?php
require_once 'dbconfig.php';
session_start();


$q="SELECT * FROM modules WHERE module_id=2";
  $SQL=$test ->query($q);
  if($SQL -> num_rows > 0) {
  while($row = $SQL->fetch_array()){
  $modulehours=$row['test_time_hrs'];
  $modulemins=$row['test_time_mins'];
  }}
	  $_SESSION['duration']=$modulemins;
	  $_SESSION['start_time']= date('Y-m-d H:i:s');
	  $end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION['start_time'])));
	  $_SESSION['end_time']=$end_time;
	  ?>
	  <script type="text/javascript">
	window.location="usertest.php";
</script>
?>