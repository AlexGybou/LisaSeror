<?php get_header(); ?>	<div class="container">
<div class="row">
	<?php $loop = new WP_Query( array( 'post_type' => 'evenements', 'posts_per_page' => '10' ) ); ?>
	<?php if ( $loop->have_posts() ) :
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<?php 
		$title = get_the_title();
		$content = get_the_content();
		$affiche = get_field('affiche_exposition');
		$galerie = get_field('image_galerie');
		$map = get_field('adresse_exposition');
		?>


		<div class="col-md-6">
<img src="<?php echo $affiche['url']; ?>">
			<!-- <?php if ($affiche): ?> -->

				<img src="<?php echo $galerie['url']; ?>">

			<!-- <?php else: ?>

				<?php echo "<pre>";
				var_dump($map);
				echo "</pre>"; ?>
				<img src="<?php echo $map; ?>">

			<?php endif ?> -->

			<h2><?php echo $title; ?></h2>
			<p><?php echo $content; ?></p>



		</div>
	<?php endwhile; wp_reset_postdata(); endif; wp_reset_query(); ?></div>

</div>