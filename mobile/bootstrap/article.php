<?php 
	ob_start();
	try {
	include('./includes/title.inc.php'); 

  // check for article_id in query string
  if (isset($_GET['rss_url']) && is_string($_GET['rss_url'])) {
    $url = $_GET['rss_url'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include('./includes/head.inc.php'); ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  </head>
  <style>
    /*  HIDDEN ELEMENTS */
    #article title {display:none;}
    #article script {display:none;}
    #article .logo {display:none;}
    #article aside {display:none;}
    #article footer {display:none;}
    #article hr {display:none;}
    #article .blueBack {display:none;}
    #article .breadcrumb {display:none;}
    #article .articleSocial {display:none;}
    #article .articleImage {display:none;}
    #article #disqus_thread {display:none;}
    #article #headNav {display:none;}
    #article #headWrap {display:none;}
    #article #mainNav {display:none;}
    #article blockquote {display:none;}
    
    /*  FORMATTED ELEMENTS */
    #article .leftCol {
      display:block;
      width:95%;
      margin:0 auto;
    }
    #article .leftCol img {
      display:block;
      max-width:100%;
      margin:0 auto 15px;
      padding:5px;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:4px;
    }
    #article .leftCol .dropCap {
      display:inline-block;
      float:left;
    }
  </style>
  <body id="article">
          	
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
        <div class="well">
          <div id="content">
            <a class="btn pull-right" href="<?php echo $url ?>">Full Article&nbsp;<i class="icon-chevron-right"></i></a>
            <a class="btn" href="rss.php"><i class="icon-chevron-left"></i>&nbsp;Back</a>
            <br />
            <br />
            <?php 
              $link = file_get_contents($url);
              $article = strip_tags($link, '<title><div><article><aside><table><tr><td><footer><ul><li><img><h1><h2><span><p><a><blockquote><script>');
              echo $article;
            ?>
          </div>
        </div>
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