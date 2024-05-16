<?php
$mn_dashboard = "";
$mn_Mmain = "";
$mn_Mmainn = "";
$mn_Mmain1 = "";
$mn_Mmain2 = "";
$mn_job = "";
$mn_company = "";
$mn_user = "";
$mn_salary = "";
$mn_experience = "";
$mn_language = "";
$mn_time = "";
$mn_news = "";


$mn_employerList = "";

$mn_report1 = "";
$mn_report2 = "";
$mn_report3 = "";


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
} else if ($_GET['d'] == 'master/salary') {
    $mn_Mmain = "menu-open";
    $mn_Mmain1 = "active";
    $mn_salary = "active";
} else if ($_GET['d'] == 'master/experience') {
    $mn_Mmain = "menu-open";
    $mn_Mmain1 = "active";
    $mn_experience = "active";
} else if ($_GET['d'] == 'master/language') {
    $mn_Mmain = "menu-open";
    $mn_Mmain1 = "active";
    $mn_language = "active";
} else if ($_GET['d'] == 'master/time') {
    $mn_Mmain = "menu-open";
    $mn_Mmain1 = "active";
    $mn_time = "active";
} else if ($_GET['d'] == 'master/news') {
    $mn_Mmain = "menu-open";
    $mn_Mmain1 = "active";
    $mn_news = "active";
} else if ($_GET['d'] == 'approve/approveEmployerList') {
    $mn_employerList = "active";
} else if ($_GET['d'] == 'report/report1') {
    $mn_Mmainn = "menu-open";
    $mn_Mmain2 = "active";
    $mn_report1 = "active";
} else if ($_GET['d'] == 'report/report2') {
    $mn_Mmainn = "menu-open";
    $mn_Mmain2 = "active";
    $mn_report2 = "active";
} else if ($_GET['d'] == 'report/report3') {
    $mn_Mmainn = "menu-open";
    $mn_Mmain2 = "active";
    $mn_report3 = "active";
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
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=master/salary" class="nav-link <?= $mn_salary ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນຂັ້ນເງິນເດືອນ</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=master/experience" class="nav-link <?= $mn_experience ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນປະສົບການ</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=master/language" class="nav-link <?= $mn_language ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນພາສາ</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=master/time" class="nav-link <?= $mn_time ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນເວລາ</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=master/news" class="nav-link <?= $mn_news ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນຂ່າວສານ</p>
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
                <li class="nav-item has-treeview <?= $mn_Mmainn ?>">
                    <a href="#" class="nav-link <?= $mn_Mmain2 ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            ລາຍງານ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <!-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=report/report1" class="nav-link <?= $mn_report1 ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນຜູ້ຈ້າງງານທັງໝົດ</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=report/report2" class="nav-link <?= $mn_report2 ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນຜູ້ສະໝັກວຽກທັງໝົດຕໍ່ຜູ້ຈ້າງງານ</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=report/report3" class="nav-link <?= $mn_report3 ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ຂໍ້ມູນການຮັບສະໝັກງານທັງໝົດຕໍ່ຜູ້ຫາງານ</p>
                            </a>
                        </li>
                    </ul> -->

                </li>
            </ul>
        </nav>
    </div>
</aside>