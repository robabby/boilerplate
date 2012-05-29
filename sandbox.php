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
      <div class="span7">
        <div class="well">
          <div class="row-fluid">
            <img class="pull-right" src="/images/calvin_sandbox.jpg" />
            <h1>Sandbox</h1>
            <p>Remember how much we all used to have playing in the sandbox as a kid?  No? Well I do, and I had a blast!  This page is herby dedicated to all of the fun, new interesting Sand Castles that I love to build from time to time.</p>
            <p>Thispage will contain just a little bit of everything that I may or may not be working on at any given point in time.  Hopefully you have aas much fun using these elements, as I have had building them!</p>
          </div>
        </div><!-- .well -->
      </div><!-- .span8 -->
      <div class="span5">
        <div class="well">
          <ul class="nav nav-tabs nav-stacked">
            <li class="nav-header">
              JavaScript
            </li>
            <li><a href="/javascript.php" title="">Practice Page</a></li>
            <li class="nav-header">
              APIs
            </li>
            <li><a href="/map.php" title="">Google Map</a></li>
            <li><a href="/geolocate.php" title="">Geolocate</a></li>
            <li><a href="/youtube.php" title="">YouTube API</a></li>
            <li><a href="/get_tweets.php" title="">Twitter API</a></li>
            <li class="nav-header">
              Websites
            </li>
            <li><a href="/isotope.php" title="">Isotope Site</a></li>
            <li><a href="/outer_space.php" title="">Outer Space Concept</a></li>
            <li class="nav-header">
              Mobile
            </li>
            <li><a href="/mobile/" title="">Sencha Touch App</a></li>
            <li class="nav-header">
              File Handling
            </li>
            <li><a href="drag_drop.php" title="">HTML5 Drag &amp; Drop</a></li>
            <li><a href="scan_dir.php" title="">View Folder</a></li>
            <li class="nav-header">
              Blog &amp; CMS
            </li>
            <li><a href="/blog/new_post.php" title="">New Post</a></li>
            <li><a href="/blog/blog_list.php" title="">Article Manager</a></li>
            <li><a href="/blog/add_image.php" title="">Attach Image</a></li>
            <li><a href="/blog/delete_post.php" title="">Delete Post</a></li>
          </ul>
        </div><!-- .well -->
      </div><!-- .span4 -->
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