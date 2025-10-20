<?php
$user_id = $_SESSION['user_id'];
//  echo '<script>alert("user_id:'.$user_id.'")</script>';
if (isset($_POST["btnSaveNew"])) {
	$cbJob = $mysqli->real_escape_string($_POST['cbJob']);
	$txtJobLa = $mysqli->real_escape_string($_POST['txtJobLa']);
	$txtJobEn = $mysqli->real_escape_string($_POST['txtJobEn']);
	$txtJob_no = $mysqli->real_escape_string($_POST['txtJob_no']);
	$sql = "insert into job_position (jobId, jobPositionLao, jobPositionEn, 
	createdBy, 
	updatedBy, 
	createdAt, 
	updatedAt,job_position_no)
			VALUES ('$cbJob','$txtJobLa','$txtJobEn','$user_id','$user_id',NOW(),NOW(),'$txtJob_no') ";

	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/jobPosition");
	} else {
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if (isset($_POST["btSaveEdit"])) {
	$id = $mysqli->real_escape_string($_POST['txtId']);
	$cbJob = $mysqli->real_escape_string($_POST['cbJob']);
	$txtJobLa = $mysqli->real_escape_string($_POST['txtJobLao']);
	$txtJobEn = $mysqli->real_escape_string($_POST['txtJobEn']);
	$txtJob_no = $mysqli->real_escape_string($_POST['txtJob_no']);


	$sql = "UPDATE job_position SET jobId='$cbJob',jobPositionLao='$txtJobLa',jobPositionEn='$txtJobEn',updatedBy='$user_id',updatedAt=NOW(),job_position_no='$txtJob_no' WHERE id = '$id' ";


	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/jobPosition");
	} else {
		echo "<center><h2>ERROR Update</h2></center>";
	}
}




if (isset($_GET["del"])) {


	$id = $_GET["del"];

	$sql = "UPDATE job_position SET isDelete = 1,updatedBy='$user_id',updatedAt=NOW() WHERE id = '$id' ";


	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/jobPosition");
	} else {
		echo "<center><h2>ERROR Delete</h2></center>";
	}


}

?>