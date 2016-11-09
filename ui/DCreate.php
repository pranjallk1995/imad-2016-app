<?php
if(isset($_POST['create']))
{
 $d=$_POST['dname'];
 $q1="INSERT INTO domain (UserId,DName) VALUES ('$uid','$d')";
 $r=$dbcon->query($q1);
 $nd=0;
}
?>