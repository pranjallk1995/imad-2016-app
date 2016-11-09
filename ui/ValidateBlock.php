<?php
include 'connect.php';
$seque1=$seque2=$seque2er="";

$s=$_SESSION['sess_user'];
$q1="SELECT Detail from questions,userdetails where questions.SecurityQuestion=userdetails.SecurityQuestion and UserName='$s'";
  $r=$dbcon->query($q1);
  if($r->num_rows>0)
  	while($row=$r->fetch_assoc())
  		$seque1=$row["Detail"];

  if(!mysqli_query($dbcon,$q1))
  { 
    die('error has occured1');
  }


if(isset($_POST['submitted']))
{
	$seque2db=$_POST['seque2'];


  $q1="SELECT SecurityAnswer from userdetails where UserName='$s'";
  $r=$dbcon->query($q1);
  if($r->num_rows>0)
  	while($row=$r->fetch_assoc())
  		$seque2=$row["SecurityAnswer"];

 

  if(!mysqli_query($dbcon,$q1))
  { 
    die('error has occured1');
  }

  if($seque2!=$seque2db)
    $seque2er="Wrong Answer";
   else{ 
//$q1="DELETE FROM maintable where UserName='$s'";
$q2="UPDATE maintable set BlockedStatus=1 WHERE UserName='$s'";
//$r=$dbcon->query($q1);
//$q2="DELETE FROM userdetails where UserName='$s'";
//$r=$dbcon->query($q2);
if(!mysqli_query($dbcon,$q2))
     { 
      die('error has occured');
     }

session_destroy();
header("Location: BlockedConf.html");
}
}
?>