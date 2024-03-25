<?php
$fetch ="SELECT *,(CASE WHEN datediff(expired_date,CURDATE()) > 0 then datediff(expired_date,CURDATE())
ELSE 'Expired'
END) as Remaining_days_expired FROM v_product where isDelete = 'no'";  


?>