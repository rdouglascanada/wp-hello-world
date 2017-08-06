<?php
/*
Plugin Name: RDouglasCanada-WP-Hello-World
Description: A simple WordPress plugin that inserts the text "Hello World!" onto a WordPress webpage when [HelloWorld] is in the page source.
Version: 1.0
Author: RDouglasCanada
*/

function helloWorld() {
	wp_enqueue_style('rdouglascanada-wp-hello-world-style',plugins_url().'/rdouglascanada-wp-hello-world/rdouglascanada-wp-hello-world.css');
	return '<span class="helloWorld">Hello World!</span>';
}
add_shortcode('HelloWorld','helloWorld');
?>