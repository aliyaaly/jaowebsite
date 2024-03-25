<?php

htmltage("Job Jao Website");

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ຜູ້ໃຊ້ລະບົບ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">ໜ້າຫຼັກ</a></li>
            <li class="breadcrumb-item active">ສິດຜູ້ໃຊ້ລະບົບ</li>
            <li class="breadcrumb-item active">ຜູ້ໃຊ້ລະບົບ</li>
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
                  <h4 class="modal-title">ຜູ້ໃຊ້</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="post" action="?d=user/user" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ພະນັງງານ</label>
                          <select class="form-control" name="cb_emp">
                            <option value="0">---ເລືອກ---</option>
                            <?php
                            if ($result = $mysqli->query($emp)) {
                              while ($row = $result->fetch_row()) {
                            ?>
                                <option value="<?= $row[0] ?>"><?= $row[1] . ' ' . $row[2] ?></option>
                            <?php   }
                            } ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>ສິດເຂົ້າໃຊ້</label>
                          <select class="form-control" name="cb_role">
                            <option value="0">---ເລືອກ---</option>
                            <?php
                            if ($result = $mysqli->query($role)) {
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
                          <label>ຊື່ຜູ້ໃຊ້</label>
                          <input type="text" name="txtUser" class="form-control" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>ລະຫັດຜ່ານ</label>
                          <input type="password" name="txtPass" class="form-control" required="">
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
                  <table id="example1" class="table table-bordered beautified_report">

                    <thead>
                      <tr>
                        <th>ລ/ດ</th>
                        <th>ຊື່ຜູ້ໃຊ້</th>
                        <th>ຊື່</th>
                        <th>ນາມສະກຸນ</th>
                        <th>ສິດເຂົ້າໃຊ້</th>
                        <th class="text-center">ຣີເຊັດລະຫັດ</th>
                        <th class="text-center">ລົບ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;

                      if ($result = $mysqli->query($fetch)) {
                        while ($row = $result->fetch_row()) {

                      ?>




                          <tr>
                            <td><?= $i ?></td>
                            <td><?= $row[1] ?></td>
                            <td><?= $row[3] ?></td>
                            <td><?= $row[4] ?></td>
                            <td><?= $row[5] ?></td>
                            <td align="center"><a href="?d=user/user&reset=<?= $row[0] ?>"><i class="fas fa-edit" onclick="return confirm('ຫຼັງຈາກ Reset ລະຫັດຂອງທ່ານແມ່ນ 123456')"></i></a></td>
                            <td align="center">
                              <a href="?d=user/user&del=<?= $row[0] ?>" onclick="return confirm('ທ່ານຕ້ອງການລຶບແທ້ບໍ...?')"><i class="far fa-trash-alt"></i></a>
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