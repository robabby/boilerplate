<?php 
  $path2root = ".";
  ob_start();
  try {
  include("$path2root/assets/inc/title.inc.php"); 
  include("$path2root/assets/inc/user_agent.php");
  //require_once("$path2root/assets/inc/connection.inc.php");
  // database connection info
  //$conn = mysql_connect('rawdesigns.db.7625389.hostedresource.com','rawdesigns','Forever#23') or trigger_error("SQL", E_USER_ERROR);
  //$conn = mysql_connect('localhost','root','') or trigger_error("SQL", E_USER_ERROR);
  //$db = mysql_select_db('rawdesigns',$conn) or trigger_error("SQL", E_USER_ERROR);
  //$sql = "SELECT title, article, created, article_id FROM blog ORDER BY created DESC LIMIT 1";
  //$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
?>
<!doctype html>
<html>
<head>
  <?php include("$path2root/assets/inc/head.inc.php"); ?>
  <style>
  #home .hero-unit {
    border-radius:0px;
    overflow: hidden;
    box-shadow:inset 0px 0px 15px 3px rgba(0, 0, 0, .5);
    text-align:center;
    border-bottom:8px solid #555;
    background-color:#fff;
  }
  #home .hero-unit h1 {
    text-align:center;
    font-size:175px;
    text-shadow:0px 1px 7px rgba(0, 0, 0, .5);
  }
  #home .hero-unit h1 small {
    font-size:100px;
    text-shadow:0px 1px 2px #fff;
    color:#999;
  }
  #home .hero-unit h2 {
    font-size:65px;
    color:#aaa;
    text-shadow:0px 1px 2px #fff;
    font-family: 'CodeLightRegular';
    font-weight:100;
  }
  #home .main .well {
    position:relative;
    border:none;
    padding:0;
    border-radius:18px 18px 7px 7px;
    box-shadow: 0 0 7px 1px rgba(0, 0, 0, 0.55);
    background-color:#fff;
    overflow:hidden;
  }
  #home .main .well .title {
    display:block;
    position:relative;
    width:100%;
    height:75px;
    border-radius:18px 18px 0px 0px;
    background: #45484d; /* Old browsers */
    background: -moz-linear-gradient(top, #45484d 0%, #000000 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#45484d), color-stop(100%,#000000)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #45484d 0%,#000000 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #45484d 0%,#000000 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #45484d 0%,#000000 100%); /* IE10+ */
    background: linear-gradient(top, #45484d 0%,#000000 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
  }
  #home .main .well .title h3 {
    font-family: 'CodeBoldRegular';
    color:#000;
    font-size:70px;
    line-height:110px;
    font-weight:100;
  }
  #home .main .well .trim {
    display:block;
    position:relative;
    width:auto;
    height:10px;
    background-color:#49AFCD;
    box-shadow:inset 0px 0px 3px rgba(0, 0, 0, .25);
    background-color: #149bdf;
    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -ms-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    -webkit-background-size: 40px 40px;
    -moz-background-size: 40px 40px;
    -o-background-size: 40px 40px;
    background-size: 40px 40px;
  }
  #home .main .well .inner {
    display: block;
    position:relative;
    width:auto;
    padding:10px;
  }
  #home .main .well .btn {
    position:relative;
    border-radius:0px 0px 7px 7px;
    width:90%;
    bottom:0px;
    padding:15px 14px;
  }
  </style>
</head>
<body id="home">
<!-- ## IE CHECK ## -->
<?php include("$path2root/assets/inc/iecheck.inc.php"); ?>
<!-- ## IE CHECK ## -->

<!-- ## CONTACT MODAL ## -->
<?php include("$path2root/assets/inc/contactModal.inc.php"); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## --
<?php include("$path2root/assets/inc/nav.inc.php"); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->


<div class="hero-unit">
  <div class="container">
    <div class="row-fluid">
      <h1 class="animated fadeInRightBig">RawDesigns<small>.net</small></h1>
      <h2 class="animated fadeInLeftBig">Web Development</h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row main">
    
    <div class="span4">
      <div class="well">
        <div class="title">
          <h3>Welcome</h3>
        </div><!-- .title -->
        <div class="trim"></div>
        <div class="inner">
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
        <a class="btn btn-info btn-large" href="/about.php" title="Learn More">Learn More &raquo;</a>
      </div><!-- .well -->
    </div><!-- .span --
    
    <div class="span4">
      <div class="well sandbox">
        <h2><a href="outer_space.php">Outer Space Concept</a></h2>
        <a class="thumbnail pull-left" href="outer_space.php" title="Outer Space Concept">
          <img src="/images/thumbs/outer_space.jpg" alt="" />
        </a>
        <div class="clearfix"></div>
        <p>
          <a class="btn btn-large btn-info" href="sandbox.php">Go to Sandbox &raquo;</a>
        </p>
      </div><!-- .well --
    </div><!-- .span --

    <div class="span4">
      <div class="well sandbox">
        <h2><a href="http://imaginethis.ws" title="Recent Project">Recent Project</a></h2>
        <a class="thumbnail" href="http://imaginethis.ws" title="Imagin This">
          <img src="/images/work/imaginethis.jpg" alt="Imagine This" />
        </a>
        <div class="clearfix"></div>
        <p>
          <a class="btn btn-large btn-info" href="about.php#work">View Portfolio &raquo;</a>
        </p>
      </div><!-- .well --
    </div><!-- .span -->

    <!--
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
      </div><!-- .well --
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