<?php
wp_reset_postdata();
$wp_query = new WP_Query();
$wp_query->query( array(
	'post_type' => 'page',
	'pagename'  => 'homepage',
) );
if ( $wp_query->have_posts() ) : ?>
	<?php $wp_query->the_post();
	$banner_1_image = get_field( "banner_1_image" );
	$banner_1_text  = get_field( "banner_1_text" );
	$banner_2_image = get_field( "banner_2_image" );
	$banner_2_text  = get_field( "banner_2_text" );
	$banner_3_image = get_field( "banner_3_image" );
	$banner_3_text_row_2  = get_field( "banner_3_text_row_2" );
	$banner_3_text_row_3  = get_field( "banner_3_text_row_3" ); ?>
    <div class="flexslider">
        <ul class="slides">
			<?php if ( $banner_1_image ): ?>
                <li class="banner-1 slide" style="background-image:url(<?php echo $banner_1_image['url']; ?>);">
                    <div class="inner-wrapper">
                        <img src="<?php echo $banner_1_image['url']; ?>" alt="<?php $banner_1_image['alt']; ?>">
						<?php if ( $banner_1_text ): ?>
                            <div class="text">
								<?php echo $banner_1_text; ?>
                            </div><!--.text-->
						<?php endif; ?>
                    </div><!--.inner-wrapper-->
                </li>
			<?php endif; ?>
			<?php if ( $banner_2_image ): ?>
                <li class="banner-2 slide" style="background-image:url(<?php echo $banner_2_image['url']; ?>);">
                    <div class="inner-wrapper">
                        <img src="<?php echo $banner_2_image['url']; ?>" alt="<?php $banner_2_image['alt']; ?>">
						<?php if ( $banner_2_text ): ?>
                            <div class="text">
								<?php echo $banner_2_text; ?>
                            </div><!--.text-->
						<?php endif; ?>
                    </div><!--.inner-wrapper-->
                </li>
			<?php endif; ?>
			<?php if ( $banner_3_image ): ?>
                <li class="banner-3 slide" style="background-image:url(<?php echo $banner_3_image['url']; ?>);">
                    <div class="inner-wrapper">
                        <img src="<?php echo $banner_3_image['url']; ?>" alt="<?php $banner_3_image['alt']; ?>">
						<div class="row-1">
							<span class="number1">114<span class="percent">%</span></span> 
							<span class="vs">vs</span> 
							<span class="number2">59<span class="percent">%</span></span>    
                        </div><!--.row-1-->
                        <?php if ( $banner_3_text_row_2 ): ?>
                            <div class="row-2">
								<?php echo $banner_3_text_row_2; ?>
                            </div><!--.row-2-->
						<?php endif; ?>
                        <?php if ( $banner_3_text_row_3 ): ?>
                            <div class="row-3">
								<?php echo $banner_3_text_row_3; ?>
                            </div><!--.row-3-->
						<?php endif; ?>
                    </div><!--.inner-wrapper-->
                </li>
			<?php endif; ?>
        </ul>
    </div><!--.flexslider-->
<?php endif; ?>
