<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/all.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/swiper-bundle.min.css" />
    <script src="<?php bloginfo('template_url'); ?>/assets/js/swiper-bundle.min.js" type="text-javascript"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <a class="btnsearch" href="#"></a>
      <div class='basket-cart-content'>
      <a class="basket" href="<?php echo wc_get_cart_url(); ?>">
      <?php if((wc()->cart->get_cart_contents_count())){ ?>
        <span class='cart-number'><?php echo wc()->cart->get_cart_contents_count(); ?></span>
      <?php } ?>
      </a>
      <div class='widget woocommerce widget_shopping_cart'>
        <?php woocommerce_mini_cart(); ?>
      <div class='widget_shopping_cart_content'></div>
      </div>
      <?php $account_link = get_permalink(get_option('woocommerce_myaccount_page_id'));
      global $current_user;
       ?>
       </div>
       <div class='userbox-holder'>
         <a class="register" href="<?php echo $account_link; ?>"> 
            <?php if(is_user_logged_in()){
             echo get_avatar($current_user->ID,30);?>
             <span class='username-login'><?php echo $current_user->display_name; ?></span>
             <?php
         } else{?>
         ورود / ثبت نام 
         <?php } ?>
       </a>
       <?php if(is_user_logged_in()){ ?>
       <div class ='user-drop'>
         <ul>
           <li>
             <a href='<?php echo $account_link; ?>'>
             <i class="fa-solid fa-gauge-simple-high"></i>
             داشبوردکاربری</a>
             <a href='<?php echo wc_get_page_permalink('myaccount') ?>orders/'>
             <i class="fa-solid fa-folder-plus"></i>
             سفارش ها</a>
             <a href='<?php echo wc_get_page_permalink('myaccount') ?>edit-account/'>
             <i class="fa-solid fa-user-pen"></i>
             ویرایش حساب</a>
             <a href='<?php echo wc_logout_url() ?>'>
             <i class="fa-solid fa-square-arrow-up-right"></i>
             خروج</a>
           </li>
         </ul>
       </div>
       <?php } ?>
       </div>
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