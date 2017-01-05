<?php get_header(); ?>

  <main class="post" role="main">

      <?php

      if ( have_posts() ) :

          while ( have_posts() ) : the_post(); ?>

          <div class="content">

            <div class="post-content">

              <h1><?php the_title(); ?></h1>

              <div class="meta">

                <span class="date">

                  <a href="http://www.andersnoren.se/how-i-learned-to-stop-worrying-love-onepassword/" title="March 6, 2015 at 13:10">
                    <span class="long-date">March 6, 2015</span><span class="short-date">Mar 6, 2015</span>
                  </a>

                </span>
              </div>

              <?php the_content(); ?>

            </div>

          </div>

          <?php
          endwhile;

      endif;

      ?>
    </div>

  </main>

<?php get_footer(); ?>
