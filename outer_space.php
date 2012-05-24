<?php 
  $path2root = "";
  ob_start();
  try {
  include('./assets/inc/title.inc.php'); 
  include('./assets/inc/user_agent.php');
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="/assets/css/style_ie.css" />
<![endif]-->
<head>
  <?php include('./assets/inc/head.inc.php'); ?>
  <link rel="stylesheet" href="/assets/css/queryLoader.css" type="text/css" />
  <noscript>
    <style>
    .step {
      width: 100%;
      position: relative;
    }
    .step:not(.active) {
      opacity: 1;
      filter: alpha(opacity=99);
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
    }
    .step:not(.active) a.jms-link{
      opacity: 1;
      margin-top: 40px;
    }
    </style>
  </noscript>
  <style>
  .star-1 {
    display:block;
    position:absolute;
    background-color:#fff;
    top:190px;
    left:142px;
    width:3px;
    height:3px;
    border-radius:3px;
    box-shadow:0px 0px 50px 7px rgba(100, 175, 255, 1);
    -webkit-animation-name: pulse;
    -webkit-animation-duration: 5s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
  }
  .star-2 {
    display:block;
    position:absolute;
    background-color:#fff;
    top:45%;
    left:55%;
    width:3px;
    height:3px;
    border-radius:3px;
    box-shadow:0px 0px 50px 15px rgba(100, 175, 255, 1);
    -webkit-animation-name: pulse;
    -webkit-animation-duration: 10s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
  }
  .star-3 {
    display:block;
    position:absolute;
    background-color:#fff;
    top:85%;
    left:25%;
    width:3px;
    height:3px;
    border-radius:3px;
    box-shadow:0px 0px 50px 15px rgba(100, 175, 255, 1);
    -webkit-animation-name: pulse;
    -webkit-animation-duration: 8s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
  }
  .star-4 {
    display:block;
    position:absolute;
    background-color:#fff;
    top:70%;
    left:85%;
    width:3px;
    height:3px;
    border-radius:3px;
    box-shadow:0px 0px 50px 15px rgba(100, 175, 255, 1);
    -webkit-animation-name: pulse;
    -webkit-animation-duration: 7s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
  }
  .star-5 {
    display:block;
    position:absolute;
    background-color:#fff;
    top:10%;
    left:75%;
    width:3px;
    height:3px;
    border-radius:3px;
    box-shadow:0px 0px 50px 15px rgba(100, 175, 255, 1);
    -webkit-animation-name: pulse;
    -webkit-animation-duration: 12s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
  }
  .moon {
    display:block;
    position:absolute;
    top:-250px;
    right:-250px;
    width:544px;
    height:544px;
    background-image:url('/images/moon.png');
    background-position: 0px 0px;
    background-repeat: no-repeat;
    -webkit-animation-name: rotate;
    -webkit-animation-duration: 240s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
  }
  .planet {
    display:none;
    position:absolute;
    bottom:-500px;
    left:-350px;
    width:921px;
    height:921px;
    background-image:url('/images/planet.png');
    background-position: 0px 0px;
    background-repeat: no-repeat;
    -webkit-animation-name: rotate;
    -webkit-animation-duration: 1000s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
  }
  .planet2 {
    display:block;
    position:absolute;
    bottom:-500px;
    left:-300px;
    width:1000px;
    height:1000px;
    background-image:url('/images/planet2.png');
    background-position: 0px 0px;
    background-repeat: no-repeat;
    -webkit-animation-name: rotate;
    -webkit-animation-duration: 1000s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
  }
  @-webkit-keyframes pulse {
    from {
      -webkit-transform: rotate(0deg);
      opacity:0;
    }
    50% {
      -webkit-transform: rotate(360deg);
      opacity:1;
    }
    to {
      -webkit-transform: rotate(0deg);
      opacity:0;
    }
  }
  @-webkit-keyframes rotate {
    from {
      -webkit-transform: rotate(0deg);
    }
    50% {
      -webkit-transform: rotate(180deg);
    }
    to {
      -webkit-transform: rotate(360deg);
    }
  }
  #viewport {
    display:block;
    position:absolute;
    z-index:1;  
  }
  </style>
</head>
<body id="outer_space">
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 9]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<!-- ## CONTACT MODAL ## -->
<?php include('./assets/inc/contactModal.inc.php'); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## --
<?php include('./assets/inc/nav.inc.php'); ?>
-->

<div id="container" class="container">
  
  <!-- ##### SOLAR SYSTEM ##### -->
  <div id="star" class="star-1"></div>
  <div id="star" class="star-2"></div>
  <div id="star" class="star-3"></div>
  <div id="star" class="star-4"></div>
  <div id="star" class="star-5"></div>
  <div id="moon" class="moon"></div>
  <div id="planet" class="planet"></div>
  <div id="planet2" class="planet2"></div>
  <!-- ##### SOLAR SYSTEM ##### -->
  
  <section id="jms-slideshow" class="jms-slideshow">
    <div class="step" data-color="color-1">
      <div class="jms-content">
        <h3>Welcome</h3>
        <p>My name is Rob. I build interactive, web-based experiences that are out of this world.</p>
        <!--<a class="jms-link" href="#">Read more</a>-->
      </div>
      <!--<img class="inset" src="images/rd_logo.png" width="300" height="300" />-->
      <img src="/images/earth_icon.png" width="300" height="300" />
    </div>
    <div class="step" data-color="color-2" data-y="500" data-scale="0.4" data-rotate-x="30">
      <div class="jms-content">
        <h3>Standards are everything</h3>
        <p>All of the websites I build are standards compliant, ensured to work on all modern web browsers <br /> (and devices).</p>
        <a class="jms-link" href="#">Read more</a>
      </div>
      <img src="/images/captain_icon.png" />
    </div>
    <div class="step" data-color="color-3" data-x="2000" data-z="3000" data-rotate="170">
      <div class="jms-content">
        <h3>Think Mobile</h3>
        <p>My products work on iPhone, iPad, Android, Windows Phone, Blackberry, Nokia, WebOS, and more...</p>
        <a class="jms-link" href="#">Read more</a>
      </div>
      <img src="images/ipad_happy.png" />
    </div>
    <div class="step" data-color="color-4" data-x="3000">
      <div class="jms-content">
        <h3>Think Modern</h3>
        <p>Now, more than ever, it is crucial for web-goers <br /> to embrace more advanced (and secure) ways <br /> of browsing the web.</p>
        <a class="jms-link" href="#">Read more</a>
      </div>
      <img src="images/browsers.png" />
    </div>
    <div class="step" data-color="color-5" data-x="4500" data-z="1000" data-rotate-y="45">
      <div class="jms-content">
        <h3>Portfolio</h3>
        <p>Take a look at some of the selected projects I have recently completed</p>
        <a class="jms-link" href="#">Read more</a>
      </div>
      <img class="inset2" src="images/calvin_sandbox.jpg" />
    </div>
  </section>
</div>

<?php include('./assets/inc/footer.inc.php'); ?>

<script type="text/javascript" src="/assets/js/jmpress.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.jmslideshow.js"></script>
<script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
<script type="text/javascript">
  $(function() {
    $( '#jms-slideshow' ).jmslideshow();
  });
</script>
<script type="text/javascript" src="/assets/js/queryloader2.js"></script>
<script type='text/javascript'>
  $(document).ready(function () {
      $("body").queryLoader2({
        percentage: true,
        backgroundColor: '#121212',
        barHeight: 5,
        barColor: '#FFF',
        completeAnimation: 'grow'
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