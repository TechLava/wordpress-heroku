<div class="container">
	<br/>
	<div class="text-center mx-auto" style="max-width: 600px">
		<h2 class="mb-3">Our Portfolio</h2>
		<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled.</p>
	</div>
	<br/>
	<div class="row my-5 justify-content-center flex-wrap">
		<?php
			$posts = get_posts(array(
				'category_name'=>'portfolio',
				'posts_per_page'=>4,
				'orderby'=>'rand'
			));
			foreach ($posts as $post) {
				$args = array( 
				    'post_type' => 'attachment', 
				    'post_mime_type' => 'image',
				    'numberposts' => 1, 
				    'post_parent' => $post->ID,
				    'orderby' => 'rand'
				); 
				$attached_images = get_posts( $args );
				if( empty($attached_images) ){
					continue;
				}
		?>
			<?php include 'portfolio-single.php'; ?>
		<?php } ?>
		<div class="col-12 my-5 text-center pt-5">
			<a href="<?php show( get_the_permalink( get_page_by_title('portfolio')->ID ) ); ?>" class="btn btn-lg border border-success text-success font-weight-light">
				More Works
			</a>
		</div>
	</div>
</div>