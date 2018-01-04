<?php

require_once 'dbconfig.php';
session_start();
if(isset($_POST['btnsub'])){
  $admin_name=$test -> real_escape_string($_POST['admin_name']);
  $password=$test -> real_escape_string($_POST['password']);
  $q= "SELECT * FROM admin_login WHERE admin_name='$admin_name' AND password='$password'";
  $SQL=$test -> query($q);
  //print_r($SQL);
  $count= $SQL -> num_rows;
    if($count>0)
    {
      $row = $SQL -> fetch_array();
      $_SESSION['admin_name'] = $row['admin_name'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['id'] = $row['id'];

      //$username=$_SESSION['name'];
      header('Location:panel.php');

    }
    else{
      echo "ACCESS DENIED";
    }

}
if(isset($_POST['chkuser'])){
  $admin_name=$test -> real_escape_string($_POST['username']);
  $q1= "SELECT * FROM admin_login WHERE admin_name='$admin_name'";
  $S=$test -> query($q1);
  $counti= $S -> num_rows;
    if($counti==1)
    {
      header('Location:forgot.php');
    }
    else{
      header('Location:admin_login.php');
    }
  }

 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <style media="screen">
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

    </style>

  </head>
  <body>

      <form method="post" class="div1 div2" name="login_form" style="display: block;">
          <fieldset>
          <legend>Log in<a href="" target="documentation"></a></legend><div class="item">
                  <label for="input_username">Username:</label>
                  <input name="admin_name" id="input_username" value="" size="20" placeholder="Enter Username" class="textfield" type="text">
              </div>
              <div class="item">
                  <label for="input_password">Password:&nbsp;</label>
                  <input name="password" id="input_password" value="" size="20" placeholder="********" class="textfield" type="password">
              </div>    <input name="server" value="1" type="hidden"></fieldset>
          <fieldset class="tblFooters">
              <input value="Login" class="button button1" name="btnsub" id="input_go" type="submit"></fieldset>
                <h5><a href="#" id="myBtn">Forgot Password?</a></h5>
                <div id="overlay"></div>
                <!-- The forgot -->
<div id="myModal" class="forgot">

<!-- forgot content -->
<div class="forgot-content">
  <div class="forgot-header">
    <span class="close">&times;</span>
    <h2>forgot Password?</h2>
  </div>
  <div class="forgot-body">
    <form class="" method="post">
      <div class="item">
          <label for="input_password">Username&nbsp;</label>
          <input name="username" id="input_username" value="" size="20" placeholder="verify username" class="textfield" type="text">
      </div>    <input name="server" value="1" type="hidden">

      <div class="foote">
      </a><input type="submit" name="chkuser" value="ok">
      </div>
    </form>
  </div>
</div>
</div>
    </form>

              <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var overlay = document.getElementById("overlay");
// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}
overlay.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        overlay.style.display = "none";
    }
}
</script>


  </body>
</html>
