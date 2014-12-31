<?php

add_image_size('archive-thumb', 100, 100);
add_image_size('header', 1000, 1000);

function news_article_init() {
	register_post_type( 'news-article', array(
		'labels'            => array(
			'name'                => __( 'News articles', 'YOUR-TEXTDOMAIN' ),
			'singular_name'       => __( 'News article', 'YOUR-TEXTDOMAIN' ),
			'all_items'           => __( 'News articles', 'YOUR-TEXTDOMAIN' ),
			'new_item'            => __( 'New news article', 'YOUR-TEXTDOMAIN' ),
			'add_new'             => __( 'Add New', 'YOUR-TEXTDOMAIN' ),
			'add_new_item'        => __( 'Add New news article', 'YOUR-TEXTDOMAIN' ),
			'edit_item'           => __( 'Edit news article', 'YOUR-TEXTDOMAIN' ),
			'view_item'           => __( 'View news article', 'YOUR-TEXTDOMAIN' ),
			'search_items'        => __( 'Search news articles', 'YOUR-TEXTDOMAIN' ),
			'not_found'           => __( 'No news articles found', 'YOUR-TEXTDOMAIN' ),
			'not_found_in_trash'  => __( 'No news articles found in trash', 'YOUR-TEXTDOMAIN' ),
			'parent_item_colon'   => __( 'Parent news article', 'YOUR-TEXTDOMAIN' ),
			'menu_name'           => __( 'News articles', 'YOUR-TEXTDOMAIN' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor', 'image' ),
		'has_archive'       => false,
		'rewrite'           => true,
		'query_var'         => true,
	) );

}
add_action( 'init', 'news_article_init' );

function news_article_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['news-article'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('News article updated. <a target="_blank" href="%s">View news article</a>', 'YOUR-TEXTDOMAIN'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'YOUR-TEXTDOMAIN'),
		3 => __('Custom field deleted.', 'YOUR-TEXTDOMAIN'),
		4 => __('News article updated.', 'YOUR-TEXTDOMAIN'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('News article restored to revision from %s', 'YOUR-TEXTDOMAIN'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('News article published. <a href="%s">View news article</a>', 'YOUR-TEXTDOMAIN'), esc_url( $permalink ) ),
		7 => __('News article saved.', 'YOUR-TEXTDOMAIN'),
		8 => sprintf( __('News article submitted. <a target="_blank" href="%s">Preview news article</a>', 'YOUR-TEXTDOMAIN'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('News article scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview news article</a>', 'YOUR-TEXTDOMAIN'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('News article draft updated. <a target="_blank" href="%s">Preview news article</a>', 'YOUR-TEXTDOMAIN'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'news_article_updated_messages' );