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
  <?php endif;
  query_posts(array( 'post_parent' => 8, 'post_type' => 'page')); ?>

<ul class="l-grid">

<?php while (have_posts()) { the_post();
    /* Do whatever you want to do for every page... */
} ?>


<li class="card__small">
<h3 class="card__small__header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p>
<a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, resources_description, true); ?></a>
</p>
</li>

<?php wp_reset_query();  // Restore global post <data value=""></data> ?>
</ul>
</div>

<div class="l_sidebar__right text-center">
  <?php dynamic_sidebar( 'right_sidebar_widget' ); ?>
</div>
</div>
<?php get_footer(); ?>
