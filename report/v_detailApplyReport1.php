<?php
htmltage("Job Jao Website");




?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ລາຍງານຜູ້ສະໝັກວຽກ </h1>
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
                    <form action="" method="post">
                        <div class="card-header">
                            <div class="row">
                                <?php
                                $i = 1;
                                $companyId = $_GET['companyId'];
                                $employId = $_GET['employId'];
                                $fecthQuestion = "SELECT a.* from company as a where id ='$companyId' ";
                                if ($result = $mysqli->query($fecthQuestion)) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ບໍລິສັດ</label>
                                                <input type="text" disabled Name="" class="form-control"
                                                    value="<?= $row['name'] ?> ">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ເບີໂທ</label>
                                                <input type="text" disabled Name="" class="form-control"
                                                    value="<?= $row['phone'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ທີ່ຢູ່</label>
                                                <input type="text" disabled Name="" class="form-control"
                                                    value="<?= $row['address'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ເມລ</label>
                                                <input type="text" disabled Name="" class="form-control"
                                                    value="<?= $row['mail'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ເວັບໄຊ້</label>
                                                <input type="text" disabled Name="" class="form-control"
                                                    value="<?= $row['website'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ເພີ່ມເຕີມ</label>
                                                <input type="text" disabled Name="" class="form-control"
                                                    value="<?= $row['description'] ?>">
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <!-- <div class="card-footer">
                            <a href="report/ex_detail.php" target="_blank">
                                <input type="button" class="btn btn-success" value="Export To Excel" />
                            </a>
                        </div> -->
                    </form>

                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="exampleReport" class="table table-bordered beautified_report">
                                    <thead class="text-center">
                                        <tr>
                                            <th style="width: 20px;">ລຳດັບ</th>
                                            <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                            <th>ເບີໂທ</th>
                                            <th>ເມລ</th>
                                            <th>ທີ່ຢູ່</th>
                                            <th>ຫົວຂໍ້</th>
                                            <th>ຕຳແໜ່ງ</th>
                                            <th>ແນບໄຟລ</th>
                                            <th>ສະຖານະ</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;

                                        $employList = "SELECT a.* from v_apply as a where companyId ='$companyId' and employId='$employId' and isDelete=0";
                                        if ($result = $mysqli->query($employList)) {
                                            while ($row1 = $result->fetch_assoc()) {

                                                ?>
                                                <div class="modal fade" id="modallgImage<?= $i ?>">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <?php
                                                                $imagePath = "register/assets/img/cv/" . $row1['file'];
                                                                ?>
                                                                <embed src="<?= $imagePath ?>" width="100%" height="800px" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <tr>

                                                    <td class="text-center"> <?= $i ?></td>
                                                    <td> <?= $row1['firstName'] ?>         <?= $row1['lastName'] ?></td>
                                                    <td class="text-center"> <?= $row1['phone'] ?></td>
                                                    <td class="text-center"> <?= $row1['mail'] ?></td>
                                                    <td class="text-center"> <?= $row1['userAddress'] ?></td>
                                                    <td class="text-center"> <?= $row1['title'] ?></td>
                                                    <td class="text-center"> <?= $row1['jobPositionLao'] ?>
                                                        (<?= $row1['jobPositionEn'] ?>)</td>
                                                    <td class="text-center"> <a href="#" onclick="openMyModal2(<?= $i ?>)"><i
                                                                class='fas fa-file-pdf'
                                                                style='font-size:30px;color:red'></i></a></td>
                                                    <td class="text-center">
                                                        <?php if ($row1['status'] == 'proceed') {

                                                            ?>
                                                            <h5><span class="badge bg-info"><?= $row1['status'] ?></span>
                                                            </h5>
                                                            <?php
                                                        } else if ($row1['status'] == 'cancel') {
                                                            ?>
                                                                <h5><span class="badge bg-danger"><?= $row1['status'] ?></span>
                                                                </h5>
                                                            <?php
                                                        } else if ($row1['status'] == 'denide') {
                                                            ?>
                                                                    <h5><span class="badge bg-warning"><?= $row1['status'] ?></span>
                                                                    </h5>
                                                            <?php
                                                        } else {
                                                            ?>
                                                                    <h5><span class="badge bg-success"><?= $row1['status'] ?></span>
                                                                    </h5>
                                                            <?php
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php


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
    </section>

    <!-- /.row -->


    <!-- /.content -->
</div>



<script>
    function openMyModal2(i) {
        var para = i;

        // alert(id);

        let myModal = new
            bootstrap.Modal(document.getElementById('modallgImage' + para), {});
        myModal.show();




    }
</script>