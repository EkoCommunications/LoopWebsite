<?

$page = 'contact';

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Loop | Contact Us</title>
		<? include('partials/head.php'); ?>
		<link href="css/jobs.css" rel="stylesheet" media="screen">
	</head>
	<body>

		<? include('partials/nav.php'); ?>

		<!-- Main jumbotron for a primary marketing message or call to action -->

<div id="hero-text" class="col-sm-9">
					<h1>Contact us</h1>
</div>
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
  
	</div> <!-- /container -->
		<? include('partials/footer.php'); ?>
		<? include('partials/scripts.php'); ?>
	</body>
</html>
