<?php
	$session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<meta name = "viewport" content = "width = device-width; height = device-height; initial-scale = 1.0">
		<meta charset = "UTF-8">
		<link rel = "stylesheet" type = "text/css" href = "/css/header_css.css">
		<link rel = "stylesheet" type = "text/css" href = "/css/outline.css">
		<title> Home </title>
	</head>

	<body>
		<div id = "wrapper">
			<div id = "header">
				<div id = "nav">
					<ul>
						<li><a href = "#">Home </a></li>
						<li><a href = "#">My Library</a></li>
					</ul>
				</div>
			</div>

			<div id = "user_section">
				<img src = "\images\no_profile.jpg">
				<h2 style = "position: absolute;margin-left:190px;"> Hello User</h2>	
				<div id = "logout_account">
					<ul>
						<li><a href = "#"> Logout </a></li>
						<li><a href = "#"> Account Setting</a></li>
					</ul>
				</div>
			</div>

			<div id = "projects" style = "height: 900px;">
				<br>
				<form>
					<input type = "text" name = "search" placeholder = "Search Project">
					<select> 
						<option>Computer Science</option>
						<option>Chemical Engineering</option>
						<option>Mechanical Engineering</option>
						<option>Electrical Engineering</option>
						<option>Aerospace Engineering</option>
						<option>Structural Engineering</option>
					</select>
					<input type = "submit" name = "go" value = "search">
				</form>
				<h1 style = "margin-left:2%;"> Recently Posted Projects</h1>
			
				<label style = "margin-left:2%;margin-right:1.5%;"> Filter By: </label>	
				<select>
					<option>Dates</option>
					<option>Popularity</option>
				</select><br><br>

				<div class = "description_box">
					<img src = "/images/compsci.png">
					<p> April 28: <a href = "#">Description asdiasd asdsad nasd ..</a></p>
				</div>

				<div class = "description_box">
                                        <img src = "/images/chemEng.jpg">		
					<p> asdnjsa adosand nasdnsa jnasnd jasdnsjan asd </p>
				</div>

				<div class = "description_box">
                                        <img src = "/images/mechanical.jpg">
					<p>asd adsasmd okadmsadnsad ads nasndas d</p>
                                </div>

				<div class = "description_box">
                                        <img src = "/images/electrical.jpg">
                                </div>


				<div class = "description_box">
					
                                </div>

				<div class = "description_box">

                                </div>				
			</div>
		</div>	
	</body>
</html>
