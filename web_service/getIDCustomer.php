<?php
include "koneksi.php";

$namaCustomer = $_POST["namaCust"];

$sql_query = "Select ID_CUST from tbl_customer WHERE USERNAME_CUST like '$namaCustomer' AND IS_DELETE = 1";
$idCust= mysqli_query($con,$sql_query)or die(mysql_error());

while($row = mysqli_fetch_assoc($idCust)){
$string = $row['ID_CUST'];
echo $string;
}