<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Account</title>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="HideUnhide.js"></script>
<script src = "Lock.js"></script>
<script src = "Strength.js"></script>
<link rel="stylesheet" type="text/css" title="blue" href="Blue.css">
<link rel="stylesheet" type="text/css" title="position" href="Lockpostion.css">
</head>

<body background="BG1.png" style="background-repeat:no-repeat;background-size: 100% 10%;background-position:bottom;">

<?php include 'complex.php';?>
<?php include 'RedirectConf.php';?>

<div id="topdiv">

<img src="PANSECUREl.png" width="70" height="78" align="left">

<h1 id="hd" align="center"><u><i>Create Your Account</u></i></h1>
</div>

<form id="form1" name="form1" method="post" action="Signup.php">
<input type="hidden" name="submitted" value="true"/>
  
 <fieldset> <legend><h4 class="uspass">Personal Information</h4></legend>  

  <p align="center"><span class="red"><?php if($error==1) echo "Verify Your Details Again";?></span></p>

  
  
   <table width="950" cellspacing="10" cellpadding="20" align="center">
    <tr>
      <td width="91"><label for="name0" class="form">Name :</label></td>
      <td width="349">
<p class="red">
          <input name="name1" type="text" id="name1" size="30" maxlength="30" placeholder="First Name" 
          value="<?php echo $name1;?>"/> * <?php echo $name1er;?>
</p>
<p class="red">
          <input name="name2" type="text" id="name2" size="30" maxlength="30" placeholder="Middle Name"
          value="<?php echo $name2;?>"/> <?php echo $name2er;?>
</p>
<p class="red">       
          <input name="name3" type="text" id="name3" size="30" maxlength="30" placeholder="Last Name" 
          value="<?php echo $name3;?>"/> * <?php echo $name3er;?>
          </td>
</p>
    </tr>
    <tr>
      <td class="form">Gender :</td>
      <td><p>
        <label>
          <input type="radio" name="gender" value="Male" id="gender_0" <?php if (isset($gender) && $gender=="Male") echo "checked";?>/>
          Male</label>
        <br />
        <label>
          <input type="radio" name="gender" value="Female" id="gender_1" <?php if (isset($gender) && $gender=="Female") echo "checked";?>/>
          Female</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td><label for="dob1" class="form">Birthday :</label></td>
      <td><select name="dob1" id="dob1">
        <option selected="selected" value="0">Date...</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select> 
      <select name="dob2" id="dob2">
        <option selected="selected" value="0">Month...</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>
        <input name="dob3" type="text" id="dob3" size="4" maxlength="4" placeholder="Year"/><span class="red"> <?php echo $dober ;?><?php echo $dob3er;?></span>
    </td>
    </tr>
    <tr>
      <td><label for="country" class="form">Country :</label></td>
      <td><p class="red"><select name="country" id="country">
        <option value="India" selected="selected">India</option>
        <option value="Brazil">Brazil</option>
        <option value="Russia">Russia</option>
        <option value="China">China</option>
        <option value="South Africa">South Africa</option>
      </select> 
         *</p></td>
    </tr>
    <tr>
      <td><label for="eid" class="form">E-mail id :</label></td>
      <td><p class="red"><input name="eid" type="text" id="eid" size="40" maxlength="50" placeholder="email id"
      value="<?php echo $eid;?>"/> 
         * <?php echo $eider;?></p></td>
    </tr>
    <tr>
      <td><label for="mob1" class="form">Mobile no. :</label></td>
      <td><p class="red">
          <input name="mob1" type="text" id="mob1" size="10" maxlength="10" placeholder="In Use"
          value="<?php echo $mob1;?>"/>
        * <?php echo $mob1er;?></p>
        <p>
          <input name="mob2" type="text" id="mob2" size="10" maxlength="10" 
          value="<?php echo $mob2;?>"/>
        (Alternate Recommended)<span class=red><?php echo $mob2er;?></span></p></td>
    </tr>
    <tr>
      <td><label for="addr" class="form">Address :</label></td>
      <td><textarea name="addr" id="addr" cols="45" rows="3" placeholder="Address"><?php echo $addr;?></textarea></td>
    </tr>
    <tr>
      <td><label for="username" class="form">Username :</label></td>
      <td><p class="red">
        <input type="text" name="user" id="user" placeholder="User Name" value="<?php echo $user;?>"/> * <?php echo $userer;?>
    </tr>
    <tr>
      <td><label for="matpass1" class="form">Master Password :</label></td>
      <td><p class="red">
        <input  onkeydown="checkStrength()" type="password" name="matpass1" id="matpass1" 
        value="<?php echo $mastpass1;?>" placeholder="Master Password"/>
        * <?php echo $mastpass1er;?> <div id="Lock" onclick="move()" style="float:left;height:60px;width:70px"><img id="myImage" src="Lockt.png" height="37" with="20" class="under"/><img src="Lockb.png" id="myImage" height="37" with="20" class="over" /></div> <button class="btn" id="str">Strength</button>

        </p> 
        <p class="red">
          <label for="matpass2"></label>
          <input type="password" name="matpass2" id="matpass2" placeholder="Confirm" value="<?php echo $mastpass2;?>" />
        * <?php echo $mastpass2er;?> </p></td>
    </tr>
    <tr>
      <td><label for="seque1" class="form">Security Question: </label></td>
      <td><p class="red">
        <select name="seque1" id="seque1">
          <option selected="selected" value="0">Choose...</option>
          <option value="1">Your college name</option>
          <option value="2">Your favourite personality</option>
          <option value="3">Your favourite sport</option>
          <option value="4">Your favourite book</option>
	        <option value="5">Your pet's name</option>
        </select>
       * <?php echo $seque1er?></p>
      <p class="red">
        <label for="seque2"></label>
        <input name="seque2" type="text" id="seque2" size="30" maxlength="20" placeholder="Answer"
        value="<?php echo $seque2;?>"/>
      * <?php echo $seque2er;?></p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>We recommend you to write it down in case of an emergency.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><h4 align="center">Attributes with * are compulsory so please check all your entries.</h4></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td><h4 align="center"><input type="checkbox" name="Tick" id="Tick">I agree to the PAN Secure <a href="PAN Secure Terms of Service.txt" target="_blank">Terms and Conditions</a> and <a href="PP.html" target="_blank">Privacy policy</a></h4></td>
    </tr>
    <tr>
      <td><label for="submit" class="form">Create Account :</label></td>
      <td align="center"><button type="submit" value="Submit" name="submit" class="btn" onclick="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Submit</button></td>
    </tr>
  </table>
 </fieldset>
</form>
</body>
</html>