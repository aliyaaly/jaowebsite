<?php
htmltage("Job Jao Website");




?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ລາຍງານປະກາດສະໝັກວຽກ </h1>
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
                                $comId = $_GET['comId'];
                                $fecthQuestion = "SELECT a.* from company as a where id ='$comId' ";
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
                                <table id="exampleReport1" class="table table-bordered beautified_report">
                                    <thead class="text-center">
                                        <tr>
                                            <th style="width: 20px;">ລຳດັບ</th>
                                            <th>ຕຳແໜ່ງ</th>
                                            <th>ພາສາ</th>
                                            <th>ປະສົບການ</th>
                                            <th>ເງິນເດືອນ</th>
                                            <th>ປະເພດວຽກ</th>
                                            <th>ເລີ່ມຕົ້ນ-ສິ້ນສຸດ</th>
                                            <th></th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;

                                        $employList = "SELECT * FROM v_employ WHERE companyId = '$comId' AND status='open' GROUP BY id ASC";
                                        if ($result = $mysqli->query($employList)) {
                                            while ($row1 = $result->fetch_assoc()) {
                                                $id = $row1['id'];
                                                $companyId = $row1['companyId'];
                                                $jobPositionLao = $row1['jobPositionLao'];
                                                $jobPositionEn = $row1['jobPositionEn'];
                                                $language = $row1['language'];
                                                $experience = $row1['experience'];
                                                $jobType = $row1['jobType'];
                                                $salary = $row1['salary'];
                                                $strDate = $row1['strDate'];
                                                $endDate = $row1['endDate'];
                                                $apply = "select count(companyId) as countApply from apply where companyId = '$companyId' and employId='$id' and isDelete=0";
                                                if ($result1 = $mysqli->query($apply)) {
                                                    while ($row2 = $result1->fetch_assoc()) {
                                                        ?>
                                                        <tr>

                                                            <td class="text-center"> <?= $i ?></td>
                                                            <td> <?= $jobPositionLao ?> (<?= $jobPositionEn ?>)</td>
                                                            <td class="text-center"> <?= $language ?></td>
                                                            <td class="text-center"> <?= $experience ?></td>
                                                            <td class="text-center"> <?= $salary ?></td>
                                                            <td class="text-center"> <?= $jobType ?></td>
                                                            <td class="text-center"> <?= $strDate ?> - <?= $endDate ?></td>
                                                            <td class="align-middle">ຈຳນວນຄົນສະໝັກ <b
                                                                    style="color: green;"><?= $row2['countApply'] ?></b> ຄົນ <a
                                                                    href="index.php?d=report/detailApplyReport1&companyId=<?= $companyId ?>&employId=<?= $id ?>"
                                                                    target="_blank"><i class="fas fa-eye"
                                                                        style="font-size: large;"></i></a></td>
                                                        </tr>
                                                        <?php

                                                    }
                                                  
                                                }
                                                $i++;  }
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



</script>