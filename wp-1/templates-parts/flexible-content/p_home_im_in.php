<?php global $imIn;
$imIn++; ?>

<section class="p_home_im_in p_home_im_in-<?php echo $imIn; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="p_home_im_in__content">
        <a class="button-in _anim-items _anim-no-hide"
           href="<?php echo get_sub_field('button_link'); ?>"><?php echo get_sub_field('button_text'); ?></a>
    </div>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($imIn < 2): ?>
        <style>
            .p_home_im_in {
                background-color: <?php echo get_sub_field('section_background'); ?>;
                padding: 65px 20px 101px;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .p_home_im_in {
                    padding: 54px 20px 90px;
                }
            }

            .p_home_im_in .button-in {
                display: flex;
                width: 159px;
                height: 63px;
                padding: 20px ;
                justify-content: center;
                align-items: center;
                gap: 10px;
                color: #FFFCE9;
                text-align: center;
                text-shadow: 0 4px 14px rgba(251, 254, 255, 0.45);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 2px;
                text-transform: uppercase;
                border-radius: 30px;
                background: #FF7A00;
                box-shadow: 8px 4px 1px 0 #000;
                margin: 0 auto;
                opacity: 0;
                transform: translate(0, 150%);
                transition: all 0.8s ease 0s;
                position: static;
            }

            *:lang(ua-UA) .p_home_im_in .button-in {
                min-width: 159px;
                width: 100%;
                max-width: 252px;
            }

            .p_home_im_in .button-in:hover {
                background-color: #FF983A;;
            }

            .p_home_im_in .button-in:active {
                background-color: #307847;;
            }

            .p_home_im_in .button-in._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_home_im_in .divider {
                height: 36px;
                width: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
            }
        </style>
    <?php endif; ?>
</section>