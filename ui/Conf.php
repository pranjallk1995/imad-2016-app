<?php session_start();?>
<html>
<title>Confirmation Page</title>
<head>
<link rel="stylesheet" type="text/css" title="blue "href="Blue.css">
</head>
<body background="BG1.png" style="background-repeat:no-repeat;background-size: 100% 10%;background-position:bottom;">
<?php include 'connect.php';?>
<div id="topdiv">
<img src="PANSECUREl.png" width="80" height="78" align="left">
<h1 align="center" class="uspass"><u><i>Confirmation</i></u></h1>
</div>
<h1 align="center"><?php if(isset($_SESSION['sess_un'])) echo "Hi ".$_SESSION['sess_un']."!"; else echo "No session";?></h1>
<h2 align="center"><u>Thank you for creating an account</u></h2>

<h3 align="center"> Please confirm your details: </h3>
<table border="2" align="center" cellpadding="20">
<tr>
<td>
<table cellpadding="14" cellspacing="0" align="center">
	<tr>
		<td align="center"><span class="form">Username: </span></td><td align="center"><?php echo $_SESSION['sess_user'];?></td>
	</tr>
	<tr>
		<td align="center"><span class="form">Mobile Number: </span></td><td align="center"><?php echo $_SESSION['sess_mob'];?></td>
	</tr>
	<tr>
		<td align="center"><span class="form">Email id: </span></td><td align="center"><?php echo $_SESSION['sess_eid'];?></td>
	</tr>
</table>
</td>
</tr>
</table>

<table align="center" cellpadding="12">
<tr>
<td><a href="mailer.php"><button class="lbtn">Continue</button></a></td>
<td><a href="Correct.php"><button class="lbtn">Correction</button></a></td>
</tr>
</table>
<h3 align="center"><b>On clicking Continue a Confirmation Email would be sent to your registered EmailId</b></h3>
</body>
</html>