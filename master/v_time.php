<?php

htmltage("time Jao Website");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ຂໍ້ມູນເວລາ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?d=index">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຈັດການຂໍ້ມູນພື້ນຖານ</li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນເວລາ</li>
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
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-New">
                            ເພີ່ມ
                    </div>
                    <!-- /.card-header -->
                    <div class="modal fade" id="modal-lg-New">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">ເພີ່ມເວລາໃໝ່</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="?d=master/time" enctype="multipart/form-data" class="was-validated">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ຊື່ເວລາ</label>
                                                    <input type="text" Name="txtTime" class="form-control" required="">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ປີດ</button>
                                        <button type="submit" name="btnSaveNew" class="btn btn-primary">ບັນທືກ</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">

                                        <thead class="text-center">
                                            <tr>
                                                <th>ລ/ດ</th>
                                                <th>ເວລາ</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                      $i = 1;

                      if ($result = $mysqli->query($fetch)) {
                        while ($row = $result->fetch_row()) {

                          ?>
                                            <div class="modal fade" id="modal-lg-Edit<?= $i ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ແກ້ໄຂເວລາ</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="?d=master/time"
                                                            enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="text" hidden name="txtId"
                                                                    class="form-control" required=""
                                                                    value="<?= $row[0] ?>">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>ຊື່ເວລາ</label>
                                                                            <input type="text" name="txtTime"
                                                                                class="form-control" required=""
                                                                                value="<?= $row[1] ?>">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">ປິດ</button>
                                                                <button type="submit" name="btSaveEdit"
                                                                    class="btn btn-primary">ບັນທືກ</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>

                                            </div>



                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row[1] ?></td>

                                                <td align="center">
                                                    <a href="#"><i class="fas fa-edit" data-toggle="modal"
                                                            data-target="#modal-lg-Edit<?= $i ?>"></i></a>
                                                    <a href="?d=master/time&del=<?= $row[0] ?>"
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