<?php
class Theme_Customers
{
    
    function __construct(){
        
    }
    
	function customer_listing_list()
	{
		$args = array(
	        'post_type'  => 'happy_customer',
	        'post_status' => 'publish',
	        'orderby' => 'title',
	        'order'     => 'ASC',
	    );

	    
	    $postslist = get_posts( $args );
		wp_reset_postdata();		
	    return $postslist;
	}

}