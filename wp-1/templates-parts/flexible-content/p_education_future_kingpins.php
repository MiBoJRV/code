<?php global $future;
$future++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>

<section
        class="p_education_future_kingpins p_education_future_kingpins-<?php echo $future; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_education_future_kingpins__content_wrap">
        <div class="p_education_future_kingpins__content">
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
    <?php if ($future < 2): ?>
        <style>
            .p_education_future_kingpins {
                min-height: 867px;
                position: relative;
                z-index: 100;
            }

            @media only screen and (max-width: 991px) {
                .p_education_future_kingpins {
                    min-height: auto;
                }
            }

            .p_education_future_kingpins .p_education_future_kingpins__content_wrap {
                position: relative;
                /*max-width: 1920px;*/
                margin: 0 auto;
                /*width: 100%;*/
                height: 867px;

                max-width: 1278px;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .p_education_future_kingpins .p_education_future_kingpins__content_wrap {
                    height: 100%;
                }
            }

            .p_education_future_kingpins .p_education_future_kingpins__content {
                /*position: relative;*/
            }

            .p_education_future_kingpins .message {
                position: absolute;
                top: 53px;
                left: 0;

                z-index: 10;

                opacity: 0;
                transform: translate(0%, -90%);
                transition: all 0.8s ease 0s;
            }

            .p_education_future_kingpins .message._active{
                opacity: 1;
                transform: translate(22px, 0);
            }




            @media only screen and (max-width: 991px) {
                .p_education_future_kingpins .message {
                    position: static;
                    transform: none;
                }
            }

            .p_education_future_kingpins .message-image {
                max-width: 738px;
                width: 100%;
                min-width: 738px;
                position: absolute;
                right: 12px;
                top: 10px;
                z-index: 1;
            }

            @media only screen and (max-width: 991px) {
                .p_education_future_kingpins .message-image {
                    display: none;
                }
            }


            .p_education_future_kingpins .message-text {
                position: relative;
                z-index: 10;
                padding: 169px 130px;
                max-width: 738px;
                min-width: 738px;
                width: 100%;
                box-sizing: border-box;
                text-align: center;
            }

            @media only screen and (max-width: 991px) {
                .p_education_future_kingpins .message-text {
                    max-width: 100%;
                    padding: 50px 20px;
                    text-align: center;
                    min-width: 100%;
                }
            }

            .p_education_future_kingpins .message-text h2 {
                color: #333;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 40px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;
                max-width: 392px;
                width: 100%;
                margin: 0 auto 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_education_future_kingpins .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 15px;
                }
            }

            .p_education_future_kingpins .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 9px;
                max-width: 392px;
                width: 100%;
                margin: 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .p_education_future_kingpins .message-text .text {
                    gap: 15px;
                }
            }

            .p_education_future_kingpins .message-text p {
                color: #333;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 1.6px;
            }

            @media only screen and (max-width: 991px) {
                .p_education_future_kingpins .message-text p {
                    color: #231F20;
                    font-size: 16px;
                    letter-spacing: 1.6px;
                }
            }


            .p_education_future_kingpins .main_img {
                position: absolute;
                bottom: 0;
                max-width: 1307px;
                width: 100%;
                right: -155px;

                opacity: 0;
                transform: translate(0%, 30%);
                transition: all 0.8s ease 0s;
            }

            .p_education_future_kingpins .main_img._active{
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 991px) {
                .p_education_future_kingpins .main_img {
                    position: relative;
                    overflow: hidden;
                    transform: translate(50%, -36px);
                    margin-top: -100px;
                    right: 43%;
                }

            }

            @media only screen and (max-width: 420px) {
                .p_education_future_kingpins .main_img img {
                    max-width: 482px;
                    height: auto;
                    width: 482px;
                    transform: translate(-82px, 0);
                    position: relative;
                }
            }

            .p_education_future_kingpins .divider {
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