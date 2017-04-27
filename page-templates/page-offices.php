<?php
/**
 * Template Name: Offices
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
	
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
      
      <div id="office-na"></div>
      <div id="office-emea"></div>
      <div id="office-apac"></div>
      <div id="office-latam"></div>
        
     <ul class="offices">   
    <li>
       <a class="myLink north-america" href="javascript:void(0);" divId="north-america">
            NORAM
       </a>
    </li>
    <li>
       <a class="myLink emea" href="javascript:void(0);" divId="emea">
            EMEA
       </a>
    </li>
    <li>
       <a class="myLink apac" href="javascript:void(0);" divId="apac">
            APAC
       </a>
    </li>
    <li>
       <a class="myLink latam" href="javascript:void(0);" divId="latam">
           LATAM
       </a>
    </li>
    </ul>

		
	<div class="myDiv" id="north-america">
        <div class="entry-content">
			<?php the_field('north_america_&_global_headquarters'); ?>
		</div><!-- .entry-content -->
    </div><!-- myDiv -->
    
    
    <div class="myDiv" id="emea">
        <div class="entry-content">
			<?php the_field('emea_regional_headquarters'); ?>
		</div><!-- .entry-content -->
    </div><!-- myDiv -->
    
    
    <div class="myDiv" id="apac">
        <div class="entry-content">
			<?php the_field('apac_regional_headquarters_&_global_shared_service_center_(ssc)'); ?>
		</div><!-- .entry-content -->
    </div><!-- myDiv -->
    
    
    <div class="myDiv" id="latam">
        <div class="entry-content">
			<?php the_field('latam_regional_headquarters'); ?>
		</div><!-- .entry-content -->
    </div><!-- myDiv -->
		
	</article><!-- #post -->

				
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>