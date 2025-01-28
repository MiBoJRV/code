<?php $activitiesIcon++; ?>
<section class="activities-icon Ai-<?php echo $activitiesIcon; ?> <?php echo get_sub_field('custom_class'); ?>">
    <style>

        .elementor-113 .elementor-element.elementor-element-06237d3.elementor-element {
            display: block !important;
        }

        .elementor-113 .elementor-element.elementor-element-14eab16.elementor-element {
            display: block !important;
        }

        .elementor-113 .elementor-element.elementor-element-0c59af0 .jeg-elementor-kit.jkit-nav-menu .jkit-menu > ul {
            padding: 0;
            align-items: center;
        }

        .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li a {
            color: #fff !important;
            font-size: 16px !important;
            line-height: 16px;
        }

        @media only screen and (max-width: 1199px) {
            .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li a {
                color: #fff !important;
                font-size: 16px !important;
                padding: 8px !important;
            }
        }

        @media only screen and (max-width: 991px) {
            .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li a {
                font-size: 13px !important;
            }
        }

        @media only screen and (max-width: 991px) {
            .elementor-113 .elementor-element.elementor-element-63586b01 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu ul {
                @media only screen and (max-width: 767px) {
                    display: flex;
                    flex-direction: column;
                }
            }


            /*Specific CSS*/
            .activities-icon.Ai-<?php echo $activitiesIcon;?>:after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: <?php echo get_sub_field('background_color'); ?>;
                opacity: <?php echo get_sub_field('background_image_opacity'); ?>;
            }

        <?php if(get_sub_field('customize_font_size')=='yes'): ?>
        <?php if(get_sub_field('article_title_font_size')!=''): ?>
            .activities-icon.Ai-<?php echo $activitiesIcon;?> .container-custom article h2 {
                font-size: <?php echo get_sub_field('article_title_font_size'); ?>;
            }

        <?php endif; ?>
        <?php if(get_sub_field('article_text_font_size')!=''): ?>
            .activities-icon.Ai-<?php echo $activitiesIcon;?> .container-custom article p {
                font-size: <?php echo get_sub_field('article_text_font_size'); ?>;
            }

        <?php endif; ?>
        <?php if(get_sub_field('icon_title_font_size')!=''): ?>
            .activities-icon.Ai-<?php echo $activitiesIcon;?> .item h3 {
                font-size: <?php echo get_sub_field('icon_title_font_size'); ?>;
            }

        <?php endif; ?>
        <?php if(get_sub_field('icon_button_size')!=''): ?>
            .activities-icon.Ai-<?php echo $activitiesIcon;?> .item a.button {
                font-size: <?php echo get_sub_field('icon_button_size'); ?>;
            }

        <?php endif; ?>
        <?php endif; ?>
        <?php if($activitiesIcon < 2):?>
            /*Basic Style*/
            .activities-icon {
                position: relative;
                overflow: hidden;
                padding: 1px 0;
                color: #fff;
                text-align: center;
            }

            .activities-icon > img {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                object-fit: cover;
            }

            .activities-icon article {
                max-width: 1000px;
                margin: 0 auto;
                padding: 80px 20px 50px;
            }

            .activities-icon article h2 {
                font: 400 40px/46px var(--title_font);
                color: #FFF;
            }

            .activities-icon > img.parallax {
                height: 150%;
            }

            .activities-icon .container-custom {
                position: relative;
                z-index: 2;
                padding: 70px 0 100px;
            }

            .activities-icon .iconList {
                max-width: 1330px;
                margin: 100px auto 50px;
            }

            .activities-icon article + .iconList {
                margin-top: 0;
            }

            .activities-icon .iconList .item {
                float: left;
                padding: 0 20px;
                width: 25%;
            }

            .activities-icon .iconList .item:not(:nth-child(4n)) {
                border-right: 2px solid rgba(255, 255, 255, .25);
            }

            .activities-icon .iconList .item:nth-child(n + 5) {
                margin-top: 50px;
            }

            .activities-icon .iconList .item .icon {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 85px;
                width: 85px;
                border: 2px solid #fff;
                border-radius: 50%;
                margin: 0 auto;
            }

            .activities-icon .iconList .item .icon img {
                height: 28px;
                width: 28px;
                object-fit: contain;
            }

            .activities-icon .iconList .item h3 {
                margin: 18px 0 33px;
            <?php if (get_field('global_font_family', get_homePageId())!='Custom'): ?> font: 500 24px 'Montserrat';
            <?php else: ?> font-size: 24px;
            <?php endif ?>
            }

            .activities-icon .iconList .item h3 {
                font: 400 24px/28px var(--paragraph_font);
                color: #FFF;
            }

            .activities-icon .iconList .item a.button {
                border: 1px solid #fff;
                color: #fff;
                padding: 18px 40px;
                font: 500 16px/25px var(--paragraph_font);
                color: #FFF;
                text-transform: uppercase;
            }

            .activities-icon .iconList .item a.button:hover {
                background: var(--hover_color);
                border-color: var(--hover_color);
            }

            /*Responsivness*//*Responsivness*/
            @media (max-width: 1000px) {
                .activities-icon .container-custom {
                    max-width: 740px;
                    padding: 0 20px;
                    margin: 0 auto;
                }

                .activities-icon .iconList .item {
                    width: 50%;
                    padding: 30px 25px;
                }

                .activities-icon .iconList .item:nth-child(odd) {
                    border-right: 1px solid #fff !important;
                }

                .activities-icon .iconList .item:nth-child(even) {
                    border-right: none !important;
                }

                .activities-icon .iconList .item:nth-child(n+3) {
                    border-top: 1px solid #fff !important;
                }
            }
            @media (max-width: 600px) {
                .activities-icon .iconList .item {
                    width: 100%;
                    float: none !important;
                }

                .activities-icon .iconList .item:not(:last-child) {
                    border: none !important;
                    border-bottom: 1px solid #fff !important;
                }
            }

        <?php endif; ?>
    </style>
    <?php if (get_sub_field('section_background') == 'Background Image' || $iosDevice == 1 && get_sub_field('section_background') != 'Background Color'): ?>
        <?php $image = get_sub_field('background_image'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    <?php elseif (get_sub_field('section_background') == 'Parallax Image'): ?>
        <?php $image = get_sub_field('background_image'); ?>
        <img class="parallax" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    <?php endif; ?>
    <div class="container-custom">
        <?php if (get_sub_field('section_title') != '' || get_sub_field('section_text') != ''): ?>
            <article>
                <h2><?php echo get_sub_field('section_title'); ?></h2>
                <p><?php echo get_sub_field('section_text'); ?></p>
            </article>
        <?php endif; ?>
        <div class="iconList customClear">
            <?php if (have_rows('icon_repeater')): ?>
                <?php while (have_rows('icon_repeater')): the_row(); ?>
                    <div class="item">
                        <div class="icon">
                            <?php $image = get_sub_field('icon_image'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                        <h3><?php echo get_sub_field('icon_title'); ?></h3>
                        <?php if (get_sub_field('button_link') != ''): ?>
                            <a href="<?php echo get_sub_field('button_link'); ?>" class="button">
                                <?php echo get_sub_field('button_text'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!--end iconList-->
    </div><!--End container-custom-->
    <script>
        /*Parallax Script*/
        <?php if(get_sub_field('image_type') != 'Cover' && $iosDevice != 1):?>
        <?php if(get_sub_field('section_background') == 'Parallax Image'): ?>
        var currentAi<?php echo $activitiesIcon;?> = jQuery('.activities-icon.Ai-<?php echo $activitiesIcon;?> img.parallax');

        function amountscrolledAi<?php echo $activitiesIcon;?>(top, heiUnit) {
            var scrollTop = $(window).scrollTop() - top;
            heiWindow = 1.5 * window.innerHeight + currentAi<?php echo $activitiesIcon;?>.height();

            var pctScrolled = Math.floor(scrollTop / heiWindow * 100);
            //alert(pctScrolled);
            var posTop = -pctScrolled / 2 + '%';
            //alert(posTop);
            currentAi<?php echo $activitiesIcon;?>.css('top', posTop);
        }

        jQuery(window).scroll(function () {
            if (jQuery(window).scrollTop() > 0) {
                var stAppear = window.innerHeight - window.innerHeight / 4;
                var top = currentAi<?php echo $activitiesIcon;?>.offset().top - stAppear;
                //alert(top)
                var top2 = top + 1.5 * window.innerHeight + currentAi<?php echo $activitiesIcon;?>.height();
                if (jQuery(window).scrollTop() > top) {
                    if (jQuery(window).scrollTop() < top2) {
                        amountscrolledAi<?php echo $activitiesIcon;?>(top);
                    }
                }
            }
        });
        <?php endif;?>
        <?php endif;?>
        /*End Parallax Script*/
    </script>
</section>