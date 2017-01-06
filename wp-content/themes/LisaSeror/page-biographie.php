<?php get_header(); ?>




<div class="container">

	<div class="row bio">

		<div class="col-md-4">
			<?php the_post_thumbnail('large', array( 'class' => 'img-responsive' )); ?>
			
			
		</div>

		<div class="col-md-1"></div>
		<div class="bio-lisa">
			<?php while ( have_posts() ) : the_post(); ?> 
				<?php the_content(); ?> <!-- Page Content -->
				<?php
				endwhile; ?>


				<div>
					<h2> <?php the_field('titre2'); ?> </h2>
					<div class="univers">
						<?php the_field('contenu2'); ?>
					</div>
				</div>
			</div>
			<div class="row">

			</div>
		</div>
	</div>
</body>

<?php get_footer(); ?>

