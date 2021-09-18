<?php
/*
*Plugin Name: Taxonomy Plugin
*Plugin URI: https://Goraiko.es
*Description: Este es un plugin desarrollado por Dhren para Wordpress para taxonomy custom post types.
*Version: 1.0
*Author: Dhren
*Author URI: https://Goraiko.es
*License: GLP 2+
*/

function dn_crear_cpt_libro () {

	$labels = array(
		'name'                  => _x( 'Libros', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Libro', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Libros', 'text_domain' ),
		'name_admin_bar'        => __( 'Libros', 'text_domain' ),
		'archives'              => __( 'Libro Archivos', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos los libros', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo libro', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo libro', 'text_domain' ),
		'edit_item'             => __( 'Editar libro', 'text_domain' ),
		'update_item'           => __( 'Actualizar libro', 'text_domain' ),
		'view_item'             => __( 'Ver libro', 'text_domain' ),
		'view_items'            => __( 'Ver libros', 'text_domain' ),
		'search_items'          => __( 'buscar libro', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Libro', 'text_domain' ),
		'description'           => __( 'Custom post type libros', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'Titulo', 'editor' ),
		'taxonomies'            => array( 'Tipologias', 'post_tag' ),
		'hierarchical'          => true,//Sean taxonomies gerargicas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'dn_crear_cpt_libro ', 0 );