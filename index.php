<?php
/**
 * The Home page
 */
// Get the Header
get_header(); ?>
 <div class="homepage-tmpe">
  <div class="wrap-inner">
    <div style="max-width: 500px; margin-left: 0;">
      <h2>Lead your organization in reimagining Travel, Meetings, Payment & Expense management</h2>
      <p style="margin-bottom: 0;">Bring order to the complexity with</p>
      <p>Total Cost of Ownership for Travel, Meetings, Payment & Expense℠</p>
      <a class="cta-button" href="#">Learn How</a>
    </div>
  </div>
</div>
    <!--<div class="banner-4-18" style="background-image: url(<?php echo get_template_directory_uri()."/images/skyline.jpg";?>);">
        <a class="full" href="<?php echo get_permalink(3279);?>">
            <img src="<?php echo get_template_directory_uri()."/images/banner-4-18.png";?>" alt="TCO/Overview">
            <a class="description" href="<?php echo get_permalink(2);?>"></a>
        </a>
    </div>banner-4-18-->
<?php // Get the banner
//get_template_part('inc/banner');
// Get the programs
//get_template_part('inc/programs');
//show boxes
get_template_part('inc/homelinks');
// Get the footer
get_footer(); 
