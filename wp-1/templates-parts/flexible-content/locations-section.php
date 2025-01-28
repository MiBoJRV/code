<?php $locationSection++; ?>
<section class="location customClear LC-<?php echo $locationSection; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="section_wrap">


        <?php if (get_sub_field('title_section') != ''): ?>
            <div class="section_title">
                <h2><?php echo get_sub_field('title_section'); ?></h2>
            </div><!-- END .section_title -->
        <?php endif; ?>

        <?php if (get_sub_field('customize_locations_section') == 'yes'): ?>
            <div class="item">
                <a href="<?php echo get_sub_field('locations_section_first_block_link'); ?>" class="location-block">
                    <div class="location-img">
                        <img src="<?php echo get_sub_field('locations_section_first_block_image'); ?>" alt="">
                    </div>
                    <div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_first_block_text'); ?></div>
                </a>
            </div><!--End item-->
            <div class="item">
                <a href="<?php echo get_sub_field('locations_section_second_block_link'); ?>" class="location-block">
                    <div class="location-img">
                        <img src="<?php echo get_sub_field('locations_section_second_block_image'); ?>" alt="">
                    </div>
                    <div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_second_block_text'); ?></div>
                </a>
            </div><!--End item-->
            <div class="item">
                <a href="<?php echo get_sub_field('locations_section_third_block_link'); ?>" class="location-block">
                    <div class="location-img">
                        <img src="<?php echo get_sub_field('locations_section_third_block_image'); ?>" alt="">
                    </div>
                    <div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_third_block_text'); ?></div>
                </a>
            </div><!--End item-->
            <div class="item">
                <a href="<?php echo get_sub_field('locations_section_four_block_link'); ?>" class="location-block">
                    <div class="location-img">
                        <img src="<?php echo get_sub_field('locations_section_four_block_image'); ?>" alt="">
                    </div>
                    <div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_four_block_text'); ?></div>
                </a>
            </div><!--End item-->
            <?php if(get_sub_field('locations_section_five_block_image')!='' && get_sub_field('locations_section_five_block_text')!=''):?>
                <div class="item">
                	<a href="<?php echo get_sub_field('locations_section_five_block_link'); ?>" class="location-block">
                		<div class="location-img">
                			<img src="<?php echo get_sub_field('locations_section_five_block_image'); ?>" alt="">
                		</div>    		
                		<div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_five_block_text'); ?></div>
                	</a>
                </div><!--End item-->
            <?php endif; ?>
            <?php if(get_sub_field('locations_section_six_block_image')!='' && get_sub_field('locations_section_six_block_text')!=''):?>
                <div class="item">
                	<a href="<?php echo get_sub_field('locations_section_six_block_link'); ?>" class="location-block">
                		<div class="location-img">
                			<img src="<?php echo get_sub_field('locations_section_six_block_image'); ?>" alt="">
                		</div>    		
                		<div class="location-block-txt positioned centered"><?php echo get_sub_field('locations_section_six_block_text'); ?></div>
                	</a>
                </div><!--End item-->
            <?php endif; ?>
        <?php else: ?>
        <div class="item">
            <a href="#" class="location-block">
                <div class="location-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/kanoe.jpg" alt="">
                </div>
                <div class="location-block-txt positioned centered">
                    <h3 class="blocktitle">Chandler</h3>
                    <p class="blocktext">VACATION RENTALS</p>
                </div>
            </a>
        </div><!--End item-->
        <div class="item">
            <a href="#" class="location-block">
                <div class="location-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/vacation-rentals-new.jpg" alt="">
                </div>
                <div class="location-block-txt positioned centered">
                    <h3 class="blocktitle">Tempe</h3>
                    <p class="blocktext">VACATION RENTALS</p>
                </div>
            </a>
        </div><!--End item-->
        <div class="item">
            <a href="#" class="location-block">
                <div class="location-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/bg-night-beach.jpg" alt="">
                </div>
                <div class="location-block-txt positioned centered">
                    <h3 class="blocktitle">Phoenix</h3>
                    <p class="blocktext">VACATION RENTALS</p>
                </div>
            </a>
        </div><!--End item-->
        <div class="item">
            <a href="#" class="location-block">
                <div class="location-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/sky.jpg" alt="">
                </div>
                <div class="location-block-txt positioned centered">
                    <h3 class="blocktitle">Scottsdale</h3>
                    <p class="blocktext">VACATION RENTALS</p>
                </div>
            </a>
        </div><!--End item-->
    </div><!-- END .section_wrap -->
    <?php endif; ?>
    <style>

        <?php if(get_sub_field('customize_font_size')=='yes'): ?>
        .location.LC-<?php echo $locationSection;?> .blocktitle {
            font-size: <?php the_sub_field('item_title_font_size'); ?>;
        }
        .location.LC-<?php echo $locationSection;?> .blocktext {
            font-size: <?php the_sub_field('item_text_font_size'); ?>;
        }
        <?php endif; ?>
        <?php if($locationSection < 2):?>
        .location {
            padding: 4.5px;
        }
        .location .item {
        	width: calc(100% / 3 - 9px);
        	margin: 4.5px;
        	float: left;
        	position: relative;
            max-height: 600px;
        }
        .location .location-block {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100%;
            display: block;
            z-index: 22;
        }
        .location .location-block img {
            display: block;
            /*opacity: 0.7;*/
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .location .location-img {
            /*background: #000;*/
            position: relative;
            height: 100%;
        }
        .location .item:hover .location-block img {
            transform: scale(1.1);
            /*outline: 1px solid #FFFFFF;*/
            /*outline-offset: -30px;*/
        }
        .location .item .location-block img {
            background: #000;
            position: relative;
            height: 100%;
            /*outline: 1px solid #FFFFFF;*/
            /*outline-offset: -15px;*/
            opacity: .7;
        }
        .location .location-block-txt {
            position: absolute;
            z-index: 22;
        }
        .location .blocktitle {
            color: #fff;
            text-align: center;
            margin: 0;
            text-transform: capitalize;
            font: 400 40px/46px var(--title_font);
            text-shadow: 0px 3px 12px rgba(0, 0, 0, 0.65);
            padding: 0 15px;
        }
        .location .blocktext {
            font: 400 16px/19px var(--paragraph_font);
            display: block;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
            margin: 18px 0px 0px 0px;
            text-shadow: 0px 3px 12px rgba(0, 0, 0, 0.65);
        }
        /*Responsivness*/
        @media (max-width: 1199px) {
            .location .blocktitle {
                font-size: 28px;
            }
            .location .blocktext {
                font-size: 17px;
            }
        }
        @media screen and (max-width: 991px) {
            .location {
                /*margin-bottom: 50px;*/
            }
            .location .item {
                width: calc(50% - 9px);
                max-height: 350px;
                margin: 4.5px 4.5px;
            }
            .location .boxtitle {
                margin-bottom: 30px;
                font-size: 38px;
            }
        }

        @media screen and (max-width: 480px) {
            .location .item {
                width: calc(100% - 9px);
            }
            .side-images .container-custom article h3 {
                font: 700 22px/31px var(--title_font) !important;
            }
            .side-images .container-custom article h3 span {
                font: 600 14px/25px var(--paragraph_font);
            }
        }
        <?php endif; ?>
        /************************* FIX activities_home ********************/
        .location.activities_home {
            background: #F5F5F5;
            padding: 100px 5px;
        }
        .location .section_title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--title_color);
            font: 700 40px var(--title_font);
            text-transform: capitalize;
        }
        .location.activities_home .section_wrap {
            max-width: 1480px;
            margin: 0 auto;

        }
        .location.activities_home .section_wrap .item {
            width: calc(100% / 4 - 20px);
            margin: 10px;
            max-height: 350px;
        }
        .location .location-img {
            background: #141414;
            position: relative;
            height: 100%;
            outline: 1px solid #FFFFFF;
            outline-offset: -15px;
        }
        @media screen and (max-width: 991px){
            .location.activities_home .section_wrap .item {
                width: calc(100% / 2 - 10px);
                margin: 5px;
            }
            .location.activities_home {
                padding: 50px 5px;
            }
            .location .section_title h2 {
                font-size: 32px;
            }
        }
        @media (max-width:767px) {
            .location.activities_home {
                padding: 30px 5px;
            }

        }
        @media screen and (max-width: 480px) {
            .location.activities_home  .item {
                width: calc(100% - 10px) !important;
            }
        }
        @media (max-width:400px) {
            .reviews .reviews-slider .slick-current .reviews-block-user-img::before {
                left: -125% !important;
            }
            .reviews .reviews-slider .slick-current .reviews-block-user-img::after {
                right: -125% !important;
            }
        }
        /************************* END FIX ********************/
    </style>
    <script>
        function locationItems<?php echo $locationSection;?>() {
            var bI = jQuery('.location .item').width() / 469 * 557;
            jQuery('.location .item').height(bI);
        }

        locationItems<?php echo $locationSection;?>();

        jQuery(window).resize(function () {
            locationItems<?php echo $locationSection;?>();
        })
    </script>
</section><!--End location-->
