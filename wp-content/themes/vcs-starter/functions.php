<?php
define('ASSETS_URL', get_template_directory_uri() .'/assets/');
function add_styles(){
	wp_enqueue_style('main', ASSETS_URL . 'styles/style.css', array(), false);
	wp_enqueue_style('mediaq', ASSETS_URL . 'styles/mediaq.css', array(), false);
	wp_enqueue_style('slick', ASSETS_URL . 'libraries/slick/slick.css', array(), false);
	wp_enqueue_style('slickt', ASSETS_URL . 'libraries/slick/slick-theme.css', array(), false);
	wp_enqueue_style('fonts', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), false);
//js
	wp_enqueue_script('jquery', ASSETS_URL . 'scripts/jquery-3.3.1.min.js', array(), false);
	wp_enqueue_script('slickjs', ASSETS_URL . 'libraries/slick/slick.min.js', array('jquery'), false);
	wp_enqueue_script('mainjs', ASSETS_URL . 'scripts/regular.js', array('jquery'), false);

}

add_action( 'wp_enqueue_scripts', 'add_styles' );

function hide_admin_bar() {
	show_admin_bar(false);
}

add_action('init', 'hide_admin_bar');

//Adding team support

function my_theme_support() {
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');
}

add_action('init', 'my_theme_support');

//nav

function topsubmenu() {
   
	register_nav_menus(array( 
        'topsubmenu' => __( 'Top sub menu' ) 
    ));
}

add_action( 'init', 'topsubmenu' );

add_action( 'after_setup_theme', 'woocommerce_support' );
 
function woocommerce_support() {
 
   add_theme_support( 'woocommerce' );
   
}

 	


add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
 
}


//Single Page change add to cart text
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );   // 2.1 +
function woo_custom_cart_button_text() {
return __( 'Į krepšelį', 'woocommerce' );
 
}
//On Archive Pages change add to cart text
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );   // 2.1 +
function woo_archive_custom_cart_button_text() {
return __( 'Į krepšelį', 'woocommerce' );
}



// Cart contents are updated when products are added to the cart via AJAX 
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
ob_start();
?>
<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->get_cart_total(); ?></a>
<?php

$fragments['a.cart-contents'] = ob_get_clean();

return $fragments;
}


add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )

    );

    register_sidebar(
        array(
            'id'            => 'secondary',
            'name'          => __( 'Secondary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
        
    );

    register_sidebar(
        array(
            'id'            => 'left-side',
            'name'          => __( 'Left Side Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
        
    );

    register_sidebar(
        array(
            'id'            => 'forsingle',
            'name'          => __( 'For single product page' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
        
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}



function categorymenu() {
   
    register_nav_menus(array( 
        'categorymenu' => __( 'Categories' ) 
    ));
}

add_action( 'init', 'categorymenu' );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );