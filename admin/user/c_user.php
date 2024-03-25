<?php



$userId = $_SESSION['user_id'];

$dateNow = date("Y-m-d H:i:s");
if (isset($_POST["btnSaveNew"])) {
	$txtUser = $mysqli->real_escape_string($_POST['txtUser']);
    $txtPass = $mysqli->real_escape_string($_POST['txtPass']); 	 	 
     $cb_emp = $mysqli->real_escape_string($_POST['cb_emp']); 	
     $cb_role = $mysqli->real_escape_string($_POST['cb_role']); 	
      
 
	$sql = "insert into tbl_user (username,password,role_id,emp_id,user_add,date_add)
			VALUES ('$txtUser','$txtPass', '$cb_role','$cb_emp', '$userId','$dateNow') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=user/user");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}


if (isset($_GET["reset"])) {


	$id = $_GET["reset"];

	$sql = "UPDATE tbl_user SET password='123456' WHERE id = '$id' ";

	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=user/user");
	} else {
		echo "<center><h2>ERROR Delete</h2></center>";
	}
}


if (isset($_GET["del"])) {


	$id = $_GET["del"];

	$sql = "DELETE FROM tbl_user WHERE id ='$id'";

	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=user/user");
	} else {
		echo "<center><h2>ERROR Delete</h2></center>";
	}
}
