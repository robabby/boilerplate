<?php 
  $path2root = "";
  ob_start();
  try {
  include('./assets/inc/title.inc.php'); 
  include('./assets/inc/user_agent.php');
  require_once("./assets/inc/connection.inc.php");

  // My Code
  $url = 'https://twitter.com/statuses/user_timeline/stat30fbliss.xml';
  $feed = simplexml_load_file($url, 'SimpleXMLIterator');
  $filtered = new LimitIterator($feed->status);
  
  /**
   * Replace links in text with html links
   *
   * @param  string $text
   * @return string
   */
  function auto_link_text($text) {
    $pattern  = '#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#';
    return preg_replace_callback($pattern, 'auto_link_text_callback', $text);
  }

  function auto_link_text_callback($matches) {
      $max_url_length = 50;
      $max_depth_if_over_length = 2;
      $ellipsis = '&hellip;';

      $url_full = $matches[0];
      $url_short = '';

      if (strlen($url_full) > $max_url_length) {
          $parts = parse_url($url_full);
          $url_short = $parts['scheme'] . '://' . preg_replace('/^www\./', '', $parts['host']) . '/';

          $path_components = explode('/', trim($parts['path'], '/'));
          foreach ($path_components as $dir) {
              $url_string_components[] = $dir . '/';
          }

          if (!empty($parts['query'])) {
              $url_string_components[] = '?' . $parts['query'];
          }

          if (!empty($parts['fragment'])) {
              $url_string_components[] = '#' . $parts['fragment'];
          }

          for ($k = 0; $k < count($url_string_components); $k++) {
              $curr_component = $url_string_components[$k];
              if ($k >= $max_depth_if_over_length || strlen($url_short) + strlen($curr_component) > $max_url_length) {
                  if ($k == 0 && strlen($url_short) < $max_url_length) {
                      // Always show a portion of first directory
                      $url_short .= substr($curr_component, 0, $max_url_length - strlen($url_short));
                  }
                  $url_short .= $ellipsis;
                  break;
              }
              $url_short .= $curr_component;
          }

      } else {
          $url_short = $url_full;
      }

      return "<a rel=\"nofollow\" href=\"$url_full\">$url_short</a>";
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
    

    <?php 
      foreach ($filtered as $status) { ?>
      <div class="well">
        <span class="label pull-right"><?php echo $status->created_at; ?></span>
        <h2><a href="article.php?rss_url=<?php echo $status->link; ?>"><?php echo $status->title; ?></a></h2>
        <p class="description"><?php echo $status->text; ?></p>
        <div class="clear"></div>
        <a class="link btn btn-large pull-right" href="article.php?rss_url=<?php echo $status->link; ?>">Read More</a>
        <br />
        <span class="label label-info"><?php echo $status->pubDate; ?></span>
      </div><!-- .well -->
    <?php } ?>

    <?php // Recipe 58: Get Tweets
    /*
    $user   = 'stat30fbliss';
    $result = GetTweets($user);

    echo "<h2>Viewing <a href='http://twitter.com/$user' title='$user on Twitter'>$user</a>:</h2>";

    if (!$result[0]) echo 'Failed';
    else
       for ($j = 0 ; $j < $result[0] ; ++$j)
          echo "<div class='well'>" . $result[1][$j] . "</div>";
    */
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