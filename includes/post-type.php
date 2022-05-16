<?php 

//------------------Register Custom Post Послуги----------------------
function services_post_type() {

	$labels = array(
			'name'                  => _x( 'Послуги', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Послуги', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Послуги', 'text_domain' ),
			'all_items'             => __( 'Послуги', 'text_domain' ),
			'add_new_item'          => __( 'Добавити послугу', 'text_domain' ),
			'add_new'               => __( 'Добавити послугу', 'text_domain' ),
	);
	$args = array(
			'label'                 => __( 'Послуга', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 4,
			'menu_icon'             => 'dashicons-images-alt2',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'services_post_type', 0 );

register_taxonomy("services-cat", array("services"), array("hierarchical" => true, "label" => "Категорії", "singular_label" => "activity item", "rewrite" => true));
