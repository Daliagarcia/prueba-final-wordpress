<?php

// Register Custom Post Type
function project_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Project', 'text_domain' ),
		'archives'              => __( 'Archivos de project', 'text_domain' ),
		'attributes'            => __( 'Atributos del project', 'text_domain' ),
		'parent_item_colon'     => __( 'Project principal', 'text_domain' ),
		'all_items'             => __( 'Todos los project', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo project', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo project', 'text_domain' ),
		'edit_item'             => __( 'Editar project', 'text_domain' ),
		'update_item'           => __( 'Actualizar project', 'text_domain' ),
		'view_item'             => __( 'Ver project', 'text_domain' ),
		'view_items'            => __( 'Ver projects', 'text_domain' ),
		'search_items'          => __( 'Buscar project', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el project', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este project', 'text_domain' ),
		'items_list'            => __( 'Lista de projects', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegacion de projects', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de projects', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'text_domain' ),
		'description'           => __( 'Post dedicado a proyectos web', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'project_post_type', 0 );

 ?>
