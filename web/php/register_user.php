<?php 

	include "connection.php";
	
	session_start();
	session_unset();


	$first_name		=$_POST['first_name'];
	$last_name		=$_POST['last_name'];
	$email			=$_POST['email'];
	$phone			=$_POST['phone'];
	$password		=md5($_POST['password']);
	$user_type 		="user";

	$sql_user="INSERT INTO `users`(`first_name`, `last_name`, `email`, `phone`, `password`, `user_type`)
				 VALUES 	('$first_name', '$last_name', '$email', '$phone', '$password', '$user_type')";

	$result=mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `users` WHERE `email`='$email'"));
	if ($result)
	{
	echo "<script> window.location='/web/user.php';alert('User already present in database');</script>";
	die();
	}
		
	$result=mysqli_query($connection,$sql_user);

	$_SESSION['email']=$email;
	$_SESSION['user_type']=$user_type;
	echo "<script> window.location='/web/index.php';</script>";
 

 ?>