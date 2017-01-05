<div class="work-item">
  <h2><a href="#"><?php the_title(); ?></a></h2>
  <h3>
    <?php
      $clients = get_the_terms($post, 'client');

      foreach ($clients as $client) :
        echo $client->name;
      endforeach;
    ?>
  </h3>

  <?php the_excerpt(); ?>
</div>
