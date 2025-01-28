<?php global $anyFr;
$anyFr++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_any_fraudulent p_any_fraudulent-<?php echo $anyFr; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_any_fraudulent__content_wrap">
        <div class="p_any_fraudulent__content">
            <h2 class="_anim-items _anim-no-hide"><?php echo get_sub_field('title'); ?></h2>
            <div class="message _anim-items _anim-no-hide">
                <div class="message-text">
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
    <?php if ($anyFr < 2): ?>
        <style>
            .p_any_fraudulent {
                min-height: 919px;
                position: relative;

            }

            @media only screen and (max-width: 991px) {
                .p_any_fraudulent {
                    min-height: auto;
                }
            }

            .p_any_fraudulent .p_any_fraudulent__content_wrap {
                position: relative;
                max-width: 1920px;
                margin: 0 auto;
                width: 100%;
                height: 919px;
            }

            @media only screen and (max-width: 1400px) {
                .p_any_fraudulent .p_any_fraudulent__content_wrap {
                    height: 100%;
                }
            }

            .p_any_fraudulent .p_any_fraudulent__content {
                /*position: relative;*/
            }

            .p_any_fraudulent .message {
                position: absolute;
                /*right: 341px;*/
                right: 16.5%;
                bottom: 214px;
                z-index: 9;

                opacity: 0;
                transform: translate(150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_any_fraudulent .message._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 1800px) {
                .p_any_fraudulent .message {
                    right: 10%;
                }
            }

            @media only screen and (max-width: 1800px) {
                .p_any_fraudulent .message {
                    right: 20px;
                }
            }

            @media only screen and (max-width: 1400px) {
                .p_any_fraudulent .message {
                    position: relative;
                    bottom: 0;
                    right: 0;
                }
            }

            .p_any_fraudulent .message-image {
                max-width: 685px;
                width: 100%;
                min-width: 685px;
                position: absolute;
                right: 12px;
                top: 10px;
            }

            @media only screen and (max-width: 991px) {
                .p_any_fraudulent .message-image {
                    display: none;
                }
            }


            .p_any_fraudulent .message-text {
                position: relative;
                z-index: 10;
                padding: 75px 60px 85px 60px;
                max-width: 685px;
                width: 100%;
                box-sizing: border-box;
            }

            @media only screen and (max-width: 1400px) {
                .p_any_fraudulent .message-text {
                    margin: 0 0 0 auto;
                }

            }

            @media only screen and (max-width: 991px) {
                .p_any_fraudulent .message-text {
                    margin: 0 auto;
                    padding: 50px 20px;
                    max-width: 100%;
                }

            }

            .p_any_fraudulent h2 {
                color: #333;
                text-align: center;
                font-family: 'Montserrat', system-ui;
                font-size: 40px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;
                max-width: 1166px;
                width: 100%;
                margin: 0 auto;
                padding-top: 64px;

                opacity: 0;
                transform: translate(0%, -150%);
                transition: all 0.8s ease 0s;
            }

            .p_any_fraudulent h2._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 991px) {
                .p_any_fraudulent h2 {
                    font-size: 24px;
                    letter-spacing: 2.4px;
                }
            }

            .p_any_fraudulent .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 9px;
            }

            .p_any_fraudulent .message-text p {
                color: #333;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 1.6px;
            }


            .p_any_fraudulent .main_img {
                position: absolute;
                bottom: 36px;
                max-width: 850px;
                left: 9%;
                /*transform: translate(-50%, 0);*/
                width: 100%;

                opacity: 0;
                transform: translate(-150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_any_fraudulent .main_img._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 1500px) {
                .p_any_fraudulent .main_img {
                    left: 20px;
                }
            }

            @media only screen and (max-width: 1400px) {
                .p_any_fraudulent .main_img {
                    position: relative;
                    z-index: 10;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_any_fraudulent .main_img {
                    margin-top: 50px;
                    left: 50%;
                }

                .p_any_fraudulent .main_img._active {
                    transform: translate(-50%, 0);
                }
            }

            .p_any_fraudulent .divider {
                height: 36px;
                width: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: 10;
            }
        </style>
    <?php endif; ?>
</section>