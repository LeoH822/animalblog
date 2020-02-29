<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./includes/css/loginPage.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form class="form-register">
				<p class="string">Register</p>
				<input type="text" name="" placeholder="Login">
				<input type="password" name="" placeholder="password">
				<input type="text" name="" placeholder="email">
				<button>Register</button>
				<p class = "message">ALready Registered? <a href="#">Login</a></p>
			</form>


			<form class ="Login-form">
				<p class="string">Login</p>
				<input type="text" name="" placeholder="Username">
				<input type="password" name="" placeholder="Password">
				<button>Login</button>
				<p class = "message">Non Registered? <a href="#">Register</a></p>
				
			</form>
		</div>
	</div>
	


	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$('.message a').click(function(){
			$('form').animate({height:"toggle",opacity: "toggle"},
			 "slow");
		});
		
	</script>
</body>
</html>