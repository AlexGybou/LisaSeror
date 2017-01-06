<?php get_header(); ?>



<div class="container-fluid">


	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tableau">

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

		</div>
		<?php get_footer(); ?>