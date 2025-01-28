<?php global $pageBanner2FFR;
$pageBanner2FFR++; ?>
<section
        class="page-banner_2 page-banner_2-ffr-<?php echo $pageBanner2FFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="page-banner_2-content">
        <div class="page-banner_2-text">
            <h1 class="title">
                <?php echo get_sub_field('title'); ?>
            </h1>
            <p>
                <?php echo get_sub_field('text'); ?>
            </p>
            <?php if (get_sub_field('button_text') != ''): ?>
                <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                    <?php echo get_sub_field('button_text'); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="page-banner_2-image">
            <?php $image = get_sub_field('main_image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
    </div>
    <?php if(get_sub_field('hide_background_image') == 'No'):?>
        <div class="bg-image">
            <img class="desktop" src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/consult_bg_bot.webp" alt="#">
        </div>
    <?php endif; ?>

    <?php if ($pageBanner2FFR < 2): ?>
        <style>
            .page-banner_2 {
                background: url('<?php echo get_template_directory_uri(); ?>/images/ffr/consult_bg.webp');
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                /*height: 1014px;*/
                height: 872px;
                max-width: 1920px;
                <?php if(get_sub_field('hide_background_image') == 'Yes'):?>
                max-width: 100%;
                <?php endif; ?>
                margin: 0 auto;
                overflow: hidden;
            }

            @media only screen and (max-width: 1200px) {
                .page-banner_2 {
                    align-items: center;
                }
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2 {
                    height: auto;
                }
            }

            .page-banner_2-content {
                width: 100%;
                margin: 0 auto 0 auto;
                display: flex;
                align-items: flex-start;
                position: relative;
                z-index: 9;
                gap: 40px;
                padding: 170px 15px 0;
                max-width: 1295px;
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2-content {
                    flex-direction: column;
                    padding: 95px 15px 40px 15px;
                    align-items: center;
                    gap: 99px;
                }
            }

            .page-banner_2-text {
                /*margin-bottom: 18px;*/
                /*margin-left: 20px;*/
            }

            .page-banner_2-text .title {
                font-size: 81px;
                <?php if(get_sub_field('title_font_size') != ''):?>
                font-size: <?php echo get_sub_field('title_font_size'); ?>px;
                <?php endif; ?>
                font-style: normal;
                font-weight: 700;
                line-height: 82px;
                color: #ffffff;
                padding: 0 0 36px;
                position: relative;
                margin: 0;
                max-width: 720px;
                <?php if(get_sub_field('title_max_width') != ''):?>
                max-width:<?php echo get_sub_field('title_max_width'); ?>px;
                <?php endif; ?>
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2-text .title {
                    font-size: 40px;
                    line-height: 62px;
                }
            }

            .page-banner_2-text p {
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
                color: #ffffff;
                max-width: 604px;
                margin: 0;
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2-text p {
                    font-size: 13px;
                    line-height: 23.8px;
                    max-width: 100%;
                }
            }

            .page-banner_2 .dialog_btn {
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
                margin-top: 192px;
            }
            
            @media only screen and (max-width: 991px) {
                .page-banner_2 .dialog_btn {
                    margin: 139px auto 0;
                }
            }

            .page-banner_2-image {
                max-width: 700px;
                /*width: 100%;*/
                position: absolute;
                top: 201px;
                <?php if(get_sub_field('top_position_image') != ''):?>
                top:<?php echo get_sub_field('top_position_image'); ?>px;
                <?php endif; ?>
                right: 13px;
                width: calc(100% - 600px);
            }

            @media only screen and (max-width: 1200px) {
                .page-banner_2-image {
                    margin-top: 50px;
                }
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2-image {
                    margin: 0;
                    position: static;
                    width: 100%;
                }
            }

            .page-banner_2-image img {
                width: 100%;
                height: auto;
            }

            .page-banner_2 .bg-image {
                position: absolute;
                overflow: hidden;
                z-index: 1;
                transform: translate(-50%, 0px);
                left: 50%;
                /*bottom: -7px;*/
                top: 110px;
                width: 100%;
                height: auto;
                min-width: 1922px;
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2 .bg-image {
                    display: none;
                }
            }

            .page-banner_2 .bg-image img {
                width: 100%;
                height: auto;
            }
        </style>
    <?php endif; ?>
</section>