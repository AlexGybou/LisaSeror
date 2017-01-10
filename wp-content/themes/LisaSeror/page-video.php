<?php get_header(); ?>
<?php  $page = get_query_var( 'page', 1 );  ?>
<?  if() ?>


<div class="container">
    <div class="row">
        <?php $loop = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => '2' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-lg-6 videoA">
                <?php
                    if(get_post_meta($post->ID, 'hebergeur_de_la_video', true) == 'Youtube'){
                        $lien_youtube =  get_post_meta($post->ID, 'lien_youtube', true);
                        $lien_youtube = str_replace('https://www.youtube.com/watch?v=',"", $lien_youtube )
                        ?>
                        <iframe width="100%" height="300" src="<? echo 'https://www.youtube.com/embed/'.$lien_youtube?>" frameborder="0" allowfullscreen></iframe>
                        <?php

                    }elseif(get_post_meta($post->ID, 'hebergeur_de_la_video', true) == 'DailyMotion'){
                        $lien_daily = get_post_meta($post->ID, 'lien_dailymotion', true);
                        $lien_daily = str_replace('http://www.dailymotion.com/video/', '', $lien_daily);
                        $lien_daily = preg_replace('/ _.*/', '', $lien_daily);

                        ?>

                        <iframe frameborder="0" width="100%" height="300" src="//www.dailymotion.com/embed/video/<?php echo $lien_daily ?>" allowfullscreen></iframe>
                           <?php

                    }else{
                        $lien_vimeo =  get_post_meta($post->ID, 'lien_vimeo', true);
                        $lien_vimeo = str_replace('https://vimeo.com/',"", $lien_vimeo )
                        ?>
                        <iframe src="https://player.vimeo.com/video/<?php echo $lien_vimeo?>?color=9c00f0&title=0&byline=0&portrait=0" width="100%" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
                <img src="<?php echo get_template_directory_uri()?>/img/fleche.png">
            </button>
        </div>
    </div>
</div>
