<?php
session_start();
include 'connection.php';

//getting variables from form
$email=$_POST['email'];
$password=md5($_POST['password']);

//verification  through database
$sql="SELECT * FROM `users` WHERE `email`='$email' and `password`='$password'";
$result=mysqli_query($connection,$sql);

if ($result)
{
foreach ($result as $result) 
{
	//setting session variables
$_SESSION['user_type']=$result['user_type'];
$_SESSION['email']=$result['email'];
echo "<script>window.location='../index.php';</script>";
}}
else{
echo "<script>window.location='../login.php';alert('Invalid Login');</script>";	
}



?>
