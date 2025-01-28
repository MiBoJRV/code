<?php global $ovalFFR;
$ovalFFR++; ?>

<section
        class="ffr-oval_block_section ffr-oval_block_section-<?php echo $ovalFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="image_bg">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/oval_bg.webp" alt="#">
    </div>
    <div class="ffr-oval_block_section__content">
        <h2 class="title"><?php echo get_sub_field('section_title'); ?></h2>
        <div class="grid">
            <div class="text_block">
                <p class="text"><?php echo get_sub_field('section_text'); ?></p>
                <?php if (get_sub_field('section_subtitle') != ''): ?>
                    <h3 class="subtitle">
                        <?php echo get_sub_field('section_subtitle'); ?>
                    </h3>
                <?php endif; ?>
            </div>
            <?php if (have_rows('oval_list')): ?>
                <?php while (have_rows('oval_list')):
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
        <div class="section_btn">
            <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                <?php echo get_sub_field('button_text'); ?>
            </a>
        </div>
    </div>
    <?php if ($ovalFFR < 2): ?>
        <style>
            .ffr-oval_block_section {
                position: relative;
                padding: 124px 15px 0;
                height: 1040px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section {
                    padding: 42px 0 70px;
                    height: auto;
                }
            }

            .ffr-oval_block_section .image_bg {
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

            .ffr-oval_block_section .image_bg img {
                min-height: 800px;
            }

            @media only screen and (max-width: 1600px) {
                .ffr-oval_block_section .image_bg img {
                    min-height: 1040px;
                }
            }

            .ffr-oval_block_section__content {
                position: relative;
                z-index: 9;
                max-width: 1260px;
                margin: 0 auto;
            }

            .ffr-oval_block_section .title {
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                color: #FFF;
                padding: 11px 0 74px;
                position: relative;
                max-width: 1083px;
                margin: 0 0 0 80px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .title {
                    font-size: 40px;
                    margin: 0;
                    padding: 11px 15px 74px;

                }
            }

            .ffr-oval_block_section .title:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;
            }
            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .title:after {
                    left: 15px;
                }
            }

            .ffr-oval_block_section .text {
                color: #FFF;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
                max-width: 453px;
                margin: 0 0 0 80px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .text {
                    margin: 0;
                    padding: 0 15px;
                }
            }

            .ffr-oval_block_section .subtitle {
                color: #FFF;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 30.6px;
                margin: 50px 0 0 80px
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .subtitle {
                    padding: 0 15px;
                    margin: 30px 0 0;
                }
            }

            .ffr-oval_block_section .grid {
                display: grid;
                row-gap: 50px;
                column-gap: 70px;
                grid-template-areas: 'top-1 top-2' 'mid-1 mid-2' 'bot-1 bot-1';
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .grid {
                    order: 3;
                    grid-template-areas: 'top-1' 'top-2' 'mid-1' 'mid-2' 'bot-1';
                }
            }

            .ffr-oval_block_section .grid-item {
                border-radius: 130px;
                background: linear-gradient(60deg, #420085 13.4%, #9E00FF 86.6%);
                max-width: 596px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 30px;
                flex-direction: column;
                padding: 50px 46px;
                position: relative;
                top: -40px;
                max-height: 242px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .grid-item {
                    margin: 0 auto;
                    border-radius: 0;
                    max-width: none;
                    max-height: none;
                }
            }

            .ffr-oval_block_section .text_block {
                grid-area: top-1;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .text_block {
                    margin-left: auto;
                    text-align: right;
                }
            }

            .ffr-oval_block_section .grid-item:nth-child(2) {
                grid-area: top-2;
                top: -40px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .grid-item:nth-child(2) {
                    top: 0;
                }
            }

            .ffr-oval_block_section .grid-item:nth-child(3) {
                grid-area: mid-1;
                top: -90px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .grid-item:nth-child(3) {
                    top: 0;
                }
            }

            .ffr-oval_block_section .grid-item:nth-child(4) {
                grid-area: mid-2;

            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .grid-item:nth-child(4) {
                    top: 0;
                }
            }

            .ffr-oval_block_section .grid-item:nth-child(5) {
                grid-area: bot-1;
                top: -90px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .grid-item:nth-child(5) {
                    top: 0;
                }
            }

            .ffr-oval_block_section .grid-item h3 {
                color: #FFF;
                text-align: center;
                font-size: 32px;
                font-style: normal;
                font-weight: 700;
                line-height: 30px;
            }

            .ffr-oval_block_section .grid-item p {
                color: #FFF;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 24px; /* 150% */
            }

            .ffr-oval_block_section .section_btn {
                position: absolute;
                z-index: 9;
                right: 0;
                bottom: 90px;
            }

            <?php if(get_sub_field('custom_class') == 'three'):?>
            .ffr-oval_block_section.three .section_btn {
                position: absolute;
                z-index: 9;
                left: 0;
                bottom: auto;
            }

            .ffr-oval_block_section.three .section_btn .dialog_btn {
                margin: 0 auto 0 0;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section.three .section_btn .dialog_btn {
                    margin: 0 auto;
                }
            }

            .ffr-oval_block_section.three .grid {
                /*row-gap: 190px;*/
            }

            .ffr-oval_block_section .grid-item {
                top: 0;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-oval_block_section .grid-item {
                    gap: 5px;
                }
            }

            .ffr-oval_block_section .grid-item:nth-child(2) {
                top: -135px;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-oval_block_section .grid-item:nth-child(2) {
                    top: -50px;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .grid-item:nth-child(2) {
                    top: 0;
                }
            }

            .ffr-oval_block_section .grid-item:nth-child(3) {
                top: -210px;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-oval_block_section .grid-item:nth-child(3) {
                    top: -165px;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .grid-item:nth-child(3) {
                    top: 0;
                }
            }

            .ffr-oval_block_section .grid-item:nth-child(4) {
                /*top: -135px;*/
            }

            .ffr-oval_block_section.three .section_btn {
                bottom: 50px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section.three .section_btn {
                    margin-top: 0;
                    position: static;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .image_bg img {
                    min-height: 1200px;
                }
            }

            <?php endif; ?>


            @media only screen and (max-width: 991px) {
                .ffr-oval_block_section .section_btn {
                    position: static;
                    margin-top: 50px;
                }
            }

            .ffr-oval_block_section .section_btn .dialog_btn {
                /*color: #FF7277;*/
                /*font-size: 15.12px;*/
                /*font-style: normal;*/
                /*font-weight: 700;*/
                /*line-height: 23.8px;*/
                /*text-transform: uppercase;*/
                /*border-radius: 100px;*/
                /*border: 2px solid #FF7277;*/
                /*background: rgba(255, 255, 255, 0.00);*/
                /*box-shadow: 0px 2px 18px 0px rgba(82, 0, 255, 0.46);*/
                /*padding: 8px 50px;*/

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
                margin: 0 auto;
            }

            .ffr-oval_block_section .section_btn .dialog_btn:hover {
                /*color: #FF263D;*/
                /*border-color: #FF263D;*/
                background-color: #FF263D;
            }
        </style>
    <?php endif; ?>
</section>