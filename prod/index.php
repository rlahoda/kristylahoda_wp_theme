<?php get_header(); ?>
<?php get_sidebar() ?>

<div class="l_container">
<?php get_template_part('masthead'); ?>
<header>
<?php  if ( is_home() ) { ?>
  <h2 class="text-center">Latest Updates</h2></header>
<?php } else {
  if ( is_search() ) { ?>
    <h2 class="text-center"><?php _e( 'Search Results for:', 'kl1' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h2></header>
<?php } else { ?>

<h2 class="text-center"><?php the_archive_title(); ?></h2></header>
<?php } } ?>
<div class="l_article">
<ul class="l-grid">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li class="card__small card__small_border">
<h3 class="card__small__header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p>
  <a href="<?php the_permalink(); ?>"><?php the_content(__('Read more...')); ?></a>
</p>
  </li>
<?php endwhile;?>

<div class="card__small__full-width text-center"><h4><?php the_posts_pagination( array( 'screen_reader_text' => ' ','mid_size'  => 2 ) );?></h4></div>
 <?else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</ul>
</div>

<div class="l_sidebar__right text-center">
  <?php dynamic_sidebar( 'right_sidebar_widget' ); ?>
</div>
 

</div>
<?php get_footer(); ?>
