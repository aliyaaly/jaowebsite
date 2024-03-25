<?php

if(isset($_POST["btnSaveNew"])) { 
 	$txtcategoryName = $mysqli->real_escape_string($_POST['txtcategoryName']); 	 	 
	$sql = "insert into tbl_category (name)
			VALUES ('$txtcategoryName') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/category");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtcategoryName = $mysqli->real_escape_string($_POST['txtcategoryName1']); 	 	 
    
    

	$sql = "UPDATE tbl_category SET name='$txtcategoryName' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/category");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

        $sql = "DELETE FROM tbl_category WHERE id ='$id'";	 
	
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/category");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 