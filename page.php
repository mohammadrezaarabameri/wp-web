<?php get_header(); ?>
      <section class="pages-content">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="content-pa">
          <?php the_content(); ?>
          </div>
      </section>
      <?php get_sidebar(); ?>
    <?php get_footer(); ?>
