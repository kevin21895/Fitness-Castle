<?php

		session_start();

		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$uname=$_POST["username"];
		$pwd=$_POST["password"];
		$weight=$_POST["w"];
		$height=$_POST["h"];
		$disease=$_POST["disease"];
		$bday=$_POST["birthday"];
		$gender=$_POST["gender"];
		$ph_no=$_POST["phone"];
	    $lat=$_POST["lat"];
		$lon=$_POST["lon"];
		}

		$num='';
    $dor= date("Y-m-d");


		$con=mysqli_connect("localhost","root","");
		mysqli_select_db("sports",$con);


                $sql1="Select * from signup";
              $res=mysqli_query($sql1,$con);

			  $x=mysqli_fetch_array($res);

                if($x['uname']==$uname)
                {
					echo "Same Username";
header('location:http://localhost/hackethon/signup.html?SameUsername');
				}
				else
	{		 $time=strtotime($bday);
		 $year=date("Y",$time);
		  $cyear=date("Y");
          $age=$cyear-$year;

		if($gender=="Male")
		{
			$BMR=66+(13.7*$weight)+(5*$height)+(6.8*$age);
		}
		if($gender=="Female")
		{
			$BMR=655+(9.6*$weight)+(1.8*$height)+(4.7*$age);
		}
        $sql="INSERT INTO signup values ('".$num."','".$name."','".$email."','".$uname."','".$pwd."','".$weight."','".$height."','".$disease."','".$bday."','".$age."','".$gender."','".$ph_no."','".$lat."','".$lon."','".$dor."','".$BMR."')";
		$res=mysqli_query($sql,$con);

		if($res)
		{
			$_SESSION['login_user'] = $uname;
		     header('location:http://localhost/hackethon/home1.php');
		}


		else
		{
		header('location:http://localhost/hackethon/signup.html?Error');
		}
 	}


		mysqli_close($con);
	?>
