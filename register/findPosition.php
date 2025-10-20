<?php
session_start();
require_once("../indexCode.php");
$wharecause = $_GET['GetJob'];
$divID = $_GET['divID'];
// echo '<script>alert("divid: '.$divID.'")</script>';
 ?>


<select class="form-control select2" id="select2" name="txtPositionId<?= $divID ?>" required="true" >

	<?php
	 $job = "select * from job_position where jobId='$wharecause' and isDelete=0";
     if ($resultjob = $mysqli->query($job)) {
     while ($row = $resultjob->fetch_assoc()) {
	?>
		<option value="<?= $row['id'] ?>" <?= $selected ?>><?= $row['jobPositionLao'] ?> | <?= $row['jobPositionEn'] ?></option>
	<?php } }?>
</select>
