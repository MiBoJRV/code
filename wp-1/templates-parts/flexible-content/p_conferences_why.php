<?php global $pConferencesWhy;
$pConferencesWhy++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_conferences_why p_conferences_why-<?php echo $pConferencesWhy; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_conferences_why__content">
        <div class="text _anim-items _anim-no-hide">
            <h2><?php echo get_sub_field('title'); ?></h2>
            <?php echo get_sub_field('text'); ?>
        </div>
        <div class="image">
            <?php $image = get_sub_field('image'); ?>
            <img class="sky" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
            <?php $image2 = get_sub_field('image_2'); ?>
            <img class="men _anim-items _anim-no-hide" src="<?php echo $image2['url'] ?>" alt="<?php echo $image2['alt'] ?>"/>
        </div>
    </div>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($pConferencesWhy < 2): ?>
        <style>
            .p_conferences_why {
                position: relative;
                z-index: 100;
            }

            .p_conferences_why .p_conferences_why__content {
                position: relative;
                max-height: 1321px;
                /*min-height: 1321px;*/
            }

            .p_conferences_why .text {
                padding: 50px;
                min-height: 469px;
                background: #ffffFF;
                max-width: 970px;
                width: 100%;
                position: absolute;
                top: 192px;
                left: 50%;

                z-index: 1;
                border-left: 5px solid #231F20;
                border-right: 10px solid #231F20;

                opacity: 0;
                transform: translate(-50%, -100%);
                transition: all 0.8s ease 0s;
            }

            .p_conferences_why .text._active{
                opacity: 1;
                transform: translate(-50%, 0);
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_why .text {
                    border-left: none;
                    border-right: none;
                    border-top: 5px solid #231F20;
                    border-bottom: 10px solid #231F20;
                    padding: 30px;
                }
            }
            @media only screen and (max-width: 480px) {
                .p_conferences_why .text {
                    padding: 30px 10px;
                }
            }

            .p_conferences_why h2 {
                color: #231F20;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 40px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;
                margin-bottom: 40px;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_why h2 {
                    font-size: 28px;
                    letter-spacing: 2.8px;
                    margin-bottom: 25px;
                }
            }

            .p_conferences_why p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                margin-bottom: 30px;
            }

            .p_conferences_why p:last-of-type {
                margin-bottom: 0;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_why p {
                    font-size: 16px;
                    letter-spacing: 3.2px;
                }
            }

            .p_conferences_why .sky {
                max-width: 1920px;
                margin: 0 auto;
                position: relative;
                left: 50%;
                width: 100%;
                transform: translate(-50%, 0);
                min-height: 1320px;
                object-fit: cover;
            }

            @media only screen and (max-width: 1400px) {
                .p_conferences_why .sky {
                    min-height: 1220px;
                }
            }
            @media only screen and (max-width: 1100px) {
                .p_conferences_why .sky {
                    min-height: 1120px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_why .sky {
                    min-height: 1070px;
                }
            }
            @media only screen and (max-width: 768px) {
                .p_conferences_why .sky {
                    min-height: 970px;
                }
            }
            @media only screen and (max-width: 480px) {
                .p_conferences_why .sky {
                    min-height: 830px;
                }
            }

            .p_conferences_why .men {
                max-width: 1920px;
                display: block;
                position: absolute;
                bottom: 36px;
                width: 100%;
                left: 50%;
                transform: translate(-50%, 0);
                z-index: 10;

                opacity: 0;
                transition: all 1s ease 0s;
            }

            .p_conferences_why .men._active{
                opacity: 1;
            }

            .p_conferences_why .divider {
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