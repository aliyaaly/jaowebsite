<?php
session_start();
require_once ("../config.php");


$date = date('d-m-Y');
$output_filename = "ລາຍງານຜູ້ຈ້າງງານຕາມການສະໝັກ" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");



echo "<h4>ລາຍງານຜູ້ຈ້າງງານຕາມການສະໝັກ </h4> ";
echo "<table border='1'> \n";
?>
<thead class="text-center">
    <tr>
        <th style="width: 20px;">ລຳດັບ</th>
        <th>ບໍລິສັດ</th>
        <th>ຕຳແໜ່ງ</th>
        <th>ປະເພດວຽກ</th>
        <th>ວັນທີ</th>

        <th>ສະຖານະ</th>


    </tr>
</thead>
<tbody>
    <?php
    $i = 1;
    $cbCom = $_GET['cbCom'];
    $cbJobType = $_GET['cbJobType'];
    $cbJobPosition = $_GET['cbJobPosition'];
    $cbStatus = $_GET['cbStatus'];
    $strDate = $_GET['strDate'];
    $endDate = $_GET['endDate'];
    $whereclause = "";
    if ($cbCom != '')
        $whereclause .= "companyId='$cbCom' AND ";
    if ($cbJobType != '')
        $whereclause .= "jobTypeId='$cbJobType' AND ";
    if ($cbJobPosition != '')
        $whereclause .= "job_position_id='$cbJobPosition' AND ";
    if ($cbStatus != '')
        $whereclause .= "status='$cbStatus' AND ";
    if ($strDate != '')
        $whereclause .= "createdAt between '$strDate' AND ";
    if ($endDate != '')
        $whereclause .= "'$endDate' AND ";
    if ($whereclause != "")
        $whereclause = "WHERE  " . substr($whereclause, 0, strlen($whereclause) - 5);


    $check = "SELECT * from v_apply  $whereclause order by createdAt asc";

    if ($result1 = $mysqli->query($check)) {
        while ($row1 = $result1->fetch_assoc()) {
            ?>
            <tr class="text-center">
                <td class="text-center"> <?= $i ?></td>
                <td class="text-center"> <?= $row1['companyName'] ?></td>
                <td class="text-center"> <?= $row1['jobPositionLao'] ?>
                    (<?= $row1['jobPositionEn'] ?>)</td>
                <td class="text-center"> <?= $row1['jobType'] ?></td>
                <td class="text-center"> <?= $row1['createdAt'] ?></td>
                <!-- <td class="text-center"> <a href="#"
                                                        onclick="openMyModal2(<?= $i ?>)"><i class='fas fa-file-pdf'
                                                            style='font-size:30px;color:red'></i></a></td> -->
                <td class="text-center">
                    <?php if ($row1['status'] == 'proceed') {

                        ?>
                        <h5><span class="badge bg-info"><?= $row1['status'] ?></span>
                        </h5>
                        <?php
                    } else if ($row1['status'] == 'cancel') {
                        ?>
                            <h5><span class="badge bg-danger"><?= $row1['status'] ?></span>
                            </h5>
                        <?php
                    } else if ($row1['status'] == 'denide') {
                        ?>
                                <h5><span class="badge bg-warning"><?= $row1['status'] ?></span>
                                </h5>
                        <?php
                    } else {
                        ?>
                                <h5><span class="badge bg-success"><?= $row1['status'] ?></span>
                                </h5>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <?php $i++;
        }
    }

    ?>
</tbody>

</table>