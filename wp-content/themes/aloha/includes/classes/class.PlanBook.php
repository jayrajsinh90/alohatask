<?php
class Theme_PlanBook
{
    
    function __construct(){
        
	}

	function planbook_category_list()
	{   
	    $terms = get_terms( 'plan_book_category', array(
	          'orderby'   => 'name', 
	          'order'     => 'ASC',
	          'hide_empty'  => false
	       ));
		return $terms;
		
	}
    
	function planbook_listing_list($termId)
	{
		if($termId != '')
		{
		  $args = array(
			  'post_type'  => 'plan_book_listing',
			  'numberposts' => -1,
			  'post_status' => 'publish',
			  'orderby' => 'name',
			  'order'     => 'ASC',
			  'tax_query' => array(
				  array(
					  'taxonomy' => 'plan_book_category',
					  'field' => 'term_id',
					  'terms' => $termId,
				  )
			  ),
		  );
		}
		
		// $args = array(
		// 	'post_type'=>'plan_book_listing',
		// 	'post_status'  => 'publish',
		// 	'posts_per_page' => -1,           
		// 	'parent'    => '',
		// 	'tax_query' => array(
		// 			array(
		// 			  'taxonomy' => 'plan_book_category',
		// 			  'field' => 'slug',
		// 			  'terms' => $term->slug
		// 			)
		// 		  )
		// 	);
		// $query = new wp_query($args); 

	    
	    $postslist = get_posts( $args );
		wp_reset_postdata();		
	    return $postslist;
	}
	

}