<?php

add_theme_support('post-thumbnails');

require_once('includes/galeria-de-cinco-noticias.php');

//Post Type Notícia
require_once('includes/post-type-noticia.php');
//Post Type Concursos e Decretos
require_once('includes/post-type-con-dec.php');
//Menu Principal
function registrar_menu_principal(){
    register_nav_menu('menu-principal','Menu Principal');
}
add_action('init', 'registrar_menu_principal');
require_once('includes/menu-principal-walker.php');

function wpsites_before_post_widget( $content ) {
	if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'before-post' ) && is_main_query() ) {
		dynamic_sidebar('before-post');
	}
	return $content;
}
add_filter( 'the_content', 'wpsites_before_post_widget' );