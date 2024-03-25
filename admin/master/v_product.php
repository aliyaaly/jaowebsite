<?php

htmltage("Job Jao Website");

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ຂໍ້ມູນ ສີນຄ້າ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
            <li class="breadcrumb-item active">ຈັດການຂໍ້ມູນ</li>
            <li class="breadcrumb-item active">ຂໍ້ມູນ ສີນຄ້າ</li>
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
                  <h4 class="modal-title">ຂໍ້ມູນສີນຄ້າໃໝ່</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="post" action="?d=master/product" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>ບາໂຄດ</label>
                          <input type="text" name="txtbarcode" class="form-control" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>ຊື່ສີນຄ້າ</label>
                          <input type="text" name="txtproductName" class="form-control" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>ລາຍລະອຽດ</label>
                          <input type="text" name="txtdescription" class="form-control" required="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ປະເພດສິນຄ້າ</label>
                          <select class="form-control" name="cb_cate">
                            <option value="0">---ເລືອກ---</option>
                            <?php
                            if ($result = $mysqli->query($category)) {
                              while ($row = $result->fetch_row()) {
                            ?>
                                <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                            <?php   }
                            } ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ຫົວໜ່ວຍສິນຄ້າ</label>
                          <select class="form-control" name="cb_unit">
                            <option value="0">---ເລືອກ---</option>
                            <?php
                            if ($result = $mysqli->query($unit)) {
                              while ($row = $result->fetch_row()) {
                            ?>
                                <option value="<?= $row[0] ?>"><?= $row[1] ?></option>
                            <?php   }
                            } ?>
                          </select>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Image</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="bsCustomFileInput1_1" name="txtImage">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ປິດ</button>
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
                  <table id="example55" class="table table-bordered beautified_report">

                    <thead>
                      <tr>
                        <th>ລ/ດ</th>
                        <th>ບາໂຄດ</th>
                        <th>ບາໂຄດ</th>
                        <th>ຊື່ສີນຄ້າ</th>
                        <th>ລາຍລະອຽດສີນຄ້າ</th>
                        <th>ປະເພດສີນຄ້າ</th>
                        <th>ຫົວໜ່ວຍສີນຄ້າ</th>
                        <th>ຈຳນວນ</th>
                        <th>ຮູບພາບ</th>
                        <th>ແກ້ໄຂ</th>
                        <th>ລົບ</th>
                        <th>ພິມ barcode</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;

                      if ($result = $mysqli->query($fetch)) {
                        while ($row = $result->fetch_row()) {

                      ?>
                          <div class="modal fade" id="modal-lg-image<?= $i ?>">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Image</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <?php
                                        $imagePath = "ecommerce/product/" . $row[11];
                                        if (!file_exists($imagePath) || $row[11] == '') {
                                          $imagePath = "ecommerce/product/userImage.png";
                                        }
                                        ?>
                                        <img src="<?= $imagePath ?>" class="elevation-2" alt="User Image" style="height:300px; width:300px;">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>


                          
                          <div class="modal fade" id="modal-lg-Edit<?= $i ?>">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">ແກ້ໄຂຂໍ້ມູນສີນຄ້າ</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form method="post" action="?d=master/product" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <input type="text" hidden name="txtId" class="form-control" required="" value="<?= $row[0] ?>">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="form-group">
                                          <label>ບາໂຄດ</label>
                                          <input type="text" name="txtbarcode" class="form-control" required="" value="<?= $row[1] ?>">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="form-group">
                                          <label>ຊື່ສີນຄ້າ</label>
                                          <input type="text" name="txtproductName" class="form-control" required="" value="<?= $row[2] ?>">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="form-group">
                                          <label>ລາຍລະອຽດ</label>
                                          <input type="text" name="txtdescription" class="form-control" required="" value="<?= $row[3] ?>">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>ປະເພດສິນຄ້າ</label>
                                          <select class="form-control" name="cb_cate">
                                            <option value="0">---ເລືອກ---</option>
                                            <?php
                                            if ($resultc = $mysqli->query($category)) {
                                              while ($rowc = $resultc->fetch_row()) {
                                                $selected = $rowc[1] == $row[4] ? "selected" : "";
                                            ?>
                                                <option value="<?= $rowc[0] ?>" <?= $selected ?>><?= $rowc[1] ?></option>
                                            <?php   }
                                              $resultc->close();
                                            } ?>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>ຫົວໜ່ວຍສິນຄ້າ</label>
                                          <select class="form-control" name="cb_unit">
                                            <option value="0">---ເລືອກ---</option>
                                            <?php
                                            if ($resultu = $mysqli->query($unit)) {
                                              while ($rowu = $resultu->fetch_row()) {
                                                $selected = $rowu[1] == $row[5] ? "selected" : "";
                                            ?>
                                                <option value="<?= $rowu[0] ?>" <?= $selected ?>><?= $rowu[1] ?></option>
                                            <?php   }
                                              $resultu->close();
                                            } ?>
                                          </select>
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



                          <tr>
                            <td><?= $i ?></td>
                            <td><?= barcode($row[1]) ?></td>
                            <td><?= $row[1] ?></td>
                            <td><?= $row[2] ?></td>
                            <td><?= $row[3] ?></td>
                            <td><?= $row[4] ?></td>
                            <td><?= $row[5] ?></td>
                            <td><?= $row[6] ?></td>
                            <td align="center"><a href="#"><i class="fas fa-portrait" data-toggle="modal" data-target="#modal-lg-image<?= $i ?>"></i></a></td>
                            <td align="center"><a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?= $i ?>"></i></a></td>
                            <td align="center">
                              <a href="?d=master/product&del=<?= $row[0] ?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i class="far fa-trash-alt"></i></a>
                            </td>
                            <td align="center">
                              <a class="btn btn-warning" href="print/barcode.php?print=<?= $row[1] ?>" target="_blank" role="button"><i class="fa fa-print"></i></a>
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