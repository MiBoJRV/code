<?php global $successFFR;
$successFFR++; ?>

<section
        class="ffr-success_section ffr-success_section-<?php echo $successFFR; ?> <?php echo get_sub_field('custom_class'); ?>">

    <img class="section-bg" src=" <?php echo get_template_directory_uri(); ?>/images/ffr/suc_bg_mobile_w.webp'" alt="">
    <div class="ffr-success_section__content">
        <h2><?php echo get_sub_field('title'); ?></h2>
        <div class="ffr-success_section__content_block">
            <div class="image">
                <?php $image = get_sub_field('section_image'); ?>
                <img class="section-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
            </div>

            <div class="text">
                <?php if (get_sub_field('description_text_#1') != ''): ?>
                    <div class="description_text">
                        <?php echo get_sub_field('description_text_#1'); ?>
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
                <?php if (get_sub_field('description_text_#2') != ''): ?>
                    <div class="description_text">
                        <?php echo get_sub_field('description_text_#2'); ?>
                    </div>
                <?php endif; ?>

                <?php if (get_sub_field('button_text') != ''): ?>
                    <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                        <?php echo get_sub_field('button_text'); ?>
                    </a>
                <?php endif; ?>

            </div>
        </div>

    </div>
    <?php if ($successFFR < 2): ?>
        <style>
            .ffr-success_section {
                background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/success.webp');
                background-repeat: no-repeat;
                background-size: contain;
                background-position: center;
                position: relative;
                color: #FFFFFF;
                height: 1391px;
            }

            @media only screen and (max-width: 1600px) {
                .ffr-success_section {
                    background-size: cover;
                }

            }

            @media only screen and (max-width: 991px) {
                .ffr-success_section {
                    /*height: auto;*/
                    /*background-image: url('*/
                <?php //echo get_template_directory_uri(); ?> /*/images/ffr/suc_bg_mobile.webp');*/
                    background-image: none;
                    /*height: auto;*/
                    height: none;
                }
            }

            .ffr-success_section__content {
                max-width: 1320px;
                margin: 0 auto;
                padding: 0 30px;
                position: relative;
                z-index: 9;
            }

            .ffr-success_section__content_block {
                display: flex;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_section__content_block {
                    flex-direction: column-reverse;
                    align-items: center;
                    gap: 60px;
                }
            }

            .ffr-success_section .section-bg {
                display: none;

            }

            @media only screen and (max-width: 991px) {
                .ffr-success_section .section-bg {
                    display: block;
                    position: absolute;
                    z-index: 1;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    max-height: 1400px;
                    object-fit: unset;
                }
            }

            .ffr-success_section h2 {
                color: #FFF;
                text-align: right;
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                padding-top: 340px;
                max-width: 778px;
                margin: 0 0 50px auto;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_section h2 {
                    font-size: 40px;
                    max-width: 578px;
                    padding-top: 134px;
                }
            }

            @media only screen and (max-width: 660px) {
                .ffr-success_section h2 {
                    max-width: 478px;
                }
            }

            .ffr-success_section .text {
                max-width: 496px;
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 50px;
            }

            .ffr-success_section .description_text p:not(:last-of-type) {
                margin-bottom: 15px;
            }
            .ffr-success_section .description_text p {
                color: #FFF;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: 30px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_section .description_text {
                    order: 1;
                }
            }

            .ffr-success_section .dialog_btn {
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
                .ffr-success_section .dialog_btn {
                    order: 3;
                }
            }

            .ffr-success_section .dialog_btn:hover {
                background-color: #FF263D;
            }

            .ffr-success_section .text_list {
                display: flex;
                flex-wrap: wrap;
                gap: 50px;
            }
            
            @media only screen and (max-width: 991px) {
                .ffr-success_section .text_list {
                    order: 2;
                }
            }

            .text_list .text_list-item {
                border-radius: 100px;
                background: radial-gradient(70.71% 70.71% at 50% 50%, #3601AD 0%, #170463 100%);
                height: 70px;
                width: 217px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_section .text_list {
                    flex-direction: column;
                    align-items: center;
                    gap: 30px;
                }
            }

            .text_list-item h3 {
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                text-transform: uppercase;
                margin-bottom: 4px;
            }

            .text_list-item p {
                text-align: center;
                font-size: 11px;
                font-style: normal;
                font-weight: 700;
                line-height: 15.4px;
                text-transform: uppercase;
                margin: 0;
            }

            .ffr-success_section .section-image {
                max-width: 862px;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_section .section-image {
                    max-height: 350px;
                }
            }


        </style>
    <?php endif; ?>
</section>