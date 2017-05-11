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

	<div id="primary" class="site-content template-testimonials">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
				<?php $args = array(
					'post_type'=>'testimonial',
					'posts_per_page'=>-1
				);
				$query = new WP_Query( $args );
				if($query->have_posts()):?>
					<div id="container">
						<?php while($query->have_posts()):$query->the_post();?>
							<?php $tesimonial = get_field('testimonial'); ?>
							<?php $test_cite = get_field('testimonial_credits'); ?>
							<?php if($tesimonial):?>
								<div class="item">
									<div class="inner-wrapper">
										<?php echo $tesimonial;?>
										<?php if($test_cite):?>
											<div class="testi-cite">
												- <?php echo $test_cite;?>
											</div><!-- testi cite -->
										<?php endif;?>
									</div><!--.wrapper-->
								</div><!--.item-->
							<?php endif;?>
						<?php endwhile;?>
					</div><!--#container-->
				<?php endif;?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>