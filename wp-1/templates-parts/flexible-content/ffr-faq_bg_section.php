<?php global $faqBgFFR;
$faqBgFFR++; ?>

<section class="ffr-faq_bg ffr-faq_bg-<?php echo $faqBgFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-faq_bg__content">
        <h2 class="title"><?php echo get_sub_field('section_title'); ?></h2>
        <div class="faq_bg__text">
            <?php if (have_rows('list_repeater')): ?>
                <?php while (have_rows('list_repeater')):
                    the_row(); ?>
                    <div class="faq_bg__text-item">

                        <h3><?php echo get_sub_field('title'); ?></h3>
                        <p><?php echo get_sub_field('text'); ?></p>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($faqBgFFR < 2): ?>
        <style>
            .ffr-faq_bg {
                position: relative;
                z-index: 9;
                background: radial-gradient(50% 50% at 50% 50%, #4F00FF 0%, #2D018F 100%);
                padding: 65px 30px 110px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_bg {
                    padding: 27px 15px 76px;
                }
            }

            .ffr-faq_bg .ffr-faq_bg__content {
                max-width: 1200px;
                margin: 0 auto;
            }

            .ffr-faq_bg .title {
                color: #FFF;
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                margin-bottom: 52px;
            }

            @media only screen and (max-width: 991px) {
                margin-bottom: 32px;
            }

            .ffr-faq_bg .faq_bg__text {
                /* -moz-column-count:2; !* Firefox *!
                 -webkit-column-count:2; !* Safari and Chrome *!
                 column-count:2;*/

                display: flex;
                justify-content: space-between;
                column-gap: 37px;
                flex-wrap: wrap;
                margin: 0 0 0 38px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_bg .faq_bg__text {
                    margin: 0;
                }
            }

            .ffr-faq_bg .faq_bg__text-item {
                padding: 0;
                margin: 0;
                max-width: 543px;
                /*width: 100%;*/
                margin-bottom: 20px;
                height: auto;
                width: calc(50% - 37px);

                /* -webkit-column-break-inside:avoid;
                 -moz-column-break-inside:avoid;
                 -moz-page-break-inside:avoid;
                 page-break-inside:avoid;
                 break-inside:avoid-column;*/
            }

            @media only screen and (max-width: 991px) {
                .ffr-faq_bg .faq_bg__text-item {
                    width: 100%;
                    max-width: 100%;
                }
            }

            .ffr-faq_bg .faq_bg__text-item h3 {
                color: #FFF;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 28.6px;
                margin: 0;
            }

            .ffr-faq_bg .faq_bg__text-item p {
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