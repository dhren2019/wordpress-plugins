<?php
/*
*Plugin Name: Mi tercer plugin
*Plugin URI: https://Goraiko.es
*Description: Este es un plugin desarrollado por Dhren para Wordpress para funcionamiento custom post types.
*Version: 0.02
*Author: Dhren
*Author URI: https://Goraiko.es
*License: GLP 2+
*/

//* Public true permite ver el post type en el menú
//* https://codex.wordpress.org/Function_Reference/register_post_type

 function dn_crear_cpt_libro () {

    $opciones  = array (
        'public'              => true,
        'label'               => 'Libros',
        'exclude_from_search' => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons_book',
        //'has_archive'         => true

    );

     register_post_type( 'libro', $opciones );
 }

//* Init es cuando la acción va a empezar.
 add_action('init', 'dn_crear_cpt_libro');