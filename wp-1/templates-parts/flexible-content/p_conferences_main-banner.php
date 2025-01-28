<?php global $mainBannerOffers;
$mainBannerOffers++;
?>

<?php
$bgImage = get_sub_field('section_background');
?>

<section
        class="p_offers_main-banner p_offers_main-banner-<?php echo $mainBannerOffers; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_offers_main-banner__content">
        <div class="text-content">
            <div class="text-content-left _anim-items _anim-no-hide">
                <?php if (get_sub_field('sub_title') != ''): ?>
                    <span class="sub-title"><?php echo get_sub_field('sub_title'); ?></span>
                <?php endif; ?>
                <h1 class="title"><?php echo get_sub_field('title'); ?></h1>
                <h2><?php echo get_sub_field('small_title'); ?></h2>
                <?php if (get_sub_field('text_1') != ''): ?>
                    <p class="big_text"><?php echo get_sub_field('text_1'); ?></p>
                <?php endif; ?>
                <?php if (get_sub_field('text_2') != ''): ?>
                    <p> <?php echo get_sub_field('text_2'); ?></p>
                <?php endif; ?>
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
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($mainBannerOffers < 2): ?>
        <style>

            .p_offers_main-banner {
                padding: 229px 0 338px;
                position: relative;
                overflow: hidden;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner {
                    padding: 160px 0 0;
                }
            }

            .p_offers_main-banner .p_offers_main-banner__content {
                max-width: 1278px;
                /*padding: 0 20px;*/
                margin: 0 auto;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner .p_offers_main-banner__content {
                    display: flex;
                    flex-direction: column;
                }
            }

            .p_offers_main-banner .text-content {
                display: flex;
                position: relative;
                z-index: 10;

                flex-direction: column;
                justify-content: flex-start;
                align-items: flex-start;
                padding: 0 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner .text-content {
                    position: static;
                    margin-bottom: 26px;
                }
            }

            .p_offers_main-banner .text-content-right {
                margin-bottom: -110px;
                /*margin-right: 134px;*/

                transform: translateY(250%);
                opacity: 0;
                transition: all 0.3s ease 0s;
            }

            .p_offers_main-banner .text-content-right._active {
                transform: translateY(0);
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner .text-content-right._active {
                    position: absolute;
                    bottom: 221px;
                    left: 50%;
                    transform: translate(-50%, 0);
                }
            }

            .p_offers_main-banner .text-content-right a {
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

            .p_offers_main-banner .text-content-right a:hover {
                background-color: #FF983A;;
            }

            .p_offers_main-banner .text-content-right a:active {
                background-color: #307847;;
            }

            .p_offers_main-banner .image-content {
                position: absolute;
                right: 0;
                bottom: -359px;

                transform: translate(150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner .image-content {
                    margin-bottom: -22px;
                }
            }

            .p_offers_main-banner .image-content._active {
                transform: translate(0, -57px);
                opacity: 1;
                right: -340px;
            }

            @media only screen and (max-width: 1100px) {
                .p_offers_main-banner .image-content._active {
                    transform: translate(0, -57px);
                    opacity: 1;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner .image-content._active {
                    position: static;
                    margin-top: 50px;
                    text-align: center;
                    padding-left: 20px;
                }
            }

            .p_offers_main-banner .image-content img {
                max-width: 1232px;
                width: 100%;
                /*max-height: 631px;*/
                min-height: 255px;
            }

            @media only screen and (max-width: 480px) {
                .p_offers_main-banner .image-content img {
                    width: 495px;
                }
            }
            @media only screen and (max-width: 389px) {
                .p_offers_main-banner .image-content._active img{
                    width: 495px;
                    transform: translate(-60px, 0);
                }
            }



            .p_offers_main-banner .text-content-left {
                max-width: 845px;
                width: 100%;
                transform: translate(-150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            .p_offers_main-banner .text-content-left > h2:last-of-type {
                margin-bottom: 0;
            }

            .p_offers_main-banner .text-content-left._active {
                transform: translate(0, 0);
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner .text-content-left._active {
                    display: flex;
                    flex-direction: column;
                    gap: 15px;
                }
            }

            .p_offers_main-banner .sub-title {
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
                .p_offers_main-banner .sub-title {
                    font-size: 32px;
                    letter-spacing: 3.2px;
                }
            }

            .p_offers_main-banner .title {
                color: #FFFCE9;
                text-shadow: 8px 4px 1px #101010;
                font-family: 'Montserrat', sans-serif;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin-bottom: 130px;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner .title {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 32px;
                }
            }

            @media only screen and (max-width: 389px) {
                .p_offers_main-banner .title {
                    font-size: 35px;
                }
            }

            .p_offers_main-banner h2 {
                color: #FFFCE9;
                text-shadow: 3px 2px 0px #101010;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin-bottom: 30px;
                max-width: 603px;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner h2 {
                    font-size: 24px;
                    letter-spacing: 4.8px;
                }
            }

            .p_offers_main-banner p {
                color: #FFFCE9;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 3.2px;
                max-width: 605px;
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_main-banner p.big_text {
                    font-size: 20px;
                    letter-spacing: 2px;
                }
            }

            .p_offers_main-banner .divider {
                height: 36px;
                width: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: 100;
            }
        </style>
    <?php endif; ?>
</section>