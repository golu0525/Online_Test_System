<?php
require_once 'dbconfig.php';
session_start();

//if(!isset($_SESSION['admin_name'])){
//    header('Location:admin_login.php');
//}

if(isset ($_POST['btnsubmit'])){
	$mode_name=$test -> real_escape_string($_POST['txtModule']);
	$mode_hrs=$test -> real_escape_string($_POST['txthrs']);
	$mode_mins=$test -> real_escape_string($_POST['txtmins']);
	$mode_dir=$test -> real_escape_string($_POST['txtFile']);
	$query="INSERT INTO modules VALUES(NULL,'$mode_name',$mode_hrs,$mode_mins,1,'$mode_dir')";
	$SQL=$test -> query($query);
	if(!$SQL)
	{
		echo $SQL->error;
	}
	else
	{
		echo "Module added!!!";
	}
}
?>
<html>
<head>
	<title>Add Your Module</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="container-fluid">
	<div>
		<h1>TestSprint</h1>
		<h2>Welcome <?php $changname=$_SESSION['admin_name']; echo $changname; ?></h2>
	</div>
     <h3 align="center">Add new module</h3>

     <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
 <form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2">Module Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtModule"  name="txtModule" >
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Max Marks</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="txtModule"  name="txthrs" >
      </div>
    </div>
		<div class="form-group">
		<label class="control-label col-sm-2">Date</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" id="txtModule"  name="txtmins" >
		</div>
	</div>
     <div class="form-group">
      <label class="control-label col-sm-2">Upload Image:</label>
      <div class="col-sm-10">
        <input type="text"  id="txtFile"  name="txtFile" >
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Add Module" name="btnsubmit">
      </div>
    </div>
  </form>
</body>
</html>
