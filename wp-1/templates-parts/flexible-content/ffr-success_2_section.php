<?php global $success2FFR;
$success2FFR++; ?>

<section
        class="ffr-success_2_section ffr-success_2_section-<?php echo $success2FFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-success_2_section__content">

        <div class="ffr-success_2_section__content_block">
            <div class="image">
                <?php $image = get_sub_field('section_image'); ?>
                <img class="section-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>

            </div>
            <div class="text">
                <h2><?php echo get_sub_field('title'); ?></h2>
                <?php if (get_sub_field('description_text') != ''): ?>
                    <div class="description_text">
                        <?php echo get_sub_field('description_text'); ?>
                    </div>
                <?php endif; ?>
                <ul class="text_list">
                    <?php if (have_rows('list')): ?>
                        <?php while (have_rows('list')):
                            the_row(); ?>
                            <li class="text_list-item">
                                <h3><?php echo get_sub_field('title'); ?></h3>
                                <p><?php echo get_sub_field('text'); ?></p>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <?php if (get_sub_field('button_text') != ''): ?>
                    <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                        <?php echo get_sub_field('button_text'); ?>
                    </a>
                <?php endif; ?>

            </div>
        </div>

    </div>
    <?php if ($success2FFR < 2): ?>
        <style>
            .ffr-success_2_section {
                /*background-image: url('*/
            <?php //echo get_template_directory_uri(); ?> /*/images/ffr/success.webp');*/
                background: radial-gradient(70.71% 70.71% at 50% 50%, #3601AD 0%, #170463 100%);
                /*background-repeat: no-repeat;*/
                /*background-size: contain;*/
                /*background-position: center;*/
                position: relative;
                color: #FFFFFF;
                /*height: 1391px;*/
                padding: 97px 0;
            }

            @media only screen and (max-width: 1600px) {
                .ffr-success_2_section {
                    background-size: cover;
                }

            }

            @media only screen and (max-width: 991px) {
                .ffr-success_2_section {
                    /*height: auto;*/
                    /*background-image: url('*/
                <?php //echo get_template_directory_uri(); ?> /*/images/ffr/suc_bg_mobile.webp');*/
                    /*background-image: none;*/
                    /*height: auto;*/
                    /*height: none;*/
                }
            }

            .ffr-success_2_section__content {
                max-width: 1276px;
                margin: 0 auto;
                padding: 0 30px;
                position: relative;
                z-index: 9;
            }

            .ffr-success_2_section__content_block {
                display: flex;
                gap: 46px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_2_section__content_block {
                    flex-direction: column-reverse;
                    align-items: center;
                    gap: 60px;
                }
            }

            .ffr-success_2_section h2 {
                color: #FFF;
                font-size: 55px;
            <?php if(get_sub_field('title_font_size') != ''):?>
                font-size: <?php echo get_sub_field('title_font_size'); ?>px;
            <?php endif; ?>
                font-style: normal;
                font-weight: 700;
                line-height: 127.5% ;
                <?php if(get_sub_field('title_order') != ''):?>
                     order:<?php echo get_sub_field('title_order'); ?>;
                <?php endif; ?>
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_2_section h2 {
                    font-size: 40px;
                    max-width: 578px;
                    /*padding-top: 134px;*/
                }
            }

            @media only screen and (max-width: 660px) {
                .ffr-success_2_section h2 {
                    max-width: 478px;
                }
            }

            .ffr-success_2_section .text {
                max-width: 489px;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 25px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_2_section .text {
                    max-width: 100%;
                }
            }
            .ffr-success_2_section .description_text {
            <?php if(get_sub_field('title_order') != ''):?>
                order:<?php echo get_sub_field('text_order'); ?>;
            <?php endif; ?>
            }

            .ffr-success_2_section .description_text p:not(:last-of-type) {
                margin-bottom: 15px;
            }

            .ffr-success_2_section .description_text p {
                color: #FFF;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_2_section .description_text {
                    order: 1;
                }
            }

            .ffr-success_2_section .dialog_btn {
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
                /*margin-top: auto;*/
                /*margin-left: 157px;*/
                margin: auto auto 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_2_section .dialog_btn {
                    order: 3;
                }
            }

            .ffr-success_2_section .dialog_btn:hover {
                background-color: #FF263D;
            }

            .ffr-success_2_section .text_list {
                display: flex;
                flex-wrap: wrap;
                gap: 16px;
                <?php if(get_sub_field('list_order') != ''):?>
                     order:<?php echo get_sub_field('list_order'); ?>;
                <?php endif; ?>
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_2_section .text_list {
                    order: 2;
                }
            }

            .ffr-success_2_section .text_list .text_list-item {
                border-radius: 100px;
                background: radial-gradient(70.71% 70.71% at 50% 50%, #3601AD 0%, #170463 100%);
                height: 70px;
                /*width: 217px;*/
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 0 20px;
                min-width: 265px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_2_section .text_list {
                    flex-direction: column;
                    align-items: center;
                    gap: 30px;
                }
            }

            .ffr-success_2_section .text_list-item h3 {
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                text-transform: uppercase;
                margin-bottom: 4px;
            }

            .ffr-success_2_section .text_list-item p {
                text-align: center;
                font-size: 11px;
                font-style: normal;
                font-weight: 700;
                line-height: 15.4px;
                text-transform: uppercase;
                margin: 0;
            }

            .ffr-success_2_section .section-image {
                max-width: 662px;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_2_section .section-image {
                    max-height: 350px;
                }
            }


        </style>
    <?php endif; ?>
</section>