<?php
session_start();
// echo"sjddjda";

$userId = $_SESSION['user_id'];
$mysqli = new mysqli("localhost", "root", "56588965", "db_bodjob");
$dateNow = date("Y-m-d H:i:s");

$total_amount = $_GET['total_amount'];
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*----------- function Execute query --------------*/

// mysql_query("SET NAMES 'utf8'");
$mysqli->set_charset("utf8");

 $sql = "insert into tbl_sale (user_add,date_add,total,cus_id,status)
VALUES ('$userId', '$dateNow','$total_amount','$cus_id','ຈາກໜ້າຮ້ານ') ";
if ($mysqli->query($sql) === TRUE) {				
    // header("Location: ?d=master/product");
    //   echo '<script>console.log("succesfully")</script>';
    
}else{
    echo '<script>alert("error")</script>';
}	
?>
