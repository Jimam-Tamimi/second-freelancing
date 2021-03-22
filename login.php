<?php

session_start();
if(isset($_SESSION['login']) ||  $_SESSION['login'] == true){
  header('location: /');
}


if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['login'] == 'login'){
  $username = 'admin';
  $password = 'admin';
  if($_POST['username'] == $username && $_POST['password'] == $password){
    $_SESSION['login'] = true;
    header('location: /');
    
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->

    <!-- Favicons
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3"> -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      body{
        height: 100vh;
    display: flex;
    align-items: center;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<div style="max-width: 380px !important;" class="container">
  <form action="login.php" method="POST">
    <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please Login</h1>
    <input type="hidden" value="login" name="login">
    
    <label for="username" class="visually-hidden">User name</label>
    <input  name="username" type="text" id="username" class="form-control my-4" placeholder="Username" required autofocus>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input  name="password" type="password" id="inputPassword" class="form-control my-4" placeholder="Password" required>
    <div class="checkbox mb-3">
    <button class="w-100 btn btn-lg btn-primary my-2" type="submit">Login in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2026</p>
  </form>
</div>


    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
