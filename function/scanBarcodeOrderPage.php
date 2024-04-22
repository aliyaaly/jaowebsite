<?php
session_start();
// echo"sjddjda";

$userId = $_SESSION['user_id'];
$mysqli = new mysqli("localhost", "root", "56588965", "db_bodjob");
$dateNow = date("Y-m-d H:i:s");
$barcode = $_GET['barcode'];
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*----------- function Execute query --------------*/

// mysql_query("SET NAMES 'utf8'");
$mysqli->set_charset("utf8");


if ($barcode !== "") {
$sql = "SELECT pro_name,pro_details,cate_name,unit_name,sale_price FROM v_product where isDelete = 'no' AND pro_barcode = $barcode";
$query = $mysqli->query($sql);
$row = $query->fetch_row();

$pro_name = $row[0];
$pro_details = $row[1];
$cate_name = $row[2];
$unit_name = $row[3];
$sale_price = $row[4];
}

// Store it in a array
$result = array("$pro_name", "$pro_details","$cate_name","$unit_name","$sale_price");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>



       