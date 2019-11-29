<?php

// Register Custom Post Type
function service_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Services', 'text_domain' ),
		'name_admin_bar'        => __( 'Service', 'text_domain' ),
		'archives'              => __( 'Archivos de service', 'text_domain' ),
		'attributes'            => __( 'Atributos de service', 'text_domain' ),
		'parent_item_colon'     => __( 'Service principal', 'text_domain' ),
		'all_items'             => __( 'Todos los service', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo service', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo service', 'text_domain' ),
		'edit_item'             => __( 'Editar service', 'text_domain' ),
		'update_item'           => __( 'Actualizar service', 'text_domain' ),
		'view_item'             => __( 'Ver service', 'text_domain' ),
		'view_items'            => __( 'Ver services', 'text_domain' ),
		'search_items'          => __( 'Buscar service', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el service', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este service', 'text_domain' ),
		'items_list'            => __( 'Lista de services', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegacion de services', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de services', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'text_domain' ),
		'description'           => __( 'Post dedicado a diferentes tipos de servicios', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'service_post_type', 0 );

?>
