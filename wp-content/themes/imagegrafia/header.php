<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>

  <header class="site-header">
    <div class="container">
  <a href="<?php echo site_url();?>"> <img src=" <?php echo get_theme_file_uri('images/header-logo.png');?>" width="50" height="50" alt="imagegrafia_logo">
      <!-- <h1 class="school-logo-text float-left">
      <strong>Imagegrafia</strong>.Com</a></h1> -->
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li><a href="<?php echo site_url('/about-us');?>">About Us</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--green float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--red float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
