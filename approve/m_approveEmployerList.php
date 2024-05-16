<?php
$fetch = "SELECT * FROM v_employ WHERE isDelete = 0 GROUP BY id ASC";


function checkExpired($mysqli, $fetch)
{
    $dateNow = date("Y-m-d");
    if ($result = $mysqli->query($fetch)) {
        while ($row = $result->fetch_assoc()) {
            $endDate = $row['endDate'];
            $id = $row['id'];
            if ($endDate < $dateNow) {
                $sql = "UPDATE employ SET status = 'close' WHERE id = '$id' ";
                // echo '<script>alert("endDate:' . $endDate . '")</script>';

                if ($mysqli->query($sql) === TRUE) {
                    // header("Location: ?d=approve/approveEmployerList");
                } else {
                    echo "<center><h2>ERROR Delete</h2></center>";
                }
            }
        }
    }
}

?>