<?php
$strDate = $mysqli->real_escape_string($_GET['strDate']); 
$endDate = $mysqli->real_escape_string($_GET['endDate']);

$sql = "SELECT * FROM company WHERE isDelete = 0  AND date_add BETWEEN '$strDate' AND '$endDate'  ORDER BY id ASC";
?>