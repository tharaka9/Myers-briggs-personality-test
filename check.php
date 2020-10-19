<?php include('inc/server.php');?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Your Secret Super Power</title>
  <link rel="stylesheet" href="assets/css/check.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>

</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="check.php">
			<h1 style="margin-bottom: 10%;">Create Account</h1>
			<span>We Don't Share Your Details</span>
			<input type="text" placeholder="UserName" name="username" required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" required />
			<input type="password" placeholder="Confirm Cassword" name="c_password" required/>
			
			<button type="submit" name="register">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="check.php">
			<h1 style="margin-bottom: 10%;">Sign in</h1>
			<span>Fill With Your Credentials</span>
			<input type="text" placeholder="UserName" name="username" required/>
			<input type="password" placeholder="Password" name="password" required/>
			<!-- <a href="#">Forgot your password?</a> -->
			<button type="submit" name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
				<a class="back_btn" href="index.php" role="button">Back To Home</a>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and find out what you are</p>
				<button class="ghost" id="signUp">Sign Up</button>
				<a class="back_btn" href="index.php" role="button">Back To Home</a>
			</div>
		</div>
	</div>
</div>

<footer>
<!-- footer here -->

</footer>
<!-- partial -->
  <script  src="assets/js/check.js"></script>

</body>
</html>
