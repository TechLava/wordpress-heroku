<div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-5">
	<a href="<?php show(get_the_permalink($post->ID), '#'); ?>" class="block-over">
		<img src="<?php echo $attached_images[0]->guid; ?>" class="mw-100 d-block mx-auto" style="max-height: 60vh; min-height: 100%;" />
		<div class="details d-flex justify-content-center align-items-center">
			<div class="text-center">
				<h4 class="text-white"><?php echo $post->post_title; ?></h4>
				<small><?php
					$default = 'portfolio';
					foreach (get_the_category($post->ID) as $value) {
						if( $value->name != $default ){
							$default = $value->name;
							break;
						}
					}
					echo $default;
				?></small>
			</div>
		</div>
	</a>
</div>