<?php global $contactFaqFFR;
$contactFaqFFR++; ?>

<section
        class="ffr-contact_faq_section ffr-contact_faq_section-<?php echo $contactFaqFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="bg-image">
        <img class="desktop" src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/our_client_bg.webp" alt="#">
        <!--            <img class="mobile" src="-->
        <?php //echo get_stylesheet_directory_uri() ?><!--/images/ffr/types_bg_m.webp" alt="#">-->
    </div>
    <div class="ffr-contact_faq_section__content">
        <div class="contact_section">
            <div class="image">
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
            </div>
            <div class="text">
                <h2> <?php echo get_sub_field('contact_us_title'); ?></h2>
                <p><?php echo get_sub_field('text'); ?></p>
            </div>
        </div>
        <div class="faq_section">
            <h2><?php echo get_sub_field('faq_title'); ?></h2>
            <?php if (have_rows('faq_list')): ?>
                <?php while (have_rows('faq_list')):
                    the_row(); ?>
                    <div class="faq_list">
                        <div class="faq_list-item">
                            <h3><?php echo get_sub_field('question'); ?></h3>
                            <p><?php echo get_sub_field('answer'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="image mobile">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>

    </div>
    <?php if ($contactFaqFFR < 2): ?>
        <style>
            .ffr-contact_faq_section {
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .ffr-contact_faq_section {
                    background: radial-gradient(50% 50% at 50% 50%, #4F00FF 0%, #2D018F 100%)
                }
            }

            .ffr-contact_faq_section .bg-image {
                position: absolute;
                z-index: 1;
                top: -450px;
                left: 50%;
                transform: translateX(-50%);
                width: 100%;
                max-width: 1920px;
            }

            @media only screen and (max-width: 1130px) {
                .ffr-contact_faq_section .bg-image {
                    top: -375px;
                }
            }
            @media only screen and (max-width: 991px) {
                .ffr-contact_faq_section .bg-image {
                    display: none;
                }
            }

            .ffr-contact_faq_section .bg-image img {
                height: 2182px;
            }



            .ffr-contact_faq_section__content {
                max-width: 1230px;
                margin: 0 auto;
                z-index: 9;
                position: relative;
                padding: 306px 15px 205px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-contact_faq_section__content {
                    padding: 50px 15px 100px;
                }
            }

            .ffr-contact_faq_section .contact_section {
                display: flex;
                justify-content: space-between;
                gap: 60px;
            }

            .ffr-contact_faq_section .contact_section .image {
                max-width: 515px;
                width: 100%;
            }
            @media only screen and (max-width: 991px) {
                .ffr-contact_faq_section .contact_section .image {
                    display: none;
                }
            }

            .ffr-contact_faq_section .image.mobile {
                display: none;
                text-align: center;
                margin-top: 65px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-contact_faq_section .image.mobile {
                    display: block;
                }
            }

            .ffr-contact_faq_section .contact_section .text {

            }

            .ffr-contact_faq_section .contact_section .text h2 {
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                color: #FFF;
                padding: 11px 0 74px;
                position: relative;
                max-width: 766px;
                /*margin: 0 0 0 80px;*/
                margin: 0;
            }

            .ffr-contact_faq_section .contact_section .text p {
                max-width: 590px;
                margin-left: 40px;
                color: #fff;
            }

            @media only screen and (max-width: 991px) {
                .ffr-contact_faq_section .contact_section .text p {
                    max-width: 100%;
                    margin: 0;
                }
            }

            .ffr-contact_faq_section .contact_section .text h2:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;
            }

            .ffr-contact_faq_section .faq_section {
                max-width: 660px;
                margin-top: 55px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-contact_faq_section .faq_section {
                    max-width: 100%;
                }
            }

            .ffr-contact_faq_section .faq_section h2 {
                color: #FFF;
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                margin-bottom: 38px;
            }

            .ffr-contact_faq_section .faq_list {
                margin-left: 38px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-contact_faq_section .faq_list {
                    margin-left: 0;
                }
            }

            .ffr-contact_faq_section .faq_list-item {
                padding: 0;
                margin: 0;
                max-width: 543px;
                /* width: 100%; */
                margin-bottom: 20px;
                height: auto;
            }
            @media only screen and (max-width: 991px) {
                .ffr-contact_faq_section .faq_list-item {
                    max-width: 100%;
                }
            }

            .ffr-contact_faq_section .faq_list-item h3 {
                color: #FFF;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 28.6px;
                margin: 0;
            }

            .ffr-contact_faq_section .faq_list-item p {
                color: #FFF;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 28.6px;
                margin: 0;
            }
        </style>
    <?php endif; ?>
</section>