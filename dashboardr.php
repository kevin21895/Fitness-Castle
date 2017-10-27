<!DOCTYPE html>
<?php
   include('session.php');
   include('config.php');
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

 
 
 
 
  
  $tl=0;
	$y=0;
    $tcalb=0;
	$z=0;
	$sql= "Select * from records where trainingt='Running' AND username ='$u'" ;
    $res=mysql_query($sql,$con);
    while($x=mysql_fetch_array($res))
	{
	   if($x['intensity']<=2)
	   {     $tl=$tl+$x['load1'];
           $y++;
		   $tcalb=$tcalb+($BMR*1.2);
		   $z++;
	   }
	   if($x['intensity']>2 && $x['intensity']<=4)
	   {   $tl=$tl+$x['load1'];
           $y++;
		   $tcalb=$tcalb+$BMR*1.375;
		   $z++;
	   }
	    
	    if($x['intensity']>4 && $x['intensity']<=6)
	   { $tl=$tl+$x['load1'];
           $y++;
		   $tcalb=$tcalb+$BMR*1.55;
		   $z++;	
	   }
	   
	    if($x['intensity']>6 && $x['intensity']<=8)
	   { $tl=$tl+$x['load1'];
           $y++;
		   $tcalb=$tcalb+$BMR*1.725;
		   $z++;
	   }
	   
	    if($x['intensity']>8 && $x['intensity']<=10)
	   { $tl=$tl+$x['load1'];
           $y++;
		   $tcalb=$tcalb+$BMR*1.9;
		   $z++;
	   }
	}		


/* 
   The following 4 code lines contain the database connection information. 
   Alternatively, you can move these code lines to a separate 
   file and include the file here. 
   You can also modify this code based on your database connection. 
 */


 


// Close the database connection



?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <script type="text/javascript" src="jquery.min.js"></script>
    
    <script type="text/javascript" src="Chart.min.js"></script>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart 
    <link rel="stylesheet" href="plugins/morris/morris.css">-->
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
         <script>

$(document).ready(function(){
  
  $.ajax({

    url: "http://localhost/hackethon/datar2.php",
    method: "GET",
    success: function(data) {

      console.log(data);

      var player = [];
      var score = [];
      
      for(var i in data) {

        player.push(data[i].datee);
   
        score.push(data[i].load1);
        
      }

      var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'Load',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#mycanvas2");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

</script>



	  <script>

$(document).ready(function(){
  
  $.ajax({

    url: "http://localhost/hackethon/datar1.php",
    method: "GET",
    success: function(data1) {

      console.log(data1);

      var player = [];
      var score = [];
      
      for(var i in data1) {

        player.push(data1[i].month + '-' + data1[i].year);
   
        score.push(data1[i].load1);
     
      }

      var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'Load',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

</script>



   <script>

$(document).ready(function(){
  
  $.ajax({

    url: "http://localhost/hackethon/datar.php",
    method: "GET",
    success: function(data) {

      console.log(data);

      var player = [];
      var score = [];
      
      for(var i in data) {

        player.push(data[i].year);
   
        score.push(data[i].load1);
       
      }

      var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'Load',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#mycanvas1");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

</script>


 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="http://localhost/hackethon/home1.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Fitness Castle</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- Notifications: style can be found in dropdown.less -->
              <!-- Tasks: style can be found in dropdown.less -->
                            <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $n; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $n; ?>
                      <small></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
               
               
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="http://localhost/hackethon/profile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="http://localhost/hackethon/logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $n; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			 <li class="treeview">
              <a href="http://localhost/hackethon/dashboard.php">
                <span>Dashboard</span> 
              </a>
            <li class=" treeview">
              <a href="http://localhost/hackethon/dashboards.php">
                <span>Swimming</span> 
              </a>
              
            </li>
            <li class="treeview">
              <a href="http://localhost/hackethon/dashboardg.php">
               </i>
                <span>Gyming</span>
               
              </a>
              
            </li>
            <li>
              <a href="http://localhost/hackethon/dashboardc.php">
                <span>Cycling</span> 
              </a>
            </li>
            <li class="active treeview">
              <a href="http://localhost/hackethon/dashboardr.php">
                
                <span>Running</span>
                
              </a>
              
            </li>
            <li class="treeview">
              <a href="http://localhost/hackethon/dashboardb.php">
                
                <span>Boxing</span>
               
              </a>
             
            </li>
            <li class="treeview">
              <a href="http://localhost/hackethon/dashboardy.php">
                <span>Yoga</span>
                
              </a>
              
            </li>
           
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="http://localhost/hackethon/home1.php"> Home</a></li>
            <li a href="http://localhost/hackethon/dashboard.php"></i>Dashboard</li>
			<li class="active">Running</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $tcalb; ?></h3>
                  <p>Total Calories Burned</p>
				   <a href="#" class="small-box-footer"></a>
                </div>
                
               
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php $acalb=($tcalb/$z); echo number_format((float)$acalb, 2, '.', ''); ?></h3>
                  <p>Average Calories Burned </p><small>per exercise</small>
                </div>
               
	
              </div>
            
			</div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $tl; ?></h3>
                  <p>Total Load</p>
                </div>
                <div class="icon">
                  
                </div>
               
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo number_format((float)($tl/$y), 2, '.', '');?></h3>
                  <p>Average Load</p><small>per exercise</small>
                </div>
                <div class="icon">
                  
                </div>
               
              </div>
            
           
          </div><!-- /.row -->
          <!-- Main row -->
           <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#mycanvas" data-toggle="tab">Month</a></li>
                  <li><a href="#mycanvas1" data-toggle="tab">Year</a></li>
                   <li><a href="#mycanvas2" data-toggle="tab">Date</a></li>
                  <li class="pull-left header"><i class="fa fa-inbox"></i> History</li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  <canvas class="chart tab-pane active" id="mycanvas" style="position: relative; height: 300px;"> </canvas>
				  <canvas class="chart tab-pane" id="mycanvas1" style="position: relative; height:300px;"></canvas>
                 <canvas class="chart tab-pane" id="mycanvas2" style="position: relative; height:300px;"></canvas>
                </div>
              </div><!-- /.nav-tabs-custom -->
            
            
             

            
              
	
            

              <!-- Calendar -->
              

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      

     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
