<?php
$mn_dashboard = "";
$mn_Mmain = "";
$mn_Mmain1 = "";
$mn_employee = "";
$mn_product = "";
$mn_customer = "";
$mn_exchange = "";
$mn_supplier = "";
$mn_category = "";
$mn_unit = "";
$mn_news = "";
$mn_order = "";
$mn_import = "";
$mn_sale = "";
$mn_aprroveSale="";

$mn_report = '';
$mn_report1 = '';
$mn_stock = '';
$mn_r_order = '';
$mn_r_import = '';
$mn_r_hotsale = '';
$mn_r_sale = '';
$mn_r_stock = '';


$mn_user = '';
$mn_user1 = '';
$mn_u_user = '';

if ($_GET['d'] == 'index') {
  $mn_dashboard = "active";
} else if ($_GET['d'] == 'master/company') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_company = "active";
} else if ($_GET['d'] == 'order/order') {

  $mn_order = "active";
} else if ($_GET['d'] == 'import/import') {

  $mn_import = "active";
} else if ($_GET['d'] == 'sale/sale') {

  $mn_sale = "active";
  $mn_sale = "active";
} 
else if ($_GET['d'] == 'approveSale/doneSale') {

  $mn_aprroveSale="active";
  $mn_aprroveSale="active";
} 

else if ($_GET['d'] == 'stock/stock') {

  $mn_stock = "active";
} else if ($_GET['d'] == 'master/employee') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_employee = "active";
} else if ($_GET['d'] == 'master/product') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_product = "active";
} else if ($_GET['d'] == 'master/customer') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_customer = "active";
} else if ($_GET['d'] == 'master/exchange') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_exchange = "active";
} else if ($_GET['d'] == 'master/supplier') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_supplier = "active";
} else if ($_GET['d'] == 'master/category') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_category = "active";
} else if ($_GET['d'] == 'master/unit') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_unit = "active";
} 
else if ($_GET['d'] == 'master/news') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_news = "active";
}else if ($_GET['d'] == 'report/report') {
  // $mn_Mmain = "menu-open";
  // $mn_Mmain1 = "active";
  $mn_report = "menu-open";
  $mn_report1 = "active";
} else if ($_GET['d'] == 'report/order') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_r_order = "active";
} else if ($_GET['d'] == 'report/import') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_r_import = "active";
} else if ($_GET['d'] == 'report/hotsale') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_r_hotsale = "active";
} else if ($_GET['d'] == 'report/sale') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_r_sale = "active";
} else if ($_GET['d'] == 'report/stock') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_r_stock = "active";
} else if ($_GET['d'] == 'user/user') {
  $mn_user = "menu-open";
  $mn_user1 = "active";
  $mn_u_user = "active";
}




