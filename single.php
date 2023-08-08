<?php get_header(); ?>
      <section class="pages-content">
        <div class="thumbnail-image"><?php the_post_thumbnail('post-thumbnail'); ?>
        </div>
        <div class="specification-post">
          <span class="category-post" ><?php the_category(' , '); ?></span>
          <h1 class="post-title"><?php the_title(); ?></h1>
          <p class="short-desc"><?php echo wp_trim_words(get_the_excerpt(), 25 ,' ...'); ?></p>
          <div class="meta-info">
            <span class="comment"><?php echo get_comments_number(); ?></span>
            <span class="publish-date"><?php echo get_the_date('j F Y'); ?></span>
            <a href='<?php echo get_author_posts_url(get_the_author_meta('ID'));?>'><span class="author-name"><?php the_author(); ?></span></a>
          </div>
        </div>
        <div class="clear"></div>
        <div class="inner-content">
          <?php the_content(); ?>
        </div>
      </section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>