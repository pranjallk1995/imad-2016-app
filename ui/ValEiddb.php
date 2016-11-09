<?php
include 'Sessinteract.php';
$EidErr=$notice="";
$error=0;

if(isset($_POST["ch1"]))
{
	if(empty($_POST["eid"]))
  {
    $EidErr="Email id is Mandatory";
    $error=1;
  }
  else
  {
    $eid=$_POST["eid"];
    if(!filter_var($eid,FILTER_VALIDATE_EMAIL))
    {
      $EidErr="Invalid Email Format";
      $error=1;
    }
  }

  if($error==0)
  {
  	$no=$_POST["eid"];
  	$q="UPDATE userdetails SET Email='$no' WHERE UserName='$s'";
  	$r=$dbcon->query($q);

  	$notice="Email Address Successfully Updated.";
  }
}
?>