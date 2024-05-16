<?php
$user_id = $_SESSION['user_id'];
//  echo '<script>alert("user_id:'.$user_id.'")</script>';
if(isset($_POST["btnSaveNew"])) { 
 	$txtExperience = $mysqli->real_escape_string($_POST['txtExperience']); 	 	 
	$sql = "insert into experience (experience)
			VALUES ('$txtExperience')";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/experience");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtExperience = $mysqli->real_escape_string($_POST['txtExperience']); 	 	 
    
    

	$sql = "UPDATE experience SET experience='$txtExperience' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/experience");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "DELETE FROM experience WHERE id = '$id' ";	 	
	
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/experience");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 