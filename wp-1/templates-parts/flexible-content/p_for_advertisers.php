<?php global $advertisers;
$advertisers++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<?php
$bgText = get_sub_field('text_background');
?>
<section
        class="p_for_advertisers p_for_advertisers-<?php echo $advertisers; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="content-wrap">
        <div class="bg-image-wrap">
            <img class="bg-image" src="<?php echo $bgImage['url'] ?>" alt="<?php echo $bgImage['alt'] ?>"/>
        </div>
        <div class="p_for_advertisers__content">
            <div class="text-content">
                <img class="text-image" src="<?php echo $bgText['url'] ?>" alt="<?php echo $bgText['alt'] ?>"/>
                <!--        <h2>--><?php //echo get_sub_field('title'); ?><!--</h2>-->
                <!--        --><?php //echo get_sub_field('text'); ?>
            </div>
        </div>
    </div>
    <?php if ($advertisers < 2): ?>
        <style>
            .p_for_advertisers {
                position: relative;
                margin-bottom: -5px;
                background-image: url("<?php echo get_stylesheet_directory_uri() ?>/images/backstage-6.png");
            }

            .p_for_advertisers .content-wrap {
                max-width: 1920px;
                width: 100%;
                margin: 0 auto;
                position: relative;
            }
            .p_for_advertisers .bg-image {
                position: relative;
                width: 100%;
                max-height: 1050px;
                object-fit: contain;
            }

            .p_for_advertisers .text-content {
                bottom: -178px;
                /*right: 287px;*/
                height: 100%;
                position: absolute;
                z-index: 10;
                right: 15%;
            }

            @media only screen and (max-width: 1700px) {
                .p_for_advertisers .text-content {
                    right: 20px;
                    bottom: -75px;
                }
            }

            @media only screen and (max-width: 1200px) {
                .p_for_advertisers .text-content {
                    bottom: -395px;
                }
            }

            @media only screen and (max-width: 1200px) {
                .p_for_advertisers .bg-image-wrap {
                    min-height: 769px;
                    overflow: hidden;
                    max-height: 1050px;
                }

                .p_for_advertisers .bg-image {
                    max-width: 1409px;
                    height: auto;
                    width: 1409px;
                }
            }

            @media only screen and (max-width: 768px) {
                .p_for_advertisers .bg-image {
                    position: relative;
                    left: -47%;
                }
            }


            .p_for_advertisers .bg-image {
                position: relative;
            }


            @media only screen and (max-width: 1200px) {
                .p_for_advertisers .bg-image {
                    min-height: 769px;
                    object-fit: cover;
                }
            }


            .p_for_advertisers .text-content h2 {
                color: #231F20;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 36px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 3.6px;
                text-transform: uppercase;
            }

            .p_for_advertisers .text-content p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;
            }
        </style>
    <?php endif; ?>
</section>