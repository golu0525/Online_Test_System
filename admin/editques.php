<?php
require_once 'dbconfig.php';
session_start();

if(!isset($_SESSION['admin_name'])){
    header('Location:admin_login.php');
}

if(isset ($_POST['btnsubmit'])){
  $txtmodname=$test -> real_escape_string($_POST['txtmodname']);
	$txtnewques=$test -> real_escape_string($_POST['txtnewques']);
	$txtoptone=$test -> real_escape_string($_POST['txtoptone']);
	$txtopttwo=$test -> real_escape_string($_POST['txtopttwo']);
	$txtoptthree=$test -> real_escape_string($_POST['txtoptthree']);
  $txtoptfour=$test -> real_escape_string($_POST['txtoptfour']);
  $txtposmarks= $_POST['txtposmarks'];
  $txtnegmarks= $_POST['txtnegmarks'];
  $txtcorrect= $_POST['txtcorrect'];




	$query="INSERT INTO questions VALUES(NULL,'$txtmodname','$txtnewques','$txtoptone','$txtopttwo','$txtoptthree','$txtoptfour',$txtposmarks,$txtnegmarks,$txtcorrect)";
	$SQL=$test -> query($query);
	if(!$SQL)
{
  echo $SQL -> error;
}
	else{
		header('Location:panel.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>New Questions</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style media="screen">
  .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 10px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 4px 2px;
      cursor: pointer;
  }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="button" style="float: right;">
    <a href="panel.php" style="color: white;">Back</a>
  </div>
	<div>
		<h1>TestSprint</h1>
		<h2>Welcome <?php $changname=$_SESSION['admin_name']; echo $changname; ?></h2>
	</div>
     <h3 align="center">Add new Questions</h3>

     <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
 <form class="form-horizontal"  name="myForm" method="post">
   <div class="form-group">
     <label class="control-label col-sm-2">Module Name</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" id="txtModule"  name="txtmodname" required/>
     </div>
   </div>

    <div class="form-group">
      <label class="control-label col-sm-2"> New Question:</label>
      <div class="col-sm-10">
        <textarea rows="10" class="form-control" id="txtModule"  name="txtnewques" >Add New Ques...</textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Option One:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtModule"  name="txtoptone" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Option Two:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtModule"  name="txtopttwo" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Option Three:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtModule"  name="txtoptthree" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Option Four:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtModule"  name="txtoptfour" required/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Positive Marks:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtModule"  name="txtposmarks" value="3">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Negative Marks:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtModule"  name="txtnegmarks" value="1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Correct answer:</label>
      <div class="col-sm-10">
        <!--<input type="" class="form-control" id="txtModule"  name="txtModule" >-->
        <select name="txtcorrect" style="background-color: #99FF66">
          <option value="hide">Correct option</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Add Question" onclick="validateForm()" name="btnsubmit">
      </div>
    </div>
  </form>
  <script>
  function validateForm() {
      var x = document.forms["myForm"]["txtcorrect"].value;
      if (x == "hide") {
          alert("Choose any one");
          return false;
      }
  }
  </script>
</body>
</html>
