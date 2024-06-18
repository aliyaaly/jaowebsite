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

                  
                        <!-- <a href="report/ex_report4.php" target="_blank">
                            <input type="button" class="btn btn-success" value="Export To Excel" />
                        </a> -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">
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
                                                                            <td style="color: green;" > <b><?= $rowAnswer['count_answers'] ?> ຄັ້ງ</b></td>

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



        </div>
</div>

<!-- /.row -->

</section>
<!-- /.content -->
</div>



</script>