<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ECO FUND | Login</title>
	<link rel="stylesheet" href="styles/login.css">
	<link rel="icon" type="image/x-icon" href="./images/logo-dark.png">

</head>


<body>

	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<!--SIGN IN-->
			<form action="signuplogic.php" method="POST">
				<?php if (!empty($errorMsg)) : ?>
					<div style="color: red;"><?php echo $errorMsg; ?></div>
				<?php endif; ?>
				<h1>Create Account</h1>

				<input type="text" name="name" placeholder="Name" required />
				<input type="text" name="surname" placeholder="Surname" required />


				<input type="text" name="email" placeholder="Email" required />

				<input type="password" name="password" placeholder="Password" required />

				<input class="button" type="submit" name="submit" placeholder="Log in">
			</form>
		</div>

		<!--LOG IN-->
		<div class="form-container sign-in-container">

			<form action="loginlogic.php" method="POST">
				<h1>Log in</h1>
				<input type="text" name="email" placeholder="Email" required />
				<input type="password" name="password" placeholder="Password" required />
				<input class="button" type="submit" name="submit">
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">LOG In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>



	<script src="js/login.js"></script>


</body>

</html>