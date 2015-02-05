<?php 

/**
 * Plugin name: Background Theatre
 * Description: Movies are amazing! Why not watch one on the biggest screen on your site? Your site background.
 * Author: 		Tarei King
 * Author URI:  http://tarei.me
 * 
 */


class Background_Theatre {

	function __construct() {

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

	}

	function enqueue_scripts(){

		wp_register_script( 'vide', plugins_url( '/js/jquery.vide.min.js', __FILE__ ), array( 'jquery' ), '0.3.0' );
		wp_register_script( 'background-theatre', plugins_url( '/js/background-theatre.js', __FILE__ ), array( 'vide' ), '1.0' );

		wp_enqueue_script( 'vide' );
		wp_enqueue_script( 'background-theatre' );

	}

	function render_video(){



	}

}

function background_theatre_init(){

	new Background_Theatre();

}

add_action( 'plugins_loaded', 'background_theatre_init' );