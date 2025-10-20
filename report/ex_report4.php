<?php
session_start();
require_once ("../config.php");
require_once ("m_report4.php");

$date = date('d-m-Y');
$output_filename = "ລາຍງານປະເມີນການໃຊ້ບໍລິການ" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");


if ($_GET['cb'] == "1") {
    $title = "ຕາມຈຳນວນຄັ້ງໃນການຕອບ";
    echo "<h4>ລາຍງານປະເມີນການໃຊ້ບໍລິການ " . $title . "</h4> ";
    echo "<table border='1'> \n";
    ?>
    <thead class="text-center">
        <tr>
            <th style="width: 20px;">no</th>
            <th style="width: 50%;">ຄຳຖາມ</th>
            <th style="width: 50%;">ຄຳຕອບ</th>



        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $fecthQuestion = "SELECT * FROM survey_question where id<>2 ";
        if ($result = $mysqli->query($fecthQuestion)) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $questionOrder = $row['questionOrder'];
                $questionText = $row['questionText'];
                ?>
                <tr>

                    <td class="text-center"><b> <?= $i ?></b></td>
                    <td> <b><?= $questionText ?></b></td>
                    <td></td>
                </tr>
                <?php

                $fecthChoice = "SELECT * FROM survey_choice WHERE questionId = $id";
                if ($resultChoice = $mysqli->query($fecthChoice)) {
                    while ($rowChoice = $resultChoice->fetch_assoc()) {
                        $choiceId = $rowChoice['id'];
                        $questionId = $rowChoice['questionId'];
                        $choiceText = $rowChoice['choiceText'];
                        $choiceOrder = $rowChoice['choiceOrder'];


                        $fecthAnswer = "SELECT a.*,count(a.choiceId) as count_answers FROM v_survey as a GROUP BY choiceId";
                        if ($resultAnswer = $mysqli->query($fecthAnswer)) {
                            while ($rowAnswer = $resultAnswer->fetch_assoc()) {
                                if ($choiceId == $rowAnswer['choiceId']) {


                                    ?>

                                    <tr>
                                        <td class="text-center"></td>
                                        <td> <?= $choiceText ?></td>
                                        <td style="color: green;"> <b><?= $rowAnswer['count_answers'] ?>
                                                ຄັ້ງ</b></td>

                                    </tr>
                                    <?php
                                }
                            }
                        }
                    }
                }
                $i++;
            }
        }
        ?>
    </tbody>

    </table>
    <?php
} elseif ($_GET['cb'] == "2") {
    $title = "ຕາມບຸກຄົນທີ່ຕອບ";
    echo "<h4>ລາຍງານປະເມີນການໃຊ້ບໍລິການ " . $title . "</h4> ";
    echo "<table border='1'> \n";
    ?>
    <thead class="text-center">
        <tr>
            <th style="width: 20px;">no</th>
            <th>ຊື່ ນາມສະກຸນ</th>
            <th>ວັນເດືອນປີເກີດ</th>
            <th>ທີ່ຢູ່</th>
            <th>ເບີໂທ</th>
            <th>ເມລ</th>
            <th>ເພດ</th>
            <th>ອາຍຸ</th>
            <th>ຊົນເຜົ່າ</th>
            <th>ລະດັບການສຶກສາ</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $fecthQuestion = "SELECT * FROM v_survey group by userId ";
        if ($result = $mysqli->query($fecthQuestion)) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>

                    <td class="text-center"><b> <?= $i ?></b></td>
                    <td><?= $row['name'] ?>             <?= $row['surname'] ?></td>
                    <td><?= $row['born'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['mail'] ?></td>
                    <td class="text-center"><?= $row['gender'] ?></td>
                    <td class="text-center"><?= $row['age'] ?></td>
                    <td><?= $row['tribe'] ?></td>
                    <td><?= $row['education'] ?></td>

                </tr>
                <?php


                $i++;
            }
        }
        ?>
    </tbody>

    </table>
    <?php
}
?>