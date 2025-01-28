<?php global $whoWeFFR;
$whoWeFFR++; ?>
<section class="who-we-are who-we-are-ffr-<?php echo $whoWeFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="who-we-are-content">
        <div class="who-we-are-text">
            <span class="sub-title">
                <?php echo get_sub_field('sub_title'); ?>
            </span>
            <h3 class="title"><?php echo get_sub_field('title'); ?></h3>
            <?php echo get_sub_field('text'); ?>
        </div>
        <div class="who-we-are-image">
            <?php $image = get_sub_field('image'); ?>
            <img width="390" height="327" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    </div>

    <?php if ($whoWeFFR < 2): ?>
        <style>
            .who-we-are {
                position: relative;
                padding: 130px 30px 100px;
                max-width: 1920px;
                margin: 0 auto;
                overflow: hidden;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are {
                    overflow: hidden;
                    padding: 94px 15px 30px;
                }
            }

            .who-we-are-content {
                max-width: 1320px;
                width: 100%;
                margin: 0 auto;
                display: flex;
                position: relative;
                z-index: 9;
                gap: 10px;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-content {
                    flex-direction: column;
                    align-items: center;
                }
            }
            .who-we-are-image {
                padding: 0 0 0 41px;
                width: 50%;
                display: flex;
                align-items: flex-end;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-image {
                    width: 100%;
                    padding: 0;
                    margin-top: 10px;
                }
            }
            .who-we-are-image img {
                width: 100%;
                height: auto;
            }
            .who-we-are-text {
                padding: 37px 41px 0 0;
                width: 50%;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-text {
                    width: 100%;
                    padding: 0;
                    /*margin-top: 100px;*/
                }
            }
            .who-we-are-text .sub-title {
                font-size: 30px;
                font-style: normal;
                font-weight: 700;
                line-height: 36px;
                color: #FF4B38;
            }
            .who-we-are-text .title {
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                color: #333;
                padding: 11px 0 74px;
                position: relative;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-text .title {
                    font-size: 40px;
                    padding: 11px 0 66px;
                }
            }
            .who-we-are-text .title:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-text .title:after {
                    bottom: 33px;
                }
            }
            .who-we-are-text p {
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
                color: #333;
                margin-bottom: 20px;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-text p {
                    font-size: 13px;
                    line-height: 25.2px;
                }
            }
            .who-we-are-text p {
                max-width: 584px;
            }
            @media only screen and (max-width: 991px) {
                .who-we-are-text p {
                    max-width: none;
                }
            }


        </style>
    <?php endif; ?>
</section>
