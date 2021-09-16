<?php
/*
*Plugin Name: Mi Segundo plugin
*Plugin URI: https://Goraiko.es
*Description: Este es un plugin desarrollado por Dhren para Wordpress
*Version: 0.01
*Author: Dhren
*Author URI: https://Goraiko.es
*License: GLP 2+
*/

//* Filter DDBB read 
add_filter( 'the_title', 'dn_modificar_titulo');

function dn_modificar_titulo($titulo){

    // * Si esta en la categoria sin categoria por ej(slug) mostrar Importante delante del titulo de la entrada
    if (in_category('sin-categoria')) {

        $titulo = 'Importante:' .$titulo;
        
        return $titulo;
    }

}

//* Write DDBB , el contenido sustituya hola por adiós

add_filter('content_save_pre', 'dn_modificar_contenido');

function dn_modificar_contenido($contenido){
    $contenido = str_replace("hola", "adiós", $contenido);
    return $contenido;
}
