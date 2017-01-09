<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php $loop = new WP_Query( array( 'post_type' => 'oeuvres', 'posts_per_page' => '10' ) ); $i = 0; ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php if($i < 2) { ?>
			<div class="col-xs-12">
				<div class="test-oeuvres">
					<a href="#">
						<img class="img-responsive padding-oeuvres" src="<?php echo get_field('oeuvre')['url']; ?>" alt="<?php echo get_field('oeuvre')['alt']; ?>" />
					</a>
				</div>
			</div>
			<?php } else { ?>
			<div class="col-md-6">
				<div class="test-oeuvres">
					<a href="#">
						<img class="img-responsive padding-oeuvres" src="<?php echo get_field('oeuvre')['url']; ?>" alt="<?php echo get_field('oeuvre')['alt']; ?>" />
					</a>
				</div>
				<!--<h1><?php /*the_title() */?></h1>-->

			</div>
			<?php } $i = $i+1; ?>
		<?php endwhile; wp_reset_query(); ?>
	</div>
</div>

<?php get_footer(); ?>