<?php global $ready;
$ready++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>

<section
        class="p_education_ready p_education_ready-<?php echo $ready; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_education_ready__content_wrap">
        <div class="p_education_ready__content">
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
    <?php if ($ready < 2): ?>
        <style>
            .p_education_ready {
                min-height: 1026px;
                position: relative;
                overflow: clip;
            }

            @media only screen and (max-width: 1200px) {
                .p_education_ready {
                    min-height: 1126px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_education_ready {
                    min-height: auto;
                }
            }

            .p_education_ready .p_education_ready__content_wrap {
                position: relative;
                /*max-width: 1920px;*/
                margin: 0 auto;
                /*width: 100%;*/
                height: 1026px;

                max-width: 1550px;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .p_education_ready .p_education_ready__content_wrap {
                    height: 100%;
                }
            }

            .p_education_ready .p_education_ready__content {
                /*position: relative;*/
            }

            .p_education_ready .message {
                position: absolute;
                top: 210px;
                left: 0;
                /*transform: translate(343px, 0);*/

                z-index: 10;

                opacity: 0;
                transform: translate(-150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_education_ready .message._active{
                opacity: 1;
                transform: translate(22px, 0);
            }

            @media only screen and (max-width: 1200px) {
                .p_education_ready .message {
                    top: 10px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_education_ready .message {
                    position: relative;
                    transform: none;
                }
            }

            .p_education_ready .message-image {
                max-width: 892px;
                width: 100%;
                min-width: 892px;
                position: absolute;
                /*right: 12px;*/
                top: 0;
                z-index: 1;
            }

            @media only screen and (max-width: 991px) {
                .p_education_ready .message-image {
                    left: 50%;
                    transform: translate(-47%, 0);
                }
            }


            .p_education_ready .message-text {
                position: relative;
                z-index: 10;
                padding: 141px 160px;
                max-width: 892px;
                min-width: 892px;
                width: 100%;
                box-sizing: border-box;
                text-align: center;
            }

            @media only screen and (max-width: 991px) {
                .p_education_ready .message-text {
                    /*max-width: 100%;*/
                    /*padding: 50px 20px;*/
                    /*text-align: center;*/
                    /*min-width: 100%;*/
                    left: 50%;
                    transform: translate(-50%, 0);
                    padding: 200px 160px;
                }
            }
            @media only screen and (max-width: 389px) {
                .p_education_ready .message-text {
                    padding: 200px 15px;
                    max-width: none;
                    min-width: auto;
                }
            }

            .p_education_ready .message-text h2 {
                width: 100%;
                margin: 0 auto 20px;
                color: #231F20;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
            }

            @media only screen and (max-width: 991px) {
                .p_education_ready .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 15px;
                    max-width: 367px;
                }
            }

            .p_education_ready .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 9px;
                max-width: 526px;
                width: 100%;
                margin: 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .p_education_ready .message-text .text {
                    gap: 15px;
                    max-width: 367px;
                }
            }

            .p_education_ready .message-text p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
            }

            @media only screen and (max-width: 991px) {
                .p_education_ready .message-text p {
                    font-size: 20px;
                    letter-spacing: 4px;
                }
            }


            .p_education_ready .main_img {
                position: absolute;
                bottom: 0;
                max-width: 707px;
                width: 100%;
                right: 165px;

                opacity: 0;
                transform: translate(150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_education_ready .main_img._active{
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 1500px) {
                .p_education_ready .main_img {
                    right: 20px;
                }
            }

            @media only screen and (max-width: 1200px) {
                .p_education_ready .main_img {
                    bottom: -150px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_education_ready .main_img {
                    position: relative;
                    overflow: hidden;
                    transform: translate(-50%, 0);
                    bottom: 38px;
                    left: 50%;
                    z-index: 10;
                    margin-top: -100px;
                    padding: 0 15px;
                }
            }

            @media only screen and (max-width: 560px) {
                .p_education_ready .main_img {

                }
            }

            /*@media only screen and (max-width: 420px) {*/
            /*    .p_education_ready .main_img img {*/
            /*        max-width: 482px;*/
            /*        height: auto;*/
            /*        width: 482px;*/
            /*        transform: translate(-82px, 0);*/
            /*        position: relative;*/
            /*    }*/
            /*}*/

            .p_education_ready .divider {
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