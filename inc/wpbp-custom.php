<?php

// ENQUEUE
function enqueue()
{
	if ( !is_admin() ) {
	    // libs
	    wpbp_enqueue_lib(array('modernizr', 'jquery', 'wpbp', 'tinyNav', 'animatedElement'));
		// scripts
		wp_enqueue_script('theme', THEME_URI . '/js/scripts.js', array('jquery'));
		// styles
		wp_enqueue_style('theme', THEME_URI . '/css/master.css', array('wpbp'));
	}
}
add_action('init', 'enqueue');

wpbp_register_sidebars(array( 'Top', 'Recall', 'Footer A', 'Footer B', 'Footer C' ));

function ow_register_meta_fields()
{
    register_meta( 'post', 'abc', array(
        'type' => 'string',
        'description' => 'ABC',
        'single' => true,
        'show_in_rest' => true
    ) );
}
add_action( 'rest_api_init', 'ow_register_meta_fields' );
