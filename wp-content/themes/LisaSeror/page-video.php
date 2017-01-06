<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php $loop = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => '' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-lg-6 videoA">
                <?php var_dump( get_post_meta($post->ID, 'lien_youtube', true));?>
                <?php
                    if(get_post_meta($post->ID, 'hebergeur_de_la_video', true) == 'Youtube'){
                        ?>
                        <iframe width="560" height="315" src="<? echo get_post_meta($post->ID, 'lien_youtube', true)?>" frameborder="0" allowfullscreen></iframe>
                        <?php

                    }elseif(get_post_meta($post->ID, 'hebergeur_de_la_video', true) == 'DailyMotion"'){
                        ?>
                        <?php var_dump(get_post_meta($post->ID, 'lien_dailymotion', true)); ?>
                        <iframe frameborder="0" width="480" height="270" src="<?php echo get_post_meta($post->ID, 'lien_dailymotion', true)?>" allowfullscreen></iframe>
                        <?php

                    }else{
                        ?>
                        <iframe src="<?php  echo get_post_meta($post->ID, 'lien_vimeo', true) ?>" width="640" height="267" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <?php

                    }

                ?>



                <div class="text">
                    <h2><?php the_title()?></h2>
                    <p><?php the_content()?></p>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?><div class="fleche">
            <button type="button" class="btn btn-default" aria-label="Left Align">
                <img src="img/fleche.png">
            </button>
        </div>


    </div>
</div>
