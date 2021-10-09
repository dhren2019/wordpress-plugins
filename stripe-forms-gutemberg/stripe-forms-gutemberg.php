<?php
/*
*Plugin Name: Stripe Forms Gutemberg
*Plugin URI: https://Goraiko.es
*Description: Bloque de formularios de Stripe con Gutemberg
*Author: Dhren
*Version: 1.0.0
*Author URI: https://Goraiko.es
*Text Domain: stripe-forms-gutemberg
*Domain Path: /languages
*License: GLP 2+
*/

//Cuando alguien intente  entrar a los ficheros del plugin le de un exit por seguridad

if (!defined('ABSPATH')) 
exit;

//Constantes, dentro de todo el wp 
define('STRIPEFG_NAME', 'Stripe Forms Gutemberg');
define('STRIPEFG_PATH', plugin_dir_path(__FILE__));
define('STRIPEFG_ADMIN_PATH', plugin_dir_path(__FILE__).'/admin/');

//? Funcion para añadir el menu
function stripe_forms_gutemberg_menu()
{
    add_menu_page( STRIPEFG_NAME, STRIPEFG_NAME, 'manage_options', STRIPEFG_ADMIN_PATH.'options.php' );
    /* Añade la pagina al menu 
    *$page_title
    *(string) (Required) The text to be displayed in the title tags of the page when the menu is selected.
    *
    *menu_title
    *string) (Required) The text to be used for the menu.
    *
    *capability
    *(string) (Required) The capability required for this menu to be displayed to the user.
    *
    *menu_slug
    *(string) (Required) The slug name to refer to this menu by. Should be unique for this menu page and only include lowercase alphanumeric, dashes, and underscores characters to be compatible with sanitize_key().
    *
    *function
    *(callable) (Optional) The function to be called to output the content for this page.
    *
    *Default value: ''
    *
    *icon_url
    *(string) (Optional) The URL to the icon to be used for this menu.
    *
    *Pass a base64-encoded SVG using a data URI, which will be colored to match the color scheme. This should begin with 'data:image/svg+xml;base64,'.
    *Pass the name of a Dashicons helper class to use a font icon, e.g. 'dashicons-chart-pie'.
    *Pass 'none' to leave div.wp-menu-image empty so an icon can be added via CSS.
    *Default value: ''
    *
    *$position
    *(int) (Optional) The position in the menu order this item should appear.
    *
    *Default value: null 
    */

}

add_action('admin_menu', 'stripe_forms_gutemberg_menu');

//Función para registrar las opciones
function stripe_forms_gutemberg_settings()
{
    register_setting('stripe_forms_gutemberg_settings_group', 'stripe_forms_gutemberg_api_secret');
    register_setting('stripe_forms_gutemberg_settings_group', 'stripe_forms_gutemberg_api_public');
}

add_action('admin_init', 'stripe_forms_gutemberg_settings');

//Función para registrar el bloque en gutemberg

function gutemberg_stripe_forms_register_block()
{
    wp_register_script( 
        'stripe-forms',
        plugins_url('stripe-block.js', __FILE__),
        array('wp-blocks', 'wp-element', 'wp-i18n'),
        filemtime(plugin_dir_path( __FILE__ ).'stripe-block.js')
    );

    register_block_type('gutemberg-dhren/stripe-forms', array(

        'editor_script' => 'stripe-forms'
    ) );
}

add_action('init', 'gutemberg_stripe_forms_register_block');

