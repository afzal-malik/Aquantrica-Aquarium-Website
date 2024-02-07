<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
  header('location:login.php');
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container1">

      <div class="content">
         <h3>Hi, <span>Admin</span></h3>
         <h1>Welcome<span><?php echo $_SESSION['admin_name'] ?></span></h1>
         <p>This is an Admin Page</p>
         <a href="login.php" class="btn">Login</a>
         <a href="register.php" class="btn">Signup</a>
         <a href="logout.php" class="btn">Logout</a>
      </div>

    </div>

  </body>
</html>
