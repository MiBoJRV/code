<?php global $letsStart;
$letsStart++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>

<section
        class="p_conferences_lets_start p_conferences_lets_start-<?php echo $letsStart; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_conferences_lets_start__content_wrap">
        <div class="p_conferences_lets_start__content">
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
    <?php if ($letsStart < 2): ?>
        <style>
            .p_conferences_lets_start {
                min-height: 1074px;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_lets_start {
                    min-height: auto;
                }
            }

            .p_conferences_lets_start .p_conferences_lets_start__content_wrap {
                position: relative;
                max-width: 1920px;
                margin: 0 auto;
                width: 100%;
                height: 1010px;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_lets_start .p_conferences_lets_start__content_wrap {
                    height: 100%;
                }
            }

            .p_conferences_lets_start .p_conferences_lets_start__content {
                /*position: relative;*/
            }

            .p_conferences_lets_start .message {
                position: absolute;
                top: 130px;
                left: 50%;


                opacity: 0;
                transform: translate(150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_conferences_lets_start .message._active{
                opacity: 1;
                transform: translate(-50%, 0);
            }



            @media only screen and (max-width: 991px) {
                .p_conferences_lets_start .message {
                    position: static;
                    transform: none;
                }
            }

            .p_conferences_lets_start .message-image {
                max-width: 865px;
                width: 100%;
                min-width: 865px;
                position: absolute;
                right: 12px;
                top: 10px;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_lets_start .message-image {
                    display: none;
                }
            }


            .p_conferences_lets_start .message-text {
                position: relative;
                z-index: 10;
                padding: 70px 45px 70px 120px;
                max-width: 912px;
                min-width: 912px;
                width: 100%;
                box-sizing: border-box;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_lets_start .message-text {
                    max-width: 100%;
                    padding: 50px 20px;
                    text-align: center;
                    min-width: 100%;
                }
            }

            .p_conferences_lets_start .message-text h2 {
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
                .p_conferences_lets_start .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 15px;
                }
            }

            .p_conferences_lets_start .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 9px;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_lets_start .message-text .text {
                    gap: 15px;
                }
            }

            .p_conferences_lets_start .message-text p {
                color: #333;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 1.6px;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_lets_start .message-text p {
                    color: #231F20;
                    font-size: 16px;
                    letter-spacing: 1.6px;
                }
            }


            .p_conferences_lets_start .main_img {
                position: absolute;
                bottom: 0;
                max-width: 1871px;
                left: 50%;

                width: 100%;

                opacity: 0;
                transform: translate(-50%, 70%);
                transition: all 0.8s ease 0.1s;
            }

            .p_conferences_lets_start .main_img._active{
                opacity: 1;
                transform: translate(-50%, 28px);
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_lets_start .main_img {
                    position: relative;
                    overflow: hidden;
                    transform: translate(-50%, -36px);
                    margin-top: 40px;
                }

            }

            @media only screen and (max-width: 420px) {
                .p_conferences_lets_start .main_img img {
                    max-width: 482px;
                    height: auto;
                    width: 482px;
                    transform: translate(-82px, 0);
                    position: relative;
                }
            }

            .p_conferences_lets_start .divider {
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