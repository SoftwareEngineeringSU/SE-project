
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


				    </div>
						<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>

					 </div>


			  <!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->

					

			        <div class="clearfix"> </div>

			    </div>
		    </div>
		</div>
	


		  <!--banner-slider-->
		     <div class="banner">
				<div id="top" class="callbacks_container">
					<ul class="rslides" id="slider">


<?php 
	include 'php/connection.php';
	$sql_home="SELECT * FROM `tbl_event`";
    $home=mysqli_query($connection,$sql_home);

    if (!$home)
    echo "not working";
    else {
    foreach($home as $home)
    { 
    ?>

    	<form action="single.php"><br><br>
    	<input type="hidden" name="event_name" value="<?php echo $home['event_name']; ?>">
 		<li><input type=image value="gdsagsa" src="data:image/jpeg;base64,<?php echo base64_encode( $home['image'] ); ?>"   class="image" alt="" /></li>
    	</form>
    <?php 
    }
    } ?>
					</ul>
	  	         </div>	
				</div>	
		       <script src="js/responsiveslides.min.js"></script>
			     <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 3
			      $("#slider").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			
			</div>	


			<!--//end-banner-->


	<!--start-albums-->
 <div class="clearfix"></div>
  <div  class="albums">
  	<h3 style="margin-left: 38.5%;" class="tittle">Upcoming Events</h3>
	<div style="column-count: 2;" class="container">
				
				<?php 
				include 'php/connection.php';
				$sql_home="SELECT * FROM `tbl_event` LIMIT 3;";
			    $home=mysqli_query($connection,$sql_home);

			    if (!$home)
			    echo "not working";
			    else {
			    foreach($home as $home)
			    { 
			    ?>

			<div >
				<div class="col-md-4 music-grids">
					<figure class="effect-bubba">

						<img src="data:image/jpeg;base64,<?php echo base64_encode( $home['image'] ); ?>"   class="image" alt="" />
						<figcaption>
							<h4  onclick="javascript:window.location = 'single.php?event_name=<?php echo $home['event_name']; ?>';"><?php echo $home['event_name']; ?></h4>
							<p></p>	
						</figcaption>			
					</figure>		
				</div>

				<div class="clearfix"></div>
			</div>

				    <?php 
				    }
				    } ?>
						

		</div>
	</div>
	<!--//music-->





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