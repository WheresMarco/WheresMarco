<?php get_header(); ?>

  <main class="page" role="main">
      <div class="intro">

        <h1><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>

      </div>

      <div class="content">
        <?php // 404 Page Not Found or empty archives etc.

        if ( have_posts() ) :

            // The basic loop
            while ( have_posts() ) : the_post();

                get_template_part( 'item', 'post-excerpt' );

            // End the loop
            endwhile;

        endif;
        ?>
      </div>
  </main>

<?php get_footer(); ?>
