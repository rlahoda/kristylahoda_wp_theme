<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <script src="https://use.typekit.net/kid0kei.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <script>
      $(document).ready(function(){
        $("a#nav_button").click(function(){
          $("div.l_nav_container").slideToggle(500);
        });
      });
    </script>
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

      <?php
      wp_enqueue_style('fsc', get_stylesheet_uri(), false, null);

       // wordpress head functions
      ?>
<link rel='stylesheet' href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='all' />

      <?php wp_head(); ?>
      <?php // end of wordpress head ?>
    </head>
    <body>
