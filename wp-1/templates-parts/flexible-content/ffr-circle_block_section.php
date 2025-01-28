<?php global $circleFFR;
$circleFFR++; ?>

<section
        class="ffr-circle_block_section ffr-circle_block_section-<?php echo $circleFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="image_bg">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/oval_bg.webp" alt="#">
    </div>
    <div class="ffr-circle_block_section__content">
        <h2 class="title"><?php echo get_sub_field('section_title'); ?></h2>

        <div class="text_block">
            <p class="text"><?php echo get_sub_field('section_text'); ?></p>
            <?php if (get_sub_field('section_subtitle') != ''): ?>
                <h3 class="subtitle">
                    <?php echo get_sub_field('section_subtitle'); ?>
                </h3>
            <?php endif; ?>
        </div>
        <div class="grid">
            <?php if (have_rows('circle_list')): ?>
                <?php while (have_rows('circle_list')):
                    the_row(); ?>
                    <div class="grid-item">
                        <?php $image = get_sub_field('icon'); ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                        <?php if (get_sub_field('title') != ''): ?>
                            <h3><?php echo get_sub_field('title'); ?></h3>
                        <?php endif; ?>
                        <?php if (get_sub_field('text') != ''): ?>
                            <p><?php echo get_sub_field('text'); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php if (get_sub_field('button_text') != ''): ?>
            <div class="section_btn">
                <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                    <?php echo get_sub_field('button_text'); ?>
                </a>
            </div>
        <?php endif; ?>
<?php if(get_sub_field('show_info_block') == 'Yes'):?>


        <div class="circle-info-wrap">
            <div class="circle-info">
                <?php if (have_rows('info_block')): ?>
                    <?php while (have_rows('info_block')):
                        the_row(); ?>
                        <p>
                            <?php echo get_sub_field('info_block_text'); ?>
                        </p>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
