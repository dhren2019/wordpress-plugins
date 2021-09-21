<?php
/*
*Plugin Name: Shortcode plugin
*Plugin URI: https://Goraiko.es
*Description: Este es un plugin desarrollado por Dhren shortcode.
*Version: 1.0
*Author: Dhren
*Author URI: https://Goraiko.es
*License: GLP 2+
*/

//Shortcode simple
function dn_shortcode() {
 return ( 
    <div class="columns">
    <ul class="price">
   <li class="header">Basic</li>
   <li class="grey">$ 9.99 / year</li>
   <li>10GB Storage</li>
   <li>10 Emails</li>
   <li>10 Domains</li>
   <li>1GB Bandwidth</li>
   <li class="grey"><a href="#" class="button">Sign Up</a></li>
 </ul>
</div>
);

}
//? Para que se vea el shortcode se debe poner [table-price] donde queramos mostrarlo
add_action( 'table-price', 'dn_shortcode' );


//Shortcode con atributos
function dn_shortcode_atrb() {
    extract( shortcode_atts( 

        array (
            'nombre'=> '',
            'apellido'=> ''
        ), $atributos
    );

    return('Hola soy', $nombre $apellido)

    )
   
   }

   add_action( 'shortcode-atrib', 'dn_shortcode_atrb' );