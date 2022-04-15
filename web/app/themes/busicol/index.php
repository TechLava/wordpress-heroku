<?php include 'components/include.php'; ?>

<!-- Custom Index Header Start -->
<div class="w-100 bg-image overflow-hidden" style="max-height: 800px; background-image: url('<?php echo __BASE.'/img/banner/techcity.jpg'; ?>');">
    <div class="p-4 p-md-5" style="background: rgba(0,0,0,0.5);">
        <div class="ml-xl-5 pl-xl-5">
			
			<?php include 'components/menu.php'; ?>
            
            <div class="mt-5 py-lg-5"></div>
            <div style="max-width: 500px">
                <h1 class="h1 text-white mb-3">
                    <b>Perfect your business with <?php echo get_bloginfo('title'); ?></b>
                </h1>
                <p class="" style="font-size: x-large; color: #D5D5D5">
                    <?php show(Config::Description, get_bloginfo('description')); ?>
                </p>
                <br/>
                <div class="">
                    <a href="<?php show( get_the_permalink( get_page_by_title('services')->ID ) ); ?>" class="btn btn-success btn-lg font-weight-light" style="height: 3.4rem; width: 200px">
                        Our Services
                    </a>
                    <a href="<?php show( get_the_permalink( get_page_by_title('portfolio')->ID ) ); ?>" class="btn btn-light bg-transparent btn-lg ml-4 text-white font-weight-light" style="height: 3.4rem; width: 200px">
                        <i class="fa fa-caret-right"></i>&nbsp; Our Portfolio
                    </a>
                </div>
            </div>
            <div class="mt-5 py-lg-5"></div>
        </div>
    </div>
</div>
<!-- Custom Index Header End -->

<?php include 'components/solutions.php'; ?>

<?php
	$post = get_posts(array(
		'posts_per_page'=>1,
		'category_name'=>'home-we-content',
		'orderby'=>'rand'
	));
	if( !empty($post) ){
		$post = $post[0];
?>

<div class="row mt-5">
	<div class="col-12 col-md-5 col-lg-6 p-0">
		<img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), 'thumbnail-size'); ?>" class="w-100 mw-100" style="max-height: 70vh; min-height: 100%;" />
	</div>
	<div class="col-12 col-md-7 col-lg-6 p-5">
		<h3><?php echo $post->post_title; ?></h3>
		<br/>
		<p style="font-size: large !important;">
			<?php echo $post->post_content; ?>
		</p>
		<br/>
		<a href="<?php show( get_the_permalink( get_page_by_title('about')->ID ) ); ?>" class="btn btn-success font-weight-light btn-lg">
			About Us
		</a>
	</div>
</div>
<div class="row mb-5 alert-success p-4 p-md-5 align-items-center text-dark" style="background: #F5FBFF">
	<div class="col-4 text-center">
		<h1 class="">
			<span data-func="counter" data-from="0" data-to="430" data-step="1.5">430</span>+
		</h1>
		<span>Total Projects</span>
	</div>
	<div class="col-4 text-center">
		<h1 class="">
			<span data-func="counter" data-from="0" data-to="10" data-step="0.5">10</span>
		</h1>
		<span>On Going Projects</span>
	</div>
	<div class="col-4 text-center">
		<h1 class="">
			<span data-func="counter" data-from="0" data-to="90" data-step="0.8">90</span>%
		</h1>
		<span>Job Success</span>
	</div>
</div>
<script src="<?php echo __BASE.'/minify/countx.js'; ?>"></script>
<br/>

<?php } ?>

<?php include 'components/portfolio.php'; ?>
<?php include 'components/home-benefits.php'; ?>
<?php include 'components/testimonials.php'; ?>
<?php include 'components/home-contact.php'; ?>

<?php get_footer(); ?>