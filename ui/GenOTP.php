<?php
    $length = 6;
    $chars = "0123456789";
    $otp = substr( str_shuffle( $chars ), 0, $length ); 
?>