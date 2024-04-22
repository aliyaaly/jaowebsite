<?php



$user_id = $_SESSION['user_id'];





if (isset($_GET["reset"])) {

	$getPass = "123456";
	$id = $_GET["reset"];
	$userName = $_GET["userName"];
	$passmd5 = md5($getPass.'l1tt@v@nh'.$userName);
	$sql = "UPDATE user SET password='$passmd5',updatedBy='$user_id',updatedAt=NOW() WHERE id = '$id' ";

	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/user");
	} else {
		echo "<center><h2>ERROR Delete</h2></center>";
	}
}


if (isset($_GET["del"])) {


	$id = $_GET["del"];

	$sql = "UPDATE user SET isDelete='1',updatedBy='$user_id',updatedAt=NOW()  WHERE id = '$id'";

	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/user");
	} else {
		echo "<center><h2>ERROR Delete</h2></center>";
	}
}
