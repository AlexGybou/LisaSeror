<?php get_header(); ?>



<div class="container-fluid">


	<div class="row">

		<div class="col-md-6">
			<div class="">
				<h1> <?php the_field('mecontacter'); ?> </h1>
				<div class="">
					<?php while ( have_posts() ) : the_post(); ?> 
						<?php the_content(); ?> <!-- Page Content -->
						<?php
						endwhile; ?>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<?php the_field('formulaire'); ?>
			</div>
		</div>
	</div>
	
	<?php get_footer(); ?>





