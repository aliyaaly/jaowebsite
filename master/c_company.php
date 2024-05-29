<?php
$user_id = $_SESSION['user_id'];
//  echo '<script>alert("user_id:'.$user_id.'")</script>';
if (isset($_POST["btnSaveNew"])) {
	$txtCompany = $mysqli->real_escape_string($_POST['txtCompany']);
	$txtPhone = $mysqli->real_escape_string($_POST['txtPhone']);
	$txtEmail = $mysqli->real_escape_string($_POST['txtEmail']);
	$txtAddress = $mysqli->real_escape_string($_POST['txtAddress']);
	$txtWebsite = $mysqli->real_escape_string($_POST['txtWebsite']);
	$txtBorn = $mysqli->real_escape_string($_POST['txtBorn']);
	$txtDes = $mysqli->real_escape_string($_POST['txtDes']);
	$txtUserName = $mysqli->real_escape_string($_POST['txtUserName']);
	$txtPassword = $mysqli->real_escape_string($_POST['txtPassword']);
	$passmd5 = md5($txtPassword . 'l1tt@v@nh' . $txtUserName);
	$tmp_file_name1 = trim($_FILES["edit_fileUpload"]["tmp_name"]);

	if ($tmp_file_name1 != "") {
		$name1 = $_FILES["edit_fileUpload"]["name"];
		$ext1 = end((explode(".", $name1))); # extra () to prevent notice
		$file_name1 = date('YmdHis') . $user_id . "." . $ext1;
		copy($_FILES["edit_fileUpload"]["tmp_name"], "dist/img/company/" . $file_name1);
	}



	$sql = "INSERT INTO user(username, password, role, name, surname, born, address, phone, mail, createdBy, updatedBy, createdAt, updatedAt)
	VALUES
	('$txtUserName', '$passmd5', 'employer', '$txtCompany', '', '$txtBorn', '$txtAddress', '$txtPhone', '$txtEmail','$user_id','$user_id',NOW(),NOW())";


	if ($mysqli->query($sql) === TRUE) {


		$check = "select MAX(id) from user";
		if ($result = $mysqli->query($check)) {
			while ($row = $result->fetch_row()) {
				$userId = $row[0];
			}
		}
		$sql1 = "INSERT INTO company (userId,name,logo,phone,mail,address,website,description,createdBy,updatedBy,createdAt,updatedAt)
			VALUES ('$userId','$txtCompany','$file_name1','$txtPhone','$txtEmail','$txtAddress','$txtWebsite','$txtDes','$user_id','$user_id',NOW(),NOW()) ";

		if ($mysqli->query($sql1) === TRUE) {
			header("Location: ?d=master/company");
		} else {
			echo "<center><h2>$sql1</h2></center>";
		}
	} else {
		echo "<center><h2>$sql</h2></center>";
	}
}

if (isset($_POST["btSaveEdit"])) {
	$id = $mysqli->real_escape_string($_POST['txtId']);
	$txtCompany = $mysqli->real_escape_string($_POST['txtCompany']);
	$txtPhone = $mysqli->real_escape_string($_POST['txtPhone']);
	$txtEmail = $mysqli->real_escape_string($_POST['txtEmail']);
	$txtAddress = $mysqli->real_escape_string($_POST['txtAddress']);
	$txtWebsite = $mysqli->real_escape_string($_POST['txtWebsite']);
	
	$txtDes = $mysqli->real_escape_string($_POST['txtDescription']);
	
	$tmp_file_name1 = trim($_FILES["edit_fileUpload"]["tmp_name"]);

	if ($tmp_file_name1 != "") {
		$name1 = $_FILES["edit_fileUpload"]["name"];
		$ext1 = end((explode(".", $name1))); # extra () to prevent notice
		$file_name1 = date('YmdHis') . $user_id . "." . $ext1;
		copy($_FILES["edit_fileUpload"]["tmp_name"], "dist/img/company/" . $file_name1);
	}




	$sql = "UPDATE company SET name='$txtCompany',phone='$txtPhone',mail='$txtEmail',address='$txtAddress',website='$txtWebsite',description='$txtDes',logo='$file_name1',updatedBy='$user_id',updatedAt=NOW() WHERE id = '$id' ";


	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/company");
	} else {
		echo "<center><h2>ERROR Update</h2></center>";
	}
}




if (isset($_GET["del"])) {


	$id = $_GET["del"];

	$sql = "UPDATE company SET isDelete = 1,updatedBy='$user_id',updatedAt=NOW() WHERE id = '$id' ";


	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/company");
	} else {
		echo "<center><h2>ERROR Delete</h2></center>";
	}


}

?>