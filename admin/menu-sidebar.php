<?php
$mn_dashboard = "";
$mn_Mmain = "";
$mn_Mmain1 = "";
$mn_job = "";
$mn_company = "";


if ($_GET['d'] == 'index') {
  $mn_dashboard = "active";
} else if ($_GET['d'] == 'master/job') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_job = "active";
}
else if ($_GET['d'] == 'master/company') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_company = "active";
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
                            <a href="index.php?d=master/company" class="nav-link <?= $mn_company ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນບໍລິສັດ</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=master/job" class="nav-link <?= $mn_job ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນຕໍາແໜ່ງວຽກ</p>
                            </a>
                        </li>
                    </ul>

                </li>
            </ul>
        </nav>
    </div>
</aside>