<!DOCTYPE html>
<html>
  <?php require 'php/connection.php';
    require 'php/navbar.php';
     $event_id=intval($_GET[ 'event_id']);
      $query_eventdetails="SELECT * FROM tbl_event WHERE event_id='$event_id'" ;
       $result_eventdetails=$connection->query($query_eventdetails); $eventdetails=$result_eventdetails->fetch_all(MYSQLI_ASSOC); 
       $query_ticketdetails="SELECT tbl_tickettype.type_name,tbl_tickettype.type_admits,tbl_tickettype.type_available,COUNT(tbl_ticket.type_id),tbl_tickettype.tickettype_price FROM tbl_tickettype LEFT OUTER JOIN tbl_ticket ON tbl_tickettype.type_id=tbl_ticket.type_id WHERE tbl_tickettype.event_id='$event_id'"; 
       $result_ticketdetails=$connection->query($query_ticketdetails); ?>
  <body>
    <br><br>
    <div class="container">
      <div  style="column-count: 2;">
        <div class="details-left-info simpleCart_shelfItem">
          <div class="header">
            <h3 class="tittle"><?php Echo $eventdetails[0]['event_name']?></h3>
          </div>
          <a style="width: 70px;text-align: right;">Venue:  </a><?php Echo $eventdetails[0][ 'event_venue']?><br>
          <a style="width: 70px;text-align: right;">Date:   </a><?php Echo $eventdetails[0][ 'event_date']?><br>
          <a style="width: 70px;text-align: right;">Capcity:  </a><?php Echo $eventdetails[0][ 'event_capacity']?><br>
        </div>
        <button class="btn btn-success btn-md" type="submit"><a href="edit_event.php?event_id=<?php echo $event_id; ?>">Edit Event</a> </button><br><br><br>
      </div>
      <div class="latest products">
        <br><br><br>
        <h5>More Information</h5>
        <p><?php Echo $eventdetails[0][ 'event_info']?> </p>
      </div>
      <br>
      <br>
    </div>
    <div class="footer copy navbar-fixed-bottom">
      <p>&copy; 2015 My_Albums. All Rights Reserved | Design by <a>SE Project</a> </p>
    </div>
  </body>
</html>