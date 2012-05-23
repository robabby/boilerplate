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
  #youtube header {display: none;}
  #playerContainer {
    display:block;
    position:relative; 
    width: 640px; 
    height: 390px; 
    margin:0 auto;
    border:10px solid #121212;
    border-radius:5px;
    box-shadow:0px 0px 20px 5px rgba(0, 0, 0, .75);
  }
  #player {
    position: relative;
    z-index:-1;
  }
  .titlec {
    font-size: small;
  }
  ul.videos {
    display:block;
    position:relative;
    padding:0 0 0 20px;
  }
  ul.videos li {
    float: left;
    width: 180px;
    margin-bottom: 1em;
  }
  ul.videos
  {
    margin-bottom: 1em;
    padding-left : 10px;
    margin-left: 0em;
    list-style: none;
  }
  </style>
  <script type="text/javascript" src="http://swfobject.googlecode.com/svn/trunk/swfobject/swfobject.js"></script>
  <script type="text/javascript">
  function loadVideo(playerUrl, autoplay) {
    swfobject.embedSWF(
        playerUrl + '&rel=1&border=0&fs=1&autoplay=' + 
        (autoplay?1:0), 'player', '640', '390', '9.0.0', false, 
        false, {allowfullscreen: 'true'});
  }

  function showMyVideos2(data) {
    var feed = data.feed;
    var entries = feed.entry || [];
    var html = ['<ul class="videos">'];
    for (var i = 0; i < entries.length; i++) {
      var entry = entries[i];
      var title = entry.title.$t.substr(0, 20);
      var thumbnailUrl = entries[i].media$group.media$thumbnail[0].url;
      var playerUrl = entries[i].media$group.media$content[0].url;
      html.push('<li onclick="loadVideo(\'', playerUrl, '\', true)">',
                '<span class="titlec">', title, '...</span><br /><img src="', 
                thumbnailUrl, '" width="175" height="97"/>', '</span></li>');
    }
    html.push('</ul><br style="clear: left;"/>');
    document.getElementById('videos2').innerHTML = html.join('');
    if (entries.length > 0) {
      loadVideo(entries[0].media$group.media$content[0].url, false);
    }
  }
  </script>
</head>
<body id="youtube">

<!-- ## CONTACT MODAL ## -->
<?php include('./assets/inc/contactModal.inc.php'); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include('./assets/inc/nav.inc.php'); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->
<div class="container">
  <div class="row">
    <div class="hero-unit">
      <div id="playerContainer">
          <object id="player"></object>
      </div>
    </div><!-- .hero-unit -->
    <div class="well">
      <div id="videos2"></div>
      <script 
          type="text/javascript" 
          src="http://gdata.youtube.com/feeds/users/stat30fbliss/uploads?alt=json-in-script&callback=showMyVideos2&max-results=30">
      </script>
    </div><!-- .well -->
  </div><!-- .row -->
</div><!-- .container -->
<!-- #### MAIN CONTENT GOES HERE #### -->

<?php include('./assets/inc/footer.inc.php'); ?>
</body>
</html>
<?php
  } catch (exception $e) {
    ob_end_clean();
    header('Location: error.php');
  }
  ob_end_flush();
?>