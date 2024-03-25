<?php

htmltage("Job Jao Website");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ນຳເຂົ້າສິນຄ້າ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ນຳເຂົ້າສິນຄ້າ</li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <style>
        .buttonIn {
            width: 300px;
            position: relative;
        }
    </style>

    <div class="modal fade" id="modal-lg-New">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ເລືອກບິນສັ່ງຊື້</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">




                                <table id="" class="table table-bordered beautified_report">

                                    <thead>
                                        <tr>
                                            <th>ບິນເລກທີ</th>
                                            <th>ຊື່ຜູ້ສະໜອງ</th>
                                            <th>ວັນທີ່ສັ່ງຊື້</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($result = $mysqli->query($orders)) {
                                            while ($row = $result->fetch_row()) {

                                        ?>
                                                <tr>
                                                    <td><?= $row[0] ?></td>
                                                    <td><?= $row[1] ?></td>
                                                    <td><?= $row[2] ?></td>
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
            <div class="col-md-6">
                <div class="card">



                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="row">

                                    <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" name="txtId" id="txtId" placeholder="ເລືອກບິນສັ່ງຊື້" class="form-control" onkeyup="selectBill(this.value)">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-lg-New">ເລືອກ</button>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ບາໂຄດ</label>
                                            <input type="hidden" name="txtId" id="txtId" placeholder="ເລືອກບິນສັ່ງຊື້" class="form-control">
                                            <input type="text" name="txtBarcode" id="txtBarcode" class="form-control" required="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ຊື່ສີນຄ້າ</label>
                                            <input type="text" name="txtProductName" id="txtProductName" class="form-control" required="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>ຈຳນວນ</label>
                                            <input type="text" name="txtQty" id="txtQty" class="form-control" required="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ລາຄາ</label>
                                            <input type="text" name="txtPrice" id="txtPrice" class="form-control" required="" onkeyup="cal(this.value)">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>ວັນໝົດອາຍຸ</label>
                                            <input type="date" id="expiredDate" class="form-control" autocomplete="off" value="<?= $_GET['expiredDate'] ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ລາຄາລວມ</label>
                                            <input type="text" name="txtTotal" id="txtTotal" class="form-control" required="" readonly>
                                        </div>
                                    </div>





                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" id="" onclick="addRow()">ເພີ່ມ</button>
                                <button class="btn btn-danger">ລ້າງລາຍການ</button>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-6">
                <div class="card">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table1" class="table table-bordered beautified_report">
                                        <thead>
                                            <tr>
                                                <th>ບິນເລກທີ</th>
                                                <th>ບາໂຄດ</th>
                                                <th>ຊື່ສີນຄ້າ</th>
                                                <th>ຈຳນວນ</th>


                                            </tr>
                                        </thead>
                                        <tbody id="ss">
                                            <?php
                                            if ($result = $mysqli->query($sql)) {
                                                while ($row = $result->fetch_row()) {
                                            ?>
                                                    <tr>
                                                        <td><?= $row[0] ?></td>
                                                        <td><?= $row[1] ?></td>
                                                        <td><?= $row[2] ?></td>
                                                        <td><?= $row[3] ?></td>

                                                    </tr>
                                            <?php          }
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
            <div class="col-md-12">
                <div class="card">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table2" class="table table-bordered beautified_report">

                                        <thead>
                                            <tr>
                                                <th>ບິນເລກທີ</th>
                                                <th>ບາໂຄດ</th>
                                                <th>ຊື່ສີນຄ້າ</th>
                                                <th>ຈຳນວນ</th>
                                                <th>ລາຄາ</th>
                                                <th>ລວມ</th>
                                                <th>ວັນໝົດອາຍຸ</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody1">

                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="hidden" name="txtTotal1" id="txtTotal1" class="form-control" required="">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success" onclick="import1()">ນຳເຂົ້າ</button>

                                <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">ປະຫວັດການນຳເຂົ້າ</button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">ປະຫວັດການນຳເຂົ້າ</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                            </div>
                                            <div class="modal-body">
                                                <?php

                                                $sql = "SELECT *
                                                FROM v_import_details ";
                                                ?>
                                                <div class="table-responsive">
                                                    <table id="example1" class="table table-bordered beautified_report">
                                                        <thead>
                                                            <tr>
                                                                <th>ບິນເລກທີ</th>
                                                                <th>ບິນສັ່ງຊື້ເລກທີ</th>
                                                                <th>ເລກບາໂຄດ</th>
                                                                <th>ຊື່ສິນຄ້າ</th>
                                                                <th>ຈຳນວນ</th>
                                                                <th>ລາຄາ</th>
                                                                <th>ລວມ</th>
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
                                                                        <td><?= $row[7] ?></td>
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
                        </div>
                        <!-- /.row -->

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    var table1 = document.getElementById("table1");

    for (let i = 0; i < table1.rows.length; i++) {

        table1.rows[i].onclick = function() {
            document.getElementById("txtId").value = this.cells[0].innerHTML;
            document.getElementById("txtBarcode").value = this.cells[1].innerHTML;
            document.getElementById("txtProductName").value = this.cells[2].innerHTML;
            document.getElementById("txtQty").value = this.cells[3].innerHTML;
            //  document.getElementById("txtTotal").value = this.cells[3].innerHTML *  document.getElementById("txtPrice").value;

        }

    }

    function addRow() {
        var id = document.getElementById("txtId").value;
        var barcode = document.getElementById("txtBarcode").value;
        var name = document.getElementById("txtProductName").value;
        var qty = document.getElementById("txtQty").value;
        var price = document.getElementById("txtPrice").value;
        var expiredDate = document.getElementById("expiredDate").value;
        var total = qty * price;
        if (price == '') {
            alert('ກະລຸນາປ້ອນລາຄາ');
        } else {
            var i = 1;
            var row = table2.insertRow(i);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);

            cell1.innerHTML = id;
            cell2.innerHTML = barcode;
            cell3.innerHTML = name;
            cell4.innerHTML = qty;
            cell5.innerHTML = price;
            cell6.innerHTML = total;
            cell7.innerHTML = expiredDate;
            var oTable = document.getElementById('tbody1');
            document.getElementById('txtTotal1').value = 0
            //gets rows of table
            var rowLength = oTable.rows.length - 1;
            t = 0;
            for (i = 0; i < rowLength; i++) {

                //gets cells of current row
                // var total1 = document.getElementById("txtTotal1").value;
                var total = oTable.rows.item(i).cells.item(5).innerHTML;

                t += parseFloat(total);
                document.getElementById("txtTotal1").value = t;
                // console.log(document.getElementById("txtTotal1").value);



            }




            // document.getElementById("txtId").value = '';
            document.getElementById("txtBarcode").value = '';
            document.getElementById("txtProductName").value = '';
            document.getElementById("txtQty").value = '';

            document.getElementById('txtPrice').value = '';
            document.getElementById('txtTotal').value = '';
            document.getElementById('expiredDate').value = '';
        }




    }


    var oTable = document.getElementById('tbody1');

    //gets rows of table
    var rowLength = oTable.rows.length - 1;
    for (i = 0; i < rowLength; i++) {

        //gets cells of current row
        var oCells = oTable.rows.item(i).cells.item(0).innerHTML;
        var oCells1 = oTable.rows.item(i).cells.item(5).innerHTML;
        console.log(oCells);
        console.log(oCells1);
        // document.getElementById('txtTotal1').value =oCells1;
        //gets amount of cells of current row
        var cellLength = oCells.length;
        // alert(oCells)
        // alert(cellLength)
        //loops through each cell in current row
        // for (var j = 0; j < cellLength; j++) {
        //     /* get your cell info here */
        //     var cellVal = oCells.item(j).innerHTML;

        // }


    }

    // var table = document.getElementById("table1");

    // for (let i = 0; i < table.rows.length; i++) {

    //     table.rows[i].ondblclick = function() {

    //         document.getElementById("txtId").value = this.cells[0].innerHTML;

    //         console.log(document.getElementById("txtId").value = this.cells[0].innerHTML);

    //         const xhttp = new XMLHttpRequest();
    //         xhttp.onload = function() {
    //             document.getElementById("example2").innerHTML = this.responseText;
    //         }
    //         xhttp.open("GET", "function/selectOrder.php?id=" + this.cells[0].innerHTML);
    //         xhttp.send();

    //         $('#modal-lg-New').modal('hide');
    //     }


    // }

    // function getXMLHTTP() { //fuction to return the xml http object
    //     var xmlhttp = false;
    //     try {
    //         xmlhttp = new XMLHttpRequest();
    //     } catch (e) {
    //         try {
    //             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    //         } catch (e) {
    //             try {
    //                 xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    //             } catch (e1) {
    //                 xmlhttp = false;
    //             }
    //         }
    //     }
    //     return xmlhttp;
    // }

    // function selectBill(id) {
    //     if (id.length == 0) {
    //         document.getElementById("example2").innerHTML = "";
    //         return;
    //     }
    //     const xhttp = new XMLHttpRequest();
    //     xhttp.onload = function() {
    //         document.getElementById("example2").innerHTML = this.responseText;
    //     }
    //     xhttp.open("GET", "function/selectOrder.php?id=" + id);
    //     xhttp.send();



    // }
    function cal(price) {

        qty = document.getElementById("txtQty").value;

        price = price;

        document.getElementById("txtTotal").value = price * qty;
        // console.log(document.getElementById("txtTotal").value);

    }
    ///////////////////////////////////



    function import1() {
        //gets table
        var id = document.getElementById("txtId").value;

        var oTable = document.getElementById('tbody1');

        //gets rows of table
        var rowLength = oTable.rows.length - 1;



        //loops through rows    
        var total_amount = 0;
        insertImport(id, document.getElementById('txtTotal1').value);
        updateStatus(id);
        for (i = 0; i < rowLength; i++) {

            //gets cells of current row
            var barcode = oTable.rows.item(i).cells.item(1).innerHTML;
            var qty = oTable.rows.item(i).cells.item(3).innerHTML;
            var price = oTable.rows.item(i).cells.item(4).innerHTML;
            var total = oTable.rows.item(i).cells.item(5).innerHTML;
            var expiredDate = oTable.rows.item(i).cells.item(6).innerHTML;
            // console.log(barcode);
            // console.log(total);

            //gets amount of cells of current row
            // var cellLength = oCells.length;
            // alert(oCells)
            // alert(cellLength)
            //loops through each cell in current row
            // for (var j = 0; j < cellLength; j++) {
            //     /* get your cell info here */
            //     var cellVal = oCells.item(j).innerHTML;

            // }
            // total_amount += parseFloat(total);
            // alert("total_amount:"+total_amount);


            insertImportDetails(barcode, qty, price, total);

            updateStock(barcode, qty, price, expiredDate);


        }



        alert("Import Successfully!!");


        oTable.innerHTML = "";
    }

    function insertImport(id, total_amount) {
        var id = id;
        var total_amount = total_amount;
        var strURL = "function/insertImport.php?id=" + id + "&total_amount=" + total_amount;
        // ajax.aspx?ajaxid=4&UserID=" + UserID + "&EmailAddress="

        $.ajax({
            type: "POST",
            url: strURL,
            data: {
                id: id,
                total_amount: total_amount
            },
            cache: false,
            success: function(data) {
                console.log("insert order");
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });
    }

    function insertImportDetails(pro_barcode, qty, price, total) {
        var pro_barcode = pro_barcode;
        var qty = qty;
        var price = price;
        var total = total;
        var strURL = "function/insertImportDetails.php?pro_barcode=" + pro_barcode + "&qty=" + qty + "&price=" + price + "&total=" + total;
        // ajax.aspx?ajaxid=4&UserID=" + UserID + "&EmailAddress="

        $.ajax({
            type: "POST",
            url: strURL,
            data: {
                pro_barcode: pro_barcode,
                qty: qty,
                price: price,
                total: total
            },
            cache: false,
            success: function(data) {
                console.log("insert order details");
                // alert("Order Successfully!!");
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });
    }

    function updateStock(pro_barcode, qty, price, expiredDate) {
        var pro_barcode = pro_barcode;
        var qty = qty;
        var price = price;
        var expiredDate = expiredDate;
        var strURL = "function/updateStock.php?pro_barcode=" + pro_barcode + "&qty=" + qty + "&price=" + price + "&expiredDate=" + expiredDate;


        $.ajax({
            type: "POST",
            url: strURL,
            data: {
                pro_barcode: pro_barcode,
                qty: qty,
                price: price,
                expiredDate: expiredDate
            },
            cache: false,
            success: function(data) {
                console.log("updateStock");
                // alert("Order Successfully!!");
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });
    }

    function updateStatus(id) {
        var id = id;

        var strURL = "function/updateStatus.php?id=" + id;


        $.ajax({
            type: "POST",
            url: strURL,
            data: {
                id: id
            },
            cache: false,
            success: function(data) {
                console.log("updateStatus");
                // alert("Order Successfully!!");
            },
            error: function(xhr, status, error) {
                console.error(xhr);
            }
        });
    }
</script>