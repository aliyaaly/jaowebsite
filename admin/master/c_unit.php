<?php

if(isset($_POST["btnSaveNew"])) { 
 	$txtunitName = $mysqli->real_escape_string($_POST['txtunitName']); 	 	 
   
    
	$sql = "insert into tbl_unit (name)
			VALUES ('$txtunitName') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/unit");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtunitName = $mysqli->real_escape_string($_POST['txtunitName1']); 	 	 
    
    

	$sql = "UPDATE tbl_unit SET name='$txtunitName' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/unit");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "DELETE FROM tbl_unit WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/unit");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 