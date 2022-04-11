<?php define('_BG', true);
	get_header(); ?>

<div class="text-center bg-image" style="background-image: url('<?php echo __BASE.'/img/banner/bradcam_4.png' ?>');">
	<div class="p-5" style="background: rgba(0,0,0,0.6);">
		<div class="p-md-5 mx-auto mt-5" style="max-width: 600px">
			<br/><br/>
			<h2 class="mb-3 text-white">
				<b>ABOUT US</b>
			</h2>
			<p style="color: #C7C7C7"><?php echo get_post()->post_content; ?></p>
			<br/>
		</div>
	</div>
</div>
<br/>

<?php
	$post = get_posts(array(
		'category_name' => 'home-about-placeholder'
	));
	if( sizeof($post) ){
		$post = $post[0];
		$image = get_post(get_post_thumbnail_id($post->ID));
?>
		
<div class="container my-5">
	<div class="row">
		<div class="col-sm-12 col-md-4 text-center mb-4">
			<img src="<?php echo $image->guid; ?>" style="max-height: 50vh; border-radius: 50%;" class="mw-100 mb-2 d-block mx-auto" />
			<small><?php echo $image->post_excerpt; ?></small>
		</div>
		<div class="col-sm-12 col-md-8 border-md-left broder-dark p-4 px-md-5">
			<h2 class="text-uppercase text-dark"><?php echo preg_replace('/^(\w+)\s+/', '<b class="text-secondary">$1&nbsp;</b>', $post->post_title); ?></h2>
			<hr class="mb-4 bg-secondary" align="left" style="max-width: 140px; height: 4px" />
			<p style="font-size: large;"><?php echo $post->post_content; ?></p>
		</div>
	</div>
</div>

<?php } ?>

<?php
	$post = get_posts(array(
		'category_name' => 'home-about-vision'
	));
	if( sizeof($post) ){
		$post = $post[0];
		$image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<div class="bg-image mt-5" style="background-image: url('<?php echo $image ?>'); background-attachment: fixed;">
	<div class="p-5" style="background: rgba(0,0,0,0.7);">
		<div class="p-md-5" style="max-width: 800px">
			<h3 class="p-4 text-white border-left mb-5">
				OUR <b>VISION</b>
			</h3>
			<p style="color: #C7C7C7; font-size: larger;"><?php echo $post->post_content; ?></p>
		</div>
	</div>
</div>

<?php } ?>

<?php
	$post = get_posts(array(
		'category_name' => 'home-about-philosophy'
	));
	if( sizeof($post) ){
		$post = $post[0];
?>

<div class="alert-success m-0">
	<div class="container p-5 text-dark">
		<h3>OUR <b class="text-secondary">PHILOSOPHY</b></h3>
		<hr class="my-4" />
		<p id="phil" style="color: #444; font-size: x-large;"><?php echo $post->post_content; ?></p>
	</div>
</div>

<?php } ?>

<div class="border-top border-bottom p-5">
	<div class="container my-5">
		<div class="row align-items-center m-lg-5">
			<div class="col-12 col-lg-4 mb-5">
				<h3 class="border-left border-dark p-4">OUR <b class="text-secondary">CORE VALUES</b></h3>	
			</div>
			<div class="col-lg-1"></div>
			<div class="col-12 col-lg-7">
				<div class="row">
					<div class="col-12 col-sm-6 mb-4 mb-md-5">
						<h5 class="text-uppercase d-flex">
							<i class="fa fa-medal fa-2x" style="color: tomato"></i>
							<b>&nbsp;&nbsp;&nbsp;EXECELLENCE</b>
						</h5>
					</div>
					<div class="col-12 col-sm-6 mb-4 mb-md-5">
						<h5 class="text-uppercase d-flex">
							<i class="fa fa-handshake fa-2x" style="color: violet"></i>
							<b>&nbsp;&nbsp;&nbsp;COMMITMENT</b>
						</h5>
					</div>
					<div class="col-12 col-sm-6 mb-4 mb-md-5">
						<h5 class="text-uppercase d-flex">
							<i class="fa fa-check-circle fa-2x" style="color: lime"></i>
							<b>&nbsp;&nbsp;&nbsp;INTEGRITY</b>
						</h5>
					</div>
					<div class="col-12 col-sm-6 mb-4 mb-md-5">
						<h5 class="text-uppercase d-flex">
							<i class="fa fa-lightbulb fa-2x" style="color: gold"></i>
							<b>&nbsp;&nbsp;&nbsp;INNOVATION</b>
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="">
	<div class="container text-center my-5">
		<br/>
		<h3>OUR <b class="text-secondary">TEAM</b></h3>
		<br/>
		<div class="row mt-5">
			<?php

				$posts = get_posts(array(
					'category_name' => 'about-team',
					'posts_per_page' => -1
				));

				foreach( $posts as $post ){
			?>
			<div class="col-12 col-sm-6 col-lg-4 mb-5">
				<img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), 'thumbnail-size'); ?>" width="220" height="220" class="thumbnail d-block mx-auto mb-3 border border-success" style="border-radius: 50%" />
				<strong class="text-uppercase"><?php echo $post->post_content; ?></strong>
				<br/>
				<span class="text-uppercase text-secondary"><?php echo $post->post_title; ?></span>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<br/>
<?php get_footer(); ?>