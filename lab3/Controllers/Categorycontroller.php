<?php

     require_once 'Models/db_config.php';
	 
	 if(isset($_POST["add_category"]))
	 {
		 insertCategory ($_POST["name"]);
	 }
	 
	 function insertCategory($name)
	 {
		 $query = "insert into categories values(NULL,'$name')";
		 execute($query);
		 header("Location:allcategories.php");
		 
	 }
	 function getCategory($id)
	 {
		 $query = "select * form categories where id = $id";
		 get($query);
		 if(count($result) >0)
		 {
			 return $result[0];
		 }
		 return false;
	 }
	 function getAllCategories()
	 {
		 $query = "select * from categories";
		 $result = get($query);
		 return $result;
	 }

?>