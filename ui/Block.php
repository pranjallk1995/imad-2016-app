<?php session_start();
include 'ValidateBlock.php';
?>

<html>
<title>Block Account</title>
<head>
<link rel="stylesheet" type="text/css" title="blue" href="Blue.css">
</head>
<body background="BG1.png" style="background-repeat:no-repeat;background-size: 100% 10%;background-position:bottom;">
<div id="topdiv">
<img src="PANSECUREl.png" width="80" height="78" align="left">
<h1 align="center" class="uspass"><u><i>Answer Your Security Question</i></u></h1>
</div>

<h3 align="center"> Your Security Question Is </h3>
<table align="center" cellpadding="20" style='border-style:dashed;border-width:2px;border-color:#7E9FBF;'>
<tr>
<td>
<table cellpadding="20" cellspacing="0" align="center">
	<tr>
		<td align="center"><span class="form">Security Question: <?php echo $seque1;?></span></td>
	</tr>
	<tr>
	<form id="form2" name="form2" method="post" action="Block.php">
	<input type="hidden" name="submitted" value="true"/>
		<td align="center"><span class="form">Answer: </span>
		<input type="text" name="seque2" size="30" maxlength="20" placeholder="Answer" /> 
		</td><p align="center"<span class="red"> <?php echo $seque2er; ?> </span></p>
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
