<?php
include "koneksi.php";
$sql_query = "SELECT * FROM tbl_bank where IS_DELETE = 1";
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
              echo json_encode(array('bank'=>$posts));   
	
}
else
	echo "Data Kosong";
