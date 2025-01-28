<?php global $mainBannerAbout;
$mainBannerAbout++;
?>

<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p-main-banner-about p-main-banner-about-<?php echo $mainBannerAbout; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p-main-banner-about__content">
        <div class="text-content">
            <div class="text-content-left _anim-items _anim-no-hide">

                <h1 class="title">
                    <span class="sub_title"><?php echo get_sub_field('sub_title'); ?></span>
                    <?php echo get_sub_field('title'); ?></h1>
                <h2><?php echo get_sub_field('small_title'); ?></h2>
                <p class="big_text"><?php echo get_sub_field('text_1'); ?></p>
                <?php echo get_sub_field('text_2'); ?>
            </div>
            <div class="scroll-btn _anim-items _anim-no-hide">
                <div class="scroll-text">
                    <p><?php echo get_sub_field('scroll_text'); ?></p>
                </div>
                <div class="text-content-right _anim-items _anim-no-hide">
                    <a class="" href="<?php echo get_sub_field('button_link'); ?>">
                        <?php echo get_sub_field('button_text'); ?>
                    </a>
                </div>
            </div>

        </div>
        <div class="image-content _anim-items _anim-no-hide">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
    </div>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($mainBannerAbout < 2): ?>
        <style>

            .p-main-banner-about {
                /*padding: 218px 0;*/
                padding: 287px 0 193px;
                position: relative;

            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about {
                    padding: 160px 0 0;
                    min-height: 800px;
                }
            }

            .p-main-banner-about .p-main-banner-about__content {
                max-width: 1278px;
                /*padding: 0 20px;*/
                margin: 0 auto;
                position: relative;
                /*padding-bottom: 36px;*/
                padding-left: 20px;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about .p-main-banner-about__content {
                    display: flex;
                    flex-direction: column;
                    padding-left: 0;
                }
            }

            .p-main-banner-about .text-content {
                display: flex;
                /*justify-content: space-between;*/
                /*align-items: end;*/
                position: relative;
                z-index: 10;
                flex-direction: column;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about .text-content {
                    position: static;
                    display: block;
                }
            }

            .p-main-banner-about .text-content-right {
                margin-bottom: -118px;

                transform: translateY(250%);
                opacity: 0;
                transition: all 0.3s ease 0s;
            }

            .p-main-banner-about .text-content-right._active {
                transform: translateY(0);
                opacity: 1;
                display: flex;
                justify-content: center;
                margin-top: 55px;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about .text-content-right._active {
                    position: absolute;
                    bottom: 200px;
                    left: 50%;
                    transform: translate(-50%, 0);
                }
            }

            .p-main-banner-about .text-content-right a {
                display: flex;
                width: 159px;
                height: 63px;
                padding: 20px 50px;
                justify-content: center;
                align-items: center;
                gap: 10px;
                flex-shrink: 0;
                color: #FFFCE9;
                text-align: center;
                text-shadow: 0px 4px 14px rgba(251, 254, 255, 0.45);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 2px;
                text-transform: uppercase;
                border-radius: 30px;
                background: #FF7A00;
                box-shadow: 8px 4px 1px 0px #000;
            }

            *:lang(ua-UA) .p-main-banner-about .text-content-right a {
                max-width: 252px;
                width: auto;
            }


            .p-main-banner-about .text-content-right a:hover {
                background-color: #FF983A;;
            }

            .p-main-banner-about .text-content-right a:active {
                background-color: #307847;;
            }

            .p-main-banner-about .image-content {
                max-width: 996px;
                max-height: 733px;
                width: 100%;
                position: absolute;
                right: -178px;
                bottom: -170px;
                transform: translate(150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            @media only screen and (max-width: 1600px) {
                .p-main-banner-about .image-content {
                    right: 0;
                }
            }

            @media only screen and (max-width: 991px) {
            min-height: 286px;
            }

            .p-main-banner-about .image-content._active {
                transform: translate(0, 0);
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about .image-content._active {
                    position: static;
                    margin-top: 50px;
                    text-align: center;
                    transform: translate(0, -37px);
                }
            }


            .p-main-banner-about .text-content-left {
                max-width: 850px;
                width: 100%;
                transform: translate(-150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;

            }

            .p-main-banner-about .text-content-left._active {
                transform: translate(0, 0);
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about .text-content-left {
                    padding-left: 20px;
                }

                .p-main-banner-about .text-content-left._active {
                    display: flex;
                    flex-direction: column;
                    gap: 15px;
                }
            }

            .p-main-banner-about .scroll-btn {
                text-align: center;
                margin-top: 95px;
                opacity: 0;
                transition: all 1s ease 0s;
            }
            .p-main-banner-about .scroll-btn._active {
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about .scroll-btn {
                    margin-top: 50px;
                }
            }

            .p-main-banner-about .sub-title {
                color: #FFF;
                text-shadow: 8px 4px 1px #1F1D1D;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about .sub-title {
                    font-size: 32px;
                    letter-spacing: 3.2px;
                }
            }

            .p-main-banner-about .title {
                color: #FFFCE9;
                /*text-shadow: 10px 5px 1px #181717;*/
                font-family: 'Montserrat', system-ui;
                font-size: 64px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 12.8px;
                text-transform: uppercase;
                margin: 0;
                text-shadow: 8px 8px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 8px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
            }

            .p-main-banner-about .title .sub_title {
                display: block;
                color: #FFFCE9;
                /*text-shadow: 10px 5px 1px #181717;*/
                font-family: 'Montserrat', system-ui;
                font-size: 64px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 12.8px;
                text-transform: uppercase;
                margin: 0;
                text-shadow: 8px 8px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 8px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
            }

            *:lang(ua-UA) .p-main-banner-about .title {
                margin-bottom: 30px;
                text-shadow: 8px 8px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 8px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about .title {
                    font-size: 45px;
                    letter-spacing: 9px;
                    text-shadow: 10px 4px 0 #000, -1px 1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000, 0px -1px 0 #000, 1px -1px 0 #000;
                }

                .p-main-banner-about .title .sub_title {
                    font-size: 45px;
                    letter-spacing: 9px;
                    text-shadow: 10px 4px 0 #000, -1px 1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000, 0px -1px 0 #000, 1px -1px 0 #000;
                }
                *:lang(ua-UA) .p-main-banner-about .title {
                    margin-bottom: 30px;
                    text-shadow: 10px 4px 0 #000, -1px 1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000, 0px -1px 0 #000, 1px -1px 0 #000;
                }
            }

            @media only screen and (max-width: 340px) {
                .p-main-banner-about .title {
                    font-size: 40px;
                }
            }

            .p-main-banner-about h2 {
                color: #FFFCE9;
                text-shadow: 4px 4px 1px #101010;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about h2 {
                    display: none;
                }

                *:lang(ua-UA) .p-main-banner-about h2 {
                    display: block;
                    margin-bottom: 0;
                }
            }

            *:lang(ua-UA) .p-main-banner-about h2 {
                max-width: 570px;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about h2 {
                    font-size: 24px;
                    letter-spacing: 4.8px;
                    margin-bottom: 15px;
                }
            }

            .p-main-banner-about p. {
                color: #FFF;
                text-shadow: 3px 2px 0 #101010;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 4px;
            }

            .p-main-banner-about p.big_text {
                color: #FFFCE9;
                font-family: 'Roboto', system-ui;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 3.2px;
                max-width: 403px;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner-about p.big_text {
                    color: #FFFCE9;
                    text-shadow: 4px 4px 1px #101010;
                    font-family: 'Roboto', system-ui;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    text-transform: uppercase;
                    font-size: 24px;
                    letter-spacing: 4.8px;
                    margin-bottom: 59px;
                }
            }

            .p-main-banner-about .scroll-text p {
                color: #FFF500;
                text-shadow: 3px 2px 0px #101010;
                font-family: 'Montserrat', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                padding: 0 20px;
            }

            .divider {
                height: 36px;
                width: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
            }
        </style>
    <?php endif; ?>
</section>