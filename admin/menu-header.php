  <!-- Navbar -->
  <?php
  $GET_userID = $_SESSION['EGTKCOINuser_id'];
  $Get_OLDPASS = $_SESSION['EGTKCOINpass_log'];
  $actionScript = 0;


  if (isset($_POST["btnChangePass"])) {

    $Set_userName = $_SESSION['EGTKCOINuser_name'];
    $txtCurpassword = $mysqli->real_escape_string($_POST['txtCurpassword']);
    $txtNewpassword = $mysqli->real_escape_string($_POST['txtNewpassword']);
    $txtConpassword = $mysqli->real_escape_string($_POST['txtConpassword']);

    $passmd5 = md5($txtConpassword . '505uK5@v@y' . $Set_userName);
    $sql = "update tb_user set password='$passmd5' where user_id= '$GET_userID'";

    if ($mysqli->query($sql) === TRUE) {
      $_SESSION['EGTKCOINmessageAlert'] = 'ປ່ຽນລະຫັດຜ່ານສໍາເລັດແລ້ວ';
      $_SESSION['EGTKCOINpass_log'] = $txtConpassword;
      $actionScript == 0;
    } else {
      $_SESSION['EGTKCOINmessageAlert'] = 'ປ່ຽນລະຫັດບໍ່ຜ່ານສໍາເລັດ !!!';
      $actionScript == 0;
    }
  }

  ?>

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">ໜ້າຫຼັກ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">ຕິດຕໍ່ເຮົາ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">ອອກລະບົບ</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


      <ul class="navbar-nav ml-auto">




        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item">
            </a>

            <a class="dropdown-item">ຂໍ້ມູນຜູ້ໃຊ້</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#modal-ChangePass" href="#">ປ່ຽນລະຫັດຜ່ານ</a>
          </div>
        </li>
      </ul>
    </ul>
  </nav>

  <!-- <div class="modal fade" id="modal-ChangePass">
    <div class="modal-dialog">
      <div class="modal-content">
        <form role="form" method="post">
          <div class="modal-header">
            <h4 class="modal-title">ປ່ຽນລະຫັດຜ່ານ</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>ລະຫັດຜ່ານເກົ່າ</label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" name="txtCurpassword" id="txtCurpassword" onfocusout="CheckOldPass(<?= $Get_OLDPASS ?>);" required="required">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label>ລະຫັດຜ່ານໃໝ່</label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" name="txtNewpassword" id="txtNewpassword" onfocusout="CompairPass();" required="required">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label>ຢືນຢັນລະຫັດຜ່ານໃໝ່</label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" name="txtConpassword" id="txtConpassword" onfocusout="CompairPass();" onkeyup="CompairPass2();" required="required">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group"><label id="lblalert" style="color: red"></label></div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">ປິດ</button>
            <button type="submit" name="btnChangePass" id="btnChangePass" class="btn btn-primary">ຢືນຢັນການລະຫັດຜ່ານ</button>
          </div>
        </form>
      </div>
    </div>
  </div> -->


  <script src="plugins/toastr/toastr.min.js"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script type="text/javascript">
    function CheckOldPass(GetOlPass) {
      var GetCurInput = String($('#txtCurpassword').val());
      var Get_OLDPASSKK = String(GetOlPass);

      if (GetCurInput != "") {
        if (GetCurInput != Get_OLDPASSKK) {
          $(document).ready(function() {
            toastr.warning('ລະຫັດຜ່ານບໍ່ຖືກ')
          });
          document.getElementById("lblalert").innerHTML = 'ລະຫັດຜ່ານບໍ່ຖືກ...!';
          document.getElementById("btnChangePass").disabled = true;
        } else {
          document.getElementById("btnChangePass").disabled = false;
          document.getElementById("lblalert").innerHTML = '';
        }
      }
    }

    function CompairPass() {
      var txtNewpassword = String($('#txtNewpassword').val());
      var txtConpassword = String($('#txtConpassword').val());

      if (txtConpassword != "") {
        if (txtNewpassword != txtConpassword) {
          $(document).ready(function() {
            toastr.warning('ລະຫັດຜ່ານໃໝ່ ກັບ ຢືນຢັນລະຫັດຜ່ານໃໝ່ບໍ່ຖືກກັນ')
          });
          document.getElementById("btnChangePass").disabled = true;
          document.getElementById("lblalert").innerHTML = 'ລະຫັດຜ່ານໃໝ່ ກັບ ຢືນຢັນລະຫັດຜ່ານໃໝ່ບໍ່ຖືກກັນ';
        } else {
          document.getElementById("btnChangePass").disabled = false;
          document.getElementById("lblalert").innerHTML = '';
        }
      }

    }

    function CompairPass2() {
      var txtNewpassword = String($('#txtNewpassword').val());
      var txtConpassword = String($('#txtConpassword').val());

      if (txtConpassword != "") {
        if (txtNewpassword != txtConpassword) {
          document.getElementById("lblalert").innerHTML = 'ລະຫັດຜ່ານໃໝ່ ກັບ ຢືນຢັນລະຫັດຜ່ານໃໝ່ບໍ່ຖືກກັນ';
          document.getElementById("btnChangePass").disabled = true;
        } else {
          document.getElementById("lblalert").innerHTML = '';
          document.getElementById("btnChangePass").disabled = false;
        }
      }

    }

    <?php
    if ($_SESSION['EGTKCOINmessageAlert'] != null & $actionScript == 0) {
      $messageAlert = $_SESSION['EGTKCOINmessageAlert'];

    ?>
      $(document).ready(function() {
        toastr.info('<?= $messageAlert ?>')
      });
    <?php
      $_SESSION['EGTKCOINmessageAlert'] = '';
    } ?>
  </script>
  <!-- /.navbar -->