<?php

$q1= "SELECT MobNo2 from maintable WHERE UserName='$s'";
$r=$dbcon->query($q1);
if($r->num_rows>0)
    while($row=$r->fetch_assoc())
    {
      $altno=$row["MobNo2"];    
      if($altno=="")
      	$altno='No Alternamte Number';
    }

?>