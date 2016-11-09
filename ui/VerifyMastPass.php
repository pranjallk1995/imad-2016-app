<?php
session_start();
include "connect.php";
$f1=0;
if($_SERVER["REQUEST_METHOD"]=="POST")
 {
  if(isset($_POST["submit"]))
  {
  	$d=$_SESSION['sess_user'];
  	$passw=$_POST['passw'];
$q1="SELECT MasterPass from maintable where UserName='$d'";
  $result = $dbcon->query($q1);

  if ($result->num_rows > 0)
  {
    // output data of each row
    while($row = $result->fetch_assoc()) 
      {
       // echo "id: " . $row["MasterPass"];
        $dum=$row["MasterPass"];
        //echo $dum;
      }
  }
  else
  {
   	$loginer="Invalid username";
   	$f1=1;
  }

  if(!mysqli_query($dbcon,$q1))
  {
    die("error");
  }


echo $f1;
echo "hello";

if($f1==0)
  {
echo "hi";
   	if (password_verify($passw, $dum))
   	{
     // Success!
     header("Location: Environment.php");
    }

    else
    {
	   $passer="Invalid username or password";
	    header("Location: index.php");
     // Invalid credentials
	   session_destroy();
    }
  }

 /* if($f==0  && $emer==1)
  {

    if (password_verify($p, $dum))
    {
     // Success!
     header("Location: Block.php");
    }

    else
    {
     $loginer="Invalid username or password";
     // Invalid credentials
     session_destroy();
    }
  }*/

}
 }
 ?>