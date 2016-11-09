<?php 
include 'VerifyMastPass.php';
?>

<html>
<title>Enter Master Password</title>
<head>
<link rel="stylesheet" type="text/css" title="blue" href="Blue.css">
</head>
<body background="BG1.png" style="background-repeat:no-repeat;background-size: 100% 10%;background-position:bottom;">
<div id="topdiv">
<img src="PANSECUREl.png" width="80" height="78" align="left">
<h1 align="center" class="uspass"><u><i>Enter Your MaterPassword</i></u></h1>
</div>

<br><br><br><br>
<table style='border-style:dashed;border-width:2px;border-color:#7E9FBF;' align="center" cellpadding="20">
<tr>
<td>
<table cellpadding="20" cellspacing="0" align="center">
	<tr>
	<form id="form2" name="form2" method="post" action="">
	<input type="hidden" name="submitted" value="true"/>
		<td align="center"><span class="form">Password: </span>
		<input type="password" name="passw" size="20" placeholder="Enter Your Password" /> 
		</td>
	</tr>
	<tr>
	<td align="center"><button type="submit" value="Submit" name="submit" class="btn" onclick="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Submit</button></td>
	</tr>
	</form>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>