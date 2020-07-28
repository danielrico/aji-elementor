<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" class="content">
    <div><?php the_content(); ?></div>
  </div>
 <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>