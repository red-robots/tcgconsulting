<?php
	wp_reset_postdata(); 
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'page',
	'pagename' => 'homepage',
));
	if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : ?>
    <?php $wp_query->the_post(); ?>
    
    <?php
		$text = get_field('banner_text');
		$text1 = get_field('text_program_strategy'); 
		$text2 = get_field('text_sourcing'); 
		$text3 = get_field('text_program_management'); 
		$image = get_field('banner_image');
		$image1 = get_field('image_program_strategy'); 
		$image2 = get_field('image_sourcing'); 
		$image3 = get_field('image_program_mangement');
		$a = get_field('banner_consulting_link');
		$a_text = get_field('banner_consulting_text');
		$title = $image['title'];
		$alt = $image['alt'];
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$thumb1 = $image1['sizes'][ $size ];
		$thumb2 = $image2['sizes'][ $size ];
		$thumb3 = $image3['sizes'][ $size ];
	
	$banners = array(
		'banner' => array (
			'text' => $text, 
			'thumb' => $thumb,
			'id' => 'default',
			'a'=>$a,
			'a_text'=>$a_text
		),
		'banner1' => array (
			'text' => $text1, 
			'thumb' => $thumb1,
			'id' => 'program-strategy',
			'a'=>null,
			'a_text'=>null
		),
		'banner2' => array (
			'text' => $text2, 
			'thumb' => $thumb2,
			'id' => 'sourcing',
			'a'=>null,
			'a_text'=>null
		),
		'banner3' => array (
			'text' => $text3, 
			'thumb' => $thumb3,
			'id' => 'program-management',
			'a'=>null,
			'a_text'=>null
		)
	)
?>
    
	
	<?php foreach($banners as $banner) { ?>
		<div class="banner" id="<?php echo $banner['id']; ?>" style="background-image: url(<?php echo $banner['thumb']; ?>);">
    		<div class="banner-text"><?php echo $banner['text']; ?></div><!-- banner text -->
    		<?php if($banner['a'] && $banner['a_text']):?>
                <a class="banner-link" href="<?php echo $a;?>" target="_blank"><?php echo $a_text;?></a>
    		<?php endif;?>
    	</div><!--  banner -->
	<?php } ?>
 	
    
    <?php endwhile; ?>
	<?php endif; ?>
