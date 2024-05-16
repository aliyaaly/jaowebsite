<?php
$user_id = $_SESSION['user_id'];
//  echo '<script>alert("user_id:'.$user_id.'")</script>';
if(isset($_POST["btnSaveNew"])) { 
 	$txtNews = $mysqli->real_escape_string($_POST['txtNews']); 	 
	 $tmp_file_name1 = trim($_FILES["edit_fileUpload"]["tmp_name"]);

	 if ($tmp_file_name1 != "") {
		 $name1 = $_FILES["edit_fileUpload"]["name"];
		 $ext1 = end((explode(".", $name1))); # extra () to prevent notice
		 $file_name1 = date('YmdHis') . $user_id . "." . $ext1;
		 copy($_FILES["edit_fileUpload"]["tmp_name"], "register/assets/img/feed/" . $file_name1);
	 }
	
	$sql = "insert into news (image,name,createdBy,updatedBy,createdAt,updatedAt)
			VALUES ('$file_name1','$txtNews','$user_id','$user_id',NOW(),NOW()) ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/news");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

// if(isset($_POST["btSaveEdit"])) {
//     $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
// 	$txtNews = $mysqli->real_escape_string($_POST['txtNews']); 	 	 
    
    

// 	$sql = "UPDATE news SET name='$txtNews',updatedBy='$user_id',updatedAt=NOW() WHERE id = '$id' ";	 	


// 	if ($mysqli->query($sql) === TRUE) {				
// 		header("Location: ?d=master/news");
// 	}else{
// 		echo "<center><h2>ERROR Update</h2></center>";
// 	}
// }

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "UPDATE news SET isDelete = 1,updatedBy='$user_id',updatedAt=NOW() WHERE id = '$id' ";	 	
	
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/news");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 