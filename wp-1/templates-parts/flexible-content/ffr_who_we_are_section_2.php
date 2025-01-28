<?php global $whoWeFFR2;
$whoWeFFR2++; ?>
<section class="who-we-are-2 who-we-are-2-ffr-<?php echo $whoWeFFR2; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="who-we-are-2-content">
        <div class="who-we-are-2-text">
            <span class="sub-title">
                <?php echo get_sub_field('sub_title'); ?>
            </span>
            <h3 class="title"><?php echo get_sub_field('title'); ?></h3>
            <?php echo get_sub_field('text'); ?>
        </div>
        <div class="who-we-are-2-image">
            <?php $image = get_sub_field('image'); ?>
            <img width="390" height="327" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    </div>

    <?php if ($whoWeFFR2 < 2): ?>
        <style>
            .who-we-are-2 {
                position: relative;
                padding: 130px 30px 100px;
                max-width: 1920px;
                margin: 0 auto;
                overflow: hidden;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-2 {
                    overflow: hidden;
                    padding: 94px 15px 30px;
                }
            }

            .who-we-are-2-content {
                max-width: 1320px;
                width: 100%;
                margin: 0 auto;
                display: flex;
                position: relative;
                z-index: 9;
                gap: 10px;
                flex-direction: column;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-2-content {
                    flex-direction: column;
                    /*align-items: center;*/
                }
            }
            .who-we-are-2-image {
                padding: 0;
                width: 100%;
                display: flex;
                align-items: flex-end;
                position: relative;
                justify-content: flex-end;
                margin-top: -155px;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-2-image {
                    width: 100%;
                    padding: 0;
                    margin-top: 10px;
                }
            }
            .who-we-are-2-image img {
                position: relative;
                right: 0;
                z-index: 1;
                max-width: 1020px;
                width: 100%;
                height: auto;
            }
            .who-we-are-2-text {
                padding: 37px 0 0 0;
                z-index: 9;
                max-width: 714px;
                width: 100%;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-2-text {
                    width: 100%;
                    padding: 0;
                    /*margin-top: 100px;*/
                    max-width: none;
                }
            }
            .who-we-are-2-text .sub-title {
                font-size: 30px;
                font-style: normal;
                font-weight: 700;
                line-height: 36px;
                color: #FF4B38;
            }

            .who-we-are-2-text .title {
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                color: #333;
                padding: 11px 0 74px;
                position: relative;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-2-text .title {
                    font-size: 40px;
                    padding: 11px 0 66px;
                }
            }
            .who-we-are-2-text .title:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-2-text .title:after {
                    bottom: 33px;
                }
            }
            .who-we-are-2-text p {
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
                color: #333;
                margin-bottom: 20px;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-2-text p {
                    font-size: 13px;
                    line-height: 25.2px;
                }
            }
            .who-we-are-2-text p {
                max-width: 714px;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-2-text p {
                    max-width: none;
                }
            }


        </style>
    <?php endif; ?>
</section>
