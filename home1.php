<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
   include('session.php');
   include('stats.php');
    $u=$_SESSION['login_user'];
	$n=$_SESSION['name1'];
	$l=$_SESSION['lat1'];
	$lo=$_SESSION['lon1'];
	$do=$_SESSION['dor1'];
	
	include('session1.php');
	$stc11=$_SESSION['stc1'];		
 $stb11=$_SESSION['stb1'];
 $sty11=$_SESSION['sty1'] ;				
 $str11=$_SESSION['str1'];	
 $stg11=$_SESSION['stg1'] ;	
 $sts11=$_SESSION['sts1'] ;
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sports</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="css/lightbox.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

 <script type="text/javascript">
		
         function showLocation(position) {
		 
		 
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
			document.contactform.lat.value= latitude;
			document.contactform.lon.value= longitude;	

            
         }

         function errorHandler(err) {
            if(err.code == 1) {
               alert("Error: Access is denied!");
            }
            
            else if( err.code == 2) {
               alert("Error: Position is unavailable!");
            }
         }
			
         function getLocation(){

            if(navigator.geolocation){
               // timeout at 60000 milliseconds (60 seconds)
               var options = {timeout:60000};
               navigator.geolocation.getCurrentPosition(showLocation, errorHandler, options);
            }
            
            else{
               alert("Sorry, browser does not support geolocation!");
            }
         }
			
      </script>
</head>
<body onload="getLocation()">
<header class="header">
	<div class="container">
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
							<li><a href="#section2" class="page-scroll">Statistics</a></li>
							<li><a href="#work" class="page-scroll">Portfolio</a></li>
						        <li><a href="http://localhost/hackethon/dashboard.php">Dashboard</a></li>
							<li><a href="#" class="page-scroll">Welcome <?php echo $u; ?></a></li>
							<li><a href="profile.php" class="page-scroll">Profile</a></li>
							<li><a href="logout.php" class="page-scroll">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>

<div class="container-fluid main" id="page-top">
	<div class="row">
		<div class="col-md-12 backg">
			<div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
				<div class="text-box">
                	<p class="intro">Introducing</p>
                    <h2>Fitness Castle</h2>
                    <h3>Training Tracker</h3>
                    
                    
				</div>
  			</div>
		</div>
		<div class="col-md-12 some-notes">
			<div class="title">
                <h2>Welcome To Fitness Castle</h2>
            
		</div>
	</div>
</div>
<div class="container-fluid work" id="work">
	<div class="container">
		<div class="row" id="starts">
			<div class="col-md-12 col-sm-12 col-xs-12 work-list">
				<h2 class="text-center portfolio-text">Statistics</h2>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="dashboardc.php">
                		<div class="featured-img">
                			<img src="2.jpg"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Cycling</h3>
						<h3>Total Time:<?php echo $stc11; ?></h3>
						
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="dashboardg.php">
                		<div class="featured-img">
                			<img src="3.png"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Gyming</h3>
						<h3>Total Time:<?php echo $stg11; ?></h3>
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="dashboardb.php">
                		<div class="featured-img">
                			<img src="4.png"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Boxing</h3>
						<h3>Total Time:<?php echo $stb11; ?></h3>
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="dashboardy.php">
                		<div class="featured-img">
                			<img src="5.jpg"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Yoga</h3>
						<h3>Total Time:<?php echo $sty11; ?></h3>
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="dashboardr.php">
                		<div class="featured-img">
                			<img src="6.png"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Running</h3>
						<h3>Total Time:<?php echo $str11; ?></h3>
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="dashboards.php">
                		<div class="featured-img">
                			<img src="8.jpg"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Swimming</h3>
						<h3>Total Time:<?php echo $sts11; ?></h3>
                	</a>
				</div>
			</div>
		</div>
	</div>
</div>






<div class="container-fluid work" id="work">
	<div class="container">
		<div class="row" id="starts">
			<div class="col-md-12 col-sm-12 col-xs-12 work-list">
				<h2 class="text-center portfolio-text">Portfolio</h2>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="sfc.html">
                		<div class="featured-img">
                			<img src="2.jpg"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Cycling</h3>
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="sfg.html">
                		<div class="featured-img">
                			<img src="3.png"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Gyming</h3>
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="sfb.html" >
                		<div class="featured-img">
                			<img src="4.png"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Boxing</h3>
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="sfy.html">
                		<div class="featured-img">
                			<img src="5.jpg"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Yoga</h3>
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="sfr.html">
                		<div class="featured-img">
                			<img src="6.png"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Running</h3>
                	</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 work-space">
					<a href="sfs.html">
                		<div class="featured-img">
                			<img src="8.jpg"/>
                		</div>
                		<div class="image-hover">
                			<i class="glyphicon glyphicon-eye-open"></i>
						 </div>
                		<h3>Swimming</h3>
                	</a>
				</div>
			</div>
		</div>
	</div>
</div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(26.802100, 75.822739),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>
	$(document).ready(function () {
		$(document).on("scroll", onScroll);
 
		$('a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");
 
			$('a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');
 
			var target = this.hash;
			$target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 500, 'swing', function () {
				window.location.hash = target;
				$(document).on("scroll", onScroll);
			});
		});
	});
 
	function onScroll(event){
		var scrollPosition = $(document).scrollTop();
		$('nav a').each(function () {
			var currentLink = $(this);
			var refElement = $(currentLink.attr("href"));
			if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
				$('nav ul li a').removeClass("active");
				currentLink.addClass("active");
			}
			else{
				currentLink.removeClass("active");
			}
		});
	}
	</script>
	<script type="text/javascript">
    jQuery(function ($) {
      // custom formatting example
      $('.timer').data('countToOptions', {
        formatter: function (value, options) {
          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
      });
 
      // start all the timers
      $('#starts').waypoint(function() {
    $('.timer').each(count);
	});
 
      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
  	</script>

</body>
</html>
