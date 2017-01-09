<?php get_header(); ?>	<div class="container">
<div class="row">
	<?php $loop = new WP_Query( array( 'post_type' => 'evenement', 'posts_per_page' => '10' ) ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<?php
		$image = get_field('image_galerie');
		$map = get_field('adresse_exposition');
		?>

		<div class="col-md-12">
			<?php the_field('affiche_exposition') ?>
			<?php if (!empty($image)): ?>
				<?php the_field('image_galerie') ?>

			<?php else: ?>
				<?php the_field('adresse exposition') ?>

			<?php endif ?>

			<h1><?php the_title() ?></h1>
			<?php the_content() ?>
			


		</div>
	<?php endwhile; wp_reset_query(); ?></div>

</div>