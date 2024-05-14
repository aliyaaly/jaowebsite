<?php
session_start();
include_once ("../function_sel.php");


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
          <li><a href="company.php" class="nav-item nav-link active" style="color: whitesmoke;">ບໍລິສັດ</a></li>


          <?php

          if ($_SESSION['role'] == "employee") {
            ?>
            <li class="dropdown"><a href="#"><span style="color: whitesmoke;">ຜູ້ໃຊ້</span> <i
                  class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#"><?= $_SESSION['name'] ?>   <?= $_SESSION['surname'] ?></a></li>
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
              <input type="password" class="form-control" id="pwd" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" name="password">
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
              <input type="text" class="form-control" placeholder="ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້" name="usernameEmp">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">ລະຫັດຜ່ານ:</label>
              <input type="password" class="form-control" id="pwd" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" name="passwordEmp">
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
  <section id="home">


    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <?php
        $a = 0;
        $news = "select * from news order by id ASC";
        if ($result = $mysqli->query($news)) {
          while ($row = $result->fetch_row()) {

            ?>

            <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $a ?>" <?php if ($a == 0): ?>class="active"
              <?php endif; ?>></button>
            <?php
            $a++;
          }
        }
        ?>
      </div>
      <?php
      $i = 1;
      if ($result = $mysqli->query($news)) {
        while ($row = $result->fetch_row()) {

          $imagePath = "assets/img/feed/" . $row[1];


          // echo '<script>alert("'.$imagePath.'")</script>';
          if (!file_exists($imagePath) || $row[1] == '') {
            $imagePath = "assets/img/company/hiring.jpg";
          }
          ?>
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item <?php if ($i == 1): ?>active<?php endif; ?> ">
              <img src="<?= $imagePath ?>" class="d-block w-100">
            </div>

          </div>
          <?php
          $i++;
        }
      }
      ?>
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    <!-- <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/feed/feed.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div> -->


  </section><!-- End home Section -->

  <main id="main">




    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">

          <p>ບໍລິສັດທີ່ <span>ປະກາດ</span> ສະໝັກວຽກຢູ່</p>
        </div>

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
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch p-2" data-aos="fade-up" data-aos-delay="100">
                <div class="chef-member">
                  <div class="member-img">
                    <img src="assets/img/job/job<?php $random = rand(1,5); echo $random; ?>.jpeg" class="img-fluid" alt="">
                   
                  </div>
                  <div class="member-info">
                    <h4> <img src="../dist/img/Company/<?=$comLogo?>" width="30" height="25" alt=""> <?=$comName?></h4>
                    <span><?=$name?></span>
                    <p><?=$strDate?> ຫາ <?=$endDate?></p>
                  </div>
                </div>
              </div><!-- End Chefs Member -->
              <?php
            }
          } ?>


        </div>

      </div>
    </section><!-- End Chefs Section -->


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
</script>