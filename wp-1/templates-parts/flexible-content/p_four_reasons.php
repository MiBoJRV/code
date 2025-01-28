<?php global $fourReasons;
$fourReasons++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<?php
$bgImageitem = get_sub_field('list_item_background');
?>
<section class="p_four_reasons p_four_reasons-<?php echo $fourReasons; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_four_reasons__content">
        <div class="title_block _anim-items _anim-no-hide">
            <h2 class="title"><?php echo get_sub_field('title'); ?></h2>
            <p><?php echo get_sub_field('text'); ?></p>
        </div>
        <ul class="list">
            <?php if (have_rows('list')): ?>
                <?php while (have_rows('list')):
                    the_row(); ?>
                    <li class="list-item" style="background-image:url('<?php echo $bgImageitem['url']; ?>');">
                        <h3 class="_anim-items _anim-no-hide"><?php echo get_sub_field('list_title'); ?></h3>
                        <?php $image = get_sub_field('list_image'); ?>
                        <img class="hand _anim-items _anim-no-hide" src="<?php echo $image['url'] ?>"
                             alt="<?php echo $image['alt'] ?>"/>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="image-bg">
        <?php $image = get_sub_field('section_image'); ?>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
    </div>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($fourReasons < 2): ?>
        <style>
            .p_four_reasons {
                position: relative;
                padding-top: 287px;
                padding-bottom: 36px;
            }

            @media only screen and (max-width: 991px) {
                .p_four_reasons {
                    padding: 68px 20px 36px;
                }
            }

            .p_four_reasons .p_four_reasons__content {

            }

            .p_four_reasons .title_block {
                max-width: 853px;
                margin: 0 auto 407px;
                position: relative;
                z-index: 10;

                opacity: 0;
                transform: translate(0, -150%);
                transition: all 0.8s ease 0s;
            }

            .p_four_reasons .title_block._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 991px) {
                .p_four_reasons .title_block {
                    margin-bottom: 50px;
                }
            }

            .p_four_reasons h2 {
                color: #FFFCE9;
                text-align: center;
                /*text-shadow: 9px 7px 0px #000;*/
                font-family: 'Montserrat', system-ui;
                font-size: 74px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 7.4px;
                text-transform: uppercase;
                margin-bottom: 20px;
                text-shadow: 10px 10px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 10px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
            }

            @media only screen and (max-width: 991px) {
                .p_four_reasons h2 {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 50px;
                    text-shadow: 6px 6px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 6px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
                }
            }


            .p_four_reasons p {
                color: #FFFCE9;
                text-align: center;
                text-shadow: 4px 3px 0px #000;
                font-family: 'Roboto', system-ui;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
            }

            @media only screen and (max-width: 991px) {
                .p_four_reasons p {
                    font-size: 32px;
                    letter-spacing: 3.2px;
                }
            }

            .p_four_reasons .list {
                max-width: 1314px;
                margin: 0 auto;
                padding: 0 20px;
                display: flex;
                justify-content: center;
                gap: 32px;
                position: relative;
                z-index: 10;
            }

            @media only screen and (max-width: 991px) {
                .p_four_reasons .list {
                    flex-direction: column;
                    align-items: center;
                }
            }

            .p_four_reasons .list-item {
                background: rgba(0, 0, 0, 0.5);
                max-width: 296px;
                min-height: 428px;
                padding: 50px 10px 15px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                width: calc(25% - 32px);
            }

            @media only screen and (max-width: 991px) {
                .p_four_reasons .list-item {
                    width: 100%;
                    overflow: hidden;
                }
            }

            .p_four_reasons .list-item .hand {
                opacity: 0;
                transform: translate(0, 150%);
            }

            @media only screen and (max-width: 991px) {
                .p_four_reasons .list-item .hand {
                    transform: translate(0, 50%);
                }
            }

            .p_four_reasons .list-item:nth-child(1) .hand {
                transition: all 0.8s ease 0s;
            }

            .p_four_reasons .list-item:nth-child(2) .hand {
                transition: all 0.8s ease 0.2s;
            }

            .p_four_reasons .list-item:nth-child(3) .hand {
                transition: all 0.8s ease 0.4s;
            }

            .p_four_reasons .list-item:nth-child(4) .hand {
                transition: all 0.8s ease 0.6s;
            }

            .p_four_reasons .list-item .hand._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_four_reasons .list-item h3 {
                color: #FFFCE9;
                text-align: center;
                text-shadow: 3px 2px 0px #101010;
                font-family: 'Montserrat', system-ui;
                font-size: 27px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 2.7px;
                text-transform: uppercase;

                opacity: 0;
                transition: all 0.8s ease 1.5s;
            }

            *:lang(ua-UA) .p_four_reasons .list-item h3 {
                font-size: 14px;
                letter-spacing: 1.4px;
            }

            @media only screen and (max-width: 398px) {
                *:lang(ua-UA) .p_four_reasons .list-item h3 {
                    font-size: 17px;
                    letter-spacing: 1.7px;
                }
            }

            .p_four_reasons .list-item h3._active{
                opacity: 1;
            }

            @media only screen and (max-width: 1200px) {
                .p_four_reasons .list-item h3 {
                    font-size: 22px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_four_reasons .list-item h3 {
                    font-size: 27px;
                }
            }

            .p_four_reasons .list-item img {
                height: 229px;
                max-width: 229px;
                margin: 0 auto;
            }


            .p_four_reasons .image-bg {
                position: absolute;
                top: -4px;
                width: 100%;
                height: 100%;
                left: 50%;
                transform: translate(-50%, 0);
                margin: 0 auto;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            @media only screen and (max-width: 768px) {
                .p_four_reasons .image-bg {
                    display: none;
                }
            }

            .p_four_reasons .image-bg img {
                height: 100%;
                object-fit: cover;
                width: auto;
                /*max-width: 1920px;*/
                width: 100%;
            }

            .p_four_reasons .divider {
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