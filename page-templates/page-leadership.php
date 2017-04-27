<?php
/**
 * Template Name: Leadership
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'leadership',
	'posts_per_page' => -1,
	'orderby'   => 'menu_order',
  'order'     => 'ASC',
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
        
    <?php $wp_query->the_post(); ?>	
    
    
	<div class="leaderpost blocks">
    	<?php 
		// Get field Name
		$image = get_field('picture'); 
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$size = 'leadership';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];
			
		?>
 	<div class="leadership-photo">
        <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>"  width="<?php echo $width; ?>" height="<?php echo $height; ?>"/>
    </div><!-- leadership photo -->
  
    
    <div class="leadership-content">
    	<div class="entry-content">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="job-title"><?php the_field('job_title') ?></div><!-- job title -->
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

	<!--<span class="boldregions">Serving Regions:</span> <?php //echo $the_region; ?>-->

<?php endif; ?>
            </div><!-- leadership regions -->
		</div><!-- .entry-content -->
        
        </div><!-- leadership content -->
        
        <div class="readmore-leadership"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></div>
        
	</div><!-- #post -->

			<?php endwhile; // end of the loop. ?>	
           	
			<?php endif; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>