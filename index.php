<?php
/**
 * The Home page
 */
// Get the Header
get_header(); 
// Get the banner
get_template_part('inc/banner');
//show boxes
get_template_part('inc/homelinks');
//show testimonials
get_template_part('inc/testimonials');
// Get the footer
get_footer(); 