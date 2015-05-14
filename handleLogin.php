<?php
	require 'CRUDAPI.php';
	session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(!empty($_POST['signup_user']) && !empty($_POST['signup_pass']) && !empty($_POST['email'])){
			$user = $_POST['signup_user'];
			$password = $_POST['signup_pass'];
			$email = $_POST['email'];

			if(signUp($email, $user, $password) == SUCCESS){
				$_SESSION['user'] = $user;
				$_SESSION['success'] = "true";

				header("Location: /homepage.php");	
			}

			else{

			}
		}

		else if(!empty($_POST['username']) && !empty($_POST['password'])){

		}

		else{
			
		}
	}
?>
