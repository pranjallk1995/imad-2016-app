<?php

if(isset($_POST['submitted']))
{
	$name1db=$_POST['name1'];
	$name2db=$_POST['name2'];
	$name3db=$_POST['name3'];

	$genderdb="";
	if(!empty($_POST["gender"])) 
	 $genderdb=$_POST['gender'];

	if($_POST['dob1']==0)
		$dobdb='';
	else
	    $dobdb=$_POST['dob1'].'/'.$_POST['dob2'].'/'.$_POST['dob3'];


	$countrydb=$_POST['country'];

	$eiddb=$_POST['eid'];

	$mob1db=$_POST['mob1'];
	$mob2db=$_POST['mob2'];

	$addrdb=$_POST['addr'];

	$userdb=$_POST['user'];

	$matpass1db=$_POST['matpass1'];
	$matpass2db=$_POST['matpass2'];

	$seque1db=$_POST['seque1'];
	$seque2db=$_POST['seque2'];	

	$sha2=password_hash($matpass1db, PASSWORD_DEFAULT);

	$sq= "INSERT INTO userdetails (FirstName,MiddleName,LastName,Gender,BirthDate,Country,Email,Address,UserName,SecurityQuestion,SecurityAnswer)
	 VALUES ('$name1db','$name2db','$name3db','$genderdb','$dobdb','$countrydb','$eiddb','$addrdb','$userdb','$seque1db','$seque2db')";

	$sq1= "INSERT INTO maintable (UserName,MasterPass,MobNo1,MobNo2)
	 VALUES ('$userdb','$sha2','$mob1db','$mob2db')";

	 if(!mysqli_query($dbcon,$sq))
	{	die('error has occured');
    }
    if(!mysqli_query($dbcon,$sq1))
	{	die('error has occured');
    }
}
?>