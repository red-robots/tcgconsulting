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

<footer id="colophon" class="wrapper">

    <div class="col col-1">
        <div class="inner-wrapper">
            <img src="<?php echo get_template_directory_uri();?>/images/logo_footer.png" alt="logo footer">
        </div><!--.wrapper-->
    </div><!-- footer item col-1-->

	<?php // All Footer optinos
	$address         = get_field( 'address', 'option' );
	$phone           = get_field( 'phone', 'option' );
	$toll_free_phone = get_field( 'toll_free_phone', 'option' );
	$email           = get_field( 'email', 'option' );
	?>
    <div class="col-2 col">
        <div class="inner-wrapper">
            <?php if ( $address != "" ) : ?>
                <div class="address">
                    <?php echo $address; ?>
                </div><!--.address-->
            <?php endif; ?>
            <?php if ( $phone != "" ) : ?>
                <div class="phone">
                    <?php echo $phone; ?><br>
                    <?php if ( $phone != "" ) {
                        echo $toll_free_phone;
                    } ?>
                </div><!--.phone-->
            <?php endif; ?>
        </div><!--inner-wrapper-->
    </div><!--.col-2-->
    <div class="col-3 col">
        <div class="inner-wrapper">
            <?php if ( $email != "" ) : ?>
                <div class="intro">For more information email </div><!--.intro-->
                <div class="link">
                    <a href="mailto:<?php echo antispambot( $email ); ?>">
                        <?php echo antispambot( $email ); ?>
                    </a>
                </div><!--.link-->
            <?php endif; ?>
        </div><!-- inner-wrapper -->
    </div><!--.col-3-->
    <div class="col col-4">
        <div class="inner-wrapper">
            <?php
            $facebook = get_field( 'facebook_link', 'option' );
            $twitter  = get_field( 'twitter_link', 'option' );
            $linkedin = get_field( 'linkedin_link', 'option' );
            if($facebook||$linkedin||$twitter):?>
                <ul>
                    <?php if($linkedin):?>
                        <li class="linkedin">
                            <a href="<?php echo $linkedin;?>">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </li>
                    <?php endif;
                    if($facebook):?>
                        <li class="facebook">
                            <a href="<?php echo $facebook;?>">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    <?php endif;
                    if($twitter):?>
                        <li class="twitter">
                            <a href="<?php echo $twitter;?>">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    <?php endif;?>
                </ul>
            <?php endif;?>
        </div><!--.inner-wrapper-->
    </div><!-- col col-4-->
</footer>

<div class="wrapper">
    <div class="credits">
		<?php
		$blogname = get_bloginfo( 'name' );
		$date     = date( 'Y' );
		$sitemap  = get_field( 'sitemap_link', 'option' );
		echo $blogname . '&copy;' . $date; ?> |
        <a href="<?php echo $sitemap; ?>">sitemap</a> |
        <span class="bellaworks">site by <a href="http://bellaworksweb.com">Bellaworks</a></span>
    </div><!-- credits -->
</div><!-- wrapper -->
<?php the_field( 'google_analytics', 'option' ); ?>
<?php wp_footer(); ?>
<!-- Bellaworks -->
</body>
</html>