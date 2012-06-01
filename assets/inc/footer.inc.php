  <footer>
    <h1><a id="toggle" href="#" onClick="return false">&lt;RD&gt;</a></h1>
    <div class="btn-group dropup">
      <button id="toggle" class="btn primary">&nbsp;&nbsp;&nbsp;&nbsp;Menu&nbsp;&nbsp;&nbsp;&nbsp;</button>
      <button class="btn primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a data-toggle="modal" href="#contact">Feedback</a></li>
        <li><a href="/mobile/sencha/">Mobile</a></li>
        <li><a href="sandbox.php">Sandbox</a></li>
        <li><a href="index.php">Home</a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
    <div id="drawer" class="drawer">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span3">
            <br />
            <div class="well">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
          </div>
          <div class="span3">
            <br />
            <div class="well">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
          </div>
          <div class="span3">
            <br />
            <div class="well">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
          </div>
          <div class="span3">
            <br />
            <div class="well">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
          </div>
          <br />
          <p class="copy">&copy; Raw Designs 
          <?php 
          
          $startYear = 2010;
          $thisYear = date('Y');
          if ($startYear == $thisYear) {
            echo $startYear;
          } else {
            echo "{$startYear} &#8211; {$thisYear}";
          }
          
          ?></p>
          </div><!-- .row-fluid -->
        </div><!-- .container-fluid -->
      </div><!-- #drawer -->
  </footer>

  <script src="/assets/js/bootstrap.js"></script>
  <script src="/assets/js/jquery.easing.js"></script>
  <script>
    $('#contact').modal('hide');
    $(".alert").alert();
    $('#tool').tooltip('hide');
    $("#toggle").click(function () {
      $("#drawer").slideToggle(1000, 'easeInOutCubic', function() {
        // Animation complete.
      });
    });
  </script>
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  