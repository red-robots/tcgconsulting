<?php 
/*
*
*/
$programs_description = get_field("programs_description");
$programs_link = get_field("programs_link");
$programs_link_text = get_field("programs_link_text");
$programs_title = get_field("programs_title");
$programs_instructions = get_field("programs_instructions");
$background_image = get_field("programs_background_image");
$strategy_text = get_field("programs_strategy_text");
$strategy_image = get_field("programs_strategy_image");
$integration_text = get_field("programs_integration_text");
$integration_image = get_field("programs_integration_image");
$air_text = get_field("programs_air_text");
$air_image = get_field("programs_air_image");
$lodging_text = get_field("programs_lodging_text");
$lodging_image = get_field("programs_lodging_image");
$meetings_text = get_field("programs_meetings_text");
$meetings_image = get_field("programs_meetings_image");
$payment_text = get_field("programs_payment_text");
$payment_image = get_field("programs_payment_image");
$management_text = get_field("programs_management_text");
$management_image = get_field("programs_management_image");?>
<div class="homeprograms" <?php if($background_image):
    echo 'style="background-image: url('.$background_image['url'].');"';
    endif;?>>
    <?php if($programs_instructions || $programs_title):?>
        <div class="row-1">
            <?php if($programs_title):?>
                <div class="title">
                    <?php echo $programs_title;?>
                </div><!--.title-->
            <?php endif;
            if($programs_instructions):?>
                <div class="instructions">
                    <?php echo $programs_instructions;?>
                </div><!--.instructions-->
            <?php endif;?>
        </div><!--.row-1-->
    <?php endif;?>
    <div class="row-2">
        <?php if($strategy_image):?>
            <div class="strategy col">
                <img src="<?php echo $strategy_image['url'];?>" alt=<?php echo $strategy_image['alt'];?>>
                <?php if($strategy_text):?>
                    <div class="copy">
                        <?php echo $strategy_text;?>
                    </div><!--.copy-->
                <?php endif;?>
            <div class="connector"></div><!--.connector-->
            </div><!--.strategy col--> 
        <?php endif;?>
        <?php if($integration_image):?>
            <div class="integration col">
                <img src="<?php echo $integration_image['url'];?>" alt=<?php echo $integration_image['alt'];?>>
                <?php if($integration_text):?>
                    <div class="copy">
                        <?php echo $integration_text;?>
                    </div><!--.copy-->
                <?php endif;?>
            <div class="connector"></div><!--.connector-->
            </div><!--.integration col--> 
        <?php endif;?>
        <?php if($air_image):?>
            <div class="air col">
                <img src="<?php echo $air_image['url'];?>" alt=<?php echo $air_image['alt'];?>>
                <?php if($air_text):?>
                    <div class="copy">
                        <?php echo $air_text;?>
                    </div><!--.copy-->
                <?php endif;?>
            <div class="connector"></div><!--.connector-->
            </div><!--.air col--> 
        <?php endif;?>
        <?php if($lodging_image):?>
            <div class="lodging col">
                <img src="<?php echo $lodging_image['url'];?>" alt=<?php echo $lodging_image['alt'];?>>
                <?php if($lodging_text):?>
                    <div class="copy">
                        <?php echo $lodging_text;?>
                    </div><!--.copy-->
                <?php endif;?>
            <div class="connector"></div><!--.connector-->
            </div><!--.lodging col--> 
        <?php endif;?>
        <?php if($meetings_image):?>
            <div class="meetings col">
                <img src="<?php echo $meetings_image['url'];?>" alt=<?php echo $meetings_image['alt'];?>>
                <?php if($meetings_text):?>
                    <div class="copy">
                        <?php echo $meetings_text;?>
                    </div><!--.copy-->
                <?php endif;?>
            <div class="connector"></div><!--.connector-->
            </div><!--.meetings col--> 
        <?php endif;?>
        <?php if($payment_image):?>
            <div class="payment col">
                <img src="<?php echo $payment_image['url'];?>" alt=<?php echo $payment_image['alt'];?>>
                <?php if($payment_text):?>
                    <div class="copy">
                        <?php echo $payment_text;?>
                    </div><!--.copy-->
                <?php endif;?>
            <div class="connector"></div><!--.connector-->
            </div><!--.payment col--> 
        <?php endif;?>
        <?php if($management_image):?>
            <div class="management col">
                <img src="<?php echo $management_image['url'];?>" alt=<?php echo $management_image['alt'];?>>
                <?php if($management_text):?>
                    <div class="copy">
                        <?php echo $management_text;?>
                    </div><!--.copy-->
                <?php endif;?>
            </div><!--.management col--> 
        <?php endif;?>
    </div><!--.row-2-->
    <?php if($programs_description|| ($programs_link&&$programs_link_text)):?>
        <div class="row-3">
            <?php if($programs_description):?>
                <div class="description">
                    <?php echo $programs_description;?>
                </div><!--.description-->
                <?php if($programs_link_text&&$programs_link):?>
                    <a href="<?php echo $programs_link;?>">
                        <?php echo $programs_link_text;?>
                    </a>
                <?php endif;?>
            <?php endif;?>
        </div>
    <?php endif;?>
</div><!--.homeprograms-->