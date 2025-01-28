<?php global $affiliates;
$affiliates++; ?>
<?php
$bgImage2 = get_sub_field('section_background');
?>
<?php
$bgImage = get_sub_field('section_background_image');
?>

<?php
$bgText = get_sub_field('text_background');
?>
<?php
$bgText2 = get_sub_field('text_background_2');
?>

<section
        class="p_for_affiliates p_for_affiliates-<?php echo $affiliates; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage2['url']; ?>');">
    <div class="content-wrap">
        <img class="bg-image" src="<?php echo $bgImage['url'] ?>" alt="<?php echo $bgImage['alt'] ?>"/>
        <div class="p_for_affiliates__content">
            <div class="text-content">
                <img class="text-image" src="<?php echo $bgText['url'] ?>" alt="<?php echo $bgText['alt'] ?>"/>

                <!--        <h2>--><?php //echo get_sub_field('title'); ?><!--</h2>-->
                <!--        --><?php //echo get_sub_field('text'); ?>
            </div>
            <div class="text-content-2">

                <img class="text-image" src="<?php echo $bgText2['url'] ?>" alt="<?php echo $bgText2['alt'] ?>"/>
                <!--        <h2>--><?php //echo get_sub_field('title_2'); ?><!--</h2>-->
                <!--        --><?php //echo get_sub_field('text_2'); ?>
            </div>
        </div>
    </div>
    <?php if ($affiliates < 2): ?>
        <style>
            .p_for_affiliates {
                position: relative;

            }

            .p_for_affiliates  .content-wrap {
                max-width: 1920px;
                width: 100%;
                margin: 0 auto;
                position: relative;
            }

            .p_for_affiliates .text-content {
                top: -326px;
                left: 321px;
                /*height: 100%;*/
                position: absolute;
                z-index: 10;
                height: auto;
            }


            @media only screen and (max-width: 1800px) {
                .p_for_affiliates .text-content {
                    left: 0;
                }
            }

            .p_for_affiliates .text-content-2 {
                bottom: -264px;
                right: 184px;
                position: absolute;
                z-index: 10;
                height: auto;
            }

            @media only screen and (max-width: 1800px) {
                .p_for_affiliates .text-content-2 {
                    right: 0;
                }
            }

            @media only screen and (max-width: 1400px) {
                .p_for_affiliates .text-content-2 {
                    bottom: -411px;
                }
            }

            .p_for_affiliates .bg-image {
                position: relative;
                width: 100%;
                max-height: 1267px;
                object-fit: contain;
                max-width: 1920px;
                margin: 0 auto;
                display: block;
            }

            .p_for_affiliates .text-image {

            }

            .p_for_affiliates .text-content h2 {
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

            .p_for_affiliates .text-content p {
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