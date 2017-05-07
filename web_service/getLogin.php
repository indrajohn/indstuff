<?php
include "koneksi.php";

$name = $_POST["name"];
$pass = $_POST["pass"];

$sql_query = "select * from tbl_customer where USERNAME_CUST like '$name' and PASSWORD_CUST like '$pass';";

$result =mysqli_query($con,$sql_query); 

if(mysqli_num_rows($result)>0)
{
	echo "Login Success";
//$row = mysqli_fetch_assoc($result);
//echo $row["email"];
}
else{
	echo "Login Failed";	
}

 


