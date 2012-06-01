<!DOCTYPE html> 
<html> 
<head> 
	<title>jQuery Mobile</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
	<link rel="stylesheet" href="assets/style.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
</head> 
<body> 

<!-- ##########################
	 		HOME PAGE
	 ########################## -->

<div data-role="page" id="home" data-theme="b">

	<div id="header" data-role="header">
		<img class="logo" src="images/logo_small.png" />
	</div><!-- /header -->

	<div data-role="content">
		<ul clas="main" data-role="listview">
			<li data-icon="false">
				<a href="#auto">Find a Car</a>
				<p>Find a car in your area</p>
			</li>
			<li data-icon="false">
				<a href="#loan">Apply for a Loan</a>
				<p>Almost everyone gets approved!</p>
			</li>
			<li data-icon="false">
				<a href="#rss">Read Articles</a>
				<p>Autos, Lifestyle, People, Tech &amp; Trends</p>
			</li>
		</ul>
		<br />
		<div class="ui-grid-a">
			<div class="ui-block-a">&nbsp;</div>
			<div class="ui-block-b">&nbsp;</div>
		</div><!-- /grid-a -->
	</div><!-- /content -->

	<div id="footer" data-role="footer" data-position="fixed">
		<div data-role="navbar" data-iconpos="top">
			<ul>
				<li><a data-icon="info" href="#info" data-transition="flow">Info</a></li>
			</ul>
		</div>
	</div>

</div><!-- /page -->

<!-- ##########################
	 	AUTO SEARCH PAGE
	 ########################## -->

<div data-role="page" id="auto" data-theme="b">

	<div id="header" data-role="header">
		<a href="#home" class="btn" data-role="button" data-icon="back">Back</a>
		<h1>New &amp; Used Car Search</h1>
	</div><!-- /header -->

	<div data-role="content">
		<div data-role="collapsible" data-collapsed="false">
			<h3>New Cars</h3>
			<form>
			  <p>
		          <label>Make:</label>
		          <input type="text" id="make" name="make">
		      </p>
		      <p>
		          <label>Model:</label>
		          <input type="text" id="model" name="model">
		      </p>
		      <p>
		          <label>Zip:</label>
		          <input type="text" id="zip" name="zip">
	          </p>
		      <p>
		          <label>Search Radius:</label>
		          <select id="select01">
		            <option>Distance</option>
		            <option>5</option>
		            <option>10</option>
		            <option>25</option>
		            <option>50</option>
		            <option>75</option>
		            <option>100</option>
		          </select>
		      </p>
		      <p>
		        <fieldset class="ui-grid-a">
				  <div class="ui-block-a"><a href="#home" data-role="button" type="submit" data-theme="c">Cancel</a></div>
				  <div class="ui-block-b"><button type="submit" data-theme="b">Submit</button></div>	   
				</fieldset>
		      </p>
	        </form>	
    	</div><!-- #collapsible -->
    	<div data-role="collapsible">
			<h3>Used Cars</h3>
			<form>
			  <p>
		          <label>Make:</label>
		          <input type="text" id="make" name="make">
		      </p>
		      <p>
		          <label>Model:</label>
		          <input type="text" id="model" name="model">
		      </p>
		      <p>
		          <label>Zip:</label>
		          <input type="text" id="zip" name="zip">
	          </p>
		      <p>
		          <label>Search Radius:</label>
		          <select id="select01">
		            <option>Distance</option>
		            <option>5</option>
		            <option>10</option>
		            <option>25</option>
		            <option>50</option>
		            <option>75</option>
		            <option>100</option>
		          </select>
		      </p>
		      <p>
		        <fieldset class="ui-grid-a">
				  <div class="ui-block-a"><a href="#home" data-role="button" type="submit" data-theme="c">Cancel</a></div>
				  <div class="ui-block-b"><button type="submit" data-theme="b">Submit</button></div>	   
				</fieldset>
		      </p>
	        </form>	
    	</div><!-- #collapsible -->
	</div><!-- /content -->

	<div id="footer" data-role="footer" data-position="fixed">
		<p>Web2Carz.com, LTD</p>
	</div>

</div><!-- /page -->

<!-- ##########################
	 		LOAN PAGE
	 ########################## -->

