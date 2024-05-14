<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

include_once ("../config.php");

$userId = $_SESSION['user_id'];
$companyAddress = $_SESSION['address'];
$fetchHeader = "SELECT * FROM company WHERE userId = '$userId'";
if ($result = $mysqli->query($fetchHeader)) {
    while ($row = $result->fetch_row()) {

        $comId = $row[0];
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
    <!-- Style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!-- Script -->


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
                    <li><a href="employer.php #home">ໜ້າຫຼັກ</a></li>
                    <li><a href="#about">ປະກາດສະໝັກວຽກ</a></li>
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

        <section id="employ-add" class="employ-add">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>ປະກາດສະໝັກວຽກ</h2>
                    <p>ເພີ່ມຂໍ້ມູນ <span>ການປະກາດ</span> ວຽກ</p>
                </div>

                <div class="row g-0">

                    <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/company/hiring.jpg);"
                        data-aos="zoom-out" data-aos-delay="200"></div>

                    <div class="col-lg-8 d-flex align-items-center reservation-form-bg">

                        <form method="post" action="" role="form" enctype="multipart/form-data" style="padding: 40px;">
                            <div class="row gy-4">
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="txtJobPosition" class="form-control"
                                        placeholder="ຕຳແໜ່ງວຽກ" required>

                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select name="cbLang" class="form-control" required>
                                        <option value="0">--ເລືອກພາສາ--</option>
                                        <?php
                                        $language = "select * from language";

                                        if ($resultlanguage = $mysqli->query($language)) {
                                            while ($rowlanguage = $resultlanguage->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $rowlanguage['id'] ?>"><?= $rowlanguage['language'] ?></option>
                                            <?php }
                                        } ?>
                                    </select>
                                    </select>

                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select name="cbEx" class="form-control" required>
                                        <option value="0">--ປະສົບການ--</option>
                                        <?php
                                        $experience = "select * from experience";

                                        if ($resultexperience = $mysqli->query($experience)) {
                                            while ($rowexperience = $resultexperience->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $rowexperience['id'] ?>"><?= $rowexperience['experience'] ?></option>
                                            <?php }
                                        } ?>
                                    </select>

                                    </select>

                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" name="txtAddress" disabled
                                        placeholder="ທີ່ຢູ່" value="<?= $companyAddress ?>" required>

                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select name="cbSalary" class="form-control" required>
                                        <option value="0">--ເງິນເດືອນ--</option>
                                        <?php
                                        $salary = "select * from salary";

                                        if ($resultsalary = $mysqli->query($salary)) {
                                            while ($rowsalary = $resultsalary->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $rowsalary['id'] ?>"><?= $rowsalary['salary'] ?></option>
                                            <?php }
                                        } ?>
                                    </select>

                                    </select>

                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <select class="form-control" id="select" name="cbJobFunc[]" multiple >

                                        <?php
                                        $job = "select * from job where isDelete=0";

                                        if ($resultjob = $mysqli->query($job)) {
                                            while ($rowjob = $resultjob->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $rowjob['id'] ?>"><?= $rowjob['name'] ?></option>
                                            <?php }
                                        } ?>
                                    </select>

                                </div>
                                <div class="col-lg-4 col-md-6">
                                <label for="">ເວລາ</label>
                                    <select class="form-control"  name="cbTime" >
                                  
                                        <?php
                                        $time = "select * from time";

                                        if ($resulttime = $mysqli->query($time)) {
                                            while ($rowtime = $resulttime->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $rowtime['id'] ?>"><?= $rowtime['time'] ?></option>
                                            <?php }
                                        } ?>
                                    </select>

                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label for="">ແຕ່ວັນທີ</label>
                                    <input type="date" name="strDate" class="form-control" required>

                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label for="">ຫາວັນທີ</label>
                                    <input type="date" name="endDate" class="form-control" required>

                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label for="">ຮູບພາບ</label>
                                    <input type="file" name="file[]" class="form-control" multiple>

                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="txtDescription" rows="6"
                                    placeholder="ລາຍລະອຽດ"></textarea>

                            </div>
                            <div class="mb-3">

                            </div>
                            <div class="text-center"><button type="submit" name="btnSave"
                                    style="background: #ec2727;background: var(--color-primary);border: 0;padding: 12px 40px;color: #fff;transition: 0.4s;border-radius: 50px;">ບັນທຶກ</button>
                            </div>
                        </form>
                    </div><!-- End Reservation Form -->

                </div>

            </div>
        </section>
        <?php
        if (isset($_POST["btnSave"])) {


            $txtJobPosition = $mysqli->real_escape_string($_POST['txtJobPosition']);
            $cbLang = $mysqli->real_escape_string($_POST['cbLang']);
            $cbEx = $mysqli->real_escape_string($_POST['cbEx']);
            $txtAddress = $mysqli->real_escape_string($_POST['txtAddress']);
            $cbSalary = $mysqli->real_escape_string($_POST['cbSalary']);
            $cbTime = $mysqli->real_escape_string($_POST['cbTime']);
            $cbJobFunc = $_POST['cbJobFunc'];
            $strDate = $mysqli->real_escape_string($_POST['strDate']);
            $endDate = $mysqli->real_escape_string($_POST['endDate']);
            $txtDescription = $mysqli->real_escape_string($_POST['txtDescription']);
            $countcbJobFunc = count($cbJobFunc);

            $sql = "INSERT INTO employ(companyId, name, languageId, experienceId, salaryId, 
            description, 
            address, 
            status, 
            createdBy, 
            updatedBy, 
            createdAt, 
            updatedAt,
            strDate, 
            endDate,
            timeId)
            VALUES
            ('$comId', '$txtJobPosition', '$cbLang', '$cbEx', '$cbSalary', '$txtDescription', '$companyAddress','close','$userId','$userId',NOW(),NOW(),'$strDate','$endDate','$cbTime')";


            if ($mysqli->query($sql) === TRUE) {

                $max = "SELECT max(id) FROM employ";
                $maxId = $mysqli->query($max);
                $rowMaxId = $maxId->fetch_row();
                $rowEmploy_maxId = $rowMaxId[0];
                // echo '<script>alert("'.$rowEmploy_maxId.'")</script>';
                if ($rowEmploy_maxId != "") {
                    for ($i = 0; $i < $countcbJobFunc; $i++) {
                        $sql1 = "INSERT INTO employ_job(employId, companyId, jobId, createdBy, 
                        updatedBy, 
                        createdAt, 
                        updatedAt) VALUES('$rowEmploy_maxId','$comId','$cbJobFunc[$i]','$userId','$userId',NOW(),NOW())";
                        $mysqli->query($sql1);
                    }
                    if (count($_FILES)) {
                        $k=0;
                        foreach ($_FILES['file']['name'] as $key => $fname) {
                            $k++;
                            $file_name = strtolower($fname);
                            $file_ext = substr($file_name, strrpos($file_name, '.'));

                            $file_name_new = date('YmdHis') .$k. $userId. $file_ext;
                            copy($_FILES["file"]["tmp_name"][$key], "assets/img/company/" . $file_name_new);
                            $sql2 = "INSERT INTO employ_image(employId, companyId, image, createdBy, 
                            updatedBy, 
                            createdAt, 
                            updatedAt) VALUES('$rowEmploy_maxId','$comId','$file_name_new','$userId','$userId',NOW(),NOW())";
                            $mysqli->query($sql2);
                        }
                        echo '<script>alert("Succesfully !!!")</script>';
                    }

                } else {
                    echo "Error";
                }


            } else {
                echo $sql;
            }





        }
        ?>
        <!-- ======= Stats Counter Section ======= -->


        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        <!-- Style -->

</body>

</html>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#select').select2({


            maximumInputLength: 10,
            placeholder: "--ປະເພດວຽກ--",


        });
    });
</script>