<?php global $typesFFR;
$typesFFR++; ?>

<section
        class="ffr-types_section ffr-types_section-<?php echo $typesFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <?php if(get_sub_field('show_background') == 'Yes'):?>
        <div class="bg-image">
            <img class="desktop" src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/our_client_bg.webp" alt="#">
            <!--            <img class="mobile" src="--><?php //echo get_stylesheet_directory_uri() ?><!--/images/ffr/types_bg_m.webp" alt="#">-->
        </div>
    <?php endif; ?>

    <div class="ffr-types_section__content">
        <h2><?php echo get_sub_field('section_title'); ?></h2>
        <ul class="ffr-types-list">
            <?php if (have_rows('types_list_repeater')): ?>
                <?php while (have_rows('types_list_repeater')):
                    the_row(); ?>
                    <li class="ffr-types-list__item">
                        <?php $image = get_sub_field('icon');?>
                        <img class="item-icon" src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />


                        <?php if (get_sub_field('title') != ''): ?>

                            <h5> <?php echo get_sub_field('title'); ?></h5>

                        <?php endif; ?>
                        <p>
                            <?php echo get_sub_field('text'); ?>

                        </p>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>


        </ul>
    </div>
    <style>


        <?php if ($typesFFR < 2): ?>
        .ffr-types_section {
            position: relative;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 70px 0;
        <?php if(get_sub_field('show_background') == 'Yes'):?>
            /*background-image: url('*/<?php //echo get_template_directory_uri(); ?>/*/images/ffr/our_client_bg.webp');*/
            /*height: 2485px;*/
            /*margin-top: -1009px;*/
            /*margin-bottom: -300px;*/


        <?php endif; ?>
            z-index: 2;
        }
        <?php if(get_sub_field('show_background') == 'Yes'):?>

        .ffr-types_section .bg-image.mobile {
            display: none;
        }
        @media only screen and (max-width: 991px) {
            .ffr-types_section .bg-image.mobile {
                display: block;
            }
        }
        .ffr-types_section .bg-image {
            position: absolute;
            z-index: 1;
            top: -750px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 1920px;
        }

        @media only screen and (max-width: 1400px) {
            .ffr-types_section .bg-image {
                top: -550px;
            }
        }
        @media only screen and (max-width: 1100px) {
            .ffr-types_section .bg-image {
                top: -1050px;
            }
            .ffr-types_section .bg-image img {
                min-height: 2000px;
            }
        }

        @media only screen and (max-width: 700px) {
            .ffr-types_section .bg-image {
                top: -1000px;
            }
        }

        @media only screen and (max-width: 991px) {
            .ffr-types_section .bg-image.desktop {
                display: none;
            }
        }
        <?php endif; ?>
        /*@media only screen and (max-width: 991px) {*/
        /*    .ffr-types_section {*/
        /*    */<?php //if(get_sub_field('show_background') == 'Yes'):?>/* background-image: url('*/<?php //echo get_template_directory_uri(); ?>/*/images/ffr/types_bg_m.webp');*/
        /*    */<?php //endif; ?>
        /*    }*/
        /*}*/

        .ffr-types_section__content {
        <?php if(get_sub_field('show_background') == 'Yes'):?>
            /*padding-top: 1009px;*/
            position: relative;
            z-index: 9;
        <?php endif; ?>
        }

        .ffr-types_section h2 {
            margin: 0 15px 70px 15px;
        <?php if(get_sub_field('show_background') == 'Yes'):?> margin-top: 200px;
        <?php endif; ?> color: #FFF;
            font-size: 55px;
            font-style: normal;
            font-weight: 700;
            line-height: 61.6px;
            text-align: center;
        <?php if(get_sub_field('show_background') != 'Yes'):?> color: #333;;
        <?php endif; ?>
        }


        @media only screen and (max-width: 991px) {
            .ffr-types_section h2 {
                font-size: 40px;
                text-align: left;
                margin-top: 100px;
                margin-bottom: 30px;
            }
        }

        @media only screen and (max-width: 1200px) {
            .ffr-types_section {
                z-index: 3;
            }
        }

        @media only screen and (max-width: 991px) {
            .ffr-types_section {
                margin-top: 60px;
                margin-bottom: 0;
            }
        }

        .ffr-types_section .ffr-types-list {
            max-width: 1056px;
            margin: 0 auto;
            padding: 60px;
            border-radius: 10px;
            background: #FFF;
            box-shadow: 0 10px 60px 0 rgba(10, 45, 97, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr;
            gap: 33px;
            justify-content: space-between;
            align-items: center;
            justify-items: center;

        }

        @media only screen and (max-width: 991px) {
            .ffr-types_section .ffr-types-list {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                row-gap: 40px;
                margin: 0 10px;
            }
        }

        .ffr-types_section .ffr-types-list__item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 356px;
            width: 100%;
            padding: 0 10px;
        }

        @media only screen and (max-width: 1024px) {
            .ffr-types_section .ffr-types-list__item {
                width: calc(50% - 60px);
            }
        }

        @media only screen and (max-width: 991px) {
            .ffr-types_section .ffr-types-list__item {
                width: 100%;
                padding: 0;
            }
        }

        .ffr-types_section .ffr-types-list__item .item-icon {
            height: 100px;
        }

        .ffr-types_section .ffr-types-list__item h5 {
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: 25.2px;
            color: #333;
            margin: 30px 0 0 0;
        }

        .ffr-types_section .ffr-types-list__item p {
            font-size: 13px;
            font-style: normal;
            font-weight: 400;
            line-height: 25.2px;
            color: #666;
            height: 92px;
            margin: 30px 0 0 0;
        }

        @media only screen and (max-width: 1199px) {
            .ffr-types_section .ffr-types-list__item p {
                height: 100px;
            }
        }

        @media only screen and (max-width: 991px) {
            .ffr-types_section .ffr-types-list__item p {
                height: 100%;
            }
        }

        <?php endif; ?>
    </style>

</section>