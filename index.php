<?php 
  $path2root = ".";
  ob_start();
  try {
  include("$path2root/assets/inc/title.inc.php"); 
  include("$path2root/assets/inc/user_agent.php");
  require_once("$path2root/assets/inc/connection.inc.php");
  // database connection info
  $conn = mysql_connect('rawdesigns.db.7625389.hostedresource.com','rawdesigns','Forever#23') or trigger_error("SQL", E_USER_ERROR);
  //$conn = mysql_connect('localhost','root','') or trigger_error("SQL", E_USER_ERROR);
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
    border-radius:0px;
    overflow: hidden;
    box-shadow:inset 0px 0px 7px 1px rgba(0, 0, 0, .25);
    text-align:center;
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
    min-height:310px;
    background-image:url('/images/grey2.jpg');
  }
  #home .main .well h2 {
    text-shadow:0px 0px 3px rgba(0, 0, 0, .25);
  }
  #home .main .well .btn {
    width:89%;
    border-radius:0px;
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
  #home .connect {
    font-size:61px;
    margin-top:100px;
    color:#ccc;
    font-family: 'TradeGothicLTStdLight';
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
        <p>My name is Rob, and I am Raw Designs.  Few people know that 'Raw Designs' is actually an acronym for Rob Abby Web Designs.  I have been happily building products for the web for almost 5 years now.</p>
        <p>I have a deep passion for what I do, and enjoy the challenges that come with designing for multiple browsers and platforms.</p>
        <p>Grab a cup of coffee, and hang out!</p>
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

  <div class="row">
    <div class="span12">
      <p class="connect">Connect with me <span>&darr;</span></p>
    </div>
  </div>

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