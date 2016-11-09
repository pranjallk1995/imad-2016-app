<?php
session_start();
$otper="hello";
if($_SERVER["REQUEST_METHOD"]=="POST")
 {
  if(isset($_POST["submit"]))
  {
  	$otp=$_POST['otp'];
  	if($otp==$_SESSION['otp'])
  		header("Location: MasterPass.php");
  	else
		header("Location: index.php");
}
}

?>