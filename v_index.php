<?php
htmltage("Job Jao Website");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ໜ້າຫຼັກ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ໜ້າຫຼັກ</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
   
    <!-- <section class="content mb-4">

        <div class="container-fluid">
           
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4" onclick="location.href='index.php?d=master/stocka';"
                    style="cursor:pointer">
                  
                    <div class="small-box bg-info ">
                        <div class="inner">
                            <h1>ສະຕ໋ອກສິນຄ້າ</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <a href="index.php?d=master/stocka" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4" onclick="location.href='index.php?d=order/order';"
                    style="cursor:pointer">
                   
                    <div class="small-box bg-primary ">
                        <div class="inner">
                            <h1>ສັ່ງຊື້ສິນຄ້າ</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <a href="index.php?d=order/order" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4" onclick="location.href='index.php?d=import/import';"
                    style="cursor:pointer">
                  
                    <div class="small-box bg-warning ">
                        <div class="inner">
                            <h1>ນຳເຂົ້າສິນຄ້າ</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <a href="index.php?d=import/import" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4" onclick="location.href='index.php?d=sale/sale';"
                    style="cursor:pointer">
                
                    <div class="small-box bg-success ">
                        <div class="inner">
                            <h1>ຂາຍສິນຄ້າ</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="index.php?d=sale/sale" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4" onclick="location.href='index.php?d=report/report';"
                    style="cursor:pointer">
                  
                    <div class="small-box bg-secondary ">
                        <div class="inner">
                            <h1>ລາຍງານ</h1>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="index.php?d=report/report" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


            </div>
        </div>
    </section> -->
    <!-- <section class="content">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="color:red;">ສະແດງລາຍການສິນຄ້າໃກ້ໝົດອາຍຸ</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="main" class="table table-bordered beautified_report">

                                        <thead style="background-color:#2F96B4 ;">
                                            <tr style="color:white;">
                                                <th>no</th>
                                                <th>ບາໂຄດ</th>
                                                <th>ຊື່ສີນຄ້າ</th>
                                                <th>ລາຍລະອຽດສີນຄ້າ</th>
                                                <th>ປະເພດສີນຄ້າ</th>
                                                <th>ຫົວໜ່ວຍສີນຄ້າ</th>
                                                <th>ວັນໝົດອາຍຸ</th>
                                                <th>ໝົດອາຍຸໃນ</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody1">
                                            <?php
                      $i = 1;
                      $fetch = "SELECT *,(CASE WHEN datediff(expired_date,CURDATE()) > 0 then datediff(expired_date,CURDATE())
                                    ELSE 'Expired'
                                    END) as Remaining_days_expired from v_product WHERE isDelete = 'no'  ORDER BY  
                                    Remaining_days_expired+0 ASC";
                      $dateNow = date("Y-m-d", strtotime("+ 14days"));
                      // echo '<script>alert("' . $dateNow . '")</script>';
                      if ($result = $mysqli->query($fetch)) {
                        while ($row = $result->fetch_row()) {

                      ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row[1] ?></td>
                                                <td><?= $row[2] ?></td>
                                                <td><?= $row[3] ?></td>
                                                <td><?= $row[4] ?></td>
                                                <td><?= $row[5] ?></td>

                                                <?php
                            if ($row[10] <= $dateNow) {
                            ?>
                                                <td style="color: red;"><?= $row[10] ?></td>

                                                <?php } else {
                            ?>
                                                <td><?= $row[10] ?></td>

                                                <?php } ?>

                                                <?php
                            if ($row[12] <= 14) {
                            ?>
                                                <td style="color: red;"><?= $row[12] ?> ວັນ</td>

                                                <?php } else {
                            ?>
                                                <td><?= $row[12] ?> ວັນ</td>

                                                <?php } ?>
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


    </section> -->

</div>

<!-- /.content-wrapper -->