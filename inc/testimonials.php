<?php
/**
 * Created by PhpStorm.
 * User: fritz
 * Date: 4/28/17
 * Time: 2:13 PM
 */?>
<div id="testimonials" class="footerimage">
	<?php
	wp_reset_postdata();
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=>'testimonial',
		'posts_per_page' => 1,
		'orderby' => 'rand'
	));
	if ($wp_query->have_posts()) : ?>
		<?php while ($wp_query->have_posts()) : ?>
			<?php $wp_query->the_post(); ?>
            <img class="mobile" src="<?php echo get_template_directory_uri();?>/images/footer.jpg" alt="footer image">
			<div class="testimonial">
				<?php the_field('testimonial'); ?>
				<div class="testi-cite">
					- <?php the_field('testimonial_credits'); ?>
				</div><!-- testi cite -->
			</div><!-- testimonial -->
		<?php endwhile; ?>
	    <?php wp_reset_postdata();
	endif; ?>
</div><!-- testimonials -->
