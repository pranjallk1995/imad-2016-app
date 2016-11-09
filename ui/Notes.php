<html>
<head>
<title>Notes</title>
<link rel="stylesheet" type="text/css" title="blue" href="Blue.css">
</head>
<body>
<?php include 'Enternote.php';?>
<span class="form">Notes: </span>
<br><br><hr color="#7E9FBF" /><br>
<?php include 'DispNote.php';?>
<form id="form2" name="form2" method="post" action="Notes.php?accn=-1&user=<?php echo $uid;?>">
<table cellpadding="10" cellspacing="10" align="center">
<tr>
<td>
<textarea name="note" id="note" cols="45" rows="6" placeholder="Note"><?php echo $accn;?></textarea> 
</td>
<td align="center"><button class="btn" id="ss" name="ss">Save</button></td>
<td align="center"><button class="btn" id="sd" name="sd">Delete</button></td>
</tr>
</table>
</form>
<br><hr color="#7E9FBF" /><br>
<p align="right"><a href="Welcome.php" target="bframe"><button class="btn">Help</button></a></p>
</body>
</html>