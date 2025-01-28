<?php global $titleNewsTextFFR;
$titleNewsTextFFR++; ?>

<section
        class="ffr-title_text_section ffr-title_text_section-<?php echo $titleNewsTextFFR; ?> <?php echo get_sub_field('custom_class'); ?> <?php echo get_sub_field('background_color'); ?> <?php echo get_sub_field('text_align'); ?>">
    <div class="ffr-title_text_section__content">
        <?php if (get_sub_field('section_title') != ''): ?>
            <h2><?php echo get_sub_field('section_title'); ?></h2>
        <?php endif; ?>

        <?php echo get_sub_field('section_text'); ?>
        <?php if (get_sub_field('button_text') != ''): ?>
            <div class="section_btn">
                <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                    <?php echo get_sub_field('button_text'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>

    <?php if (get_sub_field('change_title_max_width') == 'Yes'): ?>
        <style>
            .ffr-title_text_section-<?php echo $titleNewsTextFFR;?> h2 {
                max-width: <?php echo get_sub_field('title_max_width'); ?>px;
            }
        </style>

    <?php endif; ?>

        <style>
            .ffr-title_text_section-<?php echo $titleNewsTextFFR; ?> {
                padding: 30px 10px;
                position: relative;
                z-index: 9;
            <?php if(get_sub_field('section_padding_bottom') != ''):?>
                padding-bottom: <?php echo get_sub_field('section_padding_bottom'); ?>px;
            <?php endif; ?>
            <?php if(get_sub_field('section_padding_top') != ''):?>
                padding-top: <?php echo get_sub_field('section_padding_top'); ?>px;
            <?php endif; ?>
            }

            <?php if ($titleNewsTextFFR < 2): ?>


            .ffr-title_text_section.mt {
            <?php if(get_sub_field('section_margin_top') != ''):?> margin-top: <?php echo get_sub_field('section_margin_top'); ?>px;
            <?php endif; ?>
            }

            @media only screen and (max-width: 991px) {
                .ffr-title_text_section {
                    margin-top: 0;
                }
            }

            .ffr-title_text_section.white {
                background: #FFFFFF;
            }

            .ffr-title_text_section.transparent {
                background: transparent;
            }

            .ffr-title_text_section.blue {
                background: radial-gradient(70.71% 70.71% at 50% 50%, #3202AA 0%, #1E0475 100%);
            }

            .ffr-title_text_section__content {
                max-width: 1240px;
                width: 100%;
                margin: 0 auto;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 30px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            @media only screen and (max-width: 991px) {
                .ffr-title_text_section__content {
                    padding: 20px 15px;
                }
            }

            .ffr-title_text_section h2 {
                color: #333;
                text-align: center;
                font-size: 32px;
            <?php if(get_sub_field('title_font_size') != ''):?> font-size: <?php echo get_sub_field('title_font_size'); ?>px;
            <?php endif; ?> font-style: normal;
                font-weight: 400;
                line-height: 30px;
                margin-bottom: 30px;

                max-width: <?php echo get_sub_field('title_max_width'); ?>px;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .ffr-title_text_section h2 {
                    font-size: 40px;
                    line-height: 42px;
                    /*text-align: left;*/
                    margin-bottom: 20px;
                }
            }

            .ffr-title_text_section p {
                color: #333;
                text-align: center;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: 30px;
                margin: 0;
            <?php if(get_sub_field('max_width_text') == ''):?>
                max-width: 1180px;
            <?php endif; ?>

            <?php if(get_sub_field('max_width_text') != ''):?>
                max-width: <?php echo get_sub_field('max_width_text'); ?>px;
            <?php endif; ?> width: 100%;
            }

            .ffr-title_text_section .italic {
                font-style: italic;
            }

            .ffr-title_text_section a {
                color: #333;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: 30px;
                text-decoration-line: underline;
            }

            .ffr-title_text_section.left p {
                text-align: left;
            }

            .ffr-title_text_section ul {
                align-self: flex-start;
                margin-bottom: 30px;
            }

            .ffr-title_text_section ul li{
                list-style: disc;
                margin-left: 20px;
                font-size: 20px;
                line-height: 30px;
            }


            .ffr-title_text_section p:not(:last-of-type) {
                margin-bottom: 30px;
            }

            .ffr-title_text_section .dialog_btn {
                background: #FF7277;
                max-width: 296px;
                padding: 20px 29px 20px 29px;
                border-radius: 100px;
                box-shadow: 0 20px 40px -10px rgba(0, 65, 131, 0.4);
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                color: #ffffff;
                font-size: 14px;
                font-weight: 700;
                line-height: 23.8px;
                text-transform: uppercase;
                margin: 65px 0 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .ffr-title_text_section .dialog_btn {
                    margin: 25px auto 0 auto;
                }
            }

            .ffr-title_text_section .dialog_btn:hover {
                background-color: #FF263D;
            }
            <?php endif; ?>
        </style>

</section>