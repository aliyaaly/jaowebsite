<?php
$fetch ="SELECT * FROM v_user WHERE role_id <= 3";  
$emp = "SELECT * FROM tbl_employee where isDelete = 'no' and isWho = 'employee' ";
$role = "SELECT * FROM tbl_user_role where isDelete = 'no' AND id <= 3";

?>