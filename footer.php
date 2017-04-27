<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

</div><!-- #page -->

<div class="wrapper-shadow-box footerimage">
<footer>
	
    <div class="footer-left">
        <div class="footer-item">
        <h3><?php bloginfo('name'); ?></h3>
        </div><!-- footer item -->
        
         <?php // All Footer optinos
                $address = get_field('address','option');
                $phone = get_field('phone','option');
                $toll_free_phone = get_field('toll_free_phone','option'); 
                $email = get_field('email','option');
        ?>
        
        <?php if($address != "") : ?>
        <div class="footer-item">
           <?php echo $address; ?>
        </div><!-- footer item -->
        <?php endif; ?>
        
        <?php if($phone != "") : ?>
        <div class="footer-item">
           <?php echo $phone; ?><br>
           <?php if($phone != "") { echo $toll_free_phone; } ?>
        </div><!-- footer item -->
        <?php endif; ?>
        
        <?php if($address != "") : ?>
        <div class="footer-item">
        For more information email <a href="mailto:<?php echo antispambot($email); ?>">
                                        <?php echo antispambot($email); ?>
                                      </a>
        </div><!-- footer item -->
        <?php endif; ?>
    
        <div class="footer-item">
        <div id="sociallinks">
        <?php 
			$facebook = get_field('facebook_link','option'); 
           $twitter = get_field('twitter_link','option'); 
           $linkedin = get_field('linkedin_link','option');
		   
			$socaillink = array (
				'facebook' => array(
					'class' => 'facebook',
					'link' => $facebook,
					'text' => 'Like Us on Facebook',
				),
				'twitter' => array(
					'class' => 'twitter',
					'link' => $twitter,
					'text' => 'Follow Us on Twitter',
				),
				'linkedin' => array(
					'class' => 'linkedin',
					'link' => $linkedin,
					'text' => 'Follow Us on LinkedIn',
				)
			)
		?>
            <ul>
            <?php foreach($socaillink as $link) { 
					if($link['link'] != '') { ?>
				<li class="<?php echo $link['class']; ?>">
                <a href="<?php echo $link['link']; ?>" target="_blank"><?php echo $link['text']; ?></a>
               </li>
			<?php } } ?>
               
            </ul>
        </div><!-- footer item -->
        </div><!-- social links -->
    </div><!-- footer left -->
    
    <div id="testimonials">
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
    
    	<div class="testimonial">	
        <?php the_field('testimonial'); ?>
        	<div class="testi-cite">
            	 - <?php the_field('testimonial_credits'); ?>
            </div><!-- testi cite -->
        </div><!-- testimonial -->
    
    <?php endwhile; ?>
    <?php endif; ?>
    </div><!-- testimonials -->
    
    
    
    
    
</footer>
</div><!-- wrapper shadow box -->

<div class="wrapper">
	<div class="credits">
	<?php 
			$blogname = get_bloginfo('name');
			$date = date('Y');
			$sitemap = get_field('sitemap_link','option');
	echo $blogname . '&copy;' . $date; ?> |
    <a href="<?php echo $sitemap; ?>">sitemap</a> |
    <span class="bellaworks">site by <a href="http://bellaworksweb.com">Bellaworks</a></span>
    </div><!-- credits -->
</div><!-- wrapper -->
<?php the_field('google_analytics','option'); ?>
<?php wp_footer(); ?>
<!-- Bellaworks -->
</body>
</html>