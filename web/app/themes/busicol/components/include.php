<!DOCTYPE html>
<html style="max-width: 100%; overflow-x: hidden;">
<head>
    <!--?php wp_head(); ?-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo(''); wp_title(); ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="shortcut icon" href="<?php show(Config::Logo, get_site_icon_url()); ?>" />
    <link rel="stylesheet" href="<?php echo __BASE; ?>/minify/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo __BASE; ?>/style.css" />
    <link rel="stylesheet" href="<?php echo __BASE; ?>/minify/fontawesome5/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo __BASE; ?>/../../plugins/the-social-links/assets/css/style.css" />
</head>
<body>
    <?php include dirname(__FILE__).'/../forms/newsletter.php'; ?>
    <?php include dirname(__FILE__).'/../forms/contact.php'; ?>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->