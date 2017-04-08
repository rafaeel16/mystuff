<?php get_header(); ?>
<?php $home = get_template_directory_uri(); ?>
<main class="container">
    <div class="row">

        <article class="col-sm-8 single-noticia">
            <?php
            if(have_posts()):
                while(have_posts()) : the_post();
            ?>        
            <?php get_template_part('content-noticia'); ?>
            <?php endwhile;?>
            <?php endif;?>

            <div class="btn-voltar">
                <a href="<?=home_url();?>/noticia"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Voltar</a>
            </div>
        </article>
        <?php get_template_part( 'sidebar' ); ?>
    </div>
</main>
<?php get_footer(); ?>
