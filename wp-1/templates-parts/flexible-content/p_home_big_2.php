<?php global $bigSec2;
$bigSec2++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_home_big_2 p_home_big_2-<?php echo $bigSec2; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_home_big_2__content_wrap">
        <div class="p_home_big_2__content">
            <div class="message-1 _anim-items _anim-no-hide">
                <div class="message-text big-1">
                    <?php if (get_sub_field('title_#1') != ''): ?>
                        <h2><?php echo get_sub_field('title_#1'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_sub_field('subtitle_#1') != ''): ?>
                        <h3><?php echo get_sub_field('subtitle_#1'); ?></h3>
                    <?php endif; ?>

                    <div class="text">
                        <?php echo get_sub_field('text_#1'); ?>
                    </div>
                </div>
                <?php $image = get_sub_field('message_image_#1'); ?>
                <img class="message-image-1" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
            </div>
            <div class="message-2 _anim-items _anim-no-hide">
                <div class="message-text big_2">
                    <?php if (get_sub_field('title_#2') != ''): ?>
                        <h2><?php echo get_sub_field('title_#2'); ?></h2>
                    <?php endif; ?>
                    <?php if (get_sub_field('subtitle_#2') != ''): ?>
                        <h3><?php echo get_sub_field('subtitle_#2'); ?></h3>
                    <?php endif; ?>

                    <div class="text">
                        <?php echo get_sub_field('text_#2'); ?>
                    </div>
                </div>
                <?php $image = get_sub_field('message_image_#2'); ?>
                <img class="message-image-1" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
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
    <?php if ($bigSec2 < 2): ?>
        <style>
            .p_home_big_2 {
                /*min-height: 970px;*/
                position: relative;
                /*padding: 0 20px;*/
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 {
                    min-height: auto;
                    /*padding-top:  200px;*/
                }
            }

            @media only screen and (max-width: 480px) {
                .p_home_big_2 {
                    padding-top: 300px;
                    padding-bottom: 150px;
                }


            }

            .p_home_big_2 .p_home_big_2__content_wrap {
                position: relative;
                /*max-width: 1920px;*/
                margin: 0 auto;
                width: 100%;
                max-height: 1237px;
                /*height: 970px;*/
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 .p_home_big_2__content_wrap {
                    /*height: 100%;*/
                    max-height: none;
                }
            }

            .p_home_big_2 .p_home_big_2__content {
                /*position: relative;*/
            }

            .p_home_big_2 .message-1 {
                position: absolute;
                z-index: 99;
                top: -304px;
                width: 100%;
                max-width: 620px;
                left: 320px;

                opacity: 0;
                transform: translate(350%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_home_big_2 .message-1._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 1700px) {
                .p_home_big_2 .message-1 {
                    top: 10px;
                    right: 20px;
                }
            }


            .p_home_big_2 .message-2 {
                position: absolute;
                z-index: 99;
                width: 100%;
                max-width: 630px;
                right: 20px;
                bottom: 143px;

                opacity: 0;
                transform: translate(-350%, 0%);
                transition: all 0.8s ease 0s;
            }


            .p_home_big_2 .message-2._active {
                opacity: 1;
                transform: translate(0, 0);
            }


            @media only screen and (max-width: 1700px) {
                .p_home_big_2 .message-1 {
                    left: 20px;
                    top: -304px;
                }
            }

            @media only screen and (max-width: 1400px) {
                .p_home_big_2 .message-2 {
                    bottom: -100px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 .message-1._active {
                    top: 130px;
                    /*top: auto;*/
                    left: 50%;
                    transform: translate(-50%, 0);
                }

                .p_home_big_2 .message-2._active {
                    left: 50%;
                    transform: translate(-50%, 0);
                    bottom: -150px;
                }
            }

            @media only screen and (max-width: 480px) {
                .p_home_big_2 .message-1 {
                    bottom: -120px;
                }

                .p_home_big_2 .message-1 {
                    top: -30px;
                }

                .p_home_big_2 .message-2._active {
                    bottom: -279px;
                }

            }


            .p_home_big_2 .message-image-1 {
                max-width: 632px;
                width: 100%;
                min-width: 632px;
                position: absolute;
                top: -33px;
                mask: linear-gradient(180deg, white 20%, white 20%, white 80%, transparent);
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 .message-image-1 {
                    right: 0;
                    top: 0;
                    transform: translate(-50%, 0);
                    left: 50%;
                }
            }

            @media only screen and (max-width: 480px) {
                .p_home_big_2 .message-image-1 {
                    min-width: 762px;
                }
            }


            .p_home_big_2 .message-text {
                display: flex;
                flex-direction: column;
                gap: 20px;
                position: relative;
                z-index: 10;
                padding: 68px 0 0 0;
                max-width: 677px;
                width: 100%;
                box-sizing: border-box;
            }

            *:lang(ua-UA) .p_home_big_2 .message-text {
                padding: 62px 0 0 0;
            }

            .p_home_big_2 .message-text.big_2 {
                display: flex;
                flex-direction: column;
                gap: 20px;
                position: relative;
                z-index: 10;
                padding: 135px 0 0 0;
                max-width: 677px;
                width: 100%;
                box-sizing: border-box;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 .message-text {
                    padding: 142px 0 0;
                }

                *:lang(ua-UA) .p_home_big_2 .message-text {
                    padding: 100px 0 0 0;
                }
            }

            @media only screen and (max-width: 667px) {
                .p_home_big_2 .message-text, *:lang(ua-UA) .p_home_big_2 .message-text {
                    left: 50%;
                    transform: translate(-50%, 0);
                    padding: 106px 20px 0 20px;
                    min-width: 350px;
                }
            }

            @media only screen and (max-width: 480px) {
                .p_home_big_2 .message-text.big_2  {
                    padding: 200px 20px 0 20px;
                }

                *:lang(ua-UA) .p_home_big_2 .message-text {
                    padding: 110px 20px 0 20px;
                }
            }

            @media only screen and (max-width: 389px) {
                *:lang(ua-UA) .p_home_big_2 .message-text.big_2 {
                    min-width: 320px;
                }
            }

            .p_home_big_2 .message-text h2 {
                color: #231F20;
                text-align: center;
                font-family: 'Montserrat', system-ui;
                font-size: 36px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 3.6px;
                text-transform: uppercase;

                max-width: 331px;
                width: 100%;
                margin: 0 auto;
            }

            *:lang(ua-UA) .p_home_big_2 .message-text h2 {
                font-size: 32px;
                letter-spacing: 3.2px;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', system-ui;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                }
                *:lang(ua-UA) .p_home_big_2 .message-text.big_2 {
                    padding: 170px 5px 0 5px;
                }
            }

            @media only screen and (max-width: 389px) {
                *:lang(ua-UA) .p_home_big_2 .message-text h2 {
                    font-size: 26px;
                    letter-spacing: 2.6px;
                }
            }

            .p_home_big_2 .message-text h3 {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', system-ui;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;

                max-width: 338px;
                width: 100%;
                margin: 0 auto;
            }

            *:lang(ua-UA) .p_home_big_2 .message-text h3 {
                font-size: 16px;
                letter-spacing: 1.6px;
            }

            .p_home_big_2 .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 .message-text .text {
                    gap: 15px;
                }
            }

            .p_home_big_2 .message-text p {
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

            *:lang(ua-UA) .p_home_big_2 .message-text p {
                max-width: 538px;
            }

            *:lang(ua-UA) .p_home_big_2 .message-text.big_2 p {
                max-width: 520px;
            }

            *:lang(ua-UA) .p_home_big_2 .message-text p:nth-child(2) {
                max-width: 486px;
            }

            .p_home_big_2 .message-text p:last-of-type {
                max-width: 388px;
                width: 100%;
                margin: 0 auto;
            }

            *:lang(ua-UA) .p_home_big_2 .message-text p:last-of-type {
                max-width: 303px;
            }

            *:lang(ua-UA) .p_home_big_2 .message-text.big_2 p:last-of-type {
                max-width: 356px;
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 .message-text p {

                }
            }

            .p_home_big_2 .main_img img {
                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            .p_home_big_2 .main_img img._active {
                opacity: 1;
                width: 100%;
            }

            @media only screen and (max-width: 1400px) {
                .p_home_big_2 .main_img img._active {
                    width: auto;
                }

                .p_home_big_2 .main_img {
                    position: relative;
                    overflow: hidden;
                }

                .p_home_big_2 .main_img img {
                    max-width: 1920px;
                    height: auto;
                    transform: translate(-50%, 0);
                    left: 50%;
                    position: relative;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 .main_img {
                    position: relative;
                    overflow: hidden;
                    padding-top: 400px;
                }

                .p_home_big_2 .main_img img {
                    max-width: 1920px;
                    height: auto;
                    transform: translate(-49%, 0);
                }

            }

            @media only screen and (max-width: 991px) {
                .p_home_big_2 .main_img {
                    padding-top: 600px;
                }
            }

            @media only screen and (max-width: 480px) {
                .p_home_big_2 .main_img img {
                    /*transform: translate(-26%, 0);*/
                    max-width: 1671px;
                }
            }

            /*@media only screen and (max-width: 480px) {*/
            /*    .p_home_big_2 .main_img img {*/
            /*        transform: translate(-28%, 0);*/
            /*    }*/
            /*}*/

            /*.p_home_big_2 .main_img img {*/
            /*    max-height: 970px;*/
            /*}*/

            /*@media only screen and (max-width: 600px) {*/
            /*    .p_home_big_2 .main_img  img{*/
            /*        max-width: 778px;*/
            /*        height: auto;*/
            /*        width: 778px;*/
            /*        transform: translate(-118px, 0);*/
            /*        position: relative;*/
            /*    }*/
            /*}*/
            .p_home_big_2 .divider {
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