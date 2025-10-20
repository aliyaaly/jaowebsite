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

<section id="contact" class="contact ">

<div class="container" data-aos="fade-up">

    <div class="row gy-4">

        <?php
         $jobId = $_GET["jobId"];
         $i = 0;
         $fecth = "SELECT * FROM v_employ WHERE status ='open' AND jobId IN ('$jobId') GROUP BY name ";
        if ($result = $mysqli->query($fecth)) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $comName = $row['companyName'];
                $comId = $row['companyId'];
                $comLogo = $row['companyLogo'];
                $name = $row['jobPositionLao'].' ('.$row['jobPositionEn'].')';
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
                                                    <a type="button" href="#" class="btn btn-primary"
                                                        onclick="openMyModal2(<?= $i ?>,<?= $userId ?>)"
                                                        style=" font-weight: 500;font-size:
                                                                16px;letter-spacing: 1px;display:
                                                                inline-block;padding: 8px 32px;transition:
                                                                0.5s;color: #fff; ">
                                                        <b>ສະໝັກທີ່ນີ້</b> <i
                                                            class="bi bi-box-arrow-down-right"></i>
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
                                                    <?php
                                                            $imageDe = "SELECT image FROM employ_image WHERE  employId ='$id'";
                                                            if ($resultimageDe = $mysqli->query($imageDe)) {
                                                                while ($rowimageDe = $resultimageDe->fetch_assoc()) {
                                                                    ?>

                                                    <img src="assets/img/company/<?= $rowimageDe['image'] ?>"
                                                        class="w-100" />
                                                    <?php

                                                                }
                                                            }
                                                            ?>
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
                                                    $employList = "SELECT * FROM v_employ WHERE companyId = '$comId' AND status='open' group by id asc";
                                                    if ($result3 = $mysqli->query($employList)) {
                                                        while ($row1 = $result3->fetch_assoc()) {
                                                            $employName = $row1['jobPositionLao'];
                                                            $location = $row1['address'];
                                                            $strDate = $row1['strDate'];
                                                            $endDate = $row1['endDate'];

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
        <div class="modal" id="myModalApply<?= $i ?>">
            <div class="modal-dialog modal-lg">
                <class class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header bg-info " style="color: whitesmoke;">
                        <h4 class="modal-title">ສະໝັກຕຳແໜ່ງ <b><?= $name ?></b></h4>

                    </div>
                    <form method="post" action="#" role="form" enctype="multipart/form-data" class="was-validated">
                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>ບໍລິສັດ</label>
                              <input type="hidden" name="txtaEmployerId" class="form-control" value="<?= $id ?>">
                              <input type="hidden" name="txtaComId" class="form-control" value="<?= $comId ?>">
                              <input type="text" name="txtaCom" disabled class="form-control" value="<?= $comName ?>">

                            </div>
                          </div>

                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>ຄຳອະທິບາຍ</label>
                              <input type="text" name="txtTitle" class="form-control" required>
                              <div class="valid-feedback">ກອກຂໍ້ມູນສຳເລັດ.</div>
                              <div class="invalid-feedback">ກະລຸນາກອກຂໍ້ມູນ...</div>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>ເບີໂທ</label>

                              <input type="text" name="txtPhone" disabled class="form-control"
                                value="<?= $_SESSION['phone'] ?>">

                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label>ທີ່ຢູ່</label>

                              <input type="text" name="txtaCom" disabled class="form-control"
                                value="<?= $_SESSION['address'] ?>">

                            </div>
                          </div>
                          <!-- <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>ຄຳອະທິບາຍ</label>
                                                        <textarea class="form-control" name="txtDescription" rows="6"
                                                            placeholder="ລາຍລະອຽດ"></textarea>

                                                    </div>
                                                </div> -->
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>ແນບໄຟລ CV</label>
                              <input name="file" class="form-control" type="file" required>
                              <div class="valid-feedback">ສຳເລັດ.</div>
                              <div class="invalid-feedback">ກະລຸນາແນບໄຟລ...</div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ປີດ</button>
                        <button type="submit" name="btnApply" class="btn btn-success">ສະໝັກເລີຍ</button>
                      </div>
                    </form>
            </div>
        </div>

        <div class="col-md-6" data-bs-toggle="modal" href="#myModalInfo<?= $i ?>">
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

<?php
    if (isset($_POST['btnApply'])) {
        $txtaEmployerId = $_POST['txtaEmployerId'];
        $txtaComId = $_POST['txtaComId'];
        $txtTitle = $_POST['txtTitle'];
        // echo '<script>alert("txtaEmployerId:' . $txtaEmployerId . '")</script>';
        // echo '<script>alert("txtaComId:' . $txtaComId . '")</script>';
        // echo '<script>alert("txtTitle:' . $txtTitle . '")</script>';
        $sqlApply = "INSERT INTO apply(employId, companyId, userId, title, status, createdBy, updatedBy, createdAt, updatedAt)
      VALUES
      ('$txtaEmployerId', '$txtaComId', '$userId', '$txtTitle', 'proceed','$userId','$userId',NOW(),NOW())";


        if ($mysqli->query($sqlApply) === TRUE) {

            $max = "SELECT max(id) FROM apply";
            $maxId = $mysqli->query($max);
            $rowMaxId = $maxId->fetch_row();
            $rowApply_maxId = $rowMaxId[0];
            $file = trim($_FILES["file"]["tmp_name"]);

            if ($file != "") {
                $nameCV = $_FILES["file"]["name"];
                $extCV = end((explode(".", $nameCV))); # extra () to prevent notice
                $fileNameCV = date('YmdHis') . $userId . "." . $extCV;
                copy($_FILES["file"]["tmp_name"], "assets/img/cv/" . $fileNameCV);
            }
            $sqlApplyFile = "INSERT INTO apply_attachment(applyId, companyId, userId, file, createdBy, updatedBy, createdAt, updatedAt)
        VALUES
        ('$rowApply_maxId', '$txtaComId', '$userId', '$fileNameCV','$userId','$userId',NOW(),NOW())";

            if ($mysqli->query($sqlApplyFile) === TRUE) {
                echo '<script>alert("ສະໝັກວຽກສຳເລັດແລ້ວ")</script>';
            } else {
                echo "<center><h2>$sql</h2></center>";
            }

        } else {
            echo "<center><h2>$sql</h2></center>";
        }
    }
    ?>
    
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
function openMyModal2(i, userId) {
    var para = i;
    var id = userId;
    // alert(id);
    if (id === undefined) {
        let myModal = new
        bootstrap.Modal(document.getElementById('myModalLogin'), {});
        myModal.show();

        $('#myModalInfo' + para).modal('hide');
    } else {

        let myModal = new
        bootstrap.Modal(document.getElementById('myModalApply' + para), {});
        myModal.show();
    }

}

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
        success: function(data) {
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
        success: function(data) {
            $("#contact").html(data);
            // alert(data);
        }
    });
}
</script>