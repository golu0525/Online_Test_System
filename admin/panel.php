<?php

require_once 'dbconfig.php';
session_start();



$q2="SELECT * FROM modules";
$SQL=$test -> query($q2);

$res="SELECT * FROM result";
$rst= $test->query($res);
$rs= $test->query($res);


$quesmod="SELECT * FROM modules";
$modq = $test->query($quesmod);


if (isset($_POST['btnd'])) {
  $datepick= $test -> real_escape_string($_POST['datepick']);

  $qdate="SELECT * FROM user_data WHERE dinaak='$datepick'";
  $udate=$test -> query($qdate);
  if($test -> query($qdate))
  {
    echo "";
  }
  else{
    echo "not added";
  }

}
  if (isset($_POST['btnupdate'])) {
    $hrs= $test -> real_escape_string($_POST['hrs']);
    $mins= $test -> real_escape_string($_POST['mins']);
    $qutime="UPDATE modules SET test_time_hrs='$hrs' WHERE module_name='$modname'";
    $udate=$test -> query($qutime);
    if($test -> query($qutime))
    {
      echo "changed";
    }
    else{
      echo "not added";
    }

  }
 ?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <style media="screen">
    .spac{
      float: right;
      margin-left: 150px;
    }
    </style>
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
  <script type="text/javascript">
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
var input, filter, ul, li, a, i;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
div = document.getElementById("myDropdown");
a = div.getElementsByTagName("a");
for (i = 0; i < a.length; i++) {
    if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
    } else {
        a[i].style.display = "none";
    }
}
}
</script>
</head>
<body>

<div class="">
  <h1>TestSprint</h1>
  <h2>Welcome <?php $changname=$_SESSION['admin_name']; echo $changname; ?></h2>
</div>
<div style="float: right; margin-top: -100px;">
  <a href="logout.php" style="text-decoration: none; color: white;"><button class="button" type="button" name="button">Logout</button></a>

</div>
<div class="tab">
  <button class="tablinks" onclick="openpanel(event, 'Useredit')" id="defaultOpen">Edit Users</button>
  <button class="tablinks" onclick="openpanel(event, 'Courseedit')">Edit Course</button>
  <!--<button class="tablinks" onclick="openpanel(event, 'Timeset')">Time Set</button>-->
  <button class="tablinks" onclick="openpanel(event, 'Editques')">Edit Questions</button>
  <button class="tablinks" onclick="openpanel(event, 'Result')">Result</button>
</div>

<div id="Useredit" class="tabcontent">
  <div class="box-div">
    <h3>Edit Users</h3>
    <div class="dropdown">
    <!--<button onclick="myFunction()" class="dropbtn">Module</button>-->
      <div id="myDropdown" class="dropdown-content">
        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
        <a href="#">Module1</a>
        <a href="#">Module2</a>
        <a href="#">Module3</a>
        <a href="#">Module4</a>

      </div>
    </div>
    <div class="picker">
      <form method="post">
      <p>Enter Date: <input type = "text" name="datepick" id = "datepicker-12"></p>
      <div style="float: right;">
        <input  class="button" type="submit" name="btnd" value="Search"/>

      </div>
          </form>


    </div>

    <div class="sub-form">
      <form>
        <table class="usermode">
          <?php
          if ($udate->num_rows > 0) {

           ?>
          <tr>
            <th>UserName</th>
            <th>Institute</th>
            <th>Mode</th>
          </tr>
          <?php
          $i=0;
          while($urow = $udate -> fetch_array()){

            $i++;
           ?>
          <tr>
            <td><?php echo $urow['full_name']; ?></td>
            <td><?php echo $urow['institute']; ?></td>
            <td><label class="switch">
        <input type="checkbox">
        <div class="slider round"></div>
      </label></td>
          </tr>
          <?php } ?>
          <?php } else { echo "<div> NO record found</div>"; } ?>

        <!--  <tr>
            <td>user1</td>
            <td>user1</td>
            <td><label class="switch">
        <input type="checkbox" checked>
        <div class="slider round"></div>
      </label></td>
          </tr>
          <tr>
            <td>user1</td>
            <td>user1</td>
            <td><label class="switch">
        <input type="checkbox" checked>
        <div class="slider round"></div>
      </label></td>
          </tr>
          <tr>
            <td>user1</td>
            <td>user1</td>
            <td><label class="switch">
        <input type="checkbox" checked>
        <div class="slider round"></div>
      </label></td>
          </tr>
          <tr>
            <td>user1</td>
            <td>user1</td>
            <td><label class="switch">
        <input type="checkbox" checked>
        <div class="slider round"></div>
      </label></td>
          </tr>

          <tr>
            <td>user1</td>
            <td>user1</td>
            <td><label class="switch">
        <input type="checkbox" checked>
        <div class="slider round"></div>
      </label></td>
    </tr>-->
        </table>
      </form>
    </div>

  </div>

</div>

