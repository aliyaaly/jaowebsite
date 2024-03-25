<?php
session_start();
// echo"sjddjda";

include "../barcode/vendor/picqer/php-barcode-generator/src/BarcodeGenerator.php";
include "../barcode/vendor/picqer/php-barcode-generator/src/BarcodeGeneratorHTML.php";

require('../code128/code128.php');
function barcode($code){
	
	$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
	$border = 2;//กำหนดความหน้าของเส้น Barcode
	$height = 40;//กำหนดความสูงของ Barcode

	return $generator->getBarcode($code , $generator::TYPE_CODE_128,$border,$height);

}
$mysqli = new mysqli("localhost", "root", "56588965", "db_bodjob");

$id = $_GET['print'];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$sql = "SELECT * FROM tbl_product WHERE pro_barcode = $id";


if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_row()) {

$bar = $row[1];

    }
}

$pdf=new PDF_Code128();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);


$pdf->Code128(50,20,$bar,80,20);
$pdf->SetXY(50,45);
$pdf->Cell(80,10,$bar,0,0,'C',false,'');
// $pdf->Write(5,$bar);

$pdf->Output();
?>