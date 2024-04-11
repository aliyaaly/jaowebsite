<?php
$user_id = $_SESSION['user_id'];
//  echo '<script>alert("user_id:'.$user_id.'")</script>';
if(isset($_POST["btnSaveNew"])) { 
 	$txtCompany = $mysqli->real_escape_string($_POST['txtCompany']); 	 	 
 	$txtPhone = $mysqli->real_escape_string($_POST['txtPhone']); 	 	 
 	$txtEmail = $mysqli->real_escape_string($_POST['txtEmail']); 	 	 
 	$txtAddress = $mysqli->real_escape_string($_POST['txtAddress']); 	 	 
 	$txtWebsite = $mysqli->real_escape_string($_POST['txtWebsite']); 	 	 
 	$txtBorn = $mysqli->real_escape_string($_POST['txtBorn']); 	 	 
 	$txtDes = $mysqli->real_escape_string($_POST['txtDes']); 	 	 
 	$txtUserName = $mysqli->real_escape_string($_POST['txtUserName']); 	 	
 	$txtPassword = $mysqli->real_escape_string($_POST['txtPassword']); 	

	$tmp_file_name1 = trim($_FILES["edit_fileUpload"]["tmp_name"]);

	 if ($tmp_file_name1 != "") {
		 $name1 = $_FILES["edit_fileUpload"]["name"];
		 $ext1 = end((explode(".", $name1))); # extra () to prevent notice
		 $file_name1 = date('YmdHis') . $user_id . "." . $ext1;
		 copy($_FILES["edit_fileUpload"]["tmp_name"], "dist/image/Company/" . $file_name1);
	 } 	

	$sql = "insert into company (name,logo,phone,mail,address,website,description,createdBy,updatedBy,createdAt,updatedAt)
			VALUES ('$txtCompany','$file_name1','$txtPhone','$txtEmail','$txtAddress','$txtWebsite','$txtDes','$user_id','$user_id',NOW(),NOW()) ";	
			 
	if ($mysqli->query($sql) === TRUE) {
	
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtJob = $mysqli->real_escape_string($_POST['txtJob']); 	 	 
    
    

	$sql = "UPDATE job SET name='$txtJob',updatedBy='$user_id',updatedAt=NOW() WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/job");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "UPDATE job SET isDelete = 1,updatedBy='$user_id',updatedAt=NOW() WHERE id = '$id' ";	 	
	
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/job");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 