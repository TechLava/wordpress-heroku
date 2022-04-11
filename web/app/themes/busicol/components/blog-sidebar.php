<form class="bg-light p-4">
	<input type="search" name="k" class="form-control rounded-0 mb-3" placeholder="Search Keyword" style="height: 3.4rem" value="<?php echo $k; ?>" />
	<?php if( isset($show) && $show!='blog' ){ ?>
		<input type="hidden" name="show" value="<?php echo $show; ?>" />
	<?php } ?>
	<input type="submit" value="SEARCH" class="btn btn-success w-100 rounded-0 bg-white text-success font-weight-light block-hover-success" style="height: 3rem" />
</form>
<br/>
<div class="bg-light p-4">
	<h5>Category</h5>
	<hr/>

	<?php if( isset($show) && $show!='blog' ){ ?>
	<div class="border-bottom py-3">
		<a href="?" class="text-secondary text-hover-success">
			Show All
		</a>
	</div>
	<?php } ?>

	<?php
		$cats = get_categories(array(
			'hide_empty' => false,
			'child_of' => get_cat_ID('blog'),
		));
		foreach($cats as $cat){
	?>
	<div class="border-bottom py-3">
		<a href="?show=<?php echo $cat->slug; ?>" class="text-<?php if( isset($show) && $show!=$cat->slug ){ ?>secondary<?php } else { ?>success<?php } ?> text-hover-success">
			<?php echo "$cat->name($cat->category_count)"; ?>
		</a>
	</div>
	<?php } ?>
</div>
<br/>
<div class="bg-light p-4">
	<h5>Recent Post</h5>
	<hr class="mb-4" />
	<?php
		$posts = get_posts(array(
			'category_name' => 'blog',
			'posts_per_page'=>5,
		));

		foreach ($posts as $post) {
	?>
	<div class="d-flex align-items-center mb-3">
		<div class="">
			<img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), 'thumbnail-size'); ?>" width="70" height="70" />
		</div>
		<div class="p-3">
			<a href="<?php echo get_the_permalink($post->ID); ?>" class="text-dark text-hover-success" style="font-size: medium; overflow: hidden; text-overflow: ellipsis; white-spac: nowrap;">
				<?php echo substr($post->post_title, 0, 27); ?>
			</a><br/>
			<span class="text-secondary"><?php echo human_time_diff( get_the_time( 'U' ) ).' '.__( 'ago' ); ?></span>
		</div>
	</div>
	<?php } ?>
</div>
<br/>
<form class="bg-light p-4" autocomplete="off" >
	<h5>Newsletter</h5>
	<hr class="mb-4" />
	<input type="text" name="d_name" class="form-control rounded-0 mb-3" placeholder="Enter full name" style="height: 3.4rem" required />
	<input type="email" name="d_email" class="form-control rounded-0 mb-3" placeholder="Enter email address" style="height: 3.4rem" required />
	<input type="submit" name="subscribe" value="SUBSCRIBE" class="btn btn-success w-100 rounded-0 bg-white text-success font-weight-light block-hover-success" style="height: 3rem" />
</form>