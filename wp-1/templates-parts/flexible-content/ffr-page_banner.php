<?php global $pageBannerFFR;
$pageBannerFFR++; ?>
<section
        class="page-banner page-banner-ffr-<?php echo $pageBannerFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="page-banner__content">
        <div class="page-banner__text">
            <div class="page-banner__text-block">
                <h1 class="title">
                    <?php echo get_sub_field('title'); ?>
                </h1>
                <?php if (get_sub_field('text') != ''): ?>
                    <?php echo get_sub_field('text'); ?>
                <?php endif ?>
            </div>
            <a class="page-banner__btn dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                <?php echo get_sub_field('button_text'); ?>
            </a>
        </div>
    </div>
    <div class="bg-image">
        <!--        <img class="desktop" src="-->
        <?php //echo get_stylesheet_directory_uri() ?><!--/images/ffr/page.webp" alt="#">-->
        <img class="mobile" src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/page.webp"
             alt="#">
    </div>
    <?php if (get_sub_field('show_info_block') == 'Yes'): ?>
    <div class="page-banner-info-wrap">
        <div class="page-banner-info">
            <?php echo get_sub_field('info_block'); ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if ($pageBannerFFR < 2): ?>
        <style>
            .page-banner {
                background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/consult_bg.webp');
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                margin: 0 auto;
                /*overflow: hidden;*/
                height: 824px;
                margin-bottom: 30px;
            <?php if(get_sub_field('show_info_block')=='Yes'): ?> margin-bottom: 178px;
            <?php endif; ?>
            }

            @media only screen and (max-width: 991px) {
                .page-banner {
                <?php if(get_sub_field('show_info_block')=='Yes'): ?>
                    margin-bottom: 0;
                <?php endif; ?>
                }
            }

            .page-banner .page-banner-info-wrap {
                background-color: #FFFFFF;
                padding: 0 5px;

            }

            @media only screen and (max-width: 991px) {
                .page-banner .page-banner-info-wrap {
                    padding-top: 70px;
                    padding-bottom: 80px;
                }
            }

            .page-banner .page-banner-info {
                position: absolute;
                bottom: -108px;
                z-index: 9;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 34px 48px;
                text-align: center;
                left: 50%;
                transform: translate(-50%, 100%);
                max-width: 1200px;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .page-banner .page-banner-info {
                    position: relative;
                    transform: none;
                    left: 0;
                    top: 0;
                }
            }

            .page-banner .page-banner-info p {
                color: #333;
                text-align: center;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: 30px;
                margin: 0;
            }

            @media only screen and (max-width: 1440px) {
                .page-banner {
                    height: 724px;
                }
            }

            @media only screen and (max-width: 1200px) {
                .page-banner {
                    align-items: center;
                }
            }

            @media only screen and (max-width: 991px) {
                .page-banner {
                    height: auto;
                }
            }

            .page-banner__content {
                width: 100%;
                margin: 0 auto 0 auto;
                display: flex;
                align-items: flex-end;
                position: relative;
                z-index: 9;
                gap: 40px;
                padding: 147px 20px 0;
                max-width: 1320px;
            }

            @media only screen and (max-width: 991px) {
                .page-banner__content {
                    flex-direction: column;
                    padding: 58px 30px 0 30px;
                    align-items: flex-start;
                    gap: 99px;
                }
            }

            .page-banner__text {
                max-width: 676px;
                max-height: 390px;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 390px;
            }

            @media only screen and (max-width: 991px) {
                .page-banner__text {
                    margin: 0;
                }
            }

            .page-banner__text .title {
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                color: #ffffff;
                margin: 0;
            }

            @media only screen and (max-width: 991px) {
                .page-banner__text .title {
                    font-size: 40px;
                    /*margin-bottom: 41px;*/
                }
            }

            .page-banner__text p {
                color: #ffffff;
                font-size: 16px;
                font-weight: 400;
                line-height: 23.8px;
                margin: 14px 0 0;
            }

            @media only screen and (max-width: 991px) {
                .page-banner__text p {
                    font-size: 13px;
                    line-height: 23.8px;
                    margin-bottom: 21px;
                }
            }

            .page-banner__btn {
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
                margin-top: auto;
            }

            .page-banner__btn:hover {
                background-color: #FF263D;
            }

            .page-banner__btn:active {
                background-color: #D5141D;
            }

            .page-banner .bg-image {
                position: absolute;
                overflow: hidden;
                z-index: 1;
                transform: translate(-50%, 0px);
                left: 50%;
                bottom: -13px;
                width: 100%;
                height: auto;
                min-width: auto;
                /*height: 612px;*/
                /*bottom: 0;*/
            }

            @media only screen and (max-width: 991px) {
                .page-banner .bg-image {
                    position: static;
                    transform: none;
                }
            }

            @media only screen and (max-width: 991px) {
                .page-banner .bg-image .desktop {
                    display: none;
                }
            }

            .cryptocurrency .bg-image .mobile {
                display: none;
            }

            @media only screen and (max-width: 991px) {
                .page-banner .bg-image .mobile {
                    display: block;
                    position: relative;
                    left: 50%;
                    transform: translate(-50%, 7px);
                    object-fit: cover;
                    width: auto;
                    height: 345px;
                }
            }

            .page-banner .bg-image img {
                width: 100%;
                height: auto;
                max-height: 625px;
                object-fit: contain;
            }
        </style>
    <?php endif; ?>
</section>