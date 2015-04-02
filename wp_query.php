<?php

    $args = array(
        'post_type' => 'post'
    );
    $query = new WP_Query($args);

    if($query->have_posts()) : ?>

      <?php while($query->have_posts()) : ?>

        <?php $query->the_post(); ?>

        <h1><?php the_title() ?></h1>
        <div class="post-content"><?php the_content(); ?></div>

      <?php endwhile; ?>

<?php endif; ?>
