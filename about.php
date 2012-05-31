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
  <h3>Work I have done</h3>
  <hr />
  <div class="row">  

    <div class="span4">
      <div class="work">
        <h3><a href="#" title="">Management Meeting Consultants</a></h3>
        <a href="#" title="">
          <img src="http://placehold.it/286x175" />
        </a>
        <a class="btn btn-inverse btn-large" href="#" title="">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="#" title="">Imagin This</a></h3>
        <a href="#" title="">
          <img src="http://placehold.it/286x175" />
        </a>
        <a class="btn btn-inverse btn-large" href="#" title="">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="#" title="">545 North</a></h3>
        <a href="#" title="">
          <img src="http://placehold.it/286x175" />
        </a>
        <a class="btn btn-inverse btn-large" href="#" title="">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="#" title="">Acoustic Soul</a></h3>
        <a href="#" title="">
          <img src="http://placehold.it/286x175" />
        </a>
        <a class="btn btn-inverse btn-large" href="#" title="">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="work">
        <h3><a href="#" title="">Shakou Sushi</a></h3>
        <a href="#" title="">
          <img src="http://placehold.it/286x175" />
        </a>
        <a class="btn btn-inverse btn-large" href="#" title="">View Project</a>
      </div><!-- .work -->
    </div><!-- span -->

    <div class="span4">
      <div class="well work">
        
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