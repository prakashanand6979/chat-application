<?php
include("include/connection.php");


	if(isset($_POST['sign_up'])){

	$name = htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
	$pass = htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
	$email = htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
	$rand = rand(1, 2); //Random number between 1 and 2

	if($name == ''){
		echo "<script>alert('We can not verify your name')</script>";
	}

	if(strlen($pass)<8){

	echo "<script>alert('Password should be minimum 8 characters!')</script>";
	exit();
	}

	$check_email = "select * from users where user_email='$email'";
	$run_email = mysqli_query($con,$check_email);

	$check = mysqli_num_rows($run_email);

	if($check==1){

	echo "<script>alert('Email already exist, please try another!')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
	exit();
	}
	if($rand == 1)
			$profile_pic = "images/image2.jpg";
	else if($rand == 2)
			$profile_pic = "images/image1.jpg";

	$insert = "insert into users (user_name,user_pass,user_email,user_profile) values ('$name','$pass','$email','$profile_pic')";

	$query = mysqli_query($con,$insert);

	if($query){

	echo "<script>alert('Congratulations $name, your account has been created successfully.')</script>";
	echo "<script>window.open('login.php','_self')</script>";

	}
	else {

	echo "<script>alert('Registration failed, try again!')</script>";
	echo "<script>window.open('signup.php','_self')</script>";
	}
}
?>
