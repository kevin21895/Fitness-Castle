<?php
//setting header to json
header('Content-Type: application/json');
include('session.php');
 include('stats.php');
   
    $u=$_SESSION['login_user'];
	$n=$_SESSION['name1'];
	 $BMR=$_SESSION['BMR1'];
		$w=$_SESSION['weight1'];
		$h=$_SESSION['height1'];
		$a=$_SESSION['age1'];
		$g=$_SESSION['gender1'];	
       $d= $_SESSION['disease1'];		
	   $p=$_SESSION['pic1'];
	 
	include('session1.php');
	$stc11=$_SESSION['stc1'];		
 $stb11=$_SESSION['stb1'];
 $sty11=$_SESSION['sty1'] ;				
 $str11=$_SESSION['str1'];	
 $stg11=$_SESSION['stg1'] ;	
 $sts11=$_SESSION['sts1'] ;
  $cc2=$_SESSION['cc1'];		
 $cb2=$_SESSION['cb1'];
 $cy2=$_SESSION['cy1'] ;				
 $cr2=$_SESSION['cr1'];	
 $cg2=$_SESSION['cg1'] ;	
 $cs2=$_SESSION['cs1'] ;

 
 
//database

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sports');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}


//query to get data from the table
$query = sprintf("SELECT month, datee, year, SUM(load1) as load1, trainingt FROM records where  username='$u'  group by month  order by datee");
//execute query
$result = $mysqli->query($query);	
$data = array();
foreach ($result as $row) {
$data[]= $row;
}

$result->close();




//close connection
$mysqli->close();

//now print the data
print json_encode($data);

