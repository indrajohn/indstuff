<?php
include "koneksi.php";
$id_cust = $_POST["id_cust"];
$totalbiayaProduk = $_POST["totalBiaya"];
$totalbiayaPengiriman = $_POST["totalPengiriman"];
$totalKeseluaran = $totalbiayaProduk + $totalbiayaPengiriman;
$waktuSekarang = date("Y-m-d H:i:s");

$sql_queryOrder= "INSERT INTO tbl_order(ID_CUST,WAKTU_ORDER,TOTAL_BIAYA_PRODUK,TOTAL_BIAYA_PENGIRIMAN,TOTAL_BIAYA_KESELURUHAN)
VALUES('$id_cust','$waktuSekarang','$totalbiayaProduk','$totalbiayaPengiriman','$totalKeseluaran')";
$idCust= mysqli_query($con,$sql_queryOrder)or die(mysql_error());

?>			