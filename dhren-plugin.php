<?php
/*
*Plugin Name: Mi primer plugin
*Plugin URI: https://Goraiko.es
*Description: Este es un plugin desarrollado por Dhren para Wordpress
*Version: 0.01
*Author: Dhren
*Author URI: https://Goraiko.es
*License: GLP 2+
*/

//Dn son mis iniciales para que no coincida  con otra funcion igual
//wp_head -> Es donde se situara la frase

add_action('wp_head', 'dn_muestra_frase' );

function dn_muestra_frase() {
    echo '<h2>Hola Dhren</h2>';
    
}