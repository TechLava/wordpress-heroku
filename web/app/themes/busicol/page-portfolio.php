<?php
	define('_BG', true);
	get_header(); ?>

<div class="text-center bg-image" style="background-image: url('<?php echo __BASE.'/img/banner/bradcam_1.png' ?>');">
	<div class="p-5" style="background: rgba(0,0,0,0.6);">
		<div class="p-md-5 mx-auto mt-5" style="max-width: 600px">
			<br/><br/>
			<h2 class="mb-3 text-white">
				<b>Portfolio</b>
			</h2>
			<p style="color: #C7C7C7"><?php echo get_post()->post_content; ?></p>
			<br/>
		</div>
	</div>
</div>

<div class="container">
	<br/>
	<div class="row my-5 justify-content-center">
		<?php
			$posts = get_posts(array(
				'category_name'=>'portfolio',
				'posts_per_page'=>56,
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
			<?php include 'components/portfolio-single.php'; ?>
		<?php } ?>
		<div class="col-12 my-5 text-center">
			<a href="<?php show( get_the_permalink( get_page_by_title('portfolio')->ID ) ); ?>" class="btn btn-lg border border-success text-success font-weight-light">
				Load More
			</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>