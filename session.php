<?php
   include('config.php');
   session_start();
   $user_check = $_SESSION['login_user'];
   $con=mysql_connect("localhost","root","");
		mysql_select_db("sports",$con);
		
		
                $sql1="Select * from signup ";
              $res=mysql_query($sql1,$con);
			
			  $x=mysql_fetch_array($res);
   
  
             if($x['uname']==$user_check)
			 {
              $_SESSION['BMR1']=$x['BMR'];
		$_SESSION['weight1']=$x['weight'];
		$_SESSION['height1']=$x['height'];
		$_SESSION['age1']=$x['age'];
        $_SESSION['gender1']=$x['gender'];         	
        $_SESSION['name1']=$x['name'];
       $_SESSION['disease1']=$x['disease'];		
	$_SESSION['pic1']=$x['pic'];
	$_SESSION['lat1']=$x['lat'];
		$_SESSION['lon1']=$x['lon'];
		$_SESSION['dor1']=$x['dor'];
		$_SESSION['ph_no1']=$x['ph_no'];
	$_SESSION['bday1']=$x['bday'];
	$_SESSION['email1']=$x['email'];

			 }	
//if(!isset($_SESSION['login_user'])){
   //   header("location:http://localhost/hackethon/login.php");
  // }

?>	