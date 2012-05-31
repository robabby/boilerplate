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
  #about .work .btn {
    width:89.5%;
    border-radius:0px;
  }
  #about .work {
    margin-bottom:25px;
  }
  #about .work img {
    padding:5px;
    border-left:1px solid #ccc;
    border-top:1px solid #ccc;
    border-right:1px solid #ccc;
    background-color:#fff;
    -webkit-transition: all .20s ease-in-out;
    -moz-transition: all .20s ease-in-out;
    -ms-transition: all .20s ease-in-out;
    -o-transition: all .20s ease-in-out;
    transition: all .20s ease-in-out;
  }
  #about .work:hover img {
    border-left:1px solid #3CF;
    border-top:1px solid #3CF;
    border-right:1px solid #3CF;
    background-color:#fff;
    box-shadow:0px 0px 2px 0px rgba(33, 175, 255, .75);
  }
  #about .well.work {
    margin-top:25px;
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
        <h1>Development + Design</h1>
        <h2>And everything in between</h2>
        <p>But mosty Develpment</p>
      </div><!-- .hero-unit -->
    </div><!-- .span12 -->
  </div><!-- .row -->
  <div class="row">
    <div class="span6">
      <div class="well">
        <h3>The Problem</h3>
        <p>You have an idea for an App, Widget, Slider, Website, whatever! You sit down to start coding it up, and you realize all of the things you need are in different places.  Not to mention you may have to compleetly draft a whole other website just to get your idea off the ground. By the time you compile your folder system and start coding your next big thing, your exhausted, or worse te idea is lost!</p>
      </div><!-- .well -->
    </div><!-- .span6 -->
    <div class="span6 textalign-right">
      <div class="well">
        <h3>The Solution</h3>
        <p>Obviously, I needed a way to more quickly build the ideas I was nurturing.  A place where folders were organized, and everything I could possibly want or need when starting a new idea would be right at my fingertips.  Thus, 'BoilerStrap' was born.  Built on a solid foundation, and customized to remove all distractiopn from the document, but give you access to every resource you would ever want or need.</p>
      </div><!-- .well -->
    </div><!-- .span6 -->
  </div><!-- .row -->
  
  <br />
  <h2>Where I work now</h2>
  <hr />

  <div class="row">
    <div class="span12">
      <h3><a href="http://web2carz.com" title="Web2Carz.com">Web2Carz.com</a></h3>
      <a class="thumbnail" href="http://web2carz.com" title="Web2Carz.com">
        <img src="/images/work/web2carz.png" />
      </a>
    </div>
  </div>
  <br />
  <br />
  <h2>Work I have done</h2>
  <hr />
  <div class="row">  

    <div class="span4">
      <div class="work">
        <h3><a href="http://mmconsultants-inc.com/" title="MMC Inc.">Management Meeting Consultants</a></h3>
        <a href="http://mmconsultants-inc.com/" title="MMC Inc.">
          <img src="/images/work/mmc.png" width="286" />
        </a>
        <a class="btn btn-inverse btn-large" href="http://mmconsultants-inc.com/" title="MMC Inc.">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://imaginethis.ws" title="Imagine This">Imagine This</a></h3>
        <a href="http://imaginethis.ws" title="Imagine This">
          <img src="/images/work/imaginethis.png" width="286" />
        </a>
        <a class="btn btn-inverse btn-large" href="http://imaginethis.ws" title="Imagine This">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://545north.com/" title="545 North Bar &amp; Grill">545 North</a></h3>
        <a href="http://545north.com/" title="545 North Bar &amp; Grill">
          <img src="/images/work/545.png" width="286" />
        </a>
        <a class="btn btn-inverse btn-large" href="http://545north.com/" title="545 North Bar &amp; Grill">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://danielasloan.com/" title="Daniela Sloan Acoustic Soul">Acoustic Soul</a></h3>
        <a href="http://danielasloan.com/" title="Daniela Sloan Acoustic Soul">
          <img src="/images/work/daniela.png" width="286" />
        </a>
        <a class="btn btn-inverse btn-large" href="http://danielasloan.com/" title="Daniela Sloan Acoustic Soul">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://shakousushi.com/" title="Shakou Sushi">Shakou Sushi</a></h3>
        <a href="http://shakousushi.com/" title="Shakou Sushi">
          <img src="/images/work/shakou.png" width="286" />
        </a>
        <a class="btn btn-inverse btn-large" href="http://shakousushi.com/" title="Shakou Sushi">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="http://www.chicagobooth.edu/bfeo/2012/index.aspx" title="Business Forecast 2012">Business Forecast 2012</a></h3>
        <a href="http://www.chicagobooth.edu/bfeo/2012/index.aspx" title="Business Forecast 2012">
          <img src="/images/work/businessforecast.png" width="286" />
        </a>
        <a class="btn btn-inverse btn-large" href="http://www.chicagobooth.edu/bfeo/2012/index.aspx" title="Business Forecast 2012">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="well work">
        <h3>Like what you see?</h3>
        <p>Don't be shy, let me know what you think!  I am available for certain requests, and am more than willing to answer any quesions you may have.</p>
        <a href="#" class="btn btn-info btn-large" title="">Contact</a>
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