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
  #sandbox .hero-unit img {
    margin:0 0 0 15px;
    box-shadow:0px 0px 10px rgba(0, 0, 0, .6);
  }
  hr {margin:5px 0 18px;}
  </style>
</head>
<body id="sandbox">

<!-- ## HEADER & NAV ## -->
<?php include('./assets/inc/nav.inc.php'); ?>
<!-- ## HEADER & NAV ## -->

<!-- ## CONTACT MODAL ## -->
<?php include('./assets/inc/contactModal.inc.php'); ?>
<!-- ## CONTACT MODAL ## -->

  <div role="main" id="container" class="container">
    <div class="row">
      <div class="span12">
        <div class="hero-unit">
          <div class="row-fluid">
            <img class="pull-right" src="/images/calvin_sandbox.jpg" />
            <h1>The Sandbox</h1>
            <p>Remember how much fun we all used to have playing in the sandbox as a kid?  No? Well I do, and I had a blast!  This page is herby dedicated to all of the fun, new interesting Sand Castles that I love to build from time to time.</p>
            <p>Please keep in mind that these are experiments only.  Do not expect anything to be completely finished, or perfect.  Once a project is finished, I will publish it to GitHub for you to grab a copy of the .zip file.</p>
            <p>Cheers!</p>
          </div>
        </div><!-- .hero-unit -->
      </div><!-- .span8 -->
    </div><!-- .row -->
    <div class="row">
      <div class="span12">
        <h2>APIs <small>Google, YouTube, Twitter, &amp; etc.</small></h2>
        <hr />
      </div><!-- .span -->

      <div class="span3">
        <div class="well">
          <a href="/map.php" title="">Google Map</a>
        </div><!-- span -->
      </div><!-- .well -->
      <div class="span3">
        <div class="well">
          <a href="/geolocate.php" title="">Geolocate</a>
        </div><!-- span -->
      </div><!-- .well -->
      <div class="span3">
        <div class="well">
          <a href="/youtube.php" title="">YouTube API</a>
        </div><!-- span -->
      </div><!-- .well -->
      <div class="span3">
        <div class="well">
          <a href="/get_tweets.php" title="">Twitter API</a>
        </div><!-- span -->
      </div><!-- .well -->


      <div class="span12">
        <h2>Websites <small>Layouts and concepts</small></h2>
        <hr />
      </div><!-- .span -->

      <div class="span3">
        <div class="well">
          <a href="/isotope.php" title="">Isotope Site</a>
        </div><!-- span -->
      </div><!-- .well -->
      <div class="span3">
        <div class="well">
          <a href="/outer_space.php" title="">Outer Space Concept</a>
        </div><!-- span -->
      </div><!-- .well -->

      <div class="span12">
        <h2>Mobile <small>Featuring both responsive CSS or JavaScript frameworks</small></h2>
        <hr />
      </div><!-- .span -->

      <div class="span3">
        <div class="well">
          <a href="/mobile/" title="">Sencha Touch App</a>
        </div><!-- span -->
      </div><!-- .well -->

      <div class="span12">
        <h2>File Handling <small>Demos that utilize the power of PHP, AJAX or MySQL</small></h2>
        <hr />
      </div><!-- .span -->

      <div class="span3">
        <div class="well">
          <a href="drag_drop.php" title="">HTML5 Drag &amp; Drop</a>
        </div><!-- span -->
      </div><!-- .well -->
      <div class="span3">
        <div class="well">
          <a href="scan_dir.php" title="">View Folder</a>
        </div><!-- span -->
      </div><!-- .well -->

      <div class="span12">
        <h2>Blog &amp; CMS <small>A lightweight CMS I am working on for small Blogs</small></h2>
        <hr />
      </div><!-- .span -->

      <div class="span3">
        <div class="well">
          <a href="/blog/blog_list.php" title="">Article Manager</a>
        </div><!-- span -->
      </div><!-- .well -->
      <div class="span3">
        <div class="well">
          <a href="/blog/new_post.php" title="">New Post</a>
        </div><!-- span -->
      </div><!-- .well -->

    </div><!-- .row -->
  </div><!-- #container -->

  <?php include('./assets/inc/footer.inc.php'); ?>
  <script>
  // Wrap code in an self-executing anonymous function and 
  // pass jQuery into it so we can use the "$" shortcut without 
  // causing potential conflicts with already existing functions.
  (function($) {

      var validation = function() {

          var rules = {  // Private object

              email : {
                 check: function(value) {

                     if(value) {
                         return testPattern(value,"[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])");
                     }
                     return true;
                 },
                 msg : "Enter a valid e-mail address."
              },
              required : {

                 check: function(value) {

                     if(value) {
                         return true;
                     }
                     else {
                         return false;
                     }
                 },
                 msg : "This field is required."
              }
          }
          var testPattern = function(value, pattern) {   // Private Method

              var regExp = new RegExp(pattern,"");
              return regExp.test(value);
          }
          return { // Public methods

              addRule : function(name, rule) {

                  rules[name] = rule;
              },
              getRule : function(name) {

                  return rules[name];
              }
          }
      }
      //A new instance of our object in the jQuery namespace.
      $.validation = new validation();
  })(jQuery); 
  // Again, we're passing jQuery into the function 
  // so we can use $ without potential conflicts.
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