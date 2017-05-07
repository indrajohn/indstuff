<?php
include "koneksi.php";
$idCustomer = $_POST["idCustomer"];
$sql_query = "SELECT * From tbl_order WHERE ID_CUST = '$idCustomer'";
$result = mysqli_query($con,$sql_query)or die(mysql_error());
$posts = array();
if(mysqli_num_rows($result)> 0 )
{
	 if(mysqli_num_rows($result))
              {
                     while($post = mysqli_fetch_assoc($result)){
                             $posts[] = $post;
                     }
              }  
              echo json_encode(array('payment'=>$posts));   
	
}
else
	echo "Data Kosong";
