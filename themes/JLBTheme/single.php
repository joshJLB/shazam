<?php
/*
  Template Name: Single Post
  single.php (the Template for displaying all single posts)
*/
get_header(); ?>

<main id="single-post">
  <?php get_template_part('components/header/child-header'); ?>

  <div class="single-post-container">
    <?php if ( have_posts() ): ?>
      <?php while ( have_posts() ): the_post(); ?>

        <!-- Content Layout Here -->
        <div class="single-blog">
          <div class="single-blog-image" style="background-image:url(<?=the_post_thumbnail_url();?>)"></div>
          <div class="single-blog-content">
            <h4><?php the_time('l, F j, Y'); ?></h4>
            <?php the_content(); ?>
            <h5>-<?php the_author(); ?></h5>
          </div>
          
        </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</main>

<?php get_footer();
