<?php 

$connection = mysqli_connect("localhost", "root", "","project");


$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$venue=$_POST['venue'];
$price=$_POST['price'];
$capacity=$_POST['capacity'];
$info=mysqli_real_escape_string($connection,$_POST['info']);
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));


$sql_event="INSERT INTO `tbl_event`(`event_name`, `event_date`, `event_time`, `event_venue`, `event_info`, `ticket_price`, `image`,`event_capacity`) 
VALUES  				  ('$name'	,		'$date' ,		'$time',	'$venue',		'$info',		'$price', '{$image}' ,'$capacity')";

$result=mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `tbl_event` WHERE `event_name` ='$name'"));
if ($result)
{
echo "<script> window.location='/web/event.php';alert('Event already present in database');</script>";
die();
}

mysqli_query($connection,$sql_event);
echo "<script> window.location='/web/event.php';alert('Event Created');</script>";
?>


