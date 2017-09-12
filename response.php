<?php
require_once 'dbconfig.php';

if(isset($_GET['qname'])){

$qname=$_GET['qname'];
$qkey=$_GET['qkey'];
}

$q5="SELECT * FROM user_data WHERE user_name='$qname' and upassword='$qkey' and status=1";
$SQL5=$test->query($q5);

if($SQL5 ->num_rows<1){
echo "Incorrect Credentials!";
}
else { 
echo "Login Now!";
} ?>
	