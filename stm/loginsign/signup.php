<?php
	$ele=false;
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		include 'login/conn.php';
		$conn=mysqli_connect("localhost","root","","reg") or die("Database not connect..!!");

	$fname=$_POST["fname"];	
	$lname=$_POST["lname"];	
	$uname=$_POST["uname"];	
	$email=$_POST["email"];	
	$pwd=$_POST["pwd"];	
	$cpwd=$_POST["cpwd"];	
	$num=$_POST["num"];	
	if($pwd==$cpwd){
		$sql="INSERT INTO `regis` (`fname`, `lname`, `uname`, `email`, `pwd`, `cpwd`, `num`, `date`) VALUES ('{$fname}', '{$lname}', '{$uname}', '{$email}', '{$pwd}', '{$cpwd}', '{$num}', current_timestamp());";
		$result=mysqli_query($conn,$sql);
		if($result){
			$ele=true;
		}
	
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <!-\- MATERIAL DESIGN ICONIC FONT --> 
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

 	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Lottilefiles -->
	
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

	<style>
		.btn1 button{
  width: 100px;
  height: 50px;
  border: 0px;
  background: gold;
  color:white;
  float : right;
}
.btn1 a {
	color : white;	
}
.btn1 button:hover {
	background: #eadd9d;
  color: #0A183D;
}

	</style>
	
</head>

<body>
	<div class="wrapper">
		<div class="image-holder">
			<lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_F3v2Nj.json"  background="transparent"  speed="1"  style="width: 80%; height: 80%;"  loop  autoplay></lottie-player>
		</div>
		<form action="/stm/loginsign/signup.php" method="POST" >
			<div id="wizard" style="background: #fff; height: 80%;">
				<!-- SECTION 1 -->
				<h4></h4>
				<section>
					<div class="form-row form-group">
						<div class="form-holder">
							<label for="">
								First Name *
							</label>
							<input required type="text" class="form-control" name="fname">
						</div>
						<div class="form-holder">
							<label for="">
								Last Name *
							</label>
							<input required type="text" class="form-control" name="lname">
						</div>
					</div>
					<div class="form-holder" >
						<label for="">
							Username *
						</label>
						<input required type="text" class="form-control" name="uname">
					</div>

					<div class="form-holder" >
						<label for="">
							Email Address *
						</label>
						<input required type="email" class="form-control" name="email">
					</div>

					<div class="form-holder" style="margin-top: 27px;">
						<label for="">
							Password *
						</label>
						<input required type="password" class="form-control" name="pwd">
					</div>
					<div class="form-holder" style="margin-top: 27px;">
						<label for="">
							Confirm Password *
						</label>
						<input required type="password" class="form-control" name="cpwd" >
					</div>
					<div class="form-holder" style="margin-top: 27px;">
						<label for="">
							Phone *
						</label>
						<input required type="text" class="form-control" name="num">
					</div>

					<br>
					<div class="btn1">
						<p>already have account?</p>
						<button class="btn_sign" >
							<a href="#">Sign Up</a>
						</button>
					</div>
					
					<div class="btn1">
						<button class="btn_sign">
							<a href="login/login.php">Login</a>
						</button>
					</div>
					<br>
					<?php
						if($ele){
							
							header("Location: login/login.php" );
						}
						?>

					
				</section>

				<!-- SECTION 2
				<h4></h4>
				<section>
					<div class="form-row">
						<label for="">
							County *
						</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-row">
						<label for="">
							Postcode / Zip *
						</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-row">
						<label for="">
							Address *
						</label>
						<input type="text" class="form-control" placeholder="Street address"
							style="margin-bottom: 20px">
						<input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
					</div>
					<div class="form-row">
						<label for="">
							Town / City *
						</label>
						<input type="text" class="form-control" required>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" checked> Create an account?
							<span class="checkmark"></span>
					
						</label>
						<label style=" position: relative; left: 80px;">	 
						<a href="../Login_SignUp/Login/login.html">Already have an Account?</a>	
					</label>
	
					</div>
					
				</section> -->

			</div>
		</form>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- JQUERY STEP -->
	<script src="js/jquery.steps.js"></script>

	<!-- <script src="js/main.js"></script> -->
	<!-- Template created and distributed by Colorlib -->
</body>

</html>