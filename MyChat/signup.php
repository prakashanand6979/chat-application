<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Sign Up</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="css/login_style.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body class="body">
      <div class="login-page">
        <div class="form">
          <form action="" method="post">
            
          <label>Signup</label><br><br>
            <input type="text" placeholder="&#xf007; pick a username"  class="form-control" name="user_name" autocomplete="off" required="required"/>
            <input type="text" placeholder="&#xf0e0; email address" class="form-control" name="user_email" autocomplete="off" required="required"/>
            <input type="password" id="password" placeholder="&#xf023; set a password"  class="form-control" name="user_pass" autocomplete="off" required="required" />
            <i class="fas fa-eye" id="togglePassword" ></i>
            <br>
            <br>
            <button type="submit" name="sign_up">
              SIGN UP
            </button>
            <button type="button" onclick="window.location.href='login.php'">SIGN IN</button>
            <?php include("signup_user.php"); ?>
          </form>
        </div>
      </div>
    </body>
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
  </html>
</html>
