<?php
function galeria_de_cinco_noticias(){
    $args = array(
        'post_type' => 'noticia',
        'posts_per_page' => 5
    );
    $query = new WP_Query($args);
    $html_output = "";
    if($query->have_posts()){
        while($query->have_posts()){
            $query->the_post();
            $index = $query->current_post;
            $title = get_the_title();
            $subtitle = '';
            $thumbnail = get_the_post_thumbnail_url();
            $link = get_permalink();            
            if($index == 0){
            $html_output = '
                <div class="col-md-6 noticias-left">
                    <a href="'.$link.'">
                        <figure>
                            <img class="img-responsive" src="'.$thumbnail.'" alt="" />
                            <figcaption>
                                <h1>'.$title.'</h1>
                                <p>'.$subtitle.'</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-6 noticias-container-right">
                    @1
                    @2
                    @3
                    @4
                </div>';
            }
            else{
                $mini_noticia = '
                <div class="col-md-6 noticias-mini">
                    <a href="'.$link.'">
                        <figure>
                            <img class="img-responsive" src="'.$thumbnail.'" alt="" />
                            <figcaption>
                                <h1>'.$title.'</h1>
                                <p>'.$subtitle.'</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>';                                
                $html_output = str_replace("@$index", $mini_noticia, $html_output);                
            }
        }
    }        
    return $html_output;
}
?>