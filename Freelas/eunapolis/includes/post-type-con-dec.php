<?php
//Este é o registro do posttype concursos ou decretos
//para diferênciar um concurso de um decreto uma 
//taxonomia de decreto ou concurso
function custom_post_con_dec(){
    $nome_singular = 'Concurso ou Decreto';
    $nome_plural = 'Concursos ou Decretos';

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
            'not_found' =>  __('Nenhum concurso ou decreto foi encontrado'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Não existem item na lixeira'), /* This displays if there is nothing in the trash */
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
            'menu_icon' => 'dashicons-analytics',
            //'taxonomies' => array('tax-concurso-decreto'),
            'rewrite' => array('slug' => 'concurso-decreto', 'with_front' => false),
            'has_archive' => true,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title')
        );

    register_post_type('concurso-decreto', $args);
}

function taxonomia_concurso_decreto(){
    $nome_singular = 'Classificação';
    $nome_plural = 'Classificações';

    $labels = array(
		'name' => $nome_plural,
		'singular_name' => $nome_singular,
		'view_item' => 'Ver ' . $nome_singular,
		'edit_item' => 'Editar ' . $nome_singular,
		'new_item' => 'Novo ' . $nome_singular,
		'add_new_item' => 'Adicionar novo ' . $nome_singular
		);

	$args = array(
		'labels' => $labels,
		'public' => true
		//'hierarchical' => true
		);

	register_taxonomy('tax-concurso-decreto', 'concurso-decreto', $args);
}
function eunapolis_arquivo_concurso_decreto($meta_boxes){ 
    $prefix = 'con_dec_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'arquivo-con-dec',
        'title'      => __( 'Arquivo Concurso ou Decreto', 'textdomain' ),
        'post_types' => array('concurso-decreto'),
        'context'    => 'normal',
        'priority'   => 'high',        
        'fields' => array(
            array(
                'name'  => __( 'Arquivo Concurso ou Decreto', 'textdomain' ),
                'desc'  => 'Arquivo do concurso ou decreto',
                'id'    => $prefix . 'arquivo',
                'type'  => 'file',                
                'max_file_uploads' => 1,  
                'force_delete' => true,
                'std'   => '',
                'class' => 'arquivo',
            ),
        )
    );

    return $meta_boxes;
}

add_action('init', 'custom_post_con_dec');
add_action('init', 'taxonomia_concurso_decreto');
///Meta box arquivo
add_filter('rwmb_meta_boxes', 'eunapolis_arquivo_concurso_decreto');