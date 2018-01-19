<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//



//Add netID login info to login screen
function custom_login_message() {
$message = "<h2>Login with your UT netID <br />  (not your full email address)<br /> and password. <br /><br /> If you have problems logging in, email libwebmaster@utk.edu.</h2><br />";
return $message;
}
add_filter('login_message', 'custom_login_message');

//Remove "Remember Me" Checkbox from WordPress Login Page
add_action('login_head', 'remove_remember_me');
function remove_remember_me()
{
echo '<style type="text/css">.forgetmenot { display:none; }</style>' . "\n";
}

// Speed up WordPress RSS refresh to every 10 minutes or 600 seconds
add_filter( 'wp_feed_cache_transient_lifetime', create_function('$refreshrss', 'return 600;') );

//Fix Gravity Form Tabindex Conflicts
//http://gravitywiz.com/fix-gravity-form-tabindex-conflicts/
 
add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
    $starting_index = 1000; // if you need a higher tabindex, update this number
    if( $form )
        add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
    return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}

//===================================================================================================================
// Sidebars
//===================================================================================================================
/*
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => __( 'Home Left Sidebar' ),
		'id' => 'sidebar-home-left',
		'description' => 'Bottom Left Sidebar for Main Home',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	}
	
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => __( 'Home Center Sidebar' ),
		'id' => 'sidebar-home-center',
		'description' => 'Bottom Center Sidebar for Main Home',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	}

if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => __( 'Home Right Sidebar' ),
		'id' => 'sidebar-home-right',
		'description' => 'Bottom Right Sidebar for Main Home',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	}
*/

