<?php 
  $path2root = "";
  ob_start();
  try {
  include('./assets/inc/title.inc.php'); 
  include('./assets/inc/user_agent.php');
?>
<!doctype html>
<html>
<head>
  <?php include('./assets/inc/head.inc.php'); ?>
  <style>
  a {color:#06E;}
  dl dt {
    margin:7px 0;
  }
  dd {
    margin:7px 0 7px 10px;
  }
  .fonts .bebasNeue {  }
  </style>
</head>
<body id="home">
<!-- ## CONTACT MODAL ## -->
<?php include('./assets/inc/contactModal.inc.php'); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include('./assets/inc/nav.inc.php'); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<div role="main" id="container" class="container">
  <div class="row">
    <div class="span12">
      <div class="hero-unit">
        <h1>Web Development Boilerplate</h1>
        <h2>Everything you will ever need to build amazing websites!</h2>
      </div><!-- .hero-unit -->
    </div><!-- .span12 -->
  </div><!-- .row -->
  <hr />
  <div class="row">
    <div class="span5">
      <div class="well">
        <h3>The Problem</h3>
        <p>You have an idea for an App, Widget, Slider, Website, whatever! You sit down to start coding it up, and you realize all of the things you need are in different places.  Not to mention you may have to compleetly draft a whole other website just to get your idea off the ground. By the time you compile your folder system and start coding your next big thing, your exhausted, or worse te idea is lost!</p>
      </div><!-- .well -->
    </div><!-- .span6 -->
    <div class="span5 offset2 textalign-right">
      <div class="well">
        <h3>The Solution</h3>
        <p>More often than not, when I go to 'sketch' out an idea in code, I find that getting my environement and workbench set up would take longer than actually getting my idea out of my head.  By the time I had my HTML sheet built and was ready to start coding, I was exhausted from the set-up process.</p>
      </div><!-- .well -->
    </div><!-- .span6 -->
  </div><!-- .row -->
  <hr />
  <div class="row">
    <div class="span12">
      <h3>Why use this boilerplate?</h3>
      <p>If you are like me, then you like to go from concept to production quickly.  Nothing is more demotivating to me to get a concept built, then have to style and position elements.  It's so much work!  I love to rapidly develop my concepts in a custom environment that not only looks good, but has everything I need to get to work quickly and easily.  Well with this boilerplate, I have enabled anyone familiar with the code-base to do just that.</p>
      <hr />
      <h3>What does it have?</h3>
      <p>Given the nature of what I enjoy working with, this boilerplate is a bit more advanced than your average HTML/CSS boilerplate.  I started with <a href="#" title="">HTML5 Boilerplate</a>, and converted the standard style.css to a reset.css.  From there I added in <a href="#" title="">Twitter Bootstrap</a>,  offering me all of the rapid development tools I may want to draft quick concepts.  As well as a CSS grid framework and JavaScript plugins. A quick inspection of the files will show you that I have turned as many portions of the code into PHP includes as I could, thus reducing the amount of code-bloat present in the HTML documents and making them simpler and easier to navigate.</p>

      <p>I have also added in my own custom style.css which I use to overwrite some of the standard styles apparent in Bootstrap, and giving the site a more custom look and feel than the overworked Bootstrap theme.  From there I added in a nice selection of custom fonts. You can view a full list of what is available over on <a href="#" title="">GitHub</a>, as well as form the respository for yourself.</p>
      <hr />
      <h3>What's in the Box</h3>
      <dl>
        <dt>Frameworks</dt>
          <dd><a href="#" title="">HTML5 Boilerplate</a></dd>
          <dd><a href="#" title="">Twitter Bootstrap</a></dd>
        <dt class="fonts">Fonts</dt>
          <dd class="bebasNeue">Bebas Neue</dd>
          <dd class="bigNoodle">Big Noodle</dd>
          <dd class="code">Code</dd>
          <dd class="quicksand">Quicksand</dd>
          <dd class="sansation">Sansation</dd>
          <dd class="swiss">Swiss</dd>
          <dd class="tradegothic">Trade Gothic</dd>
      </dl>
    </div><!-- .span12 -->
  </div><!-- .row -->
  <hr />
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