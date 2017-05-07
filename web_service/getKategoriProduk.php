<?php
include "koneksi.php";
$idMerch = $_POST["idMerch"];
$sql_query = "SELECT * FROM tbl_kategori_produk where IS_DELETE =1";

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
              echo json_encode($posts);   
	
}
else
	echo "Data Kosong";
	