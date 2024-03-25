<?php
$orders ="SELECT * FROM v_orders where status = 'ກຳລັງສັ່ງຊື້' ";  
$sql = "SELECT id, pro_barcode, pro_name,qty
FROM v_orders_details where status = 'ກຳລັງສັ່ງຊື້'";

?>