<?php

     require_once 'Models/db_config.php';
	 
     $name         = "";
	 $err_name     = "";
	  $hasError = false;
	 $username     = "";
	 $err_username = "";
	  $hasError = false;
	 $email        = "";
	 $err_email    = "";
	  $hasError = false;
	 $password     = "";
	 $err_password = "";
	  $hasError = false;
	 
	 if(isset($_POST["sign_up"]))
	 {
		 if(empty($_POST["name"]))
		 {
			 $hasError = true;
			 $err_name = "Name Required";
		 }
		 else
		 {
			 $name = $_POST["name"];
		 }
		 if(empty($_POST["username"]))
		 {
			 $hasError = true;
			 $err_username = "Username Required";
		 }
		 else
		 {
			 $name = $_POST["username"];
		 }
		 
		 if(empty($_POST["password"]))
		 {
			 $hasError = true;
			 $err_password = "Password Required";
		 }
		 else
		 {
			 $name = $_POST["password"];
		 }
		 if(empty($_POST["email"]))
		 {
			 $hasError = true;
			 $err_email = "Email Required";
		 }
		 else
		 {
			 $name = $_POST["email"];
		 }
		 
		 ///other validations
		 
		 if(!hasError)
		 {
			 insertUser($name,$username,$password,$email);
		 }
	 }
	 if(isset($_POST["btn_login"]))
	 {
		if( authenticateUser($_POST["username"],$_POST["password"])) 
		{
			header("Location:dashboard.php");
			
		}
		echo "Invalid username or password";
	 }
	 
	 function indertUser($name,$username,$password,$email)
	 {
		 $query = "INSERT INTO users VALUES(NULL,'$name','$username','$password','$email')";
		 execute($query);
	 }
	 
	 function authenticateUser($username,$password)
	 {
		 $query = "select *from users where username='$username' and password='$password'";
		 $result = get($query);
		 if(count($result) >0)
		 {
			 return $result[0];
		 }
		 return false;
	 }

?>