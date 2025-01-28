<?php global $aboutFFR;
$aboutFFR++; ?>
<section class="about about-ffr-<?php echo $aboutFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="bg-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ffr/about_asset.webp" alt="bg">
    </div>
    <div class="bg-image__mobile">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ffr/about_mobile_bg.webp" alt="bg">
    </div>
    <div class="about-content">
        <div class="about-image">
            <?php $image = get_sub_field('main_image'); ?>
            <img width="390" height="327" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <div class="about-text">
            <span class="sub-title">
                <?php echo get_sub_field('sub_title'); ?>

            </span>
            <h3 class="title"><?php echo get_sub_field('title'); ?></h3>
            <p><?php echo get_sub_field('text'); ?></p>
            <a class="about-btn dialog_btn" href="<?php echo get_sub_field('button_link'); ?>" class="button">
                <?php echo get_sub_field('button_text'); ?>
            </a>
        </div>
    </div>
    <div class="bottom-image">
        <?php $image = get_sub_field('second_image_desktop'); ?>
        <img class="desktop" width="500" height="552" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php $image = get_sub_field('second_image_mobile'); ?>
        <img class="mobile" width="243" height="327" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <?php if ($aboutFFR < 2): ?>
    <?php endif; ?>
</section>

<style>
    .about {
        position: relative;
        padding: 346px 0 215px;
        max-width: 1920px;
        margin: 0 auto;
        overflow: hidden;
        width: 100%;
        background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/about_asset.webp');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center bottom;
        min-height: 1444px;


    }
    @media only screen and (max-width: 991px) {
        .about {
            overflow: hidden;
            padding: 94px 15px 258px;
            background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/about_mobile_bg.webp');
            background-position: top;
            min-height: auto;
        }
    }
    .about .bg-image {
        position: absolute;
        top: 0;
        overflow: hidden;
        z-index: 1;
        transform: translate(-50%, 0px);
        left: 50%;
        /*width: 100%;*/
        width: 100.5%;
        display: none;
    }
    @media only screen and (max-width: 991px) {
        .about .bg-image {
            display: none;
        }
    }
    .about .bg-image__mobile {
        position: absolute;
        top: 0;
        overflow: hidden;
        z-index: 1;
        transform: translate(-50%, 0px);
        left: 50%;
        width: 100%;
        width: 100.5%;
        display: none;
    }
    @media only screen and (max-width: 991px) {
        .about .bg-image__mobile {
            display: block;
            display: none;
        }
    }
    .about .bg-image__mobile img {
        width: 100%;
        height: auto;
    }
    .about-content {
        max-width: 1320px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        position: relative;
        z-index: 9;
        gap: 10px;
    }
    @media only screen and (max-width: 991px) {
        .about-content {
            flex-direction: column;
            align-items: center;
        }
    }
    .about-image {
        padding: 37px 0 54px 41px;
        width: 50%;
    }
    @media only screen and (max-width: 991px) {
        .about-image {
            width: 100%;
            padding: 0;
        }
    }
    .about-image img {
        width: 100%;
        height: auto;
    }
    .about-text {
        padding: 37px 41px 0 0;
        width: 50%;
    }
    @media only screen and (max-width: 991px) {
        .about-text {
            width: 100%;
            padding: 0;
            margin-top: 100px;
        }
    }
    .about-text .sub-title {
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: 36px;
        color: #FF4B38;
    }

    .about-text .title {
        font-size: 55px;
        font-style: normal;
        font-weight: 700;
        line-height: 61.6px;
        color: #ffffff;
        padding: 11px 0 74px;
        position: relative;
    }
    @media only screen and (max-width: 991px) {
        .about-text .title {
            font-size: 40px;
            line-height: 61.6px;
            padding: 11px 0 66px;
        }
    }
    .about-text .title:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 46px;
        height: 2px;
        width: 100px;
        background-color: #FF4B38;
    }
    @media only screen and (max-width: 991px) {
        .about-text .title:after {
            bottom: 33px;
        }
    }
    .about-text p {
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 30.6px;
        color: #ffffff;
    }
    @media only screen and (max-width: 991px) {
        .about-text p {
            font-size: 13px;
            line-height: 25.2px;
        }
    }
    .about-text p {
        max-width: 584px;
    }
    .about-text .about-btn {
        padding: 13px 0 14.8px 0;
        font-size: 14px;
        font-weight: 700;
        line-height: 23.8px;
        text-transform: uppercase;
        color: #FF4B38;
        border: 2px solid #FF4B38;
        border-radius: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 305px;
        height: 52px;
        box-sizing: border-box;
        margin-top: 43px;
    }
    .about-text .about-btn:hover {
        background-color: rgba(255, 255, 255, 0.15);
    }
    .about-text .about-btn:active {
        border-color: #BB1123;
        background-color: transparent;
    }
    .about .bottom-image {
        position: absolute;
        right: 4px;
        bottom: 0px;
        z-index: 2;
    }
    @media only screen and (max-width: 991px) {
        .about .bottom-image {
            bottom: 0;
        }
    }
    .about .bottom-image img {
        width: 100%;
        height: auto;
    }
    @media only screen and (max-width: 1440px) {
        .about .bottom-image img {
            max-width: 500px;
        }
    }
    @media only screen and (max-width: 991px) {
        .about .bottom-image img.desktop {
            display: none;
        }
    }
    .about .bottom-image img.mobile {
        display: none;
    }
    @media only screen and (max-width: 991px) {
        .about .bottom-image img.mobile {
            display: block;
        }
    }
</style>
