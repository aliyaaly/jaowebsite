<?php
session_start();
require_once("../config.php");
require_once("m_stock.php");

$date = date('d-m-Y');
$output_filename = "ລາຍງານສີນຄ້າຍັງເຫຼືອໜ້ອຍ" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");



echo "<h4>ລາຍງານສີນຄ້າຍັງເຫຼືອໜ້ອຍ   </h4> ";
echo "<table border='1'> \n";
?>
<tr>
<th>ບາໂຄດ</th>
<th>ຊື່ສີນຄ້າ</th>
 <th>ລາຍລະອຽດສີນຄ້າ</th>
<th>ປະເພດສີນຄ້າ</th>
<th>ຫົວໜ່ວຍສີນຄ້າ</th>
<th>ຈຳນວນ</th>
 <th>ຕົ້ນທຶນ</th>
 <th>ລາຄາຂາຍ</th>
    
</tr>
<?php
if ($result = $mysqli->query($fetch)) {
    while ($row = $result->fetch_row()) {

?>
        <tr>
                                                <td><?= $row[1] ?></td>
                                                <td><?= $row[2] ?></td>
                                                <td><?= $row[3] ?></td>
                                                <td><?= $row[4] ?></td>
                                                <td><?= $row[5] ?></td>
                                                <td><?= $row[6] ?></td>
                                                <td><?= $row[7] ?></td>
                                                <td><?= $row[8] ?></td>
        </tr>
<?php
    }
}
?>

</table>