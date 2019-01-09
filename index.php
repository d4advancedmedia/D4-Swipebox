<?php
/*
	Plugin Name: D4 Swipebox
	Plugin URI: http://brutaldesign.github.io/swipebox/#basic
	GitHub Theme URI: http://brutaldesign.github.io/swipebox/#basic
	GitHub Branch: master
	Description: Simple Swipebox Plugin
	Version: 2019.01.09
	Author: D4 Adv. Media (Plugin) Brutal Design (Original Code)
	License: GPL2
*/

function enqueue_d4swipebox() { 
	// Register Script

	wp_register_script( 'swipebox', plugins_url( '/src/js/jquery.swipebox.min.js' , __FILE__ ), array( 'jquery' ), 'v20131005', true );
	wp_enqueue_script('swipebox');

	wp_register_style( 'swipebox', plugins_url( '/src/css/swipebox.css' , __FILE__ ));
	wp_enqueue_style('swipebox' );

	wp_register_script( 'swipebox-init', plugins_url( '/swipebox-init.js' , __FILE__ ), array( 'jquery' ), 'v20131005', true );
	wp_enqueue_script('swipebox-init');

} add_action( 'wp_enqueue_scripts', 'enqueue_d4swipebox' );
