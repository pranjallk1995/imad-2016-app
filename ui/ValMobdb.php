<?php
include 'Sessinteract.php';

$MobErr=$notice="";
$error=0;

if(isset($_POST["ch1"]))
{
	if(empty($_POST["mob"]))
  {
    $MobErr="Mobile no is Mandatory";
    $error=1;
  }
  else
  {
    $mob=$_POST["mob"];
    if (!preg_match("/^[0-9]*$/",$mob))
     {
       $MobErr = "Only numbers are allowed";
       $error=1;
     }
   else if(strlen($mob)!=10)
   {
    $MobErr=" Mobile No. should be 10 digits";
    $error=1;
   }
  }

  if($error==0)
  {
  	$no=$_POST["mob"];
  	$q="UPDATE maintable SET MobNo1='$no' WHERE UserName='$s'";
  	$r=$dbcon->query($q);

  	$notice="Mobile Number Successfully Updated.";
  }
}
  else if(isset($_POST['ch2']))
  {
  	$q1= "SELECT MobNo2 from maintable WHERE UserName='$s'";
	$r=$dbcon->query($q1);
	if($r->num_rows>0)
    while($row=$r->fetch_assoc())
    {
      $no=$row["MobNo2"];    
      if($no=="")
      {
      	$notice="No alternate number";
        $error=1;
      }
    }

    if($error==0)
    {

  	$q="UPDATE maintable SET MobNo1='$no' WHERE UserName='$s'";
  	$r=$dbcon->query($q);

    $notice="Mobile Number Successfully Updated.";  
    }
  }
?>