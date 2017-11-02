<html>

<body>
  <?php include 'php/navbar.php'; include 'php/connection.php';?>
  <br>
  <div class="banner">
    <div id="top" class="callbacks_container">
      <ul class="rslides" id="slider">
        <?php $sql_home="SELECT * FROM `tbl_event` WHERE DATE(`event_date`) > DATE(NOW()) LIMIT 4" ;$home=mysqli_query($connection,$sql_home); if (!$home)echo "not working"; else { foreach($home as $home) { ?>
        <form action="single.php">
          <input type="hidden" name="event_name" value="<?php echo $home['event_name']; ?>">
          <li>
            <input type=image value="gdsagsa" src="data:image/jpeg;base64,<?php echo base64_encode( $home['image'] ); ?>" class="image" style="height: 500px;" /> </li>
        </form>
        <?php }} ?> </ul>
    </div>
  </div>
  <div class="clearfix"></div>
  <div>
    <h3 style="text-align: center;font-size: 30;" class="tittle">Some upcoming events</h3>
    <div style="column-count: 2;" class="well-lg">
      <?php $sql_home="SELECT * FROM `tbl_event` WHERE DATE(`event_date`) > DATE(NOW()) LIMIT 3;" ;$home=mysqli_query($connection,$sql_home);if(!$home) echo "not working";else{foreach($home as $home){ ?>
      <div class="form-row" style="margin-bottom: 10px;">
        <div class="music-grids">
          <figure class="effect-bubba"> <img style="object-fit: cover;" src="data:image/jpeg;base64,<?php echo base64_encode( $home['image'] ); ?>" class="image" alt="" />
            <figcaption>
              <h4 onclick="javascript:window.location = 'single.php?event_name=<?php echo $home['event_name']; ?>';"><?php echo $home['event_name']; ?></h4>
              <p></p>
            </figcaption>
          </figure>
        </div>
      </div>
      <?php }} ?> </div>
  </div>
  <br>
  <div class="footer copy"><p>&copy; 2017 . All Rights Reserved | Design by <a>SE Project</a> </p></div>
  <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span> </a>
</body>

</html>