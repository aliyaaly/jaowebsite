<?php
session_start();
include_once("function_sel.php");



$dateNow = date("Y-m-d H:i:s");

if (isset($_POST['register'])) {
    $name = $mysqli->real_escape_string($_POST['txtName']);
    $surname = $mysqli->real_escape_string($_POST['txtSur']);
    $address = $mysqli->real_escape_string($_POST['txtAddress']);
    $phone = $mysqli->real_escape_string($_POST['txtPhone']);
    $username = $mysqli->real_escape_string($_POST['txtUser']);
    $password = $mysqli->real_escape_string($_POST['txtPass']);




    $sql = "insert into tbl_employee (name,surname,address,tel,status_id,isWho)
           VALUES ('$name','$surname','$address','$phone',1,'customer') ";

    if ($mysqli->query($sql) === TRUE) {

        $qry = " SELECT MAX(id) FROM tbl_employee where isDelete = 'no' and isWho = 'customer'  ";

        if ($result = $mysqli->query($qry)) {

            $emp_id = $result->fetch_row()[0];
        }

        $sql1 = "insert into tbl_user (username,password,role_id,emp_id,user_add,date_add)
    VALUES ('$username','$password', 4,'$emp_id', 0,'$dateNow') ";
        if ($mysqli->query($sql1) === TRUE) {
            echo '<script>alert("ລົງທະບຽນສຳເລັດ!!!")</script>';
            header("Location: login.php");
        } else {
            echo "<center><h2>ERROR INSERT</h2></center>";
        }
    } else {
        echo "<center><h2>ERROR INSERT</h2></center>";
    }
}

?>
<!-- <style>

.modal-confirm {		
	color: #636363;
	width: 325px;
	font-size: 14px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
	font-size: 58px;
	position: relative;
	top: 3px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff;
	border-radius: 4px;
	background: #82ce34;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #6fb32b;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style> -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ລະບົບຈັດການຂາຍຮ້ານຄ້າ BK | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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


<!-- Modal HTML -->
<!-- <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="fas fa-check-circle">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Awesome!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
			</div>
			<div class="modal-footer">
				<a href="login.php" class="btn btn-success btn-block">OK</a>
			</div>
		</div>
	</div>
</div>   -->

<body style=" background: linear-gradient(to right, #8e9eab, #eef2f3);" class="hold-transition login-page">
    <div>
        <div class="login-logo mt-5">
            <img src="dist/img/bk.png" width="350" height="120">
        </div>
        <!-- /.login-logo -->

        <div class="card">
            <div class="card-body login-card-body">
                <h3 class="login-box-msg">ລົງທະບຽນ</h3>

                <form method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ຊື່</label>
                                <input type="text" name="txtName" class="form-control" required="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ນາມສະກຸນ</label>
                                <input type="text" name="txtSur" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ເບີໂທ</label>
                                <input type="text" name="txtPhone" class="form-control" required="" value="020">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ທີ່ຢູ່</label>
                                <input name="txtAddress" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>User</label>
                                <input type="text" name="txtUser" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="password" name="txtPass" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">

                        
                        <div class="col-12 mb-3">
                            <button type="submit" name="register" class="btn btn-success btn-block">Register</button>
                        </div>
                        <h6 class="ml-3">ທ່ານມີບັນຊີແລ້ວ? <a href="login.php">ເຂົ້າສູ່ລະບົບ</a></h6>
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