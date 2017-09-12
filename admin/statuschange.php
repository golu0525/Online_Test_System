<?php

require_once 'dbconfig.php';

if (isset($_GET['module_id'])) {
  $module_id=$_GET['module_id'];
  $module_name=$_GET['module_name'];
  $status=$_GET['status'];
  $q="UPDATE modules SET status='$status' WHERE module_id='$module_id'";

  $r=$test -> query($q);
  if($r){
    header('Location:panel.php');
  }

}

 ?>
