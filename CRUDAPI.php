<?php
	define('SALT', '@200okruan09071993');
	define('FAIL', -1);
	define('SUCCESS', 1);

//	$con = mysqli_connect("localhost", "root", "@powell135", "projectlist");
	$con = NULL;
	function connectToDatabase(){
		global $con;
		$con = mysqli_connect("localhost", "root", "@powell135", "projectlist");
		
		if(mysqli_connect_errno())
			return FAIL;

		return SUCCESS;
	}

	/*
	 * takes some input and cleans it from injections (eg. sql, xss)
         */
	function cleanInput($input){
		$cleanInput = trim($input);
		$cleanInput = stripslashes($input);
		$cleanInput = htmlspecialchars($input);
		return $cleanInput;		
	}

	/*
         * encrypts the input
         */
	function encryptPassword($input, $salt){
		return crypt($input, $salt);
	}

	/*
	 * handles adding new users to the database
         */
	function signUp($email, $username, $password){
		global $con;

		$email = cleanInput($email);
		$username = cleanInput($username);
		$password = encryptPassword(cleanInput($password), SALT);

		//check to see if a connection has been established to the database
		//if not, establish one
		if(!$con){
			if(connectToDatabase() == FAIL)
				return FAIL;
		}

		$query = "SELECT * FROM user_table WHERE username = '$username'";
		$result = mysqli_query($con, $query);
	
		//checks if the user already exists. If yes, then return a failure.
		if($result->num_rows > 0)
			return FAIL;

		//if not, insert the user into the table and return success
		$query = "INSERT INTO user_table (username, password, email) VALUES ('$username', '$password', '$email')";
		if(mysqli_query($con, $query))
			return SUCCESS;

		return FAIL;
	}

	/*
         * handles login authentication
         */
	function login($username, $password){
		global $con;
		$user = cleanInput($username);
		$pass = encryptPassword(cleanInput($password), SALT);

		//check to see if there is a connection to database, if not, open one.
		if(!$con){
			if(connectToDatabase() == FAIL)
				return FAIL;
		}

		$query = "SELECT * FROM user_table WHERE username = '$user'";
		$result = mysqli_query($con, $query);

		//if num of rows returned > 0, then there is a user with that username in the database		
		if($result->num_rows > 0){
			//proceed to check if password is same as input password
			$row = mysqli_fetch_assoc($result);
			//if password is good, return success, if not fail
			if($row["password"] == $pass && $row["username"] == $user)
				return SUCCESS;

			return FAIL;
		}

		return FAIL;
	}
?>
