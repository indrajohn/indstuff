<?php
include "koneksi.php";

$namaPenerima = $_POST["namaPenerima"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];
$postalCode = $_POST["postalCode"];
$idOrder = $_POST["idOrder"];
$province = $_POST["province"];
$district = $_POST["district"];
$city = $_POST["city"];

$sqlInsert= "INSERT INTO tbl_order_shipping(ID_ORDER,NAMA_PENERIMA,EMAIL_PENERIMA,NO_TELP_PENERIMA,ALAMAT_PENERIMA,POSTAL_CODE, PROVINSI, KOTA, KECAMATAN)
VALUES('$idOrder','$namaPenerima','$email','$telp','$alamat','$postalCode' , '$province',  '$city',  '$district')";
$insert= mysqli_query($con,$sqlInsert)or die(mysql_error());
?>		