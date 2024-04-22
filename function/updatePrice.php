<?php
session_start();
// echo"sjddjda";

$userId = $_SESSION['user_id'];
$mysqli = new mysqli("localhost", "root", "56588965", "db_bodjob");
$dateNow = date("Y-m-d H:i:s");

$barcode = $_GET['barcode'];
$price = $_GET['price'];
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*----------- function Execute query --------------*/

// mysql_query("SET NAMES 'utf8'");
$mysqli->set_charset("utf8");

 $sql = "UPDATE tbl_product SET sale_price='$price' WHERE pro_barcode = '$barcode'";
if ($mysqli->query($sql) === TRUE) {				
    // header("Location: ?d=master/product");
    //   echo '<script>console.log("succesfully")</script>';
    
}else{
    echo '<script>alert("error")</script>';
}	
?>
