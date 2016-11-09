<?php
include 'connect.php';

$uid=$_GET['user'];

if(isset($_POST['ss']))
{
	$note=$_POST['note'];

	$qz="INSERT INTO notes (UserId,Notes,dt) VALUES ('$uid','$note',CURRENT_DATE())";

	 if(!mysqli_query($dbcon,$qz))
     { 
      die('error has occured');
     }
}

if(isset($_POST['sd']))
{
	$note=$_POST['note'];

	$qz="DELETE FROM notes WHERE Notes='$note'";
	$r=$dbcon->query($qz);

	 if(!mysqli_query($dbcon,$qz))
     { 
      die('error has occured');
     }
}

?>