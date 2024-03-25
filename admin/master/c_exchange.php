<?php

if(isset($_POST["btnSaveNew"])) { 
 	$txtexchangeName = $mysqli->real_escape_string($_POST['txtexchangeName']); 	 	 
     $txtrate = $mysqli->real_escape_string($_POST['txtrate']); 	
    
	$sql = "insert into tbl_exchange_rate (name, rate)
			VALUES ('$txtexchangeName', '$txtrate') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/exchange");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtexchangeName = $mysqli->real_escape_string($_POST['txtexchangeName1']); 	 	 
     $txtrate = $mysqli->real_escape_string($_POST['txtrate1']); 	
    

	$sql = "UPDATE tbl_exchange_rate SET name='$txtexchangeName',rate='$txtrate' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/exchange");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "DELETE FROM tbl_exchange_rate WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/exchange");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 