<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				 <header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			 </header><!-- .entry-header -->
                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>