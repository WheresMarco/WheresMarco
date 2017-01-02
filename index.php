<?php get_header(); ?>

  <main id="site-content">
      <?php // 404 Page Not Found or empty archives etc.

      if ( have_posts() ) :

          // The basic loop
          while ( have_posts() ) : the_post();

              // Load the appropriate content template
              get_template_part( 'content', get_post_format() );

          // End the loop
          endwhile;

      endif;
      ?>
  </main>

<?php get_footer(); ?>
