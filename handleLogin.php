<?php
	require 'CRUDAPI.php';
	session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		//handles sign up post inputs
		if(!empty($_POST['signup_user']) && !empty($_POST['signup_pass']) && !empty($_POST['email'])){
			$user = $_POST['signup_user'];
			$password = $_POST['signup_pass'];
			$email = $_POST['email'];
			
			//if sign up was a success, immediately redirect the user to his homepage
			if(signUp($email, $user, $password) == SUCCESS){
				$_SESSION['user'] = $user;

				header("Location: /homepage.php");	
			}

			//if sign up failed, destory current session and redirect to....
			else{
				echo "sign up failed";
				session_destroy();
			}
		}

		//handle login post inputs
		else if(!empty($_POST['username']) && !empty($_POST['password'])){
			$user = $_POST['username'];
			$pass = $_POST['password'];

			//if login was success, direct to homapge
			if(login($user, $pass) == SUCCESS){
				$_SESSION['user'] = $user;
				header("Location: /homepage.php");
			}

			//if not, close session and redirect to.....
			else{
				echo "login failed";
				session_destroy();
			}
		}

		else{
			//if anything else, then destroy any session variables and the session itself and redirect to index
			session_unset();
			session_destroy();	
			header("Location: /index.html");
		}
	}

	else{
		if(!empty($_GET['user'])){
			session_unset();
			session_destroy();
			header("Location: /index.html");
		}
	}
?>
