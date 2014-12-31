<?php

function dossier_init() {
	register_taxonomy( 'dossier', array( 'post' ), array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'            => array(
			'name'                       => __( 'Dossiers', 'YOUR-TEXTDOMAIN' ),
			'singular_name'              => _x( 'Dossier', 'taxonomy general name', 'YOUR-TEXTDOMAIN' ),
			'search_items'               => __( 'Search dossiers', 'YOUR-TEXTDOMAIN' ),
			'popular_items'              => __( 'Popular dossiers', 'YOUR-TEXTDOMAIN' ),
			'all_items'                  => __( 'All dossiers', 'YOUR-TEXTDOMAIN' ),
			'parent_item'                => __( 'Parent dossier', 'YOUR-TEXTDOMAIN' ),
			'parent_item_colon'          => __( 'Parent dossier:', 'YOUR-TEXTDOMAIN' ),
			'edit_item'                  => __( 'Edit dossier', 'YOUR-TEXTDOMAIN' ),
			'update_item'                => __( 'Update dossier', 'YOUR-TEXTDOMAIN' ),
			'add_new_item'               => __( 'New dossier', 'YOUR-TEXTDOMAIN' ),
			'new_item_name'              => __( 'New dossier', 'YOUR-TEXTDOMAIN' ),
			'separate_items_with_commas' => __( 'Dossiers separated by comma', 'YOUR-TEXTDOMAIN' ),
			'add_or_remove_items'        => __( 'Add or remove dossiers', 'YOUR-TEXTDOMAIN' ),
			'choose_from_most_used'      => __( 'Choose from the most used dossiers', 'YOUR-TEXTDOMAIN' ),
			'menu_name'                  => __( 'Dossiers', 'YOUR-TEXTDOMAIN' ),
		),
	) );

}
add_action( 'init', 'dossier_init' );