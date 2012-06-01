<?php 
	ob_start();
	try {
	include('./includes/title.inc.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include('./includes/head.inc.php'); ?>
  </head>

  <body id="home">
          	
  <?php
  	$file = 'includes/nav.inc.php';
  	if (file_exists($file) && is_readable($file)) {
  		include($file);
  	} else {
  		throw new Exception("$file can't be found");
  	}
  ?>


  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="hero-unit">
    <a href="index.php"><img class="logo" src="images/logo.png" /></a>
  </div>
  
	<div class="container-fluid">

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span12">
          <div class="well">
            <h2>Twitter Bootstrap</h2>
            <p>This template is built upon the wildly popular and successful <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a> application framework</p>
            <p>This is a purely HTML5/CSS3 driven template with some optional JavaScript plugins. It is built on a responsive CSS layout, which means that it will scale appropriately to different screen resolutions.  A nice option when dealing with the large difference between the iPhone &amp; iPad.</p>
            <p>With this framework we will find a robust amount of customization, along with built in components, however there are quite a few files that come along for the ride.</p>
            <br />
            <p>I've decided this is the best solution for our needs at this time, however you can also try one of the other options I customized:</p>
            <br />
            <a class="btn btn-primary" href="jquery/index.php"><h2>jQuery Mobile</h2></a>
            <br />
            <br />
            <a class="btn btn-primary" href="sencha/index.html"><h2>Sencha Touch</h2></a>
          </div>
        </div>
      </div>
      <hr>
    </div>

      <?php include('./includes/footer.inc.php'); ?>

    </div> <!-- /container -->
	
  </body>
</html>
<?php
	} catch (exception $e) {
		ob_end_clean();
		header('Location: error.php');
	}
	ob_end_flush();
?>