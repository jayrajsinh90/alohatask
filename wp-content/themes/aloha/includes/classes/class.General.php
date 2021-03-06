<?php
class Theme_General
{
    
    function __construct(){
        
		add_action( 'after_setup_theme', array($this,'theme_setup') );
		add_action( 'widgets_init', array($this,'theme_widgets_init') );

		add_action( 'wp_enqueue_scripts', array($this,'scripts') );
		add_filter( 'style_loader_tag', array($this,'add_style_attributes'), 10, 2 );
		
		add_filter('admin_bar_menu', array($this,'replace_howdy'),25);

		add_filter( 'nav_menu_link_attributes', array($this,'main_header_menu_add_li_class'), 10, 3 );
        add_filter('nav_menu_css_class',array($this,'main_header_menu_add_a_class'),110,3);

        add_filter( 'wp_mail_from_name', array($this,'custom_wp_mail_from_name') );
        add_filter( 'wp_mail_from', array($this,'custom_wp_mail_from') );
        add_filter( 'wp_mail_content_type', array($this,'set_content_type') );

        add_action( 'wp_login', array($this,'user_last_login'), 10, 2 );
    }
    
    function theme_setup(){
    	show_admin_bar(false);
    	add_theme_support( 'title-tag' );
    	add_theme_support( 'post-thumbnails' );
        register_nav_menus( array(
        	'front_header_menu' => 'Front Header Menu',
        	'sidebar_menu' => 'Sidebar Menu',
        	'footer_menu' => 'Footer Menu'
        ) );
    }

