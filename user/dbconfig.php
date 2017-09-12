<?php

define('_HOST_NAME', 'localhost');
define('_DATABASE_USER_NAME', 'root');
define('_DATABASE_PASSWORD', 'abhi');
define('_DATABASE_NAME', 'testsprint');
$test=new MySQLi(_HOST_NAME, _DATABASE_USER_NAME, _DATABASE_PASSWORD, _DATABASE_NAME);
//print_r($mysqliconn);
if ($test -> errno) {
  echo $test -> error;
}
else {

}
 ?>
