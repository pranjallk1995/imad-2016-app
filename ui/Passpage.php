<html>
<head>
<title>Password page</title>
<script type="text/javascript">
        
            var imgObj = null;
            var animate;
            var count = 0;
            
            function init(){
               imgObj = document.getElementById('myImage');
               imgObj.style.position= 'relative'; 
               imgObj.style.top = '6px'; 
            }
            
            
	      function move(){
	      	if(count<4 )
              {
              	
              		while(count<4 )
              		{
		          count++;  
                  imgObj.style.top = parseInt(imgObj.style.top) - 2 + 'px';

              }
	    }
            	
            

	        else if(count==4)
              {
              	
              		while(count>0)
              		{
		          count--;  
                  imgObj.style.top = parseInt(imgObj.style.top) + 2 + 'px';
                 
	          }
	    }
	}
            
            
            window.onload =init;
       
</script>

<style type="text/css">
.under
{
position:relative;
left:20px;
top:0px;
z-index:-1;
}
.over
{
position:relative;
left:-15px;
top:19px;
z-index:-1;
}
</style>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src = "Strength.js"></script>
<script src = "HideUnhide.js"></script>
<script src = "Lock.js"></script>
<link rel="stylesheet" type="text/css" title="blue" href="Blue.css">
<?php include 'Enterpass.php';?>
<?php include 'GenPass.php';?>
</head>

<body background="BG1.png" style="background-repeat:no-repeat;background-size: 100% 10%;background-position:bottom;">
<sapn class="form"><?php echo $selected;?>: </sapn>
<br><br><hr color="#7E9FBF" /><br>
<span class="form">Passwords: </span><br /><br />
<?php include 'DispPass.php';?>

<form id="form1" name="form1" method="post" action="Passpage.php?assign=<?php echo $selected;?>&user=<?php echo $uid;?>&accu=-1&accp=-1">
<table cellpadding="5" cellspacing="5" align="center" style="float: left">
<tr>
<td>
<input type="text" name="un" id="un" size="25" placeholder="Username" value="<?php if(isset($_POST['gen'])) echo $u; else echo $accu;?>"/>
</td>
<td>
<input onkeydown="checkStrength()" type="password" name="matpass1" id="matpass1" size="25" placeholder="Password" value="<?php if(isset($_POST['gen'])) echo $password; else echo $accp;?>"/>
</td>
<td>
<div id="Lock" onclick="move()" style="float:left;height:60px;width:70px"><img id="myImage" src="Lockt.png" height="37" with="20" class="under"/><img src="Lockb.png" id="myImage" height="37" with="20" class="over" /></div>
</td>
</tr>
<tr>
<td colspan="3"><button class="tbtn" id="s3" name="s3">Delete</button><span style="padding: 20px;"></span><button class="tbtn" id="s1" name="s1">Save</button><span style="padding: 20px;"></span><button class="tbtn" id="s4" name="s4">Clear</button><span style="padding: 20px;"></span><button class="tbtn" id="gen" name="gen">Generate</button></td>
</tr>
</table>
</form>
<button class="tbtn" id="str" name="str" onclick="checkStrength()" style="float:left">Strength</button>

<br clear="left"><br><hr color="#7E9FBF" /><br>
<p align="right"><a href="Welcome.php" target="bframe"><button class="btn">Help</button></a></p>
</body>
</html>