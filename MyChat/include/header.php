<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<!-- Brand/logo -->
<a class="navbar-brand" href="#">
  <?php 
    $user = $_SESSION['user_email'];
    $get_user = "select * from users where user_email='$user'"; 
    $run_user = mysqli_query($con,$get_user);
    $row=mysqli_fetch_array($run_user);
          
    $user_name = $row['user_name'];
         echo"<a class='navbar-brand' href='account_settings.php'><button name='back' class='btn btn-success' style='border-right: 5px;'><i class='fa fa-arrow-left' aria-hidden='true'> Back</i></button></a>";
    ?>
  </a>
  <ul class="navbar-nav">
    <li><a style="color: white; text-decoration: none;font-size: 20px;" href="home.php?user_name=$user_name"><button name="home" class="btn btn-success" style="border-right: 5px;"><i class="fa fa-home" aria-hidden="true"> Home</i></button></a></li>
  </ul>
</nav><br>
