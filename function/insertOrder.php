<?php
session_start();
// echo"sjddjda";

$userId = $_SESSION['user_id'];
$mysqli = new mysqli("localhost", "root", "56588965", "db_bodjob");
$dateNow = date("Y-m-d H:i:s");
$sup = $_GET['supplier'];
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*----------- function Execute query --------------*/

// mysql_query("SET NAMES 'utf8'");
$mysqli->set_charset("utf8");

 $sql = "insert into tbl_order (user_add,date_add,sup_id)
VALUES ('$userId', '$dateNow','$sup') ";
if ($mysqli->query($sql) === TRUE) {				
    // header("Location: ?d=master/product");
    //   echo '<script>console.log("succesfully")</script>';
    
}else{
    echo '<script>alert("error")</script>';
}	
?>
