<?php

$i=0;
if($_GET['accu']==-1)
	$accu=$accp="";
else
{
 $accu=$_GET['accu'];
 $accp=$_GET['accp'];
}

$q1="SELECT DId FROM domain WHERE DName='$selected' AND UserId='$uid'";
  $r=$dbcon->query($q1);
  if($r->num_rows>0)
  	while($row=$r->fetch_assoc())
  		$id=$row["DId"];

$q2="SELECT * FROM password WHERE DId='$id'";
$r=$dbcon->query($q2);

if($r->num_rows>0)
{
	echo "<table style='border-style:dashed;border-width:2px;border-color:#7E9FBF;'><tr><td>";
    echo "<table cellpadding='10' width='700'>";
	while($row=$r->fetch_assoc())
	{	
		$n[$i]=$row["User"];

		$q3="SELECT CAST(AES_DECRYPT(Pass, 'mykey013')as CHAR) Pass,dt FROM password WHERE User='$n[$i]'";
        $result = $dbcon->query($q3);
 		 if ($result->num_rows > 0)
 		 {
  		  while($row = $result->fetch_assoc()) 
    		  {
    		    $dum=$row["Pass"];
    		    $dt=$row["dt"];
 		  	  }
 		 }

		echo "<tr><td><ul><li>".$n[$i]."</li></ul></td><td align='center'><input type='password' value='$dum' /></td><td>".$dt."</td><td><a href='Passpage.php?assign=$selected&user=$uid&accu=$n[$i]&accp=$dum'>Access</a></td></tr>";
		$i++;
	}
	echo "</table>";
    echo "</td></tr></table>";
}
?>