<?php

$i=0;

$q="SELECT DName FROM domain WHERE UserId='$uid'";
$r=$dbcon->query($q);
if ($r->num_rows > 0)
  {
  	echo "<table cellpadding='5'>";
    while($row = $r->fetch_assoc()) 
      {
        $dn[$i]=$row["DName"];
        echo "<tr><td><ul><li><a href='Passpage.php?assign=$dn[$i]&user=$uid&accu=-1&accp=-1' target='bframe'>".$dn[$i]."</a></li></ul></td></tr>";
        $i++;
      }
     echo "</table>";
  }
    
?>