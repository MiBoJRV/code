<?php global $faq2FFR;
$faq2FFR++; ?>

<section class="ffr-faq_2_section ffr-faq_section-<?php echo $faq2FFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="image_bg">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/how_bg.webp" alt="#">
    </div>
    <div class="ffr-faq_2_section__content">
        <h2 class="title"><?php echo get_sub_field('section_title'); ?></h2>
        <div class="text_list">
            <?php if (have_rows('text_list')): ?>
                <?php while (have_rows('text_list')):
                    the_row(); ?>
                    <h3><?php echo get_sub_field('title'); ?></h3>
                    <p><?php echo get_sub_field('text'); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php $image = get_sub_field('image'); ?>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        <div class="grid">
            <?php if (have_rows('grid_block')): ?>
                <?php while (have_rows('grid_block')):
                    the_row(); ?>
                    <div class="grid-item">
                        <?php if (get_sub_field('title') != ''): ?>
                            <h3><?php echo get_sub_field('title'); ?></h3>
                        <?php endif; ?>
                        <p><?php echo get_sub_field('text'); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
    <?php if ($faq2FFR < 2): ?>
        <style>
            .ffr-faq_2_section {
                position: relative;
                padding: 126px 15px 197px;
                margin-bottom: 50px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section {
                    padding: 30px 15px 80px;
                    margin-top: 50px;
                    margin-bottom: 0;
                }

            }

            .ffr-faq_2_section__content {
                position: relative;
                z-index: 9;
                max-width: 1200px;
                margin: 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section__content {
                    display: flex;
                    flex-direction: column;
                }
            }

            .ffr-faq_2_section .image_bg {
                position: absolute;
                z-index: 1;
                top: 0;
                transform: translate(-50%, 0);
                width: 100%;
                height: auto;
                margin: 0 auto;
                max-width: 1920px;
                left: 50%;
            }

            .ffr-faq_2_section .image_bg img {
                min-height: 1000px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section .image_bg img {
                    min-height: 1052px;
                }
            }

            .ffr-faq_2_section .title {
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                color: #FFF;
                padding: 11px 0 74px;
                position: relative;
                max-width: 1031px;
                margin: 0;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section .title {
                    font-size: 40px;
                    order: 1;
                }
            }

            .ffr-faq_2_section .title:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;
            }

            .ffr-faq_2_section .text_list p {
                color: #FFF;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px; /* 191.25% */
                margin-bottom: 72px;

            }


            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section__content > p {
                    font-size: 16px;
                    order: 2;
                }
            }
            .ffr-faq_2_section .text_list {
                order: 2;
            }
            .ffr-faq_2_section .text_list h3 {
                color: #FFF;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 30.6px; /* 153% */
                margin-bottom: 10px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section .text_list h3 {
                    font-size: 13px;
                }
            }

            .ffr-faq_2_section__content img {
                position: absolute;
                right: 0;
                bottom: 87px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section__content img {
                    position: relative;
                    order: 4;
                    margin-top: 65px;
                    bottom: 0;
                }
            }

            .ffr-faq_2_section .grid {
                display: grid;
                grid-template-areas: 'top-1 top-1' 'mid-1 mid-1'  'bot-1 bot-2';
                column-gap: 100px;
                row-gap: 35px;
                position: relative;
                z-index: 9;
                justify-content: space-between;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section .grid {
                    order: 3;
                    grid-template-areas: 'top-1' 'mid-1' 'bot-1' 'bot-2';
                }
            }

            .ffr-faq_2_section .grid-item:nth-child(1) {
                grid-area: top-1;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section .grid-item:nth-child(1) {
                    max-width: none;
                }
            }

            .ffr-faq_2_section .grid-item:nth-child(2) {
                grid-area: mid-1;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section .grid-item:nth-child(2) {
                    max-width: none;
                }
            }

            .ffr-faq_2_section .grid-item:nth-child(3) {
                grid-area: bot-1;
                width: 100%;
            }

            .ffr-faq_2_section .grid-item:nth-child(4) {
                grid-area: bot-2;
                width: 100%;
                max-width: 701px;
            }

            @media only screen and (max-width: 991px) {
            max-width: 100%;
            }


            .ffr-faq_2_section .grid-item {
                /*padding: 15px 8px;*/
                padding: 15px 8px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                display: flex;
                flex-direction: column;
                gap: 32px;
                max-width: 300px;
                min-height: 175px;
                align-items: center;
                justify-content: center;
            }


            @media only screen and (max-width: 991px) {
                .ffr-faq_2_section .grid-item {
                    max-width: 100%;
                }
            }

            .ffr-faq_2_section .grid-item h3 {
                color: #333;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 30.6px;
                margin: 0;
            }

            .ffr-faq_2_section .grid-item p {
                color: #666;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
                margin: 0;
            }
        </style>
    <?php endif; ?>
</section>