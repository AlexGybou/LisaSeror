<?php get_header(); ?>
Bonjour
<?php $loop = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => '10' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?php the_title() ?></h1>
            </div>
            <div class="col-md-6">
                <?php the_content() ?>
            </div>
        </div>
    </div>
<?php endwhile; wp_reset_query(); ?>
