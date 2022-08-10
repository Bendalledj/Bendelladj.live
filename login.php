<?php 

session_start();

	include("config.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$message = "Username and/or Password incorrect.\\nTry again.";


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			
			
		} else {
			echo "<script type='text/javascript'>alert('$message');</script>";
		  }
		  
	}

	$username = stripcslashes($username);  
	$password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
	$password = mysqli_real_escape_string($con, $password); 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gateway</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  
  <body>
 	<div class="raven">
	 <img src="/img/raven.png" alt="raven-logo">
	</div>
    <div class="center">
      <p><h1 style="color:white;" >Portal for Hufflepuff</h1></p>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="user_name" required>
          <span></span>
          <label style="color:white">Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label style="color:white">Password</label>
        </div>
        <input type="submit" value="Enter">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
