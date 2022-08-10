<?php 
session_start();

  include("config.php");
  include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
        $email = $_POST['email'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email))
    {

      //save to database
      $user_id = random_num(20);
      $query = "insert into users (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";

      mysqli_query($con, $query);

      header("Location: login.php");
      die;
    }else
    {
      echo "Please enter some valid information!";
    }
  }
  $username = stripcslashes($username);  
  $password = stripcslashes($password);
  $email = stripslashes($email);
  $email = mysqli_real_escape_string($con, $email);  
  $username = mysqli_real_escape_string($con, $username);  
  $password = mysqli_real_escape_string($con, $password);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  
  <body>
  <div class="raven">
   <img src="/img/raven.png" alt="raven-logo">
  </div>
    <div class="center">
    <p><h1 style="color:white;" >Register Here</h1></p>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="user_name" required>
          <span></span>
          <label style="color:white">Username</label>
        </div>
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label style="color:white">Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label style="color:white">Password</label>
        </div>
        <input type="submit" value="Create an account">
        <div class="signup_link">
          Already a member? <a href="login.php">Sign In</a>
        </div>
      </form>
    </div>

  </body>
</html>
