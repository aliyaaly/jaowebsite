<?php



?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ສຳເລັດການຂາຍສິນຄ້າອອນລາຍ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>

                        <li class="breadcrumb-item active">ສຳເລັດການຂາຍສິນຄ້າອອນລາຍ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="background-color: #bee5eb;">
                        <form method="post">
                            <div class="row">

                                <div class="col-sm-2">
                                    <div class="form-group">


                                        <select class="form-control select2" name="id">
                                            <option value="0">---ເລືອກໃບບິນ---</option>
                                            <?php
                                            $id = "SELECT * FROM v_sale where status = 'ສັ່ງຊື້ຈາກອອນລາຍ'";
                                            if ($resultc = $mysqli->query($id)) {
                                                while ($rowc = $resultc->fetch_assoc()) {
                                            ?>
                                                    <option value="<?= $rowc['id'] ?>">ບິນເລກທີ: <?= $rowc['id'] ?></option>
                                            <?php }
                                            } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" name="btnSearch" class="btn btn-primary">ຄົ້ນຫາ</button>
                                </div>



                            </div>
                        </form>
                    </div>


    </section>
    <!-- Main content -->



    <section class="content">

        <div class="row">
            <!-- left column -->

            <div class="col-md-12">
                <div class="card">

                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">
                                        <thead class="table-info">
                                            <tr>
                                                <th class="text-center">ບິນເລກທີ</th>
                                                <th>ຊື່ລູກຄ້າ</th>
                                                <th>ທີ່ຢູ່</th>
                                                <th>ເບີໂທ</th>
                                                <th>ລາຄາລວມ</th>
                                                <th>ວັນທີ</th>
                                                <th class="text-center">ສະຖານະ</th>
                                                <th class="text-center">ລາຍລະອຽດ</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($result = $mysqli->query($sql)) {
                                                while ($row = $result->fetch_row()) {

                                            ?>
                                                    <tr>
                                                        <td align="center"><?= $row[0] ?></td>
                                                        <td><?= $row[6] ?></td>
                                                        <td><?= $row[7] ?></td>
                                                        <td><?= $row[8] ?></td>
                                                        <td><?= number_format($row[3]) ?></td>
                                                        <td><?= $row[2] ?></td>
                                                        <td align="center" style="color: #FF6F61;"><?= $row[5] ?></td>
                                                        <td align="center"> <button class="btn btn-primary" name="btnHistory" data-toggle="modal" data-target="#myModal"><i class="fas fa-eye"></i></button></td>
                                                    </tr>
                                            <?php
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

                <form method="post">
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit" name="btnSubmit">ສຳເລັດ</button>
                    </div>
            </div>

        </div>
</div>
<!-- /.row -->
</form>
</section>
</div>
<!-- /.content -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ລາຍລະອຽດ ໃບບິນເລກທີ <?= $_SESSION['id'] ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <input type="text" hidden name="txtId" class="form-control" required="" value="<?= $_SESSION['id'] ?>">

                <div class="table-responsive">
                    <table id="example1" class="table table-bordered beautified_report">
                        <thead class="table-info">
                            <tr>
                                <th>ບິນເລກທີ</th>
                                <th>ເລກບາໂຄດ</th>
                                <th>ຊື່ສິນຄ້າ</th>
                                <th>ລາຄາສີນຄ້າ</th>
                                <th>ຈຳນວນ</th>
                                <th>ລາຄາລວມ</th>
                                <th>ວັນທີ</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $details = "SELECT *
                             FROM v_sale_details WHERE id='".$_SESSION['id']."' AND status = 'ສັ່ງຊື້ຈາກອອນລາຍ'  ORDER BY id ASC";
                            if ($result = $mysqli->query($details)) {
                                while ($row = $result->fetch_row()) {

                            ?>
                                    <tr>
                                        <td><?= $row[0] ?></td>
                                        <td><?= $row[1] ?></td>
                                        <td><?= $row[2] ?></td>
                                        <td><?= $row[3] ?></td>
                                        <td><?= $row[4] ?></td>
                                        <td><?= $row[5] ?></td>
                                        <td><?= $row[6] ?></td>

                                    </tr>
                            <?php
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
<script>
    function toggle(source) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != source)
                checkboxes[i].checked = source.checked;
        }
    }
</script>