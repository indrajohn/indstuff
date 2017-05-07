<?php
include "koneksi.php";

$id_produk = $_POST["id_produk"];
$sql_query = "SELECT sp.nama_size
FROM tbl_size_produk sp
JOIN tbl_produk p ON sp.id_produk = p.id_produk
WHERE sp.id_produk = $id_produk";
$result = mysqli_query($con,$sql_query)or die(mysql_error());

if(mysqli_num_rows($result)> 0 )
{
	$posts = array();
	 if(mysqli_num_rows($result))
              {
                     while($post = mysqli_fetch_assoc($result)){
                             $posts[] = $post;
                     }
              }  
              echo json_encode(array('size'=>$posts));   
	
}
else
	echo "Data Kosong";


