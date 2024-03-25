<?php

htmltage("Job Jao Website");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Stock ສິນຄ້າ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active">Stock ສິນຄ້າ</li>
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


                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">

                                        <thead>
                                            <tr>

                                                <th>ບາໂຄດ</th>
                                                <th>ຊື່ສີນຄ້າ</th>
                                                <th>ລາຍລະອຽດສີນຄ້າ</th>
                                                <th>ປະເພດສີນຄ້າ</th>
                                                <th>ຫົວໜ່ວຍສີນຄ້າ</th>
                                                <th>ຈຳນວນ</th>
                                                <th>ຕົ້ນທຶນ</th>
                                                <th>ລາຄາຂາຍ</th>
                                                <th>ວັນໝົດອາຍຸ</th>
                                                <th>ໝົດອາຍຸໃນ</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody1">
                                            <?php
                                            $i = 1;
                                            $dateNow = date("Y-m-d", strtotime("+ 14days"));
                                            // echo '<script>alert("' . $dateNow . '")</script>';
                                            if ($result = $mysqli->query($fetch)) {
                                                while ($row = $result->fetch_row()) {

                                            ?>
                                                    <tr>

                                                        <td><?= $row[1] ?></td>
                                                        <td><?= $row[2] ?></td>
                                                        <td><?= $row[3] ?></td>
                                                        <td><?= $row[4] ?></td>
                                                        <td><?= $row[5] ?></td>
                                                        <?php
                                                        if ($row[6] < 50) {
                                                        ?>
                                                            <td style="color: red;"><?= $row[6] ?></td>
                                                        <?php } else {
                                                        ?>
                                                            <td><?= $row[6] ?></td>
                                                        <?php } ?>
                                                        <td><?= $row[7] ?></td>
                                                        <td id="td1" class="big_wrapper" contenteditable="true" onclick="document.execCommand('selectAll',false,null)"><?= $row[8] ?></td>
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
                            <div class="card-footer">
                                <button class="btn btn-primary" id="mybutt" onclick="sendData()">ບັນທຶກ</button>
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
<?php
//   if ($result = $mysqli->query($select)) {

//         echo '<script>alert("'.$result.'")</script>';
//     }

?>
<style>
    table td {
        cursor: pointer;
        transition: all .25s ease-in-out;
    }

    table tbody tr:hover {
        background-color: #46BCD6;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    // $('#mybutt').click(function() {
    //     var myTxt = $('.big_wrapper').html();
    //     $.ajax({
    //         type: 'post',
    //         url: 'sent_data.php',
    //         data: 'varname=' + myTxt + '&anothervar=' + moreTxt
    //     });
    // });
    function sendData() {


        var oTable = document.getElementById('tbody1');

        //gets rows of table
        var rowLength = oTable.rows.length;



        //loops through rows    
        for (i = 0; i < rowLength; i++) {

            //gets cells of current row
            var barcode = oTable.rows.item(i).cells.item(0).innerHTML;
            var qty = oTable.rows.item(i).cells.item(5).innerHTML;
            var price = oTable.rows.item(i).cells.item(7).innerHTML;
            console.log(barcode);
            console.log(price);

            updatePrice(barcode, price)



        }

    }

    function updatePrice(barcode, price) {
        var barcode = barcode;
        var price = price;

        var strURL = "function/updatePrice.php?barcode=" + barcode + "&price=" + price;
        // ajax.aspx?ajaxid=4&UserID=" + UserID + "&EmailAddress="

        $.ajax({
            type: "POST",
            url: strURL,
            data: {
                barcode: barcode,
                price: price
            },
            cache: false,
            success: function(data) {
                console.log("updatePrice");
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });
    }
</script>