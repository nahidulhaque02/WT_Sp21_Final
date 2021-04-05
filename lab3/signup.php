<?php include 'main_header.php';

     require_once 'Controllers/logincontroller.php';

?>
<!--sign up starts -->
<div class="center-login">

	<h3 class="text text-center">Sign Up</h3>
	
	<form  action ="" method ="post" class="form-horizontal form-material">
	
		<div class="form-group">
		
			<h5 class="text"><b>Name</b></h5> 
			
			<input type="text" name = "name" value ="<?php echo $name;?>" class="form-control"><span><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h5 class="text"><b>Username</b></h5> 
			<input type="text" name ="username" value ="<?php echo $username;?>" class="form-control"><span><?php echo $err_username;?></span>
		</div>
		<div class="form-group">
			<h5 class="text"><b>Password</b></h5> 
			<input type="password" name ="password" value ="<?php echo $password;?>" class="form-control"><span><?php echo $err_password;?></span>
		</div>
		<div class="form-group">
			<h5 class="text"><b>Email</b></h5> 
			 
			<input type="text" name ="email" value ="<?php echo $email;?>" class="form-control"><span><?php echo $err_email;?></span>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name ="sign_up"value="Sign Up" class="form-control">
		</div>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>