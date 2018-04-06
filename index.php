<?php
/**
 * The Home page
 */
// Get the Header
get_header(); ?>
    <div class="banner-4-18" style="background-image: url(<?php echo get_template_directory_uri()."/images/skyline.jpg";?>);">
        <a class="full" href="<?php echo get_permalink(3279);?>">
            <img src="<?php echo get_template_directory_uri()."/images/banner-4-18.png";?>" alt="TCO/Overview">
            <a class="description" href="<?php echo get_permalink(2);?>"></a>
        </a>
    </div><!--banner-4-18-->
<?php // Get the banner
//get_template_part('inc/banner');
// Get the programs
//get_template_part('inc/programs');
//show boxes
get_template_part('inc/homelinks');
// Get the footer
get_footer(); 