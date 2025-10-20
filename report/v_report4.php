<?php
htmltage("Job Jao Website");




?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ລາຍງານປະເມີນການໃຊ້ບໍລິການ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">ລາຍງານ</li>
                        <li class="breadcrumb-item active">ລາຍງານປະເມີນການໃຊ້ບໍລິການ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <form action="" method="post">
                            <select name="cb" id="select2" style="width: 250px;" onchange="this.form.submit()">
                                <option value="0">-- ກະລຸນາເລືອກ--</option>
                                <option value="1">ຕາມຈຳນວນຄັ້ງໃນການຕອບ</option>
                                <option value="2">ຕາມບຸກຄົນທີ່ຕອບ</option>
                            </select>
                            <?php
                            // echo '<script>alert("cb:' . $_POST['cb'] . '")</script>';
                       
                            if ($_POST['cb'] == 1) {


                                ?>
                                <a href="report/ex_report4.php?cb=<?= $_POST['cb'] ?>" target="_blank">
                                    <input type="button" class="btn btn-success" value="Export To Excel" />
                                </a>
                            <?php } elseif ($_POST['cb'] == 2) {
                                ?>
                                <a href="report/ex_report4.php?cb=<?= $_POST['cb'] ?>" target="_blank">
                                    <input type="button" class="btn btn-primary" value="Export To Excel" />
                                </a>
                                <?php
                            } ?>

                        </form>
                    </div>
                    <?php
                    // echo '<script>alert("cb:' . $_POST['cb'] . '")</script>';
                    if ($_POST['cb'] == 1) {


                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h2>ລາຍງານຕາມຈຳນວນຄັ້ງໃນການຕອບ</h2>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="exampleReport" class="table table-bordered beautified_report">
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
                                                                                        ຄົນ</b></td>

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
                    <?php } elseif ($_POST['cb'] == 2) {
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h2> ລາຍງານຕາມບຸກຄົນທີ່ຕອບ</h2>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="exampleReport" class="table table-bordered beautified_report">
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
                                                    <th></th>
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
                                                            <td> <a href="index.php?d=report/detail&userId=<?= $row['userId'] ?>"
                                                                    target="_blank"><i class="fas fa-eye"></i></a></td>
                                                        </tr>
                                                        <?php


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
                        <?php
                    } ?>

                </div>


            </div>



        </div>
</div>

<!-- /.row -->

</section>
<!-- /.content -->
</div>



</script>