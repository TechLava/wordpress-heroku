<div class="navbar navbar-dark navbar-expand-lg mx-auto border-bottom border-dark <?php if( defined('_BG') ){ ?>bg-dark fixed-top<?php } else { ?> bg-transparent <?php } ?>">
    <a href="javascript:void(0)" class="navbar-brand white-text">
        <div class="d-inline-flex align-items-center text-white">
            <img src="<?php show(Config::Logo, get_site_icon_url()); ?>" width="35" height="35">
            <span class="ml-3"></span>
            <font style="font-family: 'Arial Rounded MT Bold'; font-size: x-large;">
                &nbsp;<?php echo get_bloginfo('title'); ?>
            </font>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="fa fa-lg fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mx-auto align-items-center font-weight-light">
            <li class="nav-item ml-4">
                <a href="<?php echo site_url(); ?>" class="nav-link">
                    Home
                </a>
            </li>
            <?php

                $pages = get_pages(array(
                    'post_per_page'=>6,
                    'sort_column'=>'menu_order'
                ));

                foreach( $pages as $page ){
            ?>
            <li class="nav-item ml-4">
                <a href="<?php echo get_the_permalink($page->ID); ?>" class="nav-link">
                    <?php echo $page->post_title; ?>
                </a>
            </li>
            <?php } ?>
        </ul>
        <ul class="navbar-nav align-items-center">
            <li class="nav-item">
                <a href="<?php echo ''; ?>" class="nav-link">
                    <i class="fa fa-search"></i>
                </a>
            </li>
        </ul>
    </div>
</div>