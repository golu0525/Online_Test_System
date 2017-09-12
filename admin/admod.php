<?php
require_once 'dbconfig.php';
if(isset ($_POST['btnsubmit'])){
//  print_r($_FILES); 

  $file_name = $_FILES['file']['name'];
  $tmp = $_FILES['file'];
  $path = "uploads/".$file_name;
  $isUploaded = move_uploaded_file($tmp, $path);
  print_r($isUploaded);
	$mode_name=$test -> real_escape_string($_POST['txtModule']);
	//$mode_dir=$MySQLiconn -> real_escape_string($_POST['txtDir']);
	$mode_desc=$test -> real_escape_string($_POST['txtDesc']);
	$query="INSERT INTO module VALUES(NULL,'$mode_name','$path','$mode_desc')";
	$SQL=$test -> query($query);
	if(!$SQL)
	{
		echo "error";
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
	<h1>ADMIN PANNEL<h1>
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
      <label class="control-label col-sm-2">Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtModule"  name="txtDesc" >
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2">Upload Image:</label>
      <div class="col-sm-10">
        <input type="file"  id="txtFile"  name="file"  accept="image/*">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Add Module" name="btnsubmit">
      <a href="facebook.com">
        <input type="submit" class="btn btn-default" value="View Module List" name="btnRedirect">
      </a>
      </div>
    </div>
  </form>
  <?php if(isset($msg)) echo $msg; ?>
</body>
</html>
