<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

include_once ("../config.php");
$userId = $_SESSION['user_id'];
$fetchHeader = "SELECT * FROM company WHERE userId = '$userId'";
if ($result = $mysqli->query($fetchHeader)) {
    while ($row = $result->fetch_row()) {
        $companyId = $row[0];
        $name = $row[2];
        $logo = $row[3];
        $phone = $row[4];
        $mail = $row[5];
        $address = $row[6];
        $website = $row[7];
        $description = $row[8];
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Job Assist Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100..900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <h1 style="color: #EC1D23;">JOB<span></span></h1>
                <img src="assets/img/logo_jobjao.png" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="employer.php #home">ໜ້າຫຼັກ</a></li>
                    <li><a href="employAdd.php#about">ປະກາດສະໝັກວຽກ</a></li>
                    <li><a href="#menu">ລາຍການປະກາດສະໝັກວຽກ</a></li>

                    <li><a href="logout.php">ອອກຈາກລະບົບ</a></li>

                </ul>
            </nav><!-- .navbar -->

            <a class="btn-employ-add" href="#"><?= $name ?></a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <!-- ======= home Section ======= -->
    <br>

    <main id="main">

        <section id="menu" class="menu">
            <div class="container p-2" data-aos="fade-up">
                <div class="card">
                    <div class="card-header">
                        <h5>ລາຍການປະກາດຫາວຽກ</h5>
                    </div>
                    <div class="card-body">

                        <?php
                        $employList = "SELECT * FROM v_employ WHERE companyId = '$companyId' GROUP BY id ASC";
                        $i = 1;
                        if ($result = $mysqli->query($employList)) {
                            while ($row1 = $result->fetch_assoc()) {

                                $employId = $row1['id'];
                                $employName = $row1['jobPositionLao'];
                                $location = $row1['address'];
                                $strDate = $row1['strDate'];
                                $endDate = $row1['endDate'];
                                $status = $row1['status'];
                                // echo '<script>alert("employName:' . $employName . '")</script>';
                                ?>
                                <div class="row">
                                    <div class="col-sm-2 d-flex align-items-center">
                                        <div align="center">
                                            <img src="../dist/img/company/<?= $logo ?>" class="w-50"
                                                style="border-radius: 50%;" />

                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div style="align-items: center;">
                                            <a href=""><?= $employName ?></a>

                                            <p class="">
                                                <i class="bi bi-geo">
                                                    <?= $location ?></i><br> <i class="bi bi-calendar3">
                                                    <?= $strDate ?> - <?= $endDate ?></i>
                                            </p>

                                        </div>
                                        <div>
                                            <?php if ($status == 'open') {

                                                ?>
                                                <a>status: <span class="badge bg-success"><?= $status ?></span></a>
                                                <?php
                                            } else {
                                                ?>
                                                <a>status: <span class="badge bg-danger"><?= $status ?></span></a>
                                                <?php
                                            }
                                            ?>


                                        </div>

                                    </div>
                                    <div class="col-sm-2">

                                        <?php
                                        $count = "SELECT count(employId) as count,employId FROM v_apply WHERE companyId=$companyId group by employId";

                                        if ($countApply = $mysqli->query($count)) {

                                            while ($rowcountApply = $countApply->fetch_row()) {
                                                // $row_cnt = mysqli_num_rows($countApply);
                                                $rowApply_countApply = $rowcountApply[0];

                                                if ($employId == $rowcountApply[1]) {


                                                    ?>
                                                    <a data-bs-toggle="modal" href="#myModalApplyList<?= $i ?>">ເຂົ້າເບິ່ງຜູ້ສະໝັກມີ
                                                        <b> <?=$rowApply_countApply?></b> ຄົນ</a>
                                                <?php }
                                            }
                                        }
                                        ?>
                                    </div>

                                </div>


                                <hr>

                                <div class="modal" id="myModalApplyList<?= $i ?>">
                                    <div class="modal-dialog modal-xl">
                                        <class class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header bg-info " style="color: whitesmoke;">
                                                <h4 class="modal-title">ລາຍການຜູ້ເຂົ້າມາສະໝັກ:
                                                    <b><?= $row1['jobPositionLao'] ?></b></h4>

                                            </div>
                                            <form method="post" action="#" role="form" enctype="multipart/form-data">
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="example1"
                                                                        class="table table-bordered beautified_report">

                                                                        <thead class="text-center">
                                                                            <tr>
                                                                                <th>ລ/ດ</th>
                                                                                <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                                                                <th>ຫົວຂໍ້</th>
                                                                                <th>ໄຟລແນບ CV</th>
                                                                                <th>ສະຖານະ</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="text-center">
                                                                            <?php
                                                                            $loop = "SELECT * FROM v_apply WHERE employId = '$employId'";
                                                                            $z = 1;
                                                                            if ($reLoop = $mysqli->query($loop)) {
                                                                                while ($data = $reLoop->fetch_assoc()) {
                                                                                    ?>
                                                                                    <div class="modal fade" id="modallgImage<?= $z ?>">
                                                                                        <div class="modal-dialog modal-lg">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-body">
                                                                                                    <?php
                                                                                                    $imagePath = "assets/img/cv/" . $data['file'];
                                                                                                    ?>
                                                                                                    <embed src="<?= $imagePath ?>"
                                                                                                        width="100%" height="800px" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <tr>
                                                                                        <td class="align-middle"><?= $z ?></td>
                                                                                        <td class="align-middle">
                                                                                            <?= $data['firstName'] ?>
                                                                                            <?= $data['lastName'] ?>
                                                                                        </td>
                                                                                        <td class="align-middle"><?= $data['title'] ?>
                                                                                        </td>

                                                                                        <td class="align-middle">
                                                                                            <a href="#"
                                                                                                onclick="openMyModal2(<?= $z ?>)"><i
                                                                                                    class="bi bi-filetype-pdf"></i></a>
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <?php if ($data['status'] == 'proceed') {

                                                                                                ?>
                                                                                                <h5><span
                                                                                                        class="badge bg-info"><?= $data['status'] ?></span>
                                                                                                </h5>
                                                                                                <?php
                                                                                            } else if ($data['status'] == 'cancel') {
                                                                                                ?>
                                                                                                    <h5><span
                                                                                                            class="badge bg-danger"><?= $data['status'] ?></span>
                                                                                                    </h5>
                                                                                                <?php
                                                                                            } else if ($data['status'] == 'denide') {
                                                                                                ?>
                                                                                                        <h5><span
                                                                                                                class="badge bg-warning"><?= $data['status'] ?></span>
                                                                                                        </h5>
                                                                                                <?php
                                                                                            } else {
                                                                                                ?>
                                                                                                        <h5><span
                                                                                                                class="badge bg-success"><?= $data['status'] ?></span>
                                                                                                        </h5>
                                                                                                <?php
                                                                                            }
                                                                                            ?>
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <a href="cancel.php?accept=<?= $data['id'] ?> "
                                                                                                class="btn btn-success"
                                                                                                onclick="return confirm('ທ່ານຕ້ອງການ Accept ການສະໝັກແທ້ບໍ...?')"><i
                                                                                                    class="bi bi-patch-check-fill"></i>Accept</a>

                                                                                            <a href="cancel.php?denide=<?= $data['id'] ?>"
                                                                                                class="btn btn-danger"
                                                                                                onclick="return confirm('ທ່ານຕ້ອງການ Denide ການສະໝັກແທ້ບໍ...?')"><i
                                                                                                    class="bi bi-x-octagon-fill"></i>Denide</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php $z++;
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

                                <?php $i++;
                            }
                        } ?>


                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->


        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>
<script>
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        "ordering": false
    });

    function openMyModal2(i) {
        var para = i;

        // alert(id);

        let myModal = new
            bootstrap.Modal(document.getElementById('modallgImage' + para), {});
        myModal.show();




    }
</script>