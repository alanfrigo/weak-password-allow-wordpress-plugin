<?php
/**
 * Plugin Name: Weak Password Allow
 * Plugin URI:  https://alanfrigo.com.br
 * Description: Allows customers to register with weak passwords on WooCommerce.
 * Version:     1.0.0
 * Author:      Alan Frigo
 * Author URI:  https://alanfrigo.com.br
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: weak-password-allow
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Set WooCommerce minimum password strength to zero.
 *
 * @param int $strength The minimum password strength (default 3).
 * @return int The new minimum password strength (0).
 */
function wc_weak_password_allow( $strength ) {
    return 0;
}
add_filter( 'woocommerce_min_password_strength', 'wc_weak_password_allow' );
