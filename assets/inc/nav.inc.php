<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

  <header>
    <nav>
      <h1 class="brand">
        <a href="<?php echo $path2root ?>/index.php" title="Raw Designs">RawDesigns<small>.net</small></a>
      </h1>
      <ul>
        <li <?php if ($currentPage == 'index.php') {
          echo 'class="active"';} ?>><a class="first" href="<?php echo $path2root ?>/index.php">Home</a></li>
        <li <?php if ($currentPage == 'about.php') {
          echo 'class="active"';} ?>><a href="<?php echo $path2root ?>/about.php">About</a></li>
        <li <?php if ($currentPage == 'sandbox.php') {
          echo 'class="active"';} ?>><a href="<?php echo $path2root ?>/sandbox.php">Sandbox</a></li>
          <li <?php if ($currentPage == 'blog.php') {
          echo 'class="active"';} ?>><a href="<?php echo $path2root ?>/blog.php">Blog</a></li>
        <li class="last <?php if ($currentPage == 'contact.php') {
          echo 'active';} ?>"><a href="<?php echo $path2root ?>/contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>