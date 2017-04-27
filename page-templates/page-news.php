<?php
/**
 * Template Name: News
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'post',
	'posts_per_page' => 10,
	'paged' => $paged,
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
        
    <?php $wp_query->the_post(); ?>	
    
    
	<div class="blogpost">
    	<div class="entry-content">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt() ?>
		</div><!-- .entry-content -->
        <div class="readmore"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></div>
	</div><!-- #post -->

			<?php endwhile; // end of the loop. ?>	
           	 <div class="clear"></div>
    			<?php pagi_posts_nav(); ?>
			<?php endif; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>