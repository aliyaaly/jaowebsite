<?php

htmltage("Job Jao Website");

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ຂໍ້ມູນບໍລິສັດ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?d=index">ໜ້າຫຼັກ</a></li>
            <li class="breadcrumb-item active">ຈັດການຂໍ້ມູນພື້ນຖານ</li>
            <li class="breadcrumb-item active">ຂໍ້ມູນບໍລິສັດ</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-New">
              ເພີ່ມ
          </div>
          <!-- /.card-header -->
          <div class="modal fade" id="modal-lg-New">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">ເພີ່ມບໍລິສັດໃໝ່</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="post" action="?d=master/company" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ຊື່ບໍລິສັດ</label>
                          <input type="text" name="txtCompany" class="form-control" required>

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
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ທີ່ຢູ່</label>
                          <input type="text" name="txtAddress" class="form-control">

                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ເວັບໄຊ້</label>
                          <input type="text" name="txtWebsite" class="form-control">

                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ໂລໂກ້</label>
                          <input name="edit_fileUpload" class="form-control" type="file" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ວັນເດືອນປີກໍ່ຕັ້ງ</label>
                          <input type="date" name="txtBorn" class="form-control" required>

                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ຄຳອະທິບາຍ</label>
                          <textarea name="txtDes" class="form-control" style="height: 100px"></textarea>

                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ຊື່ຜູ້ໃຊ້</label>
                          <input type="text" name="txtUserName" class="form-control">

                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                     
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ລະຫັດຜ່ານ</label>
                          <input readonly type="text" name="txtPassword" class="form-control" value="123456">

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ປີດ</button>
                    <button type="submit" name="btnSaveNew" class="btn btn-primary">ບັນທືກ</button>
                  </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
          <div class="row">
            <div class="col-md-12">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered beautified_report">

                    <thead class="text-center">
                      <tr>
                        <th>ລ/ດ</th>
                        <th>ຊື່ບໍລິສັດ</th>
                        <th>ເບີໂທ</th>
                        <th>ອີເມລ</th>
                        <th>ທີ່ຢູ່</th>
                        <th>ເວັບໄຊ້</th>
                        <th>ລາຍລະອຽດ</th>
                        <th>ໂລໂກ້</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;

                      if ($result = $mysqli->query($fetch)) {
                        while ($row = $result->fetch_row()) {

                          ?>
                          <div class="modal fade" id="modal-lg-Edit<?= $i ?>">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">ແກ້ໄຂບໍລິສັດ</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form method="post" action="?d=master/company" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <input type="text" hidden name="txtId" class="form-control" required=""
                                      value="<?= $row[0] ?>">
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>ຊື່ບໍລິສັດ</label>
                                          <input type="text" name="txtCompany" class="form-control" required=""
                                            value="<?= $row[2] ?>">

                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>ເບີໂທ</label>
                                          <input type="text" name="txtPhone" class="form-control" required=""
                                            value="<?= $row[2] ?>">

                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>ຊື່ບໍລິສັດ</label>
                                          <input type="text" name="txtEmail" class="form-control" required=""
                                            value="<?= $row[2] ?>">

                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>ຊື່ບໍລິສັດ</label>
                                          <input type="text" name="txtAddress" class="form-control" required=""
                                            value="<?= $row[2] ?>">

                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>ຊື່ບໍລິສັດ</label>
                                          <input type="text" name="txtWebsite" class="form-control" required=""
                                            value="<?= $row[2] ?>">

                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>ຊື່ບໍລິສັດ</label>
                                          <input type="text" name="txtDescription" class="form-control" required=""
                                            value="<?= $row[2] ?>">

                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>ຊື່ບໍລິສັດ</label>
                                          <input type="text" name="txtLogo" class="form-control" required=""
                                            value="<?= $row[2] ?>">

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">ປິດ</button>
                                    <button type="submit" name="btSaveEdit" class="btn btn-primary">ບັນທືກ</button>
                                  </div>

                                </form>
                              </div>

                            </div>

                          </div>



                          <tr class="text-center">
                            <td class="align-middle">
                              <?= $i ?>
                            </td>
                            <td class="align-middle">
                              <?= $row[2] ?>
                            </td>
                            <td class="align-middle">
                              <?= $row[4] ?>
                            </td>
                            <td class="align-middle">
                              <?= $row[5] ?>
                            </td>
                            <td class="align-middle">
                              <?= $row[6] ?>
                            </td>
                            <td class="align-middle"><a target="_blank" href="https://<?= $row[7] ?>">
                                <?= $row[7] ?>
                              </a></td>
                            <td class="align-middle">
                              <?= $row[8] ?>
                            </td>
                            <?php

                            $imagePath = "dist/img/company/" . $row[3];
                            if (!file_exists($imagePath) || $row[3] == '') {
                              $imagePath = "dist/img/default.png";
                            }
                            ?>
                            <td class="align-middle"><img class="img-fluid img-thumbnail" width="70px" height="70px"
                                src="<?= $imagePath ?>" /></td>
                            <td class="align-middle">
                              <a href="#"><i class="fas fa-edit" data-toggle="modal"
                                  data-target="#modal-lg-Edit<?= $i ?>"></i></a>
                              <a href="?d=master/company&del=<?= $row[0] ?>"
                                onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i class="far fa-trash-alt"></i></a>
                            </td>

                          </tr>
                          <?php $i++;
                        }
                      } ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>