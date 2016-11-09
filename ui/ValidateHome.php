<?php
$error=0;
$err = "";
$user = "";
$userErr = "";
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
  
  if($flag==1)
  {
  	$err = "Invalid Sign In attempt";
    $error=1;
  }
 }
?>
