<?php
/*
Plugin Name: Bootstrap 4 WordPress ShortCodes
Plugin URI: #
Description: A set of Bootstrap 4 ShortCodes
Version: 0.1
Author: Andrew MacPherson
Author URI: http://andrewmacpherson.ca
License: GPL2
*/

//Load bootstrap
function bootstrap_4_wordpress_shortcodes_enqueue_style() {
	wp_enqueue_style( 'bootstrap', plugins_url().'/bootstrap-4-wordpress-shortcodes/libraries/bootstrap-4.0.0/css/bootstrap.min.css', false ); 
}

function bootstrap_4_wordpress_shortcodes_enqueue_script() {
	wp_enqueue_script( 'tether', plugins_url().'/bootstrap-4-wordpress-shortcodes/libraries/tether/tether.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap', plugins_url().'/bootstrap-4-wordpress-shortcodes/libraries/bootstrap-4.0.0/js/bootstrap.min.js', array('jquery','tether') );
}

add_action( 'wp_enqueue_scripts', 'bootstrap_4_wordpress_shortcodes_enqueue_style',20 );
add_action( 'wp_enqueue_scripts', 'bootstrap_4_wordpress_shortcodes_enqueue_script' );


//Remove empty paragraphs
function stripParagraphs($content){
	if ( '</p>' == substr( $content, 0, 4 ) && '<p>' == substr( $content, strlen( $content ) - 3 ) ){
        $content = substr( $content, 4, strlen( $content ) - 7 );
	}

	return $content;
}


include( plugin_dir_path( __FILE__ ) . 'components/grid.php');
include( plugin_dir_path( __FILE__ ) . 'components/alert.php');
include( plugin_dir_path( __FILE__ ) . 'components/badge.php');
include( plugin_dir_path( __FILE__ ) . 'components/cards.php');
include( plugin_dir_path( __FILE__ ) . 'components/breadcrumb.php');
include( plugin_dir_path( __FILE__ ) . 'components/buttons.php');
include( plugin_dir_path( __FILE__ ) . 'components/carousel.php');
include( plugin_dir_path( __FILE__ ) . 'components/collapse.php');
include( plugin_dir_path( __FILE__ ) . 'components/dropdowns.php');
include( plugin_dir_path( __FILE__ ) . 'components/jumbotron.php');
include( plugin_dir_path( __FILE__ ) . 'components/listgroups.php');
include( plugin_dir_path( __FILE__ ) . 'components/modals.php');
include( plugin_dir_path( __FILE__ ) . 'components/navs.php');
include( plugin_dir_path( __FILE__ ) . 'components/navbar.php');
include( plugin_dir_path( __FILE__ ) . 'components/pagination.php');
include( plugin_dir_path( __FILE__ ) . 'components/popover.php');
include( plugin_dir_path( __FILE__ ) . 'components/progress.php');
include( plugin_dir_path( __FILE__ ) . 'components/tooltips.php');