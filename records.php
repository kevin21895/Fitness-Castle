<?php
include('session.php');
//session_start();
    $username=$_SESSION['login_user'];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$date=$_POST["date"];
$tos=$_POST["time"];
$duration=$_POST["dur"];
$trainingt=$_POST["ttype"];
$trainings=$_POST["tstat"];
$intensity=$_POST["intensity"];
$load=$_POST["load"];
$injured=$_POST["injury"];
$injuredarea=$_POST["injuredarea"];
$comments=$_POST["comment"];

}
$id='';
$orderdate=$date;
$orderdate = explode('-', $orderdate);
$year = $orderdate[0];
$month  = $orderdate[1];
$day  = $orderdate[2];

$con=mysql_connect("localhost","root","");
mysql_select_db("sports",$con);

$sql="INSERT INTO records values ('".$id."','".$username."','".$date."','".$day."','".$month."','".$year."','".$tos."','".$duration."','".$trainingt."','".$trainings."','".$intensity."','".$load."','".$injured."','".$injuredarea."','".$comments."')";
$res1=mysql_query($sql,$con);

if($res1)
{
	 
	//echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
header('location:http://localhost/hackethon/home1.php');
$_SESSION['date1']=$date;
		$_SESSION['tos1']=$tos;
		$_SESSION['duration1']=$duration;
		$_SESSION['trainingt1']=$trainingt;
        $_SESSION['trainings1']=$trainings;	
        $_SESSION['intensity1']=$intensity;
        $_SESSION['load1']=$load;
	    $_SESSION['injured1']=$injured;
        $_SESSION['injuredarea1']=$injuredarea;	
		$_SESSION['comments1']=$comments;
	   
}
else
{
	echo "<script type='text/javascript'>alert('failed!')</script>";
header('location:http://localhost/hackethon/home1.html');
}
 	

mysql_close($con);	
?>