<?php
define( 'WLT_DIR', plugin_dir_path ( __FILE__ ) );
define( 'WLT_INCLUDES_DIR', trailingslashit ( WLT_DIR . 'includes' ) );
define( 'WLT_TEXT_DOMAIN', 'wp-list-table' );

function callbackMenu(){
   
   include('templates/view-user.php');
}
function add_css()

{
   wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.cus.css', false,'1.1','all');
   wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', false,'1.1','all');
   wp_register_style('icofont', get_template_directory_uri() . '/assets/css/icofont.min.css', false,'1.1','all');
   wp_register_style('linearicons', get_template_directory_uri() . '/assets/css/linearicons.css', false,'1.1','all');
   wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css', false,'1.1','all');
   wp_register_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', false,'1.1','all');
   wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', false,'1.1','all');
   wp_register_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', false,'1.1','all');
   wp_register_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', false,'1.1','all');
   wp_register_style('default', get_template_directory_uri() . '/assets/css/default.css', false,'1.1','all');
   wp_register_style('awselect', get_template_directory_uri() . '/assets/css/awselect.css', false,'1.1','all');
   
   // wp_register_script('jsm', 'https://code.jquery.com/jquery-1.11.1.min.js', array ( 'jquery' ), 1.1, false);

	// wp_enqueue_script( 'jsm');

   // wp_register_script('valid', 'https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js', array ( 'jquery' ), 1.1, false);

	// wp_enqueue_script( 'valid');

   // wp_register_script('validm', 'https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js', array ( 'jquery' ), 1.1, false);

	// wp_enqueue_script( 'validm');



   wp_enqueue_style( 'bootstrap');
   wp_enqueue_style( 'fontawesome');
   wp_enqueue_style( 'icofont');
   wp_enqueue_style( 'linearicons');
   wp_enqueue_style( 'slick');
   wp_enqueue_style( 'carousel');
   wp_enqueue_style( 'animate');
   wp_enqueue_style( 'magnific');
   wp_enqueue_style( 'meanmenu');
   wp_enqueue_style( 'default');
   wp_enqueue_style( 'first');
   wp_enqueue_style( 'responsive');
   wp_enqueue_style( 'awselect');

}

add_action('wp_enqueue_scripts', 'add_css');


function add_script()

{
   
	// wp_register_script('fs', 'https://kit.fontawesome.com/414cf9a048.js', array ( 'jquery' ), 1.1, true);

	// wp_enqueue_script( 'fs');
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array ( 'jquery' ), 1.1, false);

   wp_enqueue_script( 'js-script');

   wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'popper');

   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'bootstrap');

   wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'slick');

   wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'isotope');
   
   wp_register_script('imagesloadeds', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array ( ),false, true);

   wp_enqueue_script( 'imagesloadeds');

   wp_register_script('waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'waypoints');

   wp_register_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'counterup');

   wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'carousel');

   wp_register_script('meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'meanmenu');

   wp_register_script('magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'magnific');
   
   wp_register_script('sc', get_template_directory_uri() . '/assets/js/scrollup.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'sc');

   wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'main');

   wp_register_script('gsap', get_template_directory_uri() . '/assets/js/minified/gsap.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'gsap');

   wp_register_script('ScrollTrigger', get_template_directory_uri() . '/assets/js/minified/ScrollTrigger.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'ScrollTrigger');

   wp_register_script('MorphSVGPlugin', get_template_directory_uri() . '/assets/js/minified/MorphSVGPlugin.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'MorphSVGPlugin');

   wp_register_script('EasePack', get_template_directory_uri() . '/assets/js/minified/EasePack.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'EasePack');

   wp_register_script('ScrollSmoother', get_template_directory_uri() . '/assets/js/minified/ScrollSmoother.min.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'ScrollSmoother');

   wp_register_script('awselect', get_template_directory_uri() . '/assets/js/awselect.js', array ( 'jquery' ), 1.1, true);

   wp_enqueue_script( 'awselect');

}

add_action('wp_enqueue_scripts', 'add_script');

function page_menu_args( $args ) {
   $args['show_home'] = FALSE;
   return $args;
}
add_filter( 'wp_page_menu_args', 'page_menu_args' );
function supporttheme(){

   register_nav_menu( 'main_menu', 'Main Menu');
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');

} 

add_action( 'after_setup_theme', 'supporttheme' );

function df_post_type(){
   register_post_type('design-factories', array(
         'public' => true,
         'supports' => array('title'),
         'labels' => array(
            'name' => 'DF Post',
            'add_new_item' => 'Add New DF',
            'edit_item' => 'Edit DF',
            'all_items' => 'All DF'
         ),
         'menu_icon' => 'dashicons-flag'
   ));

   
}

add_action('init', 'df_post_type', 20);


 

function change_default_title_placeholder( $title ) {
   $screen = get_current_screen();

   if ( 'design-factories' == $screen->post_type ) { // Ganti 'custom_post_type' dengan nama custom post type Anda
       $title = 'Enter DF Name';
   }

   return $title;
}

add_filter( 'enter_title_here', 'change_default_title_placeholder' );

function theme_prefix_rewrite_flush() {
   flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' );


function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyCjspjgk_a5OtTGJxJsrpUs5NUG8c8-4e8');
}
add_action('acf/init', 'my_acf_init');



?>