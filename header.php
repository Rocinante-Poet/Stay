<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" >
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" >
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/component.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name');?>" href="<?php bloginfo('url');?>/feed" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name');?>" href="<?php bloginfo('url');?>/feed/atom" />
    <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();echo " - ";bloginfo('description');
    } elseif (is_404() ) {
        echo '页面未找到!';echo " - ";bloginfo('description');
    } else {
        wp_title('',true);echo " - ";bloginfo('description');
    } ?></title>
    <meta name="description" content="<?php echo stripslashes(get_option('stay_description')); ?>" />
    <meta name="keywords" content="<?php echo stripslashes(get_option('stay_keywords')); ?>" />
</head>
<body>
    <header class="header" id="header">
        <div class="headerZ">
                <span class="muen" open-nav="flase"><i class="fa fa-align-justify"></i></span>
            <nav class="topNav">
                <?php
                if ( has_nav_menu( 'top' ) ) :
                    wp_nav_menu( array(
                        'theme_location' => 'top',
                         'menu_class'=> 'modal fade',
                         'menu_id'=>'nav',
                         'container'=>'flase',
                         'item_spacing'=>'preserve'
                    ) );
                    endif;?>
            </nav>
        </div>
    </header>