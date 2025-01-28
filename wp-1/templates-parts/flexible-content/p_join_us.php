<?php global $joinUs;
$joinUs++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<?php
$bgImage1 = "get_stylesheet_directory_uri() ?>/images/backstage-6.png";
?>

<section id="join" class="p_join_us p_join_us-<?php echo $joinUs; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_join_us__content">
        <div class="text-block _anim-items _anim-no-hide">
            <h2 class="title"><?php echo get_sub_field('title'); ?></h2>
            <?php if (get_sub_field('small_title') != ''): ?>
                <h3 class="small_title"><?php echo get_sub_field('small_title'); ?></h3>
            <?php endif; ?>

            <?php echo get_sub_field('text'); ?>
        </div>
        <div class="form_content">
            <div class="left-side _anim-items _anim-no-hide">
                <h3 class="text_title"><?php echo get_sub_field('image_text'); ?></h3>
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                <div class="bg"></div>
            </div>
            <div class="right-side _anim-items _anim-no-hide">
                <!--                <h4>--><?php //echo get_sub_field('form_title'); ?><!--</h4>-->
                <?php echo get_sub_field('form_shortcode'); ?>
<!--                --><?php //= do_shortcode('[gravityform id=19 title=false description=false ajax=true tabindex=60]') ?>
            </div>
        </div>
    </div>
    <?php if ($joinUs < 2): ?>
        <style>
            .p_join_us {
                position: relative;
                z-index: 100;
            }

            .p_join_us .p_join_us__content {
                max-width: 1322px;
                padding: 50px 20px 0;
                margin: 0 auto;
                position: relative;
            }

            .p_join_us .text-block {
                opacity: 0;
                transform: translate(0, -80%);
                transition: all 0.8s ease 0.5s;
                gap: 30px;
                display: flex;
                flex-direction: column;
            }

            @media only screen and (max-width: 991px) {
                .p_join_us .text-block {
                    gap: 0;
                }
            }

            .p_join_us .text-block._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_join_us h2.title {
                color: #231F20;
                font-family: 'Montserrat', system-ui;
                font-size: 96px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 9.6px;
                text-transform: uppercase;
                margin: 0;
            }

            *:lang(ua-UA) .p_join_us h2.title {
                font-size: 64px;
                letter-spacing: 6.4px;
            }

            *:lang(ua-UA) .p_join_us.careers h2.title {
                color: #FFFCE9;
                font-family: 'Montserrat', system-ui;
                font-size: 96px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 9.6px;
                text-transform: uppercase;
            }

            .p_join_us.title-white h2.title {
                color: #FFFCE9;
                margin-bottom: 50px;
            }

            @media only screen and (max-width: 991px) {
                .p_join_us h2.title {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                }

                *:lang(ua-UA) .p_join_us.careers h2.title {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                }

                *:lang(ua-UA) .p_join_us h2.title {
                    font-size: 30px;
                    letter-spacing: 3.0px;
                }
            }

            .p_join_us .small_title {
                color: #231F20;
                font-family: 'Montserrat', system-ui;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin-bottom: 15px;
            }


            .p_join_us.title-white .small_title {
                color: #FFFCE9;
                margin-top: -50px;
            }

            @media only screen and (max-width: 991px) {
                .p_join_us .small_title {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 10px;
                }

                *:lang(ua-UA) .p_join_us .small_title {
                    font-size: 30px;
                    letter-spacing: 3.0px;
                }
            }

            .p_join_us p {
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2.4px;
            }

            .p_join_us.title-white p {
                color: #FFFCE9;
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 991px) {
                .p_join_us p {
                    font-size: 20px;
                    letter-spacing: 2px;
                }

                .p_join_us p:first-of-type {
                    margin-bottom: 20px;
                }
            }

            .p_join_us h3.text_title {
                color: #FFFCE9;
                text-shadow: 15px 10px 1px #000;
                font-family: 'Montserrat', sans-serif;
                font-size: 128px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 25.6px;
                opacity: 0.8;
                z-index: 1;
                position: absolute;
                top: -192px;
                left: -50px;
            }

            .p_join_us.green h3.text_title {
                color: rgb(65, 147, 105);
            }

            @media only screen and (max-width: 991px) {
                .p_join_us h3.text_title {
                    top: -594px;
                }
            }

            .p_join_us img {
                position: relative;
                z-index: 2;
                bottom: 0;
            }

            .home .p_join_us img {
                bottom: -4px;
            }

            @media only screen and (max-width: 991px) {
                /*.p_join_us img {*/
                /*    margin-bottom: 75px;*/
                /*}*/
            }

            .p_join_us h4 {
                color: #FFF;
                text-align: center;
                /*text-shadow: -6px 7px 1px #000;*/
                font-family: 'Montserrat', system-ui;
                font-size: 40px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;
                margin-top: 30px;
                margin-bottom: 33px;
                /*text-shadow: -8px 6px 0 #000, 0 -3px 1px #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 3px 0 #000, -5px 6px 0 #000, -3px 6px 0 #000, -3px -3px 0 #000;*/
                text-shadow: -4px 8px 0 #000000, -2px -2px 0 #00000099, 2px -2px 0 #00000099, 2px 2px 0 #00000099, -2px 2px 0 #00000099;
            }

            @media only screen and (max-width: 991px) {
                .p_join_us h4 {
                    font-size: 32px;
                    letter-spacing: 3.2px;
                }
            }

            .p_join_us .form_content {
                display: flex;
                margin-top: 104px;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .p_join_us .form_content {
                    flex-direction: column-reverse;
                    margin-top: 50px;
                }
            }

            .p_join_us .left-side {
                bottom: 0;
                left: 50px;
                position: absolute;

                opacity: 0;
                transform: translate(-150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_join_us .left-side._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_join_us .left-side .bg {
                display: none;
            }

            /*@media only screen and (max-width: 991px) {*/
            /*    .p_join_us .left-side .bg {*/
            /*        display: block;*/
            /*        width: calc(100% + 40px);*/
            /*        height: 75px;*/
            /*        background-image: url(http://localhost:8888/pablo-new/wp-content/themes/BizcorLuxury/images/backstage-6.png);*/
            /*        border-bottom: 8px solid #000;*/
            /*        position: absolute;*/
            /*        bottom: 0;*/
            /*        left: -20px;*/
            /*    }*/
            /*}*/

            @media only screen and (max-width: 991px) {
                .p_join_us .left-side {
                    position: relative;
                    text-align: center;
                    left: 0;
                }
            }

            .p_join_us .right-side {
                max-width: 654px;
                width: 100%;
                border: 1px solid #231F20;
                background: #FFF;
                z-index: 10;
                box-shadow: -6px 7px 1px 0 #000;
                margin: 0 0 36px auto;
                min-height: 756px;

                opacity: 0;
                transform: translate(150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_join_us .right-side._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 991px) {
                .p_join_us .right-side {
                    margin: 0 auto;
                    min-height: auto;
                }
            }

            .p_join_us .gform_legacy_markup_wrapper form {
                padding: 0px 30px 85px;
            }

            @media only screen and (max-width: 991px) {
                .p_join_us .gform_legacy_markup_wrapper form {
                    padding: 33px 10px 35px;
                }
            }

            .p_join_us .gform_legacy_markup_wrapper {
                margin: 0;
            }

            .p_join_us .gform-body input {
                color: #626262 !important;
                text-align: justify;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;
                padding: 32px 20px 18px 4px !important;
            }

            @media only screen and (max-width: 991px) {
                .p_join_us .gform-body input {
                    padding: 30px 20px 10px 1px !important;
                    font-size: 16px !important;
                    letter-spacing: 1.6px !important;
                }
            }

            .p_join_us .gform_legacy_markup_wrapper .top_label div.ginput_container {
                margin: 0;
            }

            .p_join_us .gform-body input::placeholder {
                color: #626262 !important;
            }

            .p_join_us .gform-field-label {
                display: none !important;
            }

            .p_join_us .gform_fields input {
                outline: none;
            }

            .p_join_us .gform_footer.top_label {
                display: flex;
                margin: 50px 0 0 auto;
                padding: 0;
                justify-content: flex-end;
            }

            .p_join_us .gform_button {
                display: flex;
                width: 159px;
                height: 63px;
                padding: 20px 50px;
                justify-content: center;
                align-items: center;
                gap: 10px;
                flex-shrink: 0;
                color: #FFFCE9;
                text-align: center;
                text-shadow: 0px 4px 14px rgba(251, 254, 255, 0.45);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 2px;
                text-transform: uppercase;
                border-radius: 30px;
                background: #FF7A00;
                box-shadow: 8px 4px 1px 0px #000;
            }

            .p_join_us .gform_button:hover {
                background-color: #FF983A;;
            }

            .p_join_us .gform_button:active {
                background-color: #307847;;
            }

            @media only screen and (max-width: 991px) {
                .p_join_us .gform_button {
                    width: auto !important;
                    margin-right: 10px !important;
                }
            }

            .p_join_us .gform_legacy_markup_wrapper ul li.gfield {
                margin: 0;
            }

            .p_join_us .gform_confirmation_message {
                text-align: center;
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2.4px;
                margin: 96px auto;
            }

            @media only screen and (max-width: 480px) {
                .p_join_us .gform_confirmation_message {
                    margin-bottom: 0;
                    margin-top: 46px;
                }
            }

            .p_join_us .gfield_description.gform_fileupload_rules {
                display: none;
            }

            .p_join_us #gform_drag_drop_area_18_16 {
                position: relative;
                padding: 0;
                background: transparent;
                border: none;
                text-align: left;

            }

            .p_join_us #gform_drag_drop_area_20_16 {
                position: relative;
                padding: 0;
                background: transparent;
                border: none;
                text-align: left;

            }

            .p_join_us #gform_browse_button_18_16 {
                width: 200px;
                visibility: hidden;
                margin: 33px 0px 6px;
                cursor: pointer;
            }

            .p_join_us #gform_browse_button_20_16 {
                width: 200px;
                visibility: hidden;
                margin: 33px 0px 6px;
                cursor: pointer;
            }

            .p_join_us #gform_drag_drop_area_18_16:after, .p_join_us .gform_drop_area:after {
                content: 'Upload the file';
                position: absolute;
                left: 0;
                color: #626262;
                top: 28px;
                text-align: justify;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;
                cursor: pointer;
            }

            /*.p_join_us #gform_drag_drop_area_20_16:after {*/
            /*    content: 'Upload the file';*/
            /*    position: absolute;*/
            /*    left: 0;*/
            /*    color: #626262;*/
            /*    top: 28px;*/
            /*    text-align: justify;*/
            /*    font-family: 'Roboto', sans-serif;*/
            /*    font-size: 20px;*/
            /*    font-style: normal;*/
            /*    font-weight: 600;*/
            /*    line-height: normal;*/
            /*    letter-spacing: 2px;*/
            /*    cursor: pointer;*/
            /*}*/

            *:lang(ua-UA) .p_join_us #gform_drag_drop_area_18_16:after, *:lang(ua-UA) .p_join_us .gform_drop_area:after {
                content: 'Завантажте файл';
            }

            /**:lang(ua-UA)  .p_join_us #gform_drag_drop_area_20_16:after {*/
            /*    content: 'Завантажте файл';*/
            /*}*/

            div#gform_preview_18_16 {
                margin-bottom: 20px;
            }

            div#gform_preview_20_16 {
                margin-bottom: 20px;
            }

            .p_join_us .gform_drop_instructions {
                display: none !important;
            }

            .p_join_us .gform_fields input::placeholder {
                color: #626262;
                text-align: justify;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;
            }

            .p_join_us .gform_fields input {
                color: #626262 !important;
                text-align: justify;
                font-family: 'Roboto', sans-serif !important;
                font-size: 20px !important;
                font-style: normal;
                font-weight: 600 !important;
                line-height: normal;
                letter-spacing: 2px !important;
            }

            .p_join_us .gform_wrapper .gform_body li input::-webkit-input-placeholder, .gform_wrapper .gform_body li textarea::-webkit-input-placeholder {
                color: #626262;
                text-align: justify;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;
            }

            .p_join_us .gfield--type-textarea {
                border: 1px solid #231F20;
                background: #FFF;
                box-shadow: -6px 7px 1px 0px #000;

            }

            .p_join_us .gfield--type-textarea textarea {
                outline: none;
                border-bottom: none !important;
                color: #626262 !important;
                text-align: justify;
                font-family: 'Roboto', sans-serif !important;
                font-size: 20px !important;
                font-style: normal;
                font-weight: 400 !important;
                line-height: normal;
                letter-spacing: 2px !important;
                padding: 17px 18px;
                min-height: 263px;
                height: 263px !important;
            }

            .p_join_us .gform_legacy_markup_wrapper textarea.large {

            }

            @media only screen and (max-width: 991px) {
                .p_join_us .gfield--type-textarea textarea {
                    min-height: 372px;
                }
            }

            .p_join_us .gfield--type-textarea textarea::placeholder {
                color: #626262 !important;
                text-align: justify;
                font-family: 'Roboto', sans-serif !important;
                font-size: 20px !important;
                font-style: normal;
                font-weight: 400 !important;
                line-height: normal;
                letter-spacing: 2px !important;
            }

            input[type="file" i]::-webkit-file-upload-button {
                margin-right: 20px !important;
                border: none;
                background: transparent;
                color: #626262 !important;
                text-align: justify;
                font-family: 'Roboto', sans-serif !important;
                font-size: 20px !important;
                font-style: normal;
                font-weight: 600 !important;
                line-height: normal;
                letter-spacing: 2px !important;
            }

            .gfield_fileupload_filesize {
                display: none;
            }

            .gfield_fileupload_progress {
                display: none;
            }

            .gform_legacy_markup_wrapper span.gform_drop_instructions {
                display: none !important;
            }

            .gform_legacy_markup_wrapper div.validation_error, .gform_legacy_markup_wrapper ol.validation_list {
                margin: 20px 0 0 0 !important;
                border: none !important;
                padding: 0 !important;
            }

            .gform_legacy_markup_wrapper.gform_validation_error .gform_body ul li.gfield.gfield_error:not(.gf_left_half):not(.gf_right_half) {
                background: transparent;
                border: none !important;
                padding: 0;
            }

            .gform_legacy_markup_wrapper .field_description_below .gfield_description {
                padding-top: 9px !important;
            }

            .p_join_us .confirmations {
                padding: 0 20px;
            }

            @media only screen and (max-width: 480px) {
                .p_join_us .confirmations {
                    margin-bottom: -7px;
                }
            }

            .p_join_us .confirmations br {
                display: none;
            }

            .p_join_us .confirmations h3 {
                color: #FFF;
                text-align: center;
                /*text-shadow: -6px 7px 1px #000;*/
                font-family: 'Montserrat', sans-serif;
                font-size: 40px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;
                text-shadow: -8px 6px 0 #000, 0 -3px 1px #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 3px 0 #000, -5px 6px 0 #000, -3px 6px 0 #000, -3px -3px 0 #000;
                margin-bottom: 43px;
            }

            *:lang(ua-UA) .p_join_us .confirmations h3 br {
                display: block;
            }

            @media only screen and (max-width: 480px) {
                .p_join_us .confirmations h3 {
                    font-size: 28px;
                    letter-spacing: 2.8px;
                }
            }

            .p_join_us .confirmations p.text {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                max-width: 418px;
                margin: 0 auto;
            }

            @media only screen and (max-width: 480px) {
                .p_join_us .confirmations p.text {
                    font-size: 20px;
                    letter-spacing: 4px;
                }
            }

            .p_join_us .confirmations p.text_2 {
                color: #FFF;
                text-align: center;
                /*text-shadow: -6px 7px 1px #000;*/
                font-family: 'Montserrat', sans-serif;
                font-size: 40px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;
                text-shadow: -8px 6px 0 #000, 0 -3px 1px #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 3px 0 #000, -5px 6px 0 #000, -3px 6px 0 #000, -3px -3px 0 #000;
                max-width: 427px;
                margin: 221px auto 0;
                position: relative;
                z-index: 10;
            }

            *:lang(ua-UA) .p_join_us .confirmations p.text_2 {
                font-size: 36px;
                letter-spacing: 3.6px;
                max-width: 496px;
            }

            @media only screen and (max-width: 480px) {
                .p_join_us .confirmations p.text_2 {
                    font-size: 28px;
                    letter-spacing: 2.8px;
                    margin-top: 181px;
                    margin-bottom: 31px;
                }

                *:lang(ua-UA) .p_join_us .confirmations p.text_2 {
                    font-size: 20px;
                    letter-spacing: 2px;
                }
            }

            /*@media only screen and (max-width: 389px) {*/
            /*    .p_join_us .confirmations p.text_2 {*/
            /*        font-size: 28px;*/
            /*        letter-spacing: 2.8px;*/
            /*    }*/
            /*}*/

            .p_join_us .confirmations img {
                z-index: 1;
                bottom: 0;
                position: absolute;
                left: 50%;
                transform: translate(-50%, 0);
                max-width: 564px;
                width: 100%;
                padding: 0 20px;
                margin-bottom: 0;
            }

            @media only screen and (max-width: 480px) {
                .p_join_us .confirmations img {
                    height: 218px;
                    transform: translate(-50%, 0);
                    left: 50%;
                    margin: 0;
                    width: 270px;
                    padding: 0;
                }
            }

            .p_join_us form {

            }
        </style>
    <?php endif; ?>
</section>