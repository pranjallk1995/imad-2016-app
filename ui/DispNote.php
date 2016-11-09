<?php

if($_GET['accn']==-1)
  $accn="";
else
  $accn=$_GET['accn'];

		$q3="SELECT Notes,dt FROM notes WHERE UserId='$uid'";
    $result = $dbcon->query($q3);
 		 if ($result->num_rows > 0)
 		 {
      echo "<table style='border-style:dashed;border-width:2px;border-color:#7E9FBF;'><tr><td>";
      echo "<table cellpadding='10' width='600'>";
  		  while($row = $result->fetch_assoc()) 
    		  {
    		    $d=$row["Notes"];
            $dt=$row["dt"];
            echo "<tr><td><ul><li>".$d."</li></ul></td><td>".$dt."</td><td><a href='Notes.php?accn=$d&user=$uid'>Access</a></td></tr>";
 		  	  }
      echo "</table>";
      echo "</td></tr></table>";
 		 }

?>