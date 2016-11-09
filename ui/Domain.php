<html>
<head>
<title>Domains</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="Cslide.js"></script>
<script src="Rslide.js"></script>
<link rel="stylesheet" type="text/css" title="blue "href="Blue.css">
<?php include 'Sessinteract.php';?>
<?php include 'DCreate.php';?>
<?php include 'DRemove.php';?>
</head>

<body>
<table cellspacing="0" cellpadding="20" align="center">
<tr>
<td>
<button class="btn" id="b1">Create Domain</button>
</td>
<td>
<button class="btn" id="b2">Remove Domain</button>
</td> 
</tr>
</table>
<hr color="#7E9FBF" />
<div id="pan">
 <form id="cre" name="cre" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <table cellpadding="0" cellspacing="15" align="center">
 <tr>
 <td align="center"> <input id="dname" name="dname" type="text" size="14" placeholder="Enter domain name" /> </td>
 <td align="center"> <button id="create" name="create" class="btn">Create</a></button></td>
 </tr>
 </table>
</form>
</div>
<div id="pan1">
<form id="rem" name="rem" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table cellpadding="0" cellspacing="20" align="center">
<tr>
<td align="center"> <input id="dname" name="dname" type="text" size="14" placeholder="Enter domain name"> </td>
<td align="center"> <button id="remove" name="remove" class="btn">Remove</button> </td>
</tr>
</table>
</form>
</div>
<?php if($nd == 1) echo "<br><b>Start By creating a domain </b>"; else echo "<br><b><u>Your Domains: </u></b><br><br>";?>
<?php include 'DispDom.php';?>
<hr color="#7E9FBF" />
<table cellpadding="0" cellspacing="20" align="center">
<tr>
<td align="center"><a href="Notes.php?accn=-1&user=<?php echo $uid;?>" target="bframe"><button id="note" name="note" class="lbtn">Notes</button></a></td>
</tr>
</table>
</body>
</html>