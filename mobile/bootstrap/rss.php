<?php 
	ob_start();
	try {
	include('./includes/title.inc.php'); 

  // RSS Info
  $url = 'http://www.web2carz.com/rss/articles';
  $feed = simplexml_load_file($url, 'SimpleXMLIterator');
  $filtered = new LimitIterator($feed->channel->item);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include('./includes/head.inc.php'); ?>
  </head>

  <body id="rss">
          	
  <?php
  	$file = 'includes/nav.inc.php';
  	if (file_exists($file) && is_readable($file)) {
  		include($file);
  	} else {
  		throw new Exception("$file can't be found");
  	}
  ?>
  
	<div class="container">
      <br />
      <!-- Example row of columns -->
      <div class="row">
        <?php 
          foreach (new LimitIterator($filtered, 0, 3) as $item) { ?>
            <div class="span12">
              <div class="well">
                <span class="label pull-right"><?php echo $item->category; ?></span>
                <h2><a href="article.php?rss_url=<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h2>
                <p class="description"><?php echo substr($item->description, 0, 500); ?>...</p>
                <div class="clear"></div>
                <a class="link btn btn-large pull-right" href="article.php?rss_url=<?php echo $item->link; ?>">Read More</a>
                <br />
                <span class="label label-info"><?php echo $item->pubDate; ?></span>
              </div><!-- .well -->
            </div><!-- .span12 -->
        <?php } ?>
      </div><!-- .row -->

      <div class="row">

      </div>

      <hr>

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