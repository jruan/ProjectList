<?php
	define('SALT', '@200okruan09071993');
	define('FAIL', -1);
	define('SUCCESS', 1);

	function cleanInput($input){
		$cleanInput = trim($input);
		$cleanInput = stripslashes($input);
		$cleanInput = htmlspecialchars($input);
		return $cleanInput;		
	}

	function encryptPassword($input, $salt){
		return crypt($input, $salt);
	}

	function signUp($email, $username, $password){
		$email = cleanInput($email);
		$username = cleanInput($username);
		$password = encryptPassword(cleanInput($password), SALT);
		
		$con = mysqli_connect("localhost", "root", "@powell135", "projectlist");
		if(mysqli_connect_errno()){
			return FAIL;
		}	

		$query = "INSERT INTO user_table (username, password, email) VALUES ('$username', '$password', '$email')";
		if(mysqli_query($con, $query)){
			return SUCCESS;
		}

		return FAIL;
	}
?>
