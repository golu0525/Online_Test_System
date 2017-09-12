<?php
require_once 'dbconfig.php';


if(isset ($_POST['btnsubmit'])){
	$full_name=$test -> real_escape_string($_POST['full_name']);
	$institute=$test -> real_escape_string($_POST['institute']);
	$user_name=$test -> real_escape_string($_POST['user_name']);
	$password=$test -> real_escape_string($_POST['user_password']);
  $mailid=$test -> real_escape_string($_POST['user_email']);
  $dob=$test -> real_escape_string($_POST['datepick']);

	$reg="INSERT INTO user_data VALUES (null,'$full_name','$institute','$user_name','$password','$mailid','$dob',1,'$dob')";
	$reigs=$test -> query($reg);
	if(!$reigs)
{
   echo "error";
}
	else{
		header('Location:index.php');
	}
}
?>


<!DOCTYPE html>

<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign Up Form</title>

      <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="./assets/css/style.css">
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
            <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
            <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
            <!-- Javascript -->
            <script>
               $(function() {
                  $( "#datepicker-12" ).datepicker();
                  $( "#datepicker-12" ).datepicker("setDate", "10w+1");
               });
            </script>
  </head>
  <body>

    <form method="post" name="myForm" onsubmit="return validateForm()">

      <h1>Sign Up</h1>

      <fieldset>

        <label for="name">Name:</label>
        <input type="text" id="name" name="full_name">
        <label for="name">Institute:</label>
        <input type="text" id="institute" name="institute">
        <label for="name">Username:</label>
        <input type="text" id="name" name="user_name">
        <label for="password">Password:</label>
        <input type="password" id="password" name="user_password">
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email">
        <label for="DOB">DOB:</label>

      <p>Enter Date: <input type = "text" name="datepick" id = "datepicker-12"></p>



      <button type="submit" name="btnsubmit" >Sign Up</button>
    </form>
    <script>
    function validateForm() {
        var x = document.forms["myForm"]["full_name"].value;
        if (x == "") {
            alert("Name must be filled out");
            return false;
        }
        var xy = document.forms["myForm"]["institute"].value;
        if (xy == "") {
            alert("Name your institute");
            return false;
        }
        var y = document.forms["myForm"]["user_name"].value;
        if (y == "") {
            alert("enter your username");
            return false;
        }
        var z = document.forms["myForm"]["user_password"].value;
        if (z == "") {
            alert("password???");
            return false;
        }
        var xxz = document.forms["myForm"]["user_email"].value;
        if (xxz = "") {
            alert("Enter your password");
            return false;
        }
        var xzc = document.forms["myForm"]["user_dob"].value;
        if (xzc == "") {
            alert("enter your dob");
            return false;
        }
    }
    </script>
  </body>
</html>
