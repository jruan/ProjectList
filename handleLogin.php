<?php
	require 'CRUDAPI.php';

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])){
			$user = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];

			if(signUp($email, $user, $password) == SUCCESS){
				session_start();
				$_SESSION['user'] = $user;
				$_SESSION['success'] = "true";

				header("Content-Type: text/html");
				header("Location: /homepage.php");	
			}

			else{

			}
		}

		else if(!empty($_POST['username']) && !empty($_POST['password']) && empty($_POST['email'])){

		}

		else{

		}
	}
?>
