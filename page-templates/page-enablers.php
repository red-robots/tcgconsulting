<?php
/**
 * Template Name: Strategic Enablers
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
	<article class="template-enablers">
		<?php while ( have_posts() ) : the_post();
			$banner = get_field("banner");
			$row_1_text = get_field("row_1_text");
			$row_2_text = get_field("row_2_text"); ?>
			<?php if($row_1_text && $row_2_text && $banner):?>
				<div class="banner-enablers" <?php if($banner) echo 'style="background-image: url('.$banner['url'].');"';?>>
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
				</div><!--.banner-enablers-->
			<?php endif;
			$se_header_1 = get_field("se_header_1");
			$se_text = get_field("se_text");
			$se_header_2 = get_field("se_header_2");
			$disclaimer = get_field("disclaimer");
			$button_link = get_field("button_link");
			$button_text = get_field("button_text");
			$current_se = get_field("current_se");?>
			<div class="copy">
				<?php if($se_header_1):?>
					<h2><?php echo $se_header_1;?></h2>
				<?php endif;?>
				<?php if($se_text):?>
					<div class="se-text">
						<?php echo $se_text;?>
					</div><!--.text-->
				<?php endif;?>
				<?php if($se_header_2):?>
					<h2><?php echo $se_header_2;?></h2>
				<?php endif;?>
				<?php if($current_se||($button_link&&$button_text)):?>
					<div class="current-se">
						<?php if($current_se):?>
							<div class="col-1">
								<?php foreach($current_se as $row):
									if($row['image']):?>
										<div class="se">
											<?php if($row['link']):?>
												<a href="<?php echo $row['link'];?>">
											<?php endif;?>
												<img src="<?php echo $row['image']['sizes']['large'];?>" alt="<?php echo $row['image']['alt'];?>">
											<?php if($row['link']):?>
												</a>
											<?php endif;?>
										</div><!--.se-->
									<?php endif;
								endforeach;?>
							</div><!--.col-1-->
						<?php endif;?>
						<?php if($button_link&&$button_text):?>
							<div class="col-2">
								<a href="<?php echo $button_link;?>"><?php echo $button_text;?></a>
							</div><!--.col-2-->
						<?php endif;?>
					</div><!--.current-se-->
				<?php endif;?>
				<?php if($disclaimer):?>
					<div class="disclaimer">
						<?php echo $disclaimer;?>
					</div><!--.disclaimer-->
				<?php endif;?>
			</div><!--copy-->
		<?php endwhile; // end of the loop. ?>
	</article><!-- article -->
<?php get_footer(); ?>