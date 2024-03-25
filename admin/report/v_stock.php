<?php
htmltage("Job Jao Website");




?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ລາຍງານສິນຄ້າຍັງເຫຼືອໜ້ອຍ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active">ລາຍງານ</li>
                        <li class="breadcrumb-item active">ລາຍງານການຂາຍ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <div class="row">

            <!-- left column -->
            <div class="col-md-12">
                <div class="card">


                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div>
                                    <a href="report/ex_stock.php?">
                                        <input type="button" class="btn btn-success" value="Export To Excel" />
                                    </a>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">


                                        <thead>
                                            <tr>

                                                <th>ບາໂຄດ</th>
                                                <th>ຊື່ສີນຄ້າ</th>
                                                <th>ລາຍລະອຽດສີນຄ້າ</th>
                                                <th>ປະເພດສີນຄ້າ</th>
                                                <th>ຫົວໜ່ວຍສີນຄ້າ</th>
                                                <th>ຈຳນວນ</th>
                                                <th>ຕົ້ນທຶນ</th>
                                                <th>ລາຄາຂາຍ</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody1">
                                            <?php
                                            $i = 1;

                                            if ($result = $mysqli->query($fetch)) {
                                                while ($row = $result->fetch_row()) {

                                            ?>
                                                    <tr>

                                                        <td><?= $row[1] ?></td>
                                                        <td><?= $row[2] ?></td>
                                                        <td><?= $row[3] ?></td>
                                                        <td><?= $row[4] ?></td>
                                                        <td><?= $row[5] ?></td>

                                                        <td style="color: red;"><?= $row[6] ?></td>
                                                        <td><?= $row[7] ?></td>
                                                        <td><?= $row[8] ?></td>

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
    </div>