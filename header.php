<!doctype html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="utf-8">
  <meta name="author" content="<?php bloginfo( 'name' ); ?>" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0" />

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <div class="wrapper">

    <header>

      <nav role="navigation">

        <ul>

          <?php

              wp_nav_menu( array(
                  'container' => '',
                  'container_class' => false,
                  'fallback_cb' => false,
                  'items_wrap' => '%3$s',
                  'menu_class' => 'menu',
                  'menu_id' => false,
                  'theme_location' => 'main',
              ) );

          ?>

        </ul>

      </nav>

      <h1><a href="<?php echo home_url(); ?>">Marco Hyyryläinen</a></h1>

    </header>
