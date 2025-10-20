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
                        <h4 style="color:blue">ລາຍງານຜູ້ຈ້າງງານຕາມການສະໝັກ</h4>
                        <hr>

                        <form method="get">
                            <input type="hidden" name="d" value="report/report1" />
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>ບໍລິສັດ</label>
                                        <select class="form-control" name="cbCom" id="select2">
                                            <option value="">--ກະລຸນາເລືອກ--</option>
                                            <?php
                                            $job = "select * from company where isDelete=0";

                                            if ($resultjob = $mysqli->query($job)) {
                                                while ($rowjob = $resultjob->fetch_assoc()) {
                                                    ?>
                                                    <option value="<?= $rowjob['id'] ?>"><?= $rowjob['name'] ?>
                                                    </option>
                                                <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>ປະເພດວຽກ</label>
                                        <select class="form-control" name="cbJobType" id="select3">
                                            <option value="">--ກະລຸນາເລືອກ--</option>
                                            <?php
                                            $job = "select * from job where isDelete=0";

                                            if ($resultjob = $mysqli->query($job)) {
                                                while ($rowjob = $resultjob->fetch_assoc()) {
                                                    ?>
                                                    <option value="<?= $rowjob['id'] ?>"><?= $rowjob['name'] ?>
                                                    </option>
                                                <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>ຕຳແໜ່ງວຽກ</label>
                                        <select class="form-control" name="cbJobPosition" id="select4">
                                            <option value="">--ກະລຸນາເລືອກ--</option>
                                            <?php
                                            $job = "select * from job_position where isDelete=0";

                                            if ($resultjob = $mysqli->query($job)) {
                                                while ($rowjob = $resultjob->fetch_assoc()) {
                                                    ?>
                                                    <option value="<?= $rowjob['id'] ?>"><?= $rowjob['jobPositionLao'] ?>
                                                        (<?= $rowjob['jobPositionEn'] ?>)
                                                    </option>
                                                <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>ສະຖານະ</label>
                                        <select class="form-control" name="cbStatus" id="select5">
                                            <option value="">--ກະລຸນາເລືອກ--</option>
                                            <option value="accept">accept</option>
                                            <option value="proceed">proceed</option>
                                            <option value="cancel">cancel</option>
                                            <option value="denide">denide</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ແຕ່ວັນທີ</label>
                                        <input type="date" name="strDate" class="form-control" autocomplete="off"
                                            value="<?= $_GET['strDate'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>ເຖິງວັນທີ</label>
                                        <input type="date" name="endDate" class="form-control" autocomplete="off"
                                            value="<?= $_GET['endDate'] ?>">
                                    </div>
                                </div>



                            </div>

                            <div class="box-footer">
                                <button type="reset" class="btn btn-default"
                                    onclick="document.location='?d=report/report1'">ຍົກເລີກ</button>
                                <button type="submit" class="btn btn-success">ຄົ້ນຫາ</button>
                                <?php

                                // if ($_GET['cbCom']!= '' || $_GET['cbJobType']!= '' || $_GET['cbJobPosition']!= '' || $_GET['cbStatus']!= '' || $_GET['strDate'] != '' || $_GET['endDate'] != '') {
                                ?>
                                <a href="report/ex_report1.php?cbCom=<?= $_GET['cbCom'] ?>&cbJobType=<?= $_GET['cbJobType'] ?>&cbJobPosition=<?= $_GET['cbJobPosition'] ?>&cbStatus=<?= $_GET['cbStatus'] ?>&strDate=<?= $_GET['strDate'] ?>&endDate=<?= $_GET['endDate'] ?>"
                                    target="_blank">
                                    <input type="button" class="btn btn-primary" value="Export To Excel" />
                                </a>
                                <?php
                                // } 
                                ?>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="exampleReport1" class="table table-bordered beautified_report">
                                        <thead class="text-center">
                                            <tr>
                                                <th style="width: 20px;">ລຳດັບ</th>
                                                <th>ບໍລິສັດ</th>
                                                <th>ຕຳແໜ່ງ</th>
                                                <th>ປະເພດວຽກ</th>
                                                <th>ວັນທີ</th>
                                                <!-- <th>ແນບໄຟລ</th> -->
                                                <th>ສະຖານະ</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $cbCom = $_GET['cbCom'];
                                            $cbJobType = $_GET['cbJobType'];
                                            $cbJobPosition = $_GET['cbJobPosition'];
                                            $cbStatus = $_GET['cbStatus'];
                                            $strDate = $_GET['strDate'];
                                            $endDate = $_GET['endDate'];
                                            $whereclause = "";
                                            if ($cbCom != '')
                                                $whereclause .= "companyId='$cbCom' AND ";
                                            if ($cbJobType != '')
                                                $whereclause .= "jobTypeId='$cbJobType' AND ";
                                            if ($cbJobPosition != '')
                                                $whereclause .= "job_position_id='$cbJobPosition' AND ";
                                            if ($cbStatus != '')
                                                $whereclause .= "status='$cbStatus' AND ";
                                            if ($strDate != '')
                                                $whereclause .= "createdAt between '$strDate' AND ";
                                            if ($endDate != '')
                                                $whereclause .= "'$endDate' AND ";
                                            if ($whereclause != "")
                                                $whereclause = "WHERE  " . substr($whereclause, 0, strlen($whereclause) - 5);

                                            echo '<script>console.log("whereclause:' . $whereclause . '")</script>';
                                            $check = "SELECT * from v_apply  $whereclause order by createdAt asc";
                                            echo '<script>console.log("sql:' . $check . '")</script>';
                                            if ($result1 = $mysqli->query($check)) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                    ?>
                                                    <tr class="text-center">
                                                        <td class="text-center"> <?= $i ?></td>
                                                        <td class="text-center"> <?= $row1['companyName'] ?></td>
                                                        <td class="text-center"> <?= $row1['jobPositionLao'] ?>
                                                            (<?= $row1['jobPositionEn'] ?>)</td>
                                                        <td class="text-center"> <?= $row1['jobType'] ?></td>
                                                        <td class="text-center"> <?= $row1['createdAt'] ?></td>
                                                        <!-- <td class="text-center"> <a href="#"
                                                        onclick="openMyModal2(<?= $i ?>)"><i class='fas fa-file-pdf'
                                                            style='font-size:30px;color:red'></i></a></td> -->
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
    </section>
    <!-- /.content -->
    <br>
    <br>
    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="color:blue">ລາຍງານຜູ້ຈ້າງງານທັງໝົດ</h4>
                        <hr>
                        <a href="report/ex_report2.php" target="_blank">
                            <input type="button" class="btn btn-success" value="Export To Excel" />
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="exampleReport" class="table table-bordered beautified_report">
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
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if ($result = $mysqli->query($sql)) {
                                                while ($row = $result->fetch_row()) {
                                                    $check = "SELECT count(a.companyId) as countEmploy from employ as a where companyId ='$row[0]' and status='open'";
                                                    if ($result1 = $mysqli->query($check)) {
                                                        while ($row1 = $result1->fetch_row()) {
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

                                                                <td class="align-middle">ປະກາດສະໝັກວຽກ <b
                                                                        style="color: green;"><?= $row1[0] ?></b> ຕຳແໜ່ງ <a
                                                                        href="index.php?d=report/detailReport1&comId=<?= $row[0] ?>"
                                                                        target="_blank"><i class="fas fa-eye"
                                                                            style="font-size: large;"></i></a></td>
                                                            </tr>
                                                            <?php $i++;
                                                        }
                                                    }
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
    </section>
</div>


<script language="javascript" type="text/javascript">




</script>