<?php
$strDate = $mysqli->real_escape_string($_GET['strDate']); 
$endDate = $mysqli->real_escape_string($_GET['endDate']);

$sql = "select tbl_sale_details.pro_barcode,tbl_sale_details.pro_name, sum(tbl_sale_details.qty) as sumQty
from tbl_sale_details 
group by tbl_sale_details.pro_name 
order by sum(tbl_sale_details.qty) desc";
?>