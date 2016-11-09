<?php
    include "smsGateway.php";
    include "GenOTP.php";
    $f=0;
    $smsGateway = new SmsGateway('avi1995@gmail.com', 'holahola123');

    $deviceID = 13839;
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {

    if(isset($_POST["submit"]))
    {
     $_SESSION['sess_user']=$_POST['user']; 
   $d= $_SESSION['sess_user'];
   
   $q1="SELECT MobNo1 from maintable where UserName='$d'";
   $result = $dbcon->query($q1);

   if ($result->num_rows > 0)
   {
    // output data of each row
    while($row = $result->fetch_assoc()) 
      {
       // echo "id: " . $row["MasterPass"];
        $dum=$row["MobNo1"];
        //echo $dum;
      }
   }
   else
   {
    $f=1;
    session_destroy();
   }
    if(!mysqli_query($dbcon,$q1))
  {
    die("error");
  }
  if($f==0)
   {
    $number = $dum;
   // $number = '9819433275';
    $message = "Your one time password is ".$otp;
  
    $options = [
      'send_at' => strtotime('+10 seconds'), // Send the message in 10 seconds
       'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
    ];
    //Please note options is no required and can be left out
    $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
  }
 }
}
?>
