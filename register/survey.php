<?php
session_start();
include_once ("../function_sel.php");
$userId = $_SESSION['user_id'];

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
    <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #EC1D23;"
        onclick="action()">
        <div class="container d-flex align-items-center justify-content-center ">

            <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo_jobjao.png" alt="">
                <h1 style="color: whitesmoke;">JOB<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar" style="color: whitesmoke;">
                <ul>
                    <li><a href="index.php" style="color: whitesmoke;">ໜ້າຫຼັກ</a></li>
                    <li><a href="search.php " style="color: whitesmoke;">ຄົ້ນຫາວຽກ</a></li>
                    <li><a href="company.php" class="nav-item nav-link " style="color: whitesmoke;">ບໍລິສັດ</a></li>
                    <li><a href="survey.php" class="nav-item nav-link active" style="color: whitesmoke;">ປະເມີນ</a></li>

                    <?php

                    if ($_SESSION['role'] == "employee") {
                        ?>
                        <li class="dropdown"><a href="#"><span style="color: whitesmoke;">ຜູ້ໃຊ້</span> <i
                                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#"><?= $_SESSION['name'] ?>     <?= $_SESSION['surname'] ?></a></li>
                                <li><a href="history.php">ປະຫວັດການສະໝັກວຽກ</a></li>
                                <li><a href="logout.php">ອອກຈາກລະບົບ</a></li>
                            </ul>
                        </li>
                    <?php } else {
                        ?>
                        <li class="dropdown"><a href="#"><span style="color: whitesmoke;">ສະໝັກວຽກ</span> <i
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

            <!-- <a class="btn-book-a-table" href="#"><i class="fas fa-edit" data-toggle="modal"
          data-target="#modal-lg-login"></i>ຜູ້ຈ້າງງານ</a> -->
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <!-- ======= home Section ======= -->

    <main id="main">




        <!-- ======= Chefs Section ======= -->
        <form action="" method="post">
            <section id="chefs" class="chefs section-bg ">
                <div class="container" data-aos="fade-up">

                    <div class="section-header p-5">

                        <p>ແບບຟອມປະເມີນ <span>ປະສົບການ</span> ນຳໃຊ້ບໍລິການ</p>
                    </div>



                    <div class="row gy-3">
                        <?php
                        $i = 0;
                        $fecthQuestion = "SELECT * FROM survey_question";
                        if ($result = $mysqli->query($fecthQuestion)) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $questionOrder = $row['questionOrder'];
                                $questionText = $row['questionText'];
                                ?>
                                <h4><b><?= $questionOrder ?>. <?= $questionText ?></b></h4>
                                <?php

                                $fecthChoice = "SELECT * FROM survey_choice WHERE questionId = $id";
                                if ($resultChoice = $mysqli->query($fecthChoice)) {
                                    while ($rowChoice = $resultChoice->fetch_assoc()) {
                                        $questionId = $rowChoice['questionId'];
                                        $choiceText = $rowChoice['choiceText'];
                                        $choiceOrder = $rowChoice['choiceOrder'];
                                        if ($questionId == 2) {
                                            if ($choiceOrder == 1) {


                                                ?>

                                                <div class="form-check ps-5">


                                                    <div class="col-md-1">
                                                        <input type="text" name="txtSex" class="form-control"
                                                            placeholder="<?= $choiceText ?>: ">
                                                    </div>
                                                    <!-- <input type="radio" name="" id="" value="ຊາຍ"> ຊາຍ &emsp;
                                                <input type="radio" name="" id="" value="ຍິງ"> ຍິງ&emsp;
                                                <input type="radio" name="" id="" value="ບໍ່ລະບຸ"> ບໍ່ລະບຸ -->

                                                </div>
                                            <?
                                            } elseif ($choiceOrder == 2) {
                                                ?>
                                                <div class="form-check ps-5">
                                                    <div class="col-md-1">
                                                        <input type="text" name="txtAge" class="form-control"
                                                            placeholder="<?= $choiceText ?>: ">
                                                    </div>
                                                    <!-- <label class="form-check-label " for="defaultCheck1"><?= $choiceText ?>:
                                                </label>&emsp;
                                                <input type="radio" name="" id="" value="18-25ປີ"> 18-25ປີ &emsp;
                                                <input type="radio" name="" id="" value="25-35ປີ"> 25-35ປີ&emsp;
                                                <input type="radio" name="" id="" value="35-45ປີ"> 35-45ປີ -->

                                                </div>
                                            <?
                                            } elseif ($choiceOrder == 3) {
                                                ?>
                                                <div class="form-check ps-5">
                                                    <div class="col-md-2">
                                                        <input type="text" name="txtTribe" class="form-control"
                                                            placeholder="<?= $choiceText ?>: ">
                                                    </div>
                                                    <!-- <label class="form-check-label " for="defaultCheck1"><?= $choiceText ?>:
                                                </label>&emsp;
                                                <input type="radio" name="" id="" value="ລາວລຸ່ມ"> ລາວລຸ່ມ &emsp;
                                                <input type="radio" name="" id="" value="ມົ້ງ"> ມົ້ງ&emsp;
                                                <input type="radio" name="" id="" value="ກະມຸ"> ກະມຸ&emsp;
                                                <input type="radio" name="" id="" value="ໄທແດງ"> ໄທແດງ&emsp;
                                                <input type="radio" name="" id="" value="ລາວໄຕ"> ລາວໄຕ&emsp;
                                                <input type="radio" name="" id="" value="ຜອງ"> ຜອງ&emsp;
                                                <input type="radio" name="" id="" value="ຜູ້ນ້ອຍ"> ຜູ້ນ້ອຍ&emsp;
                                                <input type="radio" name="" id="" value="ຍວນ"> ຍວນ&emsp;
                                                <input type="radio" name="" id="" value="ເໝີ້ຍ"> ເໝີ້ຍ&emsp;
                                                <input type="radio" name="" id="" value="ລື້"> ລື້&emsp;
                                                <input type="radio" name="" id="" value="ຜູ້ໄທ"> ຜູ້ໄທ&emsp;
                                                <input type="radio" name="" id="" value="ໄທ"> ໄທ&emsp;
                                                <input type="radio" name="" id="" value="ພວນ"> ພວນ&emsp; -->

                                                </div>
                                            <?

                                            } elseif ($choiceOrder == 4) {
                                                ?>
                                                <div class="form-check ps-5">
                                                    <div class="col-md-2">
                                                        <input type="text" name="txtEdu" class="form-control"
                                                            placeholder="<?= $choiceText ?>: ">
                                                    </div>
                                                    <!-- <label class="form-check-label " for="defaultCheck1"><?= $choiceText ?>:
                                                </label>&emsp;
                                                <input type="radio" name="" id="" value="ມັດທະຍົມ"> ມັດທະຍົມ &emsp;
                                                <input type="radio" name="" id="" value="ປະລິນຍາຕີ"> ປະລິນຍາຕີ&emsp;
                                                <input type="radio" name="" id="" value="ປະລິນຍາໂທ"> ປະລິນຍາໂທ&emsp;
                                                <input type="radio" name="" id="" value="ປະລິນຍາເອກ"> ປະລິນຍາເອກ -->

                                                </div>
                                            <?

                                            } elseif ($choiceOrder == 5) {
                                                ?>
                                                <div class="form-check ps-5">
                                                    <div class="col-md-2">
                                                        <input type="text" name="txtPro" class="form-control"
                                                            placeholder="<?= $choiceText ?>: ">
                                                    </div>
                                                    <!-- <label class="form-check-label " for="defaultCheck1"><?= $choiceText ?>:
                                                </label>&emsp;
                                                <input type="radio" name="" id="" value="ຊາຍ"> ຊາຍ &emsp;
                                                <input type="radio" name="" id="" value="ຍິງ"> ຍິງ&emsp;
                                                <input type="radio" name="" id="" value="ບໍ່ລະບຸ"> ບໍ່ລະບຸ -->

                                                </div>
                                            <?

                                            }
                                        } else {
                                            ?>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="check<?= $i ?>"
                                                    value="<?= $rowChoice['id'] ?>,<?= $questionId ?>">

                                                <label class="form-check-label " for="defaultCheck1"><?= $choiceText ?></label>

                                            </div>
                                        <?
                                        }

                                    }
                                }
                                $i++;
                            }
                        } ?>
                    </div>
                </div>
                <br>
                <div class="container " data-aos="fade-up">
                    <button type="submit" name="btnSave" class="btn btn-success">Submit</button>
                </div>
            </section>
        </form>

    </main>
    <?php if (isset($_POST['btnSave'])) {
        $txtSex = $_POST['txtSex'];
        $txtAge = $_POST['txtAge'];
        $txtTribe = $_POST['txtTribe'];
        $txtEdu = $_POST['txtEdu'];
        $txtPro = $_POST['txtPro'];

        $sql = "INSERT INTO survey_respone(gender, age, tribe, education, address, 
        createdBy, 
        updatedBy, 
        createdAt, 
        updatedAt
        )
              VALUES
              ('$txtSex', '$txtAge', '$txtTribe', '$txtEdu', '$txtPro','$userId','$userId',NOW(),NOW())";


        if ($mysqli->query($sql) === TRUE) {
            echo '<script>console.log("success")</script>';
        } else {
            echo '<script>console.log("error:' . $sql . '")</script>';
        }
        $a = 0;
        $fecthQuestion = "SELECT * FROM survey_question";
        if ($result = $mysqli->query($fecthQuestion)) {
            while ($row = $result->fetch_assoc()) {
                if ($row['id'] <> 2) {
                    $check = $_POST['check' . $a];
                    $id = explode(",", $check);
                    $choice_id = $id[0];
                    $question_id = $id[1];
                    echo '<script>console.log("choice_id:' . $id[0] . 'question_id:' . $id[1] . '")</script>';
                    $max = "SELECT max(id) FROM survey_respone";
                    $maxId = $mysqli->query($max);
                    $rowMaxId = $maxId->fetch_row();
                    $survey_respone_maxId = $rowMaxId[0];

                    $sql1 = "INSERT INTO survey_answer(responeId, questionId, choiceId, createdAt, updatedAt
                    )
                          VALUES
                          ('$survey_respone_maxId', '$question_id', '$choice_id',NOW(),NOW())";
                    if ($mysqli->query($sql1) === TRUE) {
                        echo '<script>console.log("SUBMIT SUCCESS!!!")</script>';
                    } else {
                        echo '<script>console.log("error")</script>';
                    }
                }

                $a++;
            }
        }

        echo '<script>alert("SUBMIT SUCCESS!!!")</script>';
    }
    ?>
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
<script type="text/javascript">
    var numClicks = 0;
    var x = 5;

    function action() {
        numClicks++;
        if (numClicks == x) {
            //do something here
            //get hello div and make it visible
            console.log(numClicks);
            window.location.assign("http://localhost/jobhiring/login.php");
            // header("Location: http://localhost/jobhiring/admin/login.php");

        }
    }
    function check(i) {
        console.log(i);
    }

</script>