<?php
    $class_concurso = array(
        array(
            'taxonomy' => 'tax-concurso-decreto',
            'field' => 'slug',
            'terms' => 'concursos'
        )
    );

    $class_decreto = array(
        array(
            'taxonomy' => 'tax-concurso-decreto',
            'field' => 'slug',
            'terms' => 'decretos'
        )
    );

    $concursos_args = array(
        'post_type' => 'concurso-decreto',
        'tax_query' => $class_concurso,
        'posts_per_page' => 4
    );

    $decretos_args = array(
        'post_type' => 'concurso-decreto',
        'tax_query' => $class_decreto,
        'posts_per_page' => 4
    );

?>

<div class="links">
    <div class="titulo-links">
    <h4><strong>LINKS</strong> INFORMAÇÕES E SERVIÇOS</h4>
</div>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#concursos">CONCURSO</a></li>
    <li><a data-toggle="tab" href="#decretos">DECRETOS</a></li>
</ul>
<div class="tab-content">
    <div id="concursos" class="tab-pane fade in active">
        <h4>CONCURSOS</h4>
        <?php
            $concursos = new WP_Query($concursos_args);
            if($concursos->have_posts()):
                while($concursos->have_posts()) : $concursos->the_post();
                    $con_dec_meta_data = get_post_meta($post->ID);
                    $idAnexo = esc_attr($con_dec_meta_data['con_dec_arquivo'][0]);
                    $caminhoArquivo = wp_get_attachment_url($idAnexo);
        ?>
                <a href="<?=$caminhoArquivo?>"><?php the_title();?></a>
                <?php endwhile;?>
            <?php endif;?>
        <div>
          <a href="<?=home_url()?>/concursos-decretos/?classificacao=concursos" class="maisnoticias">
               <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> MAIS CONCURSOS
           </a>
        </div>
    </div>
    <div id="decretos" class="tab-pane fade">
        <h4>DECRETOS</h4>
        <?php
            $decretos = new WP_Query($decretos_args);
            if($decretos->have_posts()):
                while($decretos->have_posts()) : $decretos->the_post();
                    $con_dec_meta_data = get_post_meta($post->ID);
                    $idAnexo = esc_attr($con_dec_meta_data['con_dec_arquivo'][0]);
                    $caminhoArquivo = wp_get_attachment_url($idAnexo);
        ?>
                <a href="<?=$caminhoArquivo?>"><?php the_title();?></a>
                <?php endwhile;?>
            <?php endif;?>

            <div>
              <a href="<?=home_url()?>/concursos-decretos/?classificacao=decretos" class="maisnoticias">
                   <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> MAIS DECRETOS
               </a>
            </div>
    </div>
</div>
</div>
