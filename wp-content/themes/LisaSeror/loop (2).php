<?php 
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 2,
	'order' => 'DESC',
	);
	$query = new WP_query ( $args ); ?>
	<?php if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			
			<!-- /post thumbnail -->

			<!-- post title -->
			<div class="col-md-6"  id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<div class="post-content">
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(700,700)); // Declare pixel size you need inside the array ?>
						</a>
						
					<?php endif; ?>
					<div class="test">
						<h2>
							<a  class="no"  id="post-<?php the_ID(); ?>" style="color: #333;font-family: 'Raleway', sans-serif;font-weight: 300;" <?php post_class(); ?> href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						
						<p id="post-<?php the_ID(); ?>" <?php post_class(); ?> > <?php the_content(); ?></p>
						<!-- post details -->
						<div class ="byn" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="baliselien" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >Lire la suite</a>

						</div>
						
						<!-- /post details -->
					</div>
				</div>
				
			</div>
			<!-- /post title -->

			<!-- post details -->
			
			
			<!-- /post details -->
			


		</article>
		<!-- /article -->

	<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
<?php 
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'order' => 'DESC',
	);
	$query = new WP_query ( $args ); ?>
	<?php if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			
			<!-- /post thumbnail -->

			<!-- post title -->
			<div class="col-md-4"  id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<div class="post-content">
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(700,700)); // Declare pixel size you need inside the array ?>
						</a>
						
					<?php endif; ?>
					<div class="test2">
						<h2>
							<a  class="no"  id="post-<?php the_ID(); ?>" style="color: #333;font-family: 'Raleway', sans-serif;font-weight: 300;" <?php post_class(); ?> href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						
						<p id="post-<?php the_ID(); ?>" <?php post_class(); ?> > <?php the_content(); ?></p>
						<!-- post details -->
						<div class ="byn" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="baliselien" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >Lire la suite</a>

						</div>
						
						<!-- /post details -->
					</div>
				</div>
				
			</div>
			<!-- /post title -->

			<!-- post details -->
			
			
			<!-- /post details -->
			


		</article>
		<!-- /article -->

	<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

