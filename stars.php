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
  #background {
    background: url(/images/stars.jpg) repeat 5% 5%;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: -3;
  }

  #midground {
    background: url(/images/midground.png) repeat 20% 20%;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: -2;
  }

  #foreground {
    background: url(/images/foreground.png) repeat 90% 110%;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: -1;
  }
  </style>
</head>
<body id="stars">
<!-- ## CONTACT MODAL ## -->
<?php include("$path2root/assets/inc/contactModal.inc.php"); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include("$path2root/assets/inc/nav.inc.php"); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<div class="container">
  <div id="background"></div>
  <div id="midground"></div>
  <div id="foreground"></div>
</div><!-- .container -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<!-- ## FOOTER ## -->
<?php include("$path2root/assets/inc/footer.inc.php"); ?>
<!-- ## FOOTER ## -->
<script src="/assets/js/jquery.backgroundPosition.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function(){

    $('#midground').css({backgroundPosition: '0px 0px'});
    $('#foreground').css({backgroundPosition: '0px 0px'});
    $('#background').css({backgroundPosition: '0px 0px'});

    $('#midground').animate({
      backgroundPosition:"(-10000px 1000px)"
    }, 240000, 'linear');

    $('#foreground').animate({
      backgroundPosition:"(-10000px 0px)"
    }, 120000, 'linear');

    $('#background').animate({
      backgroundPosition:"(-10000px 3000px)"
    }, 480000, 'linear');

  });
</script>
<script src="/assets/js/realshadow.js" type="text/javascript"></script>
  <script>
  $(function(){
    $('h1').realshadow({
      //pageY: 190
    });
  });
  </script>
</body>
</html>
<?php
  } catch (exception $e) {
    ob_end_clean();
    header('Location: error.php');
  }
  ob_end_flush();
?>