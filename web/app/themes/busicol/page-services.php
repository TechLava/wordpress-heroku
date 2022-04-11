<?php
	define('_BG', true);
	get_header();

	$posts = get_posts(array(
		'category_name' => 'services'
	));
?>

<div class="text-center bg-image" style="background-image: url('<?php echo __BASE.'/img/banner/bradcam_3.png' ?>');">
	<div class="p-5" style="background: rgba(0,0,0,0.6);">
		<div class="p-md-5 mx-auto mt-5" style="max-width: 600px">
			<br/><br/>
			<h2 class="mb-3 text-white">
				<b>Our Services</b>
			</h2>
			<p style="color: #C7C7C7"><?php echo get_post()->post_content; ?></p>
			<br/>
		</div>
	</div>
</div>

<div class="container p-4 p-md-5">	
	<div class="row">
		<div class="col-md-4 order-md-1">
			<div class="border-left border-secondary p-5" style="position: sticky; top: 90px">
			<?php foreach ($posts as $post) { ?>
				<a href="<?php echo '#'.substr( md5(get_the_permalink($post->ID)), 0, 8 ); ?>" class="text-dark text-hover-success" style="font-size: medium;">
					<h5 class="font-weight-light mb-3"><?php echo $post->post_title; ?></h5>
				</a>
			<?php } ?>
			</div>
		</div>
		<div class="col-md-8 pr-md-5">
			<?php foreach ($posts as $post) { ?>
			<div id="<?php echo substr( md5(get_the_permalink($post->ID)), 0, 8 ); ?>" class="my-5 bg-image" style="height: 60vh; background-image: url('<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), 'thumbnail-size'); ?>');">
				
			</div>
			<h5 class="mb-2">
				<b><?php echo $post->post_title; ?></b>
			</h5>
			<hr/>
			<p><?php echo $post->post_content; ?></p><br/>
			<?php } ?>
		</div>
	</div>
</div>

<style type="text/css">
	html {
		scroll-behavior: smooth !important;
	}
</style>

<?php get_footer(); ?>