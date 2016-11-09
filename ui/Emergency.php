<html>
<title>Emergency</title>
<head>
<link rel="stylesheet" type="text/css" title="blue" href="Blue.css">
<?php $emer=1;?>
<?php include 'ValidateEmer.php';?>
<?php include 'CheckBlock.php';?>

</head>
<body background="BG1.png" style="background-repeat:no-repeat;background-size: 100% 10%;background-position:bottom;">
<div id="topdiv">
<img src="PANSECUREl.png" width="80" height="78" align="left">
<h1 align="center" class="uspass"><u><i>PAN Secure</i></u></h1>
</div>

<form id="formhome" name="formhome" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table style='border-style:dashed;border-width:2px;border-color:#7E9FBF;margin-top:100px' align="center" style="margin-top:100px">
<tr><td>
  <table width="35%" cellspacing="15">
  <tr>
  <td colspan="2" align="center"><span class="red"><?php echo $err;?><?php echo $loginer;?></span></td>
 </tr>
  <tr>
    <td><span class="uspass">Username:</span></td>
    <td><input type="text" name="user" id="user" maxlength="30" size="20" value="<?php echo $user;?>"/><br><span class="red"><?php echo $userErr;?></span></td>
  </tr>
  <tr>
    <td><span class="uspass">Password:</span></td>
    <td><input type="password" name="passw" id="passw" size="20" value="<?php echo $passw;?>"/><br><span class="red"><?php echo $passwErr;?></span></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><br /><button id="submit" name="submit" class="btn">Submit</button></td>
  </tr>	
  </table>
  </td>
  </tr>
  </table>
 </form>
 </body>
 </html>