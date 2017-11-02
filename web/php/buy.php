<?php
session_start();
include "connection.php";
if($_SESSION)
{
$user_email=$_SESSION['email'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$event_id=$_POST['event_id'];
include 'connection.php';
$time_sold=date('Y-m-d H:i:s');
$mpesa_code=$_POST['mpesa_code'];

$sql="INSERT INTO `tbl_ticket`( `event_id`, `user_email`, `time_sold`, `price`, `quantity`, `mpesa_code`) 
					VALUES ( '$event_id', '$user_email', '$time_sold', '$price', '$quantity', '$mpesa_code')";
mysqli_query($connection,$sql); 
echo "<script>window.location='../index.php';alert('Purchase will be confirmed')</script>";
}
else
{
echo "<script>window.location='../login.php';</script>";
}
?>