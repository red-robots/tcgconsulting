<div id="feeds">
	
    <div class="feed-box feed-border blocks">
    	<div class="feed-box-header">TCG Headlines</div><!-- feed box header -->
        <div class="feed-box-content">
   <?php 
	$wp_query = new WP_Query();
	$wp_query->query(array(
    'post_type'=>'post',
	'posts_per_page' => 2,
	
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
    <?php $wp_query->the_post(); ?>
    
    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
    <?php endwhile; endif; wp_reset_query(); ?>
        </div><!-- feed box content -->
    </div><!-- feed box -->
    
    
    <div class="feed-box feed-border blocks">
    	<div class="feed-box-header">Events &amp; Webinars</div><!-- feed box header -->
        <div class="feed-box-content">
<?php 
	$wp_query = new WP_Query();
	$wp_query->query(array(
    'post_type'=>'webinars',
	'posts_per_page' => 2,
	
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
    <?php $wp_query->the_post(); ?>
    
    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
    <?php endwhile; endif; wp_reset_query(); ?>
        </div><!-- feed box content -->
    </div><!-- feed box -->
    
    
    <div class="feed-box feed-border blocks">
    	<div class="feed-box-header">Carbrey Award</div><!-- feed box header -->
        <div class="feed-box-content">
        <?php 
	$wp_query = new WP_Query();
	$wp_query->query(array(
    'post_type'=>'page',
	'pagename' => 'homepage',
	
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
    <?php $wp_query->the_post(); ?>
    	
        <p><?php the_field('text'); ?></p>
        
    	<div class=""><a href="<?php the_field('carbrey_awards_link'); ?>">Read more &raquo;</a></div>
    
    <?php endwhile; endif; wp_reset_query(); ?>
        </div><!-- feed box content -->
    </div><!-- feed box -->
    
    
    <div class="feed-box feed-border blocks">
    	<div class="feed-box-header">Case Studies</div><!-- feed box header -->
        <div class="feed-box-content">
<?php 
	$wp_query = new WP_Query();
	$wp_query->query(array(
    'post_type'=>'case_study',
	'posts_per_page' => 2,
	
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
    <?php $wp_query->the_post(); ?>
    
    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
    <?php endwhile; endif; wp_reset_query(); ?>
        </div><!-- feed box content -->
    </div><!-- feed box -->
    
    
    <div class="feed-box feed-border blocks">
    	<div class="feed-box-header">Corporate Responsibility</div><!-- feed box header -->
        <div class="feed-box-content">
        <?php 
	$wp_query = new WP_Query();
	$wp_query->query(array(
    'post_type'=>'page',
	'pagename' => 'homepage',
	
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
    <?php $wp_query->the_post(); ?>
    	
        <p><?php the_field('corporate_responsibilities_text'); ?></p>
        
    	<div class=""><a href="<?php the_field('corporate_responsibility_link'); ?>">Read more &raquo;</a></div>
    
    <?php endwhile; endif; wp_reset_query(); ?>
        </div><!-- feed box content -->
    </div><!-- feed box -->
    
</div><!-- regions -->