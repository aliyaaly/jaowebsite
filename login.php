<?php
session_start();
include_once ("function_sel.php");
if (isset($_SESSION['user_id']) && $_SESSION['role'] == 'admin') {
  header("Location: index.php?d=index");
  exit();
}


// /*======================*/
// ob_start(); // Turn on output buffering
// system('ipconfig /all'); //Execute external program to display output
// $mycom=ob_get_contents(); // Capture the output into a variable
// ob_clean(); // Clean (erase) the output buffer

// $findme = "Physical";
// $pmac = strpos($mycom, $findme); // Find the position of Physical text
// $mac=substr($mycom,($pmac+36),17); // Get Physical Address
// //echo $mac;

if (isset($_POST['login'])) {
  $username = $mysqli->real_escape_string($_POST['username']);
  $password = $mysqli->real_escape_string($_POST['password']);

  $message = checkLogin($username, $password, $mysqli);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Job Jao Website Admin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="dist/img/logo_jobjao.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body style=" background: linear-gradient(to right, #8e9eab, #eef2f3);" class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h1>Job Jao Website Admin | Log in</h1>
        </div>
        <!-- /.login-logo -->

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">ເຂົ້າສູ່ລະບົບ</p>

                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="user name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 mb-3">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- <h6 class="ml-3">ທ່ານຍັງບໍ່ມີບັນຊີ? <a href="register.php" >ລົງທະບຽນ</a></h6> -->
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

</body>

</html>