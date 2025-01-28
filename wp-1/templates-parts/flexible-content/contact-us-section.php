<?php $contactUs++; ?>
<section class="contact_us CU-<?php echo $contactUs; ?> <?php echo get_sub_field('custom_class'); ?>">
    <style>
        <?php if(get_sub_field('customize_font_size')=='yes'): ?>
        .contact_us.CU-<?php echo $contactUs;?> .location p {
            font-size: <?php the_sub_field('address&phone_font_size'); ?>;
        }
        .contact_us.CU-<?php echo $contactUs;?> .contact-form h3 {
            font-size: <?php the_sub_field('form_title_font_size'); ?>;
        }
        .contact_us.CU-<?php echo $contactUs;?> .contact-form h5 {
            font-size: <?php the_sub_field('form_subtitle_font_size'); ?>;
        }
        <?php endif; ?>
        <?php if(get_sub_field('section_type')!='Small Text'): ?>
        .contact_us.CU-<?php echo $contactUs;?> {
            background: <?php the_sub_field('section_background'); ?> !important;
        }
        <?php endif; ?>
        <?php if($contactUs < 2):?>
        .contact_us {
            padding-bottom: 0 !important;
        }
        .contact_us .flex_wrapper {
            display: flex;
        }
        /*Left Side*/
        .contact_us .info_box {
            width: 50%;
            background: #fff;
            padding: 50px 15px;
        }
        .contact_us .info_box h2 {
            text-align: center;
            font-size: 42px;
            margin-top: 0;
            margin-bottom: 60px;
        }
        .contact_us .info_box .info_wrap {
            /* max-width: 580px;*/
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }
        .contact_us .info_box .info_wrap i {
            font-size: 15px;
            color: var(--main_color);
            padding-right: 5px;
            position: relative;
            top: 1px;
        }
        .contact_us .info_box .info_wrap .left_part {
            position: relative;
            width: 50%;
            padding-right: 50px;
            border-right: 1px solid rgba(59, 59, 59, .2);
        }
        .contact_us .info_box .info_wrap .left_part > div {
            float: right;
            position: relative;
            padding-left: 20px;
        }
        .contact_us .info_box .info_wrap .left_part i {
            position: absolute;
            top: 0;
            left: 0;
        }
        .contact_us .info_box .info_wrap .left_part p {
            margin: 0;
        }
        .contact_us .info_box .info_wrap .right_part {
            width: 50%;
            padding-left: 50px;
        }
        .contact_us .info_box .info_wrap .right_part a {
            color: inherit;
            display: inline-block;
            font: 400 16px var(--title_font);
            color: var(--paragraph_color);
        }
        .contact_us .info_box .info_wrap .right_part a:hover,
        .contact_us .info_box .info_wrap .right_part .phones a:hover {
            color: var(--main_color);
        }
        .contact_us .info_box .info_wrap .right_part .phones {
            margin-bottom: 15px;
            white-space: nowrap;
            font: 500 16px var(--paragraph_font);
        }
        .contact_us .info_box .info_wrap .right_part .phones a {
            font: 600 20px/30px var(--paragraph_font);
            color: var(--title_color);
        }
        .contact_us .info_box .info_wrap .right_part .phones span {
            text-transform: capitalize;
            font: 500 16px var(--paragraph_font);
            color: var(--title_color);
        }
        .contact_us .info_box .info_wrap .right_part .phones .phone_2 {
            padding-left: 25px;
        }
        /*End Left Side*/
        /*Right Side*/
        .contact_us .form_box {
            width: 50%;
            padding: 45px;
            background: #F5F5F5;
        }
        .contact_us .form_box .gform_wrapper ul.gform_fields {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield {
            margin-top: 2px;
        }
        .contact_us .form_box .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield span.name_first {
            padding-top: 0;
        }
        .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield:not(#field_3_5):not(#field_3_8) {
            width: calc(50% - 5px) !important;
        }
        .contact_us .form_box .gform_wrapper .gform_body li input {
            height: 55px;
        }
        .contact_us .form_box .gform_wrapper .gform_body li input,
        .contact_us .form_box .gform_wrapper .gform_body li textarea {
            background: #fff;
            border: 1px solid #DCDCDC;
            padding-left: 15px !important;
            font: 500 17px/24px var(--paragraph_font);
            letter-spacing: 0;
            color: var(--paragraph_color);
        }
        .contact_us .form_box .gform_wrapper .gform_body li input::-webkit-input-placeholder {
            font: 500 16px/24px var(--paragraph_font);
            letter-spacing: 0;
            color: rgba(41, 41, 41, 0.5);
        }
        .contact_us .form_box .gform_wrapper .gform_body li input::-moz-placeholder {
            font: 500 16px/24px var(--paragraph_font);
            letter-spacing: 0;
            color: rgba(41, 41, 41, 0.5);
        }
        .contact_us .form_box .gform_wrapper .gform_body li textarea::-webkit-input-placeholder {
            font: 500 16px/24px var(--paragraph_font);
            letter-spacing: 0;
            color: rgba(41, 41, 41, 0.5);
        }
        .contact_us .form_box .gform_wrapper .gform_body li textarea::-moz-placeholder {
            font: 500 16px/24px var(--paragraph_font);
            letter-spacing: 0;
            color: rgba(41, 41, 41, 0.5);
        }
        .contact_us .form_box .gform_wrapper {
            max-width: 650px;
            margin: 0 auto !important;
        }
        .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield .gfield_checkbox {
            width: 100%;
            text-align: center;
            margin: 15px 0 0 0;
        }
        .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield .ginput_container_checkbox {
            margin: 0;
        }
        .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield .gfield_checkbox input[type="checkbox"] {
            height: auto;
            margin: 0;
        }
        .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield .gfield_checkbox label {
            display: inline-block !important;
            font-weight: 400;
        }
        .contact_us .form_box .gform_wrapper .gform_footer input[type="submit"] {
            display: block;
            width: auto !important;
            margin: 0 auto !important;
            padding: 18px 79px;
            height: auto;
            color: #fff;
            font: 500 16px/25px var(--title_font);
            letter-spacing: 0;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            background: var(--second_color) !important;
        }
        .contact_us .form_box .gform_wrapper .gform_footer input[type="submit"]:hover {
            background: var(--main_color) !important;
        }
        .contact_us .form_box .gform_wrapper.gform_validation_error .gform_body ul li.gfield.gfield_error:not(.gf_left_half):not(.gf_right_half) {
            max-width: 100% !important;
        }
        .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield .ginput_container_checkbox + .validation_message {
            text-align: center;
        }
        .contact_us .gform_confirmation_message {
            color: #2a2a2a;
        }
        /*End Right Side*/
        /*bigText variant*/
        .contact_us .bigText .info_box {
            width: 100%;
            background: none;
            float: none;
            padding-bottom: 20px;
        }
        .contact_us .flex_wrapper.bigText {
            display: flex;
        }
        .contact_us .bigText .cont {
            border: 2px solid #fff;
            background: #363737;
            padding: 0 40px 40px;
            color: #fff;
        }
        .contact_us .bigText .form_box {
            padding-right: 120px;
            background: none;
        }
        .contact_us .bigText .form_box a {
            color: #fff !important;
        }
        .contact_us .bigText .form_box a:hover {
            color: var(--main_color) !important;
        }
        .contact_us .bigText .formText {
            float: left;
            width: 50%;
        }
        .contact_us .bigText .info_box h2 {
            margin-bottom: 25px;
        }
        .contact_us .bigText .formText article {
            color: #fff;
            max-width: 500px;
        }
        .contact_us .bigText .formText {
            padding: 40px 40px 40px 100px;
            display: flex;
            align-items: center;
        }
        .contact_us .bigText .validation_error {
            color: #fff;
        }
        .contact_us .info_box .info_wrap .right_part .phones .br_1,
        .contact_us .info_box .info_wrap .right_part .phones .br_3{
            display: none;
        }
        /*Responsive*//*Responsive*//*Responsive*/
        @media only screen and (max-width: 1600px) and (min-width: 1400px) {
            .contact_us .info_box .info_wrap .right_part .phones span {
                font-size: 13px;
            }

        }
        @media only screen and (max-width: 1400px) and (min-width: 1200px) {
            .contact_us .info_box .info_wrap .right_part .phones .br_1 {
                display: block;
            }
            .contact_us .info_box .info_wrap .right_part .phones .phone_1 {
                padding-left: 25px;
            }
            .contact_us .info_box .info_wrap .right_part .phones .phone_3 {
                padding-left: 25px;
            }
        }
        @media (max-width: 1400px) {
            .contact_us .info_box .info_wrap .right_part .phones {
                white-space: normal;
            }
            .contact_us .bigText .form_box {
                padding-right: 40px;
            }
        }
        @media (max-width: 1199px) {
            .contact_us .flex_wrapper {
                flex-wrap: wrap;
            }
            .contact_us .info_box {
                width: 100%;
                padding: 40px 15px;
            }
            .contact_us .form_box {
                width: 100%;
                padding: 40px 90px;
            }
            .contact_us .bigText .formText {
                padding: 40px 30px 10px;
                width: 100%;
            }
            .contact_us .bigText .formText article {
                max-width: 100%;
                text-align: center;
            }
            .contact_us .bigText .form_box {
                padding: 30px !important;
            }
        }
        @media only screen and (max-width: 800px) and (min-width: 768px) {
            .contact_us .info_box .info_wrap .right_part .phones span {
                font-size: 13px;
            }
        }
        @media (max-width: 767px) {
            .contact_us .info_box .info_wrap {
                flex-wrap: wrap;
                max-width: 345px;
            }
            .contact_us .info_box h2 {
                margin-bottom: 30px;
            }
            .contact_us .info_box .info_wrap .left_part {
                width: 100%;
                padding-right: 0;
                padding-bottom: 15px;
                margin-bottom: 15px;
                border-right: none;
                border-bottom: 2px solid #E6E6E6;
            }
            .contact_us .info_box .info_wrap .right_part {
                width: 100%;
                padding-left: 0;
            }
            .contact_us .form_box {
                padding: 0px 15px 40px;
            }
            .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield:not(#field_14_5):not(#field_14_8) {
                width: 100% !important;
            }
            .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield .gfield_checkbox {
                text-align: center;
            }
            .contact_us .form_box .gform_wrapper .gform_footer input[type="submit"] {
                padding: 10px 87px;
            }
            .contact_us .info_box .info_wrap .left_part > div {
                float: none;
            }
            .contact_us .form_box .gform_wrapper ul.gform_fields li.gfield .gfield_checkbox label {
                display: inline !important;
            }
        }
        <?php endif; ?>
    </style>
    <?php if (get_sub_field('section_type') == 'Small Text'): ?>
        <div class="flex_wrapper">
            <div class="info_box">
                <h2>Get In Touch</h2>
                <div class="info_wrap">
                    <div class="left_part">
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                            <?php if (get_sub_field('company_name') != ''): ?>
                                <p><strong><?php the_sub_field('company_name'); ?></strong></p>
                            <?php endif; ?>
                            <?php if (get_sub_field('address') != ''): ?>
                                <p><?php the_sub_field('address'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="right_part">
                        <?php $phone = preg_replace('/[^0-9.]/', '', get_field('tel_number', 268)); ?>
                        <div class="phones">
                            <i class="fas fa-phone"></i>
                            <a href="tel:<?php echo $phone; ?>"><?php echo get_field('tel_number', 268); ?></a>
                        </div>
                        <?php if (get_sub_field('email') != ''): ?>
                                    <div class="mail">
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:<?php echo get_sub_field('email'); ?>" class="mail">
                                            <?php echo get_sub_field('email'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="form_box">
                <?php echo do_shortcode('[gravityform id="3" title="false" ajax="true" description="false" tabindex=60]'); ?>
            </div>
        </div>
    <?php else: ?>
        <div class="flex_wrapper bigText">
            <div class="formText">
                <article>
                    <?php the_sub_field('bigtext'); ?>
                </article>
            </div>
            <div class="form_box">
                <div class="cont">
                    <div class="info_box">
                        <h2>Get In Touch</h2>
                        <div class="info_wrap">
                            <div class="left_part">
                                <i class="fas fa-map-marker-alt"></i>
                                <?php if (get_sub_field('company_name') != ''): ?>
                                    <p><strong><?php the_sub_field('company_name'); ?></strong></p>
                                <?php endif; ?>
                                <?php if (get_sub_field('address') != ''): ?>
                                    <p><?php the_sub_field('address'); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="right_part">
                                <?php $phone = preg_replace('/[^0-9.]/', '', get_sub_field('tel_number', 268)); ?>
                                <div class="phones">
                                    <i class="fas fa-phone"></i>
                                    <a href="tel:<?php echo $phone; ?>"><?php echo get_field('tel_number', 268); ?></a>
                                </div>
<!--                                --><?php //if (get_sub_field('email') != ''): ?>
<!--                                    <a href="--><?php //echo get_sub_field('email'); ?><!--" class="mail">-->
<!--                                        <i class="fas fa-envelope"></i>-->
<!--                                        --><?php //echo get_sub_field('email'); ?>
<!--                                    </a>-->
<!--                                    <a href="mailto:--><?php //echo get_sub_field('email'); ?><!--" class="mail">-->
<!--                                        <i class="fas fa-envelope"></i>-->
<!--                                        --><?php //echo get_sub_field('email'); ?>
<!--                                    </a>-->
<!--                                --><?php //endif; ?>
                                <?php if (get_sub_field('email') != ''): ?>
                                    <div class="mail8">
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:<?php echo get_sub_field('email'); ?>" class="mail">
                                            <?php echo get_sub_field('email'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php echo do_shortcode('[gravityform id="3" title="false" ajax="true" description="false" tabindex=60]'); ?>
                </div><!--end cont-->
            </div><!--end form_box-->
        </div><!--flex_wrapper-->
    <?php endif; ?>
</section>