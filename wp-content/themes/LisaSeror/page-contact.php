<?php get_header(); ?>



<div class="container-fluid">


	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 tableau">

			<div class="tableau-contact-info">

				<h1> <?php the_field('mecontacter'); ?> </h1>
				<div class="tama">
					<?php while ( have_posts() ) : the_post(); ?> 

						<?php the_content(); ?> <!-- Page Content -->


						<?php
						endwhile; ?>
						
					</div>

				</div>
				
			</div>
			<div class="formu col-md-6 col-lg-5 col-sm-5 col-xs-12">
				<?php the_field('formulaire'); ?>
			</div>
		</div>
		<?php get_footer(); ?>