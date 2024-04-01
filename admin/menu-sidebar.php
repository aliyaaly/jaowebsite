<?php
$mn_dashboard = "";
$mn_Mmain = "";
$mn_Mmain1 = "";
$mn_employee = "";


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

            <div class="row info">
                <a href="#" class="d-block">ເຂົ້າລະບົບໂດຍ: <?= $_SESSION['name'] . ' ' . $_SESSION['surname'] ?></a>

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

                </li>
            </ul>
        </nav>
    </div>
</aside>