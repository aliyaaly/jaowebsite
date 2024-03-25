<?

if (isset($_POST["btnSearch"])) {
	
	$id = $mysqli->real_escape_string($_POST['id']);
	$_SESSION['id'] =  $id;
	// echo '<script>alert("'.$id.'")</script>';
	$sql = "SELECT * FROM v_sale  where status = 'ສັ່ງຊື້ຈາກອອນລາຍ' AND id = '$id'";
}


if (isset($_POST["btnSubmit"])) {
	

	// echo '<script>alert("'.$_SESSION['id'].'")</script>';
	$sql = "UPDATE tbl_sale SET status = 'ສັ່ງຊື້ຈາກອອນລາຍສຳເລັດ' WHERE id = '".$_SESSION['id']."'";
	if ($mysqli->query($sql) === TRUE) {
		header("Location: ?d=approveSale/doneSale");
	} else {
		echo "<center><h2>$sql</h2></center>";
	}
}

?>