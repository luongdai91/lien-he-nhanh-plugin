<?php
/**
 * Plugin Name: Liên hệ nhanh
 * Plugin URI: https://kituchat.com
 * Description: Nút liên hệ nhanh cho website
 * Version: 1.0
 * Author: Luong Dai
 * Author URI: https://www.facebook.com/luongdai91/
 * License: GPLv2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LHN_LD_FILE', __FILE__ );
define( 'LHN_LD_NAME', basename( LHN_LD_FILE ) );
define( 'LHN_LD_BASE_NAME', plugin_basename( LHN_LD_FILE ) );
define( 'LHN_LD_PATH', plugin_dir_path( LHN_LD_FILE ) );
define( 'LHN_LD_URL', plugin_dir_url( LHN_LD_FILE ) );



function lhn_register_mysettings() {
    register_setting( 'ld-lien-he-nhanh', 'ld_phone' );
    register_setting( 'ld-lien-he-nhanh', 'ld_facebook' );
    register_setting( 'ld-lien-he-nhanh', 'ld_zalo' );
    register_setting( 'ld-lien-he-nhanh', 'ld_messenger' );


}

require_once LHN_LD_PATH . '/front-end.php';

// add menu admin wp
function lhn_create_menu() {
    add_menu_page('Liên hệ nhanh', 'Nút Liên hệ', 'administrator', 'lien_he_nhanh', 'lhn_settings_page','dashicons-admin-generic');
    add_action( 'admin_init', 'lhn_register_mysettings' );


}
add_action('admin_menu', 'lhn_create_menu');

function lhn_settings_page() {
    include LHN_LD_PATH. '/admin.php';
}

LienHeNhanh_LD::instance();