<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

include_once ("../config.php");

$userId = $_SESSION['user_id'];
$companyAddress = $_SESSION['address'];


if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $passmd5 = md5($password . 'l1tt@v@nh' . $username);

    $qry = " SELECT * FROM user WHERE  username='$username' and password='$passmd5'  ";

    if ($result_auth = $mysqli->query($qry)) {
        while ($row = $result_auth->fetch_row()) {
            $_SESSION['user_id'] = $row[0];
            $_SESSION['username'] = $row[1];
            $_SESSION['role'] = $row[3];
            $_SESSION['name'] = $row[4];
            $_SESSION['surname'] = $row[5];
            $_SESSION['address'] = $row[7];


            if ($_SESSION['role'] == "employer") {
                header("Location: ../register/employer.php");
                exit();
            }
            if ($_SESSION['role'] == "employee") {
                header("Location: ../register/index.php");
                exit();
            }
            $result_auth->close();
        }
    }

}
if (isset($_POST['btnRegister'])) {
    $txtName = $_POST['txtName'];
    $txtSurName = $_POST['txtSurName'];
    $txtBorn = $_POST['txtBorn'];
    $txtAddress = $_POST['txtAddress'];
    $txtPhone = $_POST['txtPhone'];
    $txtEmail = $_POST['txtEmail'];
    $txtUserName = $_POST['txtUserName'];
    $txtPassword = $_POST['txtPassword'];
    $passmd5Re = md5($txtPassword . 'l1tt@v@nh' . $txtUserName);
    $sql = "INSERT INTO user(username, password, role, name, surname, born, address, phone, mail, createdBy, updatedBy, createdAt, updatedAt)
      VALUES
      ('$txtUserName', '$passmd5Re', 'employee', '$txtName', '$txtSurName', '$txtBorn', '$txtAddress', '$txtPhone', '$txtEmail','3','3',NOW(),NOW())";


    if ($mysqli->query($sql) === TRUE) {

        echo '<script>alert("ລົງທະບຽນສຳເລັດແລ້ວ")</script>';

    } else {
        echo "<center><h2>$sql</h2></center>";
    }
}
if (isset($_POST['btnLoginEmp'])) {
    $usernameEmp = $_POST['usernameEmp'];
    $passwordEmp = $_POST['passwordEmp'];

    $passEmpmd5 = md5($passwordEmp . 'l1tt@v@nh' . $usernameEmp);

    $qry = " SELECT * FROM user WHERE  username='$usernameEmp' and password='$passEmpmd5'  ";

    if ($result_auth = $mysqli->query($qry)) {
        while ($row = $result_auth->fetch_row()) {
            $_SESSION['user_id'] = $row[0];
            $_SESSION['username'] = $row[1];
            $_SESSION['role'] = $row[3];
            $_SESSION['name'] = $row[4];
            $_SESSION['surname'] = $row[5];
            $_SESSION['address'] = $row[7];


            if ($_SESSION['role'] == "employer") {
                header("Location: ../register/employer.php");
                exit();
            }
            if ($_SESSION['role'] == "employee") {
                header("Location: ../register/index.php");
                exit();
            }
            $result_auth->close();
        }
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
                    <li><a href="search.php" class="nav-item nav-link active">ຄົ້ນຫາວຽກ</a></li>
                    <li><a href="#menu">ບໍລິສັດ</a></li>
                    <!-- <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          -->
                    <li><a href="#contact">ກ່ຽວກັບ</a></li>
                    <?php

                    if ($_SESSION['role'] == "employee") {
                        ?>
                        <li class="dropdown"><a href="#"><span >ຜູ້ໃຊ້</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#"><?= $_SESSION['name'] ?>     <?= $_SESSION['surname'] ?></a></li>
                                <li><a href="logout.php">ອອກຈາກລະບົບ</a></li>



                            </ul>
                        </li>
                    <?php } else {
                        ?>
                        <li class="dropdown"><a href="#"><span >ສະໝັກວຽກ</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#myModalRegister">ລົງທະບຽນ</a></li>

                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#myModalLogin">ເຂົ້າສູ່ລະບົບ</a></li>

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
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ເຂົ້າສູ່ລະບົບ</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="post">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">ຊື່ຜູ້ໃຊ້:</label>
                            <input type="text" class="form-control" placeholder="ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">ລະຫັດຜ່ານ:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ"
                                name="password">
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" name="btnLogin" class="btn btn-primary">ເຂົ້າສູ່ລະບົບ</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ປິດ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" id="myModalRegister">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ລົງທະບຽນ</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="post">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ຊື່</label>
                                    <input type="text" name="txtName" class="form-control" required>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ນາມສະກຸນ</label>
                                    <input type="text" name="txtSurName" class="form-control" required>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ວັນເດືອນປີເກີດ</label>
                                    <input type="date" name="txtBorn" class="form-control" required>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ທີ່ຢູ່</label>
                                    <input type="text" name="txtAddress" class="form-control">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ເບີໂທ</label>
                                    <input type="text" name="txtPhone" class="form-control" required>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ອີເມລ</label>
                                    <input type="text" name="txtEmail" class="form-control">

                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ຊື່ຜູ້ໃຊ້</label>
                                    <input type="text" name="txtUserName" class="form-control" required>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ລະຫັດຜ່ານ</label>
                                    <input type="password" name="txtPassword" class="form-control" required>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" name="btnRegister" class="btn btn-primary">ລົງທະບຽນ</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ປິດ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" id="myModalLogin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ເຂົ້າສູ່ລະບົບ</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="post">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">ຊື່ຜູ້ໃຊ້:</label>
                            <input type="text" class="form-control" placeholder="ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້"
                                name="usernameEmp">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">ລະຫັດຜ່ານ:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ"
                                name="passwordEmp">
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" name="btnLoginEmp" class="btn btn-primary">ເຂົ້າສູ່ລະບົບ</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ປິດ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ======= home Section ======= -->


    <main id="main" class="pt-2">




        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <p class="pb-5">ຄົ້ນຫາ <span>ວຽກ</span> ທີ່ທ່ານຕ້ອງການ</p>


                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="input-group">
                            <input type="text" id="txtSearch" class="form-control" placeholder="ຄົ້ນຫາຕຳແໜ່ງວຽກ"
                                onkeyup="searchInput();">
                            <button class="btn btn-success" id="txtSearch" onclick="searchInput();">ຄົ້ນຫາ</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <select class="form-control" id="select" class="select" data-placeholder="ປະເພດວຽກ"
                            onchange="search();" name="cbJobFunc[]" multiple>

                            <?php
                            $job = "SELECT a.id,a.name,b.jobId,count(b.jobId) as countJob from job as a left join employ_job as b 
                                on a.id = b.jobId where a.isDelete=0 group by b.jobId order by a.id asc";

                            if ($resultjob = $mysqli->query($job)) {
                                while ($rowjob = $resultjob->fetch_assoc()) {
                                    ?>
                                    <option value="<?= $rowjob['id'] ?>"> <?= $rowjob['name'] ?>
                                        <b> (<?= $rowjob['countJob'] ?>)</b>
                                    </option>
                                <?php }
                            } ?>
                        </select>

                    </div>

                    <div class="col-lg-3 col-md-6">
                        <select class="form-select" id="single-select-field2" data-placeholder="ເວລາ">
                            <option></option>
                            <option>Full-time</option>
                            <option>Part-time</option>

                        </select>
                    </div>

                </div>

            </div>
        </section><!-- End Events Section -->


        <section id="contact" class="contact ">

            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <?php
                    $i = 0;
                    $fetchHeader = "SELECT * FROM v_employ WHERE status ='open' GROUP BY name ";
                    if ($result = $mysqli->query($fetchHeader)) {
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

                                                                        <img src="assets/img/company/<?= $image ?>"
                                                                            class="w-100" />

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
                                                                                            <?= $location ?></i><br> <i
                                                                                            class="bi bi-calendar3">
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
                                        <a style="color: blue;cursor:pointer"><?= $name ?></a>
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
        </section><!-- End Contact Section -->

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

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

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
    $('#select').select2({
        theme: "bootstrap-5",
        placeholder: $(this).data('placeholder'),
    });

    $('#single-select-field2').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
    });
</script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript">
</script>
<script>
    function search() {

        var str = '';
        var val = document.getElementById('select');
        for (i = 0; i < val.length; i++) {
            if (val[i].selected) {
                str += val[i].value + ',';
            }
        }
        var str = str.slice(0, str.length - 1);
        // alert(str);
        $.ajax({
            type: "GET",
            url: "getJob.php",
            data: 'jobId=' + str,
            success: function (data) {
                $("#contact").html(data);
                // alert(data);
            }
        });
    }

    function searchInput() {


        var val = document.getElementById('txtSearch').value;


        $.ajax({
            type: "GET",
            url: "getJobByInput.php",
            data: 'jobName=' + val,
            success: function (data) {
                $("#contact").html(data);
                // alert(data);
            }
        });
    }
</script>