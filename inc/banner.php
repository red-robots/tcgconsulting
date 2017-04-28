<?php
wp_reset_postdata();
$wp_query = new WP_Query();
$wp_query->query( array(
	'post_type' => 'page',
	'pagename'  => 'homepage',
) );
if ( $wp_query->have_posts() ) : ?>
	<?php while ( $wp_query->have_posts() ) : ?>
		<?php $wp_query->the_post(); ?>



	<?php endwhile; ?>
<?php endif; ?>