?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">

    <span class="brand-text font-weight-light">Job Jao Website Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <?php

        $imagePath = "dist/img/logo_jobjao.png";

        ?>
        <img src="<?= $imagePath ?>" class="elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $_SESSION['name'] . ' ' . $_SESSION['surname'] ?></a>
      </div>

    </div>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">



      <div class="info">
        <a href="#" class="d-block">ສິດເຂົ້າໃຊ້: <?= $_SESSION['role'] ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=index" class="nav-link <?= $mn_dashboard ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              ໜ້າຫຼັກ
            </p>
          </a>
        </li>

        <?php if ($_SESSION['role_id'] == 1) { ?>
          <li class="nav-item has-treeview <?= $mn_Mmain ?>">
            <a href="#" class="nav-link <?= $mn_Mmain1 ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                ຈັດການຂໍ້ມູນພື້ນຖານ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/employee" class="nav-link <?= $mn_employee ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຂໍ້ມູນພະນັກງານ</p>
                </a>
              </li>

            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/product" class="nav-link <?= $mn_product ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຂໍ້ມູນສິນຄ້າ</p>
                </a>
              </li>

            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/customer" class="nav-link <?= $mn_customer ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຂໍ້ມູນລູກຄ້າ</p>
                </a>
              </li>

            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/exchange" class="nav-link <?= $mn_exchange ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຂໍ້ມູນອັດຕາແລກປ່ຽນ</p>
                </a>
              </li>

            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/supplier" class="nav-link <?= $mn_supplier ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຂໍ້ມູນຜູ້ສະໜອງ</p>
                </a>
              </li>

            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/category" class="nav-link <?= $mn_category ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຂໍ້ມູນປະເພດສິນຄ້າ</p>
                </a>
              </li>

            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/unit" class="nav-link <?= $mn_unit ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ</p>
                </a>
              </li>

            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?d=master/news" class="nav-link <?= $mn_news ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ຂ່າວສານ</p>
                </a>
              </li>

            </ul>


          </li>



      </ul>
      </li>


      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=order/order" class="nav-link <?= $mn_order ?>">
            <i class="nav-icon fas fa-box"></i>
            <p>
              ສັ່ງຊື້ສິນຄ້າ
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=import/import" class="nav-link <?= $mn_import ?>">
            <i class="nav-icon fas fa-truck"></i>
            <p>
              ນຳເຂົ້າສິນຄ້າ
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=stock/stock" class="nav-link <?= $mn_stock ?>">
            <i class="nav-icon fa fa-home"></i>
            <p>
              ຄັງສິນຄ້າ
            </p>
          </a>
        </li>

      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=sale/sale" class="nav-link <?= $mn_sale ?>">
            <i class="nav-icon fa fa-shopping-cart"></i>
            <p>
              ຂາຍສິນຄ້າ
            </p>
          </a>
        </li>

      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=approveSale/doneSale" class="nav-link <?= $mn_aprroveSale ?>">
            <i class="nav-icon fas fa-check-circle"></i>
            <p>
              ສຳເລັດຂາຍສິນຄ້າອອນລາຍ
            </p>
          </a>
        </li>

      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview <?= $mn_report ?>">
          <a href="#" class="nav-link <?= $mn_report1 ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              ລາຍງານ
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=report/order" class="nav-link <?= $mn_r_order ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ລາຍງານການສັ່ງຊື້</p>
              </a>
            </li>

          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=report/import" class="nav-link <?= $mn_r_import ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ລາຍງານການນຳເຂົ້າ</p>
              </a>
            </li>

          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=report/sale" class="nav-link <?= $mn_r_sale ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ລາຍງານການຂາຍ</p>
              </a>
            </li>


          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=report/hotsale" class="nav-link <?= $mn_r_hotsale ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ລາຍງານສິນຄ້າຂາຍດີ</p>
              </a>
            </li>


          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=report/stock" class="nav-link <?= $mn_r_stock ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ລາຍງານສີນຄ້າຍັງຫນ້ອຍ</p>
              </a>
            </li>

          </ul>
      </ul>

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview <?= $mn_user ?>">
          <a href="#" class="nav-link <?= $mn_user1 ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              ສິດຜູ້ໃຊ້ລະບົບ
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=user/user" class="nav-link <?= $mn_u_user ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ຜູ້ໃຊ້</p>
              </a>
            </li>

          </ul>

      </ul>

    <?php
        }
        if ($_SESSION['role_id'] == 2) {
    ?>
      <li class="nav-item has-treeview <?= $mn_Mmain ?>">
        <a href="#" class="nav-link <?= $mn_Mmain1 ?>">
          <i class="nav-icon fas fa-book"></i>
          <p>
            ຈັດການຂໍ້ມູນພື້ນຖານ
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?d=master/employee" class="nav-link <?= $mn_employee ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>ຂໍ້ມູນພະນັກງານ</p>
            </a>
          </li>

        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?d=master/product" class="nav-link <?= $mn_product ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>ຂໍ້ມູນສິນຄ້າ</p>
            </a>
          </li>

        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?d=master/customer" class="nav-link <?= $mn_customer ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>ຂໍ້ມູນລູກຄ້າ</p>
            </a>
          </li>

        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?d=master/exchange" class="nav-link <?= $mn_exchange ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>ຂໍ້ມູນອັດຕາແລກປ່ຽນ</p>
            </a>
          </li>

        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?d=master/supplier" class="nav-link <?= $mn_supplier ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>ຂໍ້ມູນຜູ້ສະໜອງ</p>
            </a>
          </li>

        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?d=master/category" class="nav-link <?= $mn_category ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>ຂໍ້ມູນປະເພດສິນຄ້າ</p>
            </a>
          </li>

        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?d=master/unit" class="nav-link <?= $mn_unit ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>ຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ</p>
            </a>
          </li>

        </ul>



      </li>



      </ul>
      </li>


      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=order/order" class="nav-link <?= $mn_order ?>">
            <i class="nav-icon fas fa-box"></i>
            <p>
              ສັ່ງຊື້ສິນຄ້າ
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=import/import" class="nav-link <?= $mn_import ?>">
            <i class="nav-icon fas fa-truck"></i>
            <p>
              ນຳເຂົ້າສິນຄ້າ
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=stock/stock" class="nav-link <?= $mn_stock ?>">
            <i class="nav-icon fa fa-home"></i>
            <p>
              ຄັງສິນຄ້າ
            </p>
          </a>
        </li>

      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=sale/sale" class="nav-link <?= $mn_sale ?>">
            <i class="nav-icon fa fa-shopping-cart"></i>
            <p>
              ຂາຍສິນຄ້າ
            </p>
          </a>
        </li>

      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=approveSale/doneSale" class="nav-link <?= $mn_aprroveSale ?>">
            <i class="nav-icon fas fa-check-circle"></i>
            <p>
              ສຳເລັດຂາຍສິນຄ້າອອນລາຍ
            </p>
          </a>
        </li>

      </ul>


      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview <?= $mn_user ?>">
          <a href="#" class="nav-link <?= $mn_user1 ?>">
            <i class="nav-icon fas fa-book"></i>
            <p>
              ສິດຜູ້ໃຊ້ລະບົບ
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=user/user" class="nav-link <?= $mn_u_user ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>ຜູ້ໃຊ້</p>
              </a>
            </li>

          </ul>

      </ul>
    <?php
        }
        if ($_SESSION['role_id'] == 3) {
    ?>

      



      </ul>
      </li>


      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=order/order" class="nav-link <?= $mn_order ?>">
            <i class="nav-icon fas fa-box"></i>
            <p>
              ສັ່ງຊື້ສິນຄ້າ
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=import/import" class="nav-link <?= $mn_import ?>">
            <i class="nav-icon fas fa-truck"></i>
            <p>
              ນຳເຂົ້າສິນຄ້າ
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=stock/stock" class="nav-link <?= $mn_stock ?>">
            <i class="nav-icon fa fa-home"></i>
            <p>
              ຄັງສິນຄ້າ
            </p>
          </a>
        </li>

      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=sale/sale" class="nav-link <?= $mn_sale ?>">
            <i class="nav-icon fa fa-shopping-cart"></i>
            <p>
              ຂາຍສິນຄ້າ
            </p>
          </a>
        </li>

      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=approveSale/doneSale" class="nav-link <?= $mn_aprroveSale ?>">
            <i class="nav-icon fas fa-check-circle"></i>
            <p>
              ສຳເລັດຂາຍສິນຄ້າອອນລາຍ
            </p>
          </a>
        </li>

      </ul>
    

     
    <?php
        }
    ?>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>