<?php get_header(); ?>
<?php get_sidebar() ?>

<div class="l_container">
<?php get_template_part('masthead'); ?>
<header>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="l_article">
      <h2 class="text-center"><?php the_title(); ?></h2>
    <p class="c_date__text text-center">Published: <?php the_date('F Y'); ?>, Last updated: <?php the_modified_date('F Y'); ?></p>
    <p>
      <?php the_content(); ?>
    </p>
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</div>

<div class="l_sidebar__right text-center">
  <?php dynamic_sidebar( 'right_sidebar_widget' ); ?>
</div>
</div>
<?php get_footer(); ?>
