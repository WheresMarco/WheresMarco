<?php get_header(); ?>

  <main class="page" role="main">

      <?php

      if ( have_posts() ) :

          while ( have_posts() ) : the_post(); ?>

          <div class="intro">

            <h1><?php the_title(); ?></h1>
            <?php the_excerpt(); ?>

          </div>

          <div class="content">
            <?php the_content(); ?>
          </div>

          <?php
          endwhile;

      endif;

      ?>
    </div>

  </main>

<?php get_footer(); ?>
