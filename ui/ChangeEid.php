<html>
<head>
<title> Email ID </title>
<link rel="stylesheet" type="text/css" title="blue "href="Blue.css">
</head>
<?php include'ValEiddb.php';?>
<body>
<form id="formhome" name="formhome" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table style='border-style:dashed;border-width:2px;border-color:#7E9FBF;margin-top:100px' align="center">
<tr>
<td>
<table width="100%" cellspacing="15">
  <tr>
    <td align="center"><span class="uspass">Enter New Email: </span></td>
    <td align="center"><input type="text" name="eid" id="eid" size="20" place holder="Email Address"/><br><span class="red"><?php echo $EidErr;?></span></td>
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