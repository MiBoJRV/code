<?php global $how2FFR;
$how2FFR++; ?>

<section
        class="ffr-how_2_section ffr-how_2_section-<?php echo $how2FFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="image_bg">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/how_bg.webp" alt="#">
    </div>
    <div class="ffr-how_2_section__content">
        <h2 class="title"><?php echo get_sub_field('section_title'); ?></h2>
        <?php if (get_sub_field('section_text') != ''): ?>
            <div class="section_text">
                <?php echo get_sub_field('section_text'); ?>

            </div>
        <?php endif; ?>
        <ul class="section_list">
            <?php if (have_rows('list')): ?>
                <?php while (have_rows('list')):
                    the_row(); ?>
                    <li class="section_list-item">
                        <?php echo get_sub_field('item'); ?>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <?php if (get_sub_field('section_text_2') != ''): ?>
            <div class="section_text">
                <?php echo get_sub_field('section_text_2'); ?>
            </div>
        <?php endif; ?>
        <?php $image = get_sub_field('image'); ?>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>

        <?php if (get_sub_field('title') != ''): ?>
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

            <?php endif; ?>
        </div>
    </div>
    <?php if ($how2FFR < 2): ?>
        <style>
            .ffr-how_2_section {
                position: relative;
                padding: 126px 15px 0;
                min-height: 1052px;
                /*margin-bottom: 70px;*/
                margin-bottom: 130px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section {
                    padding: 30px 15px 80px;
                    margin-top: 50px;
                }

            }

            .ffr-how_2_section__content {
                position: relative;
                z-index: 9;
                max-width: 1200px;
                margin: 0 auto;
                min-height: 914px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section__content {
                    display: flex;
                    flex-direction: column;
                }
            }

            .ffr-how_2_section .image_bg {
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

            .ffr-how_2_section .image_bg img {
                min-height: 1000px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section .image_bg img {
                    min-height: 1300px;
                <?php if(get_sub_field('background_color_image') == 'Yes'):?> background: radial-gradient(70.71% 70.71% at 50% 50%, #4801E6 0%, #0E044A 100%);
                <?php endif; ?>

                }
            }

            .ffr-how_2_section .title {
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                color: #FFF;
                padding: 0 0 74px;
                position: relative;
                max-width: 1031px;
                margin: 0;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section .title {
                    font-size: 40px;
                    order: 1;
                }
            }

            .ffr-how_2_section .title:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;
            }

            .ffr-how_2_section .section_text {
                max-width: none;
            <?php if(get_sub_field('max_width_main_text') != ''):?> max-width: <?php echo get_sub_field('max_width_main_text'); ?>px;
            <?php endif; ?> position: relative;
                z-index: 9;
            }

            .ffr-how_2_section__content .section_text > p {
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
                max-width: 465px;
            }


            @media only screen and (max-width: 991px) {
                .ffr-how_2_section .section_text {
                    order: 2;
                    max-width: none;
                }

                .ffr-how_2_section__content .section_text > p {
                    font-size: 16px;
                    max-width: 100%;
                }
            }

            .ffr-how_2_section .section_list {
                display: flex;
                flex-direction: column;
                gap: 20px;
                margin-bottom: 20px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section .section_list {
                    order: 2;
                    align-items: center;
                }
            }

            .ffr-how_2_section .section_list-item {
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                color: #333;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 30.6px;
                max-width: 309px;
                height: 61px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section .section_list-item {
                    min-width: 309px;
                }
            }

            .ffr-how_2_section__content img {
                position: absolute;
                right: 0;
                z-index: 1;
                top: 0;
                max-width: 700px;
                width: calc(100% - 465px);
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section__content img {
                    position: relative;
                    order: 4;
                    margin: 65px auto 0;
                    width: 100%;
                }
            }

            .ffr-how_2_section .grid {
                display: grid;
                /*grid-template-columns: 310px 701px;*/
                grid-template-areas: 'top-1 top-1 ' 'mid-1 mid-2 ' 'mid-1 bot-1 ' 'bot-2 bot-2 ';
                column-gap: 100px;
                row-gap: 35px;
                position: relative;
                z-index: 9;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section .grid {
                    order: 3;
                    grid-template-areas: 'top-1 ' 'mid-1' 'mid-2' 'bot-1 ' 'bot-2';
                }
            }

            .ffr-how_2_section .grid-item:nth-child(1) {
                grid-area: top-1;
                max-width: 310px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section .grid-item:nth-child(1) {
                    max-width: none;
                }
            }

            .ffr-how_2_section .grid-item:nth-child(2) {
                grid-area: mid-1;
                max-width: 310px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section .grid-item:nth-child(2) {
                    max-width: none;
                }
            }

            .ffr-how_2_section .grid-item:nth-child(3) {
                grid-area: mid-2;
                width: 100%;
            }

            .ffr-how_2_section .grid-item:nth-child(4) {
                grid-area: bot-1;
                width: 100%;
            }

            .ffr-how_2_section .grid-item:nth-child(5) {
                grid-area: bot-2;
            }

            .ffr-how_2_section .grid-item {
                /*padding: 15px 8px;*/
                padding: 15px 8px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                display: flex;
                flex-direction: column;
                gap: 32px;
            }

            .ffr-how_2_section .grid-item h3 {
                color: #333;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 30.6px;
                margin: 0;
            }

            .ffr-how_2_section .grid-item p {
                color: #666;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
                margin: 0;
            }

            .ffr-how_2_section .section_btn {
                margin-top: 130px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-how_2_section .section_btn {
                    order: 3;
                    margin-top: 30px;
                }
            }

            .ffr-how_2_section .section_btn .dialog_btn {
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
                .ffr-how_2_section .section_btn .dialog_btn {
                    margin: 0 auto;
                }
            }
        </style>
    <?php endif; ?>
</section>