<?php 
  $path2root = "";
  ob_start();
  try {
  include('./assets/inc/title.inc.php'); 
?>
<!doctype html>
<html>
<head>
  <?php include('./assets/inc/head.inc.php'); ?>
  <style>
  #about .hero-unit {
    border-radius:0px;
    overflow: hidden;
    box-shadow:inset 0px 0px 7px 1px rgba(0, 0, 0, .25);
  }
  #about .hero-unit h1 {
    font-size:125px;
    text-shadow:0px 1px 7px rgba(0, 0, 0, .5);
  }
  #about .hero-unit h1 small {
    font-size:100px;
    color:#ccc;
    text-shadow:0px 1px 2px #fff;
  }
  #about .span6 .well p {
    font-size:14px;
  }
  #about .span6 .well h3 {
    font-size:25px;
    text-shadow:0px 0px 3px rgba(0, 0, 0, .25);
    margin-bottom:7px;
  }
  #about h2 {
    font-size:50px;
    color:#ccc;
    text-shadow:0px 1px 2px #fff;
  }
  #about .work .btn {
    width:89.5%;
    border-radius:0px;
  }
  #about .work {
    margin-bottom:25px;
  }
  #about .well.work {
    margin-top:25px;
  }
  .thumbnail {
    margin-left:auto;
    margin-right:auto;
    opacity:.5;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    -ms-transition: all .25s ease-in-out;
    -o-transition: all .25s ease-in-out;
    transition: all .25s ease-in-out;
  }
  .thumbnail:hover {
    opacity:1;
  }
  #about .contact .btn {
    width:96.5%;
    height:50px;
    line-height:50px;
    font-size:35px;
    border-radius:0px;
    font-family: 'Swiss721Light';
  }
  </style>
</head>
<body id="about">

<!-- ## CONTACT MODAL ## -->
<?php include('./assets/inc/contactModal.inc.php'); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include('./assets/inc/nav.inc.php'); ?>

<!-- #### MAIN CONTENT GOES HERE #### -->

<div role="main" id="container" class="container">
  <div class="row">
    <div class="span12">
      <div class="hero-unit">
        <h1>Development<small>+</small>Design</h1>
        <h2>And everything in between</h2>
      </div><!-- .hero-unit -->
    </div><!-- .span12 -->
  </div><!-- .row -->

  <div class="row">
    <div class="span6">
      <div class="well">
        <h3>A Brief History</h3>
        <p>My transition into web development was both swift &amp; profound.  Discovering HTML in order to customize the MySpace page of my band in 2005, I quickly fell in love with all things web.  Before long I was working with CSS, and then quickly thereafter JavaScript, PHP, and MySQL.  My first freelance jobs were naturally for musicians and dabbling artists, but my appetite took me to bigger and better places on &amp; off the web.</p>
      </div><!-- .well -->
    </div><!-- .span6 -->
    <div class="span6 textalign-right">
      <div class="well">
        <h3>A Preamble of Sorts</h3>
        <p>As an avid internet enthusiast and web development artist for almost a decade, I offer a variety of web and technical services to a versatile client base. Working as a Freelancer in the Chicagoland area, I have formed a robust network of clientele with various businesses and individuals. From web development to graphic design, I can offer a comprehensive image for my clients to attract customers, enthusiasts or marketplaces.</p>
      </div><!-- .well -->
    </div><!-- .span6 -->
  </div><!-- .row -->
  
  <br />
  <br />
  <h2>Where I work now <span>&darr;</span></h2>
  <br />

  <div class="row">
    <div class="span12">
      <h3><a href="http://web2carz.com" title="Web2Carz.com">Web2Carz.com</a></h3>
      <a class="thumbnail" href="http://web2carz.com" title="Web2Carz.com">
        <img src="/images/work/web2carz.png" />
      </a>
    </div><!-- .span -->
  </div><!-- .row -->

  <br />
  <br />
  <br />
  <h2>Where I have worked <span>&darr;</span></h2>
  <br />

  <div class="row">
    <div class="span6">
      <h3><a href="http://chicagobooth.edu" title="University of Chicago Booth">University of Chicago Booth</a></h3>
      <a class="thumbnail" href="http://chicagobooth.edu" title="University of Chicago Booth">
        <img src="/images/work/booth.png" />
      </a>
    </div><!-- .span -->
    <div class="span6">
      <h3><a href="http://www.artversion.com/" title="ArtVersion Interactive Agency">ArtVersion Interactive Agency</a></h3>
      <a class="thumbnail" href="http://www.artversion.com/" title="ArtVersion Interactive Agency">
        <img src="/images/work/artversion.png" />
      </a>
    </div><!-- .span -->
  </div><!-- .row -->

  <br />
  <br />
  <br />
  <h2>Other work I have done <span>&darr;</span></h2>
  <br />
  <div class="row">  

    <div class="span4">
      <div class="work">
        <h3><a href="http://mmconsultants-inc.com/" title="MMC Inc.">Management Meeting Consultants</a></h3>
        <a class="thumbnail" href="http://mmconsultants-inc.com/" title="MMC Inc.">
          <img src="/images/work/mmc.png" width="286" />
        </a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://imaginethis.ws" title="Imagine This">Imagine This</a></h3>
        <a class="thumbnail" href="http://imaginethis.ws" title="Imagine This">
          <img src="/images/work/imaginethis.png" width="286" />
        </a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://545north.com/" title="545 North Bar &amp; Grill">545 North</a></h3>
        <a class="thumbnail" href="http://545north.com/" title="545 North Bar &amp; Grill">
          <img src="/images/work/545.png" width="286" />
        </a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://danielasloan.com/" title="Daniela Sloan Acoustic Soul">Acoustic Soul</a></h3>
        <a class="thumbnail" href="http://danielasloan.com/" title="Daniela Sloan Acoustic Soul">
          <img src="/images/work/daniela.png" width="286" />
        </a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://shakousushi.com/" title="Shakou Sushi">Shakou Sushi</a></h3>
        <a class="thumbnail" href="http://shakousushi.com/" title="Shakou Sushi">
          <img src="/images/work/shakou.png" width="286" />
        </a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://www.chicagobooth.edu/bfeo/2012/index.aspx" title="Business Forecast 2012">Business Forecast 2012</a></h3>
        <a class="thumbnail" href="http://www.chicagobooth.edu/bfeo/2012/index.aspx" title="Business Forecast 2012">
          <img src="/images/work/businessforecast.png" width="286" />
        </a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span12">
      <br />
      <br />
      <div class="contact">
        <h2>Like what you see? <span>&darr;</span></h2>
        <br />
        <a href="/contact.php" class="btn btn-info btn-large" title="">Contact Me</a>
      </div><!-- .well -->
    </div><!-- span -->
    
  </div><!-- .row -->
</div><!-- #container -->

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