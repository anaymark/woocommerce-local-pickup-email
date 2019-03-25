<?php
/**
 * Plugin Name: WooCommerce Custom Local Pick-Up Email
 * Plugin URI: 
 * Description: Plug-in to create 2 new emails that send if local pickup is selected as the shipping method. First email will send when order is placed and paid(processing status), second email will send when order is complete to notify customer pickup is ready.
 * Author: dangerzone08
 * Author URI: https://github.com/dangerzone08
 * Version: 0.1
 *
 * License: MIT License
 * License URI: https://opensource.org/licenses/MIT
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *  Add a custom email to the list of emails WooCommerce should load
 *
 * @since 0.1
 * @param array $email_classes available email classes
 * @return array filtered available email classes
 */
function add_local_order_woocommerce_email( $email_classes ) {

    // include our custom email class
    require( 'includes/class-wc-local-order-email.php' );
    require( 'includes/class-wc-local-order-complete-email.php');

    // add the email class to the list of email classes that WooCommerce loads
    $email_classes['WC_Local_Order_Email'] = new WC_Local_Order_Email();
    $email_classes['WC_Local_Order_Complete_Email'] = new WC_Local_Order_Complete_Email();

    return $email_classes;

}
add_filter( 'woocommerce_email_classes', 'add_local_order_woocommerce_email' );
