<?php get_header(); ?>
    <main class="container">
        <div class="row page-php">
            <h1><?php the_title();?></h1>

                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            ?>
                <article class="col-sm-8">
                    <?php the_content();?>
                </article>
                <?php }
                    }?>
            <?php get_template_part( 'sidebar' ); ?>
        </div>
    </main>
<?php get_footer(); ?>
