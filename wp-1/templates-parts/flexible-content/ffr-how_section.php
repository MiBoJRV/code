<?php global $howFFR;
$howFFR++; ?>

<section class="ffr-how_section ffr-how_section-<?php echo $howFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="image_bg">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/how_bg.webp" alt="#">
    </div>
    <div class="ffr-how_section__content">
        <h2 class="title"><?php echo get_sub_field('section_title'); ?></h2>

        <?php $image = get_sub_field('image'); ?>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>

        <?php if (get_sub_field('section_text') != ''): ?>
            <div class="section_text">
                <?php echo get_sub_field('section_text'); ?>
            </div>
        <?php endif; ?>

        <!--        --><?php //$image = get_sub_field('image'); ?>
        <!--        <img src="--><?php //echo $image['url'] ?><!--" alt="--><?php //echo $image['alt'] ?><!--"/>-->

        <?php if (get_sub_field('display_grid_list') != 'Yes'): ?>


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
                <?php if (get_sub_field('grid_button') == 'Yes'): ?>
                <div class="grid-btn">
                    <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                        <?php echo get_sub_field('button_text'); ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (get_sub_field('grid_button') != 'Yes'): ?>


            <?php if (get_sub_field('button_text') != ''): ?>
                <div class="section_btn">
                    <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                        <?php echo get_sub_field('button_text'); ?>
                    </a>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <?php if ($howFFR < 2): ?>
        <style>
            .ffr-how_section {
                position: relative;
                padding: 126px 15px 0;
                min-height: 1052px;
                /*margin-bottom: 70px;*/
                margin-bottom: 130px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section {
                    padding: 30px 15px 80px;
                    margin-top: 50px;
                    margin-bottom: 0;
                }

            }

            .ffr-how_section__content {
                position: relative;
                z-index: 9;
                max-width: 1200px;
                margin: 0 auto;
                min-height: 914px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section__content {
                    display: flex;
                    flex-direction: column;
                }
            }

            .ffr-how_section .image_bg {
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

            .ffr-how_section .image_bg img {
                min-height: 1000px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section .image_bg img {
                    min-height: 1052px;
                <?php if(get_sub_field('background_color_image') == 'Yes'):?> background: radial-gradient(70.71% 70.71% at 50% 50%, #4801E6 0%, #0E044A 100%);
                <?php endif; ?>

                }
            }

            .ffr-how_section .title {
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
                .ffr-how_section .title {
                    font-size: 40px;
                    order: 1;
                }
            }

            .ffr-how_section .title:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;
            }

            .ffr-how_section .section_text {
                max-width: none;
            <?php if(get_sub_field('max_width_main_text') != ''):?> max-width: <?php echo get_sub_field('max_width_main_text'); ?>px;
            <?php endif; ?> position: relative;
                z-index: 9;
            }

            .ffr-how_section__content .section_text > p {
                color: #FFF;
                /*font-size: 20px;*/
                /*font-style: normal;*/
                /*font-weight: 700;*/
                /*line-height: 30.6px;*/
                margin-bottom: 25px;
                /*max-width: 703px;*/

                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
            }


            @media only screen and (max-width: 991px) {
                .ffr-how_section .section_text {
                    order: 2;
                    max-width: none;
                }

                .ffr-how_section__content .section_text > p {
                    font-size: 16px;

                }
            }

            .ffr-how_section__content img {
                position: absolute;
                right: 0;
                /*bottom: 37px;*/
                z-index: 1;
            }


            .stock-trading .ffr-how_section__content img {
                margin-top: 100px;
            }
            @media only screen and (max-width: 1100px) {
                .stock-trading .ffr-how_section__content img {
                    margin-top: 150px;
                }
            }

            @media only screen and (max-width: 991px) {
                .stock-trading .ffr-how_section__content img {
                    margin-top: 0;
                }
            }


            .ponzi-scheme .ffr-how_section__content img {
                margin-top: 100px;
            }

            @media only screen and (max-width: 1100px) {
                .ponzi-scheme .ffr-how_section__content img {
                    margin-top: 150px;
                }
            }

            @media only screen and (max-width: 991px) {
                .ponzi-scheme .ffr-how_section__content img {
                    margin-top: 0;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section__content img {
                    position: relative;
                    order: 4;
                    margin-top: 65px;
                }
            }

            .ffr-how_section .grid {
                display: grid;
                /*grid-template-columns: 310px 701px;*/
                grid-template-areas: 'top-1 top-1 ' 'mid-1 mid-2 ' 'mid-1 bot-1 ' 'bot-2 bot-2 ';
                column-gap: 100px;
                row-gap: 35px;
                position: relative;
                z-index: 9;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section .grid {
                    order: 3;
                    grid-template-areas: 'top-1 ' 'mid-1' 'mid-2' 'bot-1 ' 'bot-2';
                }
            }

            .ffr-how_section .grid-item:nth-child(1) {
                grid-area: top-1;
                max-width: 310px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section .grid-item:nth-child(1) {
                    max-width: none;
                }
            }

            .ffr-how_section .grid-item:nth-child(2) {
                grid-area: mid-1;
                max-width: 310px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section .grid-item:nth-child(2) {
                    max-width: none;
                }
            }

            .ffr-how_section .grid-item:nth-child(3) {
                grid-area: mid-2;
                width: 100%;
            }

            .ffr-how_section .grid-item:nth-child(4) {
                grid-area: bot-1;
                width: 100%;
            }

            .ffr-how_section .grid-item:nth-child(5) {
                grid-area: bot-2;
            }

            .ffr-how_section .grid-item {
                /*padding: 15px 8px;*/
                padding: 15px 8px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            .ffr-how_section .grid-item h3 {
                color: #333;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 30.6px;
                margin: 0;
            }

            .ffr-how_section .grid-item p {
                color: #666;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
                margin: 0;
            }

            .ffr-how_section .section_btn {
                margin-top: 130px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section .section_btn {
                    order: 3;
                    margin-top: 30px;
                }
            }

            .ffr-how_section .grid-btn {
                margin: 0 0 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section .grid-btn {
                    margin: 0  auto;
                }
            }


            .ffr-how_section .dialog_btn {
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
                margin: 0 auto 0 0;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_section .dialog_btn {
                    margin: 0 auto;
                }
            }
        </style>
    <?php endif; ?>
</section>