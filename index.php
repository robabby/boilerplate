<?php 
  $path2root = "";
  ob_start();
  try {
  include('./assets/inc/title.inc.php'); 
  include('./assets/inc/user_agent.php');
  require_once("./assets/inc/connection.inc.php");
?>
<!doctype html>
<html>
<head>
  <?php include('./assets/inc/head.inc.php'); ?>
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
  </style>
</head>
<body id="home">
<!-- ## CONTACT MODAL ## -->
<?php include('./assets/inc/contactModal.inc.php'); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include('./assets/inc/nav.inc.php'); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<div class="container">
  <div class="row-fluid">
    <div class="hero-unit">
      <h1>RawDesigns<small><b>.</b>net</small></h1>
    </div><!-- .hero-unit -->
  </div><!-- .row -->
  <div class="row">
    <div class="span3">
      <div class="well">
      </div><!-- .well -->
    </div><!-- .span -->
    <div class="span3">
      <div class="well">
      </div><!-- .well -->
    </div><!-- .span -->
    <div class="span3">
      <div class="well">
      </div><!-- .well -->
    </div><!-- .span -->
    <div class="span3">
      <div class="well">
      </div><!-- .well -->
    </div><!-- .span -->
  </div><!-- .row -->
</div><!-- .container -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<!-- ## FOOTER ## -->
<?php include('./assets/inc/footer.inc.php'); ?>
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