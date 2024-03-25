<?php
$strDate = $mysqli->real_escape_string($_GET['strDate']); 
$endDate = $mysqli->real_escape_string($_GET['endDate']);

$sql = "SELECT *
FROM v_import_details where date_add BETWEEN '$strDate' AND '$endDate'";
?>