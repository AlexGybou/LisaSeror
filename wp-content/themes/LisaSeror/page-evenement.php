<?php get_header(); ?>	<div class="container">
<div class="row">
	<?php $loop = new WP_Query( array( 'post_type' => 'evenements', 'posts_per_page' => '10' ) ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="col-md-6">	<?php the_post_thumbnail('thumbnail'); ?>
			<h1><?php the_title() ?></h1>
			<?php the_content() ?>



		</div>
	<?php endwhile; wp_reset_query(); ?></div>

</div>