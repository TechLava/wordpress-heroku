<div class="bg-image" style="background: url('<?php echo __BASE.'/img/banner/benefit.png'; ?>');">
	<div class="py-5 px-sm-5" style="background: rgba(0,0,0,0.6);">
		<div class="container p-lg-5 my-5">
			<div class="row justify-content-center">
				<?php
					$posts = get_posts(array(
						'category_name'=>'home-benefits',
						'numberposts'=>3
					));
					foreach ($posts as $post) {
				?>
				<div class="col-12 col-md-4 mb-4 mb-sm-5 mb-md-0">
					<div class="h-100 border border-light px-4 py-5 text-center text-white block-hover-success" style="border-color: #777 !important">
						<i class="<?php echo get_post_meta($post->ID, 'icon', true); ?> fa-2x"></i>
						<h4 class="my-3"><?php echo $post->post_title ?></h4>
						<p><?php echo $post->post_content; ?></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>