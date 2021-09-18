<?php
/*
*Plugin Name: Widget Area Plugin
*Plugin URI: https://Goraiko.es
*Description: Este es un plugin desarrollado por Dhren para Wordpress para creacion de una nueva widget area.
*Version: 1.0
*Author: Dhren
*Author URI: https://Goraiko.es
*License: GLP 2+
*/

//* Crear la función que creará una nueva wa
function dn_nuevo_wa(){

    $opciones = array (

        'id'           => 'dn_widget_area',
        'name'         => 'Dhren Area',
        'description'  => 'Esta es la nueva área que acabo de crear'
    );
    register_sidebar($opciones);


}

//? Cuando debe ejecutar la nueva funcion
add_action('widgets_init', 'dn_nuevo_wa') ;
