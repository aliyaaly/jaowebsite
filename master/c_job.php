<?php
$user_id = $_SESSION['user_id'];
//  echo '<script>alert("user_id:'.$user_id.'")</script>';
if(isset($_POST["btnSaveNew"])) { 
 	$txtJob = $mysqli->real_escape_string($_POST['txtJob']); 	 	 
 	$txtJob_no = $mysqli->real_escape_string($_POST['txtJob_no']); 	 	 
	$sql = "insert into job (name,createdBy,updatedBy,createdAt,updatedAt,job_no)
			VALUES ('$txtJob','$user_id','$user_id',NOW(),NOW(),'$txtJob_no') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/job");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtJob = $mysqli->real_escape_string($_POST['txtJob']); 	 	 
    $txtJob_no = $mysqli->real_escape_string($_POST['txtJob_no']); 	 	 
    

	$sql = "UPDATE job SET name='$txtJob',updatedBy='$user_id',updatedAt=NOW(),job_no='$txtJob_no' WHERE id = '$id' ";	 	


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
 