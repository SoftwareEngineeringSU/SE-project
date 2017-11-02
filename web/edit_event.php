<?php 
   require 'php/connection.php';
   require 'php/navbar.php';
   $event_id=intval($_GET['event_id']);
   $query_eventdetails="SELECT * FROM tbl_event WHERE event_id='$event_id'";
   $result_eventdetails=$connection->query($query_eventdetails);
   $eventdetails=$result_eventdetails->fetch_all(MYSQLI_ASSOC);    
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Edit Event</title>
   </head>
   <body>
      <div class="container">
         
         <br>
         <form method="POST" action="php/update_event.php?id=<?php echo $eventdetails[0]['event_id']; ?>" class="form-group">
         	<h3 class="tittle">Edit details</h3>
            <label class="control-label col-sm-2">Event Name</label>
            <div class="col-sm-10 form-group">
               <input required type="text" name="Name" value="<?php echo $eventdetails[0]['event_name']; ?>"><br>
            </div>
            <label class="control-label col-sm-2">Event Date</label>
            <div class="col-sm-10 form-group">
               <input required type="date" name="date" value="<?php echo $eventdetails[0]['event_date']; ?>">
            </div>
            <label class="control-label col-sm-2">Event Time</label>
            <div class="col-sm-10 form-group">
               <input required type="time" name="time" value="<?php echo $eventdetails[0]['event_time']; ?>"><br>
            </div>
            <label class="control-label col-sm-2">Event Venue</label>
            <div class="col-sm-10 form-group">
               <input required type="text" name="venue" value="<?php echo $eventdetails[0]['event_venue']; ?>"><br>
            </div>
            <label class="control-label col-sm-2">Event Capacity</label>
            <div class="col-sm-10 form-group">
               <input required type="number" name="capacity" value="<?php echo $eventdetails[0]['event_capacity']; ?>"><br>
            </div>
            <label class="control-label col-sm-2">Event Description</label>
            <div class="col-sm-10 form-group">
               <textarea required rows="4" cols="60" name="description" >
               <?php echo $eventdetails[0]['event_info']; ?></textarea><br>
            </div>
	        <input class="btn btn-info" type="submit" name="submit">	 
         </form>
      </div>
   </body>
</html>