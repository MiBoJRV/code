<?php global$receive;
$receive++;
?>

<?php
$bgImage = get_sub_field('section_background');
?>

<section
        class="p_receive p_receive-<?php echo $receive; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_receive__content">
        <div class="text-content">
            <div class="text-content-left _anim-items _anim-no-hide">
                <h2 class="title"><?php echo get_sub_field('title'); ?></h2>
            </div>
        </div>
        <div class="image-content _anim-items _anim-no-hide">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
    </div>
    <?php if ($receive < 2): ?>
        <style>

            .p_receive {
                padding: 10px 20px 0;
                position: relative;
                overflow: hidden;
                z-index: 100;
            }

            @media only screen and (max-width: 991px) {
                .p_receive {
                    padding: 50px 0 0;
                }
            }

            .p_receive .p_receive__content {
                padding: 0 20px;
                max-width: 1920px;
                margin: 0 auto;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .p_receive .p_receive__content {
                    display: flex;
                    flex-direction: column;
                    padding: 0 3px;
                }
            }

            .p_receive .text-content {
                display: flex;
                justify-content: space-between;
                align-items: end;
                /*position: relative;*/
                z-index: 10;
                position: absolute;
                top: 50%;
            }

            @media only screen and (max-width: 991px) {
                .p_receive .text-content {
                    position: static;
                    padding: 0 20px;
                }
            }

            .p_receive .text-content-right {
                margin-bottom: -82px;
                margin-right: 134px;

                transform: translateY(250%);
                opacity: 0;
                transition: all 0.3s ease 0s;
            }

            .p_receive .text-content-right._active {
                transform: translateY(0);
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p_receive .text-content-right._active {
                    position: absolute;
                    bottom: 147px;
                    left: 50%;
                    transform: translate(-50%, 0);
                }
            }

            .p_receive .text-content-right a {
                display: flex;
                width: 159px;
                height: 63px;
                padding: 20px 50px;
                justify-content: center;
                align-items: center;
                gap: 10px;
                flex-shrink: 0;
                color: #FFFCE9;
                text-align: center;
                text-shadow: 0px 4px 14px rgba(251, 254, 255, 0.45);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 2px;
                text-transform: uppercase;
                border-radius: 30px;
                background: #FF7A00;
                box-shadow: 8px 4px 1px 0px #000;
            }

            .p_receive .image-content {
                position: relative;
                right: 0;
                bottom: 0;
                transform: translate(150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;
            }


            .p_receive .image-content._active {
                transform: translate(-60px, 0);
                opacity: 1;
                text-align: right;
            }

            @media only screen and (max-width: 1500px) {
                .p_receive .image-content._active {
                    transform: translate(0, 0);
                    text-align: center;
                }
            }
            @media only screen and (max-width: 991px) {
                .p_receive .image-content._active {
                    position: static;
                    margin-top: 20px;
                    text-align: center;
                }
            }


            .p_receive .text-content-left {
                max-width: 1123px;
                width: 100%;
                transform: translate(-150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            .p_receive .text-content-left._active {
                transform: translate(29%, 0);
                opacity: 1;
            }

            @media only screen and (max-width: 1700px) {
                .p_receive .text-content-left._active {
                    transform: translate(3%, 0);
                }
            }

            @media only screen and (max-width: 991px) {
                .p_receive .text-content-left._active {
                    display: flex;
                    flex-direction: column;
                    gap: 15px;
                    transform: translate(0, 0);
                }
            }

            .p_receive .sub-title {
                color: #FFF;
                text-shadow: 8px 4px 1px #1F1D1D;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
            }

            @media only screen and (max-width: 991px) {
                .p_receive .sub-title {
                    font-size: 32px;
                    letter-spacing: 3.2px;
                }
            }

            .p_receive .title {
                color: #FFFCE9;
                font-family: 'Montserrat', system-ui;
                font-size: 64px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 12.8px;
                text-transform: uppercase;
                margin: 0;
                text-shadow: 10px 10px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 10px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
            }

            @media only screen and (max-width: 991px) {
                .p_receive .title {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    text-shadow: 6px 6px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 6px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
                }

                *:lang(ua-UA) .p_receive .title {
                    font-size: 30px;
                    letter-spacing: 3.2px;
                }
            }

            @media only screen and (max-width: 389px) {
                *:lang(ua-UA) .p_receive .title {
                    font-size: 24px;
                    letter-spacing: 2.4px;
                }
            }

            @media only screen and (max-width: 340px) {
                .p_receive .title {
                    font-size: 40px;
                }
            }

            .p_receive h2 {
                color: #FFFCE9;
                text-shadow: 3px 2px 0px #101010;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 991px) {
                .p_receive h2 {
                    font-size: 24px;
                    letter-spacing: 4.8px;
                }
            }

            .p_receive p {
                color: #FFFCE9;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 3.2px;
                max-width: 605px;
                margin-bottom: 30px;
            }

            @media only screen and (max-width: 991px) {
                .p_receive p.big_text {
                    font-size: 20px;
                    letter-spacing: 2px;
                }
            }
        </style>
    <?php endif; ?>
</section>