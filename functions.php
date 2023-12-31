<?php
/**
 * @package Standard
 */

function standard_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'standard' ),
			'menu-2' => esc_html__( 'Secondary', 'standard' ),
			'menu-left-logocenter' => esc_html__( 'Logo Center Menu Left', 'standard' ),
			'menu-right-logocenter' => esc_html__( 'Logo Center Menu Right', 'standard' ),
		)
	);
}
add_action( 'after_setup_theme', 'standard_setup' );


function standard_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'standard_content_width', 640 );
}
add_action( 'after_setup_theme', 'standard_content_width', 0 );



function standard_widgets_init() {
	register_sidebar(
		array('name'          => esc_html__( 'Widget 1', 'standard' ),
			'id'            => 'widget-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Widget 2', 'standard' ),
			'id'            => 'widget-2',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Widget 3', 'standard' ),
			'id'            => 'widget-3',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'Widget 4', 'standard' ),
			'id'            => 'widget-4',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 1', 'standard' ),
			'id'            => 'footer-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 2', 'standard' ),
			'id'            => 'footer-2',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 3', 'standard' ),
			'id'            => 'footer-3',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'footer 4', 'standard' ),
			'id'            => 'footer-4',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'CF71', 'standard' ),
			'id'            => 'contactform-1',)
	);
	register_sidebar(
		array('name'          => esc_html__( 'CF72', 'standard' ),
			'id'            => 'contactform-2',)
	);
}
add_action( 'widgets_init', 'standard_widgets_init' );



function standard_scripts() {
	wp_enqueue_style( 'standard-style', get_stylesheet_uri() );
	// wp_enqueue_style( 'standard-main-style', get_template_directory_uri() . '/dist/css-new/style.css', array(), null );
	wp_enqueue_style( 'standard-main-style', get_template_directory_uri() . '/src/css/style.css', array(), null );
	wp_enqueue_style( 'standard-awesome-style', get_template_directory_uri() . '/src/css/font-awesome.css', array(), null );
	wp_enqueue_style( 'standard-swiper-style', get_template_directory_uri() . '/src/css/swiper.css', array(), null );

	wp_enqueue_script( 'standard-jquery-js', get_template_directory_uri() . '/src/js/jquery.js', array(), null, true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/src/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'standard-swiper-js', get_template_directory_uri() . '/src/js/swiper.js', array(), null, true );
	wp_enqueue_script( 'standard-main-js', get_template_directory_uri() . '/src/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'standard_scripts' );




function custom_post_type(){
	$labels_frontpage = array(
		'name' => 'Banner Slides',
	  );
		register_post_type('banner-pt', array(
		'labels' => $labels_frontpage,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'thumbnail',
		'revisions',),
		'menu_position' => 8,
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-slides',
		));
	$labels_frontpage = array(
	  'name' => 'Blogs',
	);
	  register_post_type('blogs-pt', array(
	  'labels' => $labels_frontpage,
	  'public' => true,
	  'has_archive' => true,
	  'publicly_queryable' => true,
	  'query_var' => true,
	  'rewrite' => true,
	  'capability_type' => 'post',
	  'hierarchical' => false,
	  'supports' => array(
	  'title',
	  'editor',
	  'excerpt',
	  'thumbnail',
	  'revisions',),
	  'menu_position' => 8,
	  'exclude_from_search' => false,
	  'menu_icon' => 'dashicons-welcome-write-blog',
	  ));
	  $labels_frontpage = array(
		'name' => 'Fallstudien',
	  );
		register_post_type('second-pt', array(
		'labels' => $labels_frontpage,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'thumbnail',
		'revisions',),
		'menu_position' => 8,
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-chart-bar',
		));
	  $labels_frontpage = array(
		'name' => 'Clients Say!',
	  );
		register_post_type('third-pt', array(
		'labels' => $labels_frontpage,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
		'title',
		'editor',
		'excerpt',
		'thumbnail',
		'revisions',),
		'menu_position' => 8,
		'exclude_from_search' => false,
		'menu_icon' => 'dashicons-testimonial',
		));
  }
add_action('init', 'custom_post_type');



