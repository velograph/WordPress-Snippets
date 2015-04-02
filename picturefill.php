----------------------------------------------------------------

Using the Featured image (post thumbnail)

<?php $small_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero-small' ); ?>
<?php $medium_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero' ); ?>
<?php $large_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero-2x' ); ?>

<picture>
	<!--[if IE 9]><video style="display: none;"><![endif]-->
	<source srcset="<?php echo $small_image[0]; ?>" media="(max-width: 600px)">
	<source srcset="<?php echo $medium_image[0]; ?>" media="(min-width: 601px)">
	<source srcset="<?php echo $large_image[0]; ?>" media="(min-width: 801px)">
	<!--[if IE 9]></video><![endif]-->
	<img srcset="<?php echo $large_image[0]; ?>">
</picture>

----------------------------------------------------------------

Using an ACF Image

Field must be set to "Image ID" for this to work!

<?php $mobile = wp_get_attachment_image_src(get_field('featured_image')['id'], 'hero-mobile'); ?>
<?php $tablet = wp_get_attachment_image_src(get_field('featured_image')['id'], 'hero-tablet'); ?>
<?php $desktop = wp_get_attachment_image_src(get_field('featured_image')['id'], 'hero-desktop'); ?>
<?php $retina = wp_get_attachment_image_src(get_field('featured_image')['id'], 'hero02x'); ?>

<picture>
	<!--[if IE 9]><video style="display: none;"><![endif]-->
	<source srcset="<?php echo $mobile[0]; ?>" media="(max-width: 400px)">
	<source srcset="<?php echo $tablet[0]; ?>" media="(max-width: 801px)">
	<source srcset="<?php echo $desktop[0]; ?>" media="(max-width: 1024px)">
	<source srcset="<?php echo $retina[0]; ?>" data-media="(min-device-pixel-ratio: 2)">
	<!--[if IE 9]></video><![endif]-->
	<img srcset="<?php echo $large_image[0]; ?>">
</picture>
