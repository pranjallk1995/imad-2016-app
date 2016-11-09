<?php
include 'Sessinteract.php';
?>
<html>
<title>PAN Secure</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" title="blue "href="Blue.css">
</head>
<body>
<div id="topdiv">
<img src="PANSECUREl.png" width="80" height="78" align="left">
<h1 align="center" class="uspass"><u><i>PAN Secure</i></u></h1>
</div>

<div id="leftdiv">
<table cellpadding="0" cellspacing="20" align="center">
<tr>
  <td align="center"><a href="logout.php"><button class="lbtn"><?php echo $s;?><br>Logout</button></a></td>
</tr>
<tr>
<td align="center"><a href="Settings.php" target="bframe"><button id="set1" class="lbtn">Settings</button></a></td>
 </tr>
 <tr>
  <td align="center"><a target="bframe" href="Contact Us.html"><button class="lbtn">Contact Us</button></a></td>
 </tr>
 <tr>
  <td align="center"><a target="bframe" href="PP.html"><button class="lbtn">Privacy Policy</button></a></td>
 </tr>
 <tr>
  <td align="center"><a target="bframe" href="FAQS.txt"><button class="lbtn">FAQS</button></a></td>
 </tr>
</table>
</div>

<iframe name="bframe" id="bframe" src="Welcome.php" width="60%" height="79%">
 </iframe>
<iframe name="rframe" id="rframe" src="Domain.php" width="25%" height="79%"></iframe>

<div id="bottomdiv">
Copyright @ pansecure.com
</div>

</body>
</html>