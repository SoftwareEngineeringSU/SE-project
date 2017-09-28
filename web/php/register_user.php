<?php 

	include "connection.php";


	$first_name		=$_POST['first_name'];
	$last_name		=$_POST['last_name'];
	$gender			=$_POST['gender'];
	$user_email		=$_POST['user_email'];
	$user_phone		=$_POST['user_phone'];
	$password		=md5($_POST['password']);


	$sql_user="INSERT INTO `tbl_users`(`user_email`, `first_name`, `last_name`, `gender`, `password`, `phone`)
			   VALUES 				  ('$user_email','$first_name','$last_name','$gender','$password','$user_phone')";

		
	mysqli_query($connection,$sql_user);
	echo "<script> window.location='/web/user.html';</script>";
	$connection->close();
 

 ?>