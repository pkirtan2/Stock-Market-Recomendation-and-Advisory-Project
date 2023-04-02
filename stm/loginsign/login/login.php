<?php
// include "{$hostname}/stm/sm/indexlogin.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
		<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
		<style>
			lottie-player {
				position: absolute;
				top: 10%;
				right: 35%;
			}
		</style>
	</head>
	<body>
		<div class="container-login100" >
			<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_ruflv73p.json"  background="transparent"  speed="1"  style="width: 80%; height: 80%;"  loop  autoplay></lottie-player>
			<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" style="position: absolute; right: 15%;">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="login100-form validate-form" >
					<span class="login100-form-title p-b-37">
						Log In
					</span>
					<div  class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email" >
						<input class="input100" type="text" name="uname" placeholder="Username or Email">
						<span class="focus-input100"></span>
					</div>
					<div  class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button name="login" class="login100-form-btn" href="../Home/home.html">
						Sign In
						</button>
					</div>
					<div class="text-center p-t-57 p-b-20">
						<span class="txt1">
							Or login with
						</span>
					</div>
					<div class="flex-c p-b-112">
						<a href="#" class="login100-social-item">
							<i class="fa fa-facebook-f"></i>
						</a>
						
						<button class="login100-social-item" id='login'>
						<img src="images/icons/icon-google.png" alt="GOOGLE">

						</button>
					</div>
					<div class="text-center">
						<a href="../signup.php" class="txt2 hov1">
							Sign Up
						</a>
					</div>
				</form>
				<?php
				if(isset($_POST['login'])){
					include "conn.php";
					$uname=$_POST['uname'];
					$pass=$_POST['pwd'];
					$sql="SELECT uname,pwd FROM regis WHERE uname='{$uname}' and pwd='{$pass}'";
					$result=mysqli_query($conn,$sql) or die("Query failed...!!");
					if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_assoc($result)){
							session_start();
							$_SESSION["uname"]=$row['uname'];
							$_SESSION["pwd"]=$row['pwd'];
							header("Location: \stm/sm/indexlogin.php");
						}

					}else{
						echo "<h1>Username and password are not match..</h1>";
					}

				}
				
				?>
			</div>
		</div>
		
		
		<div id="dropDownSelect1"></div>
		
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<script src="js/main.js"></script>
	</body>
	<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.9/firebase-app.js";
  import { getAuth,GoogleAuthProvider,signInWithRedirec,getRedirectResult } from "https://www.gstatic.com/firebasejs/9.6.9/firebase-auth.js";

  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyCs3jyK4S74-mI3rO1e5T481orQkMp_-1s",
    authDomain: "auth-bbd8f.firebaseapp.com",
    projectId: "auth-bbd8f",
    storageBucket: "auth-bbd8f.appspot.com",
    messagingSenderId: "435789849995",
    appId: "1:435789849995:web:3b8032d62e45c65a82bb8e"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  const provider = new GoogleAuthProvider(app);
  login.addEventListener('click',(e) =>{

	signInWithRedirect(auth, provider);
	getRedirectResult(auth)
  .then((result) => {
    // This gives you a Google Access Token. You can use it to access Google APIs.
    const credential = GoogleAuthProvider.credentialFromResult(result);
    const token = credential.accessToken;

    // The signed-in user info.
    const user = result.user;
  }).catch((error) => {
    // Handle Errors here.
    const errorCode = error.code;
    const errorMessage = error.message;
    // The email of the user's account used.
    const email = error.email;
    // The AuthCredential type that was used.
    const credential = GoogleAuthProvider.credentialFromError(error);
    // ...
  });
  });
</script>
</html>