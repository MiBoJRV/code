<?php $faqDroper++; ?>
<section class="faqDroper <?php if (get_sub_field('faq_accordeon_section_2_colums') != 'no'): ?>masonryLines<?php endif; ?> FQ-<?php echo $faqDroper; ?> <?php echo get_sub_field('custom_class'); ?>">
    <?php if (get_sub_field('faq_accordeon_scroll_feature') == 'yes'): ?>
        <div class="categoryList">
            <ul>
                <?php if (have_rows('category_faq_accordeon')): ?>
                    <?php while (have_rows('category_faq_accordeon')): the_row(); ?>
                        <li><?php echo get_sub_field('category_faq_title'); ?></li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if (get_sub_field('faq_accordeon_section_2_colums') != 'float'): ?>
        <div class="questionList">
            <?php if (have_rows('category_faq_accordeon')): ?>
                <?php while (have_rows('category_faq_accordeon')): the_row(); ?>
                    <div class="questionCat">
                        <?php if (get_sub_field('category_faq_title') != ''): ?>
                            <h3 class="catTitle"><?php echo get_sub_field('category_faq_title'); ?></h3>
                        <?php endif; ?>
                        <ul class="drops <?php the_sub_field('faq_accordeon_section_custom_class'); ?>">
                            <?php if (have_rows('accordeon_repeater')): ?>
                                <?php while (have_rows('accordeon_repeater')): the_row(); ?>
                                    <li class="">
                                        <h5>
                                            <span class="question_text"><?php the_sub_field('accordeon_item_question'); ?></span><span class="open_btn"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        </h5>
                                        <article>
                                            <p><?php the_sub_field('accordeon_item_answer'); ?></p>
                                        </article>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div><!--End questionCat-->
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!--End questionList-->
    <?php else: ?>
        <div class="questionList floatItems">
            <div class="floatPart">
                <?php $float = 1; ?>
                <?php if (have_rows('category_faq_accordeon')): ?>
                    <?php while (have_rows('category_faq_accordeon')): the_row(); ?>
                        <?php if ($float % 2 == 0): ?>
                            <div class="questionCat">
                                <?php if (get_sub_field('category_faq_title') != ''): ?>
                                    <h3 class="catTitle"><?php echo get_sub_field('category_faq_title'); ?></h3>
                                <?php endif; ?>
                                <ul class="drops <?php the_sub_field('faq_accordeon_section_custom_class'); ?>">
                                    <?php if (have_rows('accordeon_repeater')): ?>
                                        <?php while (have_rows('accordeon_repeater')): the_row(); ?>
                                            <li class="">
                                                <h5><?php the_sub_field('accordeon_item_question'); ?>
                                                    <span><i class="fa fa-plus" aria-hidden="true"></i></span></h5>
                                                <article>
                                                    <p><?php the_sub_field('accordeon_item_answer'); ?></p>
                                                </article>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div><!--End questionCat-->
                        <?php endif; ?>
                        <?php $float++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!--End floatPart-->
            <div class="floatPart">
                <?php $float = 1; ?>
                <?php if (have_rows('category_faq_accordeon')): ?>
                    <?php while (have_rows('category_faq_accordeon')): the_row(); ?>
                        <?php if ($float % 2 == 0): ?>
                        <?php else: ?>
                            <div class="questionCat">
                                <?php if (get_sub_field('category_faq_title') != ''): ?>
                                    <h3 class="catTitle"><?php echo get_sub_field('category_faq_title'); ?></h3>
                                <?php endif; ?>
                                <ul class="drops <?php the_sub_field('faq_accordeon_section_custom_class'); ?>">
                                    <?php if (have_rows('accordeon_repeater')): ?>
                                        <?php while (have_rows('accordeon_repeater')): the_row(); ?>
                                            <li class="">
                                                <h5><?php the_sub_field('accordeon_item_question'); ?>
                                                    <span><i class="fa fa-plus" aria-hidden="true"></i></span></h5>
                                                <article>
                                                    <p><?php the_sub_field('accordeon_item_answer'); ?></p>
                                                </article>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div><!--End questionCat-->
                        <?php endif; ?>
                        <?php $float++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!--End floatPart-->
        </div><!--End questionList-->
    <?php endif; ?>
    <style>
        /*drops*/
        <?php if(get_sub_field('customize_font_size')=='yes'): ?>
        .FQ-<?php echo $faqDroper;?> .drops h5 {
            font-size: <?php the_sub_field('question_font_fize'); ?>;
        }
        .FQ-<?php echo $faqDroper;?> .drops article {
            font-size: <?php the_sub_field('text_font_size'); ?>;
        }
        <?php endif; ?>
        <?php if($faqDroper < 2):?>
        .page-id-309 .container {
            max-width: 1576px;
        }
        .questionCat {
            max-width: 1400px;
            margin: 0 auto;
            /*padding-bottom: 40px;*/
        }
        .topBanner > img {
             opacity: 0.65;
        }
        .drops {
            padding: 0;
        }
        .faqDroper .questionList:before,
        .faqDroper .questionList:after {
            content: "";
            display: block;
            height: 0;
            overflow: hidden;
            clear: both;
        }
        .drops .questionList {
            position: relative;
        }
        .faqDroper .categoryList ul {
            list-style: none;
            text-align: center;
            padding: 10px 20px;
        }
        .faqDroper .categoryList ul li {
            display: inline-block;
            cursor: pointer;
            background: var(--main_color);
            color: #fff;
            padding: 10px 35px;
            text-transform: uppercase;
            margin: 7px 5px;
        }
        .faqDroper .categoryList ul li:hover {
            background: var(--hover_color);
            color: #fff;
        }
        .faqDroper .catTitle {
            margin: 0;
            padding: 0 0 20px;
        }
        .drops article {
            display: none;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 3px 30px rgba(0, 0, 0, 0.16);
            border-radius: 0 0 5px 5px;
            font: 400 16px/28px var(--body_font);
            letter-spacing: 0;
            color: rgba(41, 41, 41, 0.75);
        }
        .drops li {
            background: rgba(135, 135, 135, 0.15);
            transition: all 0.3s;
        }
        .drops h5 {
            margin-bottom: 0;
            color: rgba(41, 41, 41, 0.5);
            padding: 16px 40px 16px 15px;
            cursor: pointer;
            position: relative;
            font-family: var(--body_font);
            font-weight: 500;
            font-size: 16px;
            text-transform: capitalize;
        }
        .drops h5 span.open_btn {
            transition: all 0.3s;
            display: inline-block;
            position: absolute;
            top: 50%;
            right: 15px;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            font-size: 18px;
            line-height: 0;
            padding: 2px 3px;
            border: 3px solid #878787;
            border-radius: 3px;
            vertical-align: middle;
            color: #878787;
        }
        .drops li.active h5 {
            color: #fff;
            font-weight: 500;
            letter-spacing: 0;
        }
        .drops li.active h5 span {
            border-color: #fff;
            color: #FFF;
        }
        .drops h5 span.open_btn i {
            vertical-align: middle;
        }
        .drops .active h5 span {
            transform-origin: 50% 25%;
            transform: rotate(180deg);
        }
        .drops li:hover, .drops li.active {
            background: var(--second_color);
        }
        .drops li:hover h5 {
            color: #fff;
        }
        .drops li:hover h5 span {
            border-color: #fff;
            color: #fff;
        }
        .drops li {
            list-style: none !important;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        /*masonryLines*/
        .faqDroper.masonryLines .questionCat {
            float: left;
            width: calc(50% - 30px);
            margin: 15px 15px 30px;
        }
        /*floatPart*/
        .faqDroper.masonryLines .floatPart {
            width: 50%;
            float: left;
        }
        .faqDroper.masonryLines .floatPart .questionCat {
            float: none !important;
            width: calc(100% - 30px);
        }
        /*Custom Classes*/
        .paddings.questionCat {
            padding: 40px 20px;
        }
        .vacation-box {
            position: relative;
            overflow: hidden;
            background: #000;
            margin-top: 30px;
        }
        .vacation-box img {
            height: 100%;
            min-height: 500px;
            width: 100%;
            object-fit: cover;
            transition: 0.3s;
            opacity: 0.65;
        }
        .vacation-box:hover img {
            transform: scale(1.1);
        }
        .vacation-box .box-link {
            position: absolute;
            width: 100%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .vacation-box h3 {
            text-align: center;
            padding-left: 15px;
            padding-right: 15px;
            font: 500 32px/43px Futura Medium;
            letter-spacing: 0.8px;
            color: rgba(255, 255, 255, 1);
            text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6);
            text-transform: uppercase;
        }
        .vacation-box p {
            color: #fff;
            text-transform: uppercase;
            padding: 15px 14px;
            background: transparent;
            border: 2px solid #fff;
            max-width: 200px;
            margin: 15px auto 0 auto;
            letter-spacing: .1em;
            transition: .3s;
            font: 500 16px/23px Futura Medium;
        }
        .vacation-box p:hover {
            background: var(--hover_color);
        }
        .vacation-box:before {
            display: block;
            content: '';
            width: calc(100% - 30px);
            height: calc(100% - 30px);
            left: 10px;
            top: 15px;
            margin: 0 6px;
            position: absolute;
            border: 1px solid #fff;
        }
        /*Responsivness*//*Responsivness*/
        @media (max-width: 1025px) {
            .faqDroper.masonryLines .questionCat {
                width: 100% !important;
                margin: 0 0 20px;
            }
            .faqDroper.masonryLines .floatPart {
                width: 100%;
                float: none;
            }
        }
        .contact-sidebar {
            display: none !important;
        }
        .vacation-box {
            margin-top: 10px;
        }
        /**************************** FIX  ********************************/
        .drops h5 {
            font: 400 18px/22px var(--paragraph_font);
        }
        .drops article {
            font: 400 18px/28px var(--paragraph_font);
            color: var(--paragraph_color);
        }
        /**************************** END  FIX  ****************************/
        <?php endif; ?>
    </style>
    <?php if (get_sub_field('faq_accordeon_section_2_colums') == 'masonry' && $masonry < 2): ?>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <?php endif; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {

            <?php if(get_sub_field('faq_accordeon_section_2_colums') == 'masonry'): ?>
            if (jQuery(window).innerWidth() > 1025) {
                function masonryFQ<?php echo $faqDroper;?>() {
                    var $faqGrid = jQuery('.FQ-<?php echo $faqDroper;?> .questionList').masonry({});
                }

                setTimeout(function () {
                    masonryFQ<?php echo $faqDroper;?>();
                }, 100);
            }

            <?php endif; ?>

            jQuery('.FQ-<?php echo $faqDroper;?> .drops h5').click(function () {
                jQuery('.FQ-<?php echo $faqDroper;?> .drops h5 .open_btn').empty().html('<i class="fa fa-plus" aria-hidden="true"></i>');
                var hzCL = jQuery(this).parent().hasClass('active');
                jQuery('.FQ-<?php echo $faqDroper;?> .drops .active article').slideUp(300);
                jQuery('.FQ-<?php echo $faqDroper;?> .drops > li').removeClass('active');
                //alert(hzCL)
                if (hzCL == false) {
                    jQuery(this).parent().addClass('active');
                    jQuery(this).parent().find('article').slideDown(300);
                    jQuery(this).find('.open_btn').empty().html('<i class="fa fa-minus" aria-hidden="true"></i>');
                }
            });
            jQuery('.FQ-<?php echo $faqDroper;?> .drops li:first').addClass('active');
            jQuery('.FQ-<?php echo $faqDroper;?> .drops .active article').slideDown(4);
            jQuery('.FQ-<?php echo $faqDroper;?> .drops li.active h5 .open_btn').empty().html('<i class="fa fa-minus" aria-hidden="true"></i>');


            <?php if(get_sub_field('faq_accordeon_scroll_feature') == 'yes'): ?>
            /*scroll feature*/
            jQuery('.faqDroper.FQ-<?php echo $faqDroper;?> .categoryList ul li').click(function () {
                var catTitle = jQuery(this).text();
                jQuery('.FQ-<?php echo $faqDroper;?> .questionCat > h3').each(function () {
                    var hzTX = jQuery(this).text();
                    if (catTitle == hzTX) {
                        var topik = jQuery(this).offset().top - jQuery('.fixing').height() - jQuery('#wpadminbar').height() - 25;
                        jQuery('body,html').animate({scrollTop: topik}, 600);
                    }
                })
            });
            <?php endif; ?>
            /*masonry for 2 colums option*/
        })
    </script>
</section><!--End faqDroper-->









