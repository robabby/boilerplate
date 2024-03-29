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
    margin-bottom:0;
    border-radius:0px;
    overflow: hidden;
    padding:100px 0 80px;
    text-align:center;
    border-bottom:8px solid #06e;
    background: #333333; /* Old browsers */
    background: -moz-linear-gradient(top, #333333 0%, #121212 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#333333), color-stop(100%,#121212)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #333333 0%,#121212 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #333333 0%,#121212 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #333333 0%,#121212 100%); /* IE10+ */
    background: linear-gradient(top, #333333 0%,#121212 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#333333', endColorstr='#121212',GradientType=0 ); /* IE6-9 */
  }
  #home .hero-unit h2 {
    font-size:75px;
    color:#fff;
    font-family: 'CodeLightRegular';
    font-weight:100;
    margin-bottom:20px;
  }
  #home .hero-unit h2 a {
    color: #06e;
  }
  #home .hero-unit p {
    color:#fff;
    font-family: 'DeliciousSmallCapsRegular';
    font-weight:100;
    text-align:left;
  }
  #home .hero-unit p.web, #home .hero-unit p.mobile, #home .hero-unit p.newMedia {
    display:none;
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
  #home .main .well form {
    margin-bottom:0;
  }
  #home .main .well form input, #home .main .well form textarea {
    width:96%;
  }
  #home .main .well .title {
    display:block;
    position:relative;
    width:100%;
    height:75px;
    margin-top:-1px;
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
    color:#121212;
    text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.35), -1px -1px 1px rgba(0, 0, 0, 0.4);
    font-size:35px;
    line-height:75px;
    text-align:center;
    font-weight:100;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -ms-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
  }
  #home .main .well:hover .title h3 {
    color:#39F;
  }
  #home .main .well .trim {
    display:block;
    position:relative;
    width:auto;
    height:10px;
    background-color:#06e;
    box-shadow:inset 0px 0px 3px rgba(0, 0, 0, .25);
  }
  #home .main .well .inner {
    display: block;
    position:relative;
    width:auto;
    padding:20px;
    min-height:225px;
  }
  #home .main .well .btn {
    position:relative;
    border-radius:0px 0px 7px 7px;
    width:90%;
    bottom:-1px;
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

<!-- ## HEADER & NAV ## -->
<?php include("$path2root/assets/inc/nav.inc.php"); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->


<div class="hero-unit">
  <div class="container">
    <div class="row-fluid">
      <h2>
        <a class="web" href="#">Web</a> 
        <span>/</span> 
        <a class="mobile" href="#">Mobile</a> 
        <span>/</span> 
        <a class="newMedia" href="#">New Media</a>
      </h2>
      <br />
      <p class="web animated fadeInLeftBig">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      <p class="mobile animated fadeInRightBig">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      <p class="newMedia animated fadeInLeftBig">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- .hero-unit -->

<div class="main">
  <br />
  <br />
  <div class="container">
    <div class="row">
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
          <a class="btn btn-inverse btn-large" href="/about.php" title="Learn More">Learn More &raquo;</a>
        </div><!-- .well -->
      </div><!-- .span -->

      <div class="span4">
        <div class="well">
          <div class="title">
            <h3>Blog</h3>
          </div><!-- .title -->
          <div class="trim"></div>
          <div class="inner">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          </div>
          <a class="btn btn-inverse btn-large" href="/about.php" title="Learn More">Read More &raquo;</a>
        </div><!-- .well -->
      </div><!-- .span -->

      <div class="span4">
        <div class="well">
          <form>
            <div class="title">
              <h3>Contact</h3>
            </div><!-- .title -->
            <div class="trim"></div>
            <div class="inner">
              <p>
                <label>Name</label>
                <input type="text" />
              </p>
              <p>
                <label>Email</label>
                <input type="text" />
              </p>
              <p>
                <label>Comments</label>
                <textarea rows="2"></textarea>
              </p>
            </div>
            <a class="btn btn-inverse btn-large" href="/about.php" title="Learn More">Submit &raquo;</a>
          </div><!-- .well -->
        </form>
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
</div><!-- .main -->
<!-- #### MAIN CONTENT GOES HERE #### -->

<!-- ## FOOTER ## -->
<?php include("$path2root/assets/inc/footer.inc.php"); ?>
<!-- ## FOOTER ## -->
<script>
// Text fadeIn()
$('.hero-unit a.web').click(function() {
  $('p.web').fadeToggle('slow', function() {
    // Animation complete
  });
});
$('.hero-unit a.mobile').click(function() {
  $('p.mobile').fadeToggle('slow', function() {
    // Animation complete
  });
});
$('.hero-unit a.newMedia').click(function() {
  $('p.newMedia').fadeToggle('slow', function() {
    // Animation complete
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