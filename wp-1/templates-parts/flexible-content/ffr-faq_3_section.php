<?php global $faq3FFR;
$faq3FFR++; ?>

<section
        class="ffr-faq_3_section ffr-faq_3_section-<?php echo $faq3FFR; ?> <?php echo get_sub_field('custom_class'); ?><?php echo get_sub_field('background_color'); ?> ">
    <?php if (get_sub_field('section_title') != ''): ?>
        <h2> <?php echo get_sub_field('section_title'); ?></h2>
    <?php endif; ?>
    <div class="ffr-faq_3_section__content">
        <div class="text_content">
            <?php if(get_sub_field('text_title') != ''):?>
                <h3><?php echo get_sub_field('text_title'); ?></h3>
            <?php endif; ?>
            <?php echo get_sub_field('text'); ?>
        </div>
    </div>

    <style>


        <?php if ($faq3FFR < 2): ?>
        .ffr-faq_3_section.white {
            background: #FFFFFF;
        }

        .ffr-faq_3_section.blue {
            background: radial-gradient(70.71% 70.71% at 50% 50%, #3202AA 0%, #1E0475 100%);
        }

        .ffr-faq_3_section {
            padding: 100px 15px;
        }

        .ffr-faq_3_section__content {
            max-width: 1200px;
            margin: 0 auto;
            border-radius: 20px;
            background: #FFF;
            box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
            padding: 50px 70px;
        }

        @media only screen and (max-width: 991px) {
            .ffr-faq_3_section__content {
                padding: 50px 5px;
            }
        }

        .ffr-faq_3_section h2 {
            color: #333;
            text-align: center;
            font-size: 55px;
            font-style: normal;
            font-weight: 700;
            line-height: 61.6px;
            margin-bottom: 50px;
        }

        .ffr-faq_3_section .text_content {

        }

        .ffr-faq_3_section .text_content h3 {
            color: #333;
            text-align: left;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: 61.6px;
            margin: 0 0 40px;
        }
        
        @media only screen and (max-width: 991px) {
            .ffr-faq_3_section .text_content h3 {
                text-align: center;
            }
        }

        .ffr-faq_3_section h4 {
            color: #333;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 30px; /* 150% */
            margin-bottom: 15px;
        }

        .ffr-faq_3_section .text_content p {
            color: #333;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 30px;
            margin-bottom: 40px;
        }
        .ffr-faq_3_section .text_content p:last-of-type {
            margin-bottom: 0;
        }

        <?php endif; ?>
    </style>

</section>