<?php 
  $path2root = "";
  ob_start();
  try {
  include('./assets/inc/title.inc.php'); 
  include('./assets/inc/user_agent.php');
  require_once("./assets/inc/connection.inc.php");

  // Scan Directory Script
  //
  // define number of columns in table
  define('COLS', 2);
  // initialize variables for the horizontal looper
  $pos = 0;
  $firstRow = true;
  // set maximum number of records
  define('SHOWMAX', 6);
  $conn = dbConnect('read');
  // prepare SQL to get total records
  $getTotal = 'SELECT COUNT(*) FROM images';
  // submit query and store result as $totalPix
  $total = $conn->query($getTotal);
  $row = $total->fetch_row();
  $totalPix = $row[0];
  // set the current page
  $curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 0;
  // calculate the start row of the subset
  $startRow = $curPage * SHOWMAX;
  // prepare SQL to retrieve subset of image details
  $sql = "SELECT filename, caption FROM images LIMIT $startRow," . SHOWMAX;
  // submit the query
  $result = $conn->query($sql) or die(mysqli_error());
  // extract the first record as an array
  $row = $result->fetch_assoc();
  // get the name and caption for the main image
  if (isset($_GET['image'])) {
    $mainImage = $_GET['image'];
  } else {
    $mainImage = $row['filename'];
  }
  // get the dimensions of the main image
  $imageSize = getimagesize("$path2root/images/".$mainImage); 
?>
<!doctype html>
<html>
<head>
  <?php include('./assets/inc/head.inc.php'); ?>
</head>
<body id="blank">
  
<!-- ## CONTACT MODAL ## -->
<?php include('./assets/inc/contactModal.inc.php'); ?>
<!-- ## CONTACT MODAL ## -->

<!-- ## HEADER & NAV ## -->
<?php include('./assets/inc/nav.inc.php'); ?>
<!-- ## HEADER & NAV ## -->

<!-- #### MAIN CONTENT GOES HERE #### -->



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