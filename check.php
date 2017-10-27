	<?php
   include("config.php");
   session_start();
   $f=1;
   $BMR=0;
   $username=$_POST["username"];
   $password=$_POST["password"];
      
      $sql = "SELECT * FROM signup" ;
	
      //$result=mysql_query($sql,$con);
	  $info=mysql_query($sql,$con);
	  while($x=mysql_fetch_array($info))
	  { 
  
		 
	  
      if($x['pwd']==$password && $x['uname']==$username)
	  {
		 	
		
         $time=strtotime($x['bday']);
		 $year=date("Y",$time);
		  $cyear=date("Y");
          $age=$cyear-$year;
	
			if($x['gender']=="Male")
		{
			$BMR=66+(13.7*$x['weight'])+(5*$x['height'])+(6.8*$age);
		}
		if($x['gender']=="Female")
		{
			$BMR=655+(9.6*$x['weight'])+(1.8*$x['height'])+(4.7*$age);
		}
    	
		$_SESSION['BMR1']=$BMR;
		$_SESSION['weight1']=$x['weight'];
		$_SESSION['height1']=$x['height'];
		$_SESSION['age1']=$age;
        $_SESSION['gender1']=$x['gender'];	
        $_SESSION['name1']=$x['name'];
        $_SESSION['disease1']=$x['disease'];		
		$_SESSION['pic1']=$x['pic'];
		
$_SESSION['login_user'] = $username;
         	header('location:http://localhost/hackethon/home1.php');   
	  }}
	  	
			
if($f==0)
{

        
          $error = "Your Login Name or Password is invalid";

		 header('location:http://localhost/hackethon/login.php');
      }
   
?>