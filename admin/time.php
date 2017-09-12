<?php
$q3="SELECT * FROM modules WHERE status=1";
$SQL1=$test -> query($q3);
if ($SQL1->num_rows > 0) {
 ?>

<div class="box-div">
  <h3>Time Set</h3>
  <div class="sub-form">
    <form>

  <table class="usermode">
    <tr>
      <th class="thhead">Module Test</th>
      <th class="thhead">Mode</th>
    </tr>
    <?php
    $i=0;
    while($row1 = $SQL1 -> fetch_array()){

      $i++;
     ?>
    <tr>
      <td><?php $modname=$row1['module_name']; echo $modname; ?></td>
      <td><input type="number" class="time-len text-mod" name="hrs" value="">hrs&nbsp; <input type="number" class="time-len text-mod" name="mins" value="">mins</td>
    
      <td><input type="button" class="btn-mod" name="btnupdate" value="update"></td>
    </tr>
    <?php } ?>
    <?php } else { echo "<div> NO recoed found</div>"; } ?>
  </table>
</form>
  </div>

</div>