<div id="Courseedit" class="tabcontent">
  <?php
  if ($SQL->num_rows > 0) {

   ?>
  <div class="box-div">
    <h3>Edit Module</h3>
    <div class="picker2">
      <a href="admod.php" class="btn-mod txt-decor">Add Module</a>
    </div>
    <div class="co-form">
      <form method="POST" action="#" class="sub-formmargin scroll-bar">
    <table width="400px" class="rtable" border="1px solid black;">
      <tr>
        <th>module_id</th>
        <th>module_name</th>
        <td>Current Status</td>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
      <?php
      $i=0;
      while($row = $SQL -> fetch_array()){

        $i++;
       ?>
       <tr>
         <td><?php echo $i; ?></td>
         <td><?php echo $row['module_name']; ?></td>
         <td><?php $status=$row['status']; if($status==1) {echo "Enable";} else{echo "Disable";}  ?></td>

      <td><a href="statuschange.php?module_id=<?php echo $row['module_id'];?>&module_name=<?php echo $row['module_name']; ?>&status=0" class="btn-mod txt-decor">Disable</a></td>
         <td><a href="statuschange.php?module_id=<?php echo $row['module_id'];?>&module_name=<?php echo $row['module_name']; ?>&status=1" class="btn-mod txt-decor">Enable</a></td>
       </tr>
       <?php } ?>
       <?php } else { echo "<div> NO recoed found</div>"; } ?>
    </table>
    <p><?php echo $msg; ?></p>
  </form>

    </div>
</div>
</div>


<?php
$qfec="SELECT * FROM questions";
$FEC=$test -> query($qfec);
?>


<div id="Editques" class="tabcontent box-div">
  <h3>Edit Questions</h3>
  <div class="icons">
    <form class="" method="post">
      <!--<select name="modules" style="background-color: #99FF66">
        <option value="hide">Modules</option>
        <option value="HTML">HTML</option>
        <option value="CSS">CSS</option>
        <option value="JS">JS</option>
      </select>-->
      <?php
  if($modq->num_rows > 0){
    ?>
      <!--<select name="Courses" style="background-color: #99FF66" style="display: none;" onchange="showUser(this.value)">
         <?php
         $i=0;
          while($war = $modq -> fetch_array()){

          $i++;
         ?>


        <option value="<?php echo $war['module_name']; ?>"><?php echo $war['module_name']; ?></option>
      <?php } ?>

    </select>-->
      <?php } ?>
      <input type="submit" name="selectsearch" class="button" value="Search" style="display: none;"/>
    </form>
</div>
<ul class="li-icons" style="float: right;">
  <li><a href="editques.php"><input type="submit" class="button" name="add" value="Add Question"></a></li>

  <!--<li><a href="editanyques.php">edit</a></li>-->
</ul>
<div class="scroll-barr" id="demo">
<?php
  if ($FEC->num_rows > 0) {
   $i=0;
   while($wo = $FEC-> fetch_array()){
     $i++;
    ?>
<div class="box-check1">
   <table>
     <tr>
       <th>Questions</th>
       <th>option_1</th>
       <th>option_2</th>
       <th>option_3</th>
       <th>option_4</th>
       <th>Correct Ans</th>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td>Q<?php echo $i;?>.<?php echo $wo['question'];?></td>
     <td>A.<?php echo $wo['option_one']; ?></td>
     <td>B.<?php echo $wo['option_two']; ?></td>
     <td>C.<?php echo $wo['option_three']; ?></td>
     <td>D.<?php echo $wo['option_four']; ?></td>
     <td>Ans:<?php echo $wo['crt_ans']; ?></td>
     <td ><a href="del.php?question=<?php echo $wo['question']; ?>" class="button">Delete</a></td>
     <td><a href="editanyques.php?question=<?php echo $wo['question']; ?>" class="button">update any</a></td>
   </tr>
   </table>
 </div>
     <?php } }?>
</div>
</div>
<div id="Result" class="tabcontent">
  <h3>Result</h3>
  <div class="usermode" style="margin-top: -30px;">
    <?php
if($rst->num_rows > 0){
  ?>
    <!--<select name="Courses" style="background-color: #99FF66" onchange="showUser(this.value)">
       <?php
       $i=0;
        while($row = $rst -> fetch_array()){

        $i++;
       ?>


      <option value="<?php echo $row['module_name']; ?>"><?php echo $row['module_name']; ?></option>
    <?php } ?>

  </select>-->
    <?php } ?>
</div>
    <div style="overflow-y:auto; margin-top: -200px;">

    <?php
if($rs->num_rows > 0){
?>

    <table class="rtable">


      <tr>
        <th>S.no</th>
        <th>Module</th>
          <th>Name</th>
            <th>Institute</th>
              <th>Marks Obtained</th>
                <th>Rank</th>
              </tr>
<?php
        $i=0;
        while($ro = $rs -> fetch_array()){

        $i++;
       ?>
      <tr>
        <td><?php echo $i;  ?></td>
        <td><?php echo $ro['module_name']; ?></td>
        <td><?php echo $ro['usr_name']; ?></td>
        <td><?php echo $ro['institute']; ?></td>
        <td><?php echo $ro['marks_obtained']; ?></td>
        <td><?php echo $ro['rank']; ?></td>
      </tr>
    <?php } ?>
    </table>
    <?php } ?>
    </div>
    <div class="buttons">
      <input type="button" class="btn2" name="print" value="Export to PDF" ><input type="button" class="btn2 btnp" name="print" value="Print Result" style="display: none;">
    </div>
</div>



<script>
function openpanel(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
