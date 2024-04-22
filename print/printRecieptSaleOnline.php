<?php
session_start();
$mysqli = new mysqli("localhost", "root", "56588965", "db_bodjob");

$dateNow = date("Y-m-d");
$timeNow = date("H:i");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}




$select = "SELECT MAX(id) FROM v_sale";
if ($result = $mysqli->query($select)) {

    $id = $result->fetch_row()[0];
}

$one = "SELECT * FROM v_sale WHERE id = $id";
if ($result2 = $mysqli->query($one)) {
    while ($row2 = $result2->fetch_row()) {
        $user = $row2[1];
        $total = $row2[3];
    }
}


$sql = "SELECT * FROM v_sale_details WHERE id = $id";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>ໃບບິນຂາຍ</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="../css/print.css" media="print" />
    <link type="text/css" rel="stylesheet" href="../css/formatpage.css" />
    <script src="../js/Action.js" type="text/javascript"></script>
    <script>
        function loadedCloseWindows() {
            window.setTimeout(CloseMe, 100);
        }

        function CloseMe() {
            window.close();
        }
    </script>

    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>

</head>

<body onload="printWindow(); loadedCloseWindows();">

    <!-- <body> -->
    <p></p>

    <div id="pagesize">
        <div id="headbox">
            <table>
                <tr>
                    <td align="left" width="20%">
                        <div>
                            <img src="../images/BkStore.png" width="200" height="150" />
                        </div>
                    </td>
                    <td align="left" width="100%" style="padding: 0 5px;">
                        <h3>ລະບົບຈັດການຂາຍຮ້ານຄ້າ BK</h3>
                        <h6>BAN DONGDOK, XATTHANY DISTRICT, VIENTIANE, LAO PDR.</h6>
                        <h6>Fax: (+856)2056788765 Tel: (+856)2054322345, www.demosystem.com</h6>
                    </td>
                </tr>
            </table>
            <div align="center">
                <h1 style="align-items: center;">ໃບບິນສັ່ງຊື້ເຄື່ອງອອນລາຍ</h1>
            </div>
            <div style="display: flex;justify-content: space-between;">

                <p style="padding: 0 20px">ບິນເລກທີ: <?= $id ?></p>
                <p style="padding: 0 20px">ວັນທີ: <?= $dateNow ?></p>

            </div>
            <div style="display: flex;justify-content: space-between;">

                <p style="padding: 0 20px">ໂທ: 020 56788765</p>
                <p style="padding: 0 20px">ເວລາ: <?= $timeNow ?></p>

            </div>
            <div style="display: flex;justify-content: space-between;">

                <p style="padding: 0 20px">ຊື່ລູກຄ້າ: <?= $user ?></p>


            </div>
        </div>

        <div id="tbl_content" align="center">
            <table border="1">
                <tr class="tb_h">
                    <td>ລ/ດ</td>
                    <td>ເນື້ອໃນລາຍການ</td>
                    <td>ຈຳນວນ</td>
                    <td>ລາຄາ</td>
                    <td>ລວມ</td>
                </tr>
                <?php
                $i = 1;

                if ($result1 = $mysqli->query($sql)) {
                    while ($row = $result1->fetch_row()) {
                ?>
                        <tr>
                            <td class="centered" style="width: 5%;"><?= $i ?></td>
                            <td style="padding: 0 5px; "><?= $row[2] ?></td>
                            <td style="padding: 0 5px; " class="centered"><?= $row[4] ?></td>
                            <td style="padding: 0 5px; " class="centered"><?= $row[3] ?></td>
                            <td style="padding: 0 5px; " class="centered"><?= $row[5] ?></td>
                        </tr>
                <?php

                        $i++;
                    }
                }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="centered">ລາຄາລວມສຸດທິ: </td>
                    <td style="padding: 0 5px;width: 38%;" class="centered"><?= $total ?></td>
                </tr>


            </table>
        </div>


    </div>
</body>

</html>