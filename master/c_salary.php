<?php
$user_id = $_SESSION['user_id'];
//  echo '<script>alert("user_id:'.$user_id.'")</script>';
if(isset($_POST["btnSaveNew"])) { 
 	$txtSalary = $mysqli->real_escape_string($_POST['txtSalary']); 	 	 
	$sql = "insert into salary (salary)
			VALUES ('$txtSalary')";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/salary");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtSalary = $mysqli->real_escape_string($_POST['txtSalary']); 	 	 
    
    

	$sql = "UPDATE salary SET salary='$txtSalary' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/salary");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "DELETE FROM salary WHERE id = '$id' ";	 	
	
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/salary");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 