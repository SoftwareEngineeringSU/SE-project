<!DOCTYPE HTML>
<html style="font-family: Roboto Light">
<head>
		<title>My Albums a Entertainment Category  Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="My Albums Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />	
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/simpleCart.min.js"> </script>	
		<!--web-fonts-->
		 <link href='http://fonts.googleapis.com/css?family=Jockey+One|Open+Sans:300italic,400italic,600italic,400,600,700' rel='stylesheet' type='text/css'>
		 <link href='http://fonts.googleapis.com/css?family=Audiowide|Open+Sans:300italic,400italic,600italic,700,300,600,400' rel='stylesheet' type='text/css'>
		<!--//web-fonts-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>


<body>

	    <!--start-header-->

<div class="header" id="home">
                  <!--NAV-->
    <div class="top-nav">
          <div class="container">
            <div class="home"><a href="index.php"><i class="glyphicon glyphicon-home"> </i></a></div>
            <span class="menu"> </span>
            <div class="top-menu">

        <nav class="navigation">
            <ul class="cl-effect-16">
                <li><a href="index.php">Home</a></li>                              
                <li><a href="user.html">Register</a></li>
                <li><a href="event.html">Make an event</a></li>
                <div class="clearfix"> </div>
            </ul>
            <!-- script-menu -->
            <script>
            $( "span.menu" ).click(function() {$( ".top-menu" ).slideToggle( "slow", function() { });});
          </script>
            <!-- script-menu -->
        </nav>  

            </div>
          </div>
    </div>
  </div>


<div id="sb-search" class="sb-search">
			<form>
				<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
				<input class="sb-search-submit" type="submit" value="">
				<span class="sb-icon-search"> </span>
			</form>


			<!-- search-scripts -->
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			<script>
			new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<!-- //search-scripts -->

 </div>
<div class="clearfix"> </div>

	

	<?php
	include 'php/connection.php';
	$event_name=$_GET['event_name'];
	$sql_select="SELECT * FROM `tbl_event` WHERE `event_name` = '$event_name'";
	$sql_single=mysqli_query($connection,$sql_select);
	foreach($sql_single as $a)
	{?>
		
	 
	


	<!--start-albums-->
	 <div class="clearfix"></div>
    <!--single-->
	<div class="single contact">
		<div class="container">
		  <h3 class="tittle"><?php echo $event_name; ?></h3>
			<div class="single-main">
				<div class="col-md-9 single-main-left">
					<div class="sngl-top">
						<div class="col-md-5 single-top-left">	
						
							<img  src="data:image/jpeg;base64,<?php echo base64_encode( $a['image'] ); ?>"   class="image" alt="" />	
					 </div>	
					 <div class="col-md-7 single-top-right">
						<div style="column-count: 2;" class="details-left-info simpleCart_shelfItem">
							<h3>Ticket Price</h3>
							<p class="availability">Availability: <span class="color">In stock</span></p>
							<div class="price_single">
							<span class="actual item_price">$<?php echo $a['ticket_price']; ?></span>
							</div><br><br><br><br><br><br>
							<h2 class="quick">Quick Overview:</h2>
							<p class="quick_desc">
								<b>Venue :  </b> <?php echo $a['event_venue']; ?><br>
								<b>Date  :  </b> <?php echo $a['event_date']; ?><br>
								<b>Time  :  </b> <?php echo $a['event_time']; ?><br>
							</p>
							
							<div class="quantity_box">
								<ul class="product-qty">
												



								<a href="#">BOOK TICKET</a><br><br>

								</ul>
							</div>
								<div class="clearfix"> </div>
								<div class="single-but item_add">
									<input type="submit" value="Buy"/>
								</div>
							</div>
						</div>
						<p>Tickets</p><br>
							<table class="w3-table-all">
						   <TR>
						      <TH COLSPAN="5"><BR><H3>Tickets</H3>
						      </TH>
						   </TR>
						   <TH COLSPAN="5"><BR>
						   	<H3>Early Bird Ticket</H3>
						      </TH>
						   <TR class="w3-light-lavender w3-hover-red">
						 
						      <TH>Type of ticket</TH>
						       <TH>Dates of Availabilty</TH>
						       <TH>Quantity</TH>

						   </TR>
						   <TR class="w3-hover-grey" ALIGN="CENTER">
						      
						      <TD>
									<select>
										<option>VIP</option>
										<option>Regular</option>
										
										
									</select> </TD>
						      <TD>.....</TD>
						      <TD><span>Quantity:</span>
									<select>
										<option>1</option>
										<option>5</option>
										<option>10</option>
										<option>15</option>
										
									</select> </TD>
						   </TR>
						   <TH COLSPAN="5"><BR>
						   	<H3>Advanced</H3></BR></TH>
						   	<TR class="w3-hover-blue">
						 
						      <TH>Type of ticket</TH>
						       <TH>Dates of Availabilty</TH>
						       <TH>Quantity</TH>

						   </TR>

						   <TR  class="w3-hover-text-lavender" ALIGN="CENTER"></TR>


						      <TD><select>
										<option>VIP</option>
										<option>Regular</option>
										
										
									</select> </TD>
						      <TD>.....</TD>
						      <TD><span>Quantity:</span>
									<select>
										<option>1</option>
										<option>5</option>
										<option>10</option>
										<option>15</option>
										
									</select> </TD>
						   </TR>
						</TABLE>
						
						<div class="clearfix"></div>
					</div>
						<div class="latest products">
							 <h5>More Information</h5>
							 <p><?php echo $a['event_info']; ?><br></p>
			
						   </div>
					</div>
				
			</div>
	     </div>
	     <br><br><br><br>

<?php
}?>
  
</div>

	 <!--footer-->
<div class="footer">
	  <div class="container">
			<div class="footer-top">
			  <div class="col-md-4 amet-sed">


				<h4>Follow Us</h4>
				 <ul class="social">
		                    <li><a  href="#" ><i class="fb"> </i> </a></li>
		                    <li><a  href="#" ><i  class="rss"></i></a></li>
		                    <li><a  href="#" ><i class="twitter"></i></a></li>
		                    <li><a href="#"><i class="dribble"></i></a></li>
		                    <div class="clearfix"></div>
		                </ul>
						<ul class="social-in">
							<li><i class="glyphicon glyphicon-home two"> </i>Madaraka</li>
							<li><i class="glyphicon glyphicon-earphone"> </i> 0700 000 000</li>
							<li><a href="mailto:contact@example.com"><i class="glyphicon glyphicon-envelope"> </i> strathmore.edu</a></li>
							<div class="clearfix"> </div>
						</ul>
				</div>
				
				<div class="clearfix"> </div>
			</div>




			 <div class="copy">
						<p>&copy; 2015 My_Albums. All Rights Reserved | Design by <a>SE Project</a> </p>
		        </div>
			</div>
		</div>

	<!--start-smoth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>
