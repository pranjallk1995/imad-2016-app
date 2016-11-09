<?php
include 'Sessinteract.php';
?>

<html>
<title>Settings</title>
<head>
<link rel="stylesheet" type="text/css" title="blue" href="Blue.css">
</head>
<body>

<h1 align="center" class="form"><?php if(isset($dum)) echo "Hi ".$dum."!"; else echo "No session";?></h1>
<h3 align="center"><u>Manage Your Account Settings</u></h3>

<table align="center" cellpadding="20">
<tr>
<td><a href="Block.php" target="_blank"><button class="lbtn">Block Account</button></a></td>
<td><a href="ChangeMobile.php"><button class="lbtn">Change Mobile No.</button></a></td>
</tr>
<tr>
<td><a href="ChangeEid.php"><button class="lbtn">Change Email</button></a></td>
<td><a href="ChangeMatPass.php"><button class="lbtn">Change Password</button></a></td>
</tr>
</table>
</body>
</html>