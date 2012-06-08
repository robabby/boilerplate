<?php 
  $path2root = ".";
  ob_start();
  try {
  include("$path2root/assets/inc/title.inc.php"); 
  //include("$path2root/assets/inc/user_agent.php");
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
  #home {
    background-image:url(/images/textures/500/19.jpg);
  }
  #home .hero-unit {
    border-radius:0px;
    overflow: hidden;
    box-shadow:inset 0px 0px 10px 1px rgba(0, 0, 0, .5);
    text-align:center;
    border-bottom:8px solid #555;
    background: #e0e0e0; /* Old browsers */
    background: -moz-linear-gradient(top, #e0e0e0 0%, #ffffff 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e0e0e0), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #e0e0e0 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #e0e0e0 0%,#ffffff 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #e0e0e0 0%,#ffffff 100%); /* IE10+ */
    background: linear-gradient(top, #e0e0e0 0%,#ffffff 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e0e0e0', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
  }
  #home .hero-unit h1 {
    text-align:center;
    font-size:175px;
    text-shadow:0px 1px 7px rgba(0, 0, 0, .5);
  }
  #home .hero-unit h1 small {
    font-size:100px;
    text-shadow:0px 1px 2px #fff;
    color:#cacaca;
  }
  #home .hero-unit h2 {
    font-size:65px;
    color:#cacaca;
    text-shadow:0px 1px 2px #fff;
  }
  #home .main .well {
    border-radius:0px;
    background:#efefef url(/images/textures/500/29.jpg);
    box-shadow: inset 0 0 7px 1px rgba(0, 0, 0, 0.55);
    padding-bottom:0;
}
  #home .main .well h2 {
    text-shadow:0px 0px 3px rgba(0, 0, 0, .25);
  }
  #home .main .well p {
    margin-bottom:7px;
  }
  #home .main .well .btn {
    position:relative;
    width:103.25%;
    border-radius:0px;
    left:-19px;
    bottom:-7px;
  }
  #home .sandbox .thumbnail {
    margin:0 auto 10px;
    opacity:.6;
    filter:alpha(opacity=60);
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -ms-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
  }
  #home .sandbox .thumbnail:hover {
    opacity:1;
    filter:alpha(opacity=100);
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

<!-- ## HEADER & NAV ## -->
<?php include("$path2root/assets/inc/nav.inc.php"); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->


<div class="hero-unit">
  <div class="container">
    <div class="row-fluid">
      <h1>RawDesigns<small>.net</small></h1>
      <h2>Web Development</h2>
    </div>
  </div>
</div>

<div class="container">
  <div class="row main">
    <div class="span4">
      <div class="well">
        <h2>Welcome</h2>
        <p>My name is Rob, a Web Developer and Designer from the Chicagoland Area.  'Raw Designs' is an acronym for Rob Abby Web Designs.  I have been happily building products for the web for almost 5 years now.</p>
        <p>Grab a cup of coffee, and hang out! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>
          <a class="btn btn-info btn-large" data-toggle="modal" href="#contact" title="Quick Contact">Contact &raquo;</a>
          <a class="btn btn-inverse btn-large" href="/about.php" title="Learn More">Learn More &raquo;</a>
        </p>
      </div><!-- .well -->
    </div><!-- .span -->
    
    <div class="span4">
      <div class="well sandbox">
        <h2><a href="outer_space.php">Outer Space Concept</a></h2>
        <a class="thumbnail pull-left" href="outer_space.php" title="Outer Space Concept">
          <img src="/images/thumbs/outer_space.jpg" alt="" />
        </a>
        <div class="clearfix"></div>
        <p>
          <a class="btn btn-large btn-info" href="outer_space.php">View Project &raquo;</a>
          <a class="btn btn-large btn-inverse" href="sandbox.php">Go to Sandbox &raquo;</a>
        </p>
      </div><!-- .well -->
    </div><!-- .span -->

    <div class="span4">
      <div class="well sandbox">
        <h2><a href="http://imaginethis.ws" title="Recent Project">Recent Project</a></h2>
        <a class="thumbnail" href="http://imaginethis.ws" title="Imagin This">
          <img src="/images/work/imaginethis.jpg" alt="Imagine This" />
        </a>
        <div class="clearfix"></div>
        <p>
          <a class="btn btn-large btn-info" href="http://imaginethis.ws">View Project &raquo;</a>
          <a class="btn btn-large btn-inverse" href="about.php#work">View Portfolio &raquo;</a>
        </p>
      </div><!-- .well -->
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