<?php


include "barcode/vendor/picqer/php-barcode-generator/src/BarcodeGenerator.php";
include "barcode/vendor/picqer/php-barcode-generator/src/BarcodeGeneratorHTML.php";


function barcode($code){
	
	$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
	$border = 2;//กำหนดความหน้าของเส้น Barcode
	$height = 40;//กำหนดความสูงของ Barcode

	return $generator->getBarcode($code , $generator::TYPE_CODE_128,$border,$height);

}

if(isset($_POST["btnSaveNew"])) { 
	$txtbarcode = $mysqli->real_escape_string($_POST['txtbarcode']);
    $txtproductName = $mysqli->real_escape_string($_POST['txtproductName']); 	 	 
     $txtproductDetails = $mysqli->real_escape_string($_POST['txtdescription']); 	
     $txtcategoryID = $mysqli->real_escape_string($_POST['cb_cate']); 	
     $txtunitID = $mysqli->real_escape_string($_POST['cb_unit']); 

	 $tmp_file_name1 = trim($_FILES["txtImage"]["tmp_name"]);
	//  echo '<script>alert("'.$tmp_file_name1.'")</script>';
	 if($tmp_file_name1 != "") { 		
		 $name1 = $_FILES["txtImage"]["name"];
		 $ext1 = end((explode(".", $name1))); # extra () to prevent notice
		 $file_name1 = date('YmdHms').$userId.".".$ext1; 
		 copy($_FILES["txtImage"]["tmp_name"],"ecommerce/product/".$file_name1);
		 $fullPath1 = "ecommerce/product/".$file_name1; 
		
	 }
  
	$sql = "insert into tbl_product (pro_barcode,pro_name, pro_details, c_id, u_id,qty,price,sale_price,image)
			VALUES ('$txtbarcode','$txtproductName', '$txtproductDetails','$txtcategoryID', '$txtunitID',0,0,0,'$file_name1') ";	
			 
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=master/product");
	}else{
		echo "<center><h2>ERROR INSERT</h2></center>";
	}
}




if(isset($_POST["btSaveEdit"])) {
    $id = $mysqli->real_escape_string($_POST['txtId']); 	 	 
	$txtbarcode = $mysqli->real_escape_string($_POST['txtbarcode']);
    $txtproductName = $mysqli->real_escape_string($_POST['txtproductName']); 	 	 
     $txtproductDetails = $mysqli->real_escape_string($_POST['txtdescription']); 	
     $txtcategoryID = $mysqli->real_escape_string($_POST['cb_cate']); 	
     $txtunitID = $mysqli->real_escape_string($_POST['cb_unit']); 
	 	

	$sql = "UPDATE tbl_product SET pro_barcode='$txtbarcode',pro_name='$txtproductName',pro_details='$txtproductDetails',c_id='$txtcategoryID',u_id='$txtunitID' WHERE id = '$id' ";	 	


	if ($mysqli->query($sql) === TRUE) {				
		header("Location: ?d=master/product");
	}else{
		echo "<center><h2>ERROR Update</h2></center>";
	}
}

 


if(isset($_GET["del"]) ){	
	
			 
		$id = $_GET["del"];	 		 

		$sql = "UPDATE tbl_product SET isDelete = 'yes' WHERE id ='$id'";	 
	
		if ($mysqli->query($sql) === TRUE) {
			header("Location: ?d=master/product");
		}else{
			echo "<center><h2>ERROR Delete</h2></center>";
		}	
	
	
}
