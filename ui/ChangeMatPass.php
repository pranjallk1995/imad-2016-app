<html>
<head>
<title> Master Password </title>
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
<link rel="stylesheet" type="text/css" title="blue "href="Blue.css">
<?php include 'ChangePassdb.php';?>
</head>

<body>
<form id="form1" name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table style='border-style:dashed;border-width:2px;border-color:#7E9FBF;margin-top:100px' align="center">
<tr>
<td>
<table width="100%" cellspacing="15">
<tr>
<td>
<input onkeydown="checkStrength()" type="password" name="matpass1" id="matpass1" size="25" placeholder="New Password"/>
</td>
<td>
<div id="Lock" onclick="move()" style="float:left;height:60px;width:70px"><img id="myImage" src="Lockt.png" height="37" with="20" class="under"/><img src="Lockb.png" id="myImage" height="37" with="20" class="over" /></div>
</td>
</tr>
<tr>
<td colspan="2"><span class="red"><?php echo $err;?></span></td>
</tr>
</table>
</form>
<p align="center"><button class="btn" id="str" name="str" onclick="checkStrength()">Strength</button><span style="padding: 20px;"></span><button class="btn" id="s9" name="s9">Save</button></p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</table>