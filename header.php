<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="site-header header-top header-1">
        <div class="container clearfix">
            <div class="logo">
                <h1><a class="logolink" href="<?php echo get_option("siteurl"); ?>">GCR</a></h1>
            </div>
            <span id="menu">Menu</span>
            <?php 
            wp_nav_menu( array(
                'theme_location' => 'navigation',
                'container' => 'nav',
                'container_class' => 'navigation',
                'container_id' => 'navigation',
                'fallback_cb' => false
            ) )
            ?>
            <div class="searcharea" id="search">
                <span class="search_btn" id="search_trigger"></span>
                <?php 
                    if(is_active_sidebar('top_search' )){
                        dynamic_sidebar('top_search');
                    }
                ?>
            </div>
        </div>
    </header>