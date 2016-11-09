<?php
$error=0;
$flag = 0;
$name1er=$name2er=$name3er=$dob3er=$eider=$mob1er=$mob2er=$userer=$mastpass1er=$mastpass2er=$seque1er=$seque2er="";
$name1=$name2=$name3=$gender=$dob1=$dob2=$dob3=$eid=$mob1=$mob2=$addr=$user=$dummyuser=$mastpass1=$mastpass2=$seque1=$seque2=$tick="";

include 'valdate.php';
include 'connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{

  if(empty($_POST["name1"]))
  {
   $name1er="First Name is Mandatory";
   $error=1;
  }
  else
  {
  	$name1=$_POST["name1"];
     if (!preg_match("/^[a-zA-Z]*$/",$name1))
     {
       $name1er = "Only letters are allowed";
       $error=1;
     }

  }

  $name2=$_POST["name2"];
  if (!preg_match("/^[a-zA-Z]*$/",$name2) && !(empty($_POST["name2"])))
     {
       $name2er = "Only letters are allowed";
       $error=1;
     }

  if(empty($_POST["name3"]))
  {
    $name3er="Last Name is Mandatory";
    $error=1;
  }
  else
  {
    $name3=$_POST["name3"];
     if (!preg_match("/^[a-zA-Z]*$/",$name3))
     {
       $name3er = "Only letters are allowed";
       $error=1;
     }
  }
  
  if(!empty($_POST["gender"])) 
   $gender=$_POST["gender"];


  if(!empty($_POST["dob3"]))
  {
    $dob3=$_POST["dob3"];
    if(!preg_match("/^[0-9]*$/",$dob3))
    {  
      $dob3er=" Invalid Date of birth";
      $flag = 1;
      $error=1;
    }
    if(($dob3-1900)<0 && $flag==0)
    {
      $dob3er=" You must be atleast from the 20th century";
      $error=1;
    }
    if(($dob3-2050)>0 && $flag==0)
    {
      $dob3er=" We don't take future accounts.";
      $error=1; 
    }  
  }

  if(empty($_POST["eid"]))
  {
    $eider="Email is Mandatory";
    $error=1;
  }
  else
  {
    $eid=$_POST["eid"];
    if(!filter_var($eid,FILTER_VALIDATE_EMAIL))
    {
      $eider="Invalid Email Format";
      $error=1;
    }
  }

  if(empty($_POST["mob1"]))
  {
    $mob1er="Mobile no is Mandatory";
    $error=1;
  }
  else
  {
    $mob1=$_POST["mob1"];
    if (!preg_match("/^[0-9]*$/",$mob1))
     {
       $mob1er = "Only numbers are allowed";
       $error=1;
     }
   else if(strlen($mob1)!=10)
   {
    $mob1er=" Mobile No. should be 10 digits";
    $error=1;
   }
  }


  if(empty($_POST["mob2"]))
  {
    $mob2er="";
  }
  else
  {
    $mob2=$_POST["mob2"];
    if (!preg_match("/^[0-9]*$/",$mob2))
     {
       $mob2er = "Only numbers are allowed";
       $error=1;
     }
   else if(strlen($mob2)!=10)
   {
    $mob2er="Mobile No. should be 10 digits";
    $error=1;
   }
  }
  
  $addr=$_POST["addr"];

  if(empty($_POST["user"]))
  {
    $userer="Username is Mandatory";
    $error=1;
  }
  
  $dummyuser=$_POST["user"];
  $check="SELECT * FROM userdetails WHERE UserName = '$dummyuser'";
  $result = $dbcon->query($check);
  if($result->num_rows > 0) 
  {
    $userer="Username already exists";
    $error=1;
  }
  else
  {
    $user=$_POST["user"];
  }

  if(empty($_POST["matpass1"]))
  {
    $mastpass1er="Master Password is Mandatory";
    $error=1;
  }
  if(empty($_POST["matpass2"]))
  {
    $mastpass2er="Confirm the Master Password";
    $error=1;
  }
  else
  {
    $mastpass1=$_POST["matpass1"];
    $mastpass2=$_POST["matpass2"];
    if($mastpass1!==$mastpass2)
    {
       $mastpass2er="Passwords don't match";
       $error=1;
    }
  }

  $seque1=$_POST["seque1"];
  if($seque1==0)
  {
    $seque1er="Please enter the Security Question";
    $error=1;
  }  
  if(empty($_POST["seque2"]))
  {
    $seque2er="Answer the Security Question";
    $error=1;
  }
  else
    $seque2=$_POST["seque2"];


  if(!isset($_POST['Tick']))
   $error=1;

 if(!mysqli_query($dbcon,$check))
  { die('error has occured');
    }   
}
?>