<!DOCTYPE HTML>
<html>
  <body>
    <script src="js/bootstrap.min.js"></script>
    <?php include 'php/navbar.php'; include 'php/connection.php'; $event_name=$_GET[ 'event_name']; $sql_select="SELECT * FROM `tbl_event` WHERE `event_name` = '$event_name'" ; $sql_single=mysqli_query($connection,$sql_select); foreach($sql_single as $a) {?>
    <div class="grid_3 grid_5">
      <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
        <div class="container">
          <ul id="myTab" class="nav nav-tabs" role="tablist">
            <li role="presentation" ><a>Description</a></li>
            <li role="presentation"><a>Payment</a></li>
          </ul>
        </div>
        <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
            <div class="container">
              <h3 class="tittle"><?php echo $event_name; ?></h3>
              <div class="col-md-12">
                <div class="col-md-9"> <img src="data:image/jpeg;base64,<?php echo base64_encode( $a['image'] ); ?>" class="image" alt="" /> </div>
                <div class="col-md-3">
                  <h2>Quick Overview:</h2><br>
                  <p>Venue :<?php echo $a[ 'event_venue']; ?></p>
                  <p>Date :<?php echo $a[ 'event_date']; ?></p>
                  <p>Time :<?php echo $a[ 'event_time']; ?></p>
                  <br>
                  <a class="btn btn-info" href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Buy Ticket</a>
                </div>
              </div>
              <div class="latest products col-md-12 row" style="margin-top: 30px;">
                <h5>More Information</h5>
                <p><?php echo $a[ 'event_info']; ?></p><br><br><br>
              </div>
            </div>
            <div class="footer copy navbar-fixed-bottom">
              <p>&copy; 2015 My_Albums. All Rights Reserved | Design by <a>SE Project</a> </p>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
            <div class="container">
              <div class="card w-75 ">
                <div align="center" class="card-body" >
                  <h3>Lipa na M-PESA</h3>
                  <p>1. Select “Pay Bill“</p>
                  <p>2. Select “Enter Business no.“, Enter Lipa na M-PESA PayBill Number xxxxxx and press “OK”</p>
                  <p>3. Select “Enter Account no.“, Enter your  Number (e.g. 07xx xxx xxx) press “OK”</p>
                  <p>4. “Enter Amount“, between KSh100 and 35,000 and press “OK”</p>
                  <p>5. Enter your M-PESA PIN and press “OK”</p>
                  <p>6. Confirm all the details are correct and press “OK”</p>
                  <p>7. Insert the Mpesa Code below</p><br><br><br>
                </div>
              </div>
              <div style="column-count: 3;">
                <div class="price_single">
                  <h3>Ticket Price</h3>
                    <p class="availability">Availability: <span class="color">In stock</span> </p>
                    <span class="actual item_price">$<?php echo $a['ticket_price']; ?></span><br><br><br>
                  </div>
                  <div class="quantity_box">
                      <h3>Quick Overview:</h3>
                      <p>Event :<?php echo $a[ 'event_name']; ?></p>
                      <p>Venue :<?php echo $a[ 'event_venue']; ?></p>
                      <p>Date :<?php echo $a[ 'event_date']; ?></p>
                      <p>Time :<?php echo $a[ 'event_time']; ?></p>
                    </div>
                    <div>
                      <form method="POST" action="php/buy.php" class="form-group">
                        <input type="hidden" value="<?php echo $a['ticket_price']; ?>" name="price">
                        <input type="hidden" value="<?php echo $a['event_id']; ?>" name="event_id">
                        <a>Quantity:</a>
                        <select name="quantity" class="btn btn-default">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                        </select>
                        <input type="text" name="mpesa_code" required placeholder="Input mpesa code" style="margin-top: 10px;">
                        <input type="submit" value="Buy" class="btn btn-default" style="margin-top: 10px;">
                      </form>
              </div>
                
              </div>
              </div>
                 <div class="footer copy navbar-fixed-bottom">
              <p>&copy; 2015 My_Albums. All Rights Reserved | Design by <a>SE Project</a> </p>
            </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>
    <?php }?>
  </body>
</html>