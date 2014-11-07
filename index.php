<?

$page = 'home';

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="images\favicon.ico">
		<title>Loop</title>
		<? include('partials/head.php'); ?>
        
	</head>
	<body>

		<? include('partials/nav.php'); ?>
		<!-- Main jumbotron for a primary marketing message or call to action -->

	    <div class="jumbotron header-jumbotron">
	      <div class="container">
	      	<div class="row">
	      		<div id="cta-title" class="col-xs-4 col-lg-4 col-lg-offset-1">
			        <div class="text">
						<img src="images/LoopLogoWords.png" class="founders" alt="Loop">
						<br><br>
						<h3>Yes. No.<br> Get an answer. <br> Close the loop.</h3>
						<br>
					</div>

				    
					<p class="button-row">
				      <a href="https://itunes.apple.com/us/app/eko/id527585399?mt=8&uo=4", target="itunes_store" button type="button" class="btn btn2-default btn-store2" style="font-size: 18px">Download The App</a>
				    </p>
		        </div>

		        
		         <div class="col-sm-6 screenshot-device">
		        	<img src="images/landing.png" class="img-responsive" alt="Responsive image">
		        </div>
		        

		      </div>
	    	</div>
	    </div>


		
		<div class="section team full-panel hidden-xs">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-7 screenshot-device3">
					<p>&nbsp;</p>
		        	<img src="images/2ndpanel.png" class="img-responsive" alt="Responsive image">
						
					</div>
					<div class="col-sm-5 padded-text">
						<h3>It's that simple.</h3>
						<p>Saying yes or no has never been easier.<br>Add a message if you'd like.</p>
						<p class="button-row">
						<p>&nbsp;</p>
				      <a href="https://itunes.apple.com/us/app/eko/id527585399?mt=8&uo=4", target="itunes_store" button type="button" class="btn btn-default btn-store"> Get The App</a>
					</p>
					</div>
					
				</div>
			</div>
		</div>

		
		<!-- desktop section -->
		<div class="section stickers full-panel hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-1 padded-text"></div>
					<div class="col-sm-4 padded-text">
						<h3>Loops stay forever.</h3>
						<p>All Loops are archived for easy access.<br>Never lose track of committments again.
							<p>&nbsp;</p>
							<p class="button-row">
				      		<a href="https://itunes.apple.com/us/app/eko/id527585399?mt=8&uo=4", target="itunes_store" button type="button" class="btn btn-default btn-store3">Get The App</a>
							</p>
					</div>

					<div class="col-sm-7 screenshot-device2">
						<img src="images/3rdpanel.png" class="img-responsive" alt="Responsive image">
					</div>
	
				</div>
			</div>
		</div>

		
		<? include('partials/footer.php'); ?>
		<? include('partials/scripts.php'); ?>
	</body>
</html>
