<html>
<head>
<title> Mobile Number </title>
<link rel="stylesheet" type="text/css" title="blue "href="Blue.css">
</head>

<?php include 'ValMobdb.php';include 'AltNo.php';?>
<body>

<form id="formhome" name="formhome" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table style='border-style:dashed;border-width:2px;border-color:#7E9FBF;margin-top:100px' align="center">
<tr>
<td>
<table width="100%" cellspacing="15">
<tr>
<td align="center" colspan="2">
<button name="ch2" id="ch2" class="btn"> Change to [<?php echo $altno;?>] </button>
</td>
</tr>
<tr><td align="center" class="form" colspan="2"><u> OR </u></td></tr>
  <tr>
    <td align="center"><span class="uspass">Enter New Number: </span></td>
    <td align="center"><input type="text" name="mob" id="mob" size="20" place holder="Mobile Number"/><br><span class="red"><?php echo $MobErr;?></span></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><br /><button id="ch1" name="ch1" class="btn">Change</button></td>
  </tr>	
  </table>
  </td>
  </tr>
  </table>
 </form>
 <p align="center"><span><?php echo $notice;?></span></p>
</body>
</html>