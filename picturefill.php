----------------------------------------------------------------

Using the Featured image (post thumbnail)

<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'mobile' ); ?>
<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tablet' ); ?>
<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'desktop' ); ?>
<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'retina' ); ?>

<picture>
	<!--[if IE 9]><video style="display: none;"><![endif]-->
	<source
		srcset="<?php echo $mobile[0]; ?>"
		media="(max-width: 500px)" />
	<source
		srcset="<?php echo $tablet[0]; ?>"
		media="(max-width: 860px)" />
	<source
		srcset="<?php echo $desktop[0]; ?>"
		media="(max-width: 1180px)" />
	<source
		srcset="<?php echo $retina[0]; ?>"
		media="(min-width: 1181px)" />
	<!--[if IE 9]></video><![endif]-->
	<img srcset="<?php echo $desktop[0]; ?>">
</picture>

----------------------------------------------------------------

Using an ACF Image

Field must be set to "Image ID" for this to work!

<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile'); ?>
<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet'); ?>
<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop'); ?>
<?php $retina = wp_get_attachment_image_src(get_sub_field('image'), 'retina'); ?>

<picture>
	<!--[if IE 9]><video style="display: none"><![endif]-->
	<source
		srcset="<?php echo $mobile[0]; ?>"
		media="(max-width: 500px)" />
	<source
		srcset="<?php echo $tablet[0]; ?>"
		media="(max-width: 860px)" />
	<source
		srcset="<?php echo $desktop[0]; ?>"
		media="(max-width: 1180px)" />
	<source
		srcset="<?php echo $retina[0]; ?>"
		media="(min-width: 1181px)" />
	<!--[if IE 9]></video><![endif]-->
	<img srcset="<?php echo $desktop[0]; ?>">
</picture>
