<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

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
            <li <?php if(is_page('about-us') or wp_get_post_parent_id(0)==14)
              echo 'class="current-menu-item"' ?> >
              <a href="<?php echo site_url('/about-us');?>">About Us</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Team</a></li>
            <li <?php if(get_post_type() == 'post'){ echo 'class="current-menu-item"';} ?> ><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          </ul>
          <!-- <?php wp_nav_menu( array(
            'theme_location'=>'headerMenuLocation'
            )); //menu location frm functions.php
            ?> -->
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--green float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--red float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
