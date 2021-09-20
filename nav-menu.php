<?php
/*
*Plugin Name: Mi Segundo plugin
*Plugin URI: https://Goraiko.es
*Description: Este es un plugin desarrollado por Dhren para Wordpress para ubicaciones de menu.
*Version: 0.01
*Author: Dhren
*Author URI: https://Goraiko.es
*License: GLP 2+
*/

//? https://developer.wordpress.org/reference/functions/register_nav_menu/

function dn_menu_footer() {
    
    $informacion = array {
        'menu_pie' => 'Este menu se mostrara en el pie de pagina '
    };
    
    //Crear la ubicacion en el menu
    register_nav_menu( $informacion ,  );
    
};

add_action('init', 'dn_menu_footer');

function dn_mostrar_menu() {

    //? Abria que colocar desde opciones hasta wp_nav_menu dentro de footer.php o menu o donde se quiera mostrar el menu.
    $opciones = array { 
        'theme_location' => 'ubicacion del pie'
    };
    //Mostrar menu
    wp_nav_menu( $opciones )
};

add_action('wp-footer', 'dn_mostrar_menu');

