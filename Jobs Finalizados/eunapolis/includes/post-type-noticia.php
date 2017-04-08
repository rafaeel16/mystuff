<?php

function custom_post_noticia() {
    $nome_singular = 'Notícia';
    $nome_plural = 'Notícias';
    $labels = array(
            'name' => __($nome_singular, 'post type general name'), /* This is the Title of the Group */
            'singular_name' => __($nome_singular, 'post type singular name'), /* This is the individual type */
            'add_new' => __('Adicionar '.$nome_singular, 'custom post type item'), /* The add new menu item */
            'add_new_item' => __('Adicionar '.$nome_singular), /* Add New Display Title */
            'edit' => __( 'Editar' ), /* Edit Dialog */
            'edit_item' => __('Editar'), /* Edit Display Title */
            'new_item' => __('Nova '.$nome_singular), /* New Display Title */
            'view_item' => __('Visualizar '.$nome_singular), /* View Display Title */
            'search_items' => __('Localizar '.$nome_singular), /* Search Custom Type Title */
            'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
        );
    $args = array('labels' => $labels, /* end of arrays */
            'description' => __( 'Cadastro de '.$nome_plural ), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,            
            'capability_type' => 'post',
            'hierarchical' => false,
            'taxonomies' => array('category'),
            'menu_icon' => 'dashicons-format-aside',
            'rewrite' => array('slug' => 'noticia', 'with_front' => true ),
            'has_archive' => true,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'thumbnail')
        );

    register_post_type( 'noticia', $args);
}

add_action('init', 'custom_post_noticia');


add_filter('rwmb_meta_boxes', 'eunapolis_noticia_register_meta_boxes');
function eunapolis_noticia_register_meta_boxes($meta_boxes){ 
    $prefix = 'noticia_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'informacoes-noticias',
        'title'      => __( 'Informações das Notícias', 'textdomain' ),
        'post_types' => array('noticia'),
        'context'    => 'normal',
        'priority'   => 'high',
        'attributes' => array(
            'required' => true
        ),
        'fields' => array(
            array(
                'name'  => __( 'Subtítulo da Notícia', 'textdomain' ),
                'desc'  => 'Subtítulo',
                'id'    => $prefix . 'subtitulo',
                'type'  => 'textarea',                
                'std'   => '',
                'class' => 'noticia-subtitulo',
            ),
        )
    );

    return $meta_boxes;
}