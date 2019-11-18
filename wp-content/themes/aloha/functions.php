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