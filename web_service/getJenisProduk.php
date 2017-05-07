<?php
include "koneksi.php";
$sql_query = "SELECT * From tbl_jenis_produk WHERE IS_DELETE = 1";
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
              echo json_encode(array('jenis_produk'=>$posts));   
	
}
else
	echo "Data Kosong";
