<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> 
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">
<div class="login-page">
  <div class="form">
    <form action="" method="post">
      
  <label>Login</label><br><br>
      <input type="text" placeholder="&#xf007;  Email" class="form-control" name="email" autocomplete="off" required="required" />
      <div class="container">
      <input type="password" name="pass" id="password" class="form-control"  placeholder="&#xf023;  password" />
      <i class="fas fa-eye" id="togglePassword" ></i>
      </div>
      <br>
      <br>
      <button type="submit" name="sign_in">LOGIN</button>
      <?php include("signin_user.php"); ?>
      <button type="button" onclick="window.location.href='signup.php'">SIGN UP</button>
      <button type="button" onclick="window.location.href='Forgot_pass.php'">FORGOT PASSWORD?</button>
    </form>
  </div>
</div>

<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
});
</script>
</body>
</html>

