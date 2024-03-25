<?php
session_start();
// echo"sjddjda";

$userId = $_SESSION['user_id'];
$mysqli = new mysqli("localhost", "root", "56588965", "db_bodjob");
$dateNow = date("Y-m-d H:i:s");
$pro_barcode = $_GET['pro_barcode'];
$qty = $_GET['qty'];
$price = $_GET['price'];
$total = $_GET['total'];
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*----------- function Execute query --------------*/

// mysql_query("SET NAMES 'utf8'");
$mysqli->set_charset("utf8");


$select = "SELECT MAX(id) FROM tbl_import";
if ($result = $mysqli->query($select)) {
   
$id = $result->fetch_row()[0];
      
  
}


 $sql = "insert into tbl_import_details (id,pro_barcode,qty,price,total_amount)
VALUES ('$id', '$pro_barcode','$qty','$price','$total') ";
if ($mysqli->query($sql) === TRUE) {				
    // header("Location: ?d=master/product");
    //   echo '<script>console.log("succesfully")</script>';
    
}else{
    echo '<script>alert("error")</script>';
}	
?>
