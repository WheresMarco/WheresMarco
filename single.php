<?php get_header(); ?>

  <main class="post" role="main">

      <?php

      if ( have_posts() ) :

          while ( have_posts() ) : the_post(); ?>

          <div class="intro">

            <h1><?php the_title(); ?></h1>

            <div class="meta">

              <span class="date">

                <a href="http://www.andersnoren.se/how-i-learned-to-stop-worrying-love-onepassword/" title="March 6, 2015 at 13:10">
                  <span class="long-date">March 6, 2015</span><span class="short-date">Mar 6, 2015</span>
                </a>

              </span>

              <span class="categories">

                <a href="http://www.andersnoren.se/category/apps/" title="Visa alla artiklar i Apps">Apps</a>,
                <a href="http://www.andersnoren.se/category/internet/" title="Visa alla artiklar i Internet">Internet</a>,
                <a href="http://www.andersnoren.se/category/reviews/" title="Visa alla artiklar i Reviews">Reviews</a>

              </span>

            </div>

          </div>

          <div class="content">

            <div class="post-content">

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
