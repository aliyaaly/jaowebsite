<?php
session_start();
require_once ("../config.php");
require_once ("v_detail.php");

$date = date('d-m-Y');
$output_filename = "ລາຍງານປະເມີນການໃຊ້ບໍລິການ" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");
?>
<section class="content">
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <?php

                    $i = 1;
                    $user = $_GET['userId'];
                    $fecthQuestion = "SELECT * FROM v_survey where userId='$user' group by userId ";
                    if ($result = $mysqli->query($fecthQuestion)) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ຊື່ ແລະ ນາມສະກຸນ</label>
                                    <input type="text" disabled Name="" class="form-control"
                                        value="<?= $row['name'] ?> <?= $row['surname'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ວັນເດືອນປີເກີດ</label>
                                    <input type="text" disabled Name="" class="form-control"
                                        value="<?= $row['born'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ທີ່ຢູ່</label>
                                    <input type="text" disabled Name="" class="form-control"
                                        value="<?= $row['address'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ເມລ</label>
                                    <input type="text" disabled Name="" class="form-control"
                                        value="<?= $row['mail'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ເພດ</label>
                                    <input type="text" disabled Name="" class="form-control"
                                        value="<?= $row['gender'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ອາຍຸ</label>
                                    <input type="text" disabled Name="" class="form-control" value="<?= $row['age'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ຊົນເຜົ່າ</label>
                                    <input type="text" disabled Name="" class="form-control"
                                        value="<?= $row['tribe'] ?>">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>ລະດັບການສຶກສາ</label>
                                    <input type="text" disabled Name="" class="form-control"
                                        value="<?= $row['education'] ?>">
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="card-footer">
                <a href="report/detail.php" target="_blank">
                    <input type="button" class="btn btn-success" value="Export To Excel" />
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="exampleReport" class="table table-bordered beautified_report">
                            <thead class="text-center">
                                <tr>
                                    <th style="width: 20%;">ລຳດັບ</th>
                                    <th style="width: 80%;">ຄຳຖາມ</th>




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

                                        </tr>
                                        <?php

                                        $fecthChoice = "SELECT * FROM survey_choice WHERE questionId = $id";
                                        if ($resultChoice = $mysqli->query($fecthChoice)) {
                                            while ($rowChoice = $resultChoice->fetch_assoc()) {
                                                $choiceId = $rowChoice['id'];
                                                $questionId = $rowChoice['questionId'];
                                                $choiceText = $rowChoice['choiceText'];
                                                $choiceOrder = $rowChoice['choiceOrder'];


                                                $fecthAnswer = "SELECT * FROM v_survey where userId='$user'";
                                                if ($resultAnswer = $mysqli->query($fecthAnswer)) {
                                                    while ($rowAnswer = $resultAnswer->fetch_assoc()) {
                                                        if ($choiceId == $rowAnswer['choiceId']) {


                                                            ?>

                                                            <tr>
                                                                <td class="text-right" style="color: green;"><b>ຄຳຕອບ:</b></td>
                                                                <td style="background-color: green"> <b
                                                                        style="color: whitesmoke;"><?= $choiceText ?></b></td>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>