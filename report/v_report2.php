<?php
htmltage("Job Jao Website");




?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ລາຍງານຜູ້ຈ້າງງານ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">ລາຍງານ</li>
                        <li class="breadcrumb-item active">ລາຍງານຜູ້ຈ້າງງານ</li>
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
                        <form method="get">
                            <input type="hidden" name="d" value="report/report" />
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ແຕ່ວັນທີ</label>
                                        <input type="date" name="strDate" class="form-control" autocomplete="off" value="<?= $_GET['strDate'] ?>" required="required">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ເຖິງວັນທີ</label>
                                        <input type="date" name="endDate" class="form-control" autocomplete="off" value="<?= $_GET['endDate'] ?>" required="required">
                                    </div>
                                </div>



                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-default" onclick="document.location='?d=report/sale'">ຍົກເລີກ</button>
                                <button type="submit" class="btn btn-primary">ຄົ້ນຫາ</button>
                                <?php if ($_GET['strDate'] != '' && $_GET['endDate'] != '') { ?>
                                    <a href="report/ex_sale.php?strDate=<?= $_GET['strDate'] ?>&endDate=<?= $_GET['endDate'] ?>" target="_blank">
                                        <input type="button" class="btn btn-success" value="Export To Excel" />
                                    </a>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example1" class="table table-bordered beautified_report">
                                                        <thead>
                                                            <tr>
                                                                <th>ບິນເລກທີ</th>
                                                                <th>ເລກບາໂຄດ</th>
                                                                <th>ຊື່ສິນຄ້າ</th>
                                                                <th>ລາຄາສີນຄ້າ</th>
                                                                <th>ຈຳນວນ</th>
                                                                <th>ລາຄາລວມ</th>
                                                                <th>ວັນທີ</th>
                                                                <th>ສະຖານະ</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if ($result = $mysqli->query($sql)) {
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
                                                                        <td><?= $row[7] ?></td>
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
                                <?php } ?>
                            </div>


                    </div>



                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>


<script language="javascript" type="text/javascript">




</script>