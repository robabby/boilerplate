<?php 
  $path2root = "..";
  ob_start();
  try {
  include("$path2root/assets/inc/title.inc.php"); 
  include("$path2root/assets/inc/user_agent.php");
  require_once("$path2root/assets/inc/connection.inc.php");

  // initialize flags
  $OK = false;
  $done = false;
  // create database connection
  $conn = dbConnect('write');
  // initialize statement
  $stmt = $conn->stmt_init();

  // get details of selected record
  if (isset($_GET['article_id']) && !$_POST) {
    // prepare SQL query
    $sql = 'SELECT article_id, image_id, title, article
        FROM blog WHERE article_id = ?';
    $stmt->prepare($sql);
    // bind the query parameter
    $stmt->bind_param('i', $_GET['article_id']);
    // bind the results to variables
    $stmt->bind_result($article_id, $image_id, $title, $article);
    // execute the query, and fetch the result
    $OK = $stmt->execute();
    $stmt->fetch();
    // free the database resource for the next query
    $stmt->free_result();
  }
  // if form has been submitted, update record
  if (isset($_POST ['update'])) {
    // prepare update query
    if (!empty($_POST['image_id'])) {
    $sql = 'UPDATE blog SET image_id = ?, title = ?, article = ?
        WHERE article_id = ?';
    $stmt->prepare($sql);
    $stmt->bind_param('issi', $_POST['image_id'], $_POST['title'], $_POST['article'], $_POST['article_id']);
    } else {
    $sql = 'UPDATE blog SET image_id = NULL, title = ?, article = ?
        WHERE article_id = ?';
    $stmt->prepare($sql);
    $stmt->bind_param('ssi', $_POST['title'], $_POST['article'], $_POST['article_id']); 
    }
    $stmt->execute();
    $done = $stmt->affected_rows;
  }
  // redirect if $_GET['article_id'] not defined
  if ($done || !isset($_GET['article_id'])) {
    header("Location: $path2root/blog/blog_list.php");
    exit;
  }
  // store error message if query fails
  if (isset($stmt) && !$OK && !$done) {
    $error = $stmt->error;
  }
?>
<!doctype html>
<html>
<head>
  <?php include("$path2root/assets/inc/head.inc.php"); ?>
</head>
<body id="blank">
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
     chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 9]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<!-- ## CONTACT MODAL ## -->
<?php include("$path2root/assets/inc/contactModal.inc.php"); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include("$path2root/assets/inc/nav.inc.php"); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<div class="container">
  <div class="hero-unit">
    <h1>Update Blog Entry</h1>
    <p><a class="btn" href="blog_list.php">List all entries </a></p>
    <?php 
    if (isset($error)) {
      echo "<p class='warning'>Error: $error</p>";
    }
    if($article_id == 0) { ?>
    <p class="warning">Invalid request: record does not exist.</p>
    <?php } else { ?>
    <form id="form1" method="post" action="">
      <p>
        <label for="title">Title:</label>
        <input class="span8" name="title" type="text" class="widebox" id="title" value="<?php echo htmlentities($title, ENT_COMPAT, 'utf-8'); ?>">
      </p>
      <p>
        <label for="article">Article:</label>
        <textarea class="span8" name="article" cols="60" rows="8" class="widebox" id="article"><?php echo htmlentities($article, ENT_COMPAT, 'utf-8'); ?></textarea>
      </p>
      <p>
        <label for="image_id">Uploaded image:</label>
        <select name="image_id" id="image_id">
          <option value="">Select image</option>
          <?php
        // get the list of images
        $getImages = 'SELECT image_id, filename
                      FROM images ORDER BY filename';
        $images = $conn->query($getImages);
        while ($row = $images->fetch_assoc()) {
        ?>
          <option value="<?php echo $row['image_id']; ?>"
          <?php
        if ($row['image_id'] == $image_id) {
        echo 'selected';
        }
        ?>><?php echo $row['filename']; ?></option>
          <?php } ?>
        </select>
      </p>
      <p>
        <button class="btn btn-large btn-inverse" type="submit" name="update" id="update">Update Entry</button>
        <input name="article_id" type="hidden" value="<?php echo $article_id; ?>">
        <a href="blog_list.php" class="btn btn-large btn-danger">Cancel</a>
      </p>
    </form>
    <?php } ?>
  </div>
</div><!-- .container -->

<!-- #### MAIN CONTENT GOES HERE #### -->

<!-- ## FOOTER ## -->
<?php include("$path2root/assets/inc/footer.inc.php"); ?>
<!-- ## FOOTER ## -->

</body>
</html>
<?php
  } catch (exception $e) {
    ob_end_clean();
    header("Location: $path2root/error.php");
  }
  ob_end_flush();
?>