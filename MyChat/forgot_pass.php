<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgotten Password</title>
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
<body>
	<body class="body">
<div class="login-page">
  <div class="form">

    <form action="" method="post">

      <input type="text" placeholder="&#xf007;  Email" class="form-control" name="email" autocomplete="off" required="required" />
      <div class="container">
      <input type="text" name="bf" id="text" class="form-control"  placeholder="&#xf023;  Bestfriend" />
      </div>
      <br>
      <br>
      <button type="submit" name="submit">Submit</button>
      <button type="button" onclick="window.location.href='login.php'">Sign in</button>
</div>
</body>
</html>
<?php 
session_start();

include("include/connection.php"); 



	if(isset($_POST['submit'])){
	
	$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
	$recovery_account = htmlentities(mysqli_real_escape_string($con,$_POST['bf']));
	
	$select_user = "select * from users where user_email='$email' AND forgotten_answer='$recovery_account'";
	
	$query = mysqli_query($con,$select_user); 
	
	$check_user = mysqli_num_rows($query);
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email;
	
	echo "<script>window.open('create_password.php','_self')</script>";
	
	}
	else {
	echo "<script>alert('Your Email or your Bestfriend name is Incorrect')</script>";
	echo "<script>window.open('forgot_pass.php','_self')</script>";
	}
	
	}


?>