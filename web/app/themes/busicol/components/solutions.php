<div class="container my-5">
	<br/>
	<h2 align="center">Our Solutions</h2>
	<br/>
	<div class="row mt-md-4 justify-content-center">
		<?php
			$posts = get_posts(array(
				'category_name'=>'home-solutions',
				'numberposts'=>3
			));
			foreach ($posts as $post) {
		?>

		<div class="col-12 col-md-4 mb-4">
			<div class="bg-image overflow-hidden block-over" style="height: 300px; background-image: url('<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), 'thumbnail-size'); ?>');">
				<div class="w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.3);">
					<div class="text-white text-center">
						<i class="<?php echo get_post_meta($post->ID, 'icon', true); ?> fa-2x"></i><br/>
						<h4 class="mt-3"><?php echo $post->post_title; ?></h4>
					</div>
				</div>
				<div class="details bg-success d-flex align-items-center justify-content-center">
					<div class="text-white text-center p-4">
						<h4 class="mb-2"><?php echo $post->post_title; ?></h4>
						<p><?php echo $post->post_content; ?></p>
					</div>
				</div>
			</div>
		</div>

		<?php } ?>
	</div>
	<br/>
</div>