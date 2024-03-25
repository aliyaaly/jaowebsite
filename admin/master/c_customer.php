<?php

if(isset($_POST["btnSaveNew"])) { 
 	$txtcustomerName = $mysqli->real_escape_string($_POST['txtcustomerName']); 	 	 
     $txtcustomeraddr = $mysqli->real_escape_string($_POST['txtcustomeraddr']); 	
     $txtcustomertel = $mysqli->real_escape_string($_POST['txtcustomertel']); 	
	 $txtcustomermail = $mysqli->real_escape_string($_POST['txtcustomermail']); 	
    	
	$sql = "insert into tbl_customer (cus_name, cus_addr, cus_tel, cus_mail)
			VALUES ('$txtcustomerName', '$txtcustomeraddr','$txtcustomertel','$txtcustomermail') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/customer");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}

if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtsupplierName = $mysqli->real_escape_string($_POST['txtcustomerName1']); 	 	 
	$txtcustomeraddr= $mysqli->real_escape_string($_POST['txtcustomeraddr1']); 	
     $txtcustomertel = $mysqli->real_escape_string($_POST['txtcustomertel1']); 	
	 $txtcustomermail = $mysqli->real_escape_string($_POST['txtcustomermail1']); 
    
	$sql = "UPDATE tbl_customer SET cus_name='$txtcustomerName',cus_addr='$txtcustomeraddr',cus_tel='$txtcustomertel',cus_mail='$txtcustomermail' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/customer");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "UPDATE tbl_customer SET isDelete = 'yes' WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/customer");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}

?>
 