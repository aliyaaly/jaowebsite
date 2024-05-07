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
                <img src="assets/img/logo_jobjao.png" alt="">
                <h1>Job Assist <span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#home">ໜ້າຫຼັກ</a></li>
                    <li><a href="employAdd.php">ປະກາດສະໝັກວຽກ</a></li>
                    <li><a href="employList.php">ລາຍການປະກາດສະໝັກວຽກ</a></li>

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

        <!-- ======= About Section ======= -->
        <section id="home" class="home">
            <div class="container p-2" data-aos="zoom-out">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-sm-2 d-flex align-items-center">
                            <img src="../dist/img/company/<?= $logo ?>" class="img-fluid img-thumbnail" >

                        </div>
                        <div class="col-sm-9 ">
                            <div class="card-body ">
                                <h5 class="card-title"><?= $name ?></h5>
                                <br>
                                <p class="card-text "><i class="bi bi-telephone icon"> <?= $phone ?></i><br><i
                                        class="bi bi-envelope">
                                        <?= $mail ?></i><br><i class="bi bi-geo">
                                        <?= $address ?></i></i><br><i class="bi bi-browser-chrome"> <a
                                            href=""><?= $website ?></a></i>
                                </p>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container p-2" data-aos="fade-up">
                <div class="card">
                    <div class="card-header">
                        <h5>ກ່ຽວກັບບໍລິສັດ</h5>
                    </div>
                    <div class="card-body"><?= $description ?></div>

                </div>

            </div>
            <div class="container p-2" data-aos="fade-up">
                <div class="card">
                    <div class="card-header">
                        <h5>ລາຍການປະກາດຫາວຽກ</h5>
                    </div>
                    <div class="card-body">

                        <?php
                        $employList = "SELECT * FROM employ WHERE companyId = '$companyId' AND status='open'";
                        if ($result = $mysqli->query($employList)) {
                            while ($row1 = $result->fetch_row()) {
                                $employName = $row1[2];
                                $location = $row1[7];
                                $strDate = $row1[14];
                                $endDate = $row1[15];

                                ?>
                                <div class="row"  >
                                    <div class="col-sm-2 d-flex align-items-center">
                                        <div align="center" >
                                            <img src="../dist/img/company/<?= $logo ?>" class="w-50" style="border-radius: 50%;" />

                                        </div>
                                    </div>
                                    <div class="col-sm-10">
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
            <div class="container p-2" data-aos="zoom-out">
                <div class="card">
                    <div class="card-header">
                        <h5>ຕິດຕໍ່</h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $name ?></h5>

                        <p class="card-text "> <?= $address ?><br><i class="bi bi-telephone icon">
                                <?= $phone ?></i><br><i class="bi bi-envelope">
                                <?= $mail ?></i><br><i class="bi bi-browser-chrome"> <a href=""><?= $website ?></a></i>
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

       

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