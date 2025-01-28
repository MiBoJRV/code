<?php global $revolution;
$revolution++; ?>
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
        class="p_join_the_revolution p_join_the_revolution-<?php echo $revolution; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage2['url']; ?>');">
    <div class="content-wrap">
        <img class="bg-image" src="<?php echo $bgImage['url'] ?>" alt="<?php echo $bgImage['alt'] ?>"/>
        <div class="p_join_the_revolution__content">
            <div class="text-content">
                <img class="text-image" src="<?php echo $bgText['url'] ?>" alt="<?php echo $bgText['alt'] ?>"/>
                <!--        <h2>--><?php //echo get_sub_field('title'); ?><!--</h2>-->
                <!--        --><?php //echo get_sub_field('text'); ?>
            </div>
        </div>
    </div>
    <?php if ($revolution < 2): ?>
        <style>
            .p_join_the_revolution {
                position: relative;
                padding-top: 65px;
            }

            .p_join_the_revolution .content-wrap {
                max-width: 1920px;
                width: 100%;
                margin: 0 auto;
                position: relative;
            }

            .p_join_the_revolution .text-content {
                top: -223px;
                left: 215px;
                position: absolute;
                z-index: 10;
                height: auto;
            }

            @media only screen and (max-width: 1800px) {
                .p_join_the_revolution .text-content {
                    left: 0;
                }
            }

            @media only screen and (max-width: 1400px) {
                .p_join_the_revolution .text-content {
                    top: -297px;
                }
            }

            .p_join_the_revolution .text-content-2 {
                bottom: -221px;
                right: 223px;
                position: absolute;
                z-index: 10;
                height: auto;
            }

            .p_join_the_revolution .bg-image {
                position: relative;
                width: 100%;
                max-height: 927px;
                object-fit: contain;
            }

            .p_join_the_revolution .text-image {

            }

            .p_join_the_revolution .text-content h2 {
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

            .p_join_the_revolution .text-content p {
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
