<?php

require_once 'dbconfig.php';
if (isset($_GET['question'])) {
  $qword=$_GET['question'];
  $word="DELETE FROM questions WHERE question='$qword'";
  $de=$test -> query($word);
  if($word){
    header('Location:panel.php');
  }


  else{echo "error in deletion";
  }

  }

else
{
    echo "question is missing";
}


?>
