<?php $callUs++; ?>
<section class="call-us cu-<?php echo $callUs; ?> <?php the_sub_field('custom_class'); ?>">
    <style>
        <?php if(get_sub_field('customize_font_size')=='yes'): ?>
        .call-us.cu-<?php echo $callUs;?> .call-us-txt h2.boxtitle {
            font-size: <?php the_sub_field('title_font_size'); ?>;
        }
        .call-us.cu-<?php echo $callUs;?> .call-us-txt p {
            font-size: <?php the_sub_field('section_text_font_size'); ?>;
        }
        .call-us.cu-<?php echo $callUs;?> .call-us-btn a {
            font-size: <?php the_sub_field('button_big_text_font_size'); ?>;
        }
        .call-us.cu-<?php echo $callUs;?> .call-us-btn a span:nth-child(2) {
            font-size: <?php the_sub_field('button_small_text_font_size'); ?>;
        }
        <?php else: ?>
        .call-us .call-us-btn a {
            font-size: 32px;
        }
        .call-us .call-us-btn a span:nth-child(2) {
            font-size: 24px;
        }
        <?php endif; ?>
        <?php if(get_sub_field('image_position')=='Left'): ?>
        @media (min-width: 992px) {
            .call-us.cu-<?php echo $callUs;?> {
                flex-direction: row-reverse;
            }
        }
        <?php endif; ?>
        <?php if($callUs < 2):?>
        /*Basic Styles*/
        .call-us {
            display: flex;
            min-height: 550px;
        }
        .call-us .imaged {
            height: 100%;
            top: 0;
            left: 0;
            width: 100%;
            position: absolute;
            background: #000;
        }
        .call-us .imaged img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            opacity: 0.7;
        }
        .call-us .imaged.parallax {
            height: 150%;
        }
        .call-us .call-us-txt {
            position: relative;
            padding: 125px 120px;
            flex: 50%;
            z-index: 1;
            justify-content: center;
            display: flex;
            flex-direction: column;
        }
        .call-us .call-us-txt::before {
            content: '';
            position: absolute;
            top: 0;
            left: 100%;
            height: 100%;
            width: 125px;
            background: url('/wp-content/themes/BizcorLuxury/images/Mask Group 38.svg') -1px -1px repeat-y;
            z-index: -1;
            -webkit-background-size: contain;
            background-size: contain;
            box-sizing: border-box;
            display: <?php the_field('global_site_waves', get_homePageId()); ?>;
        }
        .call-us .call-us-txt h2.boxtitle {
            margin-bottom: 15px;
            text-align: left;
            color: #4A4A4A;
        }
        .call-us .call-us-txt p {
            text-align: left;
            margin: 15px 0 25px;
            overflow: hidden;
            font: 400 16px/28px var(--paragraph_font);
            color: var(--paragraph_color);
        }
        .call-us .call-us-txt p:last-of-type {
            margin-bottom: 40px;
        }
        .call-us .call-us-txt p a {
            color: var(--main_color);
            font-weight: bold;
        }
        .call-us .call-us-txt p a:hover {
            color: var(--hover_color);
        }
        .call-us .buttonLine {
            text-align: left;
        }
        .call-us.no_btn .find-btn {
            display: none;
        }
        .call-us .find-btn {
            display: inline-block;
            color: #fff;
            background: var(--main_color);
            padding: 10px 45px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            text-transform: uppercase;
        <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?> font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
        <?php else: ?> font-family: var(--body_font);
        <?php endif ?>
        }
        .call-us .find-btn:hover {
            background: var(--hover_color);
        }
        .call-us .call-us-btn {
            position: relative;
            display: flex;
            flex: 50%;
            align-items: center;
            justify-content: center;
            z-index: 0;
            flex-direction: column;
            overflow: hidden;
        }
        .call-us .call-us-btn::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, .3);
            z-index: -1;
        }
        .call-us .call-us-btn a {
            max-width: 343px;
            text-align: center;
            color: #ffffff;
            border: 2px solid #fff;
            display: block;
            padding: 20px 40px;
            transition: all .3s linear;
            position: relative;
            background: rgba(7, 8, 8, 0.8);
        <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?> font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_3")[0]?>;
        <?php else: ?> font-family: var(--original_font);
        <?php endif ?>
        }
        .call-us .call-us-btn a:hover {
            color: var(--main_color);
            border-color: var(--main_color);
            background: #ffffff;
        }
        .call-us .call-us-btn a span {
            display: block;
        }
        .call-us .call-us-btn a span:nth-child(2) {
            font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
        }
        /*Responsivness*//*Responsivness*//*Responsivness*/
        @media (max-width: 1400px) {
            .call-us .call-us-txt {
                padding: 60px;
            }
        }
        @media (max-width: 991px) {
            .call-us {
                flex-direction: column-reverse;
                flex-wrap: wrap;
            }
            .call-us .call-us-btn {
                width: 100%;
                min-height: 250px;
            }
            .call-us .call-us-btn a {
                margin: 50px 0;
            }
        }
        @media (max-width: 768px) {
            .call-us .call-us-txt {
                padding: 30px 15px;
            }
            .call-us .call-us-txt h2.boxtitle {
                font-size: 28px;
                margin-bottom: 20px;
            }
        }
        @media (max-width: 480px) {
            .call-us .call-us-btn a {
                font-size: 26px;
            }
            .call-us .call-us-btn a span:nth-child(2) {
                font-size: 20px;
            }
            .call-us .call-us-txt h2.boxtitle br {
                display: none;
            }
        }
        <?php endif; ?>
    </style>
    <div class="call-us-txt">
        <h2 class="boxtitle"><?php echo get_sub_field('side_paralax_section_title'); ?></h2>
        <?php echo get_sub_field('side_paralax_section_main_text'); ?>
        <div class="buttonLine">
            <?php if (get_sub_field('text_button') == 'On'): ?>
                <a class="find-btn button" href="<?php echo get_sub_field('button_url'); ?>">
                    <?php echo get_sub_field('button_text'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div><!--End call-us-txt-->
    <div class="call-us-btn">
        <div class="imaged <?php if (get_sub_field('image_type') != 'Cover' && $iosDevice != 1): ?>parallax<?php endif; ?>">
            <?php $image = get_sub_field('side_paralax_section_paralax_image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <?php if (get_sub_field('call_us_button') == 'On'): ?>
            <a href="tel:<?php echo preg_replace("/[^0-9]/", "", get_sub_field('phone')); ?>"><span>Call Us Today!</span><span><?php echo get_sub_field('phone'); ?></span></a>
        <?php endif; ?>
    </div><!--End call-us-btn-->
    <?php if (get_sub_field('image_type') != 'Cover' && $iosDevice != 1): ?>
        <script>
            var currentcu<?php echo $callUs;?> = jQuery('.call-us.cu-<?php echo $callUs;?> .imaged');

            function amountscrolledcu<?php echo $callUs;?>(top, heiUnit) {
                var scrollTop = jQuery(window).scrollTop() - top;
                heiWindow = 1.75 * window.innerHeight;

                var pctScrolled = Math.floor(scrollTop / heiWindow * 100);
                //alert(pctScrolled);
                var posTop = -pctScrolled / 2 + '%';
                //alert(posTop);
                currentcu<?php echo $callUs;?>.css('top', posTop);
            }

            jQuery(window).scroll(function () {
                if (jQuery(window).scrollTop() > 0) {
                    var stAppear = window.innerHeight - window.innerHeight / 4;
                    var top = currentcu<?php echo $callUs;?>.offset().top - stAppear;
                    var top2 = top + 1.75 * window.innerHeight;
                    if (jQuery(window).scrollTop() > top) {
                        //alert(top)
                        if (jQuery(window).scrollTop() < top2) {
                            amountscrolledcu<?php echo $callUs;?>(top);
                        }
                    }
                }
            });
        </script>
    <?php endif; ?>
</section><!--End call-us-->
