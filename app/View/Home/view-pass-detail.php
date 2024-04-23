<html lang="en">
<head>
<title>Rail Pass Management System || View Pass Page</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../Assets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../Assets/css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="../Assets/css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- //Custom Theme files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
<script type="text/javascript">
    function PrintDiv() {
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=1000,height=1000');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
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
					<h2><a href="index.php">Home</a> / View Pass</h2>
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
                <h3>View Pass</h3>
            </div>
            <div class="contact-agileinfo">
                <div class="clearfix"> </div>
                <div class="table-responsive" id="divToPrint">
                    <table border="2" class="table table-bordered" style="font-size: 18px;">
                        <tr align="center">
                            <td colspan="6" style="font-size:20px;color:blue">Pass ID: <?= $model['PassNumber']?></td>
                        </tr>
                        <tr>
                            <th scope>Category</th>
                            <td colspan="3"><?= $model['Category']?></td>
                        </tr>
                        <tr>
                            <th scope>Photo</th>
                            <td colspan="3"><img src="admin/images/<?= $model['ProfileImage'] ?>" width="50" height="50"></td>
                        </tr>
                        <tr>
                            <th scope>Full Name</th>
                            <td><?= $model['FullName'] ?></td>
                            <th scope>Class Avail</th>
                            <td><?= $model['TrainClass'] ?></td>
                        </tr>
                        <tr>
                            <th scope>Mobile Number</th>
                            <td><?= $model['ContactNumber'] ?></td>
							<th scope>Email</th>
							<td><?= $model['Email'] ?></td>
						</tr>
						<tr>
							<th scope>Identify Type </th>
							<td><?= $model['IdentityType'] ?></td>
							<th scope>Identity Card Number </th>
							<td><?= $model['IdentityCardno'] ?></td>
						</tr>
						<tr>
							<th scope>Source</th>
							<td><?= $model['Source'] ?></td>
							<th scope>Destination</th>
							<td><?= $model['Destination'] ?></td>
						</tr>
						<tr>
							<th scope>From Date</th>
							<td><?= $model['FromDate'] ?></td>
							<th scope>To Date</th>
							<td><?= $model['ToDate'] ?></td>
						</tr>
						<tr>
							<th scope>Cost</th>
							<td><?= $model['Cost'] ?></td>
							<th scope>Way Type</th>
							<td><?= $model['wayType'] ?></td>
						</tr>
						<tr>
							<th scope>Pass Creation Date</th>
							<td colspan="3"><?= $model['PasscreationDate'] ?></td>
						</tr>
				   </table>
				   <input type="button" style="padding-right: 20px" class="btn btn-primary" value="print" onclick="PrintDiv();" /></p>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->


<?php include_once('../footer.php');?>
	<!-- js -->
	<script src="../Assets/js/jquery-2.2.3.min.js"></script>
	<script src="../Assets/js/SmoothScroll.min.js"></script>
	<script src="../Assets/js/jarallax.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //js -->
	<!-- Progressive-Effects-Animation-JavaScript -->
	<script type="text/javascript" src="../Assets/js/numscroller-1.0.js"></script>
	<!-- //Progressive-Effects-Animation-JavaScript -->
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
    <script src="../Assets/js/bootstrap.js"></script>
</body>
</html>