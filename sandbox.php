<?php 
  $path2root = "";
  ob_start();
  try {
  include('./assets/inc/title.inc.php'); 
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
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
          <h1>Sandbox</h1>
        </div><!-- .well -->
      </div><!-- .span8 -->
      <div class="span5">
        <div class="well">
          <ul class="nav nav-tabs nav-stacked">
            <li><a href="/map.php" title="">Google Maps API</a></li>
            <li><a href="/youtube.php" title="">YouTube API</a></li>
            <li><a href="/outer_space.php" title="">Outer Space Concept</a></li>
            <li><a href="/isotope.php" title="">Isotope Site</a></li>
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