<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/swiper-bundle.min.css" />
    <script src="<?php bloginfo('template_url'); ?>/assets/js/swiper-bundle.min.js" type="text-javascript"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <a class="btnsearch" href="#"></a>
      <a class="basket" href="#"></a>
      <a class="register" href="#">ورود / ثبت نام</a>
      <nav class="main-menu">
 <?php wp_nav_menu( array(
   'theme_location' => 'header-menu',
   'container' => ''
 )
 ); ?>
      </nav>
      <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons8-logo-50.png" /></a>
    </header>
    <div class="wp-center">
      <?php if( !is_home()){ ?>
      <div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')){ 
      rank_math_the_breadcrumbs();
      }elseif (function_exists('yoast_breadcrumbs')){
        yoast_breadcrumbs('<p id="breadcrumbs">','</p>');
      }
       ?>
      </div>
      <?php } ?>