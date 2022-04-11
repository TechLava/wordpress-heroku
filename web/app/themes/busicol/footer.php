    <div class="p-md-5" style="background: #444">
        <div class="container p-5">
            <div class="row">
                <div class="col-12 col-md-6 mb-5">
                    <div class="d-inline-flex align-items-center text-white">
                        <img src="<?php show(Config::Logo, get_site_icon_url()); ?>" height="50" />
                        <span class="ml-3"></span>
                        <font" style="font-family: 'Arial Rounded MT Bold'; font-size: x-large;">
                            &nbsp;<?php echo get_bloginfo('title'); ?>
                        </font>
                    </div>
                    <p class="my-4" style="color: #C7C7C7; max-width: 360px;"><?php show(Config::Description, get_bloginfo('description')); ?></p>
                    <div class="social-links" class="">
                        <?php echo str_replace( 'fa ', 'fab ', the_social_links( false ) ); ?>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 text-white mb-5">
                    <h4 class="mb-3">Services</h4>
                    <?php
                        $posts = get_posts(array(
                            'category_name'=>'services',
                            'posts_per_page'=>5
                        ));
                        foreach ($posts as $post) {
                    ?>
                    <a href="<?php echo get_the_permalink( get_page_by_title('services')->ID ).'#'.substr( md5(get_the_permalink($post->ID)), 0, 8 ); ?>" class="font-weight-light text-white mt-3 text-hover-success d-inline-block" style="color: #C7C7C7">
                        <?php echo $post->post_title; ?>
                    </a><br/>
                    <?php } ?>
                </div>
                <div class="col-12 col-sm-6 col-md-3 text-white">
                    <h4 class="mb-3">Useful Links</h4>
                    <?php
                        $pages = get_pages(array(
                            'posts_per_page'=>5,
                            'sort_column'=>'menu_order'
                        ));

                        foreach( $pages as $page ){
                    ?>
                    <a href="<?php echo get_the_permalink($page->ID); ?>" class="font-weight-light text-white mt-3 text-hover-success d-inline-block" style="color: #C7C7C7">
                        <?php echo $page->post_title; ?>
                    </a><br/>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3 text-center text-white bg-black font-weight-light" style="background: #333">
        Copyright &copy; <?php echo get_bloginfo('title').' '.Date('Y'); ?>&nbsp; | &nbsp;All Rights Reserved
    </div>

    <script src="<?php echo __BASE; ?>/minify/jquery.min.js"></script>
    <script src="<?php echo __BASE; ?>/minify/bootstrap.bundle.min.js"></script>
</body>
</html>