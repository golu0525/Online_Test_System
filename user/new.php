<?php
require_once 'dbconfig.php';


  $q="SELECT * FROM modules WHERE module_id=2";
  $SQL=$test ->query($q);
	


                  
       if($SQL -> num_rows > 0) {
       while($row = $SQL->fetch_array()){
                  $modulehours=5+$row['test_time_hrs'];
                  $modulemins=30+$row['test_time_mins'];
                  }
                  }
                  

if($modulemins>59)
{
	$mins=$modulemins-60;
	$hours=$modulehours+1;
	$secs=59;
}
else{
	$hours=$modulehours;
	$mins=$modulemins;
	$secs=00;
}
//echo $hours;
//echo $mins;

 ?>
 






<html>
	<head>
		<script>
			//timer countdown
	// Set the date we're counting down to
	var monthnum = new Date().getMonth();
	var month = new Array();
	month[0] = "January";
	month[1] = "February";
	month[2] = "March";
	month[3] = "April";
	month[4] = "May";
	month[5] = "June";
	month[6] = "July";
	month[7] = "August";
	month[8] = "September";
	month[9] = "October";
	month[10] = "November";
	month[11] = "December";
var moduleMonth = month[monthnum];
var moduleDate = new Date().getDate();
var moduleYear = new Date().getFullYear();
var ref =new Date("January 01,1970,05:30:00").getTime();
var ref2 =new Date("January 01,1970,<?php echo $hours;?>:<?php echo $mins;?>:<?php echo $secs;?>").getTime();
var countDate = (ref2 - ref);
			
var now = new Date().getTime();
var CountDown= countDate + now;

    


// Update the count down every 1 second
var x = setInterval(function() {

   // Get todays date and time
    var now = new Date().getTime();
	
    
    // Find the distance between now an the count down date
    var distance = (CountDown - now);
	
    
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
document.getElementById("timer").innerHTML = hours + ":" +
					minutes + ":" + seconds;
	
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);
	
	
	</script>
	
	</head>
	<div id="timer"></div>
</html>