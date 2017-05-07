<?php
 require_once('koneksi.php');
 
 $sql = "select BUKTI_PEMBAYARAN from tbl_konfirmasi_pembayaran";
 
 $res = mysqli_query($con,$sql);
 
 $result = array();
 
 while($row = mysqli_fetch_array($res)){
 array_push($result,array('url'=>$row['BUKTI_PEMBAYARAN']));
 }
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($con);