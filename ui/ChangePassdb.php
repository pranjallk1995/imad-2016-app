<?php
include 'Sessinteract.php';

$err="";
if(isset($_POST["s9"]))
{
	if(empty($_POST["matpass1"]))
	{
		$err='Enter a password';
	}
	else
	{
		$matpass1db=$_POST['matpass1'];
		$sha2=password_hash($matpass1db, PASSWORD_DEFAULT);
		$sq="UPDATE maintable SET MasterPass='$sha2' WHERE UserName='$s'";
		$r=$dbcon->query($sq);
	}
}