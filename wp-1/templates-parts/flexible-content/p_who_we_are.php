<?php global $whoWeAre;
$whoWeAre++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_who_we_are p_who_we_are-<?php echo $whoWeAre; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_who_we_are__content_wrap">
        <div class="p_who_we_are__content">
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
    <?php if ($whoWeAre < 2): ?>
        <style>
            .p_who_we_are {
                min-height: 1074px;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .p_who_we_are {
                    min-height: auto;
                }
            }

            .p_who_we_are .p_who_we_are__content_wrap {
                position: relative;
                /*max-width: 1920px;*/
                margin: 0 auto;
                width: 100%;
                height: 1074px;
            }

            @media only screen and (max-width: 991px) {
                .p_who_we_are .p_who_we_are__content_wrap {
                    height: 100%;
                }
            }

            .p_who_we_are .p_who_we_are__content {
                /*position: relative;*/
            }

            .p_who_we_are .message {
                position: absolute;
                right: 16%;
                top: 44px;

                opacity: 0;
                transform: translate(150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_who_we_are .message._active{
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 1700px) {
                .p_who_we_are .message {
                    right: 20px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_who_we_are .message {
                    position: static;
                }
            }

            .p_who_we_are .message-image {
                max-width: 895px;
                width: 100%;
                min-width: 895px;
                position: absolute;
                right: 12px;
                top: 10px;
            }

            @media only screen and (max-width: 991px) {
                .p_who_we_are .message-image {
                    display: none;
                }
            }


            .p_who_we_are .message-text {
                position: relative;
                z-index: 10;
                padding: 75px 72px 85px 68px;
                max-width: 895px;
                width: 100%;
                box-sizing: border-box;
            }

            @media only screen and (max-width: 991px) {
                .p_who_we_are .message-text {
                    max-width: 100%;
                    padding: 50px 20px;
                }
            }

            .p_who_we_are .message-text h2 {
                color: #333;
                text-align: center;
                font-family: 'Montserrat', system-ui;
                font-size: 40px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;
                margin-bottom: 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_who_we_are .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', system-ui;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    mb50
                }
            }

            .p_who_we_are .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 9px;
            }

            .p_who_we_are .message-text p {
                color: #333;
                font-family: 'Roboto', system-ui;
                font-size: 16px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 1.6px;
            }

            @media only screen and (max-width: 991px) {
                .p_who_we_are .message-text p {
                    color: #231F20;
                    font-size: 16px;
                    letter-spacing: 1.6px;
                }
            }


            .p_who_we_are .main_img {
                position: absolute;
                bottom: 0;
                /*max-width: 1920px;*/
                left: 50%;

                width: 100%;

                opacity: 0;
                transform: translate(-50%, 50%);
                transition: all 0.8s ease 0s;
            }

            .p_who_we_are .main_img._active{
                opacity: 1;
                transform: translate(-50%, 0);
            }

            @media only screen and (max-width: 991px) {
                .p_who_we_are .main_img {
                    position: relative;
                    overflow: hidden;
                }

            }

            @media only screen and (max-width: 600px) {
                .p_who_we_are .main_img  img{
                    max-width: 778px;
                    height: auto;
                    width: 778px;
                    transform: translate(-118px, 0);
                    position: relative;
                }
            }
        </style>
    <?php endif; ?>
</section>