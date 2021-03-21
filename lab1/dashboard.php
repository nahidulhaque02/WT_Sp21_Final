<?php
  if(!isset($_COOKIE["username"])){
	  header("Location: index.php");
  }
?>

<html>
  <h1>Welcome <?php echo $_COOKIE["username"];?></h1>
</html>