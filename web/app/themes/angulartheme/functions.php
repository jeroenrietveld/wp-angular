<?php
// Include all post-types & taxonomies (see WP Scaffold) and all function files
foreach ( array( 'post-types', 'taxonomies', 'functions' ) as $type )
  foreach ( glob( get_template_directory() . "/$type/*.php" ) as $filename )
    include $filename;

function angular_theme_enqueue_scripts() {
    wp_register_script(
        'angular-core', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.js', array(), null, false
    );
    wp_register_script(
        'angular-route', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-route.js', array(), null, false
    );
    wp_register_script('angular-app', get_bloginfo('template_directory').'/js/app.js', array('angular-core'), null, false);
    wp_register_script('angular-controllers', get_bloginfo('template_directory').'/js/controllers.js', array('angular-core'), null, false);

    wp_enqueue_script('angular-core');
    wp_enqueue_script('angular-route');
    wp_enqueue_script('angular-app');
    wp_enqueue_script('angular-controllers');

    wp_localize_script('angular-core', 'AppAPI', array('url' => get_bloginfo('url').'/wp-json/'));
    wp_localize_script('angular-core', 'BlogInfo', array(
        'url' => get_bloginfo('template_directory').'/',
        'site' => get_bloginfo('wpurl')
    ));
}

add_action('wp_enqueue_scripts', 'angular_theme_enqueue_scripts');