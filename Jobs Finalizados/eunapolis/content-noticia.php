<div class="noticia-desc">

			<div class="row-noticia">
                <?php
                    $noticia_meta_data = get_post_meta($post->ID);
                    $categorias = wp_get_post_terms($post->ID, 'category')
                 ?>
                 <h2><?php the_title();?></h2>
                 <?php foreach( $categorias as $categoria){?>
                    <span class="span-categoria"><a href="/noticia/?categoria=<?=$categoria->slug?>"><?=$categoria->name?></a></span>
				 <?php }?>

                <h3><?= esc_attr($noticia_meta_data['noticia_subtitulo'][0] );?></h3>
				<small class="row-evento-small"><?php the_date();?></small>
			</div>

			<div class="post-int">
				<?php the_content(); ?>
			</div>

		</div>
