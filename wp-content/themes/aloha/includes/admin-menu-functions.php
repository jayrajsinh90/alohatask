<?php
add_action( 'admin_menu', 'theme_register_my_custom_menu_page' );
function theme_register_my_custom_menu_page(){

    // Admin pages for Happy Customer Testimonial

    add_menu_page(
        __('Happy Customers', TEXT_DOMAIN),
        'Happy Customers',
        'manage_options',
        'happy-customer',
        '',
        '',
        25
    );
    add_menu_page(
        __('Plan & Book', TEXT_DOMAIN),
        'Plan & Book',
        'manage_options',
        'planbook',
        '',
        '',
        25
    );
    add_submenu_page( 
        'planbook', 
        __( 'Booking Category', TEXT_DOMAIN ),
        'Booking Category',
        'manage_options', 
        'edit-tags.php?taxonomy=plan_book_category&post_type=plan_book_listing', 
        null
    );
    
}

// function custom_function()
// {
//     include(THEME_URL.'includes/admin/custom-function-name.php'); 
// }