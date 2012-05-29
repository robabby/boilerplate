<?php 
  $path2root = ".";
  ob_start();
  try {
  include("$path2root/assets/inc/title.inc.php"); 
  include("$path2root/assets/inc/user_agent.php");
  require_once("$path2root/assets/inc/connection.inc.php");
  // database connection info
  //$conn = mysql_connect('rawdesigns.db.7625389.hostedresource.com','rawdesigns','Forever#23') or trigger_error("SQL", E_USER_ERROR);
  $conn = mysql_connect('localhost','root','') or trigger_error("SQL", E_USER_ERROR);
  $db = mysql_select_db('rawdesigns',$conn) or trigger_error("SQL", E_USER_ERROR);
  $sql = "SELECT title, article, created, article_id FROM blog ORDER BY created DESC LIMIT 1";
  $result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
?>
<!doctype html>
<html>
<head>
  <?php include("$path2root/assets/inc/head.inc.php"); ?>
  <style>
  #home .hero-unit {
    padding-bottom:30px;
    border-radius:0px;
  }
  #home .hero-unit h1 {
    text-align:center;
    font-size:125px;
    text-shadow:0px 1px 7px rgba(0, 0, 0, .25);
  }
  #home .hero-unit h1 small {
    font-size:75px;
    text-shadow:0px 1px 1px rgba(75, 75, 75, 1);
  }
  #home .well {
    border-radius:0px;
    background-image:url('/images/fabric_plaid.png');
  }
  #home .post .btn {
    width:89%;
  }
  </style>
</head>
<body id="home">
<!-- ## CONTACT MODAL ## -->
<?php include("$path2root/assets/inc/contactModal.inc.php"); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include("$path2root/assets/inc/nav.inc.php"); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<div class="container">
  <div class="row-fluid">
    <div class="hero-unit">
      <h1>RawDesigns<small><b>.</b>net</small></h1>
    </div><!-- .hero-unit -->
  </div><!-- .row -->
  <div class="row">
    <div class="span4">
      <div class="well">
      </div><!-- .well -->
    </div><!-- .span -->
    <div class="span4">
      <div class="well">
      </div><!-- .well -->
    </div><!-- .span -->
    <div class="span4">
      <div class="well post">
      <?php while ($list = mysql_fetch_assoc($result)) { ?>
        <div class="row-fluid">
          <h2><a href="post.php?article_id=<?php echo $list['article_id']; ?>"><?php echo $list['title']; ?></a></h2>
          <a class="thumbnail pull-left" href="post.php?article_id=<?php echo $list['article_id']; ?>">
            <img src="http://placehold.it/100x100" alt="" />
          </a>
          <p><?php echo substr($list['article'], 0, 275); ?>...</p>
          <p>
            <a class="btn btn-large pull-right" href="post.php?article_id=<?php echo $list['article_id']; ?>">Read Article &raquo;</a>
          </p>
        </div>
      <?php } // end while  ?>
      </div><!-- .well -->
    </div><!-- .span -->
  </div><!-- .row -->
</div><!-- .container -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<!-- ## FOOTER ## -->
<?php include("$path2root/assets/inc/footer.inc.php"); ?>
<!-- ## FOOTER ## -->

</body>
</html>
<?php
  } catch (exception $e) {
    ob_end_clean();
    header('Location: error.php');
  }
  ob_end_flush();
?>