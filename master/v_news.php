<?php

htmltage("news Jao Website");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ຂໍ້ມູນຂ່າວສານ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?d=index">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item active">ຈັດການຂໍ້ມູນພື້ນຖານ</li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນຂ່າວສານ</li>
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
                                    <h4 class="modal-title">ເພີ່ມຂ່າວສານໃໝ່</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="?d=master/news" enctype="multipart/form-data" class="was-validated">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ຂ່າວສານ</label>
                                                    <input type="text" Name="txtNews" class="form-control" required="">


                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>ຮູບພາບ</label>
                                                    <input name="edit_fileUpload" class="form-control" type="file"
                                                        required>
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
                                                <th>ຂ່າວສານ</th>
                                                <th>ຮູບພາບ</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $i = 1;

                                            if ($result = $mysqli->query($fetch)) {
                                                while ($row = $result->fetch_row()) {

                                                    ?>




                                                    <tr>
                                                        <td class="align-middle"><?= $i ?></td>
                                                        <td class="align-middle"><?= $row[2] ?></td>
                                                        <?php

                                                        $imagePath = "register/assets/img/feed/" . $row[1];
                                                        if (!file_exists($imagePath) || $row[1] == '') {
                                                            $imagePath = "dist/img/default.png";
                                                        }
                                                        ?>
                                                        <td class="align-middle"><img class="img-fluid img-thumbnail w-50"
                                                               src="<?= $imagePath ?>" /></td>

                                                        <td class="align-middle">

                                                            <a href="?d=master/news&del=<?= $row[0] ?>"
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