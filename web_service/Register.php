<?php
include "koneksi.php";

$username = $_POST["user"];
$password = $_POST["pass"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$sql_query = "INSERT INTO tbl_customer(
			USERNAME_CUST,PASSWORD_CUST,EMAIL_CUST,NO_TELP_CUST,POINT_CUST) 
values('$username','$password','$email',$phone,0)";

if(mysqli_query($con,$sql_query))
	echo "Data Insertion Success..";
else
	echo "Data Insertion Error..".mysqli_error($con);
