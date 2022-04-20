<div class="container my-5">
	<br/>
	<div class="text-center mx-auto" style="max-width: 600px">
		<h2 class="mb-3">Our Testimonials</h2>
		<p>what are people saying about us, see for yourself.</p>
	</div>
	<br/>
	<div class="overflow-hidden">
		<div id="slider" class="d-flex mw-100" style="margin-left: 0%; -webkit-transition: .2s; -moz-transition: .2s; transition: .2s;">
			<?php
				$posts = get_posts(array(
					'category_name'=>'testimonials',
					'numberposts'=>6,
					'orderby'=>'rand'
				));
				foreach ($posts as $post) {
			?>
			<div class="" style="min-width: 100%;">
				<div class="row my-5 justify-content-center">
					<div class="col-12 col-md-5">
						<img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), 'thumbnail-size'); ?>" class="d-block mx-auto mw-100" style="max-height: 400px" />
					</div>
					<div class="col-12 col-lg-7 py-5">
						<h3 class="mb-3"><?php echo $post->post_title; ?></h3>
						<strong>
							<?php echo get_post_meta($post->ID, 'job_title', true); ?>
						</strong>&nbsp; | &nbsp;<?php
							$default = 'Testimonial';
							foreach (get_the_category($post->ID) as $value) {
								if( $value->name != $default ){
									$default = $value->name;
									break;
								}
							}
							echo $default;
						?>
						<hr/>
						<p>
							<!-- <i class="fa fa-quote-left"></i> -->
							&nbsp;<?php echo $post->post_content; ?>&nbsp;
							<!-- <i class="fa fa-quote-right"></i> -->
						</p>
						<br/>
						<div class="d-flex">
							<button onclick="doMove(1)" class="btn btn-light text-success shadow-sm">
								<i class="fa fa-chevron-left"></i>
							</button>
							<button onclick="doMove(-1)" class="btn btn-light text-success shadow-sm ml-3">
								<i class="fa fa-chevron-right"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<script type="text/javascript">

	function doMove($n){
		var $el = $('#slider')[0];
		$slideTo = (parseInt($el.style.marginLeft) + ( $n * 100 )) + '%';
		$maxLength = ($el.children.length - 1) * 100;
		$minLength = $maxLength * -1;
		if(parseInt($slideTo) > 0) $slideTo = $minLength + '%';
		else if(parseInt($slideTo) < $minLength) $slideTo = 0;
		$el.style.marginLeft = $slideTo;
	}

</script>