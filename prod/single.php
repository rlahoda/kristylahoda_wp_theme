<?php get_header(); ?>
<?php get_sidebar() ?>

<div class="l_container">
<?php get_template_part('masthead'); ?>
<header>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="l_article">
      <h2 class="text-center"><?php the_title(); ?></h2>
    <p class="text-center"><?php printf( __( 'Posted', 'kl1').' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> '.__( 'by',  'kl1').' <span class="author">%3$s</span>', get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?></p>
    <p>
      <?php the_content(); ?>
    </p>
    <?php  if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
    //
    // // Previous/next post navigation.
    // the_post_navigation( array(
    //   'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
    //     '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
    //     '<span class="post-title">%title</span>',
    //   'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
    //     '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
    //     '<span class="post-title">%title</span>',
    // ) );

 endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php
   endif; ?>
</div>

<div class="l_sidebar__right text-center">
  <?php dynamic_sidebar( 'right_sidebar_widget' ); ?>
</div>
</div>
<?php get_footer(); ?>
