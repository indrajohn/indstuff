<?php
include "koneksi.php";

$idProduk= $_POST["idProduk"];
$size= $_POST["size"];
$jumlahProduk = $_POST["jumlahProduk"];
$idOrder= $_POST["idOrder"];

$sqlInsert= "INSERT INTO tbl_detail_order_produk(ID_PRODUK,NAMA_SIZE_PRODUK,ID_ORDER,JUMLAH_PRODUK)
VALUES('$idProduk','$size','$idOrder','$jumlahProduk')";
$insert= mysqli_query($con,$sqlInsert)or die(mysql_error());
?>		