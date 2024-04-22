<?php
session_start();
// echo"sjddjda";

$userId = $_SESSION['user_id'];
$mysqli = new mysqli("localhost", "root", "56588965", "db_bodjob");
$dateNow = date("Y-m-d H:i:s");
$id = $_GET['id'];
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*----------- function Execute query --------------*/

// mysql_query("SET NAMES 'utf8'");
$mysqli->set_charset("utf8");

$sql = "SELECT id, pro_barcode, pro_name, qty, date_add
FROM v_orders_details WHERE id = $id";
?>



             
              
<?php

// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("s", $_GET['id']);
// $stmt->execute();
// $stmt->store_result();
// $stmt->bind_result($id, $pro_barcode, $pro_name, $qty, $date_add);
// $stmt->fetch();
// $stmt->close();

// echo "<table>";
// echo "<tr>";
// echo "<th>bill_id</th>";
// echo "<td>" . $id . "</td>";
// echo "<th>barcode</th>";
// echo "<td>" . $pro_barcode . "</td>";
// echo "<th>name</th>";
// echo "<td>" . $pro_name . "</td>";
// echo "<th>Qty</th>";
// echo "<td>" . $qty . "</td>";
// echo "<th>date</th>";
// echo "<td>" . $date_add . "</td>";
// echo "</tr>";
// echo "</table>";
?>
<!-- <script>
     var example2 = document.getElementById("example2");
    for (let i = 0; i < example2.rows.length; i++) {
        example2.rows[i].onclick = function() {
            alert("saf");
            document.getElementById("txtBarcode").value = this.cells[1].innerHTML;
            document.getElementById("txtProductName").value = this.cells[2].innerHTML;
            document.getElementById("txtQty").value = this.cells[3].innerHTML;


        }

    }
</script> -->