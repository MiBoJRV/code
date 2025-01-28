<?php global $pageBanner4FFR;
$pageBanner4FFR++; ?>

<section
        class="ffr-page_banner_4_section ffr-page_banner_4_section-<?php echo $pageBanner4FFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-page_banner_4_section__content">

        <div class="page_banner_4-image">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
        <div class="page_banner_4-text">
            <h1 class="title">
                <?php echo get_sub_field('section_title'); ?>
            </h1>
            <?php if (get_sub_field('') != 'ffr-page_banner_4_section'): ?>
                <p>
                    <?php echo get_sub_field('ffr-page_banner_4_section'); ?>
                </p>
            <?php endif; ?>
            <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                <?php echo get_sub_field('button_text'); ?>
            </a>
        </div>
    </div>
    <?php if ($pageBanner4FFR < 2): ?>
        <style>
            .ffr-page_banner_4_section {
                background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/ban.webp');
                background-repeat: no-repeat;
                background-size: contain;
                position: relative;
                margin: 0 auto;
                overflow: hidden;
                min-height: 1021px;
                padding-top: 90px;
                padding-bottom: 50px;
            }

            @media only screen and (max-width: 1500px) {
                .ffr-page_banner_4_section {
                    min-height: auto;
                    padding-top: 60px;
                }
            }

            @media only screen and (max-width: 991px) {
                .ffr-page_banner_4_section {
                    background-image: none;
                }
            }

            .ffr-page_banner_4_section__content {
                max-width: 1380px;
                margin: 0 auto;
                padding: 0 15px;
                display: flex;
            }

            @media only screen and (max-width: 991px) {
                .ffr-page_banner_4_section__content {
                    flex-direction: column-reverse;
                }
            }

            .ffr-page_banner_4_section .page_banner_4-image {
                max-width: 862px;
                width: 100%;
            }

            @media only screen and (max-width: 1200px) {
                .ffr-page_banner_4_section .page_banner_4-image {
                    max-width: 600px;
                }

            }

            @media only screen and (max-width: 991px) {
                .ffr-page_banner_4_section .page_banner_4-image {
                    max-width: 100%;
                }
            }
            .ffr-page_banner_4_section .page_banner_4-text {
                <?php if(get_sub_field('title_max_width') != ''):?>
                     max-width: <?php echo get_sub_field('title_max_width'); ?>px;
                width: 100%;
                <?php endif; ?>

            }

            @media only screen and (max-width: 991px) {
                .ffr-page_banner_4_section .page_banner_4-text {
                    max-width: 100%;
                }
            }


            .ffr-page_banner_4_section .title {
                color: #333;
                font-size: 83px;
                font-style: normal;
                font-weight: 700;
                line-height: 84px;
                margin: 85px 0 0 0;
                max-width: 502px;
                width: 100%;
                <?php if(get_sub_field('title_max_width') != ''):?>
                max-width:<?php echo get_sub_field('title_max_width'); ?>px;
                <?php endif; ?>
            }

            @media only screen and (max-width: 1200px) {
                .ffr-page_banner_4_section .title {
                    font-size: 53px;
                    line-height: 44px;
                }

            }

            @media only screen and (max-width: 991px) {
                .ffr-page_banner_4_section .title {
                    font-size: 40px;
                    line-height: 54px;
                    margin-top: 0;
                    max-width: 100%;
                }
            }

            .ffr-page_banner_4_section .dialog_btn {
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
                margin: 200px 0 0 auto;
            }

            .ffr-page_banner_4_section .dialog_btn:hover {
                background-color: #FF263D;
            }

            @media only screen and (max-width: 991px) {
                .ffr-page_banner_4_section .dialog_btn {
                    margin: 115px auto 0;
                }
            }


        </style>
    <?php endif; ?>
</section>