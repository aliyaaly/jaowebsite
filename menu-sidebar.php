<?php
$mn_dashboard = "";
$mn_Mmain = "";
$mn_Mmain1 = "";
$mn_Mmain2 = "";
$mn_job = "";
$mn_company = "";
$mn_user = "";
$mn_employerList = "";


if ($_GET['d'] == 'index') {
    $mn_dashboard = "active";
} else if ($_GET['d'] == 'master/job') {
    $mn_Mmain = "menu-open";
    $mn_Mmain1 = "active";
    $mn_job = "active";
} else if ($_GET['d'] == 'master/company') {
    $mn_Mmain = "menu-open";
    $mn_Mmain1 = "active";
    $mn_company = "active";
} else if ($_GET['d'] == 'master/user') {
    $mn_Mmain = "menu-open";
    $mn_Mmain1 = "active";
    $mn_user = "active";
} else if ($_GET['d'] == 'approve/approveEmployerList') {


    $mn_employerList = "active";
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
                                <p>ຂໍ້ມູນປະເພດວຽກ</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=master/user" class="nav-link <?= $mn_user ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="index.php?d=approve/approveEmployerList" class="nav-link <?= $mn_employerList ?>">
                            <i class="nav-icon far fa-check-circle"></i>
                            <p>
                            ອະນຸມັດລາຍການປະກາດວຽກ
                            </p>
                        </a>
                    </li>
                </ul>
            </ul>
        </nav>
    </div>
</aside>