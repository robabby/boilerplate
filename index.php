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
  }
  #home .hero-unit h1 {
    text-align:center;
    font-size:125px;
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
      <h1>&lt;RawDesigns&gt;</h1>
    </div><!-- .hero-unit -->
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