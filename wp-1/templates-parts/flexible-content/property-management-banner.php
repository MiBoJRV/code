<div class="property-banner">
    <?php if (get_sub_field('background_image') != ''): ?>
        <div class="property-banner-image">
            <img src="<?php the_sub_field('background_image'); ?>" alt="">
            <div class="for-mobile-title">
                <h2><?php the_sub_field('circle_text'); ?></span></h2>
                <p>Give Us A Call At:</p>
                <a href="tel:<?php the_sub_field('circle_phone'); ?>"><?php the_sub_field('circle_phone'); ?></a>
            </div>
        </div>
    <?php else: ?>
        <div class="property-banner-image">
            <img src="/wp-content/uploads/2019/04/pexels-photo-1834726.jpeg" alt="">
        </div>
    <?php endif ?>
    <?php if (get_sub_field('property_banner_variant') == 'Circle&Form'): ?>
        <div class="property-banner-wrapper">
            <div class="property-banner-call">
                <div class="property-banner-call-border-box">
                    <div class="property-banner-call-box">
                        <div class="property-banner-call-txt">
                            <h1><?php the_sub_field('circle_text'); ?></span></h1>
                            <p>Give Us A Call At:</p>
                            <a href="tel:<?php the_sub_field('circle_phone'); ?>"><?php the_sub_field('circle_phone'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="property-banner-feedback">
                <div class="property-banner-feedback-block">
                    <div class="property-banner-feedback-block-txt">
                        <h3><?php the_sub_field('form_title'); ?></h3>
                        <h4><?php the_sub_field('form_second_title'); ?></h4>
                        <hr>
                    </div>
                    <div class="property-banner-feedback-block-form">
                        <?php the_sub_field('shortcode'); ?>
                    </div>
                    <div class="property-banner-feedback-block-safe">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.452" height="22.3" viewBox="0 0 18.452 22.3">
                                <defs>
                                    <style>.aa, .ab, .ad {
                                            fill: none;
                                        }
                                        .aa, .ab {
                                            stroke: #fff;
                                        }
                                        .aa {
                                            stroke-width: 2px;
                                        }
                                        .ab {
                                            stroke-width: 1.5px;
                                        }
                                        .ac {
                                            stroke: none;
                                        }</style>
                                </defs>
                                <g class="aa" transform="translate(0 7.735)">
                                    <rect class="ac" width="18.452" height="14.565" rx="3"/>
                                    <rect class="ad" x="1" y="1" width="16.452" height="12.565" rx="2"/>
                                </g>
                                <g class="aa" transform="translate(3.46)">
                                    <path class="ac" d="M5.766,0h0a5.766,5.766,0,0,1,5.766,5.766v3.95a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V5.766A5.766,5.766,0,0,1,5.766,0Z"/>
                                    <path class="ad" d="M5.766,1h0a4.766,4.766,0,0,1,4.766,4.766v2.7a.251.251,0,0,1-.251.251H1.251A.251.251,0,0,1,1,8.466v-2.7A4.766,4.766,0,0,1,5.766,1Z"/>
                                </g>
                                <circle class="ab" cx="2.5" cy="2.5" r="2.5" transform="translate(6.92 12.59)"/>
                            </svg>
                            100% Safe & Secure
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif (get_sub_field('property_banner_variant') == 'Video&Form'): ?>
        <div class="property-banner-wrapper">
            <div class="property-banner-video">
                <h1><?php the_sub_field('video_title'); ?></h1>
                <div class="video_wrap">
                    <?php if (get_sub_field('video_type') == 'YouTube'): ?>
                        <?php the_sub_field('youtube_link'); ?>
                    <?php elseif (get_sub_field('video_type') == 'Custom'): ?>
                        <video controls="controls">
                            <source src="<?php the_sub_field('custom_link'); ?>">
                        </video>
                    <?php endif; ?>
                </div>
            </div>
            <div class="property-banner-feedback video_var">
                <div class="property-banner-feedback-block">
                    <div class="property-banner-feedback-block-txt">
                        <h3><?php the_sub_field('form_title'); ?></h3>
                        <h4><?php the_sub_field('form_second_title'); ?></h4>
                        <hr>
                    </div>
                    <div class="property-banner-feedback-block-form">
                        <?php the_sub_field('shortcode'); ?>
                    </div>
                    <div class="property-banner-feedback-block-safe">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icon-lock.png" alt="#"> 100%
                                                                                                                safe
                                                                                                                &amp;
                                                                                                                SECURE
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif (get_sub_field('property_banner_variant') == 'Form'): ?>
        <div class="property-banner-wrapper">
            <div class="property-banner-feedback">
                <div class="property-banner-feedback-block">
                    <div class="property-banner-feedback-block-txt">
                        <h3><?php the_sub_field('form_title'); ?></h3>
                        <h4><?php the_sub_field('form_second_title'); ?></h4>
                        <hr>
                    </div>
                    <div class="property-banner-feedback-block-form">
                        <?php the_sub_field('shortcode'); ?>
                    </div>
                    <div class="property-banner-feedback-block-safe">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/icon-lock.png" alt="#"> 100%
                                                                                                                safe
                                                                                                                &amp;
                                                                                                                SECURE
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<style>
    <?php if(get_sub_field('customize_font_size')=='yes'): ?>
    .property-banner-feedback-block h3 {
        font-size: <?php the_sub_field('form_title_font_size'); ?>;
    }
    .property-banner-feedback-block h4 {
        font-size: <?php the_sub_field('form_under_title_font_size'); ?>;
    }
    .property-banner-call-box h1 {
        font-size: <?php the_sub_field('circle_title_font_size'); ?>;
    }
    .property-banner-call-box h1 span {
        font-size: <?php the_sub_field('circle_under_title_font_size'); ?>;
    }
    .property-banner-call-box a {
        font-size: <?php the_sub_field('circle_phone_font_size'); ?>;
    }
    .property-banner-video h1 {
        font-size: <?php the_sub_field('video_title_font_size'); ?>;
    }
    <?php else: ?>
    .property-banner-feedback-block h3 {
        font-size: 28px;
    }
    .property-banner-feedback-block h4 {
        font-size: 16px;
    }
    .property-banner-call-box h1 {
        font-size: 32px;
    }
    .property-banner-call-box h1 span {
        font-size: 24px;
    }
    .property-banner-call-box a {
        font-size: 24px;
    }
    <?php endif; ?>
    .topTitle {
        display: none;
    }
    .property-banner {
        position: relative;
        padding: 60px 30px;
        z-index: 0;
    }
    .property-banner-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }
    .property-banner-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: inline-block;
    }
    .property-banner-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 1670px;
        margin: 0 auto;
    }
    .property-banner-call-border-box {
        padding: 4px;
        border: 2px solid #FFFFFF;
        border-radius: 100%;
    }
    .property-banner-call-box {
        width: 360px;
        height: 360px;
        border-radius: 100%;
        /*background: rgba(7, 8, 8, 0.8);*/
        background: #FFF;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .property-banner-call-box h1 {
        margin-top: 0;
        letter-spacing: 1px;
    }
    .property-banner-call-box h1 span {
        font-weight: 100;
        margin-top: 5px;
        margin-bottom: 13px;
        color: #eee;
        display: block;
    }
    .property-banner-call-box p {
        color: #eee;
    }
    .property-banner-call-box a {
        color: #fff;
    }
    .property-banner-call-box a:hover {
        color: var(--main_color);
    }
    .property-banner-call, .property-banner-feedback {
        flex-grow: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .property-banner-video {
        flex-grow: 1;
        text-align: center;
        padding-right: 10px;
        overflow: hidden;
    }
    .property-banner-video .video_wrap {
        width: 600px;
        margin: 0 auto;
    }
    .property-banner-video video {
        width: 100%;
        height: 100%;
    }
    .property-banner-video h1 {
        color: #fff;
        margin-top: 0;
        margin-bottom: 50px;
        text-shadow: 0 0 5px #000;
    }
    .property-banner-feedback.video_var {
        max-width: 504px;
        margin: 0 auto;
    }
    .property-banner-feedback-block {
        max-width: 492px;
        width: 100%;
    }
    .property-banner-feedback-block h3 {
        margin: 0;
        padding: 0;
        color: #fff;
        text-align: center;
    }
    .property-banner-feedback-block h3 span {
        color: var(--main_color);
    }
    .property-banner-feedback-block h4 {
        font-weight: 400;
        margin: 0;
        padding: 0;
        text-align: center;
        color: #ffffff;
    }
    .property-banner-feedback-block h4 span {
        color: var(--main_color);
    }
    .property-banner-feedback-block hr {
        width: calc(100% - 4px);
        opacity: 0.25;
        margin: 35px 0 40px;
    }
    .property-banner .gform_wrapper ul.gform_fields li.gfield {
        clear: none;
        float: left !important;
        width: calc(50% - 5px) !important;
        margin-bottom: 10px;
        margin-top: 0 !important;
    }
    .property-banner .gform_wrapper ul.gform_fields li.gfield:nth-child(3) {
        float: right !important;
    }
    .property-banner .gform_wrapper ul.gform_fields li.gfield:nth-child(4),
    .property-banner .gform_wrapper ul.gform_fields li.gfield:nth-child(5),
    .property-banner .gform_wrapper ul.gform_fields li.gfield:nth-child(6) {
        width: 100% !important;
        float: none !important;
        clear: both;
    }
    .property-banner .gform_wrapper .gform_footer {
        padding-top: 0 !important;
    }
    .property-banner .gform_wrapper .gform_body li input::-webkit-input-placeholder {
    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?> font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
    <?php else: ?> font-family: 'Montserrat';
    <?php endif ?>
    }
    .property-banner .gform_wrapper .gform_body li input::-moz-placeholder {
    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?> font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
    <?php else: ?> font-family: 'Montserrat';
    <?php endif ?> opacity: 1;
    }
    .property-banner .gform_wrapper .gform_body li textarea::-webkit-input-placeholder {
    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?> font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
    <?php else: ?> font-family: 'Montserrat';
    <?php endif ?>
    }
    .property-banner .gform_wrapper .gform_body li textarea::-moz-placeholder {
    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?> font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
    <?php else: ?> font-family: 'Montserrat';
    <?php endif ?> opacity: 1;
    }
    .property-banner .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]),
    .property-banner .gform_wrapper .gform_body li textarea {
        padding: 10px 15px !important;
    }
    .property-banner .gform_wrapper .gform_body li input,
    .property-banner .gform_wrapper .gform_body li textarea {
        max-height: 110px !important;
    }
    .property-banner .gform_wrapper li.field_sublabel_below .ginput_complex {
        margin-top: 0 !important;
    }
    /*.property-banner .gform_wrapper .top_label div.ginput_container {
        margin-top: 12px!important;
    }*/
    .property-banner .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield span.name_first {
        padding-top: 0 !important;
    }
    .property-banner .gform_wrapper .gform_footer input {
        background: var(--second_color) !important;
    }
    .property-banner .gform_wrapper .gform_footer input:hover {
        background-color: var(--main_color) !important;
        color: #fff !important;
    }
    .property-banner-feedback-block-form form input[type="submit"]:hover {
        background-color: rgb(9, 122, 217);
    }
    .property-banner-feedback-block-safe p {
        text-transform: capitalize;
        margin-top: 15px;
        font: 400 16px/28px var(--body_font);
        letter-spacing: 0px;
        color: rgba(255, 255, 255, 0.75);
        text-align: center;
        margin-bottom: 0;
    }
    .property-banner-feedback-block-safe svg {
        width: 15px;
        margin-right: 7px;
    }
    .property-banner-feedback-block-safe svg,
    .property-banner-feedback-block-safe img {
        vertical-align: text-bottom;
    }
    .property-banner .gform_wrapper .gform_footer {
        margin: 0 !important;
    }
    .property-banner .gform_wrapper.gform_validation_error .gform_body ul li.gfield.gfield_error:not(.gf_left_half):not(.gf_right_half) {
        max-width: 100% !important;
    }
    .mobile-title {
        display: none;
    }
    /*FIX*/
    .property-banner-call-box h1 span, .property-banner-call-box h1 {
        color: var(--title_color);
        text-shadow: none !important;
        letter-spacing: 0 !important;
        font: 400 24px/28px var(--original_font);
    }
    .property-banner-call-box h1 {
        margin-bottom: 25px;
    }
    .property-banner-call-box p {
        text-transform: capitalize;
        margin: 0;
        font: 400 16px/28px var(--paragraph_font);
        letter-spacing: 0px;
        color: var(--paragraph_color);
    }
    .property-banner-call-box a {
        text-transform: uppercase;
        margin-top: 2px;
        display: inline-block;
        font: 600 20px/22px var(--paragraph_font);
        letter-spacing: 0px;
        color: var(--title_color);
    }
    .property-banner-feedback-block h3, .property-banner-feedback-block h3 span {
        font-family: var(--original_font);
        font-size: 32px;
        color: #fff;
    }
    .property-banner-feedback-block h4 {
        margin-bottom: 30px;
    }
    .property-banner-feedback-block h4, .property-banner-feedback-block h4 span {
        font-family: var(--body_font);
        font-weight: 500;
        font-size: 16px;
        text-transform: capitalize;
        color: rgba(255, 255, 255, 0.75);
        margin-top: 5px;
    }
    .property-banner-feedback-block hr {
        display: none;
    }
    .property-banner-feedback-block {
        /*background: rgba(7, 8, 8, 0.8);*/
        background: #FFF;
        padding: 40px;
        /*border: 2px solid #fff;*/
    }
    .property-banner .gform_wrapper .gform_body li input,
    .property-banner .gform_wrapper .gform_body li select {
        height: 55px !important;
    }
    .property-banner .gform_wrapper .gform_footer input[type="submit"] {
        text-transform: uppercase;
        color: #fff;
        padding: 18px 0px !important;
        font: 600 16px/24px var(--body_font) !important;
        cursor: pointer;
        height: auto;
    }
    .property-banner .gform_wrapper .gform_body li input, .property-banner .gform_wrapper .gform_body li textarea {
        border: none;
        background: #F5F5F5;
        color: #292929;
        font: 500 16px/24px var(--paragraph_font) !important;
        border: 1px solid #C8C8C8;

    }
    .property-banner .gform_wrapper .gform_body li input::-webkit-input-placeholder {
        font: 500 16px/24px var(--paragraph_font) !important;
        text-transform: capitalize;
        color: rgba(41, 41, 41, 0.5);
    }
    .property-banner .gform_wrapper .gform_body li input::-moz-placeholder {
        font: 500 16px/24px var(--paragraph_font) !important;
        text-transform: capitalize;
        color: rgba(41, 41, 41, 0.5);
    }
    .property-banner .gform_wrapper .gform_body li textarea::-webkit-input-placeholder {
        text-transform: capitalize;
        color: rgba(41, 41, 41, 0.5);
        font: 500 16px/24px var(--paragraph_font) !important;
    }
    .property-banner .gform_wrapper .gform_body li textarea::-moz-placeholder {
        font-family: var(--body_font);
        text-transform: capitalize;
        color: rgba(41, 41, 41, 0.5);
        font: 500 16px/24px var(--paragraph_font) !important;
    }
    .property-banner .gform_wrapper .gform_body li textarea {
        max-height: 125px !important;
        margin-bottom: 15px;
        font: 500 16px/24px var(--paragraph_font) !important;
    }
    .property-banner-feedback-block-safe p svg .aa,
    .property-banner-feedback-block-safe p svg .ab {
        stroke: #002349;
    }
    .property-banner-image {
        /*background: rgb(34,41,49);
        background: linear-gradient(180deg, rgba(34,41,49,0) 0%, rgba(34,41,49,1) 100%);*/
        background-color: #141414;
    }
    .property-banner-image img {
         opacity: 0.85;
    }
    body .gform_wrapper .top_label div.ginput_container {
        margin-top: 0 !important;
    }
    /*END FIX*/
    /**************************** FIX  ********************************/
    .property-banner-call-box h1 span, .property-banner-call-box h1 {
        font: 400 24px/28px var(--title_font);
    }
    .property-banner-call-box h1 {
        margin-bottom: 24px;
    }
    .property-banner-call-box p {
        font: 400 16px/22px var(--paragraph_font);
        margin: 0 0 -9px;
    }
    .property-banner-call-box a {
        font: 600 20px/38px var(--paragraph_font);
        margin: 0;
    }
    .property-banner-feedback-block h3, .property-banner-feedback-block h3 span {
        font: 400 32px/36px var(--title_font);
        color: var(--title_color);
    }
    .property-banner-feedback-block h4, .property-banner-feedback-block h4 span {
        font: 500 16px/22px var(--paragraph_font);
        color: var(--paragraph_color);
    }
    .property-banner .gform_wrapper .gform_footer input[type="submit"] {
        padding: 20.5px 0px !important;
        font: 400 16px/19px var(--paragraph_font) !important;
    }
    .property-banner-feedback-block-safe p {
        font: 400 16px/28px var(--paragraph_font);
        color: var(--paragraph_color);
    }
    .property-banner .gform_wrapper .gform_body li input, .property-banner .gform_wrapper .gform_body li textarea {
        font: 500 16px/22px var(--paragraph_font)!important;
        text-transform: capitalize;
        color: rgba(41, 41, 41, 0.5) !important;
    }
    .property-banner .gform_wrapper .gform_body li input::-webkit-input-placeholder {
        font: 500 16px/22px var(--paragraph_font)!important;
        text-transform: capitalize;
        color: rgba(41, 41, 41, 0.5);
    }
    .property-banner .gform_wrapper .gform_body li input::-moz-placeholder {
        font: 500 16px/22px var(--paragraph_font)!important;
        text-transform: capitalize;
        color: rgba(41, 41, 41, 0.5);
    }
    .property-banner .gform_wrapper .gform_body li textarea::-webkit-input-placeholder {
        font: 500 16px/22px var(--paragraph_font)!important;
        text-transform: capitalize;
        color: rgba(41, 41, 41, 0.5);
    }
    .property-banner .gform_wrapper .gform_body li textarea::-moz-placeholder {
        font: 500 16px/22px var(--paragraph_font)!important;
        text-transform: capitalize;
        color: rgba(41, 41, 41, 0.5);
    }
    @media (max-width: 991px) {
        .for-mobile-title h2 {
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        }
        .property-banner-image img {
            opacity: .7;
        }
        .property-banner-image {
            position: relative;
            background: #000;
            height: 300px;
        }
    }
    /**************************** END  FIX  ****************************/
    /*Responsive*//*Responsive*//*Responsive*/
    @media (max-width: 991px) {
        .property-banner-wrapper {
            display: block;
        }
        .property-banner-call,
        .property-banner-video {
            margin-bottom: 30px;
        }
        .property-banner-call {
            display: none;
        }
        .property-banner-image {
            position: relative;
            background: #141414;
            height: 300px;
        }
        .property-banner {
            padding-right: 0;
            padding-left: 0;
            padding-top: 0;
            padding-bottom: 0;
        }
        .property-banner-feedback-block {
            max-width: none;
            background: #fff;
        }
        .page-id-268 .property-banner-feedback-block {
            background: #f5f5f5;
        }
        .property-banner .gform_wrapper .gform_body li input,
        .property-banner .gform_wrapper .gform_body li textarea {
            background: #F5F5F5;
            border: 1px solid #C8C8C8;
        }
        .property-banner-feedback-block h3,
        .property-banner-feedback-block h4 {
            color: #292929;
        }
        .property-banner-feedback-block hr {
            display: none;
        }
        div.property-banner-feedback-block-safe p {
            color: #292929;
        }
        .property-banner-feedback-block-safe svg .aa,
        .property-banner-feedback-block-safe svg .ab {
            stroke: #292929;
        }
        .for-mobile-title {
            display: block;
            position: absolute;
            left: 50%;
            top: 50%;
            text-align: center;
            color: #fff;
            transform: translate(-50%, -50%);
            width: 100%;
            padding: 0 15px;
        }
        .for-mobile-title a {
            color: #fff;
            font: 500 18px/22px var(--body_font);
        }
        .for-mobile-title a:hover {
            color: var(--main_color);
        }
        .for-mobile-title h2 {
            font-size: 28px;
            color: #fff;
        }
        .for-mobile-title h2 span {
            display: block;
        }
        .for-mobile-title p {
            margin-bottom: 5px;
        }
        .gform_wrapper .ginput_container span:not(.ginput_price) {
            margin-bottom: 0 !important;
        }
    }
    @media (max-width: 480px) {
        .property-banner-feedback-block {
            padding: 30px 20px;
        }
        .property-banner-feedback-block h3 {
            font-size: 25px;
        }
        .property-banner-feedback-block h4 {
            font-size: 14px;
        }
        .property-banner-call-box {
            width: 250px;
            height: 250px;
        }
        .property-banner-call-box h1 {
            font-size: 24px;
        }
        .property-banner-call-box h1 span {
            font-size: 18px;
        }
        .property-banner-call-box p {
            font-size: 12px;
        }
        .property-banner-call-box a {
            font-size: 18px;
        }
        .property-banner-feedback-block hr {
            margin: 20px 0 15px;
        }
    }
</style>