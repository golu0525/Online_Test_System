
<?php
require_once 'dbconfig.php';
if (isset($_POST['btnsubmit'])) {
  $newpass=$_POST['txtnewpassword'];
  $confirm=$_POST['txtconfirm'];
  $new="UPDATE admin_login SET password = '$newpass' WHERE admin_name='admin'";
  if($test -> query($new))
  {

  header('Location:admin_login.php');
  }
  else{
    echo "Access Denied";
  }
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forgot Password</title>
    <style type="text/css">
    body{background-color: #C0C0C0;
    }

.abhi{
  background: #eceeee;
  border: 1px solid #42464b;
  border-radius: 6px;
  height: 257px;
  margin: 20px auto 0;
  width: 400px;
text-align: center;
height:400px;
}
input[type=text], input[type=password] {
       width: 90% ;
       padding: 20px 20px;
       margin: 10px 0;
       display: inline-block;
       border: 1px solid #ccc;
       box-sizing: border-box;
       color: black;
   }
      .button {
       background-color:#00bcd4;
       color: white;
       padding: 14px 20px;
      margin-top:20px;
       border: none;
       cursor: pointer;
       width: 200px;
       font-size: 20px;
   }
   .button:hover {
       opacity: 0.8;
   }
 @media screen and (max-width: 300px) {
       span.psw {
          display: block;
          float: none;
       }

}
    </style>
  </head>
  <body>
    <div class="abhi" >

      <h3>Change Password</h3><hr>


        <form method="post">

           <input type="password" name="txtnewpassword" class="psw" placeholder="New Password" required/><br>
            <input type="password" name="txtconfirm" placeholder="Confirm Password" required/><br>
            <input type="submit" class="button" name="btnsubmit" value="Confirm Password">
          </div>

        </form>
  </body>
</html>
