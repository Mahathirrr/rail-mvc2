<?php
/**
 * @var array $model
 */
$page = $model['page'];
?>
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Railway Pass Management System || Contact Us Page</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="Assets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="Assets/css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="Assets/css/font-awesome.css" rel="stylesheet">
<!-- //Custom Theme files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
	<!-- banner -->
	<div class="agileits-banner">
		<div class="bnr-agileinfo">
			<!-- navigation -->
			<?php include_once('../header.php');?>
			<!-- //navigation -->
			<!-- banner-text -->
			<div class="banner-text agileinfo about-bnrtext">
				<div class="container">
					<h2><a href="index.php">Home</a> / Contact</h2>
				</div>
			</div>
			<!-- //banner-text -->
		</div>
	</div>
	<!-- //banner -->

	<!-- contact -->
	<div class="contact agileits">
		<div class="container">
			<div class="agileits-title">
				<h3>Contact Us</h3>
			</div>
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-form wthree">
					<form action="#" method="post">
						<input type="text" name="name" placeholder="Name" required="">

						<input class="email" type="email" name="email" placeholder="Email" required="">
						<textarea placeholder="Message" name="message" required=""></textarea>
						<input type="submit" name="submit" value="SUBMIT">
					</form>
				</div>
				<div class="col-md-4 contact-right wthree">
					<div class="contact-text w3-agileits">
						<h4>GET IN TOUCH :</h4>
						<p><i class="fa fa-map-marker"></i> <?= $page->PageDescription ?></p>
                        <p><i class="fa fa-phone"></i> Mobile Number : <?= $page->MobileNumber ?></p>
                        <p><i class="fa fa-envelope-o"></i> Email : <?= $page->Email ?></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
	<!-- //contact -->


<?php include_once('../footer.php');?>

	<!-- js -->
	<script src="Assets/js/jquery-2.2.3.min.js"></script>
	<script src="Assets/js/SmoothScroll.min.js"></script>
	<script src="Assets/js/jarallax.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //js -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="../Assets/js/move-top.js"></script>
	<script type="text/javascript" src="../Assets/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Assets/js/bootstrap.js"></script>
</body>
</html>