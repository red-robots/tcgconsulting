<?php
/**
 * Template Name: TCO-TMPE
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<article class="template-tco">
	<?php while ( have_posts() ) : the_post();
		$banner = get_field("banner");
		$row_1_text = get_field("row_1_text");
		$row_2_text = get_field("row_2_text"); ?>
		<?php if($row_1_text && $row_2_text && $banner):?>
			<div class="banner-tco" <?php if($banner) echo 'style="background-image: url('.$banner['url'].');"';?>>
				<div class="row-1">
					<div class="row-1">
						<span class="number1">114<span class="percent">%</span></span> 
						<span class="vs">vs</span> 
						<span class="number2">59<span class="percent">%</span></span>
					</div><!--.row-1-->
					<div class="row-2">
						<?php echo $row_1_text;?>
					</div><!--.row-2-->
				</div><!--.row-1-->
				<div class="row-2">
					<?php echo $row_2_text;?>
				</div><!--.row-1-->
			</div><!--.banner-tco-->
		<?php endif;
		$banner_row_3 = get_field("banner_row_3");
		$row_3_text = get_field("row_3_text");
		$row_3_header = get_field("row_3_header");
		$disclaimer = get_field("disclaimer");?>
			<div class="row-3">
				<div class="image-background" <?php if($banner_row_3) echo 'style="background-image: url('.$banner_row_3['url'].');"';?>></div><!--.image-background-->
				<div class="color-background"></div><!--.color-background-->
				<?php if($row_3_header):?>
					<h2><?php echo $row_3_header;?></h2>
				<?php endif;?>
				<?php if($row_3_text):?>
					<div class="copy">
						<?php echo $row_3_text;?>
					</div><!--.copy-->
				<?php endif;?>
				<?php if($disclaimer):?>
					<div class="disclaimer">
						<?php echo $disclaimer;?>
					</div><!--.disclaimer-->
				<?php endif;?>
			</div><!--.row-3-->
		<?php $row_4_header = get_field("row_4_header");
		$row_4_text = get_field("row_4_text");
		$row_4_image = get_field("row_4_image");?>
		<div class="row-4">
			<?php if($row_4_header):?>
				<h2><?php echo $row_4_header;?></h2>
			<?php endif;?>
			<div class="row-4-cols">
				<?php if($row_4_image):?>
					<div class="col-1">
						<img src="<?php echo $row_4_image['sizes']['large'];?>" alt="<?php echo $row_4_image['alt'];?>">
					</div><!--.col-1-->
				<?php endif;?>
				<?php if($row_4_text):?>
					<div class="col-2">
						<?php echo $row_4_text;?>
					</div><!--.col-2-->
				<?php endif;?>
			</div><!--.row-4-cols-->
		</div><!--.row-4-->
		<?php $row_5_text = get_field("row_5_text");
		$row_5_header = get_field("row_5_header");
		$button_link = get_field("button_link");
		$button_text = get_field("button_text");
		$banner_row_5 = get_field("banner_row_5");?>
		<div class="row-5" <?php if($banner_row_5) echo 'style="background-image: url('.$banner_row_5['url'].');"';?>>
			<?php if($row_5_header):?>
				<h2><?php echo $row_5_header;?></h2>
			<?php endif;?>
			<?php if($row_5_text||($button_link&&$button_text)):?>
				<div class="row-5-cols">
					<?php if($row_5_text):?>
						<div class="col-1">
							<?php echo $row_5_text;?>
						</div><!--.col-1-->
					<?php endif;?>
					<?php if($button_link&&$button_text):?>
						<div class="col-2">
							<a href="<?php echo $button_link;?>"><?php echo $button_text;?></a>
						</div><!--.col-2-->
					<?php endif;?>
				</div><!--.current-se-->
			<?php endif;?>
		</div><!--row-5-->
	<?php endwhile; // end of the loop. ?>
</article><!-- article -->
<?php get_footer(); ?>