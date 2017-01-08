<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php $loop = new WP_Query( array( 'post_type' => 'oeuvres', 'posts_per_page' => '10' ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="col-md-6">
				<h1><?php the_title() ?></h1>
				<img src="<?php echo get_field('oeuvre')['url']; ?>" alt="<?php echo get_field('oeuvre')['alt']; ?>" />
				<?php the_content() ?>
			</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>
</div>

<?php get_footer(); ?>