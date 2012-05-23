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
  body {
    padding-top: 0px;
  }
  #youtube header {display: none;}
  #youtube .container-fluid {
    background-color:#333;
  }
  #youtube .container {margin-bottom:50px;}
  #youtube .container * {
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
  }
  #playerContainer {
    display:block;
    position:relative; 
    width: 940px; 
    height: 500px; 
    margin:0px auto;
    border:10px solid #121212;
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
    margin-bottom: 10px;
    padding-left : 7px;
    margin-left: 0px;
    list-style: none;
  }
  ul.videos li {
    display:block;
    position:relative;
    float: left;
    width: 185px;
    padding:10px 10px 25px;
    margin: 5px 10px;
    background-color:#fff;
    border:1px solid #ccc;
    text-align:center;
    color:#333;
  }
  ul.videos li:hover {
    cursor:pointer;
    box-shadow:0px 3px 10px 0px rgba(0, 0, 0, .5);
  }
  ul.videos li img {
    display:block;
    max-width:100%;
    margin-bottom:10px;
  }
  ul.videos li span {
    display:block;
    position:absolute;
    left:0px;
    bottom:-10px;
    width:205px;
    height:25px;
    border-top:1px solid #CCC;
    margin-bottom:10px;
    line-height:25px;
    background: #f6f8f9; /* Old browsers */
    background: -moz-linear-gradient(top, #f6f8f9 0%, #e5ebee 50%, #d7dee3 51%, #f5f7f9 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f6f8f9), color-stop(50%,#e5ebee), color-stop(51%,#d7dee3), color-stop(100%,#f5f7f9)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #f6f8f9 0%,#e5ebee 50%,#d7dee3 51%,#f5f7f9 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #f6f8f9 0%,#e5ebee 50%,#d7dee3 51%,#f5f7f9 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #f6f8f9 0%,#e5ebee 50%,#d7dee3 51%,#f5f7f9 100%); /* IE10+ */
    background: linear-gradient(top, #f6f8f9 0%,#e5ebee 50%,#d7dee3 51%,#f5f7f9 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f8f9', endColorstr='#f5f7f9',GradientType=0 ); /* IE6-9 */
  }
  </style>
  <script type="text/javascript" src="http://swfobject.googlecode.com/svn/trunk/swfobject/swfobject.js"></script>
  <script type="text/javascript">
  function loadVideo(playerUrl, autoplay) {
    swfobject.embedSWF(
        playerUrl + '&rel=1&border=0&fs=1&autoplay=' + 
        (autoplay?1:0), 'player', '940', '500', '9.0.0', false, 
        false, {allowfullscreen: 'true'});
  }

  function showMyVideos2(data) {
    var feed = data.feed;
    var entries = feed.entry || [];
    var html = ['<ul class="videos">'];
    for (var i = 0; i < entries.length; i++) {
      var entry = entries[i];
      var title = entry.title.$t.substr(0, 30);
      var thumbnailUrl = entries[i].media$group.media$thumbnail[0].url;
      var playerUrl = entries[i].media$group.media$content[0].url;
      html.push('<li onclick="loadVideo(\'', playerUrl, '\', true)">',
                '<img src="', 
                thumbnailUrl, '" />', '<span class="titlec">', title, '</span></li>');
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
<div class="container-fluid">
  <div class="row">
    <div id="playerContainer">
        <object id="player"></object>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="well">
      <div id="videos2"></div>
      <script 
          type="text/javascript" 
          src="http://gdata.youtube.com/feeds/users/stat30fbliss/uploads?alt=json-in-script&callback=showMyVideos2&max-results=32">
      </script>
    </div><!-- .well -->
  </div><!-- .row -->
</div><!-- .container -->
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