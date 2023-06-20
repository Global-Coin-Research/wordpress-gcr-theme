<?php 

function gcr_scripts(){
	wp_enqueue_style( 'style',     get_template_directory_uri() . '/style.css',       array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script('jquery',     get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), wp_get_theme()->get( 'Version' ), true);
	wp_enqueue_script('slick',     get_template_directory_uri() . '/js/slick.min.js', array(), wp_get_theme()->get( 'Version' ), true);
	wp_enqueue_script('lazyload',     get_template_directory_uri() . '/js/lazyload.min.js', array(), wp_get_theme()->get( 'Version' ), true);
	wp_enqueue_script('tag',     get_template_directory_uri() . '/js/jquery.svg3dtagcloud.min.js', array(), wp_get_theme()->get( 'Version' ), true);
	wp_enqueue_script('gcr_theme', get_template_directory_uri() . '/js/theme.js',     array(), wp_get_theme()->get( 'Version' ), true);
}
add_action( 'wp_enqueue_scripts', 'gcr_scripts' );

if ( ! function_exists( 'gcr_setup' ) ) {
	function gcr_setup(){
		add_theme_support('menus');
		add_theme_support('widgets');
		add_theme_support('custom-background');
		add_theme_support('custom-header');
		
		add_theme_support('custom-logo');
		add_theme_support('title-tag');
		
		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );
		
		// add thumbnail
		add_theme_support('post-thumbnails', array('slider','post','product'));
		set_post_thumbnail_size( 555,375, true );
		add_image_size('post-thumb',555,375,true);
		add_image_size('post-thumb-small',405,435,true);
		add_image_size('post-thumb-tall',410,640,true);
		add_image_size('post-img-full', 2000, 1350, false );
		
		register_nav_menus(array(
			'navigation' => 'Primary Menu',
			'navigation-button' => 'Button Menu ',
			'footer-setting' => 'Footer Setting',
		));
	}
	
}
add_action( 'after_setup_theme', 'gcr_setup' );

function pol_widget_areas(){
    register_sidebar(array(
		'name' => __( 'Top Corner Search Area', 'gcr' ),
		'id' => 'top_search',
		 'before_widget' => '<div class="animated searchbar" id="searchbar">',
		'after_widget' => '</div>'
	));
	register_sidebar(array(
		'name' => __( 'Sidebar Widgets', 'gcr' ),
		'id' => 'sidebar_widgets',
		 'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div>',
	));
	
	// register_sidebar( array(
	// 	'name' => __( 'Footer Social Links', 'gcr' ),
	// 	'id' => 'footer_social',
	// 	'before_widget' => '<div class="socials">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h5>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Footer Minimal Social Links', 'gcr' ),
	// 	'id' => 'footer_social_minimal',
	// 	'before_widget' => '<div class="socials minimal">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h5>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Subscription Header', 'gcr' ),
	// 	'id' => 'subscription_header',
	// 	'before_widget' => '<div class="subscribe-text">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h3>',
	// 	'after_title' => '</h3>',
	// ) );
	

	
	// register_sidebar( array(
	// 	'name' => __( 'Footer widgets Area', 'gcr' ),
	// 	'id' => 'footer_widgets',
	// 	'before_widget' => '<div class="widget">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h5>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Footer Corner Footer Links', 'gcr' ),
	// 	'id' => 'footer_corner_nav',
	// 	'before_widget' => '<div class="widget">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h5>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Community Widget 1', 'gcr' ),
	// 	'id' => 'community_widget_1',
	// 	'before_widget' => '<div class="flagship">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h5>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Community Widget 2', 'gcr' ),
	// 	'id' => 'community_widget_2',
	// 	'before_widget' => '<div class="flagship">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h5>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Community Widget 3', 'gcr' ),
	// 	'id' => 'community_widget_3',
	// 	'before_widget' => '<div class="flagship">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h5>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Community Widget 4', 'gcr' ),
	// 	'id' => 'community_widget_4',
	// 	'before_widget' => '<div class="flagship">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<h5>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Tier Wiget 1', 'gcr' ),
	// 	'id' => 'tier_1',
	// 	'before_widget' => '<div class="single-tier">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<div class="head"><h3>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Tier Wiget 2', 'gcr' ),
	// 	'id' => 'tier_2',
	// 	'before_widget' => '<div class="single-tier">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<div class="head"><h3>',
	// 	'after_title' => '</h5>',
	// ) );
	
	// register_sidebar( array(
	// 	'name' => __( 'Tier Wiget 3', 'gcr' ),
	// 	'id' => 'tier_3',
	// 	'before_widget' => '<div class="single-tier">',
	// 	'after_widget' => '</div>',
	// 	'before_title' => '<div class="head"><h3>',
	// 	'after_title' => '</h5>',
	// ) );
}
add_action('widgets_init', 'pol_widget_areas');

function my_excerpt_length($length){ return 80; } 
add_filter('excerpt_length', 'my_excerpt_length');

function wpms_no_wordpress_hints(){
	return 'Something is wrong!';
}
add_filter( 'login_errors', 'wpms_no_wordpress_hints' );

function tg_enable_strict_transport_security_hsts_header_wordpress() {
    header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
}
add_action( 'send_headers', 'tg_enable_strict_transport_security_hsts_header_wordpress' );


// remove dashicons
function garbageremoval() {
	wp_dequeue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'garbageremoval', 100);