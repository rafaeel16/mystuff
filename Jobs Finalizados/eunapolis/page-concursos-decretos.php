<?php
    $queryClass = array_key_exists('classificacao', $_GET);
    if($queryClass && $_GET['classificacao'] === ''){
        wp_redirect(home_url().'/concursos-decretos');
        exit;
    }
    $classificacoes = get_terms('tax-concurso-decreto');
    get_header(); 
?>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <?php
                if($queryClass) {
                    $taxQuery = array(
                        array(
                            'taxonomy' => 'tax-concurso-decreto',
                            'field' => 'slug',
                            'terms' => $_GET['classificacao']
                        )
                    );
                }
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'concurso-decreto',
                    'tax_query' => $taxQuery,
                    'posts_per_page' => 10,
                    'paged' => $paged,
                );
                $loop = new WP_Query($args);
                if($loop->have_posts()): 
                    $descricao = 'CONCURSOS E DECRETOS';                    
                    if($queryClass){
                        $descricao = strtoupper($_GET['classificacao']);
                    }                    

                    echo "
                        <h1>$descricao</h1>
                        <div class='list-group'>
                    ";
                                        
                    while($loop->have_posts()) : $loop->the_post();                    
                        $con_dec_meta_data = get_post_meta($post->ID);
                        $idAnexo = esc_attr($con_dec_meta_data['con_dec_arquivo'][0]);
                        $caminhoArquivo = wp_get_attachment_url($idAnexo);
            ?>           
                
                    <a href="<?=$caminhoArquivo?>" class="list-group-item">
                        <h4 class="list-group-item-heading"><?php the_title();?></h4>
                        <small class="row-evento-small"><?php the_date(); ?></small>
                    </a>                                                                   
                <?php endwhile;
                    echo '</div>';  ?>
                
                
            <?php 
                echo paginate_links(
                    array(
                        'total' => $loop->max_num_pages
                    )
                );
            endif;?>
        </div>        
        <div class="col-sm-4">
            <h1>Concursos e Decretos</h1>
            <nav class="list-group">
                <a href="?classificacao=" class="list-group-item"><i class="fa fa-angle-right" aria-hidden="true"></i>Todos</a>
                <?php foreach($classificacoes as $classificacao){?>
                    <a href="?classificacao=<?=$classificacao->slug;?>" class="list-group-item"><i class="fa fa-angle-right" aria-hidden="true"></i> <?=$classificacao->name;?></a>
                <?php }?>
            </nav>
        </div>
        <div class="row">
            <div class="col-sm-8"></div>
        
            <?php get_template_part( 'sidebar' );?>            
        </div>
    </div>    
</div>

<?php get_footer(); ?>