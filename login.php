<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<meta name = "viewport" content = "width=device-width;height=device-height;initial-scale=1.0">
		<meta charset = "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "/css/header_css.css">		
		<link rel = "stylesheet" type = "text/css" href = "/css/login_signup_css.css">
		<title> Log In </title>
	</head>

	<body>
		<div id = "wrapper">
			<div id = "header">
				<div id = "nav">
					<ul>
						<li><a href = "\index.html">Home</a></li>
						<li><a href = "\signup.html">Sign Up</a></li>
					</ul>
				</div>
			</div>

			<div id = "login_box">
				<h1 style = "color:white;"> Login</h1>
				<form action = "/handleLogin.php" method = "POST">
					<input name = "username" type = "text" placeholder = "Username"><br>	
					<input name = "password" placeholder = "Password" type = "password"><br>
					<a href = "#" style = "color: #DAA520;">  Forgot Password </a><br><br>
					<input type = "submit" style = "width:30%;font-size:14pt;background-color:#DAA520;">
				</form>
			</div>		
		</div>
	</body>
</html>
