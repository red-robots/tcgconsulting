<?php
/**
 * Template Name: Top Level Hotel
 */

get_header(); ?>
<div id="primary">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->


<!-- 
			Overview
__________________________________________-->                    
<div class="faqrow">
   <div class="question">
           <div class="question-image"></div>
			Overview
   </div><!-- quesiton -->
    <div class="answer">
          <div class="entry-content">
               <?php the_field('overview'); ?>
          </div><!-- .entry-content -->
    </div><!-- anser -->
</div><!-- faqrow -->

<!-- 
			Services
__________________________________________-->                    
<div class="faqrow">
   <div class="question">
           <div class="question-image"></div>
			Services
   </div><!-- quesiton -->
    <div class="answer">
          <div class="entry-content">
               <?php the_field('services'); ?>
          </div><!-- .entry-content -->
    </div><!-- anser -->
</div><!-- faqrow -->


<!-- 
			Clients
__________________________________________-->                    
<div class="faqrow">
   <div class="question">
           <div class="question-image"></div>
			Clients
   </div><!-- quesiton -->
    <div class="answer">
          <div class="entry-content">
               <?php the_field('clients'); ?>
          </div><!-- .entry-content -->
    </div><!-- anser -->
</div><!-- faqrow -->


<!-- 
			Case Studies
__________________________________________-->                    
<div class="faqrow">
   <div class="question">
           <div class="question-image"></div>
			Case Studies
   </div><!-- quesiton -->
    <div class="answer">
          <div class="entry-content">
               <?php
	 // What page? 
  if(is_page('agency')) {
  	$pageterm = 'agency';
  } elseif(is_page('air')) {
  	$pageterm = 'air';
  } elseif(is_page('hotel')) {
  	$pageterm = 'hotel';
  } elseif(is_page('meetings')) {
  	$pageterm = 'meetings';
  } elseif(is_page('payment-expense-management-systems')) {
  	$pageterm = 'payment-expense-management-systems';
  } elseif(is_page('program-management-outsourcing')) {
  	$pageterm = 'program-management-outsourcing';
  } elseif(is_page('program-strategy')) {
  	$pageterm = 'program-strategy';
  } else {};
  	// Set Query to the page...
	$wp_query = new WP_Query();
	$wp_query->query(array(
    'post_type'=>'case_study',
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'leadership_region', // your custom taxonomy
			'field' => 'slug',
			'terms' => $pageterm,
		)
	)
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
    <?php $wp_query->the_post(); ?>
    
    	<div class="blogpost">
        <div class="entry-content">
        	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
           <?php the_excerpt(); ?>
          </div><!-- .entry-content -->
          <div class="readmore"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></div>
        </div><!-- blogopost -->
    
    <?php endwhile; endif; wp_reset_postdata(); wp_reset_query(); ?>
          </div><!-- .entry-content -->
    </div><!-- anser -->
</div><!-- faqrow -->


<!-- 
			Leadership
__________________________________________-->                    
<div class="faqrow">
   <div class="question">
           <div class="question-image"></div>
			Leadership
   </div><!-- quesiton -->
    <div class="answer">
          <div class="entry-content">
  <?php
  // What page? 
  if(is_page('agency')) {
  	$pageterm = 'agency';
  } elseif(is_page('air')) {
  	$pageterm = 'air';
  } elseif(is_page('hotel')) {
  	$pageterm = 'hotel';
  } elseif(is_page('meetings')) {
  	$pageterm = 'meetings';
  } elseif(is_page('payment-expense-management-systems')) {
  	$pageterm = 'payment-expense-management-systems';
  } elseif(is_page('program-management-outsourcing')) {
  	$pageterm = 'program-management-outsourcing';
  } elseif(is_page('program-strategy')) {
  	$pageterm = 'program-strategy';
  } else {};
  	// Set Query to the page...
  	wp_reset_postdata();
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'leadership',
	'posts_per_page' => -1,
  'orderby'   => 'menu_order',
  'order'     => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'leadership_region', // your custom taxonomy
			'field' => 'slug',
			'terms' => $pageterm,
		)
	)
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
    <?php $wp_query->the_post(); ?>
    
    	<div class="tl-leadership">
    	<?php 
		// Get field Name
		$image = get_field('picture'); 
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$size = 'medium';
		$thumb = $image['sizes'][ $size ];
			
		?>
    	<div class="tl-leadership-photo">
       <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
       </div>
       
       <div class="tl-leadership-right">
       		<div class="l-title"><?php the_title(); ?></div>
            <div class="job-title"><?php the_field('job_title'); ?></div>
           <div class="readmore-leadership"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></div>
       </div><!-- right -->
       
   
        
        </div><!-- top level leadership -->
    
    <?php endwhile; endif; wp_reset_postdata(); wp_reset_query();  ?>
          </div><!-- .entry-content -->
    </div><!-- anser -->
</div><!-- faqrow -->


<!-- 
			Testimonials
__________________________________________-->                    
<div class="faqrow">
   <div class="question">
           <div class="question-image"></div>
			Testimonials
   </div><!-- quesiton -->
    <div class="answer">
          <div class="entry-content">
   <?php if( have_rows('testimonials') ): ?>
	<?php while ( have_rows('testimonials') ) : ?>
	<?php the_row(); ?>
        
       	<div class="testimonial-page"><?php  the_sub_field('testimonial'); ?></div><!-- testimonial page -->
       
   <?php endwhile; ?>
<?php endif; ?>
          </div><!-- .entry-content -->
    </div><!-- anser -->
</div><!-- faqrow -->


<!-- 
			Webinars
__________________________________________-->                    
<div class="faqrow">
   <div class="question">
           <div class="question-image"></div>
			Webinars
   </div><!-- quesiton -->
    <div class="answer">
    <?php
	 // What page? 
  if(is_page('agency')) {
  	$pageterm = 'agency';
  } elseif(is_page('air')) {
  	$pageterm = 'air';
  } elseif(is_page('hotel')) {
  	$pageterm = 'hotel';
  } elseif(is_page('meetings')) {
  	$pageterm = 'meetings';
  } elseif(is_page('payment-expense')) {
  	$pageterm = 'payment-expense';
  } elseif(is_page('program-management-outsourcing')) {
  	$pageterm = 'program-management-outsourcing';
  } elseif(is_page('program-strategy')) {
  	$pageterm = 'program-strategy';
  } else {};
  	// Set Query to the page...
	$wp_query = new WP_Query();
	$wp_query->query(array(
    'post_type'=>'webinars',
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'leadership_region', // your custom taxonomy
			'field' => 'slug',
			'terms' => $pageterm,
		)
	)
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
    <?php $wp_query->the_post(); ?>
    
    	<div class="blogpost">
        <div class="entry-content">
        	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
           <?php the_excerpt(); ?>
          </div><!-- .entry-content -->
          <div class="readmore"><a href="<?php the_permalink(); ?>">Read more &raquo;</a></div>
        </div><!-- blogopost -->
    
    <?php endwhile; endif; wp_reset_postdata(); wp_reset_query(); ?>
          
               
    </div><!-- anser -->
</div><!-- faqrow -->



<!-- 
			Regions
__________________________________________-->                    
<div class="faqrow">
   <div class="question">
           <div class="question-image"></div>
			Regions
   </div><!-- quesiton -->
    <div class="answer">
          <div class="entry-content">
               <?php the_field('regions'); ?>
          </div><!-- .entry-content -->
    </div><!-- anser -->
</div><!-- faqrow -->
        
        
			
		
		
	</article><!-- #post -->

				
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>