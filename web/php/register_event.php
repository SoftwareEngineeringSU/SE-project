<?php 

	include "connection.php";


		$name=$_POST['name'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$venue=$_POST['venue'];
		$price=$_POST['price'];
		$info=$_POST['info'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));


	$sql_event="INSERT INTO `tbl_event`(`event_name`, `event_date`, `event_time`, `event_venue`, `event_info`, `ticket_price`, `image`) 
			   VALUES  				  ('$name'	,		'$date' ,		'$time',	'$venue',		'$info',		'$price', '{$image}' )";


	mysqli_query($connection,$sql_event);
	echo "<script> window.location='/web/event.html';</script>";
	$connection->close();
 ?>


