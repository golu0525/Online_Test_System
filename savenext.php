<?php

require_once 'dbconfig.php';
if(isset($_GET['quesno'])){
$quesno = $_GET['quesno']+1;

}

?>
                       
                       
<button type="button" class="btn btn-test-primary text-uppercase pull-right save-next" onclick="Save<?php echo $quesno;?>ji()">
Save &amp; Next
</button>