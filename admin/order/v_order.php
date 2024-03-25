<?php

htmltage("Job Jao Website");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ສັ່ງຊື້ສິນຄ້າ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active">ສັ່ງຊື້ສິນຄ້າ</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <div class="card">
                    <!-- <div class="card-header">
                        <label for="">ບິນສັ່ງຊື້ເລກທີ:</label>
                        <input type="text" name="" id="">
                    </div> -->
                    <!-- /.card-header -->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="row">

                                    <!-- <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ລະຫັດສີນຄ້າ</label>
                                            <input type="text" name="txtproductName" class="form-control" required="">
                                        </div>
                                    </div> -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ເລກບາໂຄດ</label>
                                            <input type="text" id="txtBarcode" name="txtBarcode" class="form-control" required="" autofocus="autofocus" onkeyup="scanBarcode(this.value)">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ຊື່ສີນຄ້າ</label>
                                            <input type="text" name="txtproductName" id="txtproductName" class="form-control" required="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ລາຍລະອຽດ</label>
                                            <input type="text" id="txtDetails" name="txtDetails" class="form-control" required="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ປະເພດ</label>
                                            <input type="text" name="txtCate" id="txtCate" class="form-control" required="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ຫົວໜ່ວຍ</label>
                                            <input type="text" name="txtUnit" id="txtUnit" class="form-control" required="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ຈຳນວນສີນຄ້າ</label>
                                            <input type="number" name="txtQty" id="txtQty" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ຜູ້ສະໜອງ</label>
                                            <select class="form-control" name="cb_sup" id="cb_sup">
                                                <option value="0">---ເລືອກ---</option>
                                                <?php
                                                if ($resultc = $mysqli->query($supplierf)) {
                                                    while ($rowc = $resultc->fetch_row()) {

                                                ?>
                                                        <option value="<?= $rowc[0] ?>"><?= $rowc[1] ?></option>
                                                <?php   }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>





                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" id="btnAdd" name="btnAdd" onclick="addRow()">ເພີ່ມ</button>
                                <button class="btn btn-danger" name="btnClear" onClick="window.location.reload();">ລ້າງລາຍການ</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <?php

            ?>
            <div class="col-md-6">
                <div class="card">
                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
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

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;

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
            <div class="col-md-12">
                <div class="card">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-bordered beautified_report">

                                        <thead>
                                            <tr>
                                                <th>ເລກບາໂຄດ</th>
                                                <th>ຊື່ສີນຄ້າ</th>
                                                <th>ລາຍລະອຽດສີນຄ້າ</th>
                                                <th>ປະເພດສີນຄ້າ</th>
                                                <th>ຫົວໜ່ວຍສີນຄ້າ</th>
                                                <th>ຈຳນວນ</th>
                                                <th>ຜູ້ສະໜອງ</th>

                                            </tr>
                                        </thead>
                                        <tbody id="tbody1">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <!-- <button class="btn btn-success" onclick="order()" name="btnOrder">ສັ່ງຊື້</button> -->
                                <a class="btn btn-success" onclick="order()" href="print/printRecieptOrder.php" target="_blank" role="button">ສັ່ງຊື້</a>
                                <button class="btn btn-secondary" name="btnHistory" data-toggle="modal" data-target="#myModal">ປະຫວັດການສັັ່ງຊື້</button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">ປະຫວັດການສັັ່ງຊື້</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                            </div>
                                            <div class="modal-body">

                                                <?php

                                                $sql = "SELECT *
                                    FROM v_orders_details ";
                                                ?>
                                                <div class="table-responsive">
                                                    <table id="example1" class="table table-bordered beautified_report">
                                                        <thead>
                                                            <tr>
                                                                <th>ບິນເລກທີ</th>
                                                                <th>ເລກບາໂຄດ</th>
                                                                <th>ຊື່ສິນຄ້າ</th>
                                                                <th>ຈຳນວນ</th>
                                                                <th>ວັນທີ</th>
                                                                <th>ສະຖານະ</th>
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
                                                                    </tr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
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
    // if (document.getElementById("txtBarcode").value != "") {
    //         // Makes the button disabled
    //     document.getElementById("btnAdd").removeAttribute("disabled");
    // } else {
    //     // Removes disabled attribute
    //     document.getElementById("btnAdd").setAttribute("disabled", "");
    // }
    // function validateButton() {
    //     if (document.getElementById("txtBarcode").value === "" || 
    //     document.getElementById("txtproductName").value === "" || 
    //     document.getElementById("txtDetails").value === "" || 
    //     document.getElementById("txtCate").value === "" ||
    //     document.getElementById("txtUnit").value === "") {
    //         document.getElementById('btnAdd').disabled = true;
    //     } else {
    //         document.getElementById('btnAdd').disabled = false;
    //     }
    // }


    var table = document.getElementById("table1");
    for (let i = 0; i < table.rows.length; i++) {
        table.rows[i].onclick = function() {
            document.getElementById("txtBarcode").value = this.cells[0].innerHTML;
            document.getElementById("txtproductName").value = this.cells[1].innerHTML;
            document.getElementById("txtDetails").value = this.cells[2].innerHTML;
            document.getElementById("txtCate").value = this.cells[3].innerHTML;
            document.getElementById("txtUnit").value = this.cells[4].innerHTML;


        }

    }

    function addRow() {
        var barcode = document.getElementById("txtBarcode").value;
        var name = document.getElementById("txtproductName").value;
        var details = document.getElementById("txtDetails").value;
        var cate = document.getElementById("txtCate").value;
        var unit = document.getElementById("txtUnit").value;
        var qty = document.getElementById("txtQty").value;
        var sup = document.getElementById("cb_sup");
        var str = sup.options[sup.selectedIndex].text;
        if (qty == '') {
            alert('ກະລຸນາປ້ອນຈຳນວນທີ່ຈະສັ່ງ');
        } else if (str == '---ເລືອກ---') {
            alert('ກະລຸນາເລືອກຜູ້ສະໜອງ');
        } else {
            var i = 1;
            var row = example2.insertRow(i);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);

            cell1.innerHTML = barcode;
            cell2.innerHTML = name;
            cell3.innerHTML = details;
            cell4.innerHTML = cate;
            cell5.innerHTML = unit;
            cell6.innerHTML = qty;
            cell7.innerHTML = str;

            document.getElementById("txtBarcode").value = "";
            document.getElementById("txtproductName").value = "";
            document.getElementById("txtDetails").value = "";
            document.getElementById("txtCate").value = "";
            document.getElementById("txtUnit").value = "";
            document.getElementById("txtQty").value = "";

        }




    }

    function order() {
        //gets table
        var sup = document.getElementById("cb_sup").value;

        var oTable = document.getElementById('tbody1');

        //gets rows of table
        var rowLength = oTable.rows.length - 1;

        insertOrder(sup);

        //loops through rows    
        for (i = 0; i < rowLength; i++) {

            //gets cells of current row
            var oCells = oTable.rows.item(i).cells.item(0).innerHTML;
            var oCells1 = oTable.rows.item(i).cells.item(5).innerHTML;
            console.log(oCells);
            console.log(oCells1);
            //gets amount of cells of current row
            var cellLength = oCells.length;
            // alert(oCells)
            // alert(cellLength)
            //loops through each cell in current row
            // for (var j = 0; j < cellLength; j++) {
            //     /* get your cell info here */
            //     var cellVal = oCells.item(j).innerHTML;

            // }

            insertOrderDetails(oCells, oCells1);
        }
        oTable.innerHTML = "";


        // alert("Order Successfully!!");

        // printOrder();

    }

    // function printOrder() {


    //     var strURL = "print/printRecieptOrder.php";
    //     // ajax.aspx?ajaxid=4&UserID=" + UserID + "&EmailAddress="

    //     $.ajax({
    //         type: "POST",
    //         url: strURL,

    //         cache: false,
    //         success: function(data) {
    //             console.log("print order");
    //         },
    //         error: function(xhr, status, error) {
    //             console.error(xhr);
    //         }
    //     });
    // }

    function insertOrder(sup) {
        var supplier = sup;

        var strURL = "function/insertOrder.php?supplier=" + supplier;
        // ajax.aspx?ajaxid=4&UserID=" + UserID + "&EmailAddress="

        $.ajax({
            type: "POST",
            url: strURL,
            data: {
                supplier: supplier
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

    function insertOrderDetails(pro_barcode, qty) {
        var pro_barcode = pro_barcode;
        var qty = qty;

        var strURL = "function/insertOrderDetails.php?pro_barcode=" + pro_barcode + "&qty=" + qty;
        // ajax.aspx?ajaxid=4&UserID=" + UserID + "&EmailAddress="

        $.ajax({
            type: "POST",
            url: strURL,
            data: {
                pro_barcode: pro_barcode,
                qty: qty
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

    function scanBarcode(barcode) {
        var barcode = barcode;
        if (barcode.length == 0) {
            document.getElementById("txtproductName").value = "";
            document.getElementById("txtDetails").value = "";
            document.getElementById("txtCate").value = "";
            document.getElementById("txtUnit").value = "";
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

                    document.getElementById("txtproductName").value = myObj[0];
                    document.getElementById("txtDetails").value = myObj[1];
                    document.getElementById("txtCate").value = myObj[2];
                    document.getElementById("txtUnit").value = myObj[3];
                }
            };

            // xhttp.open("GET", "filename", true);
            xmlhttp.open("GET", "function/scanBarcodeOrderPage.php?barcode=" + barcode, true);

            // Sends the request to the server
            xmlhttp.send();
        }
    }
</script>