
<!DOCTYPE html>
<?php
   include('session.php');
   include('stats.php');
   $BMR=$_SESSION['BMR1'];
		$w=$_SESSION['weight1'];
		$h=$_SESSION['height1'];
		$a=$_SESSION['age1'];
		$gender=$_SESSION['gender1'];
	$disease=$_SESSION['disease1'];	
    $u=$_SESSION['login_user'];
	$n=$_SESSION['name1'];
	$l=$_SESSION['lat1'];
	$lo=$_SESSION['lon1'];
	$do=$_SESSION['dor1'];
	$e=$_SESSION['email1'];
	$b=$_SESSION['bday1'];
$ph=$_SESSION['ph_no1'];
	include('session1.php');
	$stc11=$_SESSION['stc1'];		
 $stb11=$_SESSION['stb1'];
 $sty11=$_SESSION['sty1'] ;				
 $str11=$_SESSION['str1'];	
 $stg11=$_SESSION['stg1'] ;	
 $sts11=$_SESSION['sts1'] ;
	
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
    <script src="assets/js/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav"  >
      <div id="section-topbar" style="background-color:#111">
	<div id="topbar-inner" style="background-color:#111">
		<div class="row">
			<div class="col-md-4 ">
				<div class="navbar-header">
					    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
					        <span class="glyphicon glyphicon-align-justify"></span>
					    </button>
      					<a class="navbar-brand logo" >Fitness Castle</a>
    			</div>
			</div>
			<div class="col-md-8">
				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
					<ul class="nav navbar-nav navbar-right menu">
							<li><a href="#page-top" class="page-scroll active">Home</a></li>
							
						        <li><a href="http://localhost/hackethon/dashboard.php">Dashboard</a></li>
							<li><a href="#" class="page-scroll">Welcome <?php echo $u; ?></a></li>
							
							<li><a href="logout.php" class="page-scroll">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	</div><!--/ #section-topbar -->  
		<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1><?php echo $n;?> </h1>
					<h3>Since <?php echo $do; ?></h3>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->
	

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5>Details</h5>
				</div>
				<div class="col-lg-6">
					<p>Name:<?php echo $n;?></p>
					<p>Email Id:<?php echo $e; ?></p>
					<p>Username:<?php echo $u;?></p>
					<p>Date of Birth:<?php echo $b; ?></p>
					<p>Gender:<?php echo $gender; ?></p>
					<p>Phone No.:<?php echo $ph;?></p>
					<p>Age:<?php echo $a;?></p>
				</div>
				<div class="col-lg-3">
					<p><a href="#"><i class="icon-file"></i></a> <sm>Edit</sm></p>
				</div>
				
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #intro -->


	
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc"   >
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>Health Details</h5>
				</div>
				<div class="col-lg-6">
					<p>Weight:<?php echo $w;?>&nbsp kgs<br/></p>
					<p>Height:<?php echo $h;?>&nbsp cms<br/></p>
					<p>Diseases:<?php echo $disease; ?><br/></p>
					
				</div>
				
	
				
	
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->
	
	
	


	
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
