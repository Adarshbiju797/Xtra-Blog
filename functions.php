<?php
//css files
function load_css(){
    
    
    wp_register_style('bootstrap', get_template_directory_uri()  . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('templatemo-xtra-blog', get_template_directory_uri()  . '/css/templatemo-xtra-blog.css', array(), false, 'all');
    wp_enqueue_style('templatemo-xtra-blog');

    wp_register_style('fontawsome', get_template_directory_uri()  . '/fontawesome/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('fontawsome');
}
add_action('wp_enqueue_scripts','load_css');

//js files    
function load_js(){

    //wp_enqueue_script('jquery');
    
    wp_register_script('jquery', get_template_directory_uri()  .'/js/jquery.min.js', 'jquery', false, true);
    wp_enqueue_script('jquery');

    wp_register_script('templatemo-script', get_template_directory_uri()  .'/js/templatemo-script.js', 'jquery', false, true);
    wp_enqueue_script('templatemo-script');


}
add_action('wp_enqueue_scripts','load_js');


//Theme options
add_theme_support('menus');
	
add_theme_support( 'post-thumbnails', array( 'post' ) );

//menus
function nav_menus(){

    
        $locations = array(
            'primary' => 'Desktop Primary Left Sidebar',
            
            'footer' => 'footer Menu Location',
        );
        register_nav_menus($locations);
}
add_action('init','nav_menus');


function register_acf_block_types()
{

    acf_register_block_type(

        array(

            'name' =>'gallery',
            'title' => __('Gallery'),
            'description' => __('A custom gallery block'),
            'render_template' => 'gallery.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('gallery', 'image'),
        )
    );
}

//blockquote block

function mab_register_acf_block_types() {
    acf_register_block_type( [
        'name'            => 'blockquote',
        'title'           => __( 'Blockquote' ),
        'description'     => __( 'My blockquote block.' ),
        'render_template' => 'blockquote.php',
        'icon'            => 'format-quote',
    ] );
}

if ( function_exists( 'acf_register_block_type' ) ) {
    add_action( 'acf/init', 'mab_register_acf_block_types' );
}