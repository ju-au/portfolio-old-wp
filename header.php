<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico">
  <title>Junya's Portfolio Site</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://kit.fontawesome.com/967f098682.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
  <div id="headerContainer">
    <h1>Junya's Portfolio Site</h1>
    <!-- モバイル表示時のナビゲーションドロワー -->
    <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
      </label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <nav>
          <ul>
              <li><a href="<?php echo home_url(); ?>/#">Top</a></li>
              <li><a href="<?php echo home_url(); ?>/#about">About</a></li>
              <li><a href="<?php echo home_url(); ?>/#service">Service</a></li>
              <li><a href="<?php echo home_url(); ?>/#works">Works</a></li>
              <li><a href="<?php echo home_url(); ?>/#skills">Skills</a></li>
              <li><a href="<?php echo home_url(); ?>/#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>

<img src="<?php echo get_template_directory_uri(); ?>/images/common/cairns.jpg" id="bg-img">
