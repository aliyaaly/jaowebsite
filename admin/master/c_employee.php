<?php

if(isset($_POST["btnSaveNew"])) { 
 	$txtemployeeName = $mysqli->real_escape_string($_POST['txtemployeeName']); 	 	 
     $txtsurname = $mysqli->real_escape_string($_POST['txtsurname']); 	
     $txtaddress = $mysqli->real_escape_string($_POST['txtaddress']); 	
     $txttel = $mysqli->real_escape_string($_POST['txttel']); 	
	$sql = "insert into tbl_employee (name, surname, address, tel,status_id,isWho)
			VALUES ('$txtemployeeName', '$txtsurname','$txtaddress', '$txttel',1,'employee') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/employee");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtemployeeName = $mysqli->real_escape_string($_POST['txtemployeeName1']); 	 	 
     $txtsurname = $mysqli->real_escape_string($_POST['txtsurname1']); 	
     $txtaddress = $mysqli->real_escape_string($_POST['txtaddress1']); 	
     $txttel = $mysqli->real_escape_string($_POST['txttel1']); 	

	$sql = "UPDATE tbl_employee SET name='$txtemployeeName',surname='$txtsurname',address='$txtaddress',tel='$txttel',status_id=1 WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/employee");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "UPDATE tbl_employee SET isDelete = 'yes' WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/employee");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 