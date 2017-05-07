<?php
include "koneksi.php";
$idOrder = $_POST["idOrder"];
$image = $_POST["image"];
$path = "../uploadpembayaranorder/$idOrder.jpg";
$image_url = "$idOrder.jpg";
$sql = "update tbl_konfirmasi_pembayaran SET BUKTI_PEMBAYARAN = '$image_url' where ID_ORDER = '$idOrder'";
$insert = mysqli_query($con,$sql);
if($insert)
{
file_put_contents($path,base64_decode($image));
echo "Success";
}else
echo "Failed";