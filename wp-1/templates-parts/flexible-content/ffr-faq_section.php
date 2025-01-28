<?php global $faqFFR;
$faqFFR++; ?>

<section class="ffr-faq_section ffr-faq_section-<?php echo $faqFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="image_bg">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/how_bg.webp" alt="#">
    </div>
    <div class="ffr-faq_section__content">
        <h2 class="title"><?php echo get_sub_field('section_title'); ?></h2>
        <?php if (get_sub_field('section_text') != ''): ?>
            <p><?php echo get_sub_field('section_text'); ?></p>
        <?php endif; ?>
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
    <!--   <style>

         .ffr-faq_section-<?php /*echo $faqFFR;*/ ?> .grid {
             grid-template-areas: 'top-1 top-1 top-1' 'mid-1 mid-2 bot-1' ;
        }
         .ffr-faq_section-<?php /*echo $faqFFR;*/ ?> .grid-item {
             max-width: 300px;
         }
    </style>-->
    <?php if ($faqFFR < 2): ?>
        <style>
            .ffr-faq_section {
                position: relative;
                padding: 126px 15px 197px;
                margin-bottom: 50px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_section {
                    padding: 30px 15px 80px;
                    margin-top: 50px;
                    margin-bottom: 0;
                }

            }

            .ffr-faq_section__content {
                position: relative;
                z-index: 9;
                max-width: 1200px;
                margin: 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_section__content {
                    display: flex;
                    flex-direction: column;
                }
            }

            .ffr-faq_section .image_bg {
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

            .ffr-faq_section .image_bg img {
                min-height: 800px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_section .image_bg img {
                    min-height: 1052px;
                }
            }

            .ffr-faq_section .title {
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
                .ffr-faq_section .title {
                    font-size: 40px;
                    order: 1;
                }
            }

            .ffr-faq_section .title:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;
            }

            .ffr-faq_section__content > p {
                color: #FFF;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 30.6px;
                margin-bottom: 25px;
                max-width: 703px;
            }


            @media only screen and (max-width: 991px) {
                .ffr-faq_section__content > p {
                    font-size: 16px;
                    order: 2;
                }
            }

            .ffr-faq_section__content img {
                position: absolute;
                right: 0;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_section__content img {
                    position: relative;
                    order: 4;
                    margin-top: 65px;
                }
            }

            .ffr-faq_section .grid {
                display: grid;
                /*grid-template-columns: 310px 701px;*/
                /*grid-template-areas: 'top-1 top-1 ' 'mid-1 mid-2 ' 'mid-1 bot-1 ' 'bot-2 bot-2 ';*/
                grid-template-areas: 'top-1 top-1 top-1' 'mid-1 mid-2 bot-1';
                column-gap: 100px;
                row-gap: 35px;
                position: relative;
                z-index: 9;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_section .grid {
                    order: 3;
                    grid-template-areas: 'top-1 ' 'mid-1' 'mid-2' 'bot-1 ';
                }
            }

            .ffr-faq_section .grid-item:nth-child(1) {
                grid-area: top-1;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_section .grid-item:nth-child(1) {
                    max-width: none;
                }
            }

            .ffr-faq_section .grid-item:nth-child(2) {
                grid-area: mid-1;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_section .grid-item:nth-child(2) {
                    max-width: none;
                }
            }

            .ffr-faq_section .grid-item:nth-child(3) {
                grid-area: mid-2;
                width: 100%;
            }

            .ffr-faq_section .grid-item:nth-child(4) {
                grid-area: bot-1;
                width: 100%;
            }

            .ffr-faq_section .grid-item:nth-child(5) {
                grid-area: bot-2;
            }

            .ffr-faq_section .grid-item {
                /*padding: 15px 8px;*/
                padding: 15px 8px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                display: flex;
                flex-direction: column;
                gap: 32px;
                max-width: 300px;
            }


            @media only screen and (max-width: 991px) {
                .ffr-faq_section .grid-item {
                    max-width: 100%;
                }
            }

            .ffr-faq_section .grid-item h3 {
                color: #333;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 30.6px;
                margin: 0;
            }

            .ffr-faq_section .grid-item p {
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