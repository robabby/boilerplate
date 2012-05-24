<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li <?php if ($currentPage == 'about.php') {
          echo 'class="active"';} ?>><a href="about.php">About</a></li>
        <li <?php if ($currentPage == 'sandbox.php') {
          echo 'class="active"';} ?>><a href="sandbox.php">Sandbox</a></li>
        <li <?php if ($currentPage == 'blog.php') {
          echo 'class="active"';} ?>><a href="blog.php">Blog</a></li>
        <li class="last"><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>