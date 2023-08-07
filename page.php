<?php get_header(); ?>
    <div class="wp-center">
      <div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')){ 
      rank_math_the_breadcrumbs();
      }elseif (function_exists('yoast_breadcrumbs')){
        yoast_breadcrumbs('<p id="breadcrumbs">','</p>');
      }
       ?>
      </div>
      <section class="pages-content">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="content-pa">
          <?php the_content(); ?>
          </div>
      </section>
      <?php get_sidebar(); ?>
    </div>
    <div class="clear"></div>
    <?php get_footer(); ?>
