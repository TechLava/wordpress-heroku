<?php
	define('_BG', true);
	get_header(); ?>

<br/><br/><br/>
<div class="container-md p-4 p-md-5">
	<div class="row">
		<div class="col-12 col-lg-8">
			<?php
				$per_page = 5;
				$page = 0;
				if( isset($_GET['pg']) ){
					$page = intval($_GET['pg']);
				}

				$show = 'blog';
				if( !empty($_GET['show']) ){
					$show = $_GET['show'];
				}

				$k = '';
				if( !empty($_GET['k']) ){
					$k = $_GET['k'];
				}

				$posts = get_posts(array(
					'category_name' => $show,
					'posts_per_page' => $per_page,
					'offset' => $page*$per_page,
					's' => $k
				));

				foreach ($posts as $post) {

				?>
				
			<div class="shadow mb-5 rounded position-relative">
				<div class="bg-image w-100" style="height: 60vh; background-image: url('<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), 'thumbnail-size'); ?>');"></div>
				<div class="position-absolute bg-success p-3 d-inline-block rounded text-light" style="top: 51vh; right: 8%;">
					<?php $date = date_parse($post->post_date); ?>
					<h4><b><?php echo $date['day']; ?></b></h4>
					<span><?php echo explode(',', 'Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec')[$date['month']-1].' '.$date['year']; ?></span>
				</div>
				<div class="p-4">
					<h3 class="mb-3">
						<a href="" class="text-dark text-hover-success">
							<b><?php echo $post->post_title; ?></b>
						</a>
					</h3>
					<p><?php echo substr($post->post_content, 0, 316).'...'; ?></p>
					<br/>
					<div class="text-secondary">
						<small>
							<i class="fa fa-tags"></i>
							<span class="text-capitalize">&nbsp;<?php $tags = get_the_tags($post->ID);
								$_tags = [];
								if( $tags ){
									foreach ($tags as $tag) {
										$_tags[] = $tag->name;
									}
									echo implode(', ', $_tags);
								}
							?></span>
							<span class="text-dark">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
							<i class="fa fa-comments"></i>
							<span>&nbsp;<?php echo $post->comment_count; ?> comments</span>
						</small>
					</div>
				</div>
			</div>

			<?php } ?>

			<div class="d-flex justify-content-center">
				<?php
					function page( $url, $text, $class='' ){
						$qst = '&';
						if( $show!='blog' || $k!='' ){ $qst='?'; }

						return "<a href='$qst$url' class='btn block-hover-success border rounded-0 ml-3 $class' style='min-width: 40px; height: 40px'>
							$text
						</a>";
					}

					$count = get_category( get_cat_ID('blog') )->category_count;
					$splits = ceil($count/$per_page);

					if( $page>0 ){ echo page('pg='.($page-1), '<i class="fa fa-chevron-left"></i>'); }
					echo page('javascript:void(0)', $page+1, 'btn-success border-success');
					if( $splits-$page>2 ){ echo page('pg='.($page+2), $page+3); }
					if( $splits-$page>3 ){ echo page('pg='.($page+3), $page+4); }
					if( $splits-$page>4 ){ echo page('pg='.($page+4), $page+5); }
					if( $page<$splits-1 ){ echo page('pg='.($page+1), '<i class="fa fa-chevron-right"></i>'); }
				?>
			</div>
		</div>
		<div class="col-12 col-lg-4">
			<?php include 'components/blog-sidebar.php'; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>