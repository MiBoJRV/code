<?php global $welcomeAd;
$welcomeAd++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_welcome p_welcome-<?php echo $welcomeAd; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_welcome__content_wrap">
        <div class="p_welcome__content">
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
    <?php if ($welcomeAd < 2): ?>
        <style>
            .p_welcome {
                min-height: 970px;
                position: relative;
                padding: 0 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_welcome {
                    min-height: auto;
                    padding: 0;
                }
            }

            .p_welcome .p_welcome__content_wrap {
                position: relative;
                max-width: 1628px;
                margin: 0 auto;
                width: 100%;
                height: 970px;
            }
            
            /*@media only screen and (max-width: 1200px) {*/
            /*    .p_welcome .p_welcome__content_wrap {*/
            /*        height: 927px;*/
            /*    }*/
            /*}*/

            @media only screen and (max-width: 991px) {
                .p_welcome .p_welcome__content_wrap {
                    height: 100%;
                }
            }

            .p_welcome .p_welcome__content {
                /*position: relative;*/
            }

            .p_welcome .message {
                position: absolute;
                right: 16%;
                z-index: 99;
                top: 50%;


                opacity: 0;
                transform: translate(150%, -80%);
                transition: all 0.8s ease 0s;
            }

            .p_welcome .message._active {
                opacity: 1;
                transform: translate(225px, -80%);
            }




            @media only screen and (max-width: 1200px) {
                .p_welcome .message {
                    position: absolute;
                    right: 0;
                    z-index: 99;
                    top: 23%;
                    transform: translate(150%, -60%);
                }

                .p_welcome .message._active {
                    opacity: 1;
                    transform: translate(0, -60%);
                }
            }

            /*@media only screen and (max-width: 991px) {*/
            /*    .p_welcome .message {*/
            /*        transform: translate(150%, -25%);*/
            /*    }*/
            /*    .p_welcome .message._active {*/
            /*        opacity: 1;*/
            /*        transform: translate(0, -25%);*/
            /*    }*/
            /*}*/

            @media only screen and (max-width: 991px) {
                .p_welcome .message {
                    position: static;
                    /*transform: none;*/
                    transform: translate(150%, 0%);
                }

                .p_welcome .message._active {
                    opacity: 1;
                    transform: translate(0, 0%);
                }
            }

            .p_welcome .message-image {
                max-width: 677px;
                width: 100%;
                min-width: 677px;
                position: absolute;
                right: 12px;
                top: 10px;
            }

            @media only screen and (max-width: 991px) {
                .p_welcome .message-image {
                    display: none;
                }
            }


            .p_welcome .message-text {
                position: relative;
                z-index: 10;
                padding: 136px 71px 0;
                max-width: 677px;
                width: 100%;
                box-sizing: border-box;
            }

            *:lang(ua-UA) .p_welcome .message-text {
                padding: 123px 71px 0;
            }

            @media only screen and (max-width: 991px) {
                .p_welcome .message-text, *:lang(ua-UA) .p_welcome .message-text {
                    max-width: 100%;
                    padding: 60px 20px 40px 20px;
                }
            }

            .p_welcome .message-text h2 {
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
                .p_welcome .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    mb50
                }
            }

            .p_welcome .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 25px;
            }

            @media only screen and (max-width: 991px) {
                .p_welcome .message-text .text {
                    gap: 15px;
                }
            }

            .p_welcome .message-text p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2.4px;
            }

            @media only screen and (max-width: 991px) {
                .p_welcome .message-text p {
                    font-size: 20px;
                    letter-spacing: 2px;
                }
            }


            .p_welcome .main_img {
                position: absolute;
                bottom: 0;
                max-width: 1236px;
                left: 0;
                transform: translate(146px, 0);
                width: 100%;

                opacity: 0;
                transition: all 1s ease 0s;
            }

            .p_welcome .main_img._active {
                opacity: 1;
            }

            @media only screen and (max-width: 1400px) {
                .p_welcome .main_img {
                    transform: translate(0, 0);
                }
            }

            @media only screen and (max-width: 991px) {
                .p_welcome .main_img {
                    position: relative;
                    overflow: hidden;
                }

            }

            .p_welcome .main_img img {
                max-height: 970px;
                margin-bottom: 26px;
            }

            /*@media only screen and (max-width: 600px) {*/
            /*    .p_welcome .main_img  img{*/
            /*        max-width: 778px;*/
            /*        height: auto;*/
            /*        width: 778px;*/
            /*        transform: translate(-118px, 0);*/
            /*        position: relative;*/
            /*    }*/
            /*}*/
            .p_welcome .divider {
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