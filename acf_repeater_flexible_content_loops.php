<!-- Repeater -->
<?php if( have_rows('repeater_field_name') ) : ?>

  <?php while ( have_rows('repeater_field_name') ) : ?>

    <?php the_row(); ?>

      <?php the_sub_field('sub_field_name'); ?>

  <?php endwhile; ?>

<?php endif; ?>


<!-- Flexible Content -->
<?php if( have_rows('flexible_content_field_name') ) : ?>

    <?php while ( have_rows('flexible_content_field_name') ) : ?>

        <?php the_row(); ?>

        <?php if( get_row_layout() == 'paragraph' ) : ?>

            <?php the_sub_field('text'); ?>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>
