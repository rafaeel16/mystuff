<?php
    $queryCategoria = array_key_exists('categoria', $_GET);
    if($queryCategoria && $_GET['categoria'] === ''){
        wp_redirect(home_url().'/noticia');
        exit;
    }
    get_header();
?>
<?php
    if($queryCategoria) {
        $taxQuery = array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $_GET['categoria']
                )
        );
    }
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'noticia',
        'tax_query' => $taxQuery,
        'paged' => $paged,
    );

    $loop = new WP_Query($args);
    if($loop->have_posts()) {
        $categorias = get_terms('category'); ?>

<div class="container list-noticias">
    <div class="row">
        <div class="col-sm-8 list-noticias-article">
            <h1>Notícias</h1>

            <!--Laço do conteúdo-->
            <?php while($loop->have_posts() ) : $loop->the_post(); ?>
            <?php get_template_part('content-archive-noticia'); ?>
            <?php endwhile;?>
            <!--Laço do conteúdo-->

            <?php
                echo paginate_links(
                    array(
                        'total' => $loop->max_num_pages
                    )
                );
            }?>
        </div>
        <div class="col-sm-4">
        <h1>Categoria</h1>
        <nav class="list-group">
            <a href="?categoria=" class="list-group-item"><i class="fa fa-angle-right" aria-hidden="true"></i>Todas</a>
            <?php foreach($categorias as $categoria){?>
                <a href="?categoria=<?=$categoria->slug;?>" class="list-group-item"><i class="fa fa-angle-right" aria-hidden="true"></i> <?=$categoria->name;?></a>
            <?php }?>
        </nav>
        </div>
        <?php get_template_part( 'sidebar' ); ?>
  </div>
</div>
<?php get_footer(); ?>
