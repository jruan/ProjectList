<?php
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: /index.html");
?>

<!DOCTYPE html>

<html>
	<head>
		<meta name = "viewport" content = "width: device-width, height: device-height, initial-scale:1.0">
		<meta charset = "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "/css/header_css.css">
		<title>Account Settings </title>
	</head>

	<body>
		<div id = "wrapper">
			<div id = "header">
				<div id = "nav">
					<ul>
						<li><a href = "/homepage.php">Home</a></li>
						<li><a href = "#">My Library</a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>

</html>
