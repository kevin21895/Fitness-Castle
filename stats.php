<?php
//include('session.php');
    $username=$_SESSION['login_user'];
	$con=mysql_connect("localhost","root","");
mysql_select_db("sports",$con);

//$sql="Select * from records where uname =$username";
//res1=mysql_query($sql,$con);
$stc=0;
$str=0;
$sty=0;
$stb=0;
$sts=0;
$stg=0;
$cc=0;
$cr=0;
$cy=0;
$cb=0;
$cs=0;
$cg=0;
$sql="Select * from records where username='$username' AND trainingt ='Cycling'";
$info=mysql_query($sql,$con);

	while($x=mysql_fetch_array($info))
		{
			$stc=$stc+$x['duration'];
                         $cc++;
		}
$sql="Select duration from records where username ='$username' AND trainingt ='Running'";
$info1=mysql_query($sql,$con);

	while($x=mysql_fetch_array($info1))
		{
			$str=$str+$x['duration'];
                         $cr++;
		}
$sql="Select duration from records where username ='$username' AND trainingt ='Yoga'";
$info=mysql_query($sql,$con);

	while($x=mysql_fetch_array($info))
		{

			$sty=$sty+$x['duration'];
                        $cy++;   
		}
$sql="Select duration from records where username ='$username' AND trainingt ='Boxing'";
$info=mysql_query($sql,$con);

	while($x=mysql_fetch_array($info))
		{
			$stb=$stb+$x['duration'];
                         $cb++;
		}
$sql="Select duration from records where username ='$username' AND trainingt ='Swimming'";
$info=mysql_query($sql,$con);

	while($x=mysql_fetch_array($info))
		{
			$sts=$sts+$x['duration'];
                        $cs++;
		}
$sql="Select duration from records where username ='$username' AND trainingt ='Gyming'";
$info=mysql_query($sql,$con);

	while($x=mysql_fetch_array($info))
		{
			$stg=$stg+$x['duration'];
                         $cg++;
		}						
		
				
$_SESSION['stc1'] = $stc;		
$_SESSION['stb1'] = $stb;
$_SESSION['sty1'] = $sty;				
$_SESSION['str1'] = $str;	
$_SESSION['stg1'] = $stg;	
$_SESSION['sts1'] = $sts;	
$_SESSION['cc1'] = $cc;		
$_SESSION['cb1'] = $cb;
$_SESSION['cy1'] = $cy;				
$_SESSION['cr1'] = $cr;	
$_SESSION['cg1'] = $cg;	
$_SESSION['cs1'] = $cs;			
mysql_close($con);	
?>