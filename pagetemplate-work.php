<?php
	/* Template Name: Work Archive */
	get_header(); ?>

  <main class="page" role="main">

    <div class="intro">

      <?php

      if ( have_posts() ) :

          while ( have_posts() ) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

          <?php
          endwhile;

      endif;

      ?>

    </div>

    <div class="content">

      <?php

          $args = array (
              'post_type' => array( 'wheresmarco_work' ),
              'posts_per_page' => -1,
              'order' => 'DESC',
          );

          // The Query
          $query = new WP_Query( $args );

          // The Loop
          if ( $query->have_posts() ) :
            
              while ( $query->have_posts() ) :

                  $query->the_post();
                  get_template_part( 'item', 'work' );

              endwhile;

          endif;

          // Restore original Post Data
          wp_reset_postdata();

      ?>

    </div>

  </main>

<?php get_footer(); ?>
