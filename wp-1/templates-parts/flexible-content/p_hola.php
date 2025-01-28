<?php global $holaPablo;
$holaPablo++; ?>

<?php
$bgImage = get_sub_field('section_background');
?>

<section class="p_hola p_hola-<?php echo $holaPablo; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_hola__content">
        <div class="left-side _anim-items _anim-no-hide">
            <?php $image = get_sub_field('image_1'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
        <div class="message _anim-items _anim-no-hide">
            <div class="message-text">
                <?php if (get_sub_field('title') != ''): ?>
                    <h2><?php echo get_sub_field('title'); ?></h2>
                <?php endif; ?>

                <div class="text">
                    <p> <?php echo get_sub_field('text'); ?></p>
                </div>
            </div>
            <?php $image = get_sub_field('image_2'); ?>
            <img class="message-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
    </div>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>

    <?php if ($holaPablo < 2): ?>
        <style>
            .p_hola {

            }

            .p_hola .p_hola__content {
                display: flex;
                justify-content: center;
                width: 100%;
                margin: 0 auto;
                /*max-height: 890px;*/
                overflow: hidden;
                position: relative;
            }

            @media only screen and (max-width: 1200px) {
                .p_hola .p_hola__content {
                    flex-direction: column-reverse;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_hola .p_hola__content {
                    flex-direction: column-reverse;
                    max-height: none;
                    overflow: hidden;
                }
            }

            .p_hola .left-side {
                max-width: 980px;
                width: 100%;
                margin-top: 81px;

                transform: translate(-150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            @media only screen and (max-width: 991px) {
                .p_hola .left-side {
                    margin-top: 0;
                }
            }


            .p_hola .left-side._active {
                transform: translate(77px, 4px);
                opacity: 1;
            }

            @media only screen and (max-width: 1200px) {
                .p_hola .left-side._active {
                    transform: translate(0, 0);
                    margin: 81px auto 0;
                }
            }
            @media only screen and (max-width: 991px) {
                .p_hola .left-side._active {
                    transform: translate(0, 5px);
                    min-height: 722px;
                    overflow: hidden;
                    max-width: 100%;
                    margin-top: 0;
                }
            }

            .p_hola .left-side img {
                max-width: 980px;
                /*width: 100%;*/
                height: auto;
            }

            @media only screen and (max-width: 991px) {
                .p_hola .left-side img {
                    max-width: 980px;
                    height: auto;
                    width: 872px;
                    transform: translate(-50%, 0px);
                    position: relative;
                    left: 50%;
                }
            }

            @media only screen and (max-width: 768px) {
                .p_hola .left-side img {
                    left: 42%;
                }
            }

            /*@media only screen and (max-width: 600px) {*/
            /*    .p_hola .left-side img {*/
            /*        left: 42%;*/
            /*    }*/
            /*}*/

            @media only screen and (max-width: 600px) {
                .p_hola .left-side img {
                    left: 40%;
                }
            }

            .p_hola .right-side {
                max-width: 873px;
                width: 100%;
                margin-top: 32px;

                transform: translate(150%, 0);
                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            /*@media only screen and (max-width: 991px) {*/
            /*    .p_hola .right-side img {*/
            /*        display: none;*/
            /*        max-width: none;*/
            /*    }*/
            /*}*/

            /*.p_hola .right-side-text {*/
            /*    display: none;*/
            /*}*/

            @media only screen and (max-width: 991px) {
                .p_hola .right-side-text {
                    display: flex;
                    flex-direction: column;
                    gap: 15px;
                    padding: 50px 20px 0;
                }
            }

            /*.p_hola .right-side-text h2 {*/
            /*    color: #231F20;*/
            /*    font-family: 'Montserrat', system-ui;*/
            /*    font-size: 36px;*/
            /*    font-style: normal;*/
            /*    font-weight: 900;*/
            /*    line-height: normal;*/
            /*    letter-spacing: 3.6px;*/
            /*    text-transform: uppercase;*/
            /*}*/

            /*.p_hola .right-side-text p {*/
            /*    color: #231F20;*/
            /*    font-family: 'Roboto', system-ui;*/
            /*    font-size: 20px;*/
            /*    font-style: normal;*/
            /*    font-weight: 600;*/
            /*    line-height: normal;*/
            /*    letter-spacing: 2px;*/
            /*}*/


            .p_hola .right-side._active {
                transform: translate(-33%, 0);
                opacity: 1;
            }

            @media only screen and (max-width: 1840px) {
                .p_hola .right-side {
                    transform: translate(150%, 0);
                    opacity: 0;
                    transition: all 0.8s ease 0s;
                }

                .p_hola .right-side._active {
                    transform: translate(-28%, 0);
                }
            }

            @media only screen and (max-width: 1550px) {
                .p_hola .right-side {
                    transform: translate(150%, 0);
                    opacity: 0;
                    transition: all 0.8s ease 0s;
                }

                .p_hola .right-side._active {
                    transform: translate(-22%, 0);
                }
            }

            @media only screen and (max-width: 991px) {
                .p_hola .right-side._active {
                    transform: translate(0, 0);
                    margin: 0;
                }
            }

            /*.p_hola .right-side img {*/
            /*    max-width: 873px;*/
            /*    width: 100%;*/
            /*    height: auto;*/
            /*}*/



            .p_hola .divider {
                height: 36px;
                width: 100%;
            }

            .p_hola .message {
                /*position: absolute;*/
                position: relative;
                /*right: 16%;*/
                top: 32px;
                width: 823px;
                opacity: 0;
                transform: translate(150%, 0%);
                transition: all 0.8s ease 0s;
            }

            @media only screen and (max-width: 991px) {
                .p_hola .message {
                    width: 100%;
                }
            }

            .p_hola .message._active {
                opacity: 1;
                transform: translate(-295px, 0);
            }

            @media only screen and (max-width: 1200px) {
                .p_hola .message._active {
                    transform: translate(0, 0);
                    margin: 0 auto;
                }
            }

            /*@media only screen and (max-width: 1700px) {*/
            /*    .p_hola .message {*/
            /*        right: 20px;*/
            /*    }*/
            /*}*/

            @media only screen and (max-width: 991px) {
                .p_hola .message {
                    position: static;
                }
            }

            .p_hola .message-image {
                max-width: 873px;
                width: 100%;
                min-width: 873px;
                position: absolute;
                top: 0;
                mask: linear-gradient(180deg, white 20%, white 20%, white 80%, transparent);
                left: 0;
            }

            @media only screen and (max-width: 991px) {
                .p_hola .message-image {
                    display: none;
                }
            }


            .p_hola .message-text {
                position: relative;
                z-index: 10;
                padding: 179px 121px 0 140px;
                width: 823px;
                box-sizing: border-box;
            }

            *:lang(ua-UA) .p_hola .message-text {
                padding: 182px 55px 0 120px;
            }

            @media only screen and (max-width: 991px) {
                .p_hola .message-text, *:lang(ua-UA) .p_hola .message-text {
                    max-width: 100%;
                    padding: 50px 20px;
                    width: 100%;
                }
            }

            .p_hola .message-text h2 {
                color: #231F20;
                /*font-family: 'Montserrat', system-ui;*/
                font-family: 'Montserrat', system-ui;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                max-width: 609px;
                margin: 0 auto 14px;
            }

            *:lang(ua-UA) .p_hola .message-text h2 {
                margin: 0 auto 10px;
                max-width: 648px;
            }

            @media only screen and (max-width: 991px) {
                .p_hola .message-text h2, *:lang(ua-UA) .p_hola .message-text h2 {
                    color: #231F20;
                    font-family: 'Montserrat', system-ui;
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin: 0 0 15px;
                    max-width: none;
                }
            }

            .p_hola .message-text .text {
                display: flex;
                flex-direction: column;
                gap: 9px;
                max-width: 395px;
                margin: 0 0 0 67px;
            }

            *:lang(ua-UA) .p_hola .message-text .text {
                /*max-width: 485px;*/
                /*margin: 0 29px 0 auto;*/
                max-width: 540px;
                margin: 0 3px 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .p_hola .message-text .text, *:lang(ua-UA) .p_hola .message-text .text {
                    max-width: none;
                    margin: 0;
                }
            }

            .p_hola .message-text p {
                color: #231F20;
                font-family: 'Roboto', system-ui;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 24px;
                letter-spacing: 4px;
            }

            *:lang(ua-UA) .p_hola .message-text p {
                letter-spacing: 4px;
            }

            @media only screen and (max-width: 991px) {
                .p_hola .message-text p {
                    letter-spacing: 2px;
                }
            }
        </style>
    <?php endif; ?>
</section>