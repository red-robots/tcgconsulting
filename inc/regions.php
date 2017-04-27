<div id="regions">
<?php 
		$taxonomy = 'category';
		
		$tax1 = get_field('north_america');
		$tax2 = get_field('europe');
		$tax3 = get_field('south_america');
		$tax4 = get_field('asia_pacific');
		$url = get_bloginfo('url');
		$term1 = get_term( $tax1, $taxonomy );
		$term2 = get_term( $tax2, $taxonomy );
		$term3 = get_term( $tax3, $taxonomy );
		$term4 = get_term( $tax4, $taxonomy );
		$slug1 = $url . '/category/' . $term1->slug;
		$slug2 = $url . '/category/' . $term2->slug;
		$slug3 = $url . '/category/' . $term3->slug;
		$slug4 = $url . '/category/' . $term4->slug;
		
?>
	<div class="regions region-na">
        <a href="<?php echo $url . '/about-us/offices/#office-na' ?>">
            <div class="region-title">NORTH AMERICA: U.S. &amp; CANADA</div><!-- region title -->
            
        </a>
        <div class="region-blog"><a href="<?php echo $slug1 ?>">blog</a></div>
    </div><!-- region sa -->
    
    <div class="regions region-euro">
        <a href="<?php echo $url . '/about-us/offices/#office-emea' ?>">
            <div class="region-title">EUROPE: EMEA</div><!-- region title -->
            
        </a>
        <div class="region-blog"><a href="<?php echo $slug2 ?>">blog</a></div>
    </div><!-- region sa -->
    
    <div class="regions region-sa">
        <a href="<?php echo $url . '/about-us/offices/#office-latam' ?>">
            <div class="region-title">LATIN AMERICA: LATAM</div><!-- region title -->
            
        </a>
        <div class="region-blog"><a href="<?php echo $slug3 ?>">blog</a></div>
    </div><!-- region sa -->
    
    <div class="regions region-a">
        <a href="<?php echo $url . '/about-us/offices/#office-apac' ?>">
            <div class="region-title">ASIA/PACIFIC: APAC</div><!-- region title -->
            
        </a>
        <div class="region-blog"><a href="<?php echo $slug4 ?>">blog</a></div>
    </div><!-- region sa -->
    
</div><!-- regions -->