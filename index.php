<?

$page = 'home';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Loop</title>
		<? include('partials/head.php'); ?>
        
	</head>
	<body>

		<? include('partials/nav.php'); ?>
		<!-- Main jumbotron for a primary marketing message or call to action -->

	    <div class="jumbotron header-jumbotron">
	      <div class="container">
	      	<div class="row">
	      		<div id="cta-title" class="col-sm-6 col-lg-5 col-lg-offset-1">
			        <div class="text">
						<h1>Loop</h1>
						<h3>Send requests.<br />Get approval.<br />Stay in the loop.</h3>
					</div>

				    
					<p class="button-row">
				      <a href="https://itunes.apple.com/us/app/eko/id527585399?mt=8&uo=4", target="itunes_store" button type="button" class="btn btn-default btn-store"><img src="images/badge-store-ios.svg" height="30" width="30"> App Store</a>
				      <a href="https://play.google.com/store/apps/details?id=com.ekoapp.eko" target="_blank" button type="button" class="btn btn-default btn-store pull-right"><img src="images/badge-store-play.svg" height="30" width="30"> Play Store</a>
				    </p>
		        </div>

		        <div class="col-sm-6 screenshot-device">
		        	<img src="images/cross-platform-phone.png" class="img-responsive" alt="Responsive image">
		        </div>

		      </div>
	    	</div>
	    </div>


		
		<div class="section communicate">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 single-panel">
						<img src="images/communicate_section_bg.jpg" class="img-responsive" alt="Responsive image">
					</div>
					<div class="col-sm-5 col-sm-offset-1 panel-content">
						<h3>Stay Productive</h3>
						<p>Keep workflow simple and organized, so you can do what you do best.</p>
						<p class="button-row">
				      <a href="https://itunes.apple.com/us/app/eko/id527585399?mt=8&uo=4", target="itunes_store" button type="button" class="btn btn-default btn-store2">Get The App</a>
					</p>
					</div>
				</div>
			</div>
		</div>

		<!-- mobile section -->
		<div class="section visible-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 team full-panel"></div>
					<div class="col-sm-6 padded-text wood">
						<h3>Stay Social</h3>
						<p>Never miss a commitment again, whether it's dinner, movies, or simply hanging out.</p>
					</div>
				</div>
			</div>
		</div>



	
	    <!-- mobile section -->
		<div class="section visible-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 stickers full-panel"></div>
					<div class="col-sm-6 padded-text purple">
						<h3>Stay Social</h3>
						<p>Never miss a commitment again, whether it's dinner, movies, or just hanging out.</p>
					</div>
					</div>
					<div></div>
					<p class="button-row">
				      <a href="https://itunes.apple.com/us/app/eko/id527585399?mt=8&uo=4", target="itunes_store" button type="button" class="btn btn-default btn-store"> Get The App</a>
					</p>
				</div>
			</div>
		</div>
		
		<!-- desktop section -->
		<div class="section stickers full-panel hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 padded-text">
						<h3>Stay Social</h3>
						<p>Never miss a commitment again, whether it's dinner, movies, or just hanging out.</p>
							<p>&nbsp;</p>
							<p class="button-row">
				      		<a href="https://itunes.apple.com/us/app/eko/id527585399?mt=8&uo=4", target="itunes_store" button type="button" class="btn btn-default btn-store">Get The App</a>
							</p>
					</div>
					<div class="col-sm-7"></div>
				</div>
			</div>
		</div>

		
		<? include('partials/footer.php'); ?>
		<? include('partials/scripts.php'); ?>
	</body>
</html>
