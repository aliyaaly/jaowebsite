<?php

htmltage("Job Jao Website");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ຂາຍສິນຄ້າ</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ຂາຍສິນຄ້າ</li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg-New">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ເລືອກສິນຄ້າ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table id="table1" class="table table-bordered beautified_report">

                                    <thead>
                                        <tr>
                                            <th>ບາໂຄດ</th>
                                            <th>ຊື່ສີນຄ້າ</th>
                                            <th>ລາຍລະອຽດສີນຄ້າ</th>
                                            <th>ປະເພດສີນຄ້າ</th>
                                            <th>ຫົວໜ່ວຍສີນຄ້າ</th>
                                            <th>ຈຳນວນ</th>
                                            <th>ລາຄາ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($result = $mysqli->query($product)) {
                                            while ($row = $result->fetch_row()) {

                                        ?>
                                        <tr>
                                            <td><?= $row[1] ?></td>
                                            <td><?= $row[2] ?></td>
                                            <td><?= $row[3] ?></td>
                                            <td><?= $row[4] ?></td>
                                            <td><?= $row[5] ?></td>
                                            <td><?= $row[6] ?></td>
                                            <td><?= $row[8] ?></td>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.modal-content -->
        </div>

        <!-- /.modal-dialog -->
    </div>
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="txtBarcode" id="txtBarcode" placeholder="ເລກບາໂຄດ"
                                                class="form-control" onkeyup="scanBarcode(this.value)" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#modal-lg-New">ເລືອກ</button>
                                        </div>
                                    </div>


                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>ລາຍການສີນຄ້າ</label>
                                            <input type="text" name="txtProductName" id="txtProductName"
                                                class="form-control" required="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>ລາຄາ</label>
                                            <input type="text" name="txtPrice" id="txtPrice" class="form-control"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>ຈຳນວນ</label>
                                            <input type="text" name="txtQty" id="txtQty" class="form-control"
                                                required="" onkeyup="cal(this.value)">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>ຫົວໜ່ວຍ</label>
                                            <input type="text" name="txtUnit" id="txtUnit" class="form-control"
                                                required="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>ເປັນເງີນ</label>
                                            <input type="text" name="txtTotal" id="txtTotal" class="form-control"
                                                required="" readonly>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" onclick="addRow()">ເພີ່ມ</button>
                                <button class="btn btn-danger" name="btnClear"
                                    onClick="window.location.reload();">ລ້າງລາຍການ</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table2" class="table table-bordered beautified_report">
                                        <thead>
                                            <tr>
                                                <th>ເລກບາໂຄດ</th>
                                                <th>ຊື່ສີນຄ້າ</th>
                                                <th>ຫົວໜ່ວຍສີນຄ້າ</th>
                                                <th>ຈຳນວນ</th>
                                                <th>ລາຄາ</th>
                                                <th>ລວມ</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody1">

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-12">

                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div style="display: flex; justify-content: flex-end" class="row">


                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>ຈຳນວນທັງໝົດ</label>
                                            <input type="text" name="txtQty1" id="txtQty1" class="form-control"
                                                required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>ລວມເປັນເງີນ</label>
                                            <input type="text" name="txtTotal1" id="txtTotal1" class="form-control"
                                                required="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-success" onclick="sale()" href="print/printRecieptSale.php"
                                    target="_blank" role="button">ຂາຍ</a>
                                <!-- <button class="btn btn-success" onclick="sale()" name="btnSale">ຂາຍ</button> -->
                                <button class="btn btn-secondary" name="btnHistory" data-toggle="modal"
                                    data-target="#myModal">ປະຫວັດການຂາຍ</button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">ປະຫວັດການຂາຍ</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>

                                            </div>
                                            <div class="modal-body">
                                                <?php

                                                $sql = "SELECT *
                                    FROM v_sale_details WHERE status = 'ຈາກໜ້າຮ້ານ' ORDER BY id ASC";
                                                ?>
                                                <div class="table-responsive">
                                                    <table id="example1" class="table table-bordered beautified_report">
                                                        <thead>
                                                            <tr>
                                                                <th>ບິນເລກທີ</th>
                                                                <th>ເລກບາໂຄດ</th>
                                                                <th>ຊື່ສິນຄ້າ</th>
                                                                <th>ລາຄາສີນຄ້າ</th>
                                                                <th>ຈຳນວນ</th>
                                                                <th>ລາຄາລວມ</th>
                                                                <th>ວັນທີ</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if ($result = $mysqli->query($sql)) {
                                                                while ($row = $result->fetch_row()) {

                                                            ?>
                                                            <tr>
                                                                <td><?= $row[0] ?></td>
                                                                <td><?= $row[1] ?></td>
                                                                <td><?= $row[2] ?></td>
                                                                <td><?= $row[3] ?></td>
                                                                <td><?= $row[4] ?></td>
                                                                <td><?= $row[5] ?></td>
                                                                <td><?= $row[6] ?></td>

                                                            </tr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div> <!-- /.row -->

    </section>
    <!-- /.content -->
</div>

<style>
table td {
    cursor: pointer;
    transition: all .25s ease-in-out;
}

table tbody tr:hover {
    background-color: #46BCD6;
}
</style>
<script>
var table = document.getElementById("table1");

for (let i = 0; i < table.rows.length; i++) {

    table.rows[i].ondblclick = function() {

        document.getElementById("txtBarcode").value = this.cells[0].innerHTML;
        document.getElementById("txtProductName").value = this.cells[1].innerHTML;
        document.getElementById("txtPrice").value = this.cells[6].innerHTML;
        document.getElementById("txtUnit").value = this.cells[4].innerHTML;

        console.log(document.getElementById("txtBarcode").value = this.cells[0].innerHTML);

        // const xhttp = new XMLHttpRequest();
        // xhttp.onload = function() {
        //     document.getElementById("example2").innerHTML = this.responseText;
        // }
        // xhttp.open("GET", "function/selectOrder.php?id=" + this.cells[0].innerHTML);
        // xhttp.send();

        $('#modal-lg-New').modal('hide');
    }


}

function cal(qty) {

    price = document.getElementById("txtPrice").value;

    qty = qty;

    document.getElementById("txtTotal").value = price * qty;
    // console.log(document.getElementById("txtTotal").value);

}

function addRow() {

    var barcode = document.getElementById("txtBarcode").value;
    var name = document.getElementById("txtProductName").value;
    var qty = document.getElementById("txtQty").value;
    var unit = document.getElementById("txtUnit").value;
    var price = document.getElementById("txtPrice").value;
    var total = qty * price;


    //Connect to database and verify Quantity Ordered isnt greater than Quantity In Stock.
    var strURL = "function/checkqty.php?barcode=" + barcode + "&qty=" + qty;


    $.ajax({
        type: "POST",
        url: strURL,
        dataType: 'json',
        data: {

            barcode: barcode,
            qty: qty
        },
        cache: false,
        success: function(data) {
            console.log("qty check");

            console.log('this is the response', data);


            if (qty == '') {
                alert('ກະລຸນາປ້ອນຈຳນວນ');
            } else if (qty > data) {
                alert('ຈຳນວນເຫຼືອໃນສະຕ໋ອກ ' + data);
            } else {
                var i = 1;
                var row = table2.insertRow(i);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);


                cell1.innerHTML = barcode;
                cell2.innerHTML = name;
                cell3.innerHTML = unit;
                cell4.innerHTML = qty;
                cell5.innerHTML = price;
                cell6.innerHTML = qty * price;

                var oTable = document.getElementById('tbody1');
                document.getElementById('txtQty1').value = 0
                document.getElementById('txtTotal1').value = 0
                //gets rows of table
                var rowLength = oTable.rows.length - 1;
                t = 0;
                qt = 0;
                for (i = 0; i < rowLength; i++) {

                    //gets cells of current row
                    // var total1 = document.getElementById("txtTotal1").value;
                    var total = oTable.rows.item(i).cells.item(5).innerHTML;
                    var totalQty = oTable.rows.item(i).cells.item(3).innerHTML;
                    t += parseFloat(total);
                    qt += parseFloat(totalQty);
                    document.getElementById("txtTotal1").value = t;
                    document.getElementById("txtQty1").value = qt;

                    // console.log(document.getElementById("txtTotal1").value);



                }




                // document.getElementById("txtId").value = '';
                document.getElementById("txtBarcode").value = '';
                document.getElementById("txtProductName").value = '';
                document.getElementById("txtQty").value = '';
                document.getElementById("txtUnit").value = '';
                document.getElementById('txtPrice').value = '';
                document.getElementById('txtTotal').value = '';
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    });









}

function sale() {
    //gets table


    var oTable = document.getElementById('tbody1');

    //gets rows of table
    var rowLength = oTable.rows.length - 1;



    //loops through rows    
    var total_amount = 0;
    insertSale(document.getElementById('txtTotal1').value);

    for (i = 0; i < rowLength; i++) {

        //gets cells of current row
        var barcode = oTable.rows.item(i).cells.item(0).innerHTML;
        var proName = oTable.rows.item(i).cells.item(1).innerHTML;
        var qty = oTable.rows.item(i).cells.item(3).innerHTML;
        var price = oTable.rows.item(i).cells.item(4).innerHTML;
        var total = oTable.rows.item(i).cells.item(5).innerHTML;



        insertSaleDetails(barcode, proName, price, qty, total);

        updateStock(barcode, qty)


    }

    oTable.innerHTML = "";

    // alert("Sale Successfully!!");



}

function insertSale(total_amount) {

    var total_amount = total_amount;
    var strURL = "function/insertSale.php?total_amount=" + total_amount;


    $.ajax({
        type: "POST",
        url: strURL,
        data: {

            total_amount: total_amount
        },
        cache: false,
        success: function(data) {
            console.log("insert sale");
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    });
}

function insertSaleDetails(barcode, proName, price, qty, total) {
    var barcode = barcode;
    var proName = proName;
    var qty = qty;
    var price = price;
    var total = total;
    var strURL = "function/insertSaleDetails.php?barcode=" + barcode + "&qty=" + qty + "&proName=" + proName +
        "&price=" + price + "&total=" + total;
    // ajax.aspx?ajaxid=4&UserID=" + UserID + "&EmailAddress="

    $.ajax({
        type: "POST",
        url: strURL,
        data: {
            barcode: barcode,
            proName: proName,
            qty: qty,
            price: price,
            total: total
        },
        cache: false,
        success: function(data) {
            console.log("insert sale details");
            // alert("Order Successfully!!");
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    });
}

function updateStock(pro_barcode, qty) {
    var pro_barcode = pro_barcode;
    var qty = qty;


    var strURL = "function/updateStockBySale.php?pro_barcode=" + pro_barcode + "&qty=" + qty;


    $.ajax({
        type: "POST",
        url: strURL,
        data: {
            pro_barcode: pro_barcode,
            qty: qty
        },
        cache: false,
        success: function(data) {
            console.log("updateStockBySale");
            // alert("Order Successfully!!");
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        }
    });
}

function scanBarcode(barcode) {
    var barcode = barcode;
    if (barcode.length == 0) {

        document.getElementById("txtProductName").value = '';
        document.getElementById("txtUnit").value = '';
        document.getElementById('txtPrice').value = '';

        return;
    } else {

        // Creates a new XMLHttpRequest object
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

            // Defines a function to be called when
            // the readyState property changes
            if (this.readyState == 4 &&
                this.status == 200) {

                // Typical action to be performed
                // when the document is ready
                var myObj = JSON.parse(this.responseText);

                // Returns the response data as a
                // string and store this array in
                // a variable assign the value 
                // received to first name input field

                document.getElementById("txtProductName").value = myObj[0];
                document.getElementById("txtUnit").value = myObj[3];
                document.getElementById('txtPrice').value = myObj[4];
            }
        };

        // xhttp.open("GET", "filename", true);
        xmlhttp.open("GET", "function/scanBarcodeOrderPage.php?barcode=" + barcode, true);

        // Sends the request to the server
        xmlhttp.send();
    }
}
</script>