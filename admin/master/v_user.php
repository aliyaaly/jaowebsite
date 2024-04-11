<?php

htmltage("Job Jao Website");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຈັດການຂໍ້ມູນພື້ນຖານ</li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</li>
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
                                                <th>ຊື່ຜູ້ໃຊ້</th>
                                                <th>ຊື່</th>
                                                <th>ນາມສະກຸນ</th>
                                                <th>ສິດເຂົ້າໃຊ້</th>
                                                <th class="text-center">ຣີເຊັດລະຫັດ</th>
                                                <th class="text-center">ລົບ</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                      $i = 1;

                      if ($result = $mysqli->query($fetch)) {
                        while ($row = $result->fetch_row()) {

                      ?>




                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row[1] ?></td>
                                                <td><?= $row[4] ?></td>
                                                <td><?= $row[5] ?></td>
                                                <td><?= $row[3] ?></td>
                                                <td align="center"><a href="?d=master/user&reset=<?= $row[0] ?>&userName=<?= $row[1] ?>"><i
                                                            class="fas fa-edit"
                                                            onclick="return confirm('ຫຼັງຈາກ Reset ລະຫັດຂອງທ່ານແມ່ນ 123456')"></i></a>
                                                </td>
                                                <td align="center">
                                                    <a href="?d=master/user&del=<?= $row[0] ?>"
                                                        onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i
                                                            class="far fa-trash-alt"></i></a>
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