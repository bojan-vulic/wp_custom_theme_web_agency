<?php

function web_agency_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',array('search-form'));
    
     require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'web_agency' )
    ));
    
}
add_action('after_setup_theme','web_agency_theme_setup');