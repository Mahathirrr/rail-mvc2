<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rail Pass Management System || Pass Page</title>
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!-- Custom Theme files -->
    <link href="../Assets/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="../Assets/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="../Assets/css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
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
            <?php include_once('../header.php'); ?>
            <!-- //navigation -->
            <!-- banner-text -->
            <div class="banner-text agileinfo about-bnrtext">
                <div class="container">
                    <h2><a href="index.php">Home</a> / Download Pass</h2>
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
                <h3>Download Pass</h3>
            </div>
            <div class="contact-agileinfo">
                <div class="col-md-7 contact-form wthree">
                    <form action="#" method="post">
                        <input id="searchdata" type="text" name="searchdata" placeholder="Search by Pass Number" required="true">
                        <button style="padding-top: 14px;" type="submit" class="btn btn-primary" name="search" id="submit">Search</button>
                    </form>
                </div>

                <div class="clearfix"> </div>
                <div class="table-responsive">
                    <?php if (isset($model['searchData'])): ?>
                        <h4 style="padding-bottom: 20px;">Result against "<?= $model['searchData'] ?>" keyword </h4>
                    <?php endif; ?>
                    <table border="2" class="table table-bordered" style="font-size: 18px;">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Pass Number</th>
                                <th>Full Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Identity Type</th>
                                <th>Identity Card Number</th>
                                <th>Category</th>
                                <th>Source</th>
                                <th>Destination</th>
                                <th>Train Class</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Way Type</th>
                                <th>Cost</th>
                                <th>Creation Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($model['passes']) && !empty($model['passes'])): ?>
                                <?php $cnt = 1; ?>
                                <?php foreach ($model['passes'] as $pass): ?>
                                    <tr>
                     </tr>
						<td><?= $cnt ?></td>
						<td><?= $pass->PassNumber ?></td>
						<td><?= $pass->FullName ?></td>
						<td><?= $pass->ContactNumber ?></td>
						<td><?= $pass->Email ?></td>
						<td><?= $pass->IdentityType ?></td>
						<td><?= $pass->IdentityCardno ?></td>
						<td><?= $pass->Category ?></td>
						<td><?= $pass->Source ?></td>
						<td><?= $pass->Destination ?></td>
						<td><?= $pass->TrainClass ?></td>
						<td><?= $pass->FromDate ?></td>
						<td><?= $pass->ToDate ?></td>
						<td><?= $pass->wayType ?></td>
						<td><?= $pass->Cost ?></td>
						<td><?= $pass->PasscreationDate ?></td>
						<td>
							<a href="/view-pass-detail?viewid=<?= $pass->ID ?>" class="btn btn-primary">View</a>
						</td>
                     </tr>
                                    <?php $cnt++; ?>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="17">No record found against this search</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- //contact -->

    <?php include_once('../footer.php'); ?>

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
    <script type="text/javascript" src="js/numscroller-1.0.js"></script>
    <!-- //Progressive-Effects-Animation-JavaScript -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
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
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript -->
    <script src="../Assets/js/bootstrap.js"></script>
</body>
</html>