<?php get_header(); ?>

<div class="col-md-8 blog-main">
  <?php the_title('<h1 class="mt-3">','</h1>'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
