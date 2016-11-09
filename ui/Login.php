<?php
 session_start();
 include 'connect.php';
 include 'sms.php';
 $loginer="";
 $f=0;
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 if(isset($_POST["submit"]) && $error==0 )
 {
  $_SESSION['sess_user']=$_POST['user'];

  $d=$_SESSION['sess_user'];
 

  //invlaid username
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
    $f=1;
  }

  if(!mysqli_query($dbcon,$q1))
  {
    die("error");
  }

 if($f==0)
 {
  $q2="SELECT BlockedStatus from maintable where UserName='$d'";
  $r=$dbcon->query($q2);
  if($r->num_rows>0)
    while($row=$r->fetch_assoc())
      $block=$row["BlockedStatus"];
  
    if(!mysqli_query($dbcon,$q2))
  {
    die("error");
  }
  $_SESSION['otp']=$otp;
  if($block==1)
  {
    $loginer="The Account has been blocked";
   // $f=1;
  }
  else
    header("Location: OTPPage.php");
 }

 } 
}
?>