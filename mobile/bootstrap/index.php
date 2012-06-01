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
    <img class="logo" src="images/logo.png" />
  </div>
  
	<div class="container-fluid">

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span12">
          <div class="well">
            <a class="btn btn-primary" href="auto_search.php"><h2>Auto Search</h2></a>
            <br />
            <br />
            <a class="btn btn-primary" href="loan_search.php"><h2>Find a Loan</h2></a>
            <br />
            <br />
            <a class="btn btn-primary" href="rss.php"><h2>Read Articles</h2></a>
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