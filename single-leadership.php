<?php
/**
 * The Template for displaying all single posts
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
                	<?php 
		// Get field Name
		$image = get_field('picture'); 
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$size = 'medium';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];
			
		?>
 <div class="entry-content">
        <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" class="alignleft"/>
				<h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="job-title"><?php the_field('job_title') ?></div><!-- job title -->
                </div><!-- entry content -->
			 </header><!-- .entry-header -->
        	
            <div class="entry-content">
            
				<?php the_content(); ?>
                
                
                
            <div class="leadership-regions">
            <?php
				$terms = get_the_terms( $post->ID, 'leadership_region' );
					if ( $terms && ! is_wp_error( $terms ) ) : 
					$region_links = array();
						foreach ( $terms as $term ) {
							$region_links[] = $term->name;
						}
				$the_region = join( ", ", $region_links );
?>

	<!--<span class="boldregions">Serving Regions:</span> --><?php //echo $the_region; ?>

<?php endif; ?>
            </div><!-- leadership regions -->
                
                
			</div><!-- .entry-content -->
                
                
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>