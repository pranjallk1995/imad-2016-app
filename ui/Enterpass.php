<?php
include 'connect.php';

  $selected=$_GET['assign'];
  $uid=$_GET['user'];  

if(isset($_POST['s1']))
{
	$passw=$_POST['matpass1'];
	$name=$_POST['un'];
	
  $q1="SELECT DId FROM domain WHERE DName='$selected' AND UserId='$uid'";
  $r=$dbcon->query($q1);
  if($r->num_rows>0)
  	while($row=$r->fetch_assoc())
  		$id=$row["DId"];

  if(!mysqli_query($dbcon,$q1))
  { 
    die('error has occured1');
  }

  $q0="SELECT User FROM password WHERE User='$name'";
  $r=$dbcon->query($q0);
  if($r->num_rows>0)
  {
    $q4="UPDATE password SET Pass=AES_ENCRYPT('$passw', 'mykey013'), dt=CURRENT_DATE() WHERE User='$name'";
    $r=$dbcon->query($q4);
  }
  else
  {
   $qy="INSERT INTO password (Pass,User,DId,dt) VALUES (AES_ENCRYPT('$passw', 'mykey013'),'$name','$id',CURRENT_DATE())";

  if(!mysqli_query($dbcon,$qy))
  { 
    die('error has occured');
  }
  }
}

if(isset($_POST['s3']))
{
	$pass=$_POST['matpass1'];
	$qd="DELETE FROM password WHERE Pass=(AES_ENCRYPT('$pass', 'mykey013'))";
	$r=$dbcon->query($qd);
}

if(isset($_POST['s4']))
{
	header("Location: Passpage.php?assign=$selected&user=$uid&accp=-1&accu=-1");
}
?>