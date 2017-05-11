<?php
/**
 * Template Name: Testimonials
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
				<?php $args = array(

				);
				$query = new WP_Query( $args );
				if($query->have_posts()):?>
					<div id="container">
						<?php while($query->have_posts()):$query->the_post();?>
							
						<?php endwhile;?>
					</div><!--#container-->
				<?php endif;?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>