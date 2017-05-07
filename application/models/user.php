<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('username_admin, password_admin');
   $this -> db -> from('tbl_admin');
   $this -> db -> where('username_admin', $username);
   $this -> db -> where('password_admin', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>