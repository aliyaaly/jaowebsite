<?php
htmltage("Job Jao Website");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ໜ້າຫຼັກ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ໜ້າຫຼັກ</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=master/company';"
                    style="cursor:pointer">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-boxes"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text ">ຈັດການຂໍ້ມູນພື້ນຖານ</span>
                            <span class="info-box-number ">9 ເມນູ

                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- ./col -->


                <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=approve/approveEmployerList';"
                    style="cursor:pointer">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text ">ອະນຸມັດລາຍການປະກາດວຽກ</span>
                            <span class="info-box-number ">1 ເມນູ

                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- ./col -->
                <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=report/report1';"
                    style="cursor:pointer">
                    <div class="info-box">
                        <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-chart-bar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text ">ລາຍງານ</span>
                            <span class="info-box-number ">2 ເມນູ

                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h4 style="color:blue">==>10 ອັນດັບຕຳແໜ່ງວຽກທີ່ຄົນສະໝັກຫຼາຍທີ່ສຸດ</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="exampleReport" class="table table-bordered beautified_report">

                                <thead class="text-center">
                                    <tr>
                                        <th>ລຳດັບ</th>
                                        <th>ຕຳແໜ່ງວຽກ</th>
                                        <th>ຈຳນວນ</th>

                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    $i = 1;
                                    $fetch = "SELECT *,count(job_position_id) as countJobPositionId FROM v_apply   group by job_position_id order by countJobPositionId desc LIMIT 10";
                                    if ($result = $mysqli->query($fetch)) {
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row['jobPositionLao'] ?> (<?= $row['jobPositionEn'] ?>)</td>
                                                <td><b style="color:green" ><?= $row['countJobPositionId'] ?> ຄົນ</b></td>
                                             

                                            </tr>
                                            <?php $i++;
                                        }
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
</div>