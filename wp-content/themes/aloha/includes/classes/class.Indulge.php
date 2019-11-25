<?php
class Theme_Indulge
{
    
    function __construct(){
        
	}

	function planbook_category_list()
	{   
	    $terms = get_terms( 'indulge_category', array(
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
			  'post_type'  => 'indulge_listing',
			  'numberposts' => -1,
			  'post_status' => 'publish',
			  'orderby' => 'name',
			  'order'     => 'ASC',
			  'tax_query' => array(
				  array(
					  'taxonomy' => 'indulge_category',
					  'field' => 'term_id',
					  'terms' => $termId,
				  )
			  ),
		  );
		}
		

	    
	    $postslist = get_posts( $args );
		wp_reset_postdata();		
	    return $postslist;
	}
	

}