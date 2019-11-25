<?php
define('THEME_NAME','Aloha');
define('TEXT_DOMAIN','aloha');
define('SITE_URL',site_url('/'));
define('THEME_URL',get_theme_file_uri().'/');
define('COMPANY_NAME','Aloha');
define('COMPANY_EMAIL','noreply@aloha.com');
define('ADMIN_EMAIL','admin@aloha.com');
define('THEME_TEMPLATES',get_theme_file_uri().'/includes/templates/');

include_once('includes/autoload.php');

// Function to add text shortcode to posts and pages
function text_shortcode_example(){
    return 'COPYRIGHT &copy; 2019 ALOHA OUTDOORS';
}

add_shortcode('text', 'text_shortcode_example');


/**
 * Add REST API support to an already registered post type.
 */
// add_filter( 'register_post_type_args', 'my_post_type_args', 10, 2 );
 
// function my_post_type_args( $args, $post_type ) {
 
//     if ( 'happy_customer' === $post_type ) {
//         $args['show_in_rest'] = true;
 
//         // Optionally customize the rest_base or rest_controller_class
//         $args['rest_base']             = 'happy-customer';
//         $args['rest_controller_class'] = 'WP_REST_Posts_Controller';
// 	}
	
// 	if ( 'plan_book_listing' === $post_type ) {
//         $args['show_in_rest'] = true;
 
//         // Optionally customize the rest_base or rest_controller_class
//         $args['rest_base']             = 'plan-book';
//         $args['rest_controller_class'] = 'WP_REST_Posts_Controller';
//     }
 
//     return $args;
// }

// function json_custom_fields( $data, $post, $request ) {
// 	$_data = $data->data;

// 	$_data['testimonial_image'] = get_field('testimonial_image', $post->ID);
// 	$_data['testimonial_description'] = get_field('testimonial_description', $post->ID);
	

// 	$data->data = $_data;
// 	return $data;
// }
// add_filter( 'rest_prepare_happy_customer', 'json_custom_fields', 10, 3 );




// register the endpoint

add_action('rest_api_init', 'new_function');

function new_function(){

    register_rest_route( 'v1', '/happy/', array(
		'methods' => 'GET',
		'callback' => 'my_endpoint1',
		)
	);
	register_rest_route( 'v1', '/plan-book/', array(
		'methods' => 'GET',
		'callback' => 'my_endpoint2',
		)
	);
	register_rest_route( 'v1', '/interact/', array(
		'methods' => 'GET',
		'callback' => 'my_endpoint3',
		)
	);

}

function my_endpoint1( $request_data ) {

	// setup query argument
	$args = array(
		'post_type' => 'happy_customer',
	);

	// get posts
	$posts = get_posts($args);

	// add custom field data to posts array	
	foreach ($posts as $key => $post) {
			$posts[$key]->acf = get_fields($post->ID);
	}
	return $posts;
}

function my_endpoint2( $request_data ) {

	// setup query argument
	$args = array(
		'post_type' => 'plan_book_listing',
	);

	// get posts
	$posts = get_posts($args);

	// add custom field data to posts array	
	foreach ($posts as $key => $post) {
			$posts[$key]->acf = get_fields($post->ID);
	}
	return $posts;
}
function my_endpoint3( $request_data ) {

	// setup query argument
	$args = array(
		'post_type' => 'post',
	);

	// get posts
	$posts = get_posts($args);

	return $posts;
}