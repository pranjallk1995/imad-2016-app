<?php
session_start();
$s=$_SESSION['sess_user'];
include 'connect.php';
$dum="";
$nd="";
$selected="";

$q1="SELECT FirstName FROM userdetails WHERE UserName='$s'";
$r=$dbcon->query($q1);
if ($r->num_rows > 0)
  {
    while($row = $r->fetch_assoc()) 
      {
        $dum=$row["FirstName"];
      }
  }

$qu="SELECT UserId FROM maintable WHERE UserName='$s'"; 
$r=$dbcon->query($qu);
if ($r->num_rows > 0)
  {
    while($row = $r->fetch_assoc()) 
      {
        $uid=$row["UserId"];                               //required in DCreate.
      }
  }

$q2="SELECT * FROM domain WHERE UserId='$uid' GROUP BY UserId"; //requried for first load
$r=$dbcon->query($q2);
if ($r->num_rows == 0)
	$nd=1;

?>