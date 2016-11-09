<?php
   if(isset($_POST["submit"]))
   {
    if($error==0)
    {
       session_start();
       $_SESSION['sess_un']=$_POST['name1'];
       $_SESSION['sess_user']=$_POST['user'];
       $_SESSION['sess_mob']=$_POST['mob1'];
       $_SESSION['sess_eid']=$_POST['eid'];
	   header("Location: Conf.php");
    }
   }
?>