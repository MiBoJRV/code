<?php global $stopAd;
$stopAd++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_advertisers_stop p_advertisers_stop-<?php echo $stopAd; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_advertisers_stop__content_wrap">
        <div class="p_advertisers_stop__content">
            <div class="message _anim-items _anim-no-hide">
                <div class="message-text">
                    <?php if (get_sub_field('title') != ''): ?>
                        <h2><?php echo get_sub_field('title'); ?></h2>
                    <?php endif; ?>

                    <div class="text">
                        <?php echo get_sub_field('text'); ?>
                    </div>
                </div>
                <?php $image = get_sub_field('message_image'); ?>
                <img class="message-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
            </div>
            <div class="main_img _anim-items _anim-no-hide">
                <?php $image = get_sub_field('main_image'); ?>
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
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
    <?php if ($stopAd < 2): ?>
        <style>
            .p_advertisers_stop {
                /*min-height: 970px;*/
                position: relative;
                /*padding: 0 20px;*/
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_stop {
                    min-height: auto;
                    padding-top:  200px;
                }
            }

            .p_advertisers_stop .p_advertisers_stop__content_wrap {
                position: relative;
                /*max-width: 1920px;*/
                margin: 0 auto;
                width: 100%;
                max-height: 1178px;
                /*height: 970px;*/
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_stop .p_advertisers_stop__content_wrap {
                    height: 100%;
                }
            }

            .p_advertisers_stop .p_advertisers_stop__content {
                /*position: relative;*/
            }

            .p_advertisers_stop .message {
                position: absolute;
                /*left: 438px;*/
                z-index: 99;
                top: 192px;
                left: 23%;

                opacity: 0;
                transform: translate( 0%, -150%);
                transition: all 0.8s ease 0s;
            }
            .p_advertisers_stop .message._active{
                opacity: 1;
                transform: translate(0, 0);
            }


            @media only screen and (max-width: 1700px) {
                .p_advertisers_stop .message {
                    top: 0;
                    left: 10%;
                }
            }

            @media only screen and (max-width: 1200px) {
                .p_advertisers_stop .message {
                    left: 20px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_stop .message {
                    /*position: static;*/
                    position: absolute;
                    transform: none;
                    top: -280px;
                }
            }

            @media only screen and (max-width: 720px) {
                .p_advertisers_stop .message {
                    left: 0;
                }
            }

            .p_advertisers_stop .message-image {
                max-width: 677px;
                width: 100%;
                min-width: 677px;
                position: absolute;
                right: 12px;
                top: 10px;
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_stop .message-image {
                    /*display: none;*/
                    left: 0;
                }
            }
            @media only screen and (max-width: 677px) {
                .p_advertisers_stop .message-image {
                    left: 50%;
                    transform: translate(-50%, 0);
                }
            }


            .p_advertisers_stop .message-text {
                position: relative;
                z-index: 10;
                padding: 118px 77px 0 67px;
                max-width: 677px;
                width: 100%;
                box-sizing: border-box;
            }

            *:lang(ua-UA) .p_advertisers_stop .message-text {
                padding: 106px 80px 0 80px;
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_stop .message-text {
                    /*max-width: 100%;*/
                    /*padding: 100px 20px 30px 20px;*/

                }
            }

            @media only screen and (max-width: 667px) {
                .p_advertisers_stop .message-text, *:lang(ua-UA) .p_advertisers_stop .message-text {
                    left: 50%;
                    transform: translate(-50%, 0);
                    padding: 106px 20px 0 20px;
                    min-width: 350px;
                }

                *:lang(ua-UA) .p_advertisers_stop .message-text {
                    font-size: 16px;
                    letter-spacing: 1.6px;
                    /*padding: 74px 80px 0 80px;*/
                }
            }

            @media only screen and (max-width: 480px) {
                .p_advertisers_stop .message-text, *:lang(ua-UA) .p_advertisers_stop .message-text {
                    padding: 86px 20px 0 20px;
                }
            }

            .p_advertisers_stop .message-text h2 {
                color: #333;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 40px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_stop .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    mb50
                }
            }

            .p_advertisers_stop .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 30px;
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_stop .message-text .text {
                    gap: 15px;
                }
            }

            .p_advertisers_stop .message-text p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', system-ui;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: 25px;
                letter-spacing: 2.4px;
                margin: 0 20px;
            }

            *:lang(ua-UA) .p_advertisers_stop .message-text p {
                font-size: 20px;
                letter-spacing: 2px;
                font-family: 'Roboto', system-ui;
                line-height: 24px;
                margin: 0;
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_stop .message-text p {
                    font-size: 20px;
                    letter-spacing: 2px;
                    min-width: 350px;
                    margin: 0;
                }
            }

            @media only screen and (max-width: 767px) {
                *:lang(ua-UA) .p_advertisers_stop .message-text p {
                    font-size: 16px;
                    letter-spacing: 1.6px;
                    max-width: 80%;
                    margin: 0 auto;
                }
            }

            @media only screen and (max-width: 389px) {
              *:lang(ua-UA)  .p_advertisers_stop .message-text p {
                  min-width: 290px;
                  margin: 0;
                }
            }


            /*.p_advertisers_stop .main_img {*/
            /*    position: absolute;*/
            /*    bottom: 0;*/
            /*    max-width: 1920px;*/
            /*    left: 0;*/
            /*    transform: translate(0, 0);*/
            /*    width: 100%;*/
            /*}*/

            @media only screen and (max-width: 1400px) {
                .p_advertisers_stop .main_img {
                    transform: translate(0, 0);
                }
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_stop .main_img {
                    position: relative;
                    overflow: hidden;
                }

            }
            @media only screen and (max-width: 667px) {
                .p_advertisers_stop .main_img {
                    left: 50%;
                    transform: translate(-50%, 0);
                    width: 818px;
                    height: 394px;
                }
                .p_advertisers_stop .main_img img {
                    height: 394px;
                    width: 818px;
                    position: relative;
                    transform: translate(-15%, 0);
                }

            }

            @media only screen and (max-width: 480px) {
                .p_advertisers_stop .main_img img {
                    transform: translate(-28%, 0);
                }
            }

            .p_advertisers_stop .main_img {
              opacity: 0;
              transition: all 1s ease 0s;
            }

            .p_advertisers_stop .main_img._active{
                opacity: 1;
            }


            .p_advertisers_stop .divider {
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