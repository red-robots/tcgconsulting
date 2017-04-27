<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php wp_reset_postdata(); wp_reset_query(); ?>
	
 <div id="secondary" class="widget-area" role="complementary">
<?php if (is_tree(2) or 'leadership' == get_post_type()) { // about us page ?>

<?php
//	Get the Child pages if you have any.
?>

<aside class="widget">
<h3 class="widget-title"><?php echo get_the_title(2);?></h3>
<?php 	
	$mypages = get_pages( array( 
	'child_of' => 2, 
	'sort_column' => 'menu_order', 
	'sort_order' => 'asc' 
	));
	
	foreach( $mypages as $page ) { ?>	
	<li><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></li>
	<?php } // end for each ?>
    </aside><!-- list sub pages -->

	<?php } elseif('case_study' == get_post_type()) { // else if not the about pages ?>
    	
        <?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'case_study',
	'posts_per_page' => -1,
));

	echo '<aside class="widget">';
	echo '<h3 class="widget-title">Case Studies</h3>';
	echo '<ul>';
	
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    
    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
    <?php endwhile; 
	
		echo '</ul>';
		echo '</aside>';
		
		endif; wp_reset_postdata(); ?>
        
        
        
    <?php } elseif('webinars' == get_post_type()) { // else if not the about pages ?>
    	
        <?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'webinars',
	'posts_per_page' => -1,
));

	echo '<aside class="widget">';
	echo '<h3 class="widget-title">Webinars</h3>';
	echo '<ul>';
	
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    
    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
    <?php endwhile; 
	
		echo '</ul>';
		echo '</aside>';
		
		endif; wp_reset_postdata(); ?>
        
        
        
    <?php } else { ?>
    
    
		
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?>
            
            
    <?php } ?>
    
    
		</div><!-- #secondary -->
	