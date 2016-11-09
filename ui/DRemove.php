<?php
if(isset($_POST['remove']))
{
 $d=$_POST['dname'];
 $q0="SELECT * FROM password WHERE DId=(SELECT DId FROM domain WHERE DName='$d' AND UserId='$uid')";
 $r=$dbcon->query($q0);
 if ($r->num_rows > 0)
 {
 $qd="DELETE FROM password WHERE DId=(SELECT DId FROM domain WHERE DName='$d' AND UserId='$uid')";
 $r=$dbcon->query($qd);
 }
 $q1="DELETE FROM domain WHERE DName='$d' AND UserId='$uid'";
 $r=$dbcon->query($q1);
 $q2="SELECT * FROM domain WHERE UserId='$uid' GROUP BY UserId";
 $r=$dbcon->query($q2);
 if ($r->num_rows == 0)
	$nd=1;
}
?>