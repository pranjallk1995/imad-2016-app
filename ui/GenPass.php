<?php
$u="";
   if(isset($_POST['gen']))
   {
   	$u=$_POST['un'];
    $length = 12;
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0, $length );
   } 
?>