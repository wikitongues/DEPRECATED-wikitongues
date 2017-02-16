<?php

// register navigation menu support
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'secondary-menu' => __( 'Secondary Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus');

// register thumbnail support
add_theme_support( 'post-thumbnails' );

// register logo support
function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

// register woocommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// register acf options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// test if featured product is in cart
function wt_is_in_cart($product_id) {
    global $woocommerce;

    foreach($woocommerce->cart->get_cart() as $key => $val ) {
        $_product = $val['data'];

        if($product_id == $_product->id ) {
            return true;
        }
    }

    return false;
}

// return featured product quantity count
function wt_get_cart_count($product_id) {
    global $woocommerce;

    foreach($woocommerce->cart->get_cart() as $key => $val ) {
        $_product = $val['data'];

        if($product_id == $_product->id ) {
        	echo $val['quantity'];
        }
    }
}

// redirect after headers sent
function redirect($url)
{
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';

    echo $string;
}

// remove woocommerce stylesheets
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// override checkout fields on donation page
function custom_override_checkout_fields( $fields ) {
    // placeholders
    $fields['billing']['billing_first_name']['label'] = 'What\'s your first name?';
    $fields['billing']['billing_last_name']['label'] = 'What\'s your last name?';
    $fields['billing']['billing_postcode']['label'] = 'What\'s your postal code?';
    $fields['billing']['billing_email']['label'] = 'What\'s your email?';
    $fields['billing']['billing_phone']['label'] = 'What\'s your phone number?';
    $fields['order']['order_comments']['label'] = 'Why does Wikitongues matter to you? (Optional)';
    $fields['order']['order_comments']['placeholder'] = 'Tell us why you care about language rights!';
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_country']);
        return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Override default 'place order' on checkout submit
add_filter( 'woocommerce_order_button_text', 'woo_custom_order_button_text' );

function woo_custom_order_button_text() {
    return __( 'Donate now', 'woocommerce' );
}

// Thank you notification
add_action( 'template_redirect', 'wc_custom_redirect_after_purchase' );
function wc_custom_redirect_after_purchase() {
    global $wp;

    if ( is_checkout() && ! empty( $wp->query_vars['order-received'] ) ) {
        wp_redirect( 'https://wikitongues.org/donation-received/' );
        exit;
    }
}
// function unrequired_wc_fields( $fields ) {
//     $fields['billing_company']['required'] = false;
//     $fields['billing_address_1']['required'] = false;
//     $fields['billing_address_2']['required'] = false;
// }
// add_filter('woocommerce_checkout_fields', 'unrequired_wc_fields');