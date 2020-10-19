<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MBTI ADMIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container pt-5">
  <div class="mx-auto card login-form" style="width: 450px">
    <div class="card-body">
      <form class="form-signin" method="POST" action="index.php" >
        <img class="mb-4 mx-auto d-block logo" src="css/logo.png" alt="Logo" width="150" height="150">
        
        <h3 id="mid" class="mb-3 font-weight-normal">Login</h3>
        
        <div class="form-group">
          <label for="username">User Name:</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
          <label for="pswd">Password:</label>
          <input type="password" class="form-control" name="password" id="pswd">
        </div>
        <button type="submit" class="btn btn-block btn-primary" name="login">Sign In</button>
        <p id="mid" class="text-muted pt-5">Copy right Your Secret Super Power</p>
      </form>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
</body>
</html>
