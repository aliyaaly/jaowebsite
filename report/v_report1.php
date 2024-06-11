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


                        <a href="report/ex_report1.php" target="_blank">
                            <input type="button" class="btn btn-success" value="Export To Excel" />
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">
                                        <thead class="text-center">
                                            <tr>
                                                <th>ລ/ດ</th>
                                                <th>ຊື່ບໍລິສັດ</th>
                                                <th>ເບີໂທ</th>
                                                <th>ອີເມລ</th>
                                                <th>ທີ່ຢູ່</th>
                                                <th>ເວັບໄຊ້</th>
                                                <th>ລາຍລະອຽດ</th>
                                                <th>ໂລໂກ້</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if ($result = $mysqli->query($sql)) {
                                                while ($row = $result->fetch_row()) {

                                                    ?>
                                                    <tr class="text-center">
                                                        <td class="align-middle">
                                                            <?= $i ?>
                                                        </td>
                                                        <td class="align-middle">
                                                            <?= $row[2] ?>
                                                        </td>
                                                        <td class="align-middle">
                                                            <?= $row[4] ?>
                                                        </td>
                                                        <td class="align-middle">
                                                            <?= $row[5] ?>
                                                        </td>
                                                        <td class="align-middle">
                                                            <?= $row[6] ?>
                                                        </td>
                                                        <td class="align-middle"><a target="_blank"
                                                                href="https://<?= $row[7] ?>">
                                                                <?= $row[7] ?>
                                                            </a></td>
                                                        <td class="align-middle">
                                                            <?= $row[8] ?>
                                                        </td>
                                                        <?php

                                                        $imagePath = "dist/img/company/" . $row[3];
                                                        if (!file_exists($imagePath) || $row[3] == '') {
                                                            $imagePath = "dist/img/default.png";
                                                        }
                                                        ?>
                                                        <td class="align-middle"><img class="img-fluid img-thumbnail"
                                                                src="<?= $imagePath ?>" /></td>


                                                    </tr>
                                                    <?php $i++;
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


<script language="javascript" type="text/javascript">




</script>