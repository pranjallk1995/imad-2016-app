<?php
$flag=0;
$dob1=$dob2=$dob3="";
$dober="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$dob1=$_POST["dob1"];
$dob2=$_POST["dob2"];
$dob3=$_POST["dob3"];
/*echo $dob1er;
echo $dob2er;
echo $dob3er;*/
if($dob1!=0 || $dob2!=0 || $dob3!=0)
{
  if($dob1==0 || $dob2==0 || $dob3==0)
  {
  	$dober="Invalid Birthdate";
  	$error=1;
  }
}

if(($dob3%4==0 &&  $dob3%100!=0) || ($dob3%400==0))  //leap year
  $flag=1; 

if($dob2==2 && $dob1>29 && $flag==1) //29 feb
{
 $dober="Invalid Birthdate";
 $error=1;
}
else if($dob2==2 && $dob1>=29 && $flag==0) 
{
 $dober="Invalid Birthdate";
 $error=1;
}

if($dob2<8 && $dob2%2==0 && $dob1==31)
{
	$dober="Invalid Birthdate";
	$error=1;
}

if($dob2>=8 && $dob2%2==1 && $dob1==31)
{
	$dober="Invalid Birthdate";
	$error=1;
}

}
?>