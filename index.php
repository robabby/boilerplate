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
    overflow: hidden;
    box-shadow:inset 0px 0px 7px 1px rgba(0, 0, 0, .25);
  }
  #home .hero-unit h1 {
    text-align:center;
    font-size:125px;
    text-shadow:0px 1px 7px rgba(0, 0, 0, .5);
  }
  #home .hero-unit h1 small {
    font-size:75px;
    text-shadow:0px 1px 2px #fff;
  }
  #home .main .well {
    border-radius:0px;
    background-image:url('/images/fabric_plaid.png');
    min-height:310px;
  }
  #home .main .well h2 {
    text-shadow:0px 0px 3px rgba(0, 0, 0, .25);
  }
  #home .well .btn {
    width:89%;
    border-radius:0px;
  }
  #background {
    background: url(/images/cloud.png) repeat 5% 5%;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: -3;
  }
  .sandbox .thumbnail {
    margin:0 auto 10px;
    opacity:.6;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -ms-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
  }
  .sandbox .thumbnail:hover {
    opacity:1;
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
  <div class="row main">
    <div class="span4">
      <div class="well">
        <h2>Welcome</h2>
        <p>I am Rob, and I am Raw Designs.  Few people know that 'Raw Designs' is actually an acronym for Rob Abby Web Designs.  I have been happily building products for the web for almost 5 years now.</p>
        <p>I have a deep passion for what I do, and enjoy the challenges that come with designing for multiple browsers and platforms.</p>
        <p>Grab a cup of coffee, and hang out for a while.</p>
        <br />
        <p>
          <a class="btn btn-info btn-large" data-toggle="modal" href="#contact" title="Quick Contact">Contact &raquo;</a>
          <a class="btn btn-inverse btn-large" href="/about.php" title="Learn More">Learn More &raquo;</a>
        </p>
      </div><!-- .well -->
    </div><!-- .span -->
    
    <div class="span4">
      <div class="well sandbox">
        <h2><a href="post.php">Outer Space Concept</a></h2>
        <a class="thumbnail pull-left" href="post.php" title="Outer Space Concept">
          <img src="/images/thumbs/outer_space.png" alt="" />
        </a>
        <div class="clearfix"></div>
        <br />
        <p>
          <a class="btn btn-large btn-info" href="outer_space.php">View Project &raquo;</a>
          <a class="btn btn-large btn-inverse" href="sandbox.php">Go to Sandbox &raquo;</a>
        </p>
      </div><!-- .well -->
    </div><!-- .span -->

    <div class="span4">
      <div class="well blog">
      <?php while ($list = mysql_fetch_assoc($result)) { ?>
        <div class="row-fluid">
          <h2><a href="post.php?article_id=<?php echo $list['article_id']; ?>"><?php echo $list['title']; ?></a></h2>
          <a class="thumbnail pull-left" href="post.php?article_id=<?php echo $list['article_id']; ?>">
            <img src="http://placehold.it/100x100" alt="" />
          </a>
          <p><?php echo substr($list['article'], 0, 275); ?>...</p>
        <br />
          <p>
            <a class="btn btn-large btn-info" href="post.php?article_id=<?php echo $list['article_id']; ?>">Read Article &raquo;</a>
            <a class="btn btn-large btn-inverse" href="blog.php">Go to Blog &raquo;</a>
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
    //$('h1').realshadow({
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