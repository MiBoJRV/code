<?php $reviews++; ?>
<?php $reviews_section_type = get_sub_field('reviews_slider_layouts_type'); ?>
<?php if ($reviews_section_type == 'Slider'): ?>
    <?php $slick++; ?>
<?php endif; ?>
<?php if ($masonry < 2 && $reviews_section_type == 'Masonry'): ?>
    <?php $masonry++; ?>
<?php endif; ?>
<?php if ($imageLoader < 2 && $reviews_section_type == 'Masonry'): ?>
    <?php $imageLoader++; ?>
<?php endif; ?>
<div class="reviews <?php if (get_sub_field('move_section_up') == "up"): ?>to_up<?php endif ?> reviews-<?php echo $reviews; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="reviews-box">
        <?php $reviews_section_type = get_sub_field('reviews_slider_layouts_type'); ?>
        <?php $section_title = get_sub_field('reviews_slider_title'); ?>
        <?php if (get_sub_field('customize_reviews_slider') == 'yes'): ?>
        <?php if ($section_title != ''): ?>
            <h2 class="boxtitle"><?php echo $section_title; ?></h2>
        <?php endif ?>
        <?php if ($reviews_section_type == 'Slider'): ?>
        <?php if (get_field('global_sliders_arrows', get_homePageId()) == 'Round'): ?>
        <div class="reviews-slider round">
            <?php elseif (get_field('global_sliders_arrows', get_homePageId()) == 'Big Arrows'): ?>
            <div class="reviews-slider big_arrows">
                <?php endif ?>
                <?php if (have_rows('reviews_slider_repeater')): ?>
                    <?php while (have_rows('reviews_slider_repeater')): the_row(); ?>
                        <div class="reviews-block">
                            <div class="reviews-block-user">
                                <div class="reviews-block-user-img">
                                    <img src="<?php echo get_sub_field('reviews_slider_image'); ?>" alt="#">
                                </div>
                                <p class="rew_name"><?php echo get_sub_field('reviews_slider_name'); ?></p>
                                <p class="rew_pos"><span><?php echo get_sub_field('reviews_slider_position'); ?></span></p>
                            </div>
                            <div class="reviews-block-txt">
                                <p><?php echo get_sub_field('reviews_slider_review_text'); ?></p>
                            </div>
                        </div><!--End reviews-block -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- end slider-->
            <?php elseif ($reviews_section_type == 'List'): ?>
                <div class="reviews-list">
                    <?php if (have_rows('reviews_list_repeater')): ?>
                        <?php while (have_rows('reviews_list_repeater')): the_row(); ?>
                            <div class="reviews-block">
                                <h3>
                                    <span class="first-quote"><img src="<?php echo get_template_directory_uri(); ?>/images/quote-2.svg" alt=""></span>
                                    <?php the_sub_field('reviews_list_item_title'); ?>
                                    <span class="last-quote"><img src="<?php echo get_template_directory_uri(); ?>/images/quote-2.svg" alt=""></span>
                                </h3>
                                <p><?php the_sub_field('reviews_list_item_text'); ?></p>
                                <hr>
                                <div class="bottom_box">
                                    <div class="author_date">
                                        <span class="author">By: <?php the_sub_field('reviews_list_item_author'); ?></span>
                                        <span class="date"><?php the_sub_field('reviews_list_item_date'); ?></span>
                                    </div>
                                    <div class="stars">
                                        <span style="font-size: 0; height: 0;"><?php the_sub_field('reviews_list_item_stars'); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php elseif ($reviews_section_type == 'Masonry'): ?>
                <div class="reviews-masonry">
                    <?php if (have_rows('reviews_masonry_repeater')): ?>
                        <?php while (have_rows('reviews_masonry_repeater')): the_row(); ?>
                            <div class="reviews-block">
                                <h4>
                                    <?php the_sub_field('reviews_masonsy_item_title'); ?>
                                </h4>
                                <p><?php the_sub_field('reviews_masonry_item_text'); ?></p>
                                <div class="bottom_box">
                                    <div class="author_date">
                                        <span class="author"><?php the_sub_field('reviews_masonry_item_author'); ?></span>
                                        |
                                        <span class="date"><?php the_sub_field('reviews_masonry_item_date'); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endif ?>
            <?php else: ?>
        <?php if (have_rows('global_content', get_homePageId())):
        while (have_rows('global_content', get_homePageId())) :
        the_row();
        if (get_row_layout() == 'global_reviews_slider'): ?>
        <?php if ($section_title != ''): ?>
            <h2 class="boxtitle"><?php echo $section_title; ?></h2>
        <?php endif ?>
        <?php if ($reviews_section_type == 'Slider'): ?>
        <?php if (get_field('global_sliders_arrows', get_homePageId()) == 'Round'): ?>
            <div class="reviews-slider round">
                <?php elseif (get_field('global_sliders_arrows', get_homePageId()) == 'Big Arrows'): ?>
                <div class="reviews-slider big_arrows">
                    <?php endif ?>
                    <?php if (have_rows('global_reviews_slider_repeater')): ?>
                        <?php while (have_rows('global_reviews_slider_repeater')): the_row(); ?>
                            <div class="reviews-block">
                                <div class="reviews-block-user">
                                    <div class="reviews-block-user-img">
                                        <img src="<?php echo get_sub_field('global_reviews_slider_image'); ?>" alt="#">
                                    </div>
                                    <p><?php echo get_sub_field('global_reviews_author_name'); ?></p>
                                    <p><span><?php echo get_sub_field('global_reviews_author_position'); ?></span></p>
                                </div>
                                <div class="reviews-block-txt">
                                    <p><?php echo get_sub_field('global_reviews_slider_review_text'); ?></p>
                                </div>
                            </div><!--End reviews-block -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- end slider-->
                <?php elseif ($reviews_section_type == 'List'): ?>
                    <div class="reviews-list">
                        <?php if (have_rows('global_list_repeater')): ?>
                            <?php while (have_rows('global_list_repeater')): the_row(); ?>
                                <div class="reviews-block">
                                    <h3>
                                        <span class="first-quote"><img src="<?php echo get_template_directory_uri(); ?>/images/quote-2.svg" alt=""></span>
                                        <?php the_sub_field('list_item_title'); ?>
                                        <span class="last-quote"><img src="<?php echo get_template_directory_uri(); ?>/images/quote-2.svg" alt=""></span>
                                    </h3>
                                    <p><?php the_sub_field('list_item_text'); ?></p>
                                    <hr>
                                    <div class="bottom_box">
                                        <div class="author_date">
                                            <span class="author">By: <?php the_sub_field('list_item_author'); ?></span>
                                            <span class="date"><?php the_sub_field('list_item_date'); ?></span>
                                        </div>
                                        <div class="stars">
                                            <span style="font-size: 0; height: 0;"><?php the_sub_field('list_item_stars_number'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php elseif ($reviews_section_type == 'Masonry'): ?>
                    <div class="reviews-masonry">
                        <?php if (have_rows('global_masonry_repeater')): ?>
                            <?php while (have_rows('global_masonry_repeater')): the_row(); ?>
                                <div class="reviews-block">
                                    <h4>
                                        <?php the_sub_field('masonry_item_title'); ?>
                                    </h4>
                                    <p><?php the_sub_field('masonry_item_text'); ?></p>
                                    <div class="bottom_box">
                                        <div class="author_date">
                                            <span class="author"><?php the_sub_field('masonry_item_author'); ?></span> |
                                            <span class="date"><?php the_sub_field('masonry_item_date'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endif ?>
                <?php endif;
                endwhile;
                endif; ?>
                <?php endif; ?>
            </div><!--End reviews-box -->
            <style>
                /*reviews*/
                <?php if(get_sub_field('customize_font_size')=='yes'): ?>
                .reviews.reviews-<?php echo $reviews;?> .reviews-box h2.boxtitle {
                    font-size: <?php the_sub_field('section_title_font_size'); ?>;
                }
                .reviews.reviews-<?php echo $reviews;?> .reviews-block-user p {
                    font-size: <?php the_sub_field('author_name_font_size'); ?>;
                }
                .reviews.reviews-<?php echo $reviews;?> .reviews-block-user p span {
                    font-size: <?php the_sub_field('author_position_font_size'); ?>;
                }
                .reviews.reviews-<?php echo $reviews;?> .reviews-block-txt p {
                    font-size: <?php the_sub_field('review_font_size'); ?>;
                }
                <?php elseif($reviews < 2): ?>
                .reviews .reviews-block-user p {
                    font-size: 22px;
                }
                .reviews .reviews-block-user p span {
                    font-size: 14px;
                }
                <?php endif; ?>
                .reviews.reviews-<?php echo $reviews;?> {
                    background: <?php if(get_sub_field('customize_reviews_slider')=='yes'): ?> <?php echo get_sub_field('reviews_slider_background'); ?> <?php else: ?> <?php echo get_sub_field('global_reviews_slider_background'); ?> <?php endif;?>;
                }
                <?php if($reviews < 2):?>
                /*Basic Styles*/
                .reviews {
                    padding: 60px;
                    text-align: center;
                }
                .reviews.to_up {
                    padding-top: 0 !important;
                }
                .reviews .reviews-box {
                    max-width: 1390px;
                    margin: 0 auto;
                }
                .reviews.to_up .reviews-box {
                    transform: translateY(-50px);
                }
                .reviews .reviews-box h2.boxtitle {
                    margin-bottom: 60px;
                    text-align: center;
                    color: #4A4A4A;
                }
                /*Slider*/
                .reviews .slick-slider .slick-track, .reviews .slick-slider .slick-list {
                    opacity: 1;
                }
                .reviews .reviews-slider .reviews-block {
                    margin: 30px 18px;
                    filter: grayscale(100%);
                    opacity: 0.35;
                    /*max-width: 415px;*/
                    padding: 35px;
                    box-sizing: border-box;
                    box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.2);
                    transition: all .2s ease-out;
                }
                .reviews-slider .reviews-block.slick-center {
                    transform: scale(1.05);
                    filter: grayscale(0);
                    opacity: 1;
                    background: var(--second_color);

                }
                .reviews .round .slick-prev, .reviews .round .slick-next {
                    background-color: var(--second_color) !important;
                }

                .reviews .round .slick-prev:hover, .reviews .round .slick-next:hover {
                    background: var(--hover_color);
                }
                .reviews .reviews-slider .reviews-block-user {
                    margin-bottom: 30px;
                }
                .reviews .reviews-slider .reviews-block-user-img {
                    position: relative;
                    background: #404040;
                    width: 80px;
                    height: 80px;
                    margin: 0 auto 18px;
                    border-radius: 50%;
                    box-sizing: border-box;
                }

                .reviews .reviews-slider .reviews-block-user-img::before {
                    content: ' ';
                    position: absolute;
                    background-image: url("/wp-content/themes/BizcorLuxury/images/home-page-images/quote.png");
                    transform: rotate(180deg);
                    height: 42px;
                    width: 61px;
                    top: 20px;
                    left: -150%;
                }
                .reviews .reviews-slider .reviews-block-user-img::after {
                    content: ' ';
                    position: absolute;
                    background-image: url("/wp-content/themes/BizcorLuxury/images/home-page-images/quote.png");
                    height: 42px;
                    width: 61px;
                    top: 20px;
                    right: -150%;
                }
                .reviews .reviews-slider .slick-current .reviews-block-user-img::before {
                    content: ' ';
                    position: absolute;
                    background-image: url("/wp-content/themes/BizcorLuxury/images/home-page-images/quote-1.svg");
                    transform: rotate(0deg);
                    height: 42px;
                    width: 58px;
                    top: 20px;
                    left: -150%;
                }
                .reviews .reviews-slider .slick-current .reviews-block-user-img::after {
                    content: ' ';
                    position: absolute;
                    background-image: url("/wp-content/themes/BizcorLuxury/images/home-page-images/quote-1.svg");
                    height: 42px;
                    width: 58px;
                    top: 20px;
                    right: -150%;
                    transform: rotate(180deg);
                }
                .reviews .reviews-slider .reviews-block-user-img img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-radius: 50%;
                    overflow: hidden;
                }
                /*End Slider*/
                /*List*/
                .reviews .reviews-list {
                    max-width: 950px;
                    margin: 0 auto;
                }
                .reviews .reviews-list .reviews-block {
                    width: 100%;
                    margin-bottom: 20px;
                    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
                    border-radius: 3px;
                    padding: 30px;
                    position: relative;
                    text-align: left;
                }
                .reviews .reviews-list .reviews-block h3 {
                    position: relative;
                    margin-top: 0;
                    margin-bottom: 20px;
                    padding-right: 50px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }
                .reviews .reviews-list .reviews-block h3 .first-quote {
                    margin-right: 15px;
                }
                .reviews .reviews-list .reviews-block h3 .last-quote {
                    position: absolute;
                    top: -3px;
                    right: 0;
                }
                .reviews .reviews-list .reviews-block h3 .last-quote img {
                    transform-origin: center center;
                    transform: rotate(180deg);
                }
                .reviews .reviews-list .reviews-block .bottom_box {
                    display: flex;
                    justify-content: space-between;
                }
                .reviews .reviews-list .reviews-block .bottom_box .author {
                    padding-right: 10px;
                }
                .reviews .reviews-list .reviews-block .bottom_box .date {
                    font-weight: 600;
                }
                .reviews .reviews-list .reviews-block .bottom_box .stars {
                    max-width: 103px;
                    white-space: nowrap;
                    /* overflow: hidden;*/
                }
                .reviews .reviews-list .reviews-block .bottom_box .stars i {
                    font-size: 18px;
                    color: var(--main_color);
                }
                .reviews .reviews-list .reviews-block .bottom_box .stars img {
                    width: 18px;
                }
                /*End List*/
                /*Masonry*/
                .reviews .reviews-masonry {
                    position: relative;
                    max-width: 1170px;
                    margin: 0 auto;
                    text-align: left;
                }
                .reviews .reviews-masonry .reviews-block {
                    width: calc(100% / 3 - 30px);
                    padding: 30px;
                    background: #fff;
                    box-shadow: 0 0 40px rgba(0, 0, 0, .13);
                    margin-bottom: 30px;
                    border-radius: 5px;
                    overflow: hidden;
                    transition: transform .4s;
                }
                .reviews .reviews-masonry .reviews-block:hover {
                    transform: translateY(-5px);
                    color: #fff;
                }
                .reviews .reviews-masonry .reviews-block::before {
                    content: '';
                    position: absolute;
                    top: 3px;
                    left: 3px;
                    right: 3px;
                    bottom: 3px;
                    background: linear-gradient(to bottom, #23BE9B, #187D66);
                    border-radius: 5px;
                    opacity: 0;
                    transition: .4s;
                    z-index: -1;
                }
                .reviews .reviews-masonry .reviews-block:hover::before {
                    opacity: 1;
                }
                .reviews .reviews-masonry .reviews-block::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 7px;
                    background: var(--main_color);
                    transform-origin: center;
                    transition: .4s;
                }
                .reviews .reviews-masonry .reviews-block:hover::after {
                    transform: scaleX(0);
                }
                .reviews .reviews-masonry .reviews-block h4,
                .reviews .reviews-masonry .reviews-block p {
                    margin-bottom: 20px;
                    transition: color .4s;
                }
                .reviews .reviews-masonry .reviews-block p {
                    line-height: 1.6;
                }
                .reviews .reviews-masonry .reviews-block h4::before {
                    content: '';
                    position: absolute;
                    top: 10px;
                    left: 10px;
                    width: 40px;
                    height: 30px;
                    background: url('<?php echo get_template_directory_uri(); ?>/images/quote-1.svg') center no-repeat;
                    background-size: contain;
                    transform-origin: center;
                    transform: translateX(-150px) rotateY(180deg);
                    transition: .4s;
                    /*z-index: -1;*/
                }
                .reviews .reviews-masonry .reviews-block:hover h4::before {
                    transform: translateX(0px) rotateY(180deg);
                }
                .reviews .reviews-masonry .reviews-block h4::after {
                    content: '';
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    width: 40px;
                    height: 30px;
                    background: url('<?php echo get_template_directory_uri(); ?>/images/quote-1.svg') center no-repeat;
                    background-size: contain;
                    transform-origin: center;
                    transform: translateX(150px);
                    transition: .4s;
                }
                .reviews .reviews-masonry .reviews-block:hover h4::after {
                    transform: translateX(0px);
                }
                .reviews .reviews-masonry .reviews-block .author {
                    font-weight: 600;
                }
                /*End Masonry*/
                .reviews .reviews-block-user p {
                    color: rgba(41, 41, 41, 1);

                }


                <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?> font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_3")[0]?>;
                <?php else: ?> font-family: var(--original_font);
                <?php endif ?>
                }
                .reviews .reviews-block-user p span {
                <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?> font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
                <?php else: ?> font-family: 'Montserrat';
                <?php endif ?> color: #FFF;
                }
                .reviews .reviews-block-user p {
                    font: 400 24px/28px var(--title_font);
                }
                .reviews .reviews-block-user p span {
                    font: 400 16px/22px var(--paragraph_font);
                }
                .reviews .reviews-block-user .rew_pos {
                    margin: 0;
                    text-transform: capitalize;
                }
                .reviews .reviews-block-user .rew_name {
                    margin: 15px 0 0;
                    text-transform: capitalize;
                }
                .reviews .reviews-block-txt p {
                    line-height: 27px;
                    text-align: left;
                    margin: 0;
                }
                .reviews-slider .reviews-block.slick-center .reviews-block-txt p {
                    color: rgba(255, 255, 255, 0.75);
                }
                .reviews-slider .reviews-block.slick-center .rew_name {
                    color: #FFF;
                }
                .reviews-slider .reviews-block.slick-center .rew_pos {
                    color: #FFF;
                }
                /*.round .slick-prev {*/
                /*    transform: translateX(-10%) !important;*/
                /*}*/
                /*.round .slick-next {*/
                /*    transform: translateX(-20%) !important;*/
                /*}*/
                .reviews-slider .round .slick-prev {
                    left: 43px !important;
                }
                .reviews-slider .round .slick-next {
                    right: 43px !important;
                }
                /**************************** FIX Height .reviews-block-txt ********************************/
                /*.reviews-slider .reviews-block.slick-center .reviews-block-txt  {*/
                /*    max-height: 200px;*/
                /*}*/
                @media only screen and (max-width: 1920px) and (min-width: 200px) {
                    .reviews .reviews-block-txt {
                        max-height: 200px!important;
                        overflow-x: hidden;
                    }
                }
                .reviews .reviews-block-txt {
                    scrollbar-width: thin;
                }
                .reviews .reviews-block-txt::-webkit-scrollbar {
                    width: 1px;

                }
                .reviews .reviews-block-txt::-webkit-scrollbar-track {
                    /*background: #46875d;*/
                }
                .reviews .reviews-block-txt::-webkit-scrollbar-thumb {
                    background: #FFF;
                    width: 10px;
                }
                /**************************** END  FIX Height .reviews-block-txt ****************************/
                /*Responsivness*//*Responsivness*/
                @media screen and (max-width: 1200px) {
                    .reviews .reviews-slider .reviews-block-user-img::before {
                        left: -100%;
                    }
                    .reviews .reviews-slider .reviews-block-user-img::after {
                        right: -100%;
                    }
                    .reviews-slider {
                        max-width: 70%;
                        margin: 0 auto;
                    }
                    .reviews-slider .slick-list {
                        overflow: visible;
                    }
                    .reviews {
                        overflow: hidden;
                    }
                    .reviews .reviews-slider .reviews-block {
                        max-width: none;
                    }
                    .reviews-slider .round .slick-next {
                        right: -7px !important;
                    }
                    .reviews-slider .round .slick-prev {
                        left: -7px !important;
                    }
                }
                @media screen and (max-width: 991px) {
                    .reviews {
                        padding: 50px 60px;
                    }
                    .reviews .reviews-masonry .reviews-block {
                        width: calc(50% - 30px);
                    }
                }
                @media screen and (max-width: 767px) {
                    .reviews .reviews-box h2.boxtitle {
                        margin-bottom: 30px;
                    }
                    .reviews {
                        padding: 80px 15px;
                    }
                    .reviews .reviews-block {
                        margin: 5px 0;
                        max-width: 500px;
                    }
                    .reviews-block.slick-center {
                        transform: none;
                    }
                    .reviews .reviews-list .reviews-block h3 {
                        font-size: 26px;
                    }
                    .reviews .reviews-list .reviews-block h3 > span {
                        display: none;
                    }
                    .reviews .round button.slick-next,
                    .reviews .round button.slick-prev {
                        width: 50px;
                        height: 50px;
                        background-color: var(--main_color);
                        background-image: url(/wp-content/uploads/2020/04/right-arrow-chevron.png);
                        background-size: 20px;
                        background-position: center;
                        background-repeat: no-repeat;
                        border-radius: 100%;
                        top: auto !important;
                        bottom: -60px;
                        transform: none;
                    }
                    .reviews .round button.slick-next img,
                    .reviews .round button.slick-prev img {
                        opacity: 0;
                    }
                    .reviews .round button.slick-next {
                        right: calc(50% - 58px) !important;
                    }
                    .reviews .round button.slick-prev {
                        left: calc(50% - 58px) !important;
                        transform: rotatez(180deg);
                    }
                    .reviews-slider {
                        max-width: none;
                    }
                    .reviews .reviews-slider .reviews-block {
                        padding-right: 25px;
                        padding-left: 25px;
                        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
                    }
                    /*.reviews .reviews-block-txt {*/
                    /*    height: auto !important;*/
                    /*}*/
                    /*.round .slick-next {*/
                    /*    right: 30px !important;*/
                    /*}*/
                    /*.round .slick-prev {*/
                    /*    left: 30px !important;*/
                    /*}*/
                }
                @media screen and (max-width: 650px) {
                    .reviews .reviews-masonry .reviews-block {
                        width: 100%;
                        max-width: none;
                        margin: 0 0 15px;
                        padding: 20px;
                    }
                }
                @media screen and (max-width: 480px) {
                    .reviews-slider {
                        max-width: 100%;
                    }
                }
                <?php endif; ?>
            </style>
            <?php if ($reviews_section_type == 'Slider' && $slick < 2): ?>
                <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
            <?php endif; ?>
            <?php if ($masonry < 2 && $reviews_section_type == 'Masonry'): ?>
                <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
            <?php endif; ?>
            <?php if ($imageLoader < 2 && $reviews_section_type == 'Masonry'): ?>
                <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
            <?php endif; ?>
            <script>
                <?php if($reviews_section_type == 'Slider'):?>
                if (jQuery('.reviews.reviews-<?php echo $reviews;?> .reviews-slider').hasClass('round')) {
                    var prevArr = '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img style="transform: rotate(180deg);" src="/wp-content/themes/BizcorLuxury/images/home-page-images/down-arrow-white.png" alt="arrow"/></button>';
                    var nextArr = '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><img src="/wp-content/themes/BizcorLuxury/images/home-page-images/down-arrow-white.png" alt="arrow"/></button>';
                } else if (jQuery('.reviews-slider').hasClass('big_arrows')) {
                    var prevArr = '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img style="transform: rotate(180deg);" src="/wp-content/themes/BizcorLuxury/images/down-arrow.png" alt="arrow"/></button>';
                    var nextArr = '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><img src="/wp-content/themes/BizcorLuxury/images/down-arrow.png" alt="arrow"/></button>';
                }
                jQuery(document).ready(function () {
                    jQuery('.reviews.reviews-<?php echo $reviews;?> .reviews-slider').slick({
                        centerMode: true,
                        centerPadding: '60px',
                        prevArrow: prevArr,
                        nextArrow: nextArr,
                        slidesToShow: 3,
                        responsive: [
                            {
                                breakpoint: 1200,
                                settings: {
                                    centerMode: true,
                                    centerPadding: '40px',
                                    slidesToShow: 1
                                }
                            }
                        ]
                    });
                })
                jQuery(window).load(function () {
                    function lineReviews<?php echo $reviews;?>(heiLine) {
                        var highest = 0;
                        jQuery(heiLine).each(function () {
                            var currentHei = jQuery(this).height();
                            if (currentHei > highest) {
                                highest = currentHei;
                            }
                        });
                        jQuery(heiLine).height(highest);
                    }

                    lineReviews<?php echo $reviews;?>('.reviews.reviews-<?php echo $reviews;?> .reviews-slider .reviews-block-txt');

                    jQuery(window).resize(function () {

                        jQuery('.reviews-<?php echo $reviews;?> .reviews-slider .reviews-block-txt').attr('style', '');
                        lineReviews<?php echo $reviews;?>('.reviews.reviews-<?php echo $reviews;?> .reviews-slider .reviews-block-txt');
                    });/*End resize function*/
                });/*End load function*/
                <?php endif;?>

                <?php if($reviews_section_type == 'List'):?>
                jQuery('.reviews.reviews-<?php echo $reviews;?> .reviews-list .reviews-block').each(function () {
                    var sumIn = jQuery(this).find('.stars span').text();
                    var pointNum = parseFloat(sumIn);
                    /*var star = '<i class="fas fa-star"></i>';
                    var halfStar = '<i class="fa fa-star-half-alt"></i>';*/
                    var star = '<img src="/wp-content/themes/BizcorLuxury/images/star1.svg"/>';
                    var halfStar = '<img src="/wp-content/themes/BizcorLuxury/images/half-star.svg"/>';
                    var twoSum = pointNum - 0.1;
                    var numberStar = twoSum.toFixed();
                    var numberToString = sumIn.length;
                    for (var i = 0; i < numberStar; i++) {
                        jQuery(this).find('.stars').append(star);
                    }
                    if (numberToString > 2) {
                        jQuery(this).find('.stars').append(halfStar);
                    }
                })
                <?php endif;?>

                <?php if($reviews_section_type == 'Masonry'):?>
                function reviewsMasonry<?php echo $reviews;?>() {
                    // init Masonry
                    var $reviewGrid = jQuery('.reviews.reviews-<?php echo $reviews;?> .reviews-masonry').masonry({
                        itemSelector: '.reviews.reviews-<?php echo $reviews;?> .reviews-masonry .reviews-block',
                        percentPosition: true,
                        gutter: 30,
                    });
                    // layout Masonry after each image loads
                    $reviewGrid.imagesLoaded().progress(function () {
                        $reviewGrid.masonry();
                    });
                }

                jQuery(document).ready(function () {
                    if (jQuery(window).innerWidth() > 650) {
                        reviewsMasonry<?php echo $reviews;?>();
                    }
                })
                <?php endif;?>
            </script>
        </div><!--End reviews -->