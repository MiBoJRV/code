<?php global $titleTextButFFR;
$titleTextButFFR++; ?>

<section
        class="ffr-title_text_buttons_section ffr-title_text_section-<?php echo $titleTextButFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-title_text_buttons_section__content ">
        <h2><?php echo get_sub_field('section_title'); ?></h2>
        <?php echo get_sub_field('section_text'); ?>
        <h3><?php echo get_sub_field('section_subtitle'); ?></h3>
        <ul class="section_list">
            <?php if (have_rows('list_repeater')): ?>
                <?php while (have_rows('list_repeater')):
                    the_row(); ?>
                    <li class="section_list-item">
                        <?php echo get_sub_field('item'); ?>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <p><?php echo get_sub_field('list_text'); ?></p>
        <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
            <?php echo get_sub_field('button_text'); ?>
        </a>
    </div>
    <?php if (get_sub_field('change_title_max_width') == 'Yes'): ?>
        <style>
            .ffr-title_text_section-<?php echo $titleTextButFFR;?> h2 {
                max-width: <?php echo get_sub_field('title_max_width'); ?>px;
            }
        </style>
    <?php endif; ?>
    <?php if ($titleTextButFFR < 2): ?>
        <style>
            .ffr-title_text_buttons_section {
                margin: 0 10px;
                padding: 70px 0;
                position: relative;
                z-index: 9;
            }

            .ffr-title_text_buttons_section__content {
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 50px 30px 50px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .ffr-title_text_buttons_section h2 {
                color: #333;
                text-align: center;
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                margin-bottom: 50px;

                max-width: <?php echo get_sub_field('title_max_width'); ?>px;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .ffr-title_text_buttons_section h2 {
                    font-size: 40px;
                    text-align: left;
                }
            }

            .ffr-title_text_buttons_section p {
                color: #333;
                text-align: center;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: 30px;
                margin: 0;
                max-width: 1104px;
                width: 100%;
            }

            .ffr-title_text_buttons_section p:not(:last-of-type) {
                margin-bottom: 15px;
            }

            .ffr-title_text_buttons_section h3 {
                color: #333;
                text-align: center;
                font-size: 24px;
                font-style: normal;
                font-weight: 400;
                line-height: 30px; /* 125% */
            }

            .ffr-title_text_buttons_section .section_list {
                display: flex;
                gap: 40px;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                width: 100%;
                margin: 60px 0;
            }

            .ffr-title_text_buttons_section .section_list-item {
                height: 55px;
                padding: 18px 15.05px 18px 15.95px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-shrink: 0;
                border-radius: 100px;
                background: radial-gradient(70.71% 70.71% at 50% 50%, #3601AD 0%, #170463 100%);
                font-size: 11px;
                font-style: normal;
                font-weight: 700;
                line-height: 18.7px;
                text-transform: uppercase;
                color: #ffffff;
                box-sizing: border-box;
                max-width: 190px;
                width: 100%;
                text-align: center;
            }

            .ffr-title_text_buttons_section .dialog_btn {
                padding: 13px 0 14.8px 0;
                font-size: 14px;
                font-weight: 700;
                line-height: 23.8px;
                text-transform: uppercase;
                color: #FF7277;
                border-radius: 100px;
                display: flex;
                align-items: center;
                justify-content: center;
                max-width: 350px;
                height: 52px;
                box-sizing: border-box;
                margin-top: 43px;
                border: 2px solid #FF7277;
                background: rgba(255, 255, 255, 0.00);
                box-shadow: 0px 2px 18px 0px rgba(82, 0, 255, 0.46);
                width: 100%;
            }

            .ffr-title_text_buttons_section .dialog_btn:hover {
                border: 2px solid #FF4B38;
                color: #FF4B38;
            }
        </style>
    <?php endif; ?>
</section>