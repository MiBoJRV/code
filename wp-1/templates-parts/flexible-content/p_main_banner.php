<?php global $mainBanner;
$mainBanner++;
?>

<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p-main-banner p-main-banner-<?php echo $mainBanner; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p-main-banner__content">
        <div class="text-content">
            <div class="text-content-left _anim-items _anim-no-hide">
                <span class="sub-title"><?php echo get_sub_field('sub_title'); ?></span>
                <h1 class="title"><?php echo get_sub_field('title'); ?></h1>
                <h2><?php echo get_sub_field('small_title'); ?></h2>
                <p class="big_text"><?php echo get_sub_field('text_1'); ?></p>
                <?php echo get_sub_field('text_2'); ?>
            </div>
            <div class="text-content-right _anim-items _anim-no-hide">
                <a class="" href="<?php echo get_sub_field('button_link'); ?>">
                    <?php echo get_sub_field('button_text'); ?>
                </a>
            </div>
        </div>
        <div class="image-content _anim-items _anim-no-hide">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
    </div>
    
    <?php if ($mainBanner < 2): ?>
        <style>

            .p-main-banner {
                padding: 218px 0;
                overflow: hidden;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner {
                    padding: 160px 0 0;
                    min-height: 800px;

                }
            }

            .p-main-banner .p-main-banner__content {
                max-width: 1278px;
                padding: 0 0 0 15px;
                margin: 0 auto;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner .p-main-banner__content {
                    display: flex;
                    flex-direction: column;
                    padding: 0;
                }
            }

            .p-main-banner .text-content {
                display: flex;
                justify-content: space-between;
                align-items: end;
                position: relative;
                z-index: 10;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner .text-content {
                    position: static;
                    padding: 0 15px;
                    width: 100%;
                    display: block;
                }
            }

            .p-main-banner .text-content-right {
                margin-bottom: -118px;
                margin-right: 108px;
                transform: translateY(250%);
                opacity: 0;
                transition: all 0.3s ease 0s;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner .text-content-right {
                    bottom: 158px;
                }
            }

            .p-main-banner .text-content-right._active {
                transform: translateY(0);
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner .text-content-right._active {
                    position: absolute;
                    /*bottom: 147px;*/
                    left: 50%;
                    transform: translate(-50%, 0);
                }
            }

            .p-main-banner .text-content-right a {
                display: flex;
                min-width: 159px;
                width: 100%;
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

            .p-main-banner .text-content-right a:hover {
                background-color: #FF983A;;
            }

            .p-main-banner .text-content-right a:active {
                background-color: #307847;;
            }

            .p-main-banner .image-content {
                position: absolute;
                right: 0;
                bottom: -221px;
                transform: translate(150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;
                max-width: 894px;
                width: 100%;
            }

            /*@media only screen and (max-width: 991px) {*/
            /*    .p-main-banner .image-content {*/
            /*        padding: 0 20px;*/
            /*    }*/
            /*}*/

            .p-main-banner .image-content._active {
                transform: translate(0, 0);
                opacity: 1;
            }

            @media only screen and (max-width: 1650px) {
                .p-main-banner .image-content._active {
                    transform: translate(0, 4px);
                }
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner .image-content._active {
                    position: static;
                    margin-top: 50px;
                    text-align: center;
                }
            }


            .p-main-banner .text-content-left {
                max-width: 689px;
                width: 100%;
                transform: translate(-150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            *:lang(ua-UA) .p-main-banner .text-content-left {
                max-width: 747px;
            }

            .p-main-banner .text-content-left._active {
                transform: translate(0, 0);
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner .text-content-left._active {
                    display: flex;
                    flex-direction: column;
                    gap: 15px;
                }
            }

            .p-main-banner .sub-title {
                color: #FFF;
                text-shadow: 8px 4px 1px #1F1D1D;
                font-family: 'Montserrat', system-ui;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner .sub-title {
                    font-size: 32px;
                    letter-spacing: 3.2px;
                }
            }

            .p-main-banner .title {
                color: #FFF;
                /*text-shadow: 15px 10px 1px #231F20;*/
                font-size: 96px;
                font-family: 'Montserrat', system-ui;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 19.2px;
                text-transform: uppercase;
                margin-bottom: 17px;
                text-shadow: 15px 15px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 15px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
            }

            *:lang(ua-UA) .p-main-banner .title {
                margin-bottom: 27px;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner .title, *:lang(ua-UA) .p-main-banner .title {
                    margin-bottom: 15px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner .title {
                    font-size: 45px;
                    letter-spacing: 9px;
                    text-shadow: 10px 4px 0 #000, -1px 1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000, 0px -1px 0 #000, 1px -1px 0 #000;
                }
            }

            @media only screen and (max-width: 340px) {
                .p-main-banner .title {
                    font-size: 40px;
                }
            }

            .p-main-banner h2 {
                color: #FFF;
                text-shadow: 4px 4px 1px #101010;
                font-family: 'Roboto', sans-serif;
                font-size: 36px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;
                letter-spacing: 7.2px;
                text-transform: capitalize;
                margin-bottom: 10px;
            }

            *:lang(ua-UA) .p-main-banner h2 {
                font-size: 32px;
                letter-spacing: 6.4px;
                text-transform: none;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner h2 {
                    font-size: 24px;
                    letter-spacing: 4.8px;
                }
            }

            .p-main-banner p. {
                color: #FFF;
                text-shadow: 3px 2px 0 #101010;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 4px;
            }

            .p-main-banner p.big_text {
                color: #FFF;
                text-shadow: 3px 2px 0 #101010;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2.4px;
            }

            @media only screen and (max-width: 991px) {
                .p-main-banner p.big_text {
                    font-size: 20px;
                    letter-spacing: 2px;
                }
            }

        </style>
    <?php endif; ?>
</section>