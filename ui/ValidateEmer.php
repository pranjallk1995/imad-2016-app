<?php
$error=0;
$err = "";
$user = $passw = "";
$userErr = $passwErr = "";
$flag = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["user"])) 
  {
    $userErr = "Username is required";
    $flag = 1;
  } 
  else 
  {
    $user = $_POST["user"];
  }
  if (empty($_POST["passw"])) 
  {
    $passwErr = "Password is required";
    $flag = 1;
  }
  if($flag==1)
  {
  	$err = "Invalid Sign In attempt";
    $error=1;
  }
 }
?>
