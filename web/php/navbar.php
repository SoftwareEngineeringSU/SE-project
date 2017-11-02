<head>
   <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />


  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/simpleCart.min.js"> </script> 
  <script src="js/bootstrap.min.js"></script>


   <link href='http://fonts.googleapis.com/css?family=Jockey+One|Open+Sans:300italic,400italic,600italic,400,600,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Audiowide|Open+Sans:300italic,400italic,600italic,700,300,600,400' rel='stylesheet' type='text/css'>

</head>


<body>
   <div class="header" id="home">
      <div class="top-nav">
         <div class="container">
            <div class="home"><a href="index.php"><i class="glyphicon glyphicon-home"> </i></a></div>
            <span class="menu"> </span>
            <div class="top-menu">
               <nav class="navigation">
                  <ul class="cl-effect-16">
                     <li><a href="index.php">Home</a></li>
                     <?php session_start(); if ($_SESSION){if($_SESSION['user_type']=='admin'){  ?>
                     <li><a href="event.php">Create Event</a></li>
                     <li><a href="event_management.php">Manage Events</a></li>
                     <?php }} if($_SESSION){  ?>
                     <li><a href="php/logout.php">Log Out</a></li>
                     <li><p><?php echo $_SESSION['email']; ?></p></li>
                     <?php } else { ?>
                     <li><a href="user.php">Register</a></li>
                     <li><a href="login.php">Login</a></li>
                     <?php } ?>
                     <div class="clearfix"> </div>
                  </ul>
                  <script>
                     $( "span.menu" ).click(function() {$( ".top-menu" ).slideToggle( "slow", function() { });});
                  </script>
               </nav>
            </div>
         </div>
      </div>
   </div>
   </div>
   <div id="sb-search" class="sb-search">
      <form method="GET" action="results.php">
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
   <script>$(function(){$("#slider").responsiveSlides({auto:!0,pager:!0,nav:!1,speed:500,namespace:"callbacks",before:function(){$(".events").append("<li>before event fired.</li>")},after:function(){$(".events").append("<li>after event fired.</li>")}})});</script> 
   <script src="js/responsiveslides.min.js"></script> 
   <script type="text/javascript">jQuery(document).ready(function(t){t(".scroll").click(function(e){e.preventDefault(),t("html,body").animate({scrollTop:t(this.hash).offset().top},1e3)})});</script>
   <script type="text/javascript">$(document).ready(function() {$().UItoTop({ easingType: 'easeOutQuart' });});</script>
   <!--albums.html-->
   <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
   <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
   <script>
      $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });
      });
   </script>