    function theme_widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Sidebar', TEXT_DOMAIN ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Add widgets here to appear in your sidebar.', TEXT_DOMAIN ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer', TEXT_DOMAIN ),
				'id'            => 'sidebar-footer',
				'description'   => __( 'Add widgets here to appear in your footer.', TEXT_DOMAIN ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);
	}
    
    function scripts(){
    	wp_enqueue_style( 'thememain-style', THEME_URL.'style.css' );
    	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500,600,700' );
		wp_enqueue_style( 'unpkg', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
		wp_enqueue_style( 'master-css', THEME_URL.'assets/css/master.css' );

		// wp_enqueue_script( 'jquery3', 'https://code.jquery.com/jquery-3.4.0.min.js','', '', true);
	    wp_enqueue_script( 'jquery3', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js','', '', false);

		// wp_enqueue_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );

		wp_script_add_data( 'jquery3', array( 'integrity', 'crossorigin' ) , array( 'sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=', 'anonymous' ) );
		wp_enqueue_script( 'poper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js','', '', true);
		wp_script_add_data( 'poper-js', array( 'integrity', 'crossorigin' ) , array( 'sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1', 'anonymous' ) );
		wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js','', '', true);
		wp_script_add_data( 'bootstrap-js', array( 'integrity', 'crossorigin' ) , array( 'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM', 'anonymous' ) );
		wp_enqueue_script( 'all-js', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js','', '', true);
		wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js','', '', true);
    }

    function add_style_attributes( $html, $handle ) {

	    if ( 'bootstrap-css' === $handle ) {
	        return str_replace( "media='all'", "media='all' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'", $html );
	    }
	    return $html;
	}

    function replace_howdy($wp_admin_bar) {
	    $my_account=$wp_admin_bar->get_node('my-account');
	    $newtitle = str_replace('Howdy,', '', $my_account->title );
	    $wp_admin_bar->add_node(array(
	        'id' => 'my-account',
	        'title' => $newtitle,
	        )
	    );
	}

	function main_header_menu_add_li_class( $atts, $item, $args ) {
		if($args->theme_location == 'front_header_menu') { 
		    $class = 'nav-link'; // or something based on $item
		    $atts['class'] = $class;
		}
	    return $atts;
	}

	function main_header_menu_add_a_class($classes, $item, $args) {
	    if($args->theme_location == 'front_header_menu') { 
	        $classes[] = 'nav-item'; // add classes
	    }
	    return $classes;
	}

    function custom_file_upload($array=array())	{
    	$inputTagName = $array['inputTagName'];
    	
    	if($inputTagName=='webcam'){
    		return array('imagePostId' => $this->upload_base64_img());
    	}
    	$post_id = $array['post_id'];
		// The nonce was valid and the user has the capabilities, it is safe to continue.

		// These files need to be included as dependencies when on the front end.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );
		
		// Let WordPress handle the upload.
		// Remember, 'my_image_upload' is the name of our file input in our form above.
		$attachment_id = media_handle_upload( $inputTagName, $post_id );
		
		if ( is_wp_error( $attachment_id ) ) {
			// There was an error uploading the image.
		} else {
			// The image was uploaded successfully!
			return array('imagePostId' => $attachment_id);
		}
	}
	
	function custom_file_multiple_upload($array=array()){
    	$inputTagName = $array['inputTagName'];
    	$post_id = $array['post_id']; $attachment_id = '';
		// The nonce was valid and the user has the capabilities, it is safe to continue.

		// These files need to be included as dependencies when on the front end.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		if(is_array($_FILES[$inputTagName]))
		{
			$attachmentArray = [];

			$filetype = $_FILES[$inputTagName];
			foreach ($filetype['name'] as $key => $value) {
		        if ($filetype['name'][$key]) {
		            $file = array(
		                'name' => $filetype['name'][$key],
		                'type' => $filetype['type'][$key],
		                'tmp_name' => $filetype['tmp_name'][$key],
		                'error' => $filetype['error'][$key],
		                'size' => $filetype['size'][$key]
		            );
		            $_FILES['upload_file'] = $file;
		            $attachmentArray[] = media_handle_upload( "upload_file", $post_id );
		        }
		    }

		    $attachment_id = implode(',', $attachmentArray);
		}
		
		if ( is_wp_error( $attachment_id ) ) {
			// There was an error uploading the image.
		} else {
			// The image was uploaded successfully!
			return array('imagePostId' => $attachment_id);
		}
	}

	function send_mail($array)
	{
		$to = $array['toEmailId'];
		$subject = $array['subject'];
		$body = $array['bodyContent'];
		//$headers = array('Content-Type: text/html; charset=UTF-8');
				 
		return wp_mail( $to, $subject, $body );
	}

	function custom_wp_mail_from_name( $original_email_from ) {
		return COMPANY_NAME;
	}

	function custom_wp_mail_from( $original_email_address ) {
		//Make sure the email is from the same domain 
		//as your website to avoid being marked as spam.
		return COMPANY_EMAIL;
	}

	function set_content_type( $content_type ) {
		return 'text/html';
	}
    
    function user_last_login( $user_login, $user ) {
	    update_user_meta( $user->ID, 'last_login', time() );
	}

	function wpb_lastlogin() { 
		$userDetails = $this->show_user_details(get_current_user_id());

	    $last_login = $userDetails['metaData']['last_login'][0];
	    //$the_login_date = human_time_diff($last_login);
	    $the_login_date = date('M j, Y h:i a', $last_login);
	    return $the_login_date; 
	} 

	function show_user_details($userId)
	{
		$userDetailsArray = array();
		$userDetails = get_user_by('id', $userId);

		$userDetls = get_user_meta($userId);

		$userDetailsArray['data'] = $userDetails->data;
		$userDetailsArray['metaData'] = $userDetls;

		return $userDetailsArray;
	}

	function show_page_title()
	{
		if (is_home()) {
	        if (get_option('page_for_posts', true)) {
	          $pageTitle = get_the_title(get_option('page_for_posts', true));
	        } else {
	          $pageTitle = 'Latest Posts';
	        }
	    }
      	elseif (is_archive()) {
	        $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

	        $category = $term->taxonomy;

	        if($category == 'business_category')
	        {
	        	$pagee = get_page_by_path( BUSINESS_SLUG );
	        	$pageTitle = $pagee->post_title;
	        }
	        else
	        {
	        	$pageTitle = single_cat_title("", false);
	        }


      	} elseif (is_search()) {
      		$pageTitle = 'Search Results for: '.get_search_query();
      	} elseif (is_404()) {
        	$pageTitle = 'Not Found';
      	} else {
        	global $post;
      		$postType = get_post_type( $post->ID );

      		if($postType == 'post')
      		{
      			$pageTitle = get_the_title(get_option('page_for_posts', true));
      		}
	        else if($postType == 'business_listing')
	        {
	        	$pagee = get_page_by_path( BUSINESS_SLUG );
	        	$pageTitle = $pagee->post_title;
	        }
      		else
      		{
        		$pageTitle = get_the_title();
        	}
      	}

      	return $pageTitle;
	}

	function show_featured_image()
	{
		global $post;
      	$postType = get_post_type( $post->ID );

		if(is_front_page())
    	{
    		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    	}
    	else if (is_home() || $postType == 'post') {
          if (get_option('page_for_posts', true)) {
            $featured_img_url = get_the_post_thumbnail_url(get_option('page_for_posts', true),'full'); 
          } else {
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
          }
        }
        elseif (is_archive()) {
        	$featured_img_url = '';
        }
        else
        {
        	if(is_page())
        	{
        		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
        	}
        	else
        	{
        		$featured_img_url = '';
        	}
        }
        if($featured_img_url == '')
        {
            $featured_img_url = THEME_URL.'assets/images/grantspass-bd-banner.png';
        }
    	return $featured_img_url; 
	}

	function show_post_type($postID)
	{
		$postType = get_post_type( $postID );
		$postTypeName = '';

		if($postType == 'happy_customer')
		{
			$postTypeName = 'Happy Customer';
		}
		else if($postType == 'post')
		{
			$postTypeName = 'Blog';
		}
		else
		{
			$postTypeName = 'post';
		}
		return $postTypeName;
	}
}
