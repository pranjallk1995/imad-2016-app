<html>
<title>PAN Secure</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="slide.js"></script>
<script src="ChangeTheme.js"></script>
<script src="ThemeSlide.js"></script>
<link rel="stylesheet" type="text/css" title="blue "href="Blue.css">
</head>
<body>

<?php include 'ValidateHome.php';?>
<?php include 'Login.php';?>

<div id="topdiv">

<img src="PANSECUREl.png" width="80" height="78" align="left">

<h1 align="center" class="uspass"><u><i>PAN Secure</i></u></h1>
<table cellpadding="20" cellspacing="0"align="right" width="400">
 <tr>
  <td align="center"><button id="b1" class="lbtn">Sign In</button></td>
  <td align="center"><a href="Signup.php"><button id="b2" class="lbtn">Sign Up</button></a></td>
 </tr>
 <tr>
  <td colspan="2" align="center"><span class="red"><?php echo $err;?><?php echo $loginer;?></span></td>
 </tr>
 <tr>
  <td align="center" colspan="2"><div id="panel">
 <form id="formhome" name="formhome" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table width="35%" cellspacing="15">
  <tr>
    <td><span class="uspass">Username:</span></td>
    <td><input type="text" name="user" id="user" maxlength="30" size="20" value="<?php echo $user;?>"/><br><span class="red"><?php echo $userErr;?></span></td>
  </tr>
  <!-- <tr>
   <td>&nbsp;</td>
  </tr>-->
  <tr>
    <td colspan="2" align="right"><br /><button id="submit" name="submit" class="btn1">Submit</button></td>
  </tr>	
  </table>
 </form>
 <tr>
 </tr>
 </div>
    </td>
 </tr>
</table>
</div>



<div id="leftdiv">
<table cellpadding="10" cellspacing="0" align="center">
 <tr>
  <td colscpan="2" align="center"><button id="b3" class="btn">Options</button></td>
 </tr>
 </table><div id="Track">
 <table cellpadding="10" cellspacing="0" align="center">
 <tr>
  <td align="center"><a target="mframe" href="PAN Secure Terms of Service.txt"><button class="lbtn">Terms and Conditions</button></a></td>
 </tr>
 <tr>
  <td align="center"><a target="mframe" href="CUs.html"><button class="lbtn">Contact Us</button></a></td>
 </tr>
 <tr>
  <td align="center"><a target="mframe" href="P.html"><button class="lbtn">Privacy Policy</button></a></td>
 </tr>
 <tr>
  <td align="center"><a target="mframe" href="FAQS.txt"><button class="lbtn">FAQS</button></a></td>
 </tr>

  
</table>
</div>
</div>


<iframe name="mframe" src="maindiv.html" width="55%" height="79%" style="float:left;"></iframe>
<table width="400" style="margin-top:420px; position:fixed;right:10px">
 <tr>
 <td colspan="2" align="center"><a href="Emergency.php"><button name="emergency" class="lbtn">Emergency</button></a></td>
 </tr>
 </table>
<div id="bottomdiv">
Copyright @ pansecure.com
</div>

</body>
</html>