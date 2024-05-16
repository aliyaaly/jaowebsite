<?php

htmltage("Job Jao Website");
checkExpired($mysqli, $fetch);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ອະນຸມັດລາຍການປະກາດວຽກ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>

                        <li class="breadcrumb-item active">ອະນຸມັດລາຍການປະກາດວຽກ</li>
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
                    <!-- <div class="card-header">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-New">
                            ເພີ່ມ
                    </div> -->
                    <!-- /.card-header -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">

                                        <thead class="text-center">
                                            <tr>
                                                <th>ລ/ດ</th>
                                                <th>ຊື່ບໍລິສັດ</th>
                                                <th>ຕຳແໜ່ງ</th>
                                                <th>ພາສາ</th>
                                                <th>ປະສົບການ</th>
                                                <th>ເງິນເດືອນ</th>
                                                <th>ເວລາ</th>
                                                <th>ວັນທີ່ປະກາດ</th>
                                                <th>ວັນທີ່ສິ້ນສຸດ</th>

                                                <th class="text-center">ສະຖານະ</th>
                                                <th class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $i = 1;

                                            if ($result = $mysqli->query($fetch)) {
                                                while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td><?= $row['companyName'] ?></td>
                                                        <td><?= $row['name'] ?></td>
                                                        <td><?= $row['language'] ?></td>
                                                        <td><?= $row['experience'] ?></td>
                                                        <td><?= $row['salary'] ?></td>
                                                        <td><?= $row['time'] ?></td>
                                                        <td><?= $row['strDate'] ?></td>
                                                        <td><?= $row['endDate'] ?></td>
                                                        <?php if ($row['status'] == 'open') {
                                                            ?>
                                                            <td align="center">
                                                                <h4><span
                                                                        class="badge badge-pill badge-success"><?= $row['status'] ?></span>
                                                                </h4>
                                                            </td>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <td align="center">
                                                                <h4><span
                                                                        class="badge badge-pill badge-danger"><?= $row['status'] ?></span>
                                                                </h4>
                                                            </td>
                                                            <?php
                                                        }
                                                        ?>
                                                        <td align="center">
                                                            <a href="?d=approve/approveEmployerList&id=<?= $row['id'] ?>"
                                                                class="btn btn-success"
                                                                onclick="return confirm('ທ່ານຕ້ອງການອະນຸມັດແທ້ບໍ...?')">ອະນຸມັດ<i
                                                                    class="far fa-check-circle"></i></a>
                                                            <a href="?d=approve/approveEmployerList&close=<?= $row['id'] ?>"
                                                                class="btn btn-danger"
                                                                onclick="return confirm('ທ່ານຕ້ອງການສິ້ນສຸດແທ້ບໍ...?')">ສິ້ນສຸດ<i
                                                                    class="far fa-eye-slash"></i></a>
                                                        </td>
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


                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>