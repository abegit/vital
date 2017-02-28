<?php 
add_filter('show_admin_bar', '__return_false');

add_theme_support( 'post-thumbnails' );

// materialcss navigation walker
    require_once('wp_materialcss_walker.php');

  add_action( 'after_setup_theme', 'mcs_setup' );
    if ( ! function_exists( 'mcs_setup' ) ):
        function mcs_setup() { 
            register_nav_menu( 'right', __( 'Right menu', 'materialcss' ) );
            register_nav_menu( 'left', __( 'Left menu', 'materialcss' ) );
            register_nav_menu( 'mobile', __( 'Mobile menu', 'materialcss' ) );
            register_nav_menu( 'mobile-search', __( 'Mobile Search menu', 'materialcss' ) );
            // register_nav_menu( 'third', __( 'Third', 'materialcss' ) );
    } endif;



add_action( 'add_meta_boxes', 'meta_box_post' );

	function meta_box_post( $post ) {
	
	    add_meta_box(
	            'meta-box-post', // ID, should be a string
	            'YouTube Video', // Meta Box Title
	            'meta_box_materialcss_post_content', // Your call back function, this is where your form field will go
	            'post', // The post type you want this to show up on, can be post, page, or custom post type
	            'normal', // The placement of your meta box, can be normal or side
	            'high' // The priority in which this will be displayed
	        );
	        
	}
	
	// Content for the custom meta box
	function meta_box_materialcss_post_content() {
	
		// info current post
	    global $post;
	    
	    //metabox value if is saved
	    $post_video = get_post_meta($post->ID, 'post_video', true);
	    // ADD here more custom field 	    
	    
	    // security check
	    wp_nonce_field(__FILE__, 'materialcss_nonce');
	    ?>
	    <p>To show a video in the article paste the id of a YouTube video in the box below. <br/><input name="post_video" id="post_video" value="<?php echo $post_video; ?>" style="border: 1px solid #ccc; margin: 10px 10px 0 0"/> <small>If the url is http://www.youtube.com/watch?v=<strong>UWHeEI7aOvc</strong>, the ID is <strong>UWHeEI7aOvc</strong>.</small></p>
	    <!-- *** ADD here more custom field  *** -->	    
	    
	    <?php
		
	}

// save function only when save
add_action('save_post', 'save_resource_meta');

	function save_resource_meta(){
    // post info
	    global $post;
	    // don't autosave metabox
	    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
	        return;
	    }
	    
	    // security check:
	    // chek if hidden field wp_nonce_field()
	    // is correct, if isn't don't save the field
	    if ($_POST && wp_verify_nonce($_POST['materialcss_nonce'], __FILE__) ) {
	        // check if the value is in the form
	        if ( isset($_POST['post_video']) ) {
	            // save info metabox
	            update_post_meta($post->ID, 'post_video', $_POST['post_video']);
	            //ADD here more custom field 
	        }
	    }  
	}


if ( function_exists('register_sidebar') ) {
		register_sidebar(array('name'=>'Home Sidebar',
			'id' => 'sidebar-1',
			'before_widget' => '<div id="%1$s" class="widget %2$s panel s12 col">',	
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
		register_sidebar(array('name'=>'Article Sidebar',
			'id' => 'sidebar-2',
			'before_widget' => '<div id="%1$s" class="widget %2$s panel s12 col">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
	}



add_filter('widget_text', 'do_shortcode');
add_filter('content', 'do_shortcode');


add_filter( "wp_nav_menu_items", function ($items, $args){
		if ($args->theme_location == 'right') {
			// $items .= bpCustom_Header();
			return $items; 
		} elseif ($args->theme_location == 'mobile-search') {
			$keepitems = $items;
			// $items = bpCustom_Header() . $keepitems;
			// return $items; 
			return bpCustom_Header();
		} else {
			return $items; 
		}
	},10,2 );
	function bpCustom_Header() {
		ob_start(); ?>	
		<li class="right"><?php get_search_form(); ?></li>
		<?php 
		return ob_get_clean();

	}



// thenewsletterplugin.com ajax fix
function blank_scripts() {
	wp_enqueue_script( 'requireJS', get_stylesheet_directory_uri() . '/js/newsletter-ajax.js', [ 'jquery' ], null, true );
    wp_localize_script( 'requireJS', 'js_config', array(
        'ajax_url'	=> admin_url( 'admin-ajax.php' ),
        'ajax_nonce'	=> wp_create_nonce( 'ajax-nonce' ),
    ));
}
add_action( 'wp_enqueue_scripts', 'blank_scripts' );
function jnz_tnp_ajax_subscribe() {
    check_ajax_referer( 'ajax-nonce', 'nonce' );
    $data = urldecode( $_POST['data'] );
    if ( !empty( $data ) ) :
        $data_array = explode( "&", $data );
        $fields = [];
        foreach ( $data_array as $array ) :
            $array = explode( "=", $array );
            $fields[ $array[0] ] = $array[1];
        endforeach;
    endif;

    if ( !empty( $fields ) ) :
         if ( filter_var( $fields['ne'], FILTER_VALIDATE_EMAIL ) ) :
            global $wpdb;

             //check if the email is already in the database
             $exists = $wpdb->get_var(
                 $wpdb->prepare(
                     "SELECT email FROM " . $wpdb->prefix . "newsletter
                    WHERE email = %s",
                     $fields['ne']
                 )
             );

             if ( ! $exists ) {
                 NewsletterSubscription::instance()->subscribe();
                 $output = array(
                     'status'    => 'success',
                     'msg'       => __( 'Thank you for your Email. Please check your inbox to confirm your subscription.', 'theme_text_domain' )
                 );
             } else {
                 //email is already in the database
                 $output = array(
                     'status'    => 'error',
                     'msg'       => __( 'Your Email is already in our system. Please check your inbox, to confirm your subscription.', 'theme_text_domain' )
                 );
             }

         else :
             $output = array(
                 'status'    => 'error',
                 'msg'       => __( 'The Email address is invalid.', 'theme_text_domain' )
             );
         endif;
    else :
        $output = array(
            'status'    => 'error',
            'msg'       => __( 'An Error occurred. Please try again later.', 'theme_text_domain' )
        );
    endif;
    wp_send_json( $output );
}
add_action( 'wp_ajax_nopriv_ajax_subscribe', 'jnz_tnp_ajax_subscribe' );
add_action( 'wp_ajax_ajax_subscribe', 'jnz_tnp_ajax_subscribe' );

 ?>