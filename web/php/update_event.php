<?php 
if (isset($_POST['submit'])) {	
include 'connection.php';

$event_name=$_POST['Name'];
$event_time=$_POST['time'];
$event_date=$_POST['date'];
$event_venue=$_POST['venue'];
$event_info=mysqli_real_escape_string($connection,$_POST['description']);
$event_capacity=$_POST['capacity'];
$event_id=$_GET['id'];

$sql="UPDATE `tbl_event` 
        SET `event_name`='$event_name',`event_date`='$event_date',`event_time`='$event_time',`event_venue`='$event_venue',`event_info`='$event_info',`event_capacity`='$event_capacity'
        WHERE `event_id`='$event_id'";
mysqli_query($connection,$sql);
echo "<script>window.location='../more_details.php?event_id=".$event_id."'</script>"; 

}
?>