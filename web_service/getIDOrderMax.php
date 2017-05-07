<?php
include "koneksi.php";

$idCust= $_POST["idCust"];

$sql_query = "Select MAX(ID_ORDER) as max from tbl_order WHERE ID_CUST like '$idCust'";
$idOrder= mysqli_query($con,$sql_query)or die(mysql_error());

while($row = mysqli_fetch_assoc($idOrder)){
$string = $row['max'];
echo $string;
}	
