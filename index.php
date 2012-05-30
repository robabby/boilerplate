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
  #background {
    background: url(/images/cloud.png) repeat 5% 5%;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: -3;
  }

  #midground {
    background: url(/images/cloud.png) repeat 20% 20%;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: -2;
  }

  #foreground {
    background: url(/images/cloud.png) repeat 90% 110%;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: -1;
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
<div id="background"></div>
<div id="midground"></div>
<div id="foreground"></div>
  <div class="row-fluid">
    <div class="hero-unit">
      <h1>RawDesigns<small>.net</small></h1>
    </div><!-- .hero-unit -->
  </div><!-- .row -->
  <div class="row">
    <div class="span4">
      <div class="well">
        <h2>Hello</h2>
      </div><!-- .well -->
    </div><!-- .span -->
    <div class="span4">
      <div class="well">
        <h2>What's on your mind?</h2>
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
            <a class="btn btn-large btn-info" href="post.php?article_id=<?php echo $list['article_id']; ?>">Read Article &raquo;</a>
            <br />
            <br />
            <a class="btn btn-large btn-inverse" href="blog.php">Read Blog &raquo;</a>
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