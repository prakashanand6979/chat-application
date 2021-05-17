
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<!-- Brand/logo -->
<a class="navbar-brand" href="#">
  <?php 
    $user = $_SESSION['user_email'];
    $get_user = "select * from users where user_email='$user'"; 
    $run_user = mysqli_query($con,$get_user);
    $row=mysqli_fetch_array($run_user);
          
    $user_name = $row['user_name'];
    echo"<a class='navbar-brand' href='home.php?user_name=$user_name'><button name='home' class='btn btn-success' style='border-right: 5px;''><i class='fa fa-home' aria-hidden='true'> Home</i></button></a>";
  ?>
</a>
<form method="post">
<button name="logout" class="btn btn-danger" style="border-right: 5px;"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></button>
</form>
 <?php
                if(isset($_POST['logout'])){
                  $update_msg = mysqli_query($con, "UPDATE users SET log_in='Offline' WHERE user_name='$user_name'");
                  header("Location:logout.php");
                  exit();
                }
?>
</nav><br>