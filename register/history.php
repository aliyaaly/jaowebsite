<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

include_once ("../config.php");

$userId = $_SESSION['user_id'];
$companyAddress = $_SESSION['address'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Job Assist Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"> </script>
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
                <h1>Job Assist<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php #home" class="nav-item nav-link ">ໜ້າຫຼັກ</a></li>
                    <li><a href="search.php" class="nav-item nav-link ">ຄົ້ນຫາວຽກ</a></li>
                    <li><a href="#menu">ບໍລິສັດ</a></li>
                    <!-- <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          -->
                    <li><a href="#contact">ກ່ຽວກັບ</a></li>
                    <?php

                    if ($_SESSION['role'] == "employee") {
                        ?>
                        <li class="dropdown"><a href="#"><span>ຜູ້ໃຊ້</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#"><?= $_SESSION['name'] ?>     <?= $_SESSION['surname'] ?></a></li>
                                <li><a href="history.php" class="nav-item nav-link active">ປະຫວັດການສະໝັກວຽກ</a></li>
                                <li><a href="logout.php">ອອກຈາກລະບົບ</a></li>



                            </ul>
                        </li>
                    <?php } else {
                        ?>
                        <li class="dropdown"><a href="#"><span>ສະໝັກວຽກ</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#myModalRegister">ລົງທະບຽນ</a></li>

                                <li><a href="#myModalLogin" data-bs-toggle="modal">ເຂົ້າສູ່ລະບົບ</a></li>

                            </ul>
                        </li>
                        <?php
                    } ?>
                </ul>
            </nav><!-- .navbar -->

            <a type="button" class="btn-employ-add" data-bs-toggle="modal" data-bs-target="#myModal">
                ຜູ້ຈ້າງງານ
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->



    <!-- ======= home Section ======= -->


    <main id="main" class="pt-2">




        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <p class="pb-5">ປະຫວັດ <span>ການສະໝັກວຽກ</span> ຂອງທ່ານ</p>


                </div>

                <div class="container p-2" data-aos="fade-up">
                    <div class="card">
                        <div class="card-header">
                            <h5>ລາຍການປະຫວັດ ການສະໝັກວຽກ</h5>
                        </div>
                        <div class="card-body">

                            <?php

                            $applyList = "SELECT * FROM v_apply WHERE userId = '$userId'";
                            if ($result = $mysqli->query($applyList)) {
                                while ($row = $result->fetch_assoc()) {


                                    ?>
                                    <div class="row">
                                        <div class="col-sm-2 d-flex align-items-center">
                                            <div align="center">
                                                <img src="../dist/img/company/<?= $row['logo'] ?>" class="w-50"
                                                    style="border-radius: 50%;" />

                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div style="align-items: center;">
                                                <a href=""><?= $row['employerName'] ?></a>

                                                <p class="">

                                                    <?= $row['title'] ?>

                                                </p>

                                            </div>
                                            <div>
                                                <?php if ($row['status'] == 'proceed') {

                                                    ?>
                                                    <a>status: <span class="badge bg-info"><?= $row['status'] ?></span></a>
                                                    <?php
                                                } else if ($row['status'] == 'cancel') {
                                                    ?>
                                                        <a>status: <span class="badge bg-danger"><?= $row['status'] ?></span></a>
                                                    <?php
                                                } else if ($row['status'] == 'denide') {
                                                    ?>
                                                            <a>status: <span class="badge bg-warning"><?= $row['status'] ?></span></a>
                                                    <?php
                                                } else {
                                                    ?>
                                                            <a>status: <span class="badge bg-success"><?= $row['status'] ?></span></a>
                                                    <?php
                                                }
                                                ?>


                                            </div>
                                            <div class="d-flex justify-content-end">
                                               
                                                
                                                    <a href="cancel.php?del=<?= $row['id'] ?>"
                                                    onclick="return confirm('ທ່ານຕ້ອງການຍົກເລີກການສະໝັກແທ້ບໍ...?')"><i
                                                        class="bi bi-x-square"></i>ຍົກເລີກການສະໝັກ</a>

                                                 
                                               
                                               
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

        </section><!-- End Events Section -->




    </main><!-- End #main -->



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            Phonpapao Road <br>
                            Vientiane, Laos<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> 020 56 945 946<br>
                            <strong>Email:</strong> obassistoffice@gmail.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Fri: 09AM</strong> - 04PM<br>
                            Sunday: Closed<br>
                            Saturday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

            </div>
        </div>



    </footer><!-- End Footer -->
    <!-- End Footer -->


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