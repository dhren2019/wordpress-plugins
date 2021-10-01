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

}

add_action('admin_menu', 'stripe_forms_gutemberg_menu');

//Función para registrar las opciones
function stripe_forms_gutemberg_settings()
{
    register_setting('stripe_forms_gutemberg_settings_group', 'stripe_forms_gutemberg_api_secret');
    register_setting('stripe_forms_gutemberg_settings_group', 'stripe_forms_gutemberg_api_public');
}

add_action('admin_init', 'stripe_forms_gutemberg_settings');
