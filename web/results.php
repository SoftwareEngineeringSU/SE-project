<!DOCTYPE HTML>
<html>
<?php include 'php/navbar.php'; include 'php/connection.php';?>
<div class="content-grids" >
  <div class="container">
    <h3 class="tittle">Search Results</h3>
    <?php $search=$_GET[ 'search']; $sql_home="SELECT * FROM `tbl_event` where `event_name` like '%$search%' AND DATE(`event_date`) > DATE(NOW())" ;$home=mysqli_query($connection,$sql_home); if (!$home)echo "not working"; else { foreach($home as $home) { ?>
    <div style="width:340px;column-count: auto;" class="content-grid" onclick="javascript:window.location = 'single.php?event_name=<?php echo $home['event_name']; ?>';"> 
    	<a class="play-icon popup-with-zoom-anim">
			<img  src="data:image/jpeg;base64,<?php echo base64_encode( $home['image'] ); ?>" title="allbum-name" /></a>
      <a style="float: left;"><?php echo $home[ 'event_name']; ?> </a>
      <a style="float: right;"> <?php echo $home[ 'event_date']; ?> </a>
      <br> <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Buy Ticket</a></a>
    </div>
    <?php }} ?>
	</div>
</div>
<div class="footer copy" style="bottom: 0;position: absolute; width: 100%;" ><p>&copy; 2017. All Rights Reserved | Design by <a>SE Project</a> </p></div>
</html>