<div data-role="page" id="loan" data-theme="b">

	<div id="header" data-role="header">
		<a href="#home" class="btn" data-role="button" data-icon="back">Back</a>
		<h1>Find a Car Loan</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<form>
		  <p>
	          <label>Zip:</label>
	          <input type="text" id="make" name="make">
	      </p>
	      <p>
	          <label>Select Loan Type:</label>
	          <select id="select01">
	            <option>Select</option>
	            <option>New</option>
	            <option>Used (Dealer)</option>
	            <option>Used (Private)</option>
	            <option>Refinance</option>
	          </select>
	      </p>
	      <p>
	          <label>Estimate Your Credit:</label>
	          <select id="select01">
	            <option>Select</option>
	            <option>Excellent</option>
	            <option>Very Good</option>
	            <option>Good</option>
	            <option>Fair</option>
	            <option>Poor</option>
	          </select>
	      </p>
	      <p>
	        <fieldset class="ui-grid-a">
			  <div class="ui-block-a"><a href="#home" data-role="button" type="submit" data-theme="c">Cancel</a></div>
			  <div class="ui-block-b"><button type="submit" data-theme="b">Submit</button></div>	   
			</fieldset>
	      </p>
        </form>	
	</div><!-- /content -->

	<div id="footer" data-role="footer" data-position="fixed">
		<p>Web2Carz.com, LTD</p>
	</div>

</div><!-- /page -->

<!-- ##########################
	 	RSS PAGE
	 ########################## -->

<div data-role="page" id="rss" data-theme="c">

	<div id="header" data-role="header">
		<a href="#home" class="btn" data-role="button" data-icon="back">Back</a>
		<h1>Recent Articles</h1>
		<a href="#rss-pop" data-transition="slideup" data-icon="gear" class="ui-btn-right">Options</a>
	</div><!-- /header -->

	<div data-role="content">	
		<ul data-role="listview" data-filter="true">
		<?php 
			$url = 'http://www.web2carz.com/rss/articles';
			$feed = simplexml_load_file($url, 'SimpleXMLIterator');
			$filtered = new LimitIterator($feed->channel->item, 0, 15);
			foreach ($filtered as $item) { ?>
				<li data-icon="false">
					<h2><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h2>
					<p class="desc"><?php echo $item->description; ?></p>
					<br />
					<p class="category"><b><?php echo $item->category; ?></b></p>
					<a class="link" href="<?php echo $item->link; ?>">Read More</a>
					<br />
					<p class="pubDate"><?php echo $item->pubDate; ?></p>
					<br />
				</li>
		<?php } ?>	
		</ul>
	</div><!-- /content -->

	<div id="footer" data-role="footer">
		<p>Web2Carz.com, LTD</p>
	</div>

</div><!-- /page -->

<!-- ### RSS OPTIONS ### -->

<div data-role="page" id="rss-pop">

	<div data-role="header">
		<a href="#rss" class="btn" data-role="button" data-icon="back" data-transition="slidedown">Back</a>
		<h1>Feed options</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<ul data-role="listview" data-theme="b">
			<li><a href="#">Sort</a></li>
			<li><a href="#">Recent</a></li>
			<li><a href="#">Most Popular</a></li>
			<li><a href="#">Filter by Subject</a>
				<ul>
					<li><a href="#">Autos</a></li>
					<li><a href="#">Lifestyle</a></li>
					<li><a href="#">People</a></li>
					<li><a href="#">Tech</a></li>
					<li><a href="#">Trends</a></li>
				</ul>
			</li>
		</ul>		
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed">
		<h4>Web2Carz.com, LLC</h4>
	</div><!-- /footer -->
</div><!-- /page -->

<!-- ##########################
	 	INFO PAGE
	 ########################## -->

<div data-role="page" id="info">

	<div data-role="header">
		<a href="#home" class="btn" data-role="button" data-icon="back" data-transition="flow">Back</a>
		<h1>Information</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>jQuery Mobile</h2>
		<p>This template is built on the versatile <a href="http://jquerymobile.com/" target="_blank">jQuery Mobile</a> framework.</p>
		<p>Talking points regarding jQuery Mobile:</p>
		<ol>
			<li>Supports every OS &amp; Browser</li>
			<li>Demands simplicity and minimal documents to manage.  Everything is built off of one HTML file &amp; one CSS file</li>
			<li>Small footprint: Only four total required JavaScript/CSS docs.</li>
			<li>Very friendly with PHP</li>
			<li>Could wrap the App with <a href="http://phonegap.com/">PhoneGap</a> later on and easily publish to Android/iPhone Marketplaces</li>
			<li>Somewhat limited appearance options:
				<ul>
					<li>There are five Themes to Pick from</li>
					<li>It is very easy to mix and match different themes to build a custom look and feel</li>
					<li>Can still integrate in images from Alance to build more of a custom look</li>
				</ul>
			</li>
			<br />
		</ol>
		<br />
		<p><b>Try one of the other mobile options:</b></p>
		<br />
		<ul clas="main" data-role="listview" data-theme="b">
			<li data-icon="false">
				<a rel="external" href="../index.php">Bootstrap</a>
				<p>Responsive HTML5 framework with excellent support for multi-screen sites</p>
			</li>
			<li data-icon="false">
				<a rel="external" href="../sencha/index.html">Sencha Touch</a>
				<p>A purely JavaScript driven HTML5 mobile framework, with added iPad/iOS support</p>
			</li>
		</ul>		
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Web2Carz.com, LLC</h4>
	</div><!-- /footer -->
</div><!-- /page -->


</body>
</html>