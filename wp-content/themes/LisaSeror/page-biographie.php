<?php get_header(); ?>


<h1 class="bio"><?php the_title(); ?> </h1>

<div class="container">

	<div class="row">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 lisa-seror pull-left">

			<?php the_post_thumbnail('medium'); ?>
		</div>

		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 bio-lisa">
			<?php while ( have_posts() ) : the_post(); ?> 

				<?php the_content(); ?> <!-- Page Content -->


				<?php
				endwhile; ?>

			</div>
		</div>


		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 .col-lg-offset-2 text-univers">


			<h2> <?php the_field('titre2'); ?> </h2>

			<?php the_field('contenu2'); ?>


		</div>


	</div>

</div>
</body>

