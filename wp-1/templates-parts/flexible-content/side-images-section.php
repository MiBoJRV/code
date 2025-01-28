<?php $sideImages++; ?>
<section class="side-images si-<?php echo $sideImages; ?> <?php echo get_sub_field('image_side'); ?> <?php echo get_sub_field('custom_class'); ?>">
    <style>
        /*Specific Code*/
        section.side-images.si-<?php echo $sideImages;?> {
            background: <?php echo get_sub_field('section_background'); ?> !important;
            background: #FAFAFA !important;
        }
        <?php if(get_sub_field('customize_font_size')=='yes'): ?>
        <?php if(get_sub_field('title_font_size')!=''): ?>
        .side-images.si-<?php echo $sideImages;?> .container-custom article h3 {
            font-size: <?php echo get_sub_field('title_font_size'); ?>;
        }
        <?php endif; ?>
        <?php if(get_sub_field('section_text_font_size')!=''): ?>
        .side-images.si-<?php echo $sideImages;?> .container-custom article p {
            font-size: <?php echo get_sub_field('section_text_font_size'); ?>;
        }
        <?php endif; ?>
        <?php if(get_sub_field('button_font_size')!=''): ?>
        .side-images.si-<?php echo $sideImages;?> .container-custom article a.button {
            font-size: <?php echo get_sub_field('button_font_size'); ?>;
        }
        <?php endif; ?>
        <?php endif; ?>
        <?php if($sideImages < 2):?>
        /*Basic CSS*/
        .side-images {
            padding: 100px 40px;
            background: #FAFAFA !important;
        }
        .side-images + .side-images {
            padding-top: 0;
        }
        .side-images .container-custom {
            display: flex;
            max-width: 1470px;
            margin: 0 auto;
            position: relative;
        }
        .side-images .container-custom > div {
            flex-shrink: 0;
        }
        .side-images .imagePart {
            border-radius: 3px;
            overflow: hidden;
            position: relative;
            width: 48%;
        }
        .side-images .imagePart .imaged {
            height: 100%;
        }
        .side-images .imagePart .imaged img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        .side-images .infoPart {
            padding: 30px 0;
            width: 52%;
        }
        .side-images .container-custom article {
            position: relative;
            display: flex;
            height: 100%;
            background: #fff;
            /*box-shadow: 0 10px 50px #00001F;*/
            box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.12);
            flex-direction: column;
            padding: 50px;
            justify-content: center;
            border-radius: 3px;
            min-height: 425px;
        }
        .side-images .container-custom article h3 {
        <?php if(get_field('global_font_family', get_homePageId())!='Custom'):?> font: 400 48px/46px var(--title_font);
        <?php endif; ?> color: var(--title_color);
            margin: 0;
            text-transform: capitalize;
        }
        .side-images.tt-cap .container-custom article h3 {
            text-transform: capitalize;
        }
        .side-images .container-custom article h3 span,
        .side-images .container-custom article h3 a {
            display: block;
            margin: 10px 0 0;
            font: 600 16px/16px var(--paragraph_font);
            color: var(--paragraph_color);
            text-transform: uppercase;
        }
        .side-images .container-custom article a.button {
            font: 400 16px/19px var(--paragraph_font);
            margin: 0 auto 0 0;
            color: #fff;
            background: var(--second_color);
            text-transform: uppercase;
            padding: 18px 45px;
        }
        .side-images.btn_sec .container-custom article a.button {
            background: var(--second_color);
        }
        .side-images.btn_main .container-custom article a.button {
            background: var(--main_color);
        }
        .side-images .container-custom article a.button:hover {
            background: var(--main_color);
        }
        .side-images .container-custom article p {
        <?php if(get_field('global_font_family', get_homePageId())!='Custom'):?> font: 400 16px/28px var(--paragraph_font);
        <?php endif; ?> margin: 35px 0;
            color: var(--paragraph_color);
            line-height: 28px;
        }
        .side-images .container-custom article::after {
            content: '';
            position: absolute;
            top: calc(50% - 7px);
        }
        /*Slider*/
        .side-images .infoPart .item {
            padding: 1px 0;
        }
        .page-id-298 .side-images .infoPart .item p {
            margin-bottom: 0;
        }
        .side-images .infoPart .item p {
            margin: 25px 0;
            font: 400 18px/28px var(--paragraph_font);
            color: var(--paragraph_color);
        }
        .side-images .infoPart .slick-list {
            height: auto !important;
        }
        .side-images .infoPart .slick-dots {
            text-align: left;
            position: static !important;
        }
        .side-images .infoPart .slick-dots li {
            background: transparent;
            border: 2px solid #C5C5C5;
        }
        .side-images .infoPart .slick-dots li:hover, .side-images .infoPart .slick-dots li.slick-active {
            background: var(--second_color);
            border-color: var(--second_color);
        }
        .side-images .container-custom .infoPart a.sliderButton {
            padding: 18px 45px;
        }
        .side-images .imagePart .sliderSI.slick-slider .imaged.parallax {
            position: relative !important;
        }
        .side-images .imagePart .sliderSI {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }
        .side-images ul.slick-dots {
            margin-bottom: 2px;
        }
        /*parallax*/
        .side-images .imagePart .imaged.parallax {
            position: absolute;
            height: 150%;
            top: 0 !important;
            left: 0;
            width: 100%;
        }
        .side-images .imagePart .imaged,
        .side-images .imagePart .imaged img {
            top: 0 !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        /*Sides*/
        .side-images.Right .container-custom.Side {
            right: -25px;
        }
        .side-images.Right .container-custom {
            flex-direction: row-reverse;
        }
        .side-images.Right .container-custom.Side article {
            right: -25px;
        }
        .side-images.Right article::after {
            border-top: 14px solid transparent;
            border-bottom: 14px solid transparent;
            border-left: 14px solid #fff;
            left: 100%;
        }
        .side-images.Right .Centered article {
            width: calc(100% + 25px);
        }
        .side-images.Left .container-custom.Side {
            left: -25px;
        }
        .side-images.Left .container-custom.Side article {
            left: -25px;
        }
        .side-images.Left article::after {
            border-top: 14px solid transparent;
            border-bottom: 14px solid transparent;
            border-right: 14px solid #fff;
            right: 100%;
        }
        .side-images.Left .Centered article {
            width: calc(100% + 25px);
            left: -25px;
        }
        /************************ FIX ****************************/
        .side-images article ul {
            margin: 37px 0;
            padding-left: 17px;
        }
        .side-images article li {
            list-style-position: outside;
        }
        .side-images.property_page .container-custom {
            max-width: 1393px;
        }
        .side-images.property_page .infoPart {
            width: 53%;
        }
        .side-images .imagePart {
            width: 49.5%;
        }
        .side-images.property_page .container-custom article h3 {
            font: 700 32px/45px var(--title_font);
        }
        .side-images.property_page .container-custom article h3 span {
            font: 600 18px/22px var(--title_font);
            color: var(--main_color);
            text-transform: capitalize;
        }
        .side-images.property_page .container-custom article {
            padding: 90px 50px;
        }
        .side-images.property_page .container-custom article p {
            margin: 3px 0 30px 0;
        }
        .side-images.property_page .container-custom article p:nth-child(4) {
            margin-bottom: 0;
        }
        .side-images.property_page ul {
            margin-bottom: 25px;
            padding-left: 38px;
        }
        .side-images.property_page ul li {
            list-style: none;
            font: 400 16px/28px var(--paragraph_font);
            color: var(--paragraph_color);
            position: relative;
        }
        .side-images.property_page ul li:not(:last-child) {
            margin-bottom: 9px;
        }
        .side-images.property_page ul li:before {
            position: absolute;
            top: 14px;
            left: -18px;
            content: '\f00c';
            display: inline-block;
            font-family: FontAwesome;
            font-size: 12px;
            line-height: 1;
            pointer-events: none;
            transform: translateY(-50%);
            color: var(--main_color);
        }
        .side-images .imagePart .imaged.parallax {
            align-self: stretch;
            background-attachment: fixed;
            background-size: 50% 100vh;
            /*background-size: 50%;*/
            /*background-size: 1600px;*/
            background-repeat: no-repeat;
            background-position: left;
        }
        .side-images.property_page.Left .imagePart .imaged.parallax {
            background-position: left;
        }
        .side-images.property_page.Right .imagePart .imaged.parallax {
            background-position: right;
        }
        @media (max-width: 1100px) {
            .side-images .imagePart .imaged.parallax {
                background-position: center;
                background-size: cover;
                background-attachment: scroll;
            }
            .side-images.property_page.Left .imagePart .imaged.parallax {
                background-position: center;
                background-size: cover;
                background-attachment: scroll;
            }
            .side-images.property_page.Right .imagePart .imaged.parallax {
                background-position: center;
                background-size: cover;
                background-attachment: scroll;
            }
        }
        .side-images.Right .imagePart .imaged.parallax {
            background-position: right;
        }
        .side-images.Right .container-custom article a.button {
            background: var(--main_color);
        }
        .side-images.Right .container-custom article a.button:hover {
            background: var(--hover_color);
        }
        /************************ END FIX ****************************/
        /************************  FIX about ****************************/
        .side-images.about .container-custom article a.button {
            background: var(--main_color);
            padding: 16px 47px;
        }
        /************************ END FIX about ****************************/
         /**************************** FIX  pmp ********************************/

        .side-images.pmp .container-custom article p{
            margin: 35px 0 0;
        }
        .side-images.pmp .container-custom article a.button {
            margin-top: 35px;
        }
        .side-images.pmp .infoPart {
            padding: 30px 0 0;
        }
        .side-images.pmp .imagePart {
            max-height: 485px;
        }
        .side-images.pmp_1 .infoPart {
            padding: 45px 0 0;
        }
        .side-images.pmp_1 .imagePart {
            max-height: 485px;
        }
        @media only screen and (max-width: 1450px) and (min-width: 1199px) {
            .side-images .imagePart .imaged.parallax {

                 top: 0 !important;
                 background-repeat: no-repeat;
                 background-size: cover;
                 background-position: center center;
            }
        }
        @media only screen and (max-width: 1100px) and (min-width: 300px) {
            .side-images.pmp .imagePart .imaged.parallax {
                background-position: center;
                background-size: cover;

                background-attachment: fixed;
            }
        }
          /**************************** END  FIX pmp ****************************/
        /*Responsivness*//*Responsivness*//*Responsivness*/
        @media (max-width: 1100px) {
            .side-images .container-custom {
                flex-direction: column !important;
            }
            .side-images article::after {
                display: none;
            }
            .side-images {
                padding: 40px 15px;
            }
            .side-images .container-custom > div {
                width: 100%;
            }
            .side-images.property_page .infoPart {
                width: 100%;
            }
            .side-images.property_page .container-custom article {
                padding: 50px;
            }
            .side-images.property_page .container-custom article p:last-child {
                margin-bottom: 0;
            }
            .side-images .container-custom,
            .side-images .container-custom article {
                left: auto !important;
                right: auto !important;
                width: 100% !important;
            }
            .side-images article::after {
                border-left: 20px solid transparent !important;
                border-right: 20px solid transparent !important;
                border-top: 20px solid #fff !important;
                border-bottom: none !important;
                left: calc(50% - 20px) !important;
                right: auto !important;
                top: 100% !important;
            }
            .side-images .imagePart {
                height: 400px !important;
            }
            .side-images .infoPart {
                padding: 0 !important;
            }
            .side-images .infoPart article {
                box-shadow: 0px 10px 50px #0000001F;
                text-align: left;
                padding: 20px 20px 40px 20px;
                min-height: 0;
                background: #fff !important;
            }
            .side-images .infoPart {
                padding: 0 15px !important;
                margin-top: -15px;
            }
        }
        @media (max-width: 768px) {
            .side-images.property_page .container-custom article h3 {
                font: 700 26px/38px var(--title_font);
            }
            .side-images.property_page .container-custom article h3 span {
                font: 600 14px/14px var(--title_font);
            }
            .side-images .container-custom article h3 {
                font-size: 28px;
            }
            .side-images .container-custom article p {
                margin-top: 15px;
            }
        }
        @media (max-width: 450px) {
            .side-images .imagePart {
                height: 250px !important;
            }
            .side-images {
                padding: 40px 15px;
            }
            .side-images .container-custom article a.button {
                padding-left: 25px;
                padding-right: 25px;
                font-size: 14px;
            }
        }
        <?php endif;?>
    </style>
    <div class="container-custom <?php echo get_sub_field('section_position'); ?>">
        <div class="imagePart">
            <?php if (get_sub_field('content_type') == 'Single'): ?>
                <div class="imaged <?php if (get_sub_field('image_type') != 'Cover' && $iosDevice != 1): ?>parallax<?php endif; ?>" style="background-image: url('<?php echo get_sub_field('image'); ?>');">
                </div>
            <?php else: ?>
                <div class="sliderSI">
                    <?php $i = 0; ?>
                    <?php if (have_rows('slider_items')): ?>
                        <?php while (have_rows('slider_items')): the_row(); ?>
                            <?php if ($i == 0): ?>
                                <div class="imaged">
                                    <?php $image = get_sub_field('image'); ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </div>
                            <?php else: ?>
                                <div class="imaged">
                                    <?php $image = get_sub_field('image'); ?>
                                    <img src="" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </div>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div><!--End imagePart-->
        <div class="infoPart">
            <article>
                <?php if (get_sub_field('content_type') == 'Single'): ?>
                    <h3><?php echo get_sub_field('section_title'); ?></h3>
                    <?php echo get_sub_field('section_text'); ?>
                    <?php if (get_sub_field('button_link') != ''): ?>
                        <a href="<?php echo get_sub_field('button_link'); ?>" class="button"><?php echo get_sub_field('button_text'); ?></a>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="sliderArticle">
                        <?php if (have_rows('slider_items')): ?>
                            <?php while (have_rows('slider_items')): the_row(); ?>
                                <div class="item">
                                    <h3><?php echo get_sub_field('title'); ?></h3>
                                    <p><?php echo get_sub_field('text'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <a href="#" class="button sliderButton">Next <i class="fas fa-arrow-right"></i></a>
                <?php endif; ?>
            </article>
        </div><!--End infoPart-->
    </div><!--End container-custom-->
    <?php if (get_sub_field('content_type') != 'Single' && $slick < 2): ?>
        <?php $slick++; ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <?php endif; ?>
    <script>
        <?php if(get_sub_field('image_type') != 'Cover' && $iosDevice != 1):?>
        var currentSi<?php echo $sideImages;?> = jQuery('.side-images.si-<?php echo $sideImages;?> .imaged');

        function amountscrolled<?php echo $sideImages;?>(top, heiUnit) {
            var scrollTop = $(window).scrollTop() - top;
            heiWindow = 1.75 * window.innerHeight;
            var pctScrolled = Math.floor(scrollTop / heiWindow * 100);
            //alert(pctScrolled);
            var posTop = -pctScrolled / 2 + '%';
            //alert(posTop);
            currentSi<?php echo $sideImages;?>.css('top', posTop);
        }

        jQuery(window).scroll(function () {
            if (jQuery(window).scrollTop() > 0) {
                var stAppear = window.innerHeight - window.innerHeight / 4;
                var top = currentSi<?php echo $sideImages;?>.offset().top - stAppear;
                var top2 = top + 1.75 * window.innerHeight;
                if (jQuery(window).scrollTop() > top) {
                    //currentSi<?php echo $sideImages;?>.addClass('active');
                    //alert(top)
                    if (jQuery(window).scrollTop() < top2) {
                        amountscrolled<?php echo $sideImages;?>(top);
                    }
                }
            }
        });
        <?php endif;?>
        <?php if(get_sub_field('content_type') != 'Single'):?>
        jQuery(document).ready(function () {
            jQuery(".side-images.si-<?php echo $sideImages;?> .sliderSI").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                centerMode: false,
                arrows: false,
                infinite: true,
                draggable: true,
                asNavFor: '.side-images.si-<?php echo $sideImages;?> .sliderArticle',
                focusOnSelect: true
            });
            jQuery(".side-images.si-<?php echo $sideImages;?> .sliderArticle").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                centerMode: false,
                arrows: false,
                infinite: true,
                draggable: true,
                asNavFor: '.side-images.si-<?php echo $sideImages;?> .sliderSI',
                focusOnSelect: true
            });
            jQuery('.side-images.si-<?php echo $sideImages;?> .sliderSI').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                var img = jQuery(".side-images.si-<?php echo $sideImages;?> .sliderSI [data-slick-index='" + nextSlide + "'] img").attr('data-src');
                jQuery(".side-images.si-<?php echo $sideImages;?> .sliderSI [data-slick-index='" + nextSlide + "'] img").attr('src', img);
            });
            jQuery('.side-images.si-<?php echo $sideImages;?> .sliderButton').click(function (e) {
                e.preventDefault();
                jQuery(".side-images.si-<?php echo $sideImages;?> .sliderSI").slick('slickNext');
            });
        });/*End ready function*/
        <?php endif;?>
    </script>
</section>
