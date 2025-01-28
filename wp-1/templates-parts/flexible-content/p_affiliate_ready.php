<?php global $ready;
$ready++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_affiliate_ready p_affiliate_ready-<?php echo $ready; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_affiliate_ready__content">
        <div class="title_block _anim-items _anim-no-hide">
            <h2 class="title"><?php echo get_sub_field('title'); ?></h2>
            <p><?php echo get_sub_field('text'); ?></p>
        </div>
        <?php $image = get_sub_field('image'); ?>
        <img class="main-image _anim-items _anim-no-hide" src="<?php echo $image['url'] ?>"
             alt="<?php echo $image['alt'] ?>"/>
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
            .p_affiliate_ready {
                padding-top: 104px;
                position: relative;
            }

            .p_affiliate_ready__content {
                max-width: 1278px;
                width: 100%;
                margin: 0 auto;
                padding: 0 20px;
            }

            .p_affiliate_ready .title_block {
                opacity: 0;
                transform: translate(0, -150%);
                transition: all 0.8s ease 0s;
            }

            .p_affiliate_ready .title_block._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_affiliate_ready h2 {
                color: #FFFCE9;
                text-shadow: 8px 4px 1px #101010;
                font-family: 'Montserrat', system-ui;
                font-size: 64px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 6.4px;
                text-transform: uppercase;
                margin-bottom: 25px;
            }

            *:lang(ua-UA) .p_affiliate_ready h2 {
                font-size: 57px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 5.7px;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliate_ready h2, *:lang(ua-UA) .p_affiliate_ready h2 {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                }
            }

            @media only screen and (max-width: 550px) {
                *:lang(ua-UA) .p_affiliate_ready h2 {
                    font-size: 30px;
                    letter-spacing: 3px;
                }
            }

            @media only screen and (max-width: 480px) {
                *:lang(ua-UA) .p_affiliate_ready h2 {
                    font-size: 24px;
                    letter-spacing: 2.4px;
                }
            }

            @media only screen and (max-width: 389px) {
                *:lang(ua-UA) .p_affiliate_ready h2 {
                    font-size: 19px;
                    letter-spacing: 1.9px;
                }
            }

            .p_affiliate_ready p {
                color: #FFFCE9;
                text-shadow: 3px 2px 0px #101010;
                font-family: 'Roboto', system-ui;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin-bottom: 45px;
                max-width: 893px;
                width: 100%;
            }

            @media only screen and (max-width: 389px) {
                .p_affiliate_ready p {
                    font-size: 18px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    letter-spacing: 1.8px;
                }
            }

            .p_affiliate_ready .main-image {
                opacity: 0;
                transform: translate(0, 50%);
                transition: all 0.8s ease 0s;
            }


            .p_affiliate_ready .main-image._active {
                opacity: 1;
                transform: translate(0, 0);
            }


            .p_affiliate_ready .divider {
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