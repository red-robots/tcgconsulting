<?php
/**
 * Created by PhpStorm.
 * User: fritz
 * Date: 4/28/17
 * Time: 2:03 PM
 */
$news_events_text   = get_field( "news_events_text" );
$news_events_image  = get_field( "news_events_image" );
$news_events_story_1 = get_field("news_events_story_1");
$news_events_story_2 = get_field("news_events_story_2");
$our_clients_text   = get_field( "our_clients_text" );
$our_clients_image  = get_field( "our_clients_image" );
$case_studies_text  = get_field( "case_studies_text" );
$case_studies_image = get_field( "case_studies_image" );
$case_studies_story_1 = get_field("case_studies_story_1");
$case_studies_story_2 = get_field("case_studies_story_2");
$news_events_posts = array();
if($news_events_story_1) $news_events_posts[] = $news_events_story_1;
if($news_events_story_2) $news_events_posts[] = $news_events_story_2;
$case_studies_posts = array();
if($case_studies_story_1) $case_studies_posts[] = $case_studies_story_1;
if($case_studies_story_2) $case_studies_posts[] = $case_studies_story_2; ?>
<div class="homefeed">
    <div class="col-1 col">
        <div class="outer-wrapper">
			<?php if ( $news_events_image ): ?>
                <img src="<?php echo $news_events_image['sizes']['large']; ?>"
                     alt="<?php $news_events_image['alt']; ?>">
			<?php endif; ?>
            <div class="inner-wrapper">
				<?php if ( $news_events_text ): ?>
                    <h2><?php echo $news_events_text; ?></h2>
				<?php endif; ?>
                <?php if(!empty($news_events_posts)):
                    $wp_query = new WP_Query();
                    $wp_query->query( array(
                        'post__in'      => $news_events_posts,
                        'posts_per_page' => 2,
                    ) );
                    if ( $wp_query->have_posts() ) : ?>
                        <ul class="items">
                            <?php while ( $wp_query->have_posts() ) : ?>
                                <?php $wp_query->the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                        </ul><!--.items-->
                        <?php wp_reset_postdata();
                    endif;
				endif;?>
            </div><!--.inner-wrapper-->
        </div><!--.outer-wrapper-->
    </div><!--.col-1-->
    <div class="col-2 col">
        <div class="outer-wrapper">
			<?php 
            if ( $our_clients_image ): ?>
                <img src="<?php echo $our_clients_image['sizes']['large']; ?>"
                     alt="<?php echo $our_clients_image['alt']; ?>">
			<?php endif; ?>
            <div class="inner-wrapper">
				<?php if ( $our_clients_text ): ?>
                    <h2><?php echo $our_clients_text; ?></h2>
				<?php endif; ?>
				<?php $post = get_post(3201);
                setup_postdata( $post );
                $link = get_the_permalink( );
                wp_reset_postdata();
				$wp_query = new WP_Query();
				$wp_query->query(array(
					'post_type'=>'testimonial',
					'posts_per_page' => 1,
					'orderby' => 'rand'
				));
				if ( $wp_query->have_posts() ) : ?>
                    <div class="feed-test">
						<?php while ( $wp_query->have_posts() ) : ?>
							<?php $wp_query->the_post(); ?>
                            <a href="<?php echo $link;?>"><?php the_field('testimonial'); ?></a>
						<?php endwhile; ?>
                    </div><!--.items-->
					<?php wp_reset_postdata();
				endif; ?>

            </div><!--.inner-wrapper-->
        </div><!--.outer-wrapper-->
    </div><!--.col-2-->
    <div class="col-3 col">
        <div class="outer-wrapper">
			<?php if ( $case_studies_image ): ?>
                <img src="<?php echo $case_studies_image['sizes']['large']; ?>"
                     alt="<?php $case_studies_image['alt']; ?>">
			<?php endif; ?>
            <div class="inner-wrapper">
				<?php if ( $case_studies_text ): ?>
                    <h2><?php echo $case_studies_text; ?></h2>
				<?php endif; ?>
				<?php if(!empty($case_studies_posts)):
                    $wp_query = new WP_Query();
                    $wp_query->query( array(
                        'post_type'      => 'case_study',
                        'posts_per_page' => 2,
                    ) );
                    if ( $wp_query->have_posts() ) : ?>
                        <ul class="items">
                            <?php while ( $wp_query->have_posts() ) : ?>
                                <?php $wp_query->the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                        </ul><!--.items-->
                        <?php wp_reset_postdata();
                    endif;
                endif;?>
            </div><!--.inner-wrapper-->
        </div><!--.outer-wrapper-->
    </div><!--.col-3-->
</div><!--.homelinks-->