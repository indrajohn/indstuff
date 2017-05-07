<?php
include "koneksi.php";

$idOrder = $_POST["idOrder"];
$idBank= $_POST["idBank"];
$idMetode = $_POST["idMetode"];
$noRek = $_POST["noRekeningPembayaran"];
$dateNow = date("Y-m-d H:i:s");

$sql_query = "INSERT INTO tbl_konfirmasi_pembayaran(
			ID_ORDER,WAKTU_KONFIRMASI_PEMBAYARAN,ID_BANK,ID_METODE_PEMBAYARAN,NOMOR_REKENING_PEMBAYARAN) 
values('$idOrder','$dateNow','$idBank','$idMetode','$noRek')";

if(mysqli_query($con,$sql_query))
	echo "Data Insertion Success..";
else
	echo "Data Insertion Error..".mysqli_error($con);

$sql_query_change = "Update tbl_order SET STATUS_ORDER='CONFIRMED' where ID_ORDER = '$idOrder'";

if(mysqli_query($con,$sql_query_change))
	echo "Data Insertion Success..";
else
	echo "Data Insertion Error..".mysqli_error($con);
