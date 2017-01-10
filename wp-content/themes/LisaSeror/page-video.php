<?php get_header(); ?>
<?php $count = 0 ?>
<?php $rowcount = 0 ?>
<div class="container" style="margin-top: 2%!important;"  xmlns="http://www.w3.org/1999/html" >
    <?php $loop = new WP_Query(array('post_type' => 'videos')); ?>
    <?php while ($loop->have_posts()): $loop->the_post(); ?>

        <?php if ($count % 2 == 0) {
            echo '<div class="row" onclick="' . $rowcount . '" id="row_' . $rowcount . '"style="margin: 0!important;" >';
            $rowcount = $rowcount + 1;
        } ?>

        <div class="col-lg-6 videoA">
            <?php
            if (get_post_meta($post->ID, 'hebergeur_de_la_video', true) == 'Youtube') {
                $lien_youtube = get_post_meta($post->ID, 'lien_youtube', true);
                $lien_youtube = str_replace('https://www.youtube.com/watch?v=', "", $lien_youtube)
                ?>
                <iframe width="100%" height="300" src="<? echo 'https://www.youtube.com/embed/' . $lien_youtube ?>"
                        frameborder="0" allowfullscreen></iframe>
                <?php

            } elseif (get_post_meta($post->ID, 'hebergeur_de_la_video', true) == 'DailyMotion') {
                $lien_daily = get_post_meta($post->ID, 'lien_dailymotion', true);
                $lien_daily = str_replace('http://www.dailymotion.com/video/', '', $lien_daily);
                $lien_daily = preg_replace('/ _.*/', '', $lien_daily);

                ?>

                <iframe frameborder="0" width="100%" height="300"
                        src="//www.dailymotion.com/embed/video/<?php echo $lien_daily ?>" allowfullscreen></iframe>
                <?php

            } else {
                $lien_vimeo = get_post_meta($post->ID, 'lien_vimeo', true);
                $lien_vimeo = str_replace('https://vimeo.com/', "", $lien_vimeo)
                ?>
                <iframe
                    src="https://player.vimeo.com/video/<?php echo $lien_vimeo ?>?color=9c00f0&title=0&byline=0&portrait=0"
                    width="100%" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen
                    allowfullscreen></iframe>
                <?php

            }

            ?>

            <div class="text">
                <h2><?php the_title() ?></h2>
                <p><?php the_content() ?></p>
            </div>
        </div>
        <?php if ($count % 2 != 0 OR $count + 1 == count($loop->posts)) {
            echo '</div>';
        } ?>
        <?php $count = $count + 1; ?>
    <?php endwhile;
    wp_reset_query(); ?>
    <div class="fleche" style="margin-top: 2%;!important;" onclick="next()">
        <img class="fleche-vid img-center center center-block text-center animate animate-bounce animate-loop" style="border: solid 1px #000000; border-radius:50%; padding: 1%; cursor: pointer; margin: auto;" src="<?php echo get_template_directory_uri() ?>/img/fleche.png"/>
    </div>
</div>
</div>

<?php get_footer(); ?>
<script>
    var curentRow = 0;
    var nextRow = 1;

    function init() {
        for (var i = 0; i < <?= $rowcount?>; i++) {
            if (i != 0) {
                $('#row_' + i).hide();
            }
        }
    }
    init();
    function next() {
        $('#row_' + nextRow).fadeIn();
        $('#row_' + curentRow).slideUp();
        curentRow++;
        nextRow++;
        console.log(curentRow + 1);
    }

</script>