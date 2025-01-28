<?php global $whyChoose;
$whyChoose++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_affiliates_why_choose_us p_affiliates_why_choose_us-<?php echo $whyChoose; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_affiliates_why_choose_us__content_wrap">
        <div class="p_affiliates_why_choose_us__content">
            <div class="message _anim-items _anim-no-hide">
                <div class="message-text">
                    <h2><?php echo get_sub_field('title'); ?></h2>
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
    <?php if ($whyChoose < 2): ?>
        <style>
            .p_affiliates_why_choose_us {
                min-height: 1074px;
                position: relative;
                z-index: 9;
                overflow-x: hidden;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_why_choose_us {
                    min-height: auto;
                }
            }

            .p_affiliates_why_choose_us .p_affiliates_why_choose_us__content_wrap {
                position: relative;
                /*max-width: 1920px;*/
                margin: 0 auto;
                width: 100%;
                height: 1074px;
            }
            @media only screen and (max-width: 1400px) {
                .p_affiliates_why_choose_us .p_affiliates_why_choose_us__content_wrap {
                    height: 974px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_why_choose_us .p_affiliates_why_choose_us__content_wrap {
                    height: 100%;
                    overflow: hidden;
                }
            }

            .p_affiliates_why_choose_us .p_affiliates_why_choose_us__content {
                /*position: relative;*/
            }

            .p_affiliates_why_choose_us .message {
                position: absolute;
                right: 18%;
                top: 36px;
                z-index: 9;

                opacity: 0;
                transform: translate(150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_affiliates_why_choose_us .message._active{
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 1700px) {
                .p_affiliates_why_choose_us .message {
                    right: 100px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_why_choose_us .message {
                    position: static;
                }
            }

            .p_affiliates_why_choose_us .message-image {
                max-width: 810px;
                width: 100%;
                min-width: 810px;
                position: absolute;
                right: -64px;
                top: 10px;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_why_choose_us .message-image {
                    width: 100%;
                    position: absolute;
                    /*right: -40%;*/
                    top: -35px;
                    min-width: 1200px;
                }
            }
            @media only screen and (max-width: 768px) {
                .p_affiliates_why_choose_us .message-image {

                    right: -14%;
                    top: -35px;
                    min-width: 904px;
                }
            }

            @media only screen and (max-width: 480px) {
                .p_affiliates_why_choose_us .message-image {
                    right: 0;
                    top: -13px;
                    min-width: 904px;
                    left: -16%;
                    height: 900px;
                }
            }
            @media only screen and (max-width: 389px) {
                .p_affiliates_why_choose_us .message-image {
                    height: 900px;
                }
            }


            .p_affiliates_why_choose_us .message-text {
                position: relative;
                z-index: 10;
                padding: 85px 0px;
                max-width: 644px;
                width: 100%;
                box-sizing: border-box;
            }

            *:lang(ua-UA) .p_affiliates_why_choose_us .message-text {
                max-width: 680px;
                padding: 85px 0 85px 15px;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_why_choose_us .message-text {
                    max-width: 100%;
                    padding: 50px 20px;
                }

                *:lang(ua-UA) .p_affiliates_why_choose_us .message-text {
                    max-width: 100%;
                    padding: 70px 20px;
                }
            }

            @media only screen and (max-width: 768px) {
                *:lang(ua-UA) .p_affiliates_why_choose_us .message-text {
                    padding: 50px 20px;
                }
            }

            .p_affiliates_why_choose_us .message-text h2 {
                color: #333;
                font-family: 'Montserrat', system-ui;
                font-size: 40px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;
                margin-bottom: 15px;
            }

            *:lang(ua-UA) .p_affiliates_why_choose_us .message-text h2 {
                font-size: 36px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 3.6px;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_why_choose_us .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', system-ui;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                }
            }

            @media only screen and (max-width: 768px) {
                *:lang(ua-UA) .p_affiliates_why_choose_us .message-text h2 {
                    font-size: 24px;
                    letter-spacing: 2.4px;
                }
            }

            .p_affiliates_why_choose_us .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 9px;
            }

            .p_affiliates_why_choose_us .message-text p {
                color: #333;
                font-family: 'Roboto', system-ui;
                font-size: 16px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 1.6px;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_why_choose_us .message-text p {
                    color: #231F20;
                    font-size: 16px;
                    letter-spacing: 1.6px;
                }
            }


            .p_affiliates_why_choose_us .main_img {
                position: absolute;
                bottom: 0;
                /*max-width: 1920px;*/
                left: 50%;
                transform: translate(-50%, 0);
                width: 100%;

                opacity: 0;
                transition: all 0.8s ease 0s;
            }



            .p_affiliates_why_choose_us .main_img._active{
                opacity: 1;

            }

            @media only screen and (max-width: 1400px) {
                .p_affiliates_why_choose_us .main_img {
                    bottom: -65px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_why_choose_us .main_img {
                    position: relative;
                    overflow: hidden;
                    bottom: 0;
                }

            }

            @media only screen and (max-width: 600px) {
                .p_affiliates_why_choose_us .main_img  img{
                    max-width: 778px;
                    height: auto;
                    width: 778px;
                    transform: translate(-118px, 0);
                    position: relative;
                }
            }
            .p_affiliates_why_choose_us .divider {
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