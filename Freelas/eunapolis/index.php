<?php get_header(); ?>
<?php $home = get_template_directory_uri(); ?>

<?php get_template_part('index-noticias'); ?>

<!-- CONTEUDO HOME -->
<div class="container conteudo-home">
    <div class="col-md-8">
        <!-- BANNER -->
        <div class="banner">
            <aside class=""> BANNER</aside>
        </div>
        
        <!-- Galeria -->
        <div class="row">
            <div class="home-galeria">
                <div class="titulo-galeria">
                <h3>EUNÁPOLIS POR IMAGENS</h3>
                <a href="galeria">VEJA TODOS OS ÁLBUNS</a>
                </div>

                <div class="row">
                    <?php echo wdi_feed(array('id'=>'2')); ?>
                </div>              
                
            </div>
        </div>
        
        <!-- LINKS -->
        <?php get_template_part('concursos-decretos-index'); ?>
        <!--Mais notícias-->
        <div class="links-noticias">
            <div class="titulo-links">
                <h4>MAIS NOTÍCIAS</h4>
            </div>
            <?php 
                $args = array(
                    'post_type' => 'noticia',
                    'numberposts' => 4,
                    'offset' => 5
                );
                $noticias = new WP_Query($args);
                if($noticias->have_posts()) :
                    while($noticias->have_posts()) : $noticias->the_post();
                        get_template_part('content-archive-noticia');
                    endwhile;
                endif;
            ?>            
            <a href="noticia" class="maisnoticias">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> MAIS NOTÍCIAS
            </a>
        </div>
    </div> <!-- COL-MD-8 -->
    <!-- SIDEBAR -->
    <?php get_template_part( 'sidebar' ); ?>
</div>

<?php get_footer(); ?>