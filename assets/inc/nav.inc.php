<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

  <header>
    <nav>
      <h1 class="brand">
        <a href="<?php echo $path2root ?>/index.php" title="Raw Designs">RawDesigns<small>.net</small></a>
      </h1>
      <ul>
        <li <?php if ($currentPage == 'index.php') {
          echo 'class="active"';} ?>><a class="first" href="<?php echo $path2root ?>/index.php"><b>w</b> Home</a></li>
        <li <?php if ($currentPage == 'about.php') {
          echo 'class="active"';} ?>><a href="<?php echo $path2root ?>/about.php"><b>?</b> About</a></li>
        <li <?php if ($currentPage == 'sandbox.php') {
          echo 'class="active"';} ?>><a href="<?php echo $path2root ?>/sandbox.php"><b>(</b> Sandbox</a></li>
          <li <?php if ($currentPage == 'blog.php') {
          echo 'class="active"';} ?>><a href="<?php echo $path2root ?>/blog.php"><b>a</b> Blog</a></li>
        <li class="last <?php if ($currentPage == 'contact.php') {
          echo 'active';} ?>"><a href="<?php echo $path2root ?>/contact.php"><b>b</b> Contact</a></li>
      </ul>
    </nav>
  </header>