<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

include_once ("../config.php");



?>

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">

            <?php
            $jobName = $_GET["jobName"];
            $i = 0;
            $fecth = "SELECT * FROM v_employ WHERE status ='open' AND name like '%$jobName%' GROUP BY name ";
            if ($result = $mysqli->query($fecth)) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $comName = $row['companyName'];
                    $comId = $row['companyId'];
                    $comLogo = $row['companyLogo'];
                    $name = $row['name'];
                    $address = $row['address'];
                    $strDate = $row['strDate'];
                    $endDate = $row['endDate'];
                    $language = $row['language'];
                    $salary = $row['salary'];
                    $jobName = $row['jobName'];
                    $experience = $row['experience'];
                    $description = $row['description'];
                    $image = $row['image'];
                    ?>
                    <div class="modal fade" id="myModalInfo<?= $i ?>">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-12 pb-2">
                                                        <div class="info-item  d-flex align-items-center">
                                                            <div>
                                                                <h2><b><?= $name ?></b></h2>
                                                                <p>ທີ່ຢູ່: <b><?= $address ?></b></p>
                                                                <p>ເປີດຮັບເຖິງວັນທີ: <b><?= $endDate ?></b></p>
                                                                <a type="button" class="btn btn-primary"
                                                                    style="font-weight: 500;font-size: 12px;letter-spacing: 1px;display: inline-block;padding: 8px 32px;transition: 0.5s;color: #fff">
                                                                    Apply <i class="bi bi-box-arrow-down-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pb-2">
                                                        <div class="info-item  d-flex align-items-center">
                                                            <div>
                                                                <p>ພາສາ: <b><?= $language ?></b></p>
                                                                <p>ປະສົບການ: <b><?= $experience ?></b></p>
                                                                <p>ເງິນເດືອນ: <b><?= $salary ?></b></p>
                                                                <p>ປະເພດວຽກ: <b>
                                                                        <?php
                                                                        $details = "SELECT b.name FROM employ_job as a join job as b on a.jobId = b.id WHERE employId ='$id'";
                                                                        if ($resultDetails = $mysqli->query($details)) {
                                                                            while ($rowDetails = $resultDetails->fetch_assoc()) {
                                                                                ?>
                                                                                <?= $rowDetails['name'] ?>,
                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>

                                                                    </b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pb-2">
                                                        <div class="info-item  d-flex align-items-center">
                                                            <div>

                                                                <img src="assets/img/company/<?= $image ?>" class="w-100" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">

                                                <div style="text-align: center;">
                                                    <img src="../dist/img/company/<?= $comLogo ?>"
                                                        class="img-fluid img-thumbnail">

                                                    <p class="pt-2"><?= $address ?></p>
                                                    <a type="button" class="btn btn-primary">
                                                        ກ່ຽວກັບບໍລິສັດ
                                                    </a>
                                                </div>
                                                <hr>
                                                <div>
                                                    <h5>ວຽກຈາກບໍລິສັດນີ້</h5>
                                                    <hr>
                                                    <div class="card-body">

                                                        <?php
                                                        $employList = "SELECT * FROM employ WHERE companyId = '$comId' AND status='open'";
                                                        if ($result3 = $mysqli->query($employList)) {
                                                            while ($row1 = $result3->fetch_row()) {
                                                                $employName = $row1[2];
                                                                $location = $row1[7];
                                                                $strDate = $row1[14];
                                                                $endDate = $row1[15];

                                                                ?>
                                                                <div class="row">

                                                                    <div class="col-sm-12">
                                                                        <div style="align-items: center;">
                                                                            <a href=""><?= $employName ?></a>

                                                                            <p class="">
                                                                                <i class="bi bi-geo">
                                                                                    <?= $location ?></i><br> <i class="bi bi-calendar3">
                                                                                    <?= $strDate ?> - <?= $endDate ?></i>
                                                                            </p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <?php
                                                            }
                                                        } ?>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6" data-bs-toggle="modal" data-bs-target="#myModalInfo<?= $i ?>">
                        <div class="info-item  d-flex align-items-center">
                            <img src="../dist/img/company/<?= $comLogo ?>" width="20%" />
                            <div class="p-2">
                                <h3><?= $name ?></h3>
                                <p><?= $comName ?></p>
                                <p><?= $address ?></p>
                                <p><?= $strDate ?> - <?= $endDate ?></p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <?php $i++;
                }
            }
            ?>
        </div>
    </div>
</section>