<?php session_start();
include 'connect.php';
$s=$_SESSION['sess_user'];
$q1="DELETE FROM maintable where UserName='$s'";
$r=$dbcon->query($q1);
$q2="DELETE FROM userdetails where UserName='$s'";
$r=$dbcon->query($q2);
session_destroy();
header("Location: Signup.php");
?>