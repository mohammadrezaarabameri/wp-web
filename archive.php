<?php get_header(); ?>
      <div class="archive-content">
        <h1 class="content-title"><?php single_cat_title(); ?></h1>
        <div class="clear"></div>
        <?php 
        if (have_posts()) : while(have_posts()) : the_post() ?>
        <div class="archive-item">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('archive-thumbnail'); ?></a>
          <a href="<?php the_permalink(); ?>"><h3 class="archive-title"><?php the_title(); ?></h3></a>
          <a href="<?php the_permalink(); ?>" class="readmore">ادامه مطلب</a>
        </div>
          <?php
          endwhile;
          ?>
          <div class='clear'></div>
          <?php
          paginationArchive();
        endif;
/* Restore original Post Data */
wp_reset_postdata();
             ?>
      </div>
      <?php get_sidebar(); ?>
      <?php get_footer(); ?>
