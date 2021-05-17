<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create new Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body><body class="body">
<div class="login-page">
  <div class="form">

    <form action="" method="post">
        	<input type="text" class="form-control" placeholder="Password" name="pass1" autocomplete="off" required="required">
            <input type="password" class="form-control" placeholder="Confirm Password" name="pass2" id="password" autocomplete="off" required="required">
            
            <i class="fas fa-eye" id="togglePassword" ></i>
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change</button>
			<button type="button" onclick="window.location.href='login.php'">Sign in</button>
    </form>
</div>
</body>
</html>
<?php 
session_start();

include("include/connection.php"); 



	if(isset($_POST['change'])){
		
		$user = $_SESSION['user_email'];
	    $pass1 = $_POST['pass1'];
	    $pass2 = $_POST['pass2'];

	    if($pass1 != $pass2){
	        echo"
	          <div class='alert alert-danger'>
	            <strong>Your new password did't match with each other</strong> 
	          </div>
	        ";
	    }
	    if($pass1 < 9 AND $pass2 < 9){
	        echo"
	          <div class='alert alert-danger'>
	            <strong>Use 9 or more than 9 characters</strong> 
	          </div>
	        ";
	    }
	    if($pass1 == $pass2){
            $update_pass = mysqli_query($con, "UPDATE users SET user_pass='$pass1' WHERE user_email='$user'");
            session_destroy();
            echo"
            	<script>alert('Go ahead and signin')</script>
            	<script>window.open('login.php','_self')</script>
            ";
        }
	
	}


?>
<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>