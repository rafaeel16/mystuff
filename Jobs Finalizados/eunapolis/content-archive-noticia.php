<article class="panel">
    <?php
        $noticia_meta_data = get_post_meta($post->ID);
        $categorias = wp_get_post_terms($post->ID, 'category')
    ?>
    <?php foreach( $categorias as $categoria) : ?>
        <a class="btn btn-info categoria-noticias" href="/noticia/?categoria=<?=$categoria->slug?>"><?=$categoria->name?></a>
    <?php endforeach;?>

    <small class="row-evento-small"><?php the_date(); ?></small>
    <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
    <p><?= esc_attr($noticia_meta_data['noticia_subtitulo'][0] );?></p>
    <!-- <p><?= esc_attr($noticia_meta_data['con_dec_arquivo'][0] );?></p> -->
    <!-- <div class="panel-image"><?the_post_thumbnail();?></div> -->
    <!-- <a href="<?php the_permalink();?>"><button type="button" class="btn btn-info">Leia mais</button></a> -->
</article>
