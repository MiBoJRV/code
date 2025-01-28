<?php global $bigSec1;
$bigSec1++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_home_big_1 p_home_big_1-<?php echo $bigSec1; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_home_big_1__content_wrap">
        <div class="p_home_big_1__content">
            <div class="message _anim-items _anim-no-hide">
                <div class="message-text">
                    <?php if (get_sub_field('title') != ''): ?>
                        <h2><?php echo get_sub_field('title'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_sub_field('subtitle') != ''): ?>
                        <h3><?php echo get_sub_field('subtitle'); ?></h3>
                    <?php endif; ?>

                    <div class="text">
                        <?php echo get_sub_field('text'); ?>
                    </div>
                </div>
                <?php $image = get_sub_field('message_image'); ?>
                <img class="message-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
            </div>
            <div class="main_img">
                <?php $image = get_sub_field('main_image'); ?>
                <img class="_anim-items _anim-no-hide" src="<?php echo $image['url'] ?>"
                     alt="<?php echo $image['alt'] ?>"/>
            </div>
        </div>
    </div>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($bigSec1 < 2): ?>
        <style>
            .p_home_big_1 {
                position: relative;
                margin: 0 0 -5px 0;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 {
                    min-height: auto;
                }
            }

            .p_home_big_1 .p_home_big_1__content_wrap {
                position: relative;
                /*max-width: 1920px;*/
                margin: 0 auto;
                width: 100%;
                max-height: 1050px;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 .p_home_big_1__content_wrap {
                    height: 100%;
                }
            }

            .p_home_big_1 .message {
                position: absolute;
                z-index: 99;
                top: 175px;
                right: 17%;
                width: 100%;
                max-width: 620px;

                opacity: 0;
                transform: translate(-350%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_home_big_1 .message._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 1700px) {
                .p_home_big_1 .message {
                    top: 10px;
                    right: 40px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 .message._active {
                    bottom: 0;
                    top: auto;
                    left: 50%;
                    transform: translate(-50%, 0);
                }
            }

            @media only screen and (max-width: 480px) {
                .p_home_big_1 .message {
                    bottom: -90px;
                }
            }

            .p_home_big_1 .message-image {
                max-width: 632px;
                width: 100%;
                min-width: 632px;
                position: absolute;
                right: 85px;
                top: -33px;
                transform: rotate(47.967deg);
                mask: linear-gradient(180deg, white 20%, white 20%, white 50%, transparent);
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 .message-image {
                    right: 0;
                    top: 0;
                    transform: translate(-50%, 0);
                    left: 50%;
                    mask: linear-gradient(180deg, white 20%, white 20%, white 80%, transparent);
                }
            }

            @media only screen and (max-width: 480px) {
                .p_home_big_1 .message-image {
                    min-width: 762px;
                }
            }

            .p_home_big_1 .message-text {
                display: flex;
                flex-direction: column;
                gap: 20px;

                position: relative;
                z-index: 10;
                padding: 118px 77px 0 67px;
                max-width: 677px;
                width: 100%;
                box-sizing: border-box;

            }

            *:lang(ua-UA) .p_home_big_1 .message-text {
                padding: 134px 77px 0 67px;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 .message-text, *:lang(ua-UA) .p_home_big_1 .message-text {
                    padding: 142px 0 0;
                    gap: 18px;
                }
            }

            @media only screen and (max-width: 667px) {
                .p_home_big_1 .message-text, *:lang(ua-UA) .p_home_big_1 .message-text {
                    left: 50%;
                    transform: translate(-50%, 0);
                    padding: 106px 20px 0 20px;
                    min-width: 350px;
                }

                *:lang(ua-UA) .p_home_big_1 .message-text {
                    padding: 142px 0 0;
                }
            }


            @media only screen and (max-width: 480px) {
                .p_home_big_1 .message-text, *:lang(ua-UA) .p_home_big_1 .message-text {
                    padding-top: 200px;
                }
            }

            .p_home_big_1 .message-text h2 {
                color: #231F20;
                text-align: center;
                font-family: 'Montserrat', system-ui;
                font-size: 36px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 3.6px;
                text-transform: uppercase;

                max-width: 393px;
                width: 100%;
                margin: 0 auto;
            }

            *:lang(ua-UA) .p_home_big_1 .message-text h2 {
                font-size: 32px;
                letter-spacing: 3.2px;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', system-ui;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                }
            }

            @media only screen and (max-width: 389px) {
                *:lang(ua-UA) .p_home_big_1 .message-text h2 {
                    font-size: 26px;
                    letter-spacing: 2.6px;
                }
            }


            .p_home_big_1 .message-text h3 {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;

                max-width: 338px;
                width: 100%;
                margin: 0 auto;
            }

            *:lang(ua-UA) .p_home_big_1 .message-text h3 {
                font-size: 16px;
                letter-spacing: 1.6px;
            }

            .p_home_big_1 .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 .message-text .text {
                    gap: 15px;
                }
            }

            .p_home_big_1 .message-text p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 3.2px;

                max-width: 486px;
                width: 100%;
                margin: 0 auto;
            }

            .p_home_big_1 .message-text p:last-of-type {
                max-width: 443px;
                width: 100%;
                margin: 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 .message-text p {

                }
            }

            .p_home_big_1 .main_img img {
                opacity: 0;
                transition: all 0.8s ease 0.1s;
            }

            .p_home_big_1 .main_img img._active {
                opacity: 1;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 .main_img img._active {
                    opacity: 1;
                    width: auto;
                }
            }

            @media only screen and (max-width: 1400px) {
                .p_home_big_1 .main_img img._active {
                    width: auto;
                }

                .p_home_big_1 .main_img {
                    transform: translate(0, 0);
                }
            }

            @media only screen and (max-width: 1400px) {
                .p_home_big_1 .main_img {
                    position: relative;
                    overflow: hidden;
                }

                .p_home_big_1 .main_img img {
                    max-width: 1920px;
                    height: auto;
                    transform: translate(-20%, 0);
                }
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_1 .main_img {
                    position: relative;
                    overflow: hidden;
                }

                .p_home_big_1 .main_img img {
                    max-width: 1920px;
                    height: auto;
                    transform: translate(-20%, 0);
                }

            }

            @media only screen and (max-width: 480px) {
                .p_home_big_1 .main_img {
                    padding-bottom: 117px;
                }

                .p_home_big_1 .main_img img {
                    transform: translate(-26%, 0);
                    max-width: 1409px;
                }
            }

            .p_home_big_1 .divider {
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