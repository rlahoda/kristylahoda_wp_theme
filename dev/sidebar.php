<div class="l_sidebar_left">
  <div class="c_nav">
  <div class="nav_button_container">
      <a id="nav_button" href="#">
          <h2 class="nav_menu_button">Menu</h2>
      </a>
  </div>
  <div class="l_nav_container">
  <?php wp_nav_menu( array('sort_column' => 'menu_order','theme_location' => 'main-menu', 'menu' => 'Menu 1', 'menu_class' => 'nav') ); ?>
      <div class="c_search__container">
          <div class="c_search__fit">
              <?php get_search_form() ?>
          </div>
      </div>

  </div>
  <div class="social__container">
    <a class="social social__twitter" href="https://twitter.com/KristyLahoda"><img src="<?php bloginfo('template_url'); ?>/assets/img/wc-social-twitter.png" alt="twitter"/></a>
    <a class="social social__facebook" href="https://www.facebook.com/kristylahoda"><img src="<?php bloginfo('template_url'); ?>/assets/img/wc-social-facebook.png" alt="facebook"/></a>
  </div>
	<div class=".c_menu__widget" role="complementary">
		<?php dynamic_sidebar( 'home_main_widget' ); ?>
	</div><!-- #primary-sidebar -->

</div>
</div>
