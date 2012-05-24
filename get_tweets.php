<?php 
  $path2root = "";
  ob_start();
  try {
  include('./assets/inc/title.inc.php'); 
  include('./assets/inc/user_agent.php');
  require_once("./assets/inc/connection.inc.php");

  function GetTweets($user) // Recipe 58
  {
     // Recipe 58 Get Tweets
     //
     // This recipe returns the most recent 20 tweets of a Twitter
     // user. The argument required is:
     //
     //    $user: Twitter username
     //
     // Upon success the recipe returns a two element array, the
     // first of which contains the number of tweets returned, and
     // the second is an array of the tweets. On failure a single
     // element array is returned with the value FALSE.

     date_default_timezone_set('utc');
     $url  = "http://twitter.com/statuses/user_timeline/$user.xml";
     $file = @file_get_contents($url);
     if (!strlen($file)) return array(FALSE);
     
     $xml  = @simplexml_load_string($file);
     if ($xml == FALSE) return array(FALSE);
     
     $tweets = array();

     foreach ($xml->status as $tweet)
     {
        $timestamp = strtotime($tweet->created_at);
        $tweets[] = "(" . date("M jS, g:ia", $timestamp) . ") " .
           $tweet->text;
     }

     return array(count($tweets), $tweets);
  }

?>
<!doctype html>
<html>
<head>
  <?php include('./assets/inc/head.inc.php'); ?>
  <style>
  .well {
    background-image:url('/images/grey3.jpg');
    color:#fff;
  }
  </style>
</head>
<body id="blank">
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
     chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 9]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<!-- ## CONTACT MODAL ## -->
<?php include('./assets/inc/contactModal.inc.php'); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include('./assets/inc/nav.inc.php'); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<div class="container">
  <div class="hero-unit">
    <?php // Recipe 58: Get Tweets

    $user   = 'stat30fbliss';
    $result = GetTweets($user);

    echo "<h1>Viewing $user:</h1>";

    if (!$result[0]) echo 'Failed';
    else
       for ($j = 0 ; $j < $result[0] ; ++$j)
          echo "<div class='well'>" . $result[1][$j] . "</div>";

    ?>
  </div>
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