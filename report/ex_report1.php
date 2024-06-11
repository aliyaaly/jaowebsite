<?php
session_start();
require_once ("../config.php");
require_once ("m_report1.php");

$date = date('d-m-Y');
$output_filename = "ລາຍງານຜູ້ຈ້າງງານ" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");




echo "<table border='1'> \n";
?>
<tr>
    <th>ລ/ດ</th>
    <th>ຊື່ບໍລິສັດ</th>
    <th>ເບີໂທ</th>
    <th>ອີເມລ</th>
    <th>ທີ່ຢູ່</th>
    <th>ເວັບໄຊ້</th>
    <th>ລາຍລະອຽດ</th>
    <th>ໂລໂກ້</th>

</tr>
<?php
$i=1;
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_row()) {

        ?>
        <tr class="text-center">
            <td class="align-middle">
                <?= $i ?>
            </td>
            <td class="align-middle">
                <?= $row[2] ?>
            </td>
            <td class="align-middle">
                <?= $row[4] ?>
            </td>
            <td class="align-middle">
                <?= $row[5] ?>
            </td>
            <td class="align-middle">
                <?= $row[6] ?>
            </td>
            <td class="align-middle"><a target="_blank" href="https://<?= $row[7] ?>">
                    <?= $row[7] ?>
                </a></td>
            <td class="align-middle">
                <?= $row[8] ?>
            </td>
            <?php

            $imagePath = "dist/img/company/" . $row[3];
            if (!file_exists($imagePath) || $row[3] == '') {
                $imagePath = "dist/img/default.png";
            }
            ?>
            <td class="align-middle"><img class="img-fluid img-thumbnail" src="<?= $imagePath ?>" /></td>


        </tr>
        <?php $i++;
    }
}
?>

</table>