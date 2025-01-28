<?php global $incredible;
$incredible++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_offers_incredible_deals p_offers_incredible_deals-<?php echo $incredible; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_offers_incredible_deals__content">
        <div class="text-block-wrap">
            <div class="text-block">
                <h2><?php echo get_sub_field('title'); ?></h2>
                <p><?php echo get_sub_field('text'); ?></p>
            </div>
        </div>
        <div class="image-block">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
    </div>
    <?php if ($incredible < 2): ?>
        <style>
            .p_offers_incredible_deals {
                position: relative;
                padding-top: 94px;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_incredible_deals {
                    margin-top: 90px;
                }
            }

            .p_offers_incredible_deals .text-block-wrap {
                max-width: 1318px;
                width: 100%;
                margin: 0 auto;
                /*padding: 0 20px;*/
                position: relative;
            }

            .p_offers_incredible_deals .text-block {
                position: absolute;
                top: 16px;
                max-width: 667px;
                padding: 0 20px;
            }

            @media only screen and (max-width: 1400px) {
                .p_offers_incredible_deals .text-block {
                    width: 50%;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_offers_incredible_deals .text-block {
                    width: 100%;
                    max-width: 100%;
                    position: static;
                    margin-bottom: 50px;
                }
            }

            .p_offers_incredible_deals h2 {
                color: #FFF;
                text-shadow: 8px 4px 1px #101010;
                font-family: 'Montserrat', sans-serif;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin-bottom: 33px;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_incredible_deals h2 {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 50px;
                }
            }

            .p_offers_incredible_deals p {
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_incredible_deals p {
                    font-size: 20px;
                    letter-spacing: 4px;
                }
            }

            .p_offers_incredible_deals .image-block {
                max-height: 751px;
                max-width: 1920px;
                margin: 0 auto;
                min-height: 751px;
                display: flex;
                align-items: flex-end;
            }

            @media only screen and (max-width: 991px) {
                .p_offers_incredible_deals .image-block {
                    min-height: auto;
                }
            }

            @media only screen and (max-width: 768px) {
                .p_offers_incredible_deals .image-block {
                    height: 299px;
                    width: 768px;
                }
            }

            .p_offers_incredible_deals .image-block img {
                height: 100%;
                width: 100%;
                /*min-height: 751px;*/
                /*object-fit: cover;*/
                /*height: 100%;*/
                /*width: 100%;*/
                object-fit: contain;
                position: relative;
                bottom: 0;
            }

        </style>
    <?php endif; ?>
</section>