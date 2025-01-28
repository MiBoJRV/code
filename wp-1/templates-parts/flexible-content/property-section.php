<?php $propertySection++; ?>
<?php $slick++ ?>
<div class="property-section <?php if (get_sub_field('property_make_section_slider') == 'yes'): ?>propertySlider<?php endif; ?> PS-<?php echo $propertySection; ?> <?php echo get_sub_field('custom_class'); ?>">
    <?php if (get_sub_field('property_make_section_title') != ''): ?>
        <h2><?php echo get_sub_field('property_make_section_title'); ?></h2>
    <?php endif; ?>


    <?php if (get_sub_field('units_source') != 'Custom'): ?>
        <div ng-controller="PropertyController as pCtrl" class="inner-container">
            <div class="property-make-box">
                <div>
                    <?php
                    $units = apply_filters('streamline-featured-units', StreamlineCore_Wrapper::get_random_units(3));
                    foreach ($units as $unit):
                        ?>
                        <div class="property-make-margin">
                            <div class="property-make-block">
                                <a href="/<?= $unit['seo_page_name'] ?>/" class="property-make-block-item">
                                    <div class="property-make-img">
                                        <img src="<?= $unit['default_thumbnail_path'] ?>" alt="{[property.location_name]}">
                                    </div>
                                    <div class="property-make-txt">
                                        <h4><?= $unit['name'] ?></h4>
                                        <span class="line"></span>
                                        <ul>
                                            <li><?= $unit['bedrooms_number'] ?> Beds</li>
                                            <li><?= $unit['bathrooms_number'] ?> Baths</li>
                                            <li><?= $unit['max_occupants'] ?> Guests</li>
                                        </ul>
                                    </div>
                                </a>
                            </div><!--End property-make-block-->
                        </div><!-- end property-make-margin -->
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="inner-container">
            <?php if (get_sub_field('property_make_section_slider') == 'yes'): ?>
                <div class="arrowCustom arrowLeft">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="19.862px" height="37.325px" viewBox="0 0 19.862 37.325" style="enable-background:new 0 0 19.862 37.325;"
                         xml:space="preserve">
                    <style type="text/css">
                        .arrowLeft .st0 {
                            fill: #929292;
                        }
                    </style>
                        <path class="st0" d="M19.534,17.8L2.063,0.328c-0.438-0.438-1.153-0.438-1.591,0l0,0c-0.438,0.438-0.438,1.153,0,1.591
                        l16.671,16.671L0.328,35.406c-0.438,0.438-0.438,1.153,0,1.591c0.438,0.438,1.153,0.438,1.591,0l17.588-17.588
                        c0.008-0.008,0.019-0.01,0.027-0.018l0,0C19.972,18.953,19.972,18.237,19.534,17.8z"/>
                </svg>
                </div><!--End arrowCustom-->
                <div class="arrowCustom arrowRight">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="19.862px" height="37.325px" viewBox="0 0 19.862 37.325" style="enable-background:new 0 0 19.862 37.325;"
                         xml:space="preserve">
                    <style type="text/css">
                        .arrowRight .st0 {
                            fill: #929292;
                        }
                    </style>
                        <path class="st0" d="M19.534,17.8L2.063,0.328c-0.438-0.438-1.153-0.438-1.591,0l0,0c-0.438,0.438-0.438,1.153,0,1.591
                        l16.671,16.671L0.328,35.406c-0.438,0.438-0.438,1.153,0,1.591c0.438,0.438,1.153,0.438,1.591,0l17.588-17.588
                        c0.008-0.008,0.019-0.01,0.027-0.018l0,0C19.972,18.953,19.972,18.237,19.534,17.8z"/>
                </svg>
                </div><!--End arrowCustom-->
            <?php endif; ?>
            <?php if (get_sub_field('customize_property_make_section') == 'yes'): ?>
                <div class="property-make-box">
                    <?php if (have_rows('property_make_section_repeater')): ?>
                        <?php while (have_rows('property_make_section_repeater')): the_row(); ?>
                            <div class="property-make-margin">
                                <div class="property-make-block">
                                    <?php if (get_sub_field('property_make_section_property_link') != ''): ?>
                                    <a href="<?php echo get_sub_field('property_make_section_property_link'); ?>" class="property-make-block-item">
                                        <?php endif; ?>
                                        <div class="property-make-img">
                                            <img src="<?php echo get_sub_field('property_make_section_property_image'); ?>" alt="">
                                            <?php if (get_sub_field('property_make_section_price_area') != ''): ?>
                                                <div class="property-make-price">
                                                    <div class="make-price"><?php echo get_sub_field('property_make_section_price_area'); ?></div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="property-make-txt"><?php echo get_sub_field('property_make_section_property_description'); ?></div>
                                        <?php if (get_sub_field('property_make_section_property_link') != ''): ?>
                                    </a><!--End property-make-block-item-->
                                <?php endif; ?>
                                </div><!--End property-make-block-->
                            </div><!-- end property-make-margin -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- end property-make-box -->
            <?php else: ?>
                <div class="property-make-box">
                    <div class="property-make-margin">
                        <div class="property-make-block">
                            <a href="#" class="property-make-block-item">
                                <div class="property-make-img">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_149356428.jpeg" alt="">
                                    <div class="property-make-price">
                                        <div class="make-price">
                                            <style>
                                                :root {
                                                    --price_color: #fff;
                                                }
                                            </style>
                                            <p>AVG 4 BEDROOM MADE</p>
                                            <p>UP TO <span>$136,522</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-make-txt">
                                    <h4>Right Near The Beach</h4>
                                    <ul>
                                        <li>3 bathrooms</li>
                                        <li>Beach Front</li>
                                    </ul>
                                </div>
                            </a><!--End property-make-block-item-->
                        </div><!--End property-make-block-->
                    </div><!-- end property-make-margin -->
                    <div class="property-make-margin">
                        <div class="property-make-block">
                            <a href="#" class="property-make-block-item">
                                <div class="property-make-img">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_149185869.jpeg" alt="">
                                    <div class="property-make-price">
                                        <div class="make-price">
                                            <p>AVG 4 BEDROOM MADE</p>
                                            <p>UP TO <span>$136,522</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-make-txt">
                                    <h4>The Quit Scolling Bungalo </h4>
                                    <ul>
                                        <li>5 bathrooms</li>
                                        <li>Ocean View</li>
                                    </ul>
                                </div>
                            </a><!--End property-make-block-item-->
                        </div><!--End property-make-block-->
                    </div><!-- end property-make-margin -->
                    <div class="property-make-margin">
                        <div class="property-make-block">
                            <a href="#" class="property-make-block-item">
                                <div class="property-make-img">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_150395811.jpeg" alt="">
                                    <div class="property-make-price">
                                        <div class="make-price">
                                            <p>AVG 4 BEDROOM MADE</p>
                                            <p>UP TO <span>$136,522</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-make-txt">
                                    <h4>The Loft</h4>
                                    <ul>
                                        <li>4 bathrooms</li>
                                        <li>Beach Front</li>
                                    </ul>
                                </div>
                            </a><!--End property-make-block-item-->
                        </div><!--End property-make-block-->
                    </div><!-- end property-make-margin -->
                </div><!-- end property-make-box -->
            <?php endif; ?>
        </div><!--End inner-container-->
    <?php endif; ?>
    <style>
        /*property-section*/
        <?php if(get_sub_field('customize_font_size')=='yes'): ?>
        .property-section.PS-<?php echo $propertySection;?> h2 {
            font-size: <?php the_sub_field('section_title_font_size'); ?>;
        }
        .property-section.PS-<?php echo $propertySection;?> .property-make-block .property-make-txt h4 {
            font-size: <?php the_sub_field('titles_font_size'); ?>;
        }
        .property-section.PS-<?php echo $propertySection;?> .property-make-block .property-make-txt ul li {
            font-size: <?php the_sub_field('text_font_size'); ?>;
        }
        .property-section.PS-<?php echo $propertySection;?> .property-make-price > .make-price > p {
            font-size: <?php the_sub_field('item_centered_text_first_row_font_size'); ?>;
        }
        .property-section.PS-<?php echo $propertySection;?> .property-make-price > .make-price > p:last-child {
            font-size: <?php the_sub_field('item_centered_text_second_row_font_size'); ?>;
        }
        <?php elseif($propertySection < 2): ?>
        .property-section .property-make-price > .make-price > p {
            font-size: 20px;
        }
        .property-section .property-make-price > .make-price > p:last-child {
            font-size: 30px;
        }
        <?php endif; ?>
        .property-section.PS-<?php echo $propertySection;?> .inner-container {
            max-width: <?php echo get_sub_field('property_make_section_width_size'); ?>;
        }
        <?php if($propertySection < 2): ?>
        .property-section .slick-slider .slick-track, .property-section .slick-slider .slick-list {
            opacity: 1;
        }
        /*Basic Styles*/
        .property-section {
            padding: 100px 0 80px;
            background: #f5f5f5;
        }
        .property-section .inner-container {
            margin: 0 auto;
            position: relative;
        }
        .property-section h2 {
            text-align: center;
            margin-bottom: 40px;
        }
        .property-section .property-make-box:before,
        .property-section .property-make-box:after {
            content: "";
            display: block;
            height: 0;
            overflow: hidden;
            clear: both;
        }
        .property-section .property-make-margin {
            padding: 10px;
            width: 33.333%;
            text-align: center;
            float: left;
        }
        .property-section .property-make-block {
            position: relative;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.12);
        }
        .property-section .property-make-block-item:hover .property-make-img img {
            transform: scale(1.1);
            opacity: .9;
        }
        .property-section .property-make-block .property-make-img {
            overflow: hidden;
            position: relative;
            background: #2A2A2A;
        }
        .property-section .property-make-block .property-make-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .property-section .property-make-block .property-make-txt {
            background: #fff;
            position: relative;
            z-index: 10;
            padding: 19px 0;
        }
        .property-section .property-make-block .line {
            width: 42px;
            display: block;
            margin: 0 auto 8px auto;
            height: 2px;
            background: #438CCA;
        }
        .property-section .property-make-block .property-make-txt span.line {
            display: block;
            margin: 5px auto;
            height: 2px;
            width: 33px;
            background: var(--main_color);
            position: relative;
        }
        .property-section .property-make-price {
            position: absolute;
            width: 100%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .property-section .property-make-price > .make-price > p {
            margin: 0;
            color: rgba(255, 255, 255, .75);
            font-size: 16px;
            letter-spacing: .4px;
        }
        .property-section .property-make-price > .make-price > p:last-child {
            font-weight: 700;
            color: #fff;
            font-size: 36px;
        }
        .property-section .property-make-price > .make-price > p:last-child > span {
            color: var(--price_color);
        }
        .property-section .property-make-price > .make-price {
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            max-width: 310px;
            border: 5px solid rgba(250, 250, 250, 0.4);
            margin: 0 auto;
        }
        .property-section .property-make-block .property-make-txt h4 {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            margin: 0 auto 8px;
            padding: 0 10px;
            font: 400 24px/30px var(--original_font);
            letter-spacing: 0px;
            color: #292929;
        }
        .property-section .property-make-block .property-make-txt ul {
            margin: 0;
            padding: 0;
        }
        .property-section .property-make-block .property-make-txt ul li {
            display: inline-block;
            color: rgba(41, 41, 41, .75);
            text-transform: capitalize;
            font: 500 16px/22px var(--body_font);
        }
        .property-section .property-make-block .property-make-txt ul li:after {
            content: " | ";
        }
        .property-section .property-make-block .property-make-txt ul li:last-child:after {
            content: " ";
        }
        /*Slider*/
        .property-section.propertySlider {
            padding-left: 50px;
            padding-right: 50px;
        }
        .property-section.propertySlider .slick-list {
            padding: 20px 0px !important;
        }
        .property-section.propertySlider h2 {
            margin-bottom: 20px;
            color: #292929;
        }
        .property-section.propertySlide .arrowCustom svg {
            height: 100%;
        }
        .property-section.propertySlider .arrowCustom:hover .st0 {
            fill: var(--main_color);
        }
        .property-section.propertySlider .arrowCustom {
            position: absolute;
            height: 30px;
            top: calc(50% - 15px);
            cursor: pointer;
        }
        .property-section.propertySlider .arrowCustom.arrowLeft {
            right: calc(100% + 20px);
            transform: rotate(180deg);
        }
        .property-section.propertySlider .arrowCustom.arrowRight {
            left: calc(100% + 20px);
        }
        /**************************** FIX  ********************************/
        .property-section .property-make-block .property-make-txt h4 {
            font: 400 24px/28px var(--title_font);
            color: var(--title_color);
        }
        .property-section .property-make-block .property-make-txt ul li {
            font: 500 16px/22px var(--paragraph_font);
            color: var(--paragraph_color);
        }
        .property-section .property-make-price > .make-price > p {
            font: 500 16px/25px var(--paragraph_font);
        }
        .property-section .property-make-price > .make-price > p:last-child {
            font: 400 32px/36px var(--title_font);
            text-transform: capitalize;
        }
        .property-section .property-make-price > .make-price {
            background: rgba(7, 8, 8, 0.8);
            border: 2px solid rgba(255, 255, 255, 1);
            max-width: 274px;
        }
        .property-section .property-make-block .property-make-txt span.line {
            background: var(--second_color);
        }
        /**************************** END  FIX  ****************************/
        /*Responsivness*//*Responsivness*//*Responsivness*/
        @media (max-width: 1200px) {
            .property-section {
                padding: 50px 10px;
            }
            .property-section h2 {
                margin-bottom: 40px;
            }
        }
        @media (max-width: 991px) {
            .property-section .property-make-price > .make-price > p {
                font-size: 15px;
            }
            .property-section .property-make-price > .make-price > p:last-child {
                font-size: 24px;
            }
            .property-section .property-make-price > .make-price {
                max-width: 230px;
            }
            .property-section .property-make-box {
                flex-wrap: wrap;
            }
            .property-section .property-make-margin {
                flex: 100%;
            }
            .property-section .property-make-margin {
                width: 100%;
            }
            .property-section .property-make-block {
                margin: 0 auto;
                max-width: none;
            }
            .property-section h2 {
                font-size: 32px;
            }
        }
        @media screen and (max-width: 767px) {
            .property-section .property-make-box {
                flex-direction: column;
            }
            .property-section h2.boxtitle, .stories h2.boxtitle, .category h2.boxtitle {
                font-size: 32px;
                margin-bottom: 20px;
            }
            .property-section {
                padding: 30px 15px 80px 15px !important;
            }
            .featured-block .featured-txt h4 {
                font-size: 18px;
            }
            .featured-block .featured-txt ul li {
                font-size: 12px;
            }
            .featured-margin {
                padding: 0;
            }
            .property-section.propertySlider .arrowCustom {
                width: 50px;
                height: 50px;
                background: var(--main_color);
                background-image: url(/wp-content/uploads/2020/04/right-arrow-chevron.png);
                background-size: 20px;
                background-position: center;
                background-repeat: no-repeat;
                border-radius: 100%;
                top: auto !important;
                bottom: -60px;
                transform: none;
            }
            .property-section.propertySlider .arrowCustom svg {
                opacity: 0;
            }
            .property-section.propertySlider .arrowCustom.arrowRight {
                right: calc(50% - 60px);
                left: auto;
            }
            .property-section.propertySlider .arrowCustom.arrowLeft {
                left: calc(50% - 60px);
                right: auto;
                transform: rotatez(180deg);
            }
            .featured-block {
                margin: 10px;
                box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            }
            .property-section {
                padding-right: 15px;
                padding-left: 15px;
            }
            .property-section.propertySlider .slick-list {
                padding: 0 !important;
            }
        }
        <?php endif; ?>
    </style>
    <?php if ($slick < 2): ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <?php endif; ?>
    <script>
        <?php if(get_sub_field('property_make_section_slider') == 'yes' && get_sub_field('units_source') == 'Custom'): ?>
        jQuery('.property-section.PS-<?php echo $propertySection;?> .arrowLeft').click(function () {
            jQuery('.property-section.PS-<?php echo $propertySection;?> .property-make-box').slick('slickPrev');
        });
        jQuery('.property-section.PS-<?php echo $propertySection;?> .arrowRight').click(function () {
            jQuery('.property-section.PS-<?php echo $propertySection;?> .property-make-box').slick('slickNext');
        });
        if (jQuery(window).innerWidth() > 991) {
            var slidesQ = 3;
        } else {
            var slidesQ = 1;
        }
        jQuery('.property-section.PS-<?php echo $propertySection;?> .property-make-box').slick({
            slidesToShow: slidesQ,
            arrows: false,
            centerMode: false,
            slidesToScroll: 1,
        });
        <?php endif; ?>

        function propertyMakeItems<?php echo $propertySection;?>() {
            var bI = jQuery('.property-make-block .property-make-img').width() / 424 * 270;
            jQuery('.property-make-block .property-make-img').height(bI);
        }

        propertyMakeItems<?php echo $propertySection;?>();
        jQuery(window).resize(function () {
            propertyMakeItems<?php echo $propertySection;?>();
        });/*End resize function*/
    </script>
</div><!--End property-make-->
