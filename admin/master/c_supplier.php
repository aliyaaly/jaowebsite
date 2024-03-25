<?php

if(isset($_POST["btnSaveNew"])) { 
 	$txtsupplierName = $mysqli->real_escape_string($_POST['txtsupplierName']); 	 	 
     $txtsupplieraddr = $mysqli->real_escape_string($_POST['txtsupplieraddr']); 	
     $txtsuppliertel = $mysqli->real_escape_string($_POST['txtsuppliertel']); 	
    	
	$sql = "insert into tbl_supplier (sup_name, sup_address, sup_tel)
			VALUES ('$txtsupplierName', '$txtsupplieraddr','$txtsuppliertel') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/supplier");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtsupplierName = $mysqli->real_escape_string($_POST['txtsupplierName1']); 	 	 
     $txtsupplieraddr = $mysqli->real_escape_string($_POST['txtsupplieraddr1']); 	
     $txtsuppliertel = $mysqli->real_escape_string($_POST['txtsuppliertel1']); 	
    
	$sql = "UPDATE tbl_supplier SET sup_name='$txtsupplierName',sup_address='$txtsupplieraddr',sup_tel='$txtsuppliertel' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/supplier");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "UPDATE tbl_supplier SET isDelete = 'yes' WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/supplier");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 