<?php endif; ?>
    </div>
    <?php if ($circleFFR < 2): ?>
        <style>
            .ffr-circle_block_section {
                position: relative;
                padding: 94px 0px 0;
            }
            .ffr-circle_block_section.mbno {
                margin-bottom: 0;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section {
                    padding: 42px 0 70px;
                }
            }

            .ffr-circle_block_section .circle-info-wrap {
                background-color: #FFFFFF;
                padding: 0;
                position: relative;
                margin-bottom: 75px;
                display: flex;
                justify-content: center;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .circle-info-wrap {
                    margin-bottom: 0;
                }
            }


            .ffr-circle_block_section .circle-info {
                position: static;
                bottom: -40px;
                z-index: 9;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 34px 48px;
                text-align: center;
                left: 50%;
                /*transform: translate(-50%, 100%);*/
                max-width: 1200px;
                width: 100%;
                margin-top: 40px;
            }

            .ffr-circle_block_section .image_bg {
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

            /*.ffr-circle_block_section .image_bg img {*/
            /*    min-height: 1215px;*/
            /*}*/

            @media only screen and (max-width: 1600px) {
                .ffr-circle_block_section .image_bg img {
                    min-height: 1040px;
                }
            }

            .ffr-circle_block_section__content {
                position: relative;
                z-index: 9;
                max-width: 1260px;
                margin: 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section__content {
                    padding: 0 15px;
                }
            }

            .ffr-circle_block_section .title {
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                color: #FFF;
                padding: 11px 0 74px;
                position: relative;
                max-width: 1083px;

            <?php if(get_sub_field('title_max_width') != ''):?>
                max-width: <?php echo get_sub_field('title_max_width'); ?>px;
            <?php endif; ?>
                margin: 0 0 0 80px;
            <?php if(get_sub_field('title_margin_bottom') != ''):?>
                margin-bottom: <?php echo get_sub_field('title_margin_bottom'); ?>px;
            <?php endif; ?>
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .title {
                    font-size: 40px;
                    margin: 0;
                    padding: 11px 0 74px;

                }
            }

            .ffr-circle_block_section .title:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;
            }

            .ffr-circle_block_section .text {
                color: #FFF;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
                max-width: 453px;
                margin: 0 0 0 80px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .text {
                    margin: 0;
                    padding: 0 15px;
                    max-width: 100%;
                }
            }

            .ffr-circle_block_section .subtitle {
                color: #FFF;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 30.6px;
                margin: 50px 0 0 80px
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .subtitle {
                    margin: 0;
                    padding: 0 15px;
                }
            }

            .ffr-circle_block_section .grid {
                display: grid;
                row-gap: 50px;
                column-gap: 70px;
                grid-template-areas: 'top-1 top-2' 'mid-1 mid-2' 'bot-1 bot-1';
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .grid {
                    order: 3;
                    grid-template-areas: 'top-1' 'top-2' 'mid-1' 'mid-2' 'bot-1';
                }
            }

            .ffr-circle_block_section .grid-item {
                border-radius: 50%;
                background: linear-gradient(60deg, #420085 13.4%, #9E00FF 86.6%);
                max-width: 335px;
                max-height: 335px;
                display: flex;
                align-items: center;
                justify-content: center;
                /*gap: 30px;*/
                flex-direction: column;
                padding: 39px 0;
                position: relative;
                /*top: -40px;*/
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .grid-item {
                    margin: 0 auto;
                    max-width: none;
                    max-height: none;
                }
            }

            .ffr-circle_block_section .text_block {
                grid-area: top-1;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .text_block {
                    margin-left: auto;
                    margin-bottom: 70px;
                    text-align: left;
                }
            }


            .ffr-circle_block_section .grid-item h3 {
                color: #FFF;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 24px;
                max-width: 239px;
                padding: 20px 0 12px;
                margin: 0;
            }

            .ffr-circle_block_section .grid-item p {
                color: #FFF;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 24px;
                max-width: 239px;
            }

            .ffr-circle_block_section .section_btn {
                position: absolute;
                z-index: 9;
                left: 90px;
                right: auto;
                bottom: 41px;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-circle_block_section .section_btn {
                    right: 90px;
                    left: auto;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .section_btn {
                    position: static;
                    /*margin-top: 50px;*/
                }
            }

            .ffr-circle_block_section .section_btn .dialog_btn {
                border-radius: 100px;
                border: 2px solid #FF7277;
                background: rgba(255, 255, 255, 0.00);
                box-shadow: 0px 2px 18px 0px rgba(82, 0, 255, 0.46);
                color: #FF7277;
                font-size: 15.12px;
                font-style: normal;
                font-weight: 700;
                line-height: 23.8px; /* 157.407% */
                text-transform: uppercase;
                width: 233px;
                height: 41px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .section_btn .dialog_btn {
                    margin: 0 auto;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .section_btn .dialog_btn:hover {
                    border-color: #FF263D;
                    color: #FF263D;
                }

            }

            .ffr-circle_block_section .section_btn .dialog_btn:hover {
                background-color: #FF263D;
            }

            <?php if(get_sub_field('number_of_items') == '4'):?>

            .ffr-circle_block_section .image_bg img {
                min-height: 1040px;
            }

            .ffr-circle_block_section .circle-info {
                max-width: 100%;
                display: flex;
                justify-content: space-between;
                background: transparent;
                box-shadow: none;
                padding: 0;
                gap: 90px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .circle-info {
                    flex-direction: column;
                }
            }

            .ffr-circle_block_section .circle-info-wrap {
                padding: 0 10px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .circle-info-wrap {
                    padding: 0;
                }
            }

            .ffr-circle_block_section .circle-info p {
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 34px 30px;
                border-radius: 10px;
            }

            @media only screen and (max-width: 1300px) {
                .ffr-circle_block_section .circle-info {
                    gap: 40px;
                }
            }

            .ffr-circle_block_section__content {
                max-width: 1320px;
            }

            .ffr-circle_block_section .grid {
                display: grid;
                row-gap: 0;
                column-gap: 0;
                grid-template-areas:
                    'el-1 el-1 '
                    'el-2 el-3'
                    'el-4 el-5';
                max-width: 670px;
                margin: -104px 140px 0 auto;
            }

            @media only screen and (max-width: 1100px) {
                .ffr-circle_block_section .grid {
                    margin: 0 80px 0 auto;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .grid {
                    grid-template-areas:
                    'el-1'
                    'el-2'
                    'el-3'
                    'el-4'
                    'el-5';
                    margin: 0 auto;
                    max-width: 100%;
                    justify-content: center;
                    gap: 50px;
                }
            }

            .ffr-circle_block_section .grid-item {
                width: 335px;
                height: 335px;
            }

            .ffr-circle_block_section .grid-item:nth-child(1) {
                grid-area: el-1;
                /*top: 0;*/
                /*right: -335px;*/
                /*position: relative;*/
                margin-left: 270px;
                position: static;
                margin-top: -50px;
                margin-bottom: 50px;
            }

            @media only screen and (max-width: 1100px) {
                .ffr-circle_block_section .grid-item:nth-child(1) {
                    margin: 0 50px 50px;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .grid-item:nth-child(1) {
                    margin: 0 50px;
                }
            }

            .ffr-circle_block_section .grid-item:nth-child(2) {
                grid-area: el-2;
                /*top: 0;*/
                /*position: relative;*/
                position: static;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-circle_block_section .grid-item:nth-child(2) {
                    /*margin-top: -67px;*/
                    /*margin-left: 91px;*/
                }
            }

            .ffr-circle_block_section .grid-item:nth-child(3) {
                grid-area: el-3;
                /*top: 76px;*/
                /*right: -140px;*/
                /*position: relative;*/
                position: static;
                margin-top: 139px;
                margin-left: 115px;
            }

            @media only screen and (max-width: 1300px) {
                .ffr-circle_block_section .grid-item:nth-child(3) {
                    margin-left: 45px;
                }
            }

            @media only screen and (max-width: 1200px) {
                .ffr-circle_block_section .grid-item:nth-child(3) {
                    /*margin-top: 0;*/
                    /*margin-left: 69px;*/
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .grid-item:nth-child(3) {
                    margin: 0 50px;
                }
            }

            .ffr-circle_block_section .grid-item:nth-child(4) {
                grid-area: el-4;
                /*top: 0;*/
                /*right: 335px;*/
                /*position: relative;*/
                position: static;
                margin-top: -613px;
                margin-left: -450px;
            }

            @media only screen and (max-width: 1300px) {
                .ffr-circle_block_section .grid-item:nth-child(4) {
                    margin-left: -380px;
                }
            }

            @media only screen and (max-width: 1200px) {
                .ffr-circle_block_section .grid-item:nth-child(4) {
                    margin-left: -108px;
                    margin-top: -95px;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .grid-item:nth-child(4) {
                    margin: 0 auto;
                }
            }




            <?php endif; ?>

            <?php if(get_sub_field('number_of_items') == '5'):?>

            .ffr-circle_block_section {
                min-height: 1215px;
                padding-left: 0;
                padding-right: 0;
                margin-bottom: 75px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section {
                    margin-bottom: 0;
                }
            }


            .ffr-circle_block_section .grid {
                display: grid;
                row-gap: 0;
                column-gap: 0;
                grid-template-areas:
                    'el-1 el-1 '
                    'el-2 el-3'
                    'el-4 el-5';
                max-width: 670px;
                margin: -345px 140px 200px auto;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-circle_block_section .grid {
                    margin-right: 170px;
                    margin-top: -200px;
                }
            }

            .ffr-circle_block_section .image_bg img {
                min-height: 1215px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .grid {
                    grid-template-areas:
                    'el-1'
                    'el-2'
                    'el-3'
                    'el-4'
                    'el-5';
                    margin: 0 auto;
                    max-width: 100%;
                    justify-content: center;
                    gap: 50px;
                }
            }

            .ffr-circle_block_section .grid-item {
                width: 335px;
                height: 335px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-circle_block_section .grid-item {
                    margin: 0 !important;
                }
            }


            .ffr-circle_block_section .grid-item:nth-child(1) {
                grid-area: el-1;
                /*top: 0;*/
                /*right: -335px;*/
                /*position: relative;*/
                margin-left: 335px;
                position: static;
            }

            .ffr-circle_block_section .grid-item:nth-child(2) {
                grid-area: el-2;
                /*top: 0;*/
                /*position: relative;*/
                position: static;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-circle_block_section .grid-item:nth-child(2) {

                    margin-top: -67px;
                    margin-left: 91px;
                }
            }

            .ffr-circle_block_section .grid-item:nth-child(3) {
                grid-area: el-3;
                /*top: 76px;*/
                /*right: -140px;*/
                /*position: relative;*/
                position: static;
                margin-top: 76px;
                margin-left: 140px;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-circle_block_section .grid-item:nth-child(3) {
                    margin-top: 0;
                    margin-left: 69px;
                }
            }

            .ffr-circle_block_section .grid-item:nth-child(4) {
                grid-area: el-4;
                /*top: 0;*/
                /*right: 335px;*/
                /*position: relative;*/
                position: static;
                margin-left: -335px;
                margin-top: -67px;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-circle_block_section .grid-item:nth-child(4) {
                    margin-left: -108px;
                    margin-top: -95px;
                }
            }

            .ffr-circle_block_section .grid-item:nth-child(5) {
                grid-area: el-5;
                /*top: 67px;*/
                /*right: 198px;*/
                /*position: relative;*/
                position: static;
                margin-left: -198px;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-circle_block_section .grid-item:nth-child(5) {
                    margin-left: -133px;
                    margin-top: -33px;
                }
            }


            <?php endif; ?>
        </style>
    <?php endif; ?>
</section>