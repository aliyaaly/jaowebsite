<?php
$strDate = $mysqli->real_escape_string($_GET['strDate']); 
$endDate = $mysqli->real_escape_string($_GET['endDate']);

$sql = "SELECT *
FROM v_sale_details where status = 'ຈາກໜ້າຮ້ານ' OR status = 'ສັ່ງຊື້ຈາກອອນລາຍສຳເລັດ' AND date_add BETWEEN '$strDate' AND '$endDate'  ORDER BY id ASC";
?>