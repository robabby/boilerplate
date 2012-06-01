<?php 
	ob_start();
	try {
	include('./includes/title.inc.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include('./includes/head.inc.php'); ?>
  </head>

  <body id="auto_search">
          	
  <?php
  	$file = 'includes/nav.inc.php';
  	if (file_exists($file) && is_readable($file)) {
  		include($file);
  	} else {
  		throw new Exception("$file can't be found");
  	}
  ?>
  
	<div class="container-fluid">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <a href="index.php"><img class="logo" src="images/logo.png" /></a>
      </div>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span12">
          <div class="well">
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                    <h2>New Cars</h2>
                  </a>  
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <form>
                      <label>Make:</label>
                      <input type="text" id="make" name="make">
                      <label>Model:</label>
                      <input type="text" id="model" name="model">
                      <label>Zip:</label>
                      <input type="text" id="zip" name="zip">
                      <label>Search Radius:</label>
                      <select id="select01">
                        <option>Distance</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                      <br />
                      <input class="btn btn-primary" type="submit" id="submit" value="Submit">
                    </form>
                   </div>
                 </div>
               </div>
               <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                    <h2>Used Cars</h2>
                    </a>  
                </div>
                <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                  <div class="accordion-inner">
                    <form>
                      <label>Make:</label>
                      <input type="text" id="make" name="make">
                      <label>Model:</label>
                      <input type="text" id="model" name="model">
                      <label>Zip:</label>
                      <input type="text" id="zip" name="zip">
                      <label>Search Radius:</label>
                      <select id="select01">
                        <option>Distance</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                      <br />
                      <input class="btn btn-primary" type="submit" id="submit" value="Submit">
                    </form>
                   </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <?php include('./includes/footer.inc.php'); ?>

    </div> <!-- /container -->
	
  </body>
</html>
<?php
	} catch (exception $e) {
		ob_end_clean();
		header('Location: error.php');
	}
	ob_end_flush();
